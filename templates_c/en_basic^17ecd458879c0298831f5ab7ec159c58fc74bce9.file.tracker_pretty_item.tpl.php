<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 18:41:43
         compiled from "D:\xampp\htdocs\tiki\templates\tracker_pretty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090459416747df9059-86597981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17ecd458879c0298831f5ab7ec159c58fc74bce9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker_pretty_item.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090459416747df9059-86597981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_mode' => 0,
    'fields' => 0,
    'field' => 0,
    'listfields' => 0,
    'item' => 0,
    'context' => 0,
    'force_separate_compile' => 0,
    'f_itemId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59416749648265_69977008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59416749648265_69977008')) {function content_59416749648265_69977008($_smarty_tpl) {?><?php if (!is_callable('smarty_function_trackeroutput')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.trackeroutput.php';
if (!is_callable('smarty_function_set')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.set.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['list_mode']->value)) {
$_smarty_tpl->tpl_vars['list_mode'] = new Smarty_variable("n", null, 0);
}
$_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
if ($_smarty_tpl->tpl_vars['field']->value['type']!='x'&&(empty($_smarty_tpl->tpl_vars['listfields']->value)||in_array($_smarty_tpl->tpl_vars['field']->value['fieldId'],$_smarty_tpl->tpl_vars['listfields']->value))&&($_smarty_tpl->tpl_vars['field']->value['type']!='p'||$_smarty_tpl->tpl_vars['field']->value['options_array'][0]!='password')) {
$_smarty_tpl->_capture_stack[0][] = array('value', null, null); ob_start();
echo smarty_function_trackeroutput(array('item'=>$_smarty_tpl->tpl_vars['item']->value,'field'=>$_smarty_tpl->tpl_vars['field']->value,'list_mode'=>$_smarty_tpl->tpl_vars['list_mode']->value,'showlinks'=>$_smarty_tpl->tpl_vars['context']->value['showlinks'],'url'=>$_smarty_tpl->tpl_vars['context']->value['url']),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_function_set(array('var'=>("f_").($_smarty_tpl->tpl_vars['field']->value['fieldId']),'value'=>Smarty::$_smarty_vars['capture']['value']),$_smarty_tpl);
echo smarty_function_set(array('var'=>("f_").($_smarty_tpl->tpl_vars['field']->value['permName']),'value'=>Smarty::$_smarty_vars['capture']['value']),$_smarty_tpl);
} else {
echo smarty_function_set(array('var'=>("f_").($_smarty_tpl->tpl_vars['field']->value['fieldId']),'value'=>''),$_smarty_tpl);
echo smarty_function_set(array('var'=>("f_").($_smarty_tpl->tpl_vars['field']->value['permName']),'value'=>''),$_smarty_tpl);
}
}
echo smarty_function_set(array('var'=>'f_created','value'=>$_smarty_tpl->tpl_vars['item']->value['created']),$_smarty_tpl);
echo smarty_function_set(array('var'=>'f_lastmodif','value'=>$_smarty_tpl->tpl_vars['item']->value['lastModif']),$_smarty_tpl);
echo smarty_function_set(array('var'=>'f_itemId','value'=>$_smarty_tpl->tpl_vars['item']->value['itemId']),$_smarty_tpl);
echo smarty_function_set(array('var'=>'f_status','value'=>$_smarty_tpl->tpl_vars['item']->value['status']),$_smarty_tpl);
echo smarty_function_set(array('var'=>'f_itemUser','value'=>implode($_smarty_tpl->tpl_vars['item']->value['itemUsers'],', ')),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['force_separate_compile']->value=='y') {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wiki']->value), $_smarty_tpl->cache_id, $_smarty_tpl->tpl_vars['f_itemId']->value, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0);
} else {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wiki']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0);
}?>
<?php }} ?>
