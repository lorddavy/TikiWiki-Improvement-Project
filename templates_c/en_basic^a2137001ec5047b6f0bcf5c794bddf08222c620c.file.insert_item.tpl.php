<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 21:43:53
         compiled from "D:\xampp\htdocs\tiki\templates\tracker\insert_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6137594191f9a90cd8-24299662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2137001ec5047b6f0bcf5c794bddf08222c620c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker\\insert_item.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
    'd9d9288e6450019b4fdf3e222267ebe12a1c5d40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    '92bc32c0ff7612659a9e7b041b4a2c76cb96286d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tracker_actions.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
    '864c89022558362966d918c93725972b4ae50fb0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\antibot.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6137594191f9a90cd8-24299662',
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
  'unifunc' => 'content_59419201e13bb5_40202558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59419201e13bb5_40202558')) {function content_59419201e13bb5_40202558($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.modulelist.php';
if (!is_callable('smarty_function_feedback')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.feedback.php';
if (!is_callable('smarty_block_title')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.title.php';
if (!is_callable('smarty_function_service')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_trackerfields')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.trackerfields.php';
if (!is_callable('smarty_function_object_link')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.object_link.php';
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

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
	<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tracker_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fa75dc03_06719473($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'select_tracker'),$_smarty_tpl);?>
">Select Tracker</a>

                
	<?php if (!$_smarty_tpl->tpl_vars['itemId']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['trackerLogo']->value) {?>
			<div class="page_header media">
				<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerLogo']->value);?>
" class="pull-left img-responsive img-rounded" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerName']->value);?>
" height="64px" width="64px">
			</div>
		<?php }?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="insertItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
" <?php if (!$_smarty_tpl->tpl_vars['trackerId']->value) {?>display="hidden"<?php }?>>
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
				<div class="checkbox">
					<label>
						<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
						<input type="checkbox" name="next" value="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'next'=>$_smarty_tpl->tpl_vars['next']->value),$_smarty_tpl);?>
">
						Create another
					</label>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fb637500_34121849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
			<?php }?>
			<div class="submit">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Create" onclick="needToConfirm=false;">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
			</div>
		</form>
	<?php } else { ?>
		<?php echo smarty_function_object_link(array('type'=>'trackeritem','id'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>

	<?php }?>

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

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
	<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tracker_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fa75dc03_06719473($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'select_tracker'),$_smarty_tpl);?>
">Select Tracker</a>

                
	<?php if (!$_smarty_tpl->tpl_vars['itemId']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['trackerLogo']->value) {?>
			<div class="page_header media">
				<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerLogo']->value);?>
" class="pull-left img-responsive img-rounded" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerName']->value);?>
" height="64px" width="64px">
			</div>
		<?php }?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="insertItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
" <?php if (!$_smarty_tpl->tpl_vars['trackerId']->value) {?>display="hidden"<?php }?>>
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
				<div class="checkbox">
					<label>
						<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
						<input type="checkbox" name="next" value="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'next'=>$_smarty_tpl->tpl_vars['next']->value),$_smarty_tpl);?>
">
						Create another
					</label>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fb637500_34121849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
			<?php }?>
			<div class="submit">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Create" onclick="needToConfirm=false;">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
			</div>
		</form>
	<?php } else { ?>
		<?php echo smarty_function_object_link(array('type'=>'trackeritem','id'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>

	<?php }?>

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

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
	<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tracker_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fa75dc03_06719473($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'select_tracker'),$_smarty_tpl);?>
">Select Tracker</a>

                
	<?php if (!$_smarty_tpl->tpl_vars['itemId']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['trackerLogo']->value) {?>
			<div class="page_header media">
				<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerLogo']->value);?>
" class="pull-left img-responsive img-rounded" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerName']->value);?>
" height="64px" width="64px">
			</div>
		<?php }?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="insertItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
" <?php if (!$_smarty_tpl->tpl_vars['trackerId']->value) {?>display="hidden"<?php }?>>
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
				<div class="checkbox">
					<label>
						<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
						<input type="checkbox" name="next" value="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'next'=>$_smarty_tpl->tpl_vars['next']->value),$_smarty_tpl);?>
">
						Create another
					</label>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fb637500_34121849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
			<?php }?>
			<div class="submit">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Create" onclick="needToConfirm=false;">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
			</div>
		</form>
	<?php } else { ?>
		<?php echo smarty_function_object_link(array('type'=>'trackeritem','id'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>

	<?php }?>

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

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
	<?php /*  Call merged included template "tracker_actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tracker_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fa75dc03_06719473($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tracker_actions.tpl" */?>
	<a class="btn btn-default" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'select_tracker'),$_smarty_tpl);?>
">Select Tracker</a>

                
	<?php if (!$_smarty_tpl->tpl_vars['itemId']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['trackerLogo']->value) {?>
			<div class="page_header media">
				<img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerLogo']->value);?>
" class="pull-left img-responsive img-rounded" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerName']->value);?>
" height="64px" width="64px">
			</div>
		<?php }?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>
" id="insertItemForm<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
" <?php if (!$_smarty_tpl->tpl_vars['trackerId']->value) {?>display="hidden"<?php }?>>
			<?php echo smarty_function_trackerfields(array('trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'fields'=>$_smarty_tpl->tpl_vars['fields']->value,'status'=>$_smarty_tpl->tpl_vars['status']->value,'format'=>$_smarty_tpl->tpl_vars['format']->value,'editItemPretty'=>$_smarty_tpl->tpl_vars['editItemPretty']->value),$_smarty_tpl);?>

			<?php if (!$_smarty_tpl->tpl_vars['modal']->value) {?>
				<div class="checkbox">
					<label>
						<input type="hidden" name="next" value="<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">
						<input type="checkbox" name="next" value="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value,'next'=>$_smarty_tpl->tpl_vars['next']->value),$_smarty_tpl);?>
">
						Create another
					</label>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y') {?>
				<?php /*  Call merged included template "antibot.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6137594191f9a90cd8-24299662');
content_594191fb637500_34121849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "antibot.tpl" */?>
			<?php }?>
			<div class="submit">
				<input type="hidden" name="trackerId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Create" onclick="needToConfirm=false;">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['permName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['forced']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['permName']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<input type="hidden" name="forced~<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permName']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
">
				<?php } ?>
			</div>
		</form>
	<?php } else { ?>
		<?php echo smarty_function_object_link(array('type'=>'trackeritem','id'=>$_smarty_tpl->tpl_vars['itemId']->value),$_smarty_tpl);?>

	<?php }?>

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
<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 21:43:54
         compiled from "D:\xampp\htdocs\tiki\templates\tracker_actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_594191fa75dc03_06719473')) {function content_594191fa75dc03_06719473($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_modifier_sefurl')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.sefurl.php';
?>

<div class="btn-group">

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_trackers']->value=='y'&&!empty($_smarty_tpl->tpl_vars['trackerId']->value)) {?>
	<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'tracker','action'=>'replace','trackerId'=>$_smarty_tpl->tpl_vars['trackerId']->value),$_smarty_tpl);?>
">
		<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Properties
	</a>
	<a class="btn btn-default" href="tiki-admin_tracker_fields.php?trackerId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackerId']->value);?>
">
		<?php echo smarty_function_icon(array('name'=>"th-list"),$_smarty_tpl);?>
 Fields
	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value=='y') {?>
	<a class="btn btn-default" href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y') {?>trackers<?php } else { ?>tiki-list_trackers.php<?php }?>">
		<?php echo smarty_function_icon(array('name'=>"trackers"),$_smarty_tpl);?>
 Trackers
	</a>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['trackerId']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_trackers']->value=='y'&&(empty($_smarty_tpl->tpl_vars['showitems']->value)||$_smarty_tpl->tpl_vars['showitems']->value!=='n')) {?>
	<a class="btn btn-default" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['trackerId']->value,"tracker");?>
">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Items
	</a>
<?php }?>

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 21:43:55
         compiled from "D:\xampp\htdocs\tiki\templates\antibot.tpl" */ ?>
<?php if ($_valid && !is_callable('content_594191fb637500_34121849')) {function content_594191fb637500_34121849($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.button.php';
if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
?>
<?php if (empty($_smarty_tpl->tpl_vars['user']->value)||$_smarty_tpl->tpl_vars['user']->value=='anonymous'||!empty($_smarty_tpl->tpl_vars['showantibot']->value)) {?>
	<style>
	.antibot.row {
		margin-left: 0;
		margin-right: 0;
	}
	</style>
	<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-3', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-sm-11 col-md-8', null, 0);?> 
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-9', null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-sm-4 col-sm-offset-3 margin-bottom-sm', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value==='register') {?>
		<?php $_smarty_tpl->tpl_vars['labelclass'] = new Smarty_variable('col-md-4 col-sm-3', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['inputclass'] = new Smarty_variable('col-md-4 col-sm-6', null, 0);?>
		<?php $_smarty_tpl->tpl_vars['captchaclass'] = new Smarty_variable('col-md-5 col-sm-6 col-md-offset-4 col-sm-offset-3', null, 0);?>
	<?php }?>
	<div class="antibot row">
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha'||$_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
			<div class="form-group clearfix">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='questions') {?>
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="col-md-4 col-sm-3 control-label">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</label>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-7 col-sm-8 col-xs-11<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
					<div class="col-md-1 col-sm-1">
						<span class='text-danger tips' title=":This field is manadatory">*</span>
					</div>
				<?php } else { ?>
					<div class="<?php if ($_smarty_tpl->tpl_vars['form']->value==='register'&&!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9 col-xs-12<?php }?>">
						<input class="form-control" type="text" maxlength="8" size="22" name="captcha[input]" id="antibotcode">
					</div>
				<?php }?>
			</div>
		<?php } else { ?>
			
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group">
				<label class="control-label <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
" for="antibotcode">Enter the code below<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y'&&$_smarty_tpl->tpl_vars['form']->value!='register') {?><strong class="mandatory_star"> *</strong><?php }?></label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value=='y') {?>
					<div class="col-md-1 col-sm-1">
						<span class='text-danger tips' title=":This field is manadatory">*</span>
					</div>
				<?php }?>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="form-group">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
						<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->getPath();?>
" alt="Anti-Bot verification code image" height="50">
					<?php } else { ?>
						
						<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='default') {?>
					<div class="col-sm-3">
						<?php echo smarty_function_button(array('_id'=>'captchaRegenerate','_class'=>'','href'=>'#antibot','_text'=>"Try another code",'_icon_name'=>"refresh",'_onclick'=>"generateCaptcha();return false;"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        function antibotVerification(element, rule) {
            if (!jqueryTiki.validate) return;

            var form = $(".antibot").parents('form');
            if (!form.data("validator")) {
                form.validate({});
            }
            element.rules( "add", rule);
        }
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha') {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            var existCondition = setInterval(function() {
                if ($('#recaptcha_response_field').length) {
                    clearInterval(existCondition);
                    antibotVerification($("#recaptcha_response_field"), {required: true});
                }
            }, 100); // wait for captcha to load

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type=='recaptcha20') {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            var existCondition = setInterval(function() {
                if ($('#g-recaptcha-response').length) {
                    clearInterval(existCondition);
                    antibotVerification($("#g-recaptcha-response"), {required: true});
                }
            }, 100); // wait for captcha to load
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            antibotVerification($("#antibotcode"),  {
                required: true,
                remote: {
                    url: "validate-ajax.php",
                    type: "post",
                    data: {
                        validator: "captcha",
                        parameter: function() {
                            return $("#captchaId").val();
                        },
                        input: function() {
                            return $("#antibotcode").val();
                        }
                    }
                }
            });
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

<?php }?>
<?php }} ?>
