<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:41:53
         compiled from "D:\xampp\htdocs\tiki\templates\credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19977593035c10f82e1-72382467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4c07cdc0dd5f5411a5a663504125449303527d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\credits.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19977593035c10f82e1-72382467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593035c1102204_52274079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593035c1102204_52274079')) {function content_593035c1102204_52274079($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
