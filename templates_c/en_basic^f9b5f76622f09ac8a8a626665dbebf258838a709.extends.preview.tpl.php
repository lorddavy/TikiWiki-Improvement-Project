<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:46:06
         compiled from "D:\xampp\htdocs\tiki\templates\edit\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308525936b21ec50254-97804452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab3bfced64b8b60f1a6403edf7ba8f005b88c5fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\edit\\preview.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    '49cb0cb05eab9b6da1c6d32e837fb9d1990c2538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308525936b21ec50254-97804452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b21ed01109_81133864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b21ed01109_81133864')) {function content_5936b21ed01109_81133864($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.title.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['inPage']->value) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['parsed_footnote']->value)) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div><?php }
} else {
echo $_smarty_tpl->tpl_vars['parsed']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
