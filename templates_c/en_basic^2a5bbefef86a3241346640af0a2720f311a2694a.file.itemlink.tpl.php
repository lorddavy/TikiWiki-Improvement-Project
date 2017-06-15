<?php /* Smarty version Smarty-3.1.21, created on 2017-06-14 21:41:29
         compiled from "D:\xampp\htdocs\tiki\templates\trackerinput\itemlink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2786959419169af55f2-47555026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5bbefef86a3241346640af0a2720f311a2694a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\trackerinput\\itemlink.tpl',
      1 => 1496331455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2786959419169af55f2-47555026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'data' => 0,
    'itemId' => 0,
    'label' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5941916ba4ae38_46757104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5941916ba4ae38_46757104')) {function content_5941916ba4ae38_46757104($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wikiplugin')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.wikiplugin.php';
if (!is_callable('smarty_function_service')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
?>
<div class="item-link" id="il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
_old" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['value']);?>
" />
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['displayFieldsListType']==='table') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions'])); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>'trackerlist','_compactArguments_'=>$_smarty_tpl->tpl_vars['data']->value['trackerListOptions']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems']&&$_smarty_tpl->tpl_vars['data']->value['createTrackerItems']) {?>
			<?php if ($_smarty_tpl->tpl_vars['data']->value['predefined']) {?>
				<div class="form-group">
					<div class="input-group col-sm-6">
						<select name="addaction" class="form-control">
							<option value=""><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems']);?>
</a>
							<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['itemId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['predefined']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['itemId']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['itemId']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</a>
							<?php } ?>
						</select>
						<span class="input-group-btn">
							<a class="btn btn-default insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next'])),$_smarty_tpl);?>
">OK</a>
						</span>
					</div>
				</div>
			<?php } else { ?>
				<a class="btn btn-default insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems']);?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']) {?>
				<a class="btn btn-default update-tracker-links" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'link_items','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next'])),$_smarty_tpl);?>
">Update</a>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				var preselectedValue = $('#ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').length > 0 ? $('#ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').val() : $('#trackerinput_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').text();
				$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.insert-tracker-item').on('click', function() {
					var itemId = $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 select[name=addaction]').val();
					if( itemId ) {
						$(this).attr('href', "tiki-ajax_services.php?controller=tracker&action=clone_item&trackerId=<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'];?>
&next=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next']);?>
&itemId="+itemId+'&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
='+preselectedValue);
					} else {
						$(this).attr('href', "tiki-ajax_services.php?controller=tracker&action=insert_item&trackerId=<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'];?>
&next=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next']);?>
&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
="+preselectedValue);
					}
				});
				$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.update-tracker-links').on('click', function(e) {
					e.preventDefault();
					$.ajax({
						url: this.href,
						data: {
							items: $('input[name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[]"]:checked').map(function(i, el){ return $(el).val(); }).toArray(),
							linkField: <?php echo json_encode($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']);?>
,
							linkValue: preselectedValue,
							trackerlistParams: <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['trackerListOptions']);?>

						},
						success: function(data) {
							$('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 .ts-wrapperdiv').replaceWith(JSON.parse(data));
							$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 a[data-type=trackeritem]").clickModal({});
						}
					})
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
")
					.find('.insert-tracker-item')
					.clickModal({
						success: function (data) {
							var displayed = <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['list']);?>
;
							var row = '<tr>';
							if( <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value['trackerListOptions']['checkbox']);?>
 ) {
								row += '<td><input type="checkbox" class="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
-checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[]" value="'+( data.created ? data.created : data.itemId )+'" checked /></td>';
							}
							$.each(displayed, function(fieldId, permName) {
								if( $('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 th').filter(function(i, el){ return $(el).hasClass('field'+fieldId); }).length > 0 ) {
									row += '<td>'+data.processedFields[permName]+'</td>';
								}
							});
							row += '</tr>';
							$row = $(row);
							$('#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 table')
								.find('tbody').append($row)
								.trigger('addRows', [$row, true]);
							$.closeModal();
						}
					});
				$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
 a[data-type=trackeritem]").clickModal({});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php } else { ?>
		<select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];
if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>[]<?php }?>" <?php if ($_smarty_tpl->tpl_vars['data']->value['preselection']&&$_smarty_tpl->tpl_vars['data']->value['crossSelect']!='y') {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']) {?>multiple="multiple"<?php }?> class="form-control">
			<?php if ($_smarty_tpl->tpl_vars['field']->value['isMandatory']!='y'||empty($_smarty_tpl->tpl_vars['field']->value['value'])) {?>
				<option value=""></option>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['preselection']&&!$_smarty_tpl->tpl_vars['field']->value['value']&&$_smarty_tpl->tpl_vars['data']->value['preselection']==$_smarty_tpl->tpl_vars['id']->value||(($_smarty_tpl->tpl_vars['data']->value['selectMultipleValues']&&is_array($_smarty_tpl->tpl_vars['field']->value['value'])&&in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['field']->value['value'])||$_smarty_tpl->tpl_vars['field']->value['value']==$_smarty_tpl->tpl_vars['id']->value))) {?>selected="selected"<?php }?>>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

				</option>
			<?php } ?>
		</select>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems']&&$_smarty_tpl->tpl_vars['data']->value['createTrackerItems']) {?>
			<a class="btn btn-default insert-tracker-item" href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next'])),$_smarty_tpl);?>
" data-href="<?php echo smarty_function_service(array('controller'=>'tracker','action'=>'insert_item','trackerId'=>$_smarty_tpl->tpl_vars['field']->value['options_map']['trackerId'],'next'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['data']->value['next'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['field']->value['options_map']['addItems']);?>
</a>
			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere']) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$("#il<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
").find('.insert-tracker-item').on('click', function() {
					$(this).attr('href', $(this).data('href')+'&ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldThere'];?>
='+$('#ins_<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['preSelectFieldHere'];?>
').val());
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				$("select[name=<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
]").next().clickModal({
					success: function (data) {
						$('<option>')
							.attr('value', data.itemId)
							.text(data.itemTitle)
							.appendTo($(this).prev());
						$(this).prev().val(data.itemId);
						$(this).prev().trigger("change");
						$.closeModal();
					}
				});
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }?>
</div>
<?php }} ?>
