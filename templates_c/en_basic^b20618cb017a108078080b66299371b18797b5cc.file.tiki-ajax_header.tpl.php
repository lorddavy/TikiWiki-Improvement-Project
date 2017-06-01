<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:41:52
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19263593035c04a2715-09363891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20618cb017a108078080b66299371b18797b5cc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-ajax_header.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19263593035c04a2715-09363891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593035c04a8dc2_44981295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593035c04a8dc2_44981295')) {function content_593035c04a8dc2_44981295($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>
