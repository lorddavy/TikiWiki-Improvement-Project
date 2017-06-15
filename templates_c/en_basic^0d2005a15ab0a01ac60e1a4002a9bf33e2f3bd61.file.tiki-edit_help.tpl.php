<?php /* Smarty version Smarty-3.1.21, created on 2017-06-06 15:54:21
         compiled from "D:\xampp\htdocs\tiki\templates\tiki-edit_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213815936b40d76eeb4-48401607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2005a15ab0a01ac60e1a4002a9bf33e2f3bd61' => 
    array (
      0 => 'D:\\xampp\\htdocs\\tiki\\templates\\tiki-edit_help.tpl',
      1 => 1496331454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213815936b40d76eeb4-48401607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'wysiwyg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5936b40d858032_93309517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5936b40d858032_93309517')) {function content_5936b40d858032_93309517($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'D:/xampp/htdocs/tiki/lib/smarty_tiki\\function.icon.php';
?>


<h3>Wiki Syntax</h3>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"More information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"More information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Wiki+Page+Editor" target="tikihelp" class="tikihelp alert-link" title="Wiki Page Editor: More help on editing wiki pages">
			Wiki Page Editor
		</a>
		and
		<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Wiki+Syntax" target="tikihelp" class="tikihelp alert-link" title="Wiki Syntax: The syntax system used for creating pages in Tiki">
			Wiki Syntax
		</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"More information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<table class="table table-condensed table-hover">
	<th>
		Wiki Syntax
	</th>
	<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')) {?>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'bold'),$_smarty_tpl);?>
 <strong>Bold text</strong> &nbsp;&nbsp;&nbsp; __text__
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'italic'),$_smarty_tpl);?>
 <strong>Italic text</strong> &nbsp;&nbsp;&nbsp; 2 single quotes ('). &nbsp;&nbsp;&nbsp; '"text"'
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'underline'),$_smarty_tpl);?>
 <strong>Underlined text</strong> &nbsp;&nbsp;&nbsp; ===text===
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'font','istyle'=>'color:red'),$_smarty_tpl);?>
 <strong>Colored text</strong> <br/> ~~#FFEE33:text~~ or ~~yellow:text~~. Will display using the indicated HTML color or color name. Color name can contain two colors separated by a comma. In this case, the first color would be the foreground and the second one the background.
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'strikethrough'),$_smarty_tpl);?>
 <strong>Deleted text</strong> &nbsp;&nbsp;&nbsp; 2 dashes "-". &nbsp;&nbsp;&nbsp; --text--
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'h1'),$_smarty_tpl);?>
 <strong>Headings</strong> <br/> !heading1, !!heading2, !!!heading3
			</td>
		</tr>
		<tr>
			<td>
				<strong>Show/Hide</strong> <br/> !+, !!- show/hide heading section. + (shown) or - (hidden) by default.
			</td>
		</tr>
		<tr>
			<td>
				<strong>Autonumbered Headings</strong> <br/> !#, !!#, !+#, !-# ...
			</td>
		</tr>
	<?php }?>
	<tr>
		<td>
			<strong>Table of contents</strong> <br/>{toc}, {maketoc} prints out a table of contents for the current page based on structures (toc) or ! headings (maketoc). Common optional parameters for maketoc are: title|maxdepth|levels|nums, and for toc are: order|showdesc|shownum|structId|maxdepth|pagename.
		</td>
	</tr>
	<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')) {?>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'horizontal-rule'),$_smarty_tpl);?>
 <strong>Horizontal rule</strong> &nbsp;&nbsp;&nbsp; -<em></em>-<em></em>-<em></em>-
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'box'),$_smarty_tpl);?>
 <strong>Text box</strong> &nbsp;&nbsp;&nbsp; ^Box content^
			</td>
		</tr>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'align-center'),$_smarty_tpl);?>
 <strong>Centered text</strong> &nbsp;&nbsp;&nbsp; <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_use_three_colon_centertag']=='y') {?>:::text:::<?php } else { ?>::text::<?php }?>
			</td>
		</tr>
	<?php }?>
	<tr>
		<td>
			<?php echo smarty_function_icon(array('name'=>'cog'),$_smarty_tpl);?>
 <strong>Dynamic variables</strong> <br/> %Name% Inserts an editable variable
		</td>
	</tr>
	<tr>
		<td>
			<?php echo smarty_function_icon(array('name'=>'link-external'),$_smarty_tpl);?>
 <strong>External links</strong> <br/> use square brackets for an external link: [URL], [URL|link_description],[URL|link_description|relation] or [URL|description|relation|nocache] (that last prevents the local Wiki from caching the linked page; relation can be used to insert rel attribute for the link - useful e.g. for shadowbox).<br>For an external Wiki, use ExternalWikiName:PageName or ((External Wiki Name: Page Name))
		</td>
	</tr>
	<tr>
		<td>
			<strong>Square Brackets</strong> <br/> Use [[foo] to show [foo].
		</td>
	</tr>
	<tr>
		<td>
			<?php echo smarty_function_icon(array('name'=>'link'),$_smarty_tpl);?>
 <strong>Wiki references</strong> <br/> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wikiwords']=='y') {?>JoinCapitalizedWords or use <?php }?>((page)) or ((page|description)) for wiki references
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_alink']=='y') {?>
			, ((page|#anchor)) or ((page|#anchor|desc)) for wiki heading/anchor references
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wikiwords']=='y') {?>, ))SomeName(( prevents referencing<?php }?>
		</td>
	</tr>
	<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')||(isset($_smarty_tpl->tpl_vars['wysiwyg']->value)&&$_smarty_tpl->tpl_vars['wysiwyg']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_wiki_parsed']=='y')) {?>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'list'),$_smarty_tpl);?>
 <?php echo smarty_function_icon(array('name'=>'list-numbered'),$_smarty_tpl);?>
 <strong>Lists</strong> <br> * for bullet lists, # for numbered lists, ;Word:definition for definiton lists
			</td>
		</tr>
		<tr>
			<td>
				<strong>Indentation</strong> <br/>+, ++ Creates an indentation for each plus (useful in list to continue at the same level)
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_tables']=='new') {?>
			<tr>
				<td>
					<?php echo smarty_function_icon(array('name'=>'table'),$_smarty_tpl);?>
 <strong>Tables</strong> <br/> || row1-col1 | row1-col2 | row1-col3<br>row2-col1 | row2-col2 | row2-col3 ||
				</td>
			</tr>
		<?php } else { ?>
			<tr>
				<td>
					<?php echo smarty_function_icon(array('name'=>'table'),$_smarty_tpl);?>
 <strong>Tables</strong> <br/> ||row1-col1|row1-col2|row1-col3||row2-col1|row2-col2|row2-col3||
				</td>
			</tr>
		<?php }?>
		<tr>
			<td>
				<?php echo smarty_function_icon(array('name'=>'title'),$_smarty_tpl);?>
 <strong>Title bar</strong> &nbsp;&nbsp;&nbsp; -=Title=-
			</td>
		</tr>
		<tr>
			<td>
				<strong>Monospace font</strong> &nbsp;&nbsp;&nbsp; -+Code sample+-
			</td>
		</tr>
	<?php }?>
	<tr>
		<td>
			<strong>Line break</strong> <br/>%%% (very useful especially in tables)
		</td>
	</tr>
	<tr>
		<td>
			<strong>Multi-page pages</strong> <br/>Use ...page... to separate pages
		</td>
	</tr>
	<tr>
		<td>
			<strong>Non-parsed sections</strong> <br/> ~np~ data ~/np~ Prevents wiki parsing of the enclosed data.
		</td>
	</tr>
	<tr>
		<td>
			<strong>Preformated sections</strong> <br/> ~pp~ data ~/pp~ Displays preformated text/code; no Wiki processing is done inside these sections (as with np), and the spacing is fixed (no word wrapping is done). ~pre~ data ~/pre~ also displayes preformatted text with fixed spacing, but wiki processing still occurs on the text.
		</td>
	</tr>
	<tr>
		<td>
			<strong>Comments</strong> <br/> ~tc~ Tiki Comment ~/tc~ makes a Tiki comment. It will be completely removed from the display, but saved in the file for future reference. ~hc~ HTML Comment ~/hc~ makes an HTML comment. It will be inserted as a comment in the output HTML; these are not normally displayed in browsers, but can be seen using "View Source" or similar.
		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_monosp']=='y') {?>
		<tr>
			<td>
				<strong>Block Preformatting</strong> <br/> Indent text with any number of spaces to change it to a monospaced block that still follows other Wiki formatting instructions. It will be indented with the same number of spaces that are used. Note that this mode does not preserve exact spacing and line breaks; use ~pp~...~/pp~ for that.
			</td>
		</tr>
	<?php }?>
	<tr>
		<td>
			<strong>Direction</strong> <br/>{r2l}, {l2r}, {rm}, {lm}Insert with respect to right-to-left and left-to-right text direction DIV (up to end of text) and markers for langages as Arabic and Hebrew.
		</td>
	</tr>
	<tr>
		<td>
			<strong>Special characters</strong> <br/>
			~hs~ hard space,
			~c~ &copy;,
			~amp~ &amp;,
			~lt~ &lt;,
			~gt~ &gt;,
			~ldq~ &ldquo;,
			~rdq~ &rdquo;,
			~lsq~ &lsquo;,
			~rsq~ &rsquo;,
			~--~ &mdash;,
			~bs~ &#92;,
			numeric between ~ for HTML numeric characters entity
		</td>
	</tr>
</table>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_paragraph_formatting']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Note",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Because the Wiki paragraph formatting feature is on, all groups of non-blank lines are collected into paragraphs. Lines can be of any length, and will be wrapped together with the next line. Paragraphs are separated by blank lines.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Note",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Because the Wiki paragraph formatting feature is off, each line will be presented as you write it. This means that if you want paragraphs to be wrapped properly, a paragraph should be all together on one line.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
