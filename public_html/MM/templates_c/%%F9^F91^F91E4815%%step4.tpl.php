<?php /* Smarty version 2.6.26, created on 2013-09-17 02:17:26
         compiled from step4.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'step4.tpl', 368, false),array('function', 'html_checkboxes', 'step4.tpl', 418, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
					  <tbody>
					  <tr style="line-height:0px">
					   <td width="14%">
						<table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%" align="right"><img width="1" height="5" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td><img width="11" height="11" border="0" alt="" src="images/checkout_bullet.gif"/></td>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
						
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td width="50%"><img width="1" height="5" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
					  </tr>
					  <tr>
						<td width="14%" align="center" >Step1</td>
						<td width="14%" align="center">Step2</td>
						<td width="14%" align="center" >Step3</td>
						<td width="14%" align="center" ><strong>Step4</strong></td>
						<td width="14%" align="center" >Step5</td>
						<td width="14%" align="center" >Step6</td>
						<td width="14%" align="center" >Finished</td>
					  </tr>
					</tbody>
					</table>
			<form name="frmStepFour" id="frmStepFour" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Customer Profile</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
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
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">Estimate how many marketing targets are in your database ? 
					<input type="text" name="MarketingTargetsInDB" id="MarketingTargetsInDB" maxlength="50" size="40" class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['MarketingTargetsInDB']; ?>
" onKeyUp="return valid_number(this)"/></td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px"><b>Primary Customer -</b> </td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td colspan="3" align="left">
					 <div style="border:#B5B5B5 1px solid; width:94%; margin:0 0 10px 5px; padding:5px;padding-bottom:10px; background-color:#E5E5E5">
						<table width="100%" border="0" >
						  <tr>
							<td align="left" style="padding-bottom:5px" valign="top" colspan="2"><span class="error">*</span><span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%, NOT .30) </span><br />
	<span class="error">*</span><span class="infoText">If you leave any of the following sections blank, we'll assume you don't know the numbers. </span></td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top" width="70%">Gender :</td>
							<td width="30%" colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
							  <input type="text" name="SexMale" class="form" maxlength="5" size="15" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['SexMale']; ?>
" onKeyUp="return valid_number(this)"  />
							  % Male<br />
							  <input type="text" name="SexFeMale" class="form"  maxlength="5" size="15" onKeyUp="return valid_number(this)"  value="<?php echo $this->_tpl_vars['businessCustomerDetail']['SexFeMale']; ?>
"/>
							  % Female<br />
							  <input type="text" name="SexUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['SexUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Ethnicity :</td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
							  <input type="text" name="RaceWhite" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceWhite']; ?>
"/>
							  % White<br />
							  <input type="text" name="RaceBlack" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceBlack']; ?>
"/>
							  % Black, African Am., Or Negro<br />
							  <input type="text" name="RaceAmerican" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceAmerican']; ?>
"/>
							  % American Indian or Alaskan Native<br />
							  <input type="text" name="RaceHispanic" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceHispanic']; ?>
"/>
							  % Hispanic, Latino, or Spanish origin<br />
							  <input type="text" name="RaceAsian" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceAsian']; ?>
"/>
							  % Asian, Chinese, Japanese, or Other asian<br />
							  <input type="text" name="RaceHawaiian" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceHawaiian']; ?>
"/>
							  % Hawaiian, Samoan, or Pacific Islander<br />
							  <input type="text" name="RaceOther" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceOther']; ?>
"/>
							  % Other <br />
							  <input type="text" name="RaceUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['RaceUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Residence :</td>
							<td colspan="2" style="padding-bottom:8px"><br />																			</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
							  <input type="text" name="ResidenceHomeowners" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceHomeowners']; ?>
"/>
							  % Homeowners<br />
							  <input type="text" name="ResidenceRenters" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceRenters']; ?>
"/>
							  % Renters<br />
							  <input type="text" name="ResidenceWithFamily" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceWithFamily']; ?>
"/>
							  % Live with family<br />
							  <input type="text" name="ResidenceVacationHome" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceVacationHome']; ?>
"/>
							  % Vacation Home<br />
							  <input type="text" name="ResidenceOthers" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceOthers']; ?>
"/>
							  % Other <br />
							  <input type="text" name="ResidenceUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ResidenceUnknown']; ?>
"/>
							% Unknown</span></td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Education Level :</td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
							  <input type="text" name="EducationSchooling" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EducationSchooling']; ?>
"/>
							  % Unfinished Schooling<br />
							  <input type="text" name="EducationSchoolGraduate" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EducationSchoolGraduate']; ?>
"/>
							  % High School Graduate or GED<br />
							  <input type="text" name="EducationCollegeGraduate" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EducationCollegeGraduate']; ?>
"/>
							  % College Experience or Graduate<br />
							  <input type="text" name="EducationMasters" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EducationMasters']; ?>
"/>
							  % Masters, Doctorate<br />
							  <input type="text" name="EducationUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EducationUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Primary Language :</td>
							<td colspan="2" style="padding-bottom:8px"><br />																			</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
							  <input type="text" name="PrimaryLangEnglish" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['PrimaryLangEnglish']; ?>
" />
							  % English<br />
							  <input type="text" name="PrimaryLangSpanish" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['PrimaryLangSpanish']; ?>
"/>
							  % Spanish<br />
							  <input type="text" name="PrimaryLangOther" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['PrimaryLangOther']; ?>
"/>
							  % Other <br />
							  <input type="text" name="PrimaryLangUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['PrimaryLangUnknown']; ?>
"/>
							% Unknown</span></td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
	<tr>
							<td align="left" style="padding-bottom:10px" valign="top">Age :</td>
							<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
						  </tr>
	<tr>
	<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:8px">
	<input type="text" name="Age18_21" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age18_21']; ?>
"/>
	% 18-21<br />
	<input type="text" name="Age22_25" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age22_25']; ?>
"/>
	% 22-25<br />
	<input type="text" name="Age26_29" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age26_29']; ?>
"/>
	% 26-29 <br />
	<input type="text" name="Age30_39" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age30_39']; ?>
"/>
	% 30-39<br />
	<input type="text" name="Age40_49" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age40_49']; ?>
"/>
	% 40-49<br />
	<input type="text" name="Age50_59" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age50_59']; ?>
"/>
	% 50-59<br />
	<input type="text" name="Age60_69" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Age60_69']; ?>
"/>
	% 60-69 <br />
	<input type="text" name="AgeGreater70" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AgeGreater70']; ?>
"/>
	% 70 or greater<br />
	<input type="text" name="AgeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AgeUnknown']; ?>
"/>
	% Unknown<br />
	</span></td>
	<td colspan="2" style="padding-bottom:8px">&nbsp;</td>
	</tr>	
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Marital Status :</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							  <input type="text" name="MaritalSingle" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['MaritalSingle']; ?>
"/>
							  % Single<br />
							  <input type="text" name="MaritalMarried" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['MaritalMarried']; ?>
"/>
							  % Married<br />
							  <input type="text" name="MaritalUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['MaritalUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Children :</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							  <input type="text" name="ChildrenNone" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenNone']; ?>
"/>
							  % No children<br />
							  <input type="text" name="Children1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Children1']; ?>
"/>
							  % 1 Child<br />
							  <input type="text" name="Children2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Children2']; ?>
"/>
							  % 2 Children<br />
							  <input type="text" name="Children3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Children3']; ?>
"/>
							  % 3 Children<br />
							  <input type="text" name="ChildrenGreater3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenGreater3']; ?>
"/>
							  % Greater than 3 children<br />
							  <input type="text" name="ChildrenUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>	
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Children Ages :<br />
	(of those that have children)&nbsp;</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							  <input type="text" name="ChildrenAge0_5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAge0_5']; ?>
"//>
							  % 0 - 5 years old<br />
							  <input type="text" name="ChildrenAge6_15" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAge6_15']; ?>
"//>
							  % 6 - 15 years old<br />
							  <input type="text" name="ChildrenAge16_19" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAge16_19']; ?>
"//>
							  % 16 - 19 years old<br />
							  <input type="text" name="ChildrenAge19_23" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAge19_23']; ?>
"//>
							  % 19 - 23 years old<br />
							  <input type="text" name="ChildrenAgeAbove23" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)"value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAgeAbove23']; ?>
"/>
							  % Above 23 years old<br />
							  <input type="text" name="ChildrenAgeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['ChildrenAgeUnknown']; ?>
"//>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>	
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Household Income :</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							  <input type="text" name="IncomeUnder40" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['IncomeUnder40']; ?>
"/>
							  % Under $40,000<br />
							  <input type="text" name="Income40_59" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Income40_59']; ?>
"/>
							  % $40,000 - $59,999<br />
							  <input type="text" name="Income60_99" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Income60_99']; ?>
"/>
							  % $60,000 - $99,999<br />
							  <input type="text" name="Income100_249" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['Income100_249']; ?>
"/>
							  % $100,000 - $249,000<br />
							  <input type="text" name="IncomeAbove250" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['IncomeAbove250']; ?>
"/>
							  % Above $250,000<br />
							  <input type="text" name="IncomeUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['IncomeUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>	
						   <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Number of Vehicles Customer Brings to you :</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						   <tr>
							 <td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							   <input type="text" name="VehicleCustomerBrings1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBrings1']; ?>
"/>
							   % 1<br />
							   <input type="text" name="VehicleCustomerBrings2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBrings2']; ?>
"/>
							   % 2<br />
							   <input type="text" name="VehicleCustomerBrings3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBrings3']; ?>
"/>
							   % 3<br />
							   <input type="text" name="VehicleCustomerBrings4" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBrings4']; ?>
"/>
							   % 4<br />
							   <input type="text" name="VehicleCustomerBringsAbove5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBringsAbove5']; ?>
"/>
							   % Above 5<br />
							   <input type="text" name="VehicleCustomerBringsUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['VehicleCustomerBringsUnknown']; ?>
"/>
							   % Unknown<br />
							 </span></td>
							 <td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>	
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Number of visits customer makes each year per vehicle :</td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							  <input type="text" name="CustomerPerVehicle1" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicle1']; ?>
"/>
							  % 1<br />
							  <input type="text" name="CustomerPerVehicle2" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicle2']; ?>
"/>
							  % 2<br />
							  <input type="text" name="CustomerPerVehicle3" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicle3']; ?>
"/>
							  % 3<br />
							  <input type="text" name="CustomerPerVehicle4" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicle4']; ?>
"/>
							  % 4<br />
							  <input type="text" name="CustomerPerVehicleAbove5" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicleAbove5']; ?>
"/>
							  % Above 5<br />
							  <input type="text" name="CustomerPerVehicleUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustomerPerVehicleUnknown']; ?>
"/>
							  % Unknown<br />
							</span></td>
							<td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>	
						   <tr>
							<td align="left" style="padding-bottom:10px" valign="top">Average amount spent annually :</td>
							<td colspan="2" style="padding-bottom:6px"><br />																			</td>
						  </tr>
						   <tr>
							 <td align="left" style="padding-bottom:10px; padding-left:25px" valign="top"><span style="padding-bottom:6px">
							   <input type="text" name="AvgAmountSpentBelow249" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpentBelow249']; ?>
"/>
							   % below $249<br />
							   <input type="text" name="AvgAmountSpent250_999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent250_999']; ?>
"/>
							   % $250 - $999<br />
							   <input type="text" name="AvgAmountSpent1000_1999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent1000_1999']; ?>
">
							   % $1000 - $1999<br />
							   <input type="text" name="AvgAmountSpent2000_2999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent2000_2999']; ?>
">
							   % $2000 - $2999<br />
							   <input type="text" name="AvgAmountSpent3000_3999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)"value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent3000_3999']; ?>
"/>
							   % $3000 - $3999<br />
							   <input type="text" name="AvgAmountSpent4000_4999" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent4000_4999']; ?>
"/>
							   % $4000 - $4999<br />
							   <input type="text" name="AvgAmountSpent5000_6000" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpent5000_6000']; ?>
"/>
							   % $5000 - $6000<br />
							   <input type="text" name="AvgAmountSpentAbove6000" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpentAbove6000']; ?>
"/>
							   % Above $6000<br />
							   <input type="text" name="AvgAmountSpentUnknown" class="form" maxlength="5" size="15" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AvgAmountSpentUnknown']; ?>
"/>
							 % Unknown</span></td>
							 <td colspan="2" style="padding-bottom:6px">&nbsp;</td>
						  </tr>																  
						</table>
					 </div>																	</td>
				  </tr> 
				 
	
				 <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What percentage of customers use coupons ? 
					<input type="text" name="CustUseCoupons" id="CustUseCoupons" maxlength="5" size="15" onKeyUp="return valid_number(this)"  class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustUseCoupons']; ?>
"/></td>
					<td width="12%" colspan="2">&nbsp;</td>
				 </tr>
				  <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">How far do customers travel to your shop(average) ? 
					<input type="text" name="CustTravelToShop" id="CustTravelToShop" maxlength="20" size="40" class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustTravelToShop']; ?>
" onKeyUp="return valid_number(this)" /></td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What months do your customers come in most frequently ? 
					  <select name="MonthFrequentCustomer" class="form" style="width:200px">
						 <option value="" selected="selected">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['monthArray'],'selected' => $this->_tpl_vars['businessCustomerDetail']['MonthFrequentCustomer']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What months do your customers come in least frequently ? 
					  <select name="MonthLessCustomer" class="form" style="width:200px">
						<option value="" selected="selected">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['monthArray'],'selected' => $this->_tpl_vars['businessCustomerDetail']['MonthFrequentCustomer']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What services are your customers buying most ? 
					  <select name="ServiceCustBuyMost" class="form" style="width:200px">
						<option value="" selected="selected">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['serviceArray'],'selected' => $this->_tpl_vars['businessCustomerDetail']['ServiceCustBuyMost']), $this);?>

						
					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What services are your customers buying least ? 
					  <select name="ServiceCustBuyLeast" class="form" style="width:200px">
						<option value="" >--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['serviceArray'],'selected' => $this->_tpl_vars['businessCustomerDetail']['ServiceCustBuyLeast']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">How many new customer referrals do I get annually ? 
					<input type="text" name="CustReferrals" id="CustReferrals" maxlength="10" size="40" class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['CustReferrals']; ?>
" onKeyUp="return valid_number(this)" /></td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What advertising sources are your existing customers coming from ? 
					<input type="text" name="AdvertisingSourceFromCust" id="AdvertisingSourceFromCust" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AdvertisingSourceFromCust']; ?>
"/></td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="88%" align="left" valign="middle" style="padding-bottom:10px">What advertising sources are your new customers coming from ? 
					<input type="text" name="AdvertisingSourceFromNewCust" id="AdvertisingSourceFromNewCust" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['AdvertisingSourceFromNewCust']; ?>
"/></td>
					<td width="12%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="top">Are there any Economic factors that influence yoru area :</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:5px;padding-left:25px;" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'EconomicInfluence','values' => $this->_tpl_vars['economicInfluenceIndexArray'],'output' => $this->_tpl_vars['economicInfluenceStrArray'],'selected' => $this->_tpl_vars['businessCustomerDetail']['EconomicInfluence'],'separator' => "<br />",'id' => 'radOutsourcedService'), $this);?>

					
					<input type="text" name="EconomicInfluenceOther" id="EconomicInfluenceOther" class="form"  maxlength="150" size="40" onchange="setChecked('EconomicInfluence','frmStepFour','9')" value="<?php echo $this->_tpl_vars['businessCustomerDetail']['EconomicInfluenceOther']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >
					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
			  </table>
			  </div>
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
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/common.js"></script>	
<?php echo '
	<script language="javascript">
		function validateForm()
		{
			if(checkOther(\'EconomicInfluence[]\',\'frmStepFour\',\'9\',\'EconomicInfluenceOther\')==1)
			{
				return false;
			}
			return true;
		}
	</script>
'; ?>