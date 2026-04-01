<?php /* Smarty version 2.6.26, created on 2013-05-22 06:12:58
         compiled from manage-mis-customers-report.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'manage-mis-customers-report.tpl', 48, false),array('modifier', 'count', 'manage-mis-customers-report.tpl', 62, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;">&nbsp;</span>
			<h1>Manage MIS Customers Report</h1>
					<form id="ManageMISCustomers" class="form" method="post" name="ManageMISCustomers">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
						<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" style="width:150px;" />
									<input type="image" src="images/go_but.png" onclick="document.ManageMISCustomers.submit();" style="vertical-align:bottom;" /> 
									&nbsp;&nbsp;&nbsp;<strong>Years</strong> : &nbsp;<strong>From</strong>&nbsp;<input type="text" name="yearfrom" id="yearfrom" value="<?php if ($_REQUEST['yearfrom'] != ""): ?><?php echo $_REQUEST['yearfrom']; ?>
<?php endif; ?>" class="input" style="width:100px;" />&nbsp;<strong>To</strong>&nbsp;<input type="text" name="yearto" id="yearto" value="<?php if ($_REQUEST['yearto'] != ""): ?><?php echo $_REQUEST['yearto']; ?>
<?php endif; ?>" class="input" style="width:100px;" />
									<input type="image" src="images/go_but.png" onclick="document.ManageMISCustomers.submit();" style="vertical-align:bottom;" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">S.No</th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_lastname','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">Name</a> <?php if ($_REQUEST['sortby'] == 'MIS_lastname'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_LifetimeVisits','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">Visits </a> <?php if ($_REQUEST['sortby'] == 'MIS_LifetimeVisits'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_FirstVisited','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">First Visited</a><?php if ($_REQUEST['sortby'] == 'MIS_FirstVisited'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_LastVisited','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">Last Visited</a><?php if ($_REQUEST['sortby'] == 'MIS_LastVisited'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_AverageRO','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">Average RO</a><?php if ($_REQUEST['sortby'] == 'MIS_AverageRO'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th bgcolor="#336699" style="color:#fff;">Customer From</th>
										<th bgcolor="#336699" style="color:#fff;">Last Visit</th>
									</tr>
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-mis-customer.php?user_id=<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"><?php echo $this->_tpl_vars['item']['MIS_lastname']; ?>
 <?php echo $this->_tpl_vars['item']['MIS_firstname']; ?>
</a></td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-mis-ros.php?user_id=<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"><?php echo $this->_tpl_vars['item']['MIS_LifetimeVisits']; ?>
</a></td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['MIS_FirstVisited'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['MIS_LastVisited'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['item']['MIS_AverageRO']; ?>
</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['duration']; ?>
 Days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['lastvisit']; ?>
 Days ago</td>
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No MIS Customers Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Users']) > 0): ?>
								<tr>
							  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
								<tr>
								<td  align="left" bgcolor="#336699">&nbsp;		</td>
								<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
								</tr>
								</table>
								</td>
								</tr>
							<?php endif; ?>
						</table>
					</form>
					<div class="clear"></div>
			</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>