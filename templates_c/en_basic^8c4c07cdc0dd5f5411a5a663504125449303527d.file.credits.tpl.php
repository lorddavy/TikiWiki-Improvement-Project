<?php /* Smarty version Smarty-3.1.21, created on 2017-05-23 16:16:46
         compiled from "D:\xampp\htdocs\tiki\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240715924444e3efe67-38351945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4c07cdc0dd5f5411a5a663504125449303527d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\credits.tpl',
      1 => 1421685541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240715924444e3efe67-38351945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5924444e3fab99_76085649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924444e3fab99_76085649')) {function content_5924444e3fab99_76085649($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
