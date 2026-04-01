<?php /* Smarty version 2.6.26, created on 2011-02-18 07:14:46
         compiled from integrated-step13.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'integrated-step13.tpl', 41, false),array('function', 'html_checkboxes', 'integrated-step13.tpl', 103, false),)), $this); ?>
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
/admin/integrated-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Integrated survey</a></li>
							<li>Marketing / Advertising Leaders</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Marketing / Advertising Leaders</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepSeven" id="frmStepSeven" method="post" enctype="multipart/form-data" class="fValidator-form"  onsubmit="return validateForm()">
						<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
							  <tr>
								<td align="center" colspan="3">&nbsp;																	</td>
							  </tr>
							  <?php if ($this->_tpl_vars['Errormssage']): ?>
							  <tr>
								<td align="center" colspan="3"><span class="error"><?php echo $this->_tpl_vars['Errormssage']; ?>
</span>																	</td>
							  </tr>
							  <tr>
								<td align="center" colspan="3">&nbsp;																	</td>
							  </tr>
							  <?php endif; ?>
							 
							  <tr>
								<td width="76%" align="left" valign="top" style="padding-bottom:5px;padding-right:8px" >Do you purchase Mailing Lists</td>
								<td width="24%" colspan="2">																	</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-left:25px" valign="top" >
									<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_radios(array('name' => 'PurchaseMailingList','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingList'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divPurhaseMailing'); setHidValue(this.value); toggleDiv(this.value-1,'divPurchaseMailingOutsource')"), $this);?>

									<?php if ($this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingList']): ?>
									<div style="width:100%; display:block" id="divPurhaseMailing">
									<?php echo smarty_function_html_radios(array('name' => 'PurchaseMailingOutsource','options' => $this->_tpl_vars['selfOutHouseArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingOutsource'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divPurchaseMailingOutsource')",'id' => 'radOutSourced'), $this);?>

									
									</div>
									<?php else: ?>
									<div style="width:100%; display:none" id="divPurhaseMailing">
									<input type="radio" name="PurchaseMailingOutsource" id="PurchaseMailingOutsource"  value="0" class="form" onclick="toggleDiv(this.value,'divPurchaseMailingOutsource')">
									Self  &nbsp;&nbsp;
									<input type="radio" name="PurchaseMailingOutsource" id="PurchaseMailingOutsource" value="1" class="form" onclick="toggleDiv(this.value,'divPurchaseMailingOutsource')">
									Outsourced 
									</div>
									<?php endif; ?>
									</div>	
								</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							 <?php if ($this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingOutsource']): ?>
							  <tr>
								 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
									<div style="border:#B5B5B5 1px solid; width:99% ; display:block" id="divPurchaseMailingOutsource">
								<table width="100%" border="0" bgcolor="#E5E5E5">
									   <tr>
										<td width="27%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
										<td width="73%" colspan="2">
										<input type="text" name="PurchaseMailingOutsourceWhom" id="PurchaseMailingOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingOutsourceWhom']; ?>
"/>																			</td>
									  </tr>	
								  </table>
								  </div>																	</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <?php else: ?>
							  <tr>
								 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
									<div style="border:#B5B5B5 1px solid; width:99% ; display:none" id="divPurchaseMailingOutsource">
								<table width="100%" border="0" bgcolor="#E5E5E5">
									   <tr>
										<td width="27%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
										<td width="73%" colspan="2">
										<input type="text" name="PurchaseMailingOutsourceWhom" id="PurchaseMailingOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingOutsourceWhom']; ?>
"/>																			</td>
									  </tr>	
								  </table>
								  </div>																	</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <?php endif; ?>	
							   <?php if ($this->_tpl_vars['marketingLeadersDetail']['PurchaseMailingList']): ?>
							   <tr>
							   <td align="left" colspan="3">
							   <div id="trPurchaseList" style="display:block">
								   <table width="100%" border="0">
									   <tr >
										<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you purchase lists for:</td>
										<td colspan="2">
																											</td>
									  </tr>
									  <tr >
										<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
											<div style="width:100%; padding-left:10px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'PurchaseList','values' => $this->_tpl_vars['purchaseIndexArray'],'output' => $this->_tpl_vars['purchaseStrArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['PurchaseList'],'separator' => "<br />",'id' => 'PurchaseList'), $this);?>

											
											<input type="text" name="PurchaseListOther" id="PurchaseListOther" class="form" maxlength="100" onchange="setChecked('PurchaseList','frmStepSeven','3')" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['PurchaseListOther']; ?>
"/>	
											<br>
										<td colspan="2">																	</td>
									  </tr>
								   </table>
							   </div>
							   </td>
							   </tr>
							   <?php else: ?>
							   <tr>
							   <td align="left" colspan="3">
							   <div id="trPurchaseList" style="display:none">
								   <table width="100%" border="0">
									   <tr >
										<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you purchase lists for:</td>
										<td colspan="2">
																											</td>
									  </tr>
									  <tr >
										<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
											<div style="width:100%; padding-left:10px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'PurchaseList','values' => $this->_tpl_vars['purchaseIndexArray'],'output' => $this->_tpl_vars['purchaseStrArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['PurchaseList'],'separator' => "<br />",'id' => 'PurchaseList'), $this);?>

											
											<input type="text" name="PurchaseListOther" id="PurchaseListOther" class="form" value="<?php echo $this->_tpl_vars['BOwnerEmail']; ?>
" maxlength="100" onchange="setChecked('PurchaseList','frmStepSeven','3')" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['PurchaseListOther']; ?>
"/>	
											<br>
										<td colspan="2">																	</td>
									  </tr>
								   </table>
							   </div>
							   </td>
							   </tr>
							   <?php endif; ?>
							   
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you offer any of the following?</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_checkboxes(array('name' => 'OfferList','values' => $this->_tpl_vars['offerIndexArray'],'output' => $this->_tpl_vars['offerStrArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['OfferList'],'separator' => "<br />"), $this);?>

									</div>
									</td>
								<td colspan="2">																	</td>
							  </tr>
							  <tr>
								<td  colspan="3" align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >What incentives do you use to bring in business, and what methods do you use with those (i.e. - Published advertisements or Direct Mailers) ?</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
								<div style="border:#B5B5B5 1px solid;">
								<table width="100%" border="0" bgcolor="#E5E5E5">
								  <tr>
									<td width="67%" align="left">&nbsp;</td>
									<td width="14%" align="center">&nbsp;Advertisements </td>
									<td width="19%" align="center">&nbsp;Mailers </td>
								  </tr>
								  <tr>
									<td>
									<div style="width:100%; padding-left:10px" >
									Back to School <br>
									Spring Break<br>
									Summer Break<br>
									Expiring Warranty<br>
									Bring in 5 year or older vehicle<br>
									Soon to expire warranty<br>
									Intro to local business<br>
									Tax Day<br>
									Christmas<br>
									Easter<br>
									Thanksgiving<br>
									4th of July<br>
									Mother's Day<br>
									Father's Day<br>
									</div>
									</td>
									<td align="center">
									<div style="width:100%;">
									<?php echo smarty_function_html_checkboxes(array('name' => 'Advertisements','values' => $this->_tpl_vars['advStrArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['Advertisements'],'separator' => "<br />"), $this);?>

									
									</div>
									</td>
									<td align="center">
									<div style="width:100%;">
									<?php echo smarty_function_html_checkboxes(array('name' => 'Mailers','values' => $this->_tpl_vars['advStrArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['Mailers'],'separator' => "<br />"), $this);?>

									
									</div>
									</td>
								  </tr>
								  
								</table>
								</div>
								</td>
								<td colspan="2">	</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Are there any other special incentives you use to bring in business - and how are they used (Advertisement / Mailer)?"</td>
								<td colspan="2">
																									</td>
							  </tr>
							   <tr>
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									
									<textarea name="OtherSpecialIncentive" class="form" cols="70" rows="4"><?php echo $this->_tpl_vars['marketingLeadersDetail']['OtherSpecialIncentive']; ?>
</textarea>
									
									<br>
								<td colspan="2">																	</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >In Hand to get return business</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									
									<?php echo smarty_function_html_checkboxes(array('name' => 'InHand','values' => $this->_tpl_vars['inhandIndexArray2'],'output' => $this->_tpl_vars['inhandStrArray2'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['InHand'],'separator' => "<br />"), $this);?>

									
								<td colspan="2">																	</td>
							  </tr>
							   <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you have an outside Salesperson for fleet business ?</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-left:25px" valign="top" >
									<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_radios(array('name' => 'HaveOutSideSalesFleet','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['HaveOutSideSalesFleet'],'separator' => "&nbsp;"), $this);?>

									
									</div>	
								</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							   <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you have an outside salesperson for other business ?</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-left:25px" valign="top" >
									<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_radios(array('name' => 'HaveOutSideSalesOther','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['HaveOutSideSalesOther'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divOutsideSales')",'id' => 'HaveOutSideSalesOther'), $this);?>

									
									</div>	
								</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							 <?php if ($this->_tpl_vars['marketingLeadersDetail']['HaveOutSideSalesOther']): ?>
							  <tr>
								 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
									<div style="border:#B5B5B5 1px solid; width:99%; display:block" id="divOutsideSales">
								<table width="100%" border="0" bgcolor="#E5E5E5">
									   <tr>
										<td width="21%" align="right" valign="middle" style="padding-bottom:10px">Please describe ?</td>
										<td width="79%" colspan="2">
										<input type="text" name="HaveOutSideSalesOtherDetail" id="HaveOutSideSalesOtherDetail" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['HaveOutSideSalesOtherDetail']; ?>
"/>																			</td>
									  </tr>	
								  </table>
								  </div>																	</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <?php else: ?>
							   <tr>
								 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
									<div style="border:#B5B5B5 1px solid; width:99%; display:none" id="divOutsideSales">
								<table width="100%" border="0" bgcolor="#E5E5E5">
									   <tr>
										<td width="21%" align="right" valign="middle" style="padding-bottom:10px">Please describe ?</td>
										<td width="79%" colspan="2">
										<input type="text" name="HaveOutSideSalesOtherDetail" id="HaveOutSideSalesOtherDetail" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['BOwnerEmail']; ?>
"/>																			</td>
									  </tr>	
								  </table>
								  </div>																	</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							  <?php endif; ?>
							  
							  <tr>
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Check 4 words that best describe how you want to be perceived by your customers?</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_checkboxes(array('name' => 'PerceivedCustomers','values' => $this->_tpl_vars['perceivedCustomersArray'],'output' => $this->_tpl_vars['perceivedCustomersArray'],'selected' => $this->_tpl_vars['marketingLeadersDetail']['PerceivedCustomers'],'separator' => "<br />",'id' => 'PerceivedCustomers'), $this);?>

									
											<input type="text" name="PerceivedCustomersOther" id="PerceivedCustomersOther" class="form" maxlength="100" onchange="setChecked('PerceivedCustomers','frmStepSeven','Other')" value="<?php echo $this->_tpl_vars['marketingLeadersDetail']['PerceivedCustomersOther']; ?>
"/>	
		
									<br>
								<td colspan="2">																	</td>
							  </tr>	
							  <tr>
								<td align="center" colspan="3">
								<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >
								<input type="hidden" name="hidPurChaseMailing" value="<?php echo $this->_tpl_vars['hidPurChaseMailing']; ?>
" >	
								<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
							  </tr>
							  <tr>
								<td align="center" colspan="3">&nbsp;																	</td>
							  </tr>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	function validateForm()
	{
		if(checkOther(\'PurchaseMailingOutsource\',\'frmStepSeven\',\'1\',\'PurchaseMailingOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'PurchaseList[]\',\'frmStepSeven\',\'3\',\'PurchaseListOther\')==1)
		{
			return false;
		}
		if(checkOther(\'HaveOutSideSalesOther\',\'frmStepSeven\',\'1\',\'HaveOutSideSalesOtherDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'PerceivedCustomers[]\',\'frmStepSeven\',\'Other\',\'PerceivedCustomersOther\')==1)
		{
			return false;
		}
		return true;
	}
	
	function UnCheckAll(chk)
	{
		
		for (i = 0; i < chk.length; i++)
		{
			alert(chk[i].checked);
			chk[i].checked = false ;
		}	
	}
	
	function setHidValue(val)
	{
		document.frmStepSeven.hidPurChaseMailing.value=val;
		alert(document.frmStepSeven.hidPurChaseMailing.value);
		if(val == \'1\')
		{
			document.getElementById(\'trPurchaseList\').style.display=\'block\';
		}
		if(val == \'0\')
		{
			document.getElementById(\'trPurchaseList\').style.display=\'none\';
			UnCheckAll(document.getElementById(\'PurchaseList\'));
		}	
			
	}
</script>
'; ?>