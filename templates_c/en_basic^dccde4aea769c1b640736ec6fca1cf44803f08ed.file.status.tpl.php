<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 21:39:22
         compiled from "D:\xampp\htdocs\tiki\templates\trackerinput\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10864594190eacf7cc3-79236814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dccde4aea769c1b640736ec6fca1cf44803f08ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackerinput\\status.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10864594190eacf7cc3-79236814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_types' => 0,
    'st' => 0,
    'stinfo' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_594190eb000fa5_70476886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594190eb000fa5_70476886')) {function content_594190eb000fa5_70476886($_smarty_tpl) {?><select name="status" class="form-control">
	<?php  $_smarty_tpl->tpl_vars['stinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['st'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stinfo']->key => $_smarty_tpl->tpl_vars['stinfo']->value) {
$_smarty_tpl->tpl_vars['stinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['st']->value = $_smarty_tpl->tpl_vars['stinfo']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['st']->value;?>
"
			<?php if ($_smarty_tpl->tpl_vars['stinfo']->value['name']==$_smarty_tpl->tpl_vars['status']->value) {?> selected="selected"<?php }?>
			class="tracker-<?php echo $_smarty_tpl->tpl_vars['stinfo']->value['iconname'];?>
">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stinfo']->value['label']);?>

		</option>
	<?php } ?>
</select>
<?php }} ?>
