<?php /* Smarty version 2.6.26, created on 2011-02-18 06:49:39
         compiled from integrated-step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'integrated-step3.tpl', 40, false),array('function', 'html_checkboxes', 'integrated-step3.tpl', 240, false),)), $this); ?>
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
							<li>Company Profile</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Company Profile</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepTwo" id="frmStepTwo" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step3.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
				  </tr>
				  <?php if ($this->_tpl_vars['Errormssage']): ?>
				  <tr>
					<td align="center" colspan="3"><span class="error"><?php echo $this->_tpl_vars['Errormssage']; ?>
</span>
					</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
				  </tr>
				  <?php endif; ?>
				  <tr>
					<td width="79%" align="left" valign="middle" style="padding-bottom:5px">Does your company have a logo ? 
					  <select name="HasLogo" class="form" onchange="toggleDiv(this.value,'divHasLogo')" style="width:80px">
						 <option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['HasLogo']), $this);?>

					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				 <?php if ($this->_tpl_vars['businessProfileDetail']['HasLogo']): ?>
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divHasLogo">
					 <table width="100%" border="0" bgcolor="#E5E5E5" >
						   <tr>
							<td width="17%" align="right" valign="middle" style="padding-bottom:10px">Is it trademarked ?</td>
							<td width="83%" colspan="2" align="left">
							<select name="IsTradeMarked" class="form" style="width:50px">
								 <option value="">--Select--</option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['IsTradeMarked']), $this);?>

							</select>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php else: ?>
				   <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divHasLogo">
					 <table width="100%" border="0" bgcolor="#E5E5E5" >
						   <tr>
							<td width="17%" align="right" valign="middle" style="padding-bottom:10px">Is it trademarked ?</td>
							<td width="83%" colspan="2" align="left">
							<select name="IsTradeMarked" class="form" style="width:50px">
								
								<option value="1" >Yes</option>
							   <option value="0">No</option>
							</select>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php endif; ?>
				  <tr>
					<td width="79%" align="left" valign="middle" style="padding-bottom:5px">Does your company have a catch phrase / motto / 
or recognized statement ? 
					  <select name="HasCatchPhrase" class="form" onchange="toggleDiv(this.value,'divCatchPhrase')" style="width:80px">
						 <option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['HasCatchPhrase']), $this);?>

					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['businessProfileDetail']['HasCatchPhrase']): ?>
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCatchPhrase">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">What is it ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="CatchPhrase" id="CatchPhrase" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['businessProfileDetail']['CatchPhrase']; ?>
"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php else: ?>
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divCatchPhrase">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">What is it ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="CatchPhrase" id="CatchPhrase" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['CatchPhrase']; ?>
"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php endif; ?>
				  <tr>
					<td align="left" style="padding-bottom:5px" valign="middle">Does your company have a standard set of colors ? 
					  <select name="HasStandardColors" class="form" onchange="toggleDiv(this.value,'divStandardColors')"style="width:80px">
						 <option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['HasStandardColors']), $this);?>

					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				 <?php if ($this->_tpl_vars['businessProfileDetail']['HasStandardColors']): ?>
				 
				  <tr align="left">
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divStandardColors">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="21%" align="right" valign="top" style="padding-bottom:10px">What are those colors ?</td>
							<td width="79%" colspan="2" align="left">
							<select name="StandardColors[]" id="StandardColors" class="form" style="width:100px" size="5" multiple="multiple">
							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['colorArray'],'output' => $this->_tpl_vars['colorArray'],'selected' => $this->_tpl_vars['businessProfileDetail']['StandardColors']), $this);?>

							  <br />
<span class="infoText">(To select multiple value, press cntrl and then select)</span>
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				 <?php else: ?>
				  <tr align="left">
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divStandardColors">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="21%" align="right" valign="top" style="padding-bottom:10px">What are those colors ?</td>
							<td width="79%" colspan="2" align="left">
							<select name="StandardColors[]" id="StandardColors" class="form" style="width:100px" size="5" multiple="multiple">
							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['colorArray'],'output' => $this->_tpl_vars['colorArray']), $this);?>

							  <br />
<span class="infoText">(To select multiple value, press cntrl and then select)</span>
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				 <?php endif; ?> 

				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Does your company have a store jingle ? 
(commonly used in radio ads / tv)&nbsp; <select name="HasJingle" class="form" style="width:80px">
<option value="">--Select--</option>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['HasJingle']), $this);?>
</select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <tr>
					<td align="left" style="padding-bottom:5px" valign="middle">Do you Collect Email addresses from your customers ? 
					  <select name="CollectEmailAddress" class="form" onchange="toggleDiv(this.value,'divCollectEmailAddress')"style="width:80px">
						 <option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['CollectEmailAddress']), $this);?>

					  </select></td>
				   <td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['businessProfileDetail']['CollectEmailAddress']): ?>
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCollectEmailAddress">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="49%" align="right" valign="middle" style="padding-bottom:10px">What percentage of the time do you get an address ?</td>
							<td width="51%" colspan="2" align="left">
							<input type="text" name="PercentageTime" id="PercentageTime" maxlength="5" size="40" class="form" value="<?php echo $this->_tpl_vars['businessProfileDetail']['PercentageTime']; ?>
" onKeyUp="return valid_number(this)"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php else: ?>
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divCollectEmailAddress">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="49%" align="right" valign="middle" style="padding-bottom:10px">What percentage of the time do you get an address ?</td>
							<td width="51%" colspan="2" align="left">
							<input type="text" name="PercentageTime" id="PercentageTime" maxlength="5" size="40" class="form" value="<?php echo $this->_tpl_vars['PercentageTime']; ?>
" onKeyUp="return valid_number(this)"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  <?php endif; ?>
				 
				  <tr>
					<td align="left" style="padding-bottom:5px" valign="top">Are you affiliated with any of the following?</td>
					<td colspan="2">
				
					</td>	
				  </tr>
				  <tr>
					<td colspan="3" align="center" >
						 <div style="border:#B5B5B5 1px solid; width:99%;margin:2px 0 7px 0">
						  <table width="100%" border="0" bgcolor="#E5E5E5">
							  <tr>
								<td width="50%" style="padding-left:5px">
									<table width="100%" border="0">
										<tr>
											<td align="left"><em>Oil Companies</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'OilCompanies','values' => $this->_tpl_vars['oilCompaniesIndexArray'],'output' => $this->_tpl_vars['oilCompaniesStrArray'],'selected' => $this->_tpl_vars['affiliationDetail']['OilCompanies'],'separator' => "<br />",'id' => 'OilCompanies'), $this);?>

											
											<input type="text" name="OilCompaniesOther" class="form" maxlength="100" size="40" onchange="setChecked('OilCompanies','frmStepTwo','5')" value="<?php echo $this->_tpl_vars['affiliationDetail']['OilCompaniesOther']; ?>
">
										   </td>
									  </tr>
										<tr>
											<td align="left"><em>Tire Company</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'TireCompanies','values' => $this->_tpl_vars['tyreCompaniesIndexArray'],'output' => $this->_tpl_vars['tyreCompaniesStrArray'],'selected' => $this->_tpl_vars['affiliationDetail']['TireCompanies'],'separator' => "<br />",'id' => 'TireCompanies'), $this);?>

											
											<input type="text" name="TireCompaniesOther" class="form" maxlength="100" size="40" onchange="setChecked('TireCompanies','frmStepTwo','3')" value="<?php echo $this->_tpl_vars['affiliationDetail']['TireCompaniesOther']; ?>
">
										   </td>
									  </tr>
										<tr>
											<td align="left"><em>Franchise</em>																							</td>
										</tr>	
										  
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'Franchise','values' => $this->_tpl_vars['franchiseIndexArray'],'output' => $this->_tpl_vars['franchiseStrArray'],'selected' => $this->_tpl_vars['affiliationDetail']['Franchise'],'separator' => "<br />",'id' => 'Franchise'), $this);?>
																																											<input type="text" name="FranchiseOther" class="form" maxlength="100" size="40" onchange="setChecked('Franchise','frmStepTwo','2')"  value="<?php echo $this->_tpl_vars['affiliationDetail']['FranchiseOther']; ?>
">
										   </td>
										</tr>	
<tr>
											<td align="left"><em>Banner Program</em>																							</td>
									  </tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'BannerProgram','values' => $this->_tpl_vars['bannerProgramsIndexArray'],'output' => $this->_tpl_vars['bannerProgramsStrArray'],'selected' => $this->_tpl_vars['affiliationDetail']['BannerProgram'],'separator' => "<br />",'id' => 'BannerProgram'), $this);?>

											<input type="text" name="BannerProgramOther" class=" form" maxlength="100" size="40" onchange="setChecked('BannerProgram','frmStepTwo','6')" value="<?php echo $this->_tpl_vars['affiliationDetail']['BannerProgramOther']; ?>
">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>Other</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'AdditionalAffilitiation','values' => $this->_tpl_vars['othersIndexArray'],'output' => $this->_tpl_vars['othersStrArray'],'selected' => $this->_tpl_vars['affiliationDetail']['Additional'],'separator' => "<br />",'id' => 'AdditionalAffilitiation'), $this);?>

											<input type="text" name="AdditionalAffilitiationOther" class=" form" maxlength="100" size="40" onchange="setChecked('AdditionalAffilitiation','frmStepTwo','3')" value="<?php echo $this->_tpl_vars['affiliationDetail']['AdditionalOther']; ?>
">
											
										   </td>
									  </tr>																																																															
								  </table>
								</td>
								<td>
													
								</td>
							  </tr>
						   </table>
					  </div>	
							
					
					</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:5px" valign="top">Are you involved with any associations ?</td>
					<td colspan="2">
					
					</td>	
				  </tr>
				  <tr>
					<td colspan="3" align="center" >
						 <div style="border:#B5B5B5 1px solid; width:99%;margin:2px 0 7px 0">
						  <table width="100%" border="0" bgcolor="#E5E5E5">
							  <tr>
								<td width="50%" style="padding-left:5px">
									<table width="100%" border="0">
										<tr>
											<td align="left"><em>Industry</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'Industry','values' => $this->_tpl_vars['industryIndexArray'],'output' => $this->_tpl_vars['industryStrArray'],'selected' => $this->_tpl_vars['associationDetail']['Industry'],'separator' => "<br />",'id' => 'Industry'), $this);?>

											<input type="text" name="IndustryOther" class="form" maxlength="100" size="40" onchange="setChecked('Industry','frmStepTwo','7')" value="<?php echo $this->_tpl_vars['associationDetail']['IndustryOther']; ?>
">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>General Business </em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php echo smarty_function_html_checkboxes(array('name' => 'GeneralBusiness','values' => $this->_tpl_vars['generalBusinessIndexArray'],'output' => $this->_tpl_vars['generalBusinessStrArray'],'selected' => $this->_tpl_vars['associationDetail']['GeneralBusiness'],'separator' => "<br />",'id' => 'GeneralBusiness'), $this);?>

											<input type="text" name="GeneralBusinessOther" class="form" maxlength="100" size="40"  onchange="setChecked('GeneralBusiness','frmStepTwo','4')" value="<?php echo $this->_tpl_vars['associationDetail']['GeneralBusinessOther']; ?>
">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>Other</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											<?php if ($this->_tpl_vars['associationDetail']['AdditionalOther']): ?>
											<input type="checkbox" name="AdditionalAssociation[]" value="1" id="AdditionalAssociation" class="form" checked>
											<?php else: ?>
											<input type="checkbox" name="AdditionalAssociation[]" value="1" id="AdditionalAssociation" class="form">
											<?php endif; ?>
											Other 
											<input type="text" name="AdditionalAssociationOther" class=" form" maxlength="100" size="40" onchange="setChecked('AdditionalAssociation','frmStepTwo','1')" value="<?php echo $this->_tpl_vars['associationDetail']['AdditionalOther']; ?>
">
										   </td>
									  </tr>		
								  </table>
								</td>
								<td>
													
								</td>
							  </tr>
						   </table>
					  </div>	
							
					
					</td>
				  </tr>
					 <tr>
					<td width="79%" align="left" valign="middle" style="padding-bottom:5px">Do you have access to Co-Op funding ? 
					  <select name="HasCoOpFunding" class="form" onchange="toggleDiv(this.value,'divCoOpFunding')" style="width:80px">
						 <option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['businessProfileDetail']['HasCoOpFunding']), $this);?>

					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['businessProfileDetail']['HasCoOpFunding']): ?>
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCoOpFunding">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">How much ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="FundingAmount" class="form" maxlength="30" size="40" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessProfileDetail']['FundingAmount']; ?>
">
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				  <?php else: ?>
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divCoOpFunding">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">How much ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="FundingAmount" class="form" maxlength="30" size="40" onKeyUp="return valid_number(this)">
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				  <?php endif; ?>
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >
					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
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
		if(document.frmStepTwo.HasCatchPhrase.value==1 && trimSpace(document.frmStepTwo.CatchPhrase.value)==\'\')
		{
			alert(\'Please enter your catch phrase.\');
			document.frmStepTwo.CatchPhrase.focus();
			return false;
		}
		if(document.frmStepTwo.CollectEmailAddress.value==1 && (trimSpace(document.frmStepTwo.PercentageTime.value)==\'\' || isNaN(document.frmStepTwo.PercentageTime.value)))
		{
			alert(\'Please enter percentage of the time you get an email address. It should have a numeric value\');
			document.frmStepTwo.PercentageTime.focus();
			return false;
		}
		if(document.frmStepTwo.HasStandardColors.value==1 && trimSpace(document.frmStepTwo.StandardColors.value)==\'\')
		{
			alert(\'Please select the standard colors\');
			document.frmStepTwo.StandardColors.focus();
			return false;
		}
		if(checkOther(\'OilCompanies[]\',\'frmStepTwo\',\'5\',\'OilCompaniesOther\')==1)
		{
			return false;
		}
		if(checkOther(\'TireCompanies[]\',\'frmStepTwo\',\'3\',\'TireCompaniesOther\')==1)
		{
			return false;
		}
		if(checkOther(\'Franchise[]\',\'frmStepTwo\',\'2\',\'FranchiseOther\')==1)
		{
			return false;
		}
		if(checkOther(\'BannerProgram[]\',\'frmStepTwo\',\'6\',\'BannerProgramOther\')==1)
		{
			return false;
		}
		if(checkOther(\'AdditionalAffilitiation[]\',\'frmStepTwo\',\'3\',\'AdditionalAffilitiationOther\')==1)
		{
			return false;
		}		
		if(checkOther(\'Industry[]\',\'frmStepTwo\',\'7\',\'IndustryOther\')==1)
		{
			return false;
		}
		if(checkOther(\'GeneralBusiness[]\',\'frmStepTwo\',\'4\',\'GeneralBusinessOther\')==1)
		{
			return false;
		}
		if(checkOther(\'AdditionalAssociation[]\',\'frmStepTwo\',\'1\',\'AdditionalAssociationOther\')==1)
		{
			return false;
		}
		
		if(document.frmStepTwo.HasCoOpFunding.value==1 && (trimSpace(document.frmStepTwo.FundingAmount.value)==\'\' || isNaN(document.frmStepTwo.FundingAmount.value)))
		{
			alert(\'Please enter the amount of Co-Op funding ? It should have a numeric value.\');
			document.frmStepTwo.FundingAmount.focus();
			return false;
		}
	}
</script>
'; ?>