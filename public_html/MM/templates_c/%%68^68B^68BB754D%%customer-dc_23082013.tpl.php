<?php /* Smarty version 2.6.26, created on 2013-09-10 06:39:38
         compiled from customer-dc_23082013.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div>
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Center</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Title</th>
										<th bgcolor="#336699" style="color:#fff;">Total</th>
										<th bgcolor="#336699" style="color:#fff;">Last Year</th>
										<th bgcolor="#336699" style="color:#fff;">Last 3 Months</th>
										<th bgcolor="#336699" style="color:#fff;">Last Month</th>
									</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['ctot']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['ltot']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['l3mtot']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lmtot']; ?>
</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg Customers Visits</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['avgcust']; ?>
 times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lavgcust']; ?>
 times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['l3mavgcust']; ?>
 times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lmavgcust']; ?>
 times</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. Length of time since last visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['avgdays']; ?>
 days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lavgdays']; ?>
 days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['l3mavgdays']; ?>
 days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lmavgdays']; ?>
 days</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. $ per visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['avgcost']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['lavgcost']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['l3mavgcost']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['lmavgcost']; ?>
</td>
										</tr>
										
								  </table>
								  <div style="height:10px; clear:both;"></div>
			<h1>Customer Data Year Wise</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Year</th>
										<th bgcolor="#336699" style="color:#fff;">First Visit Customers</th>
										<th bgcolor="#336699" style="color:#fff;">Last Visit Customers</th>
									</tr>
									<?php $_from = $this->_tpl_vars['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['fvisits']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['lvisits']; ?>
</td>
										</tr>
									<?php endforeach; endif; unset($_from); ?>	
								  </table>
								  <div style="height:10px; clear:both;"></div>
			</div>
				<div class="clear"></div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
		});	
</script>
'; ?>