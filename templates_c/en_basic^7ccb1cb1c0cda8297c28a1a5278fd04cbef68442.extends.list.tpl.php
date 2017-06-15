<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:40:40
         compiled from "D:\xampp\htdocs\tiki\templates\comment\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21595936b0d865c578-75785651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9e938826dc03a3e087be3611d3293da12f1210' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\comment\\list.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    '49cb0cb05eab9b6da1c6d32e837fb9d1990c2538' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\layouts\\internal\\ajax.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
    'da49393e1d96c64426ec481442c035af7efcfd52' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\comment\\list_inner.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21595936b0d865c578-75785651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b0d87e17d2_85570878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b0d87e17d2_85570878')) {function content_5936b0d87e17d2_85570878($_smarty_tpl) {?><?php if (!is_callable('smarty_function_bootstrap_modal')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_block_remarksbox')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_service')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\tiki\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<h3>Comments
		<span class="lock">
			<?php if (!$_smarty_tpl->tpl_vars['parentId']->value&&$_smarty_tpl->tpl_vars['allow_lock']->value) {?>
				<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'comment','action'=>'lock','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" class="btn btn-link btn-sm tips" title="Comments unlocked:Lock comments">
					<?php echo smarty_function_icon(array('name'=>"unlock"),$_smarty_tpl);?>

				</a>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['parentId']->value&&$_smarty_tpl->tpl_vars['allow_unlock']->value) {?>
				<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'comment','action'=>'unlock','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" class="btn btn-link btn-sm tips" title="Comments locked:Unlock comments">
					<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>

				</a>
			<?php }?>
		</span>
	</h3>

<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['cant']->value>0) {?>
		<?php /*  Call merged included template "comment/list_inner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("comment/list_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '21595936b0d865c578-75785651');
content_5936b0d86d7381_67031417($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment/list_inner.tpl" */?>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'info','title'=>"No comments")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'info','title'=>"No comments"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			There are no comments at this time.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'info','title'=>"No comments"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['allow_post']->value) {?>
		<div class="submit">
			<div class="buttons comment-form <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_form_displayed_default']=='y') {?>autoshow<?php }?>">
				<a class="btn btn-primary custom-handling" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" data-target="#add-comment-zone-<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',','');?>
">Post new comment</a>
			</div>
		</div>
		<div id="add-comment-zone-<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',','');?>
" class="add-comment-zone"></div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_inline_comments']=='y') {?>
		<a id="note-editor-comment" class="alert alert-info" style="display:none;" href="#">Add Comment</a>
	<?php }?>

	<?php echo '<script'; ?>
 type="text/javascript">
		var ajax_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
		var objectId = '<?php echo $_smarty_tpl->tpl_vars['objectId']->value;?>
';
	<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:40:40
         compiled from "D:\xampp\htdocs\tiki\templates\comment\list_inner.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5936b0d86d7381_67031417')) {function content_5936b0d86d7381_67031417($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_avatarize')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.avatarize.php';
if (!is_callable('smarty_modifier_userlink')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.userlink.php';
if (!is_callable('smarty_block_tr')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.tr.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_service')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.service.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
if (!is_callable('smarty_function_rating')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.rating.php';
if (!is_callable('smarty_block_jq')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.jq.php';
if (!is_callable('smarty_function_rating_result')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.rating_result.php';
?><ol class="media media-list comment-list">
	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<li class="media comment<?php if ($_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?> archived well well-sm<?php }?> <?php if ($_smarty_tpl->tpl_vars['allow_moderate']->value) {
if ($_smarty_tpl->tpl_vars['comment']->value['approved']=='n') {?> pending bg-warning<?php } elseif ($_smarty_tpl->tpl_vars['comment']->value['approved']=='r') {?> rejected bg-danger<?php }
}
if (!$_smarty_tpl->tpl_vars['parentId']->value&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_paragraph_formatting']=='y') {?> inline<?php }?>" data-comment-thread-id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['comment']->value['threadId']);?>
">
			<div class="media-left">
				<span class="avatar"><?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['comment']->value['userName'],'','img/noavatar.png');?>
</span>
			</div>
			<div class="media-body">
				<div class="comment-item">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['comments_notitle']=='y') {?>
						<h4 class="media-heading">
							<div class="comment-info">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small class="date"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
							</div>
						</h4>
					<?php } else { ?>
						<h4 class="media-heading">
							<div class="comment-title">
								<?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>

							</div>
							<div class="comment-info">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['comment']->value['userName'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small class="date"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['comment']->value['commentDate'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</small>
							</div>
						</h4>
					<?php }?>
					<div class="comment-body">
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['parsed'];?>

					</div>
					<div class="buttons comment-form comment-footer">
						
							<?php if ($_smarty_tpl->tpl_vars['allow_post']->value&&$_smarty_tpl->tpl_vars['comment']->value['locked']!='y') {?>
								<a class='btn btn-link btn-sm' href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value,'parentId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
">Reply</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['can_edit']) {?>
								<a class='btn btn-link btn-sm' href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'edit','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
">Edit</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['allow_remove']->value) {?>
								<a class="btn btn-link btn-sm" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'remove','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
">Delete</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['allow_archive']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['archived']=='y') {?>
									<span class="label label-default">Archived</span>
									<a class="btn btn-link btn-sm" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'archive','do'=>'unarchive','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
">Unarchive</a>
								<?php } else { ?>
									<a class="btn btn-link btn-sm" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'archive','do'=>'archive','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
">Archive</a>
								<?php }?>
							<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['allow_moderate']->value&&$_smarty_tpl->tpl_vars['comment']->value['approved']!='y') {?>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['approved']=='n') {?>
								<span class="label label-warning">Pending</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['approved']=='r') {?>
								<span class="label label-danger">Rejected</span>
							<?php }?>
							<a href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'moderate','do'=>'approve','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
" class="btn btn-default btn-sm tips" title="Approve"><?php echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);?>
</a>
							<?php if ($_smarty_tpl->tpl_vars['comment']->value['approved']=='n') {?>
								<a href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'moderate','do'=>'reject','threadId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>
" class="btn btn-default btn-sm tips" title="Reject"><?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
</a>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['comment']->value['userName']!=$_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['comment']->value['approved']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_simple_ratings']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_vote_comments']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_comments']->value=='y')) {?>
							<form class="commentRatingForm" method="post">
								<?php echo smarty_function_rating(array('type'=>"comment",'id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>

								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value['threadId'];?>
" />
								<input type="hidden" name="type" value="comment" />
							</form>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								var crf = $('form.commentRatingForm').submit(function() {
									var vals = $(this).serialize();
									$.tikiModal(tr('Loading...'));
									$.post($.service('rating', 'vote'), vals, function() {
										$.tikiModal();
										$.notify(tr('Thanks for rating!'));
									});
									return false;
								});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_simple_ratings']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_ratings_view_results']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')) {?>
							<?php echo smarty_function_rating_result(array('type'=>"comment",'id'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']),$_smarty_tpl);?>

						<?php }?>

					</div><!-- End of comment-footer -->
				</div><!-- End of comment-item -->
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['replies_info']['numReplies']>0) {?>
					<?php /*  Call merged included template "comment/list_inner.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('comment/list_inner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comments'=>$_smarty_tpl->tpl_vars['comment']->value['replies_info']['replies'],'cant'=>$_smarty_tpl->tpl_vars['comment']->value['replies_info']['numReplies'],'parentId'=>$_smarty_tpl->tpl_vars['comment']->value['threadId']), 0, '21595936b0d865c578-75785651');
content_5936b0d86d7381_67031417($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "comment/list_inner.tpl" */?>
				<?php }?>
			</div><!-- End of media-body -->
		</li>
	<?php } ?>
</ol>
<?php }} ?>
