<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Formatter.php 60932 2017-01-19 08:14:12Z kroky6 $

class Search_Formatter
{
	private $plugin;
	private $subFormatters = array();
	private $customFilters = array();
	private $alternateOutput;

	function __construct(Search_Formatter_Plugin_Interface $plugin)
	{
		$this->plugin = $plugin;
	}

	function setAlternateOutput($output)
	{
		$this->alternateOutput = $output;
	}

	function addSubFormatter($name, $formatter)
	{
		$this->subFormatters[$name] = $formatter;
	}

	function addCustomFilter($field) {
		$this->customFilters[] = $field;
	}

	function format($list)
	{
		if (0 == count($list) && $this->alternateOutput) {
			return $this->renderFilters() . $this->alternateOutput;
		}

		$list = $this->getPopulatedList($list);
		return $this->renderFilters()
			. $this->render($this->plugin, $list, Search_Formatter_Plugin_Interface::FORMAT_WIKI);
	}

	function getPopulatedList($list, $preload = true)
	{
		$list = Search_ResultSet::create($list);
		$defaultValues = $this->plugin->getFields();

		$fields = array_keys($defaultValues);
		$subDefault = array();
		foreach ($this->subFormatters as $key => $plugin) {
			$subDefault[$key] = $plugin->getFields();
			$fields = array_merge($fields, array_keys($subDefault[$key]));
		}

		$data = array();

		$enableHighlight = in_array('highlight', $fields);
		foreach ($list as $pre) {
			if( $preload ) {
				foreach ($fields as $f) {
					if (isset($pre[$f])) {
						$pre[$f]; // Dynamic loading if applicable
					}
				}
			}

			$row = array_filter($defaultValues, 'strlen');
			// Clear blank values so the defaults prevail
			foreach ($pre as $k => $value) {
				if ($value !== '' && $value !== null) {
					$row[$k] = $value;
				}
			}
			if ($enableHighlight) {
				$row['highlight'] = $list->highlight($row);
			}

			$subEntries = array();
			foreach ($this->subFormatters as $key => $plugin) {
				$subInput = new Search_Formatter_ValueFormatter(array_merge($subDefault[$key], $row));
				$subEntries[$key] = $this->render($plugin, Search_ResultSet::create(array($plugin->prepareEntry($subInput))), $this->plugin->getFormat(), $list);
			}

			$row = array_merge($row, $subEntries);

			$data[] = $this->plugin->prepareEntry(new Search_Formatter_ValueFormatter($row));
		}

		return $list->replaceEntries($data);
	}

	public function renderFilters() {
		$trklib = TikiLib::lib('trk');
		$fields = array();
		foreach ($this->customFilters as $fieldName) {
			$field = $trklib->get_field_by_perm_name(str_replace('tracker_field_', '', $fieldName));
			if ($field) {
				$field['ins_id'] = "ins_".$field['fieldId'];
				$handler = $trklib->get_field_handler($field);
				$field = array_merge($field, $handler->getFieldData($_REQUEST));
				// TODO: refactor field handler to not require calling this twice to fit in the request data
				$handler = $trklib->get_field_handler($field);
				$field['renderedInput'] = $handler->renderInput();
				$fields[] = $field;
			} else {
				// non-tracker field in the index
				$fields[] = array(
					'fieldId' => 0,
					'name' => $fieldName,
					'value' => $_REQUEST['ins_'.$fieldName]
				);
			}
		}

		if ($fields) {
			$smarty = TikiLib::lib('smarty');
			$smarty->assign('filterFields', $fields);
			return '~np~' . $smarty->fetch('templates/search/list/filter.tpl') . '~/np~';
		}

		return '';
	}

	private function render($plugin, $resultSet, $target)
	{
		$pluginFormat = $plugin->getFormat();
		$rawOutput = $plugin->renderEntries($resultSet);

		if ($target == $pluginFormat) {
			$out = $rawOutput;
		} elseif ($target == Search_Formatter_Plugin_Interface::FORMAT_WIKI && $pluginFormat == Search_Formatter_Plugin_Interface::FORMAT_HTML) {
			$out = "~np~$rawOutput~/np~";
		} elseif ($target == Search_Formatter_Plugin_Interface::FORMAT_HTML && $pluginFormat == Search_Formatter_Plugin_Interface::FORMAT_WIKI) {
			$out = "~/np~$rawOutput~np~";
		}

		$out = str_replace(array('~np~~/np~', '~/np~~np~'), '', $out);
		return $out;
	}
}

