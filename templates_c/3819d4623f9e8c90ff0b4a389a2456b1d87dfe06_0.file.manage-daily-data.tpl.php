<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:23:58
  from '/var/www/html/templates/manage-daily-data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbcaeeb39c80_89829310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3819d4623f9e8c90ff0b4a389a2456b1d87dfe06' => 
    array (
      0 => '/var/www/html/templates/manage-daily-data.tpl',
      1 => 1774963436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbcaeeb39c80_89829310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft daily_hours_left">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-daily-data.php">Add Daily Data</a></span>
			<h1>Manage Daily Data</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Date</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Actual Hours</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Available Hours</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sold Hours</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Sales before Discount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Parts Sales</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Labor sales</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Technician</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Adviser</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Bay</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Efficiency</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Productivity</strong></th>
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
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['ddate'],"%m/%d/%y");?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['available_hours'];?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['actual_hours'];?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['sold_hours'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sales_before_discounts'],2,".",",");?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['parts_sales'],2,".",",");?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['labor_sales'],2,".",",");?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sales_per_technician'],2,".",",");?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sales_per_advisor'],2,".",",");?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sales_per_bay'],2,".",",");?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['efficiency'];?>
%</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['productivity'];?>
%</td>
					<td bgcolor="#f9f9f7">
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/edit-daily-data.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-daily-data.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&act=del" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<tr>
					<td colspan="14" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Data Found</font></td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
			<div class="clear"></div>
		</div>
                		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
