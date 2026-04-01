<?php /* Smarty version 2.6.26, created on 2013-01-23 02:52:13
         compiled from view-mis-ro.tpl */ ?>
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
/admin/manage-mis-customer.php">Manage MIS Customers</a></li>
					  <li>View MIS RO</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View MIS RO</div>
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
							<td colspan="2"><h2>View MIS RO</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Type</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_type']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Line Number</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_lineno']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">License</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_license']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Schedule Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_sched']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Promised Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_promised']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">RO prn</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_RO_prn']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Invoice prn</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_inv_prn']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Status</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_status']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Time In</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_timein']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Time Out</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_timeout']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Location</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_location']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Customer Name</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_custname']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">YMM</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_ymm']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Rec Number</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_recno']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Hat</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_hat']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Date Posted</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_dateposted']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Last Item Used</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_lastitemused']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Writer</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_writer']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odom In</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_odom_in']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odom Out</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_odom_out']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Balance Due</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_balancedue']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Writer Number</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_writernum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Ref Number</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_refno']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimated Labor Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_estlaboramt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimated Parts Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_estpartsamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimated Hours</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_esthours']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Labor Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_laboramt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Parts Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_partsamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Default Tech</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_defaultTech']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Default Tech Parts</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_defaultTechParts']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Haz waste</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_hazwaste']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Shops up plies</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_shopsupplies']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Haz Waste Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_hazwasteamt']; ?>
</td>
						  </tr>
						  
						  <tr class="color_trbg">
							<td width="20%">Shops up Plies Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_shopsuppliesamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Version String</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_versionstring']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Version</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxversion']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat1</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat1']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat2</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat2']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat3</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat3']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat4</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat4']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat5</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat5']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat6</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat6']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat7</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat7']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat8</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat8']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount mat9</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtmat9']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab1</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab1']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab2</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab2']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab3</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab3']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab4</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab4']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab5</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab5']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab6</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab6']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Lab7</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtlab7']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Hazmat</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamthazmat']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax Amount Shop Supplies</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_taxamtshopsupplies']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Printed Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_PrintedDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Discount Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_discountamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimated Discount Amount</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_estdiscountamt']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimate Tax</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_EstimateTax']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimate Hazmat</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_EstimateHazmat']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Estimate Shop Supplies</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_EstimateShopSupplies']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Created As Estimate</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_CreatedAsEstimate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Reason For Visit</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_ReasonForVisit']; ?>
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