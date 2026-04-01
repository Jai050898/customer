<?php /* Smarty version 2.6.26, created on 2013-06-11 09:36:13
         compiled from view-mis-customer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-mis-customer.tpl', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>View MIS Customers</h1>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_firstname']; ?>
 <?php echo $this->_tpl_vars['User']['MIS_lastname']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Spouse Name :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_spousename']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Company :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_company']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Address :</td>
							<td align="left" valign="center" width="65%"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['MIS_address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">State :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_state']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">City :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_city']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Zip Code :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_zip']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Balance Due :</td>
							<td align="left" valign="center" width="65%">$ <?php echo $this->_tpl_vars['User']['MIS_BalanceDue']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Credit Amount :</td>
							<td align="left" valign="center" width="65%">$ <?php echo $this->_tpl_vars['User']['MIS_CreditAmt']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Average RO :</td>
							<td align="left" valign="center" width="65%">$ <?php echo $this->_tpl_vars['User']['MIS_AverageRO']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">YTD Total :</td>
							<td align="left" valign="center" width="65%">$ <?php echo $this->_tpl_vars['User']['MIS_YTDTotal']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Life Total :</td>
							<td align="left" valign="center" width="65%">$ <?php echo $this->_tpl_vars['User']['MIS_LifeTotal']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Price Level :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_pricelevel']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Level :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_laborlevel']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Remarks :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_remarks']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax1 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax1']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax2 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax2']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax3 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax3']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax4 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax4']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax5 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax5']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax6 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax6']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax7 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax7']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax8 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax8']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax9 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax9']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax10 :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_tax10']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Special Orders :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_SpecialOrders']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Follow Up :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_followUp']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Email Address :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_EmailAddress']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Fee Assessment Date :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_FeeAssessmentDate']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Current Fee Amount :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_CurrentFeeAmount']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">No Late Fee :</td>
							<td align="left" valign="center" width="65%"><?php if ($this->_tpl_vars['User']['MIS_NoLateFee'] == '0'): ?>YES<?php else: ?>NO<?php endif; ?></td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">New Cust FollowUp Date :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_NewCustFollowUpDate']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Last Visited :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_LastVisited']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">First Visited :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_FirstVisited']; ?>
</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Lifetime Visits :</td>
							<td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['MIS_LifetimeVisits']; ?>
</td>
						  </tr>
						 </table>			  
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
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>