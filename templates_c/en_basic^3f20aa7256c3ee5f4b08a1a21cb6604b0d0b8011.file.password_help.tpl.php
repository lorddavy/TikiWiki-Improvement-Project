<?php /* Smarty version Smarty-3.1.21, created on 2017-05-23 16:16:45
         compiled from "D:\xampp\htdocs\tiki\templates\password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236115924444d9ff1c6-20077985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f20aa7256c3ee5f4b08a1a21cb6604b0d0b8011' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\password_help.tpl',
      1 => 1452771715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236115924444d9ff1c6-20077985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5924444da1af88_41529674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924444da1af88_41529674')) {function content_5924444da1af88_41529674($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tr.php';
?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1) {?><div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y') {?><div class="highlight"><em>Password must contain both letters and numbers</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y') {?><div class="highlight"><em>Password must contain at least one lowercase alphabetical character like "a" and one uppercase character like "A".</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y') {?><div class="highlight"><em>Password must contain at least one special character like " / $ % ? & * ( ) _ + ...</em></div><?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y') {?><div class="highlight"><em>Password must not contain a consecutive repetition of the same character such as "111" or "aab"</em></div><?php }?>
<?php }} ?>
