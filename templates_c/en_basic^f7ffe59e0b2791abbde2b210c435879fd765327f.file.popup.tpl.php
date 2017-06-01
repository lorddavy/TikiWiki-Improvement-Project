<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:45:51
         compiled from "D:\xampp\htdocs\tiki\templates\trackeroutput\popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11194593036afe4eab4-53270268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ffe59e0b2791abbde2b210c435879fd765327f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackeroutput\\popup.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11194593036afe4eab4-53270268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popupFields' => 0,
    'field' => 0,
    'popupItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593036afe67914_32863130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593036afe67914_32863130')) {function content_593036afe67914_32863130($_smarty_tpl) {?><?php if (!is_callable('smarty_function_trackeroutput')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_function_popup')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.popup.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('popup', null, null); ob_start(); ?>
	<div class="panel panel-default">
		<table class="table table-bordered item">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['popupFields']->value)===null||$tmp==='' ? null : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
				 <tr><th><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['name']);?>
</th><td><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['field']->value,'item'=>$_smarty_tpl->tpl_vars['popupItem']->value,'showpopup'=>'n','showlinks'=>'n'),$_smarty_tpl);?>
</td></tr>
			<?php } ?>
		</table>
	</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo smarty_function_popup(array('text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['popup'],"javascript"),"html"),'fullhtml'=>"1",'hauto'=>true,'vauto'=>true,'trigger'=>"hover"),$_smarty_tpl);?>

<?php }} ?>
