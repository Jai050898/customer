<?php /* Smarty version 2.6.26, created on 2014-01-27 03:01:13
         compiled from manage-daily-data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'manage-daily-data.tpl', 29, false),array('modifier', 'number_format', 'manage-daily-data.tpl', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft daily_hours_left">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
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
				<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['ddate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%y") : smarty_modifier_date_format($_tmp, "%m/%d/%y")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['available_hours']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['actual_hours']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['sold_hours']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sales_before_discounts'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['parts_sales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['labor_sales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sales_per_technician'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sales_per_advisor'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sales_per_bay'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['efficiency']; ?>
%</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['productivity']; ?>
%</td>
					<td bgcolor="#f9f9f7">
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/edit-daily-data.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-daily-data.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&act=del" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="14" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Data Found</font></td>
				</tr>
				<?php endif; unset($_from); ?>
			</table>
			<div class="clear"></div>
		</div>
                		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>