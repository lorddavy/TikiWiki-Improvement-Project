<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:45:51
         compiled from "D:\xampp\htdocs\tiki\templates\tracker_actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10319593036afc5c541-36412967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92bc32c0ff7612659a9e7b041b4a2c76cb96286d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker_actions.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10319593036afc5c541-36412967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin_trackers' => 0,
    'trackerId' => 0,
    'tiki_p_list_trackers' => 0,
    'prefs' => 0,
    'tiki_p_view_trackers' => 0,
    'showitems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593036afc856f6_51706378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593036afc856f6_51706378')) {function content_593036afc856f6_51706378($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.sefurl.php';
?>

<div class="btn-group">

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&!empty($_smarty_tpl->tpl_vars['trackerId']->value)) {?>
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Properties
	</a>
	<a class="btn btn-default" href="tiki-admin_tracker_fields.php?trackerId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<?php echo smarty_function_icon(array('name'=>"th-list"),$_smarty_tpl);?>
 Fields
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value=='y') {?>
	<a class="btn btn-default" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>trackers<?php } else { ?>tiki-list_trackers.php<?php }?>">
		<?php echo smarty_function_icon(array('name'=>"trackers"),$_smarty_tpl);?>
 Trackers
	</a>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['trackerId']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y'&&(empty($_smarty_tpl->tpl_vars['showitems']->value)||$_smarty_tpl->tpl_vars['showitems']->value!=='n')) {?>
	<a class="btn btn-default" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,"tracker");?>
">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Items
	</a>
<?php }?>

</div>
<?php }} ?>
