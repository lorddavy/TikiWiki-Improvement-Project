<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:42
         compiled from "D:\xampp\htdocs\tiki\templates\trackerinput\textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208325930375ab21f39-54028910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd261b17af1f745be547c86c8d21b0c935776172f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackerinput\\textarea.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208325930375ab21f39-54028910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'data' => 0,
    'prefs' => 0,
    'ling' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5930375abe45c7_61403892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930375abe45c7_61403892')) {function content_5930375abe45c7_61403892($_smarty_tpl) {?><?php if (!is_callable('smarty_function_toolbars')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.toolbars.php';
if (!is_callable('smarty_block_textarea')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.textarea.php';
if (!is_callable('smarty_modifier_langname')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.langname.php';
?><?php if ($_smarty_tpl->tpl_vars['field']->value['isMultilingual']!='y') {
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][2]==1) {
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][0]==1) {
echo smarty_function_toolbars(array('qtnum'=>$_smarty_tpl->tpl_vars['field']->value['fieldId'],'area_id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'section'=>"trackers"),$_smarty_tpl);
}?><input type="text" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['element_id']);?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][1]>0) {?> size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][1];?>
"<?php }
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][3]>0) {?> maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][3];?>
"<?php }?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['value']);?>
" onkeyup=<?php echo $_smarty_tpl->tpl_vars['data']->value['keyup'];?>
 /><?php } else {
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][7]=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'y','section'=>"trackers")); $_block_repeat=true; echo smarty_block_textarea(array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'y','section'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['value'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'y','section'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'_toolbars'=>$_smarty_tpl->tpl_vars['data']->value['toolbar'],'_simple'=>'y','rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'n','section'=>"trackers")); $_block_repeat=true; echo smarty_block_textarea(array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'_toolbars'=>$_smarty_tpl->tpl_vars['data']->value['toolbar'],'_simple'=>'y','rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'n','section'=>"trackers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['value'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('_class'=>'form-control','id'=>$_smarty_tpl->tpl_vars['data']->value['element_id'],'name'=>$_smarty_tpl->tpl_vars['field']->value['ins_id'],'_toolbars'=>$_smarty_tpl->tpl_vars['data']->value['toolbar'],'_simple'=>'y','rows'=>$_smarty_tpl->tpl_vars['data']->value['rows'],'onkeyup'=>$_smarty_tpl->tpl_vars['data']->value['keyup'],'_wysiwyg'=>'n','section'=>"trackers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][3]) {?><div class="charCount"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>Character Count: <input type="text" id="cpt_<?php echo $_smarty_tpl->tpl_vars['field']->value['fieldId'];?>
" size="4" readOnly="true"<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?> value="<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['field']->value['value'], $tmp);?>
"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][3]>0) {?> Max: <?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][3];
}?></div><?php }
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][5]) {?><div class="wordCount"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>Word Count: <input type="text" id="cpt_<?php echo $_smarty_tpl->tpl_vars['field']->value['fieldId'];?>
" size="4" readOnly="true"<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?> value="<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['field']->value['value'], $tmp);?>
"<?php }?>><?php }
if ($_smarty_tpl->tpl_vars['field']->value['options_array'][5]>0) {?> Max: <?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][5];
}?></div><?php }
} else {
$_smarty_tpl->tpl_vars['ling'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ling']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value['lingualvalue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ling']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['ling']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ling']->key => $_smarty_tpl->tpl_vars['ling']->value) {
$_smarty_tpl->tpl_vars['ling']->_loop = true;
 $_smarty_tpl->tpl_vars['ling']->iteration++;
 $_smarty_tpl->tpl_vars['ling']->last = $_smarty_tpl->tpl_vars['ling']->iteration === $_smarty_tpl->tpl_vars['ling']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lg']['last'] = $_smarty_tpl->tpl_vars['ling']->last;
?><label for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['element_id']);?>
_<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
"><?php echo smarty_modifier_langname($_smarty_tpl->tpl_vars['ling']->value['lang']);?>
</label><?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][0]==1) {
echo smarty_function_toolbars(array('qtnum'=>$_smarty_tpl->tpl_vars['field']->value['id'],'area_id'=>(($_smarty_tpl->tpl_vars['data']->value['element_id']).('_')).($_smarty_tpl->tpl_vars['ling']->value['lang'])),$_smarty_tpl);
}?><textarea _class='form-control' id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['element_id']);?>
_<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
]" cols="<?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][1]>1) {
echo $_smarty_tpl->tpl_vars['field']->value['options_array'][1];
} else { ?>50<?php }?>" rows="<?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][2]>1) {
echo $_smarty_tpl->tpl_vars['field']->value['options_array'][2];
} else { ?>6<?php }?>"<?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][5]>0) {?> onkeyup="wordCount(<?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][5];?>
, this, 'cpt_<?php echo $_smarty_tpl->tpl_vars['field']->value['fieldId'];?>
_<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
', 'Word Limit Exceeded')"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ling']->value['value']);?>
</textarea><?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][5]) {?><div class="wordCount">Word Count: <input type="text" id="cpt_<?php echo $_smarty_tpl->tpl_vars['field']->value['fieldId'];?>
_<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
" size="4" readOnly="true"<?php if (!empty($_smarty_tpl->tpl_vars['ling']->value['value'])) {?> value="<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['ling']->value['value'], $tmp);?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['field']->value['options_array'][5]>0) {?>Max: <?php echo $_smarty_tpl->tpl_vars['field']->value['options_array'][5];
}?></div>i<?php } elseif (!$_smarty_tpl->getVariable('smarty')->value['foreach']['lg']['last']) {?><br><?php }
}
}?>
<?php }} ?>
