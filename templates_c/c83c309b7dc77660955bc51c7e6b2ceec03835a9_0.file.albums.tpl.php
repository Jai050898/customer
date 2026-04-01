<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:01:49
  from '/var/www/html/templates/albums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbc5bd5ee9a9_89989349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83c309b7dc77660955bc51c7e6b2ceec03835a9' => 
    array (
      0 => '/var/www/html/templates/albums.tpl',
      1 => 1774962106,
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
function content_69cbc5bd5ee9a9_89989349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Albums</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Select Album</U></h3></td>
				</tr>
				<tr>
				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat']->value, 'item', false, NULL, 'item', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']++;
?>
				  <td align="left" valign="left" style="padding-left:30px;"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/image-gallery.php?album=<?php echo $_smarty_tpl->tpl_vars['item']->value['album_id'];?>
" style="color:#5E7185;font-family:arial;font-size:14px;"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/gallery.jpeg" alt="Gallery" /><br /><?php echo $_smarty_tpl->tpl_vars['item']->value['album_name'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['item']->value['totphotos'];?>
)</a><br /><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_date']);?>
</strong></td>
				  <?php $_smarty_tpl->_assignInScope('row', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null)+1);?>
				   <?php if ($_smarty_tpl->tpl_vars['row']->value % 2 == "0") {?>
				  	</tr><tr>
					<?php }?>
				  <?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Albums added</td>
					</tr>
				  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tr>
				
			</table>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl->_subTemplateRender("file:rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="clear"></div>
	</div>
	
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
