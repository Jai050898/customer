<?php /* Smarty version 2.6.26, created on 2013-06-26 02:47:06
         compiled from manage-mis-customers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'manage-mis-customers.tpl', 40, false),array('modifier', 'count', 'manage-mis-customers.tpl', 49, false),array('function', 'cycle', 'manage-mis-customers.tpl', 78, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
								  <li>Manage MIS Customers</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage MIS Customers</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageMISCustomers" class="form" method="post" name="ManageMISCustomers">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
						<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Manage MIS Customers</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
								<select name="user_id" id="user_id" class="searchinput">
									<option value="">-- Select --</option>
									<?php $_from = $this->_tpl_vars['Clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
									<option value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
" <?php if ($_REQUEST['user_id'] == $this->_tpl_vars['item']['user_id']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</option>
									<?php endforeach; endif; unset($_from); ?>
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageMISCustomers.submit();" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<?php if (count($this->_tpl_vars['Users']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMISCustomers,'D','chkall[]');"/> -->
												</td>
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
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
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageMISCustomers,'chkall[]','checkall');" /></th>
										<th width="17%" align="left"><a href="javascript: setClientSort('MIS_lastname','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'MIS_lastname'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('MIS_city','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageMISCustomers);">City </a> <?php if ($_REQUEST['sortby'] == 'MIS_city'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th width="10%" align="left">State</th>
										<th width="10%" align="left">Lifetime Visits </th>
										<th width="10%" align="left">Total Vehicles</th>
										<th width="10%" align="left">Total Repair Orders</th>
									</tr>
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"/></td>
											<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-mis-customer.php?user_id=<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"><?php echo $this->_tpl_vars['item']['MIS_lastname']; ?>
 <?php echo $this->_tpl_vars['item']['MIS_firstname']; ?>
</a></td>
											<td align="left" style="padding-right:15px;"> <?php echo $this->_tpl_vars['item']['MIS_city']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['MIS_state']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['MIS_LifetimeVisits']; ?>
</td>
											<td align="left" ><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-mis-vehicles.php?user_id=<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"><?php echo $this->_tpl_vars['item']['Vcount']; ?>
</a></td>
											<td align="left" ><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-mis-ros.php?user_id=<?php echo $this->_tpl_vars['item']['MIS_cust_ID']; ?>
"><?php echo $this->_tpl_vars['item']['Rcount']; ?>
</a></td>
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No MIS Customers Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Users']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMISCustomers,'D','chkall[]');"/> -->
												</td>
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
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
					<!--end of middle part -->
					<!--end of right part -->
					  <div class="clr"></div>
				  </div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
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