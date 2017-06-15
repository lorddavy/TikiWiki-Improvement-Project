<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:54:21
         compiled from "D:\xampp\htdocs\tiki\templates\edit\help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230515936b40d8d60c0-96796647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef38e771b1748f903dfc131d58dec78fcda1c2f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\edit\\help.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    'd6c3d06d059b5c0bb7f0fcab01b5c7e2fe0901c5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\internal\\modal.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230515936b40d8d60c0-96796647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b40d927046_34638610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b40d927046_34638610')) {function content_5936b40d927046_34638610($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tab.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('skipsingle'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('skipsingle'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['help']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value) {
$_smarty_tpl->tpl_vars['help']->_loop = true;
?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['help']->value['title'])); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['help']->value['title']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php echo $_smarty_tpl->tpl_vars['help']->value['content'];?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['help']->value['title']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('skipsingle'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Close</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
