<?php /* Smarty version Smarty-3.1.21, created on 2017-06-01 17:45:52
         compiled from "D:\xampp\htdocs\tiki\templates\tiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31339593036b0034627-90602959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74abd11655828b62ec1a52bfc4fd674a4a38931a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
    'd9d9288e6450019b4fdf3e222267ebe12a1c5d40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31339593036b0034627-90602959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
    'icon_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_593036b0146cb9_99418074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593036b0146cb9_99418074')) {function content_593036b0146cb9_99418074($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
    <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container<?php if ($_SESSION['fullscreen']=='y') {?>-fluid<?php }?>">
<?php if ($_SESSION['fullscreen']!='y') {?>
    <div class="page-header" id="page-header">
        <?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

        <div class="topbar row" id="topbar">
            <?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

        </div>
    </div>
<?php }?>

    <div class="row row-middle" id="row-middle">
        <?php if (zone_is_empty('left')&&zone_is_empty('right')) {?>
            <div class="col-md-12 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php } elseif (zone_is_empty('left')||$_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='n') {?>
            <div class="col-md-12 text-right">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
                <?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
                <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

            <?php }?>
            </div>
            <div class="col-md-9 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-3" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        <?php } elseif (zone_is_empty('right')||$_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='n') {?>
            <div class="col-md-12 text-left">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
                <?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
                <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

            <?php }?>
            </div>
            <div class="col-md-9 col-md-push-3 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-3 col-md-pull-9" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
        <?php } else { ?>
            <div class="col-md-6 text-left">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column']=='user') {?>
                <?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left', null, 0);?>
                <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

            <?php }?>
            </div>
            <div class="col-md-6 text-right">
            <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column']=='user') {?>
                <?php $_smarty_tpl->tpl_vars['icon_name'] = new Smarty_variable(!empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right', null, 0);?>
                <?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

            <?php }?>
            </div>
            <div class="col-md-8 col-md-push-2 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-2 col-md-pull-8" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
            <div class="col-md-2" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>

<?php if ($_SESSION['fullscreen']!='y') {?>
    <footer class="footer" id="footer">
        <div class="footer_liner">
            <?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

        </div>
    </footer>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
    <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
