<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:54:21
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-edit_help_plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178825936b40d88ca21-78013066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b827509689360e43f7a4fec22043b3d8a599455' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-edit_help_plugins.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178825936b40d88ca21-78013066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'editorId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b40d8b9c19_68780897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b40d8b9c19_68780897')) {function content_5936b40d8b9c19_68780897($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_listfilter')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.listfilter.php';
?>


<?php if (count($_smarty_tpl->tpl_vars['plugins']->value)!=0) {?>

	<h3>Plugins</h3>
	<div class="help_section">
		<p>
			Note that plugin arguments can be enclosed with double quotes (&quot;); this allows them to contain , or = or &gt;.
			<br>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y') {?>More help here
				<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Plugins" target="tikihelp" class="tikihelp" title="Plugins:Wiki plugins extend the function of wiki syntax with more specialized commands.">
					<?php echo smarty_function_icon(array('name'=>'help','style'=>"vertical-align:middle"),$_smarty_tpl);?>

				</a>
			<?php }?>
		</p>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
			<a href="tiki-admin.php?page=textarea&amp;cookietab=2" target="tikihelp" class="tikihelp">
				Activate/deactivate plugins
			</a>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['editorId']->value)) {?>
			<?php echo smarty_function_listfilter(array('selectors'=>'#plugins_help_table tr','editorId'=>$_smarty_tpl->tpl_vars['editorId']->value,'parentTabId'=>"plugin_help"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_listfilter(array('selectors'=>'#plugins_help_table tr','parentTabId'=>"plugin_help"),$_smarty_tpl);?>

		<?php }?>
		<table id="plugins_help_table" width="95%" class="formcolor">
			<tr><th>Description</th></tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plugins']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> 
				<tr>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['plugins']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['help']=='') {?>
							No description available
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['plugins']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['help'];?>

						<?php }?>
					</td>
				</tr>
			<?php endfor; endif; ?>
		</table>
	</div>
<?php }?>
<?php }} ?>
