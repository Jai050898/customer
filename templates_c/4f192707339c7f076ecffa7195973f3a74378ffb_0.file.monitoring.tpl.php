<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:18:52
  from '/var/www/html/templates/monitoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbc9bca7dcc2_24700163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f192707339c7f076ecffa7195973f3a74378ffb' => 
    array (
      0 => '/var/www/html/templates/monitoring.tpl',
      1 => 1774963130,
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
function content_69cbc9bca7dcc2_24700163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-monitoring.php">Add Monitoring Item</a>&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-monitoring-goals.php">Add Monitoring Goal Item</a></span>
			<h1>Monitoring Budget</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Total Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Max Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Min Amount</strong></th>
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
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['year'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['amount'],2,".",",");?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['maxamt'],2,".",",");?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['minamt'],2,".",",");?>
</td>
					<td bgcolor="#f9f9f7">
						<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/show-monitoring-budget.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp; -->
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/edit-monitoring.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/monitoring.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&act=del" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Monitoring Items Found</font></td>
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
}
}
