<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:40:39
         compiled from "D:\xampp\htdocs\tiki\templates\trackeroutput\layout_flat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231135936b0d7bfcf17-42098278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '593ff14104d40b5583a954694f0effee4f4ea4af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackeroutput\\layout_flat.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231135936b0d7bfcf17-42098278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tracker_info' => 0,
    'tiki_p_admin_trackers' => 0,
    'info' => 0,
    'ustatus' => 0,
    'status_types' => 0,
    'fields' => 0,
    'cur_field' => 0,
    'level' => 0,
    'item_info' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b0d7ca07b8_00283391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b0d7ca07b8_00283391')) {function content_5936b0d7ca07b8_00283391($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_trackeroutput')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.tiki_long_datetime.php';
if (!is_callable('smarty_modifier_username')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.username.php';
?><dl class="dl-horizontal">
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showStatus']=='y'||($_smarty_tpl->tpl_vars['tracker_info']->value['showStatusAdminOnly']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y')) {?>
		<?php $_smarty_tpl->tpl_vars['ustatus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['info']->value['status'])===null||$tmp==='' ? "p" : $tmp), null, 0);?>
		<dt title="Status">Status</dt>
		<dd>
			<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['iconname']),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->tpl_vars['status_types']->value[$_smarty_tpl->tpl_vars['ustatus']->value]['label'];?>

		</dd>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['stick'] = new Smarty_variable("n", null, 0);?>

	<?php  $_smarty_tpl->tpl_vars['cur_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cur_field']->_loop = false;
 $_smarty_tpl->tpl_vars['ix'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cur_field']->key => $_smarty_tpl->tpl_vars['cur_field']->value) {
$_smarty_tpl->tpl_vars['cur_field']->_loop = true;
 $_smarty_tpl->tpl_vars['ix']->value = $_smarty_tpl->tpl_vars['cur_field']->key;
?>
		<?php if (!($_smarty_tpl->tpl_vars['tracker_info']->value['doNotShowEmptyField']=='y'&&(strlen($_smarty_tpl->tpl_vars['cur_field']->value['value'])==0)&&empty($_smarty_tpl->tpl_vars['cur_field']->value['value'])&&empty($_smarty_tpl->tpl_vars['cur_field']->value['cat'])&&empty($_smarty_tpl->tpl_vars['cur_field']->value['links'])&&$_smarty_tpl->tpl_vars['cur_field']->value['type']!='s'&&$_smarty_tpl->tpl_vars['cur_field']->value['type']!='STARS'&&$_smarty_tpl->tpl_vars['cur_field']->value['type']!='h'&&$_smarty_tpl->tpl_vars['cur_field']->value['type']!='l'&&$_smarty_tpl->tpl_vars['cur_field']->value['type']!='W')&&!($_smarty_tpl->tpl_vars['cur_field']->value['options_array'][0]=='password'&&$_smarty_tpl->tpl_vars['cur_field']->value['type']=='p')) {?>

			<?php if ($_smarty_tpl->tpl_vars['cur_field']->value['type']=='h') {?>
				</dl>
				<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_variable($_smarty_tpl->tpl_vars['cur_field']->value['options_map']['level'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['level']->value<1) {
$_smarty_tpl->tpl_vars['level'] = new Smarty_variable(3, null, 0);
}?>
				<h<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
><?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>
</h<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
>
				<?php if ($_smarty_tpl->tpl_vars['cur_field']->value['description']) {?>
					<p><?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['description']));?>
</p>
				<?php }?>
				<dl class="dl-horizontal">
			
			<?php } elseif (($_smarty_tpl->tpl_vars['cur_field']->value['type']=='t'&&$_smarty_tpl->tpl_vars['cur_field']->value['options_array'][0]=='0')||($_smarty_tpl->tpl_vars['cur_field']->value['type']=='a'&&$_smarty_tpl->tpl_vars['cur_field']->value['options_array'][8]=='0')||($_smarty_tpl->tpl_vars['cur_field']->value['type']=='n'&&$_smarty_tpl->tpl_vars['cur_field']->value['options_array'][0]=='0')||($_smarty_tpl->tpl_vars['cur_field']->value['type']=='b'&&$_smarty_tpl->tpl_vars['cur_field']->value['options_array'][0]=='0')) {?>
				<dt title="<?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>
"><?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>
</dt>
				<dd><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['cur_field']->value,'item'=>$_smarty_tpl->tpl_vars['item_info']->value,'showlinks'=>'n','list_mode'=>'n'),$_smarty_tpl);?>
</dd>
			<?php } else { ?>
				<dt title="<?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>
"><?php echo smarty_modifier_escape(tra($_smarty_tpl->tpl_vars['cur_field']->value['name']));?>
</dt>
				<dd><?php echo smarty_function_trackeroutput(array('field'=>$_smarty_tpl->tpl_vars['cur_field']->value,'item'=>$_smarty_tpl->tpl_vars['item_info']->value,'showlinks'=>'n','list_mode'=>'n'),$_smarty_tpl);?>
</dd>
			<?php }?>
		<?php }?>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedView']=='y') {?>
		<dt title="Created">Created</dt>
		<dd><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['info']->value['created']);
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showCreatedBy']=='y') {?><br>by <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_show_realnames']=='y') {
if (empty($_smarty_tpl->tpl_vars['info']->value['createdBy'])) {?>Unknown<?php } else {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['info']->value['createdBy']);
}
} else {
if (empty($_smarty_tpl->tpl_vars['info']->value['createdBy'])) {?>Unknown<?php } else {
echo $_smarty_tpl->tpl_vars['info']->value['createdBy'];
}
}
}?></dd>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifView']=='y') {?>
		<dt title="LastModif">LastModif</dt>
		<dd><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['info']->value['lastModif']);
if ($_smarty_tpl->tpl_vars['tracker_info']->value['showLastModifBy']=='y') {?><br>by <?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_show_realnames']=='y') {
if (empty($_smarty_tpl->tpl_vars['info']->value['lastModifBy'])) {?>Unknown<?php } else {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['info']->value['lastModifBy']);
}
} else {
if (empty($_smarty_tpl->tpl_vars['info']->value['lastModifBy'])) {?>Unknown<?php } else {
echo $_smarty_tpl->tpl_vars['info']->value['lastModifBy'];
}
}
}?></dd>
	<?php }?>
</dl>
<?php }} ?>
