<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:57:27
         compiled from "D:\xampp\htdocs\tiki\templates\prefs\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215325936b4c77c6e52-87863809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62be0003e8e243e4a20400505a9b59d9cb187470' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\prefs\\list.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215325936b4c77c6e52-87863809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b4c7843103_51452224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b4c7843103_51452224')) {function content_5936b4c7843103_51452224($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_breakline')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.breakline.php';
if (!is_callable('smarty_modifier_simplewiki')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.simplewiki.php';
?>
<div class="adminoptionbox preference form-group clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;">
	<label class="col-md-4 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_breakline(smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']));?>
</label>
	<div class="col-md-8">
		<select class="form-control" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" data-tiki-admin-child-block=".<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
_childcontainer">
			<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['p']->value['value']) {?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option>
			<?php } ?>
		</select>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</em>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<br/><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
