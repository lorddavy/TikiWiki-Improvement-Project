<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:48:42
         compiled from "D:\xampp\htdocs\tiki\templates\wiki-plugins\wikiplugin_tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20065930375ac72c31-29005777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84391ae208d416cea4b62f1d0d7ee91a9f18551a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\wiki-plugins\\wikiplugin_tabs.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20065930375ac72c31-29005777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_slideshow' => 0,
    'tabs' => 0,
    'i' => 0,
    'tabcontent' => 0,
    'toggle' => 0,
    'tabsetname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5930375ac99c70_20038706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5930375ac99c70_20038706')) {function content_5930375ac99c70_20038706($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tab.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['is_slideshow']->value)&&$_smarty_tpl->tpl_vars['is_slideshow']->value=='y') {?>
	<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['tab']->key;
?>
		<?php echo $_smarty_tpl->tpl_vars['tabcontent']->value[$_smarty_tpl->tpl_vars['i']->value];?>

	<?php } ?>
<?php } else { ?>
~np~<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value))); $_block_repeat=true; echo smarty_block_tabset(array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
$_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]))); $_block_repeat=true; echo smarty_block_tab(array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['tabcontent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
endfor; endif; ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('toggle'=>$_smarty_tpl->tpl_vars['toggle']->value,'name'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['tabsetname']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
~/np~
<?php }?>
<?php }} ?>
