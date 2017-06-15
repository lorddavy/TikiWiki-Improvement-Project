<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:56:03
         compiled from "D:\xampp\htdocs\tiki\templates\error_raw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89615936b473521a38-12284188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e5df558951ed6b526cb10a793370f17157e2ab' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\error_raw.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89615936b473521a38-12284188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b47356a9f9_12761698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b47356a9f9_12761698')) {function content_5936b47356a9f9_12761698($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
<table dir="rtl" ><tr><td>
<?php }?>

<div id="tiki-mid">
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php echo smarty_function_icon(array('name'=>'error','alt'=>"Error",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
 Error
		</div>
		<div class="panel-body">
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y') {?>
</td></tr></table>
<?php }?>
<?php }} ?>
