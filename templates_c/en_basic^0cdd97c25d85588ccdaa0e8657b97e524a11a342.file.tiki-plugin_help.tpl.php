<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:50:21
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-plugin_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13324593037bdb3dc82-27892498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cdd97c25d85588ccdaa0e8657b97e524a11a342' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-plugin_help.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13324593037bdb3dc82-27892498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'area_id' => 0,
    'plugin_name' => 0,
    'plugin' => 0,
    'param' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593037bdbd27b1_42501020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593037bdbd27b1_42501020')) {function content_593037bdbd27b1_42501020($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['area_id']->value) {?>
	<a href="javascript:void(0);" onclick="needToConfirm=false;$.closeModal();popup_plugin_form('<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
','<?php echo addslashes(mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8'));?>
');return false;"><?php echo smarty_function_icon(array('name'=>(($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['iconname'])===null||$tmp==='' ? "plugin" : $tmp),'_text'=>"Insert"),$_smarty_tpl);?>
</a>
<?php }?>
<strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['name']);?>
</strong>
<em><?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>
</em>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y') {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['documentation'])) {?>
		<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['plugin']->value['documentation']);?>
" onclick="needToConfirm=false;" target="tikihelp" class="tikihelp">
			<?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>

		</a>
	<?php }?>
<?php }?>


<div class="plugin-desc" style="margin-left:30px">
	<?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
<?php } else { ?>
<div class="plugin-sample">
	<?php if ($_smarty_tpl->tpl_vars['plugin']->value['body']) {?>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
(
		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['description']);?>
"</em>
				<?php } else { ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['description']);?>
"</em> ]
				<?php }?>
			</div>
		<?php } ?>
		)&#125;
		<div class="plugin-param">
			<?php echo $_smarty_tpl->tpl_vars['plugin']->value['body'];?>

		</div>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
&#125;
	<?php } else { ?>
		&#123;<?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>

		<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugin']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['description']);?>
"</em>
				<?php } else { ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['description']);?>
"</em> ]
				<?php }?>
			</div>
		<?php } ?>
		&#125;
	<?php }?>
</div>
<?php }?>
<?php }} ?>
