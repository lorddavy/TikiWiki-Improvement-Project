<?php /* Smarty version Smarty-3.1.21, created on 2017-05-23 16:17:14
         compiled from "D:\xampp\htdocs\tiki\templates\permission_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149365924446a61fc40-71217490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c23f4279640de5d2af12edc4fddcf12facaf9bc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\permission_link.tpl',
      1 => 1457988224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149365924446a61fc40-71217490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permission_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5924446a69d252_10500820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924446a69d252_10500820')) {function content_5924446a69d252_10500820($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='text') {?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>tips bg-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
"<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?> title=":Individual permissions"<?php }?>>
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			 <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='button') {?>
	<a class="<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']&&$_smarty_tpl->tpl_vars['permission_link']->value['type']!='file gallery') {?>btn btn-warning<?php } else { ?>btn btn-default<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			 <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='button_link') {?>
	<a class="tips btn btn-link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			 <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='link') {?>
	<a class="link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			 <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='icon') {?>
	<a class="tips btn <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>btn-warning <?php } else { ?> btn-link<?php }?> btn-sm<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
" title=":<?php echo $_smarty_tpl->tpl_vars['permission_link']->value['label'];?>
"><?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
<span class="sr-only"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
</span><?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?><span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span><?php }?></a>
<?php } else { ?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>text-success<?php } else { ?>text-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
" title=":<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<span class="sr-only"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			 <span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php }?>
<?php }} ?>
