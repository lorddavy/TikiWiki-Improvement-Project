<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:41
         compiled from "D:\xampp\htdocs\tiki\templates\wiki-plugins\wikiplugin_proposal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:635593037599506c3-85696868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445ab89e844c5912e451774c54a611020365b391' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\wiki-plugins\\wikiplugin_proposal.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '635593037599506c3-85696868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'counts' => 0,
    'voters' => 0,
    'passes' => 0,
    'name' => 0,
    'available_votes' => 0,
    'page' => 0,
    'body' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593037599b1600_26960064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593037599b1600_26960064')) {function content_593037599b1600_26960064($_smarty_tpl) {?><div class="table-responsive">
<table class="table table-bordered">
	<?php if ($_smarty_tpl->tpl_vars['params']->value['caption']) {?>
		<caption><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['params']->value['caption']);?>
</caption>
	<?php }?>
	<tr>
		<th>Accept</th>
		<th>Undecided</th>
		<th>Reject</th>
	</tr>
	<tr>
		<?php  $_smarty_tpl->tpl_vars['voters'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voters']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voters']->key => $_smarty_tpl->tpl_vars['voters']->value) {
$_smarty_tpl->tpl_vars['voters']->_loop = true;
?>
		<td><?php echo count($_smarty_tpl->tpl_vars['voters']->value);?>
</td>
		<?php } ?>
	</tr>
	<tr id="plugin-proposal-votelist<?php echo $_smarty_tpl->tpl_vars['passes']->value;?>
">
		<?php  $_smarty_tpl->tpl_vars['voters'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voters']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['counts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voters']->key => $_smarty_tpl->tpl_vars['voters']->value) {
$_smarty_tpl->tpl_vars['voters']->_loop = true;
?>
			<td>
				<?php if (count($_smarty_tpl->tpl_vars['voters']->value)) {?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['voters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
						<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</li>
					<?php } ?>
				</ul>
				<?php }?>
			</td>
		<?php } ?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['available_votes']->value) {?>
		<tr>
		<?php  $_smarty_tpl->tpl_vars['body'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['body']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_votes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['body']->key => $_smarty_tpl->tpl_vars['body']->value) {
$_smarty_tpl->tpl_vars['body']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['body']->key;
?>
			<td>
				<form method="post" action="tiki-wikiplugin_edit.php">
					<div>
						<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
						<input type="hidden" name="content" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['body']->value);?>
">
						<input type="hidden" name="index" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['passes']->value);?>
">
						<input type="hidden" name="type" value="proposal">
						<input type="submit" class="btn btn-default btn-sm" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
">
					</div>
				</form>
			</td>
		<?php } ?>
		</tr>
	<?php }?>
</table>
</div><?php }} ?>
