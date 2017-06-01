<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:41
         compiled from "D:\xampp\htdocs\tiki\templates\tracker_calendar_over.tpl" */ ?>
<?php /*%%SmartyHeaderCode:852059303759b73bc5-30205373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c3bb8468f6b8447e3f1067906843d37b82d23a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker_calendar_over.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852059303759b73bc5-30205373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'overs' => 0,
    'over' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59303759b7ec22_32100359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59303759b7ec22_32100359')) {function content_59303759b7ec22_32100359($_smarty_tpl) {?>
<div class="opaque calBox"><?php if (!empty($_smarty_tpl->tpl_vars['overs']->value)) {?><ul><?php  $_smarty_tpl->tpl_vars['over'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['over']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['overs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['over']->key => $_smarty_tpl->tpl_vars['over']->value) {
$_smarty_tpl->tpl_vars['over']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['over']->value;?>
</li><?php } ?></ul></div><?php }?>
<?php }} ?>
