<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 16:36:00
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-admin_menu_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31218594149d0edd813-40314415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71f64df96b216e89a934bfdf658e8bf4fa17df1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-admin_menu_options.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31218594149d0edd813-40314415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editable_menu_info' => 0,
    'tiki_p_edit_menu' => 0,
    'menuId' => 0,
    'cant_pages' => 0,
    'channels' => 0,
    'find' => 0,
    'prefs' => 0,
    'sort_mode' => 0,
    'offset' => 0,
    'js' => 0,
    'numbercol' => 0,
    'maxRecords' => 0,
    'nbRecords' => 0,
    'it' => 0,
    'libeg' => 0,
    'liend' => 0,
    'optionId' => 0,
    'editname' => 0,
    'name' => 0,
    'url' => 0,
    'type' => 0,
    'position' => 0,
    'option_groups' => 0,
    'k' => 0,
    'i' => 0,
    'ctrlMsg' => 0,
    'section' => 0,
    'perm' => 0,
    'class' => 0,
    'level' => 0,
    'levn' => 0,
    'userlevel' => 0,
    'lev' => 0,
    'icon' => 0,
    'preview_type' => 0,
    'preview_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_594149db6ac498_76816647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594149db6ac498_76816647')) {function content_594149db6ac498_76816647($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_block_tabset')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tab.php';
if (!is_callable('smarty_function_select_all')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.self_link.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.truncate.php';
if (!is_callable('smarty_function_popup')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.popup.php';
if (!is_callable('smarty_function_norecords')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.pagination_links.php';
if (!is_callable('smarty_modifier_sefurl')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.sefurl.php';
if (!is_callable('smarty_function_autocomplete')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_block_remarksbox')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_menu')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.menu.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Menu: <?php echo $_smarty_tpl->tpl_vars['editable_menu_info']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<a class="btn btn-link" href="tiki-admin_menus.php">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 List Menus
	</a>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {?>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'manage_menu','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit This Menu
		</a>
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'export_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
"
		   title="Export menu options">
			<?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export
		</a>
		<a class="btn btn-default no-ajax"
		   href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'import_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
"
		   title="Import menu options">
			<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
		</a>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_menu_options")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_menu_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name']))); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div>
		<a id="options"></a>

		<h2>Menu options <span class="badge"><?php echo $_smarty_tpl->tpl_vars['cant_pages']->value;?>
</span></h2>
		<?php if ($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!='')) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y'), 0);?>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<form method="get" action="tiki-admin_menu_options.php">
			<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
			<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
			<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">

			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
				<table class="table table-striped table-hover">
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(0, null, 0);?>
					<tr>
						<th>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
								<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

							<?php }?>
						</th>
						<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'optionId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'optionId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'optionId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'position')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'position'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Position<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'position'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'type')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y') {?>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'userlevel')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userlevel'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Level<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userlevel'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php }?>
						<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						<th></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
						<tr>
							<td class="checkbox-cell">
								<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId']);?>
"
									   <?php if ($_REQUEST['checked']&&in_array($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'],$_REQUEST['checked'])) {?>checked="checked"<?php }?>>
							</td>
							<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
</td>
							<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['position'];?>
</td>
							<td class="text">
								<a
									href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;optionId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;
if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?>&amp;nbRecords=<?php echo $_smarty_tpl->tpl_vars['nbRecords']->value;
}?>"
								   class="tips"
								   title=":Edit"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
</a>
											<span class="help-block">
												<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['url']) {?>
													URL:
													<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['sefurl']);?>
"
													   class="link tips" target="_blank"
													   title=":<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['canonic']);?>
"><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['canonic'],40,' ...'));?>
</a>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['section']) {?>
													<br>
													Sections: <?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['section'];
}?>
												<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['perm']) {?>
													<br>
													Permissions: <?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['perm'];
}?>
												<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupname']) {?>
													<br>
													Groups: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupname']);
}?>
												<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['class']) {?>
													<br>
													Class: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['class']);
}?>
											</span>
							</td>
							<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type_description'];?>
</td>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y') {?>
								<?php $_smarty_tpl->tpl_vars['it'] = new Smarty_variable($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userlevel'], null, 0);?>
								<td><?php echo $_smarty_tpl->tpl_vars['prefs']->value['userlevels'][$_smarty_tpl->tpl_vars['it']->value];?>
</td>
							<?php }?>

							<td class="action">
								<?php $_smarty_tpl->_capture_stack[0][] = array('menu_options_actions', null, null); ob_start(); ?>
									<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['user']['first']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;up=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;
if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?>&amp;nbRecords=<?php echo $_smarty_tpl->tpl_vars['nbRecords']->value;
}?>#options"><?php echo smarty_function_icon(array('name'=>"up",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Switch with previous option"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if (!$_smarty_tpl->getVariable('smarty')->value['section']['user']['last']) {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;down=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;
if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?>&amp;nbRecords=<?php echo $_smarty_tpl->tpl_vars['nbRecords']->value;
}?>#options"><?php echo smarty_function_icon(array('name'=>"down",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Switch with next option"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;optionId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;
if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?>&amp;nbRecords=<?php echo $_smarty_tpl->tpl_vars['nbRecords']->value;
}?>#contentadmin_menu_options-2"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
&amp;offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['optionId'];?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;
if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?>&amp;nbRecords=<?php echo $_smarty_tpl->tpl_vars['nbRecords']->value;
}?>"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
								<a
									class="tips"
									title="Actions"
									href="#"
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['menu_options_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['menu_options_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
						</tr>
						<?php endfor; else: ?>
						<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value),$_smarty_tpl);?>

					<?php endif; ?>
				</table>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
				<div align="left">
					Perform action with checked:
					<input type="image" name="delsel" src='img/icons/cross.png' alt="Delete"
						   title="Delete">
				</div>
			<?php }?>
		</form>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (empty($_smarty_tpl->tpl_vars['optionId']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['editname'] = new Smarty_variable("Create menu option", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['editname'] = new Smarty_variable("Edit menu option", null, 0);?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['editname']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['editname']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div>
		<h2><?php echo $_smarty_tpl->tpl_vars['editname']->value;?>
</h2>

		<div style="text-align:right;position:relative;">
			<div id="weburlslink">
				<a href="#" onclick="flip('weburls');return false;">Show Quick URLs</a>
			</div>
			<div id="weburls" style="display:none;position:absolute;right:-10px;top:-50px;z-index:1;"
				 class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" id="urltop">Some useful URLs</h3>
					<div style="text-align: right;">
						<a href="#" class="hide_weburls" style="color:inherit; font-size: 85%" onclick="flip('weburls');return false;">Hide Quick URLs</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-5" for="wikilinks1">Home:</label>

							<div class="col-md-7">
								<select class="form-control" name="wikilinks" id="wikilinks1"
										onchange="setMenuCon(options[selectedIndex].value);return true;">
									<option value=",,,">Choose ...</option>
									<option value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'];?>
,Home Page">Home Page</option>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_blog']) {?>
										<option
										value="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_blog'],'blog');?>
,Home Blog,feature_blogs,tiki_p_view_blogs">Home Blog</option><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_gallery']) {?>
										<option
										value="tiki-browse_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_gallery'];?>
,Home Image Gal,feature_galleries,tiki_p_view_image_gallery">Home Image Gallery</option><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery']) {?>
									<option
									value="tiki-list_file_gallery?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'];?>
,Home File Gal,feature_file_galleries,tiki_p_view_file_gallery">Home File Gallery</option><?php }?>
									]
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-5" for="wikilinks2">General: </label>

							<div class="col-md-7">
								<select class="form-control" name="wikilinks" id="wikilinks2"
										onchange="setMenuCon(options[selectedIndex].value);return true;">
									<option value=",,,">Choose ...</option>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_stats']=='y') {?>
										<option
										value="tiki-stats.php,Stats,feature_stats,tiki_p_view_stats">Stats</option><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
										<option
										value="tiki-browse_categories.php,Categories,feature_categories,tiki_p_view_category">Categories</option><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y') {?>
										<option
										value="tiki-user_preferences.php,User preferences">User prefs</option><?php }?>
								</select>
							</div>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks3">Wiki: </label>

								<div class="col-md-7">
									<select class="form-control" name="wikilinks" id="wikilinks3"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-index.php,Wiki Home,feature_wiki,tiki_p_view">Wiki Home</option>
										<option value="tiki-lastchanges.php,Latest Changes,feature_lastChanges,tiki_p_view">Latest Changes</option>
										<option value="tiki-wiki_rankings.php,Rankings,feature_wiki_rankings,tiki_p_view">Rankings</option>
										<option value="tiki-listpages.php,List pages,feature_listPages,tiki_p_view">List pages</option>
										<option value="tiki-index.php?page=SandBox,Sandbox,feature_sandbox,tiki_p_view">Sandbox</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks4">Images: </label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks4" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-galleries.php,List galleries,feature_galleries,tiki_p_view_image_gallery">List image galleries</option>
										<option value="tiki-upload_image.php,Upload image,feature_galleries,tiki_p_upload_images">Upload</option>
										<option value="tiki-galleries_rankings.php,Gallery Rankings,feature_gal_rankings,tiki_p_view_image_gallery">Rankings</option>
										<option value="tiki-browse_gallery.php?galleryId=,Browse a gallery,feature_galleries,tiki_p_view_image_gallery">Browse a gallery</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks5">Articles: </label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks5" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-view_articles.php,Articles,feature_articles,tiki_p_read_article">Articles home</option>
										<option value="tiki-list_articles.php,All articles,feature_articles,tiki_p_read_article">List articles</option>
										<option value="tiki-cms_rankings.php,Rankings,feature_cms_rankings,tiki_p_read_article">Rankings</option>
										<option value="tiki-edit_submission.php,Submit,feature_submissions,tiki_p_submit_article">Submit</option>
										<option value="tiki-list_submissions.php,Submissions,feature_submissions,tiki_p_approve_submission">Submissions</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks6">Blogs:</label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks6" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-list_blogs.php,List Blogs,feature_blogs,tiki_p_read_blog">List Blogs</option>
										<option value="tiki-blog_rankings.php,Rankings,feature_blog_rankings,tiki_p_read_blog">Rankings</option>
										<option value="tiki-edit_blog.php,Create Blog,feature_blogs,tiki_p_create_blogs">Create Blog</option>
										<option value="tiki-blog_post.php,Post,feature_blogs,tiki_p_blog_post">Post</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks7">Files: </label>

								<div class="col-md-7">
									<select id="wikilinks7" class="form-control" name="wikilinks"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-list_file_gallery.php,File Galleries,feature_file_galleries,tiki_p_view_file_gallery">File Galleries</option>
										<option value="tiki-upload_file.php,Upload file,feature_file_galleries,tiki_p_upload_files">Upload file</option>
										<option value="tiki-file_galleries_rankings.php,Rankings,feature_file_galleries_rankings,tiki_p_view_file_gallery">Rankings</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks8">Forums: </label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks8" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-forums.php,Forums,feature_forums,tiki_p_forum_read">Forums</option>
										<option value="tiki-view_forum.php?forumId=,View a forum,feature_forums,tiki_p_forum_read">View a forum</option>
										<option value="tiki-view_forum_thread.php?forumId=&amp;comments_parentId=,View a thread,feature_forums,tiki_p_forum_read">View a thread</option>
										8
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks9">FAQs: </label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks9" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-list_faqs.php,FAQs,feature_faqs,tiki_p_view_faqs">FAQs</option>
										<option value="tiki-view_faq.php?faqId=,View a FAQ,feature_faqs,tiki_p_view_faqs">View a FAQ</option>
									</select>
								</div>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=='y') {?>
							<div class="form-group">
								<label class="control-label col-md-5" for="wikilinks10">Quizzes: </label>

								<div class="col-md-7">
									<select name="wikilinks" id="wikilinks10" class="form-control"
											onchange="setMenuCon(options[selectedIndex].value);return true;">
										<option value=",,,">Choose ...</option>
										<option value="tiki-list_quizzes.php,Quizzes,feature_quizzes">Quizzes</option>
										<option value="tiki-take_quiz.php?quizId=,Take a quiz,feature_quizzes">Take a quiz</option>
										<option value="tiki-quiz_stats.php,Quiz stats,feature_quizzes,tiki_p_view_quiz_stats">Quiz stats</option>
										<option value="tiki-quiz_stats_quiz.php?quizId=,Stats for a Quiz,feature_quizzes,tiki_p_view_quiz_stats">Stats for a Quiz</option>
									</select>
								</div>
							</div>
						<?php }?>

					</div>
				</div>
			</div>
		</div>

		
		<form action="tiki-admin_menu_options.php" method="post">
			<input type="hidden" name="optionId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['optionId']->value);?>
">
			<input type="hidden" name="menuId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['menuId']->value);?>
">
			<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
			<?php if (!empty($_smarty_tpl->tpl_vars['nbRecords']->value)) {?><input type="hidden" name="nbRecords"
										  value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['nbRecords']->value);?>
"><?php }?>
			<div class="form form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_name">Name:</label>

					<div class="col-md-9">
						<input id="menu_name" class="form-control" type="text" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_url">URL:</label>

					<div class="col-md-9">
						<?php $_smarty_tpl->_capture_stack[0][] = array('options', null, null); ob_start(); ?>select:function(event,ui){ui.item.value='(('+ui.item.value+'))';}<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo smarty_function_autocomplete(array('element'=>"#menu_url",'type'=>'pagename','options'=>Smarty::$_smarty_vars['capture']['options']),$_smarty_tpl);?>

						<input id="menu_url" type="text" name="url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['url']->value);?>
" class="form-control">

						<div class="help-block">For wiki page, use ((PageName)).</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="type">Type:</label>

					<div class="col-md-9">
						<select name="type" class="form-control">
							<option value="o" <?php if ($_smarty_tpl->tpl_vars['type']->value=='o') {?>selected="selected"<?php }?>>option</option>
							<option value="s"
									<?php if ($_smarty_tpl->tpl_vars['type']->value=='s') {?>selected="selected"<?php }?>>section level 0</option>
							<option value='1'
									<?php if ($_smarty_tpl->tpl_vars['type']->value=='1') {?>selected="selected"<?php }?>>section level 1</option>
							<option value='2'
									<?php if ($_smarty_tpl->tpl_vars['type']->value=='2') {?>selected="selected"<?php }?>>section level 2</option>
							<option value='3'
									<?php if ($_smarty_tpl->tpl_vars['type']->value=='3') {?>selected="selected"<?php }?>>section level 3</option>
							<option value="r"
									<?php if ($_smarty_tpl->tpl_vars['type']->value=='r') {?>selected="selected"<?php }?>>sorted section level 0</option>
							<option value="-" <?php if ($_smarty_tpl->tpl_vars['type']->value=='-') {?>selected="selected"<?php }?>>separator</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="position">Position:</label>

					<div class="col-md-9">
						<input type="text" name="position" id="position" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['position']->value);?>
"
							   class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_groupname">Group:</label>

					<div class="col-md-9">
						<select id="menu_groupname" name="groupname[]" class="form-control margin-bottom-md" multiple="multiple">
							<option value="">&nbsp;</option>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
" <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
</option><?php } ?>
						</select>
						<?php if (count($_smarty_tpl->tpl_vars['option_groups']->value)>='2') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {
$_smarty_tpl->tpl_vars['ctrlMsg'] = new Smarty_variable("Use Ctrl+Click to select multiple options<br>", null, 0);
}?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['ctrlMsg']->value;?>
Selecting 2 groups means that the option will be seen if the user belongs to the 2 groups. If you want the 2 groups to see the option, create 2 options with one group each.
								<br>
							If the url is ((PageName)), you do not need to put the groups, the option will be displayed only if the page can be displayed.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_section">Sections:</label>

					<div class="col-md-9">
						<input id="menu_section" type="text" name="section" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['section']->value);?>
"
							   class="form-control"><br>
						<?php echo smarty_function_autocomplete(array('element'=>"#menu_section",'type'=>"array",'options'=>"source:prefNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

						<div class="help-block">Separate multiple feature/preferences with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_perm">Permissions:</label>

					<div class="col-md-9">
						<input id="menu_perm" type="text" name="perm" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['perm']->value);?>
" class="form-control"><br>
						<?php echo smarty_function_autocomplete(array('element'=>"#menu_perm",'type'=>"array",'options'=>"source:permNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

						<div class="help-block">Separate multiple permissions with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3" for="menu_class">Class:</label>

					<div class="col-md-9">
						<input id="menu_class" type="text" name="class" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['class']->value);?>
"
							   class="form-control"><br>

						<div class="help-block">Input an HTML class value for the menu option. Separate with a space for multiple classes.</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-3" for="level">Level:</label>

						<div class="col-md-9">
							<select name="level" id="level">
								<option value="0"<?php if ($_smarty_tpl->tpl_vars['level']->value==0) {?> selected="selected"<?php }?>>All</option>
								<?php  $_smarty_tpl->tpl_vars['lev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lev']->_loop = false;
 $_smarty_tpl->tpl_vars['levn'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['userlevels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lev']->key => $_smarty_tpl->tpl_vars['lev']->value) {
$_smarty_tpl->tpl_vars['lev']->_loop = true;
 $_smarty_tpl->tpl_vars['levn']->value = $_smarty_tpl->tpl_vars['lev']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['userlevel']->value==$_smarty_tpl->tpl_vars['levn']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option><?php } ?>
							</select>
						</div>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y') {?>
					<div class="form-group">
						<label class="control-label col-md-3" for="icon">Icon:</label>

						<div class="col-md-9">
							<input type="text" name="icon" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['icon']->value);?>
" class="form-control">
						</div>
					</div>
				<?php }?>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-primary btn-sm" name="save" value="Save">
				</div>
			</div>
		</form>

	</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['editname']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Preview")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Preview"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<h2>Preview menu</h2>
	<form action="tiki-admin_menu_options.php" class="form-inline">
		<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
		<div class="form-group">
			<label for="preview_type" class="control-label">Type:</label>
			<select id="preview_type" class="form-control" name="preview_type" onchange="this.form.submit()">
				<option value="vert"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value=='vert') {?> selected<?php }?>>Vertical</option>
				<option value="horiz"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value=='horiz') {?> selected<?php }?>>Horizontal</option>
			</select>
		</div>
		<div class="checkbox">
			<label for="preview_css">
			<input type="checkbox" id="preview_css" name="preview_css"
			   onchange="this.form.submit()"<?php if ($_smarty_tpl->tpl_vars['preview_css']->value=='y') {?> checked="checked"<?php }?>>
				CSS</label>
		</div>
	</form>

	<h2>Smarty Code</h2>
	<pre id="preview_code">
	{menu id=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
 css=<?php echo $_smarty_tpl->tpl_vars['preview_css']->value;?>
 type=<?php echo $_smarty_tpl->tpl_vars['preview_type']->value;?>
}</pre>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['editable_menu_info']->value['name']);?>
</h3>
		</div>
		<div class="panel-body clearfix">
			<?php echo smarty_function_menu(array('id'=>$_smarty_tpl->tpl_vars['menuId']->value,'css'=>$_smarty_tpl->tpl_vars['preview_css']->value,'type'=>$_smarty_tpl->tpl_vars['preview_type']->value),$_smarty_tpl);?>

		</div>
	</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Preview"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_menu_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
