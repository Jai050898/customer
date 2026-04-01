<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:16:28
  from '/var/www/html/templates/links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbc92c854ff2_24551638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bdd04f82536c552ad4511917bf003b24f268c5' => 
    array (
      0 => '/var/www/html/templates/links.tpl',
      1 => 1774962986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:rightbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbc92c854ff2_24551638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.base64_encode.php','function'=>'smarty_modifier_base64_encode',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Links</h1>
			<div style="min-height:470px;color:#2f3337;" class="left_content" >
			<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				<tr>
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Links']->value, 'item', false, NULL, 'item', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']++;
?>
				  <td align="left" valign="left" style="padding-left:10px;" width="50%">
				  <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/view-link.php?Id=<?php echo smarty_modifier_base64_encode($_smarty_tpl->tpl_vars['item']->value['link_id']);?>
&url=<?php echo smarty_modifier_base64_encode($_smarty_tpl->tpl_vars['item']->value['link_url']);?>
" target="_blank"><img src="images/leftarrow.png" border="0">&nbsp;
				   <?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
</a>
				  </td>
				  <?php $_smarty_tpl->_assignInScope('row', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null)+1);?>
				   <?php if ($_smarty_tpl->tpl_vars['row']->value % 2 == "0") {?>
				  	</tr><tr>
					<?php }?>
				  <?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Links added</td>
					</tr>
				  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				<?php if (count($_smarty_tpl->tpl_vars['Links']->value) > 0) {?>
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4"><div style="float:right; padding-right:10px;"><?php if ($_smarty_tpl->tpl_vars['first']->value != '') {
echo $_smarty_tpl->tpl_vars['first']->value;
}
if ($_smarty_tpl->tpl_vars['prev']->value != '') {
echo $_smarty_tpl->tpl_vars['prev']->value;
}
if ($_smarty_tpl->tpl_vars['nav']->value != '') {
echo $_smarty_tpl->tpl_vars['nav']->value;
}
if ($_smarty_tpl->tpl_vars['next']->value != '') {
echo $_smarty_tpl->tpl_vars['next']->value;
}
if ($_smarty_tpl->tpl_vars['last']->value != '') {
echo $_smarty_tpl->tpl_vars['last']->value;
}?></div></td>
				</tr>
				<?php }?>
			</table>
			</div>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl->_subTemplateRender("file:rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/thickbox.js"><?php echo '</script'; ?>
>	<?php }
}
