<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:15:23
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-wizard_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38655936aaeb0fb2d1-62828659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdbdf4ef225f19fe2e0d492c1fe816125d227346' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-wizard_admin.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
    'eb7a37f62f20739cb84dbd1d87f76753ae9e8066' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\layout_plain.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    'db921b25acfc32b393601b58f92d4fef3100269a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\wizard\\wizard_bar_admin.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38655936aaeb0fb2d1-62828659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936aaeb1fe4f2_02819745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936aaeb1fe4f2_02819745')) {function content_5936aaeb1fe4f2_02819745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.feedback.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
	<head>
		<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
		<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>

		
		<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
			<div class="row">
				<div class="col-md-12">
					<?php echo smarty_function_modulelist(array('zone'=>'top'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12" id="col1">
					
	

					
					<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

					
	<form action="tiki-wizard_admin.php" method="post">
	<div class="col-sm-12">
		<?php /*  Call merged included template "wizard/wizard_bar_admin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '38655936aaeb0fb2d1-62828659');
content_5936aaeb17e607_96722962($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wizard/wizard_bar_admin.tpl" */?>
	</div>
	<div id="wizardBody">
	<div class="row">
		<?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>
			<div class="col-sm-4">
				<h3 class="adminWizardTOCTitle"><?php if ($_smarty_tpl->tpl_vars['useDefaultPrefs']->value) {?>Profiles Wizard<?php } elseif ($_smarty_tpl->tpl_vars['useUpgradeWizard']->value) {?>Upgrade Wizard<?php } else { ?>Configuration Wizard<?php }?> - steps:</h3>
				<ol>
					<?php echo $_smarty_tpl->tpl_vars['wizard_toc']->value;?>

				</ol>
			</div>
		<?php }?>
		<div class="<?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>col-sm-8<?php } else { ?>col-sm-12<?php }?>">
			<?php echo $_smarty_tpl->tpl_vars['wizardBody']->value;?>

		</div>
	</div>
	</div>
	<?php /*  Call merged included template "wizard/wizard_bar_admin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '38655936aaeb0fb2d1-62828659');
content_5936aaeb17e607_96722962($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "wizard/wizard_bar_admin.tpl" */?>
	</form>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12 well">
					<?php echo smarty_function_modulelist(array('zone'=>'bottom'),$_smarty_tpl);?>

				</div>
			</div>
		</div>

		<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html>
<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:15:23
         compiled from "D:\xampp\htdocs\tiki\templates\wizard\wizard_bar_admin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5936aaeb17e607_96722962')) {function content_5936aaeb17e607_96722962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?>

<div class="row form-group">
	<div class="col-sm-8">
	<?php if (!isset($_smarty_tpl->tpl_vars['showOnLoginDisplayed']->value)||$_smarty_tpl->tpl_vars['showOnLoginDisplayed']->value!='y') {?>
		<input type="checkbox" name="showOnLogin" <?php if (isset($_smarty_tpl->tpl_vars['showOnLogin']->value)&&$_smarty_tpl->tpl_vars['showOnLogin']->value==true) {?>checked="checked"<?php }?> /> Show on admin login
		<?php $_smarty_tpl->tpl_vars["showOnLoginDisplayed"] = new Smarty_variable("y", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["showOnLoginDisplayed"] = clone $_smarty_tpl->tpl_vars["showOnLoginDisplayed"]; $_ptr = $_ptr->parent; }?>
	<?php } else { ?>
		&nbsp;
	<?php }?>
	</div>&nbsp;&nbsp;
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_feature']=="y") {?>
		<?php if (!isset($_smarty_tpl->tpl_vars['provideFeedback']->value)||$_smarty_tpl->tpl_vars['provideFeedback']->value!='y') {?>
			<?php $_smarty_tpl->_capture_stack[0][] = array('likeicon', null, null); ob_start();
echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<label>
				<input type="checkbox" id="connect_feedback_cbx" <?php if (!empty($_smarty_tpl->tpl_vars['connect_feedback_showing']->value)) {?>checked="checked"<?php }?>>
				Provide Feedback
				<a href="http://doc.tiki.org/Connect" target="tikihelp" class="tikihelp" title="Provide Feedback:
					Once selected, some icon/s will be shown next to all features so that you can provide some on-site feedback about them.
					<br/><br/>
					<ul>
						<li>Icon for 'Like' <?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['likeicon']);?>
</li>
<!--					<li>Icon for 'Fix me' <img src=img/icons/connect_fix.png></li> -->
<!--					<li>Icon for 'What is this for?' <img src=img/icons/connect_wtf.png></li> -->
					</ul>
					<br/>
					Your votes will be sent when you connect with mother.tiki.org (currently only by clicking the 'Connect > <strong>Send Info</strong>' button)
					<br/><br/>
					Click to read more
				">
					<?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>

				</a>
			</label>
			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-connect.js");?>


			<?php $_smarty_tpl->tpl_vars["provideFeedback"] = new Smarty_variable("y", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["provideFeedback"] = clone $_smarty_tpl->tpl_vars["provideFeedback"]; $_ptr = $_ptr->parent; }?>
		<?php } else { ?>
			&nbsp;
		<?php }?>
	<?php }?>
</div>

<div class="row form-group">
	<div class="col-sm-2 pull-right">
		<input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['homepageUrl']->value;?>
">
		<input type="hidden" name="wizard_step" value="<?php echo $_smarty_tpl->tpl_vars['wizard_step']->value;?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['useDefaultPrefs']->value)) {?>
			<input type="hidden" name="use-default-prefs" value="<?php echo $_smarty_tpl->tpl_vars['useDefaultPrefs']->value;?>
">
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['useUpgradeWizard']->value)) {?>
			<input type="hidden" name="use-upgrade-wizard" value="<?php echo $_smarty_tpl->tpl_vars['useUpgradeWizard']->value;?>
">
		<?php }?>
		<div class="margin-bottom-sm clearfix">
			<?php if (!isset($_smarty_tpl->tpl_vars['firstWizardPage']->value)) {?><input type="submit" class="btn btn-default" name="back" title="Return to previous page" value="Back" /><?php }?>
			<input type="submit" class="btn btn-warning"  style="float:right;" name="close" title="Leave the Wizard" value="Close" />
		</div>
		<input type="submit" class="btn btn-success btn-block" name="<?php if (isset($_smarty_tpl->tpl_vars['firstWizardPage']->value)) {?>use-default-prefs<?php } else { ?>continue<?php }?>" value="<?php if (isset($_smarty_tpl->tpl_vars['lastWizardPage']->value)) {?>Finish<?php } elseif (isset($_smarty_tpl->tpl_vars['firstWizardPage']->value)) {?>Start<?php } else {
if ($_smarty_tpl->tpl_vars['isEditable']->value==true) {?>Save and Continue<?php } else { ?>Next<?php }
}?>" />
				&nbsp;&nbsp;&nbsp;

	</div>
	<div class="col-sm-8 text-center">
		<?php if (!isset($_smarty_tpl->tpl_vars['showWizardPageTitle']->value)||$_smarty_tpl->tpl_vars['showWizardPageTitle']->value!='y') {?>
			<h1 class="adminWizardPageTitle"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h1>
			<?php $_smarty_tpl->tpl_vars["showWizardPageTitle"] = new Smarty_variable("y", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["showWizardPageTitle"] = clone $_smarty_tpl->tpl_vars["showWizardPageTitle"]; $_ptr = $_ptr->parent; }?>
		<?php }?>
	</div>
	<div class="col-sm-2 pull-right">
	</div>
</div>
<?php }} ?>
