<?php /* Smarty version Smarty-3.1.21, created on 2017-05-23 16:16:45
         compiled from "D:\xampp\htdocs\tiki\templates\layout_fullscreen_check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317595924444df19864-21190150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f4e452c0f8f25d2171a8d3081ad85520a0fde1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layout_fullscreen_check.tpl',
      1 => 1455705518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317595924444df19864-21190150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'filegals_manager' => 0,
    'print_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5924444df33848_40610192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924444df33848_40610192')) {function content_5924444df33848_40610192($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.self_link.php';
?>



<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fullscreen']=='y'&&$_smarty_tpl->tpl_vars['filegals_manager']->value==''&&$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
	<div id="fullscreenbutton">
		<?php if ($_SESSION['fullscreen']=='n') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</div>
<?php }?>
<?php }} ?>
