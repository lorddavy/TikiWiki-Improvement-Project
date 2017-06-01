<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:42
         compiled from "D:\xampp\htdocs\tiki\templates\tracker_validator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176935930375a9e8042-34984681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700e8bd70d4bd10213f404810818b1463abdde85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker_validator.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176935930375a9e8042-34984681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validationjs' => 0,
    'trackerEditFormId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5930375a9f4296_03377670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930375a9f4296_03377670')) {function content_5930375a9f4296_03377670($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['validationjs']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#editItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
").validate({
	<?php echo $_smarty_tpl->tpl_vars['validationjs']->value;?>
,
	submitHandler: function(){
		if( typeof nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 !== "undefined" && nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 == true ) {
			return false;
		} else {
			return process_submit(this.currentForm);
		}
	}
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>
<?php }} ?>
