<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:20:15
  from '/var/www/html/templates/calendars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbca0fbd4c37_04198283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89dab204268bb9e3c42c79f613fde28e9bc1d89e' => 
    array (
      0 => '/var/www/html/templates/calendars.tpl',
      1 => 1774963213,
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
function content_69cbca0fbd4c37_04198283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/colorpicker.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-cal.php">Add Calendar Item</a>&nbsp;|&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/shared-cal.php">Shared Calendars</a></span>
			<h1>Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Name</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Start Date</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>End Date</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Duration</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></th>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tasks']->value, 'item', false, NULL, 'item', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null)+1;?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $_smarty_tpl->tpl_vars['item']->value['sdate'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $_smarty_tpl->tpl_vars['item']->value['edate'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $_smarty_tpl->tpl_vars['item']->value['duration'];?>
 days</td>
					<td bgcolor="#f9f9f7">
					<a href="javascript: ShowGntt(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal.png" border="0" title="View Gantt" alt="View Gantt" /></a>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/show-cal.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/calendar.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/edit-cal.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/copy-cal.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/copy.png" border="0" title="Copy" alt="Copy" /></a>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/calendars.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&act=del" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/slow-periods.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/timeline_marker.png" border="0" title="Slow Periods" alt="Slow Periods" /></a></td>
				</tr>
				<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Calendar Items Found</font></td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/thickbox.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tasks']->value, 'item', false, NULL, 'item', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']++;
?>
		$('#input<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_item']->value['index'] : null);?>
').ColorPickerSetColor({ color: '<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
' });
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	});
	function ShowGntt(id)
	{
		tb_show('Show Chart','cal-gantt.php?height=500&width=1040&id='+id);
		return;
	}
<?php echo '</script'; ?>
>
<?php }
}
