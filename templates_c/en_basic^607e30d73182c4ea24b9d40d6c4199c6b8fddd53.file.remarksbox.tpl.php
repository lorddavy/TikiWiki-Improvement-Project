<?php /* Smarty version Smarty-3.1.21, created on 2017-05-23 16:16:45
         compiled from "D:\xampp\htdocs\tiki\templates\remarksbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77335924444d9985a3-26968586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '607e30d73182c4ea24b9d40d6c4199c6b8fddd53' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\remarksbox.tpl',
      1 => 1456924370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77335924444d9985a3-26968586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'remarksbox_id' => 0,
    'remarksbox_class' => 0,
    'remarksbox_close' => 0,
    'remarksbox_highlight' => 0,
    'remarksbox_cookie' => 0,
    'remarksbox_title' => 0,
    'remarksbox_content' => 0,
    'remarksbox_cookiehash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5924444d9c5c24_63588703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924444d9c5c24_63588703')) {function content_5924444d9c5c24_63588703($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
?>
<div <?php if ($_smarty_tpl->tpl_vars['remarksbox_id']->value) {?>id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
"<?php }?> class="alert <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_class']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?>alert-dismissable<?php }?> <?php if ($_smarty_tpl->tpl_vars['remarksbox_highlight']->value) {
echo $_smarty_tpl->tpl_vars['remarksbox_highlight']->value;
}?> <?php if ($_smarty_tpl->tpl_vars['remarksbox_cookie']->value) {?>hide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['remarksbox_close']->value) {?><button <?php if ($_smarty_tpl->tpl_vars['remarksbox_id']->value) {?>id="triggeralert-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
" data-target="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
"<?php }?> type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php }?><h4><?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['remarksbox_icon']->value)),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_title']->value);?>
</h4><?php echo $_smarty_tpl->tpl_vars['remarksbox_content']->value;?>
</div>

<?php if ($_smarty_tpl->tpl_vars['remarksbox_cookie']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	if (! getCookie("<?php echo $_smarty_tpl->tpl_vars['remarksbox_cookiehash']->value;?>
")) {
		$("#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
").removeClass('hide');
	}

	$("#triggeralert-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['remarksbox_id']->value);?>
").click(function() {
		var targetalert = $(this).data("target");
		$("#"+targetalert).addClass('hide');
		document.cookie="<?php echo $_smarty_tpl->tpl_vars['remarksbox_cookiehash']->value;?>
=dismiss";
	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
