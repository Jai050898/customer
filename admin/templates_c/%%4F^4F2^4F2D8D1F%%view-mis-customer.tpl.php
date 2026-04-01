<?php /* Smarty version 2.6.26, created on 2013-01-19 02:58:12
         compiled from view-mis-customer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-mis-customer.tpl', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
					  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-users.php">Manage MIS Customers</a></li>
					  <li>View MIS Customers</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View MIS Customers</div>
		  </div>
		  <div class="ad_textsp">
				<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
					  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
						  <tr>
							<td colspan="2"><h2>View MIS Customers</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Name</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_firstname']; ?>
 <?php echo $this->_tpl_vars['User']['MIS_lastname']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Spouse Name</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_spousename']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Company</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_company']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Address</td>
							<td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['MIS_address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">State</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_state']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">City</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_city']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Zip Code</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_zip']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Balance Due</td>
							<td width="80%" align="left">$ <?php echo $this->_tpl_vars['User']['MIS_BalanceDue']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Credit Amount</td>
							<td width="80%" align="left">$ <?php echo $this->_tpl_vars['User']['MIS_CreditAmt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Average RO</td>
							<td width="80%" align="left">$ <?php echo $this->_tpl_vars['User']['MIS_AverageRO']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">YTD Total</td>
							<td width="80%" align="left">$ <?php echo $this->_tpl_vars['User']['MIS_YTDTotal']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Life Total</td>
							<td width="80%" align="left">$ <?php echo $this->_tpl_vars['User']['MIS_LifeTotal']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Price Level</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_pricelevel']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Labor Level</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_laborlevel']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Remarks</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_remarks']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax1</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax1']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax2</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax2']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax3</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax3']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax4</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax4']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax5</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax5']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax6</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax6']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax7</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax7']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax8</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax8']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax9</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax9']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax10</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax10']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Special Orders</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_SpecialOrders']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Follow Up</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_followUp']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Email Address</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_EmailAddress']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Fee Assessment Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_FeeAssessmentDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Current Fee Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_CurrentFeeAmount']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">No Late Fee</td>
							<td width="80%" align="left"><?php if ($this->_tpl_vars['User']['MIS_NoLateFee'] == '0'): ?>YES<?php else: ?>NO<?php endif; ?></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">New Cust FollowUp Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_NewCustFollowUpDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Last Visited</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_LastVisited']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">First Visited</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_FirstVisited']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Lifetime Visits</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_LifetimeVisits']; ?>
</td>
						  </tr>
						 </table>
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
					<td height="50" align="left" valign="top">&nbsp;</td>
					</tr>
				</table>			  
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