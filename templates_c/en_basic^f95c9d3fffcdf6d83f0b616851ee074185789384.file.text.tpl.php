<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:42
         compiled from "D:\xampp\htdocs\tiki\templates\trackerinput\text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295865930375aa06186-10744982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f95c9d3fffcdf6d83f0b616851ee074185789384' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackerinput\\text.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295865930375aa06186-10744982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'prefs' => 0,
    'ling' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5930375aa74094_99993085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930375aa74094_99993085')) {function content_5930375aa74094_99993085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\tiki\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_autocomplete')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.autocomplete.php';
if (!is_callable('smarty_modifier_langname')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.langname.php';
?><?php if ($_smarty_tpl->tpl_vars['field']->value['isMultilingual']!='y') {?>
	<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend']) {?>
		<span class="formunit"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
&nbsp;</span>
	<?php }?>
	<input type="text" class="form-control" id="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['ins_id'],'[','_'),']','');?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?> value="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value['defaultvalue'] : $tmp));?>
">
	<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
		<span class="formunit">&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete']=='y') {?>
		<?php echo smarty_function_autocomplete(array('element'=>smarty_modifier_replace(smarty_modifier_replace(("#").($_smarty_tpl->tpl_vars['field']->value['ins_id']),"[","_"),"]",''),'type'=>"trackervalue",'options'=>((("trackerId:").($_smarty_tpl->tpl_vars['field']->value['trackerId'])).(",fieldId:")).($_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

	<?php }?>
<?php } else { ?>
	<?php  $_smarty_tpl->tpl_vars['ling'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ling']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['lingualvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ling']->key => $_smarty_tpl->tpl_vars['ling']->value) {
$_smarty_tpl->tpl_vars['ling']->_loop = true;
?>
		<label for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ling']->value['id']);?>
"><?php echo smarty_modifier_langname($_smarty_tpl->tpl_vars['ling']->value['lang']);?>
</label>
		<div>
			<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'])) {?>
				<span class="formunit"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
&nbsp;</span>
			<?php }?>

			<input type="text" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ling']->value['id']);?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ling']->value['value']);?>
" class="form-control"
				   <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?>> 

			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
				<span class="formunit">&nbsp;<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete']=='y') {?>
				<?php echo smarty_function_autocomplete(array('element'=>"#".((string)$_smarty_tpl->tpl_vars['ling']->value['id']),'type'=>"trackervalue",'options'=>"trackerId:".((string)$_smarty_tpl->tpl_vars['field']->value['trackerId']).",fieldId:".((string)$_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php } ?>
<?php }?>
<?php }} ?>
