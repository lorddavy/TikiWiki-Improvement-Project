<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:42
         compiled from "D:\xampp\htdocs\tiki\templates\trackerinput\dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249315930375aa8e9e5-25236671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa2672cb5bb196631c6f28b6e68375241e4742e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackerinput\\dropdown.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249315930375aa8e9e5-25236671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'value' => 0,
    'label' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5930375ab0e070_69672106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930375ab0e070_69672106')) {function content_5930375ab0e070_69672106($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tr_if')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.tr_if.php';
if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='R') {?><div class="input-group"><?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><label class="radio-inline"><input type="radio" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']==((string)$_smarty_tpl->tpl_vars['value']->value)) {?>checked="checked"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['label']->value));?>
</label><?php } ?></div><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='M') {
if (empty($_smarty_tpl->tpl_vars['field']->value['options_map']['inputtype'])) {?><div class="input-group"><?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><label class="checkbox-inline"><input type="checkbox" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" <?php if (in_array(((string)$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl->tpl_vars['field']->value['selected'])) {?>checked="checked"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['label']->value));?>
</label><?php } ?></div><?php } elseif ($_smarty_tpl->tpl_vars['field']->value['options_map']['inputtype']=='m') {
if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?><small>Hold "Ctrl" in order to select multiple values</small><br><?php }?><select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[]" multiple="multiple" class="form-control"><?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" <?php if (in_array(((string)$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl->tpl_vars['field']->value['selected'])) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</option><?php } ?></select><?php }?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
_old" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['value']);?>
"><?php } else { ?><select name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
" class="form-control<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='D') {?> group_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);
}?>"><?php $_smarty_tpl->tpl_vars['otherValue'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['value'], null, 0);
if ($_smarty_tpl->tpl_vars['field']->value['isMandatory']!='y'||empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?><option value="">&nbsp;</option><?php }
$_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['possibilities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['value'])&&$_smarty_tpl->tpl_vars['field']->value['value']!='')&&($_smarty_tpl->tpl_vars['field']->value['value']==((string)$_smarty_tpl->tpl_vars['value']->value))) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['label']->value));?>
</option><?php } ?></select><?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='D') {?><div class="col-md-offset-1"><label<?php if (!isset($_smarty_tpl->tpl_vars['field']->value['possibilities'][$_smarty_tpl->tpl_vars['field']->value['value']])&&$_smarty_tpl->tpl_vars['field']->value['value']) {?> style="display:inherit;"<?php } else { ?> style="display:none;"<?php }?>>Other:<input type="text" class="group_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
 form-control" name="other_<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
" value="<?php if (!isset($_smarty_tpl->tpl_vars['field']->value['possibilities'][$_smarty_tpl->tpl_vars['field']->value['value']])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['value']);
}?>"></label></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$(function () {
				var $select = $('select[name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
"]'),
					$other = $('input[name="other_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['ins_id']);?>
"]');
				<?php if (!isset($_smarty_tpl->tpl_vars['field']->value['possibilities'][$_smarty_tpl->tpl_vars['field']->value['value']])&&$_smarty_tpl->tpl_vars['field']->value['value']) {?>
				if (!$('> [selected]', $select).length) {
					$select.val('other').trigger('chosen:updated');
				}
				<?php }?>
				$select.change(function() {
					if ($select.val() != 'other') {
						$other.data('tiki_never_visited', '');
						$other.val('').parent().hide();
					} else {
						$other.data('tiki_never_visited', 'tiki_never_visited');
						$other.parent().show();
					}
				});
				$other.change(function(){
					$other.data('tiki_never_visited', '');
					if ($(this).val()) {
						$select.val(tr('other')).trigger('chosen:updated');
					}
				});
				$other.focusout(function(){
					$other.data('tiki_never_visited', '');
				});
			});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}?>
<?php }} ?>
