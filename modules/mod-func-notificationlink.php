<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-notificationlink.php 57960 2016-03-17 20:01:11Z jonnybradley $ 

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

/**
 * @return array
 */
function module_notificationlink_info()
{
	return array(
		'name' => tra('Notifications Link'),
		'description' => tra('Shows an icon with the number of and a link to user notifications'),
		'prefs' => array('monitor_enabled'),
		'params' => array(),
	);
}
