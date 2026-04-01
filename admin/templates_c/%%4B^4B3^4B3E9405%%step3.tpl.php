<?php /* Smarty version 2.6.26, created on 2011-02-16 09:23:39
         compiled from step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'step3.tpl', 39, false),)), $this); ?>
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
/admin/marketing-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Marketing survey</a></li>
							<li>Marketing / Advertising Opportunities</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Marketing / Advertising Opportunities</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepThree" id="frmStepThree" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
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
								<td align="left" style="padding-bottom:5px" valign="top">Are you known for performing any special work ?</td>
							  <td colspan="2">																  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px; padding-left:20px;" valign="top">
									<?php echo smarty_function_html_checkboxes(array('name' => 'SpecialWork','values' => $this->_tpl_vars['specialWorkIndexArray'],'output' => $this->_tpl_vars['specialWorkStrArray'],'selected' => $this->_tpl_vars['marketingOpportunities']['SpecialWork'],'separator' => "<br />",'id' => 'SpecialWork'), $this);?>

									
									<input type="text" name="SpecialWorkOther" class="form" maxlength="100" size="40" onchange="setChecked('SpecialWork','frmStepThree','7')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['SpecialWorkOther']; ?>
">																	</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
								 <tr>
								<td width="71%" align="left" valign="top" style="padding-bottom:5px">What Competitive Advantages do you offer your customers ? </td>
								<td width="29%" colspan="2">																		</td>
							  </tr>
								 <tr>
								   <td align="left" valign="top" style="padding-bottom:10px;padding-left:20px;">
									
									<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray1'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray1'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

									<?php if ($this->_tpl_vars['marketingOpportunities']['MaximumShuttleDistance']): ?>
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="7" class="form" onclick="toggleDiv(this.checked,'divShuttleService')" checked>
									Complimentary Shuttle Service <br>
									<div id="divShuttleService" style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block">
									&nbsp;&nbsp;Maximum distance you will shuttle ?&nbsp;&nbsp;<input type="text" name="MaximumShuttleDistance" class="form" maxlength="12" onKeyUp="return valid_number(this)" value="<?php echo $this->_tpl_vars['marketingOpportunities']['MaximumShuttleDistance']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="7" class="form" onclick="toggleDiv(this.checked,'divShuttleService')" >
									Complimentary Shuttle Service <br>
									<div id="divShuttleService" style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none">
									&nbsp;&nbsp;Maximum distance you will shuttle ?&nbsp;&nbsp;<input type="text" name="MaximumShuttleDistance" class="form" maxlength="12" onKeyUp="return valid_number(this)">	</div>
									<?php endif; ?>
									<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray2'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray2'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

									<?php if ($this->_tpl_vars['marketingOpportunities']['SpecialtyTools']): ?>	
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="25" class="form" onclick="toggleDiv(this.checked,'divCompetiveAdvantages')" checked>
									Specialty Tools <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block" id="divCompetiveAdvantages">
									&nbsp;&nbsp;Please List&nbsp;&nbsp;<input type="text" name="SpecialtyTools" class="form" maxlength="150" size="40" value="<?php echo $this->_tpl_vars['marketingOpportunities']['SpecialtyTools']; ?>
" >	</div>
									<?php else: ?>
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="25" class="form" onclick="toggleDiv(this.checked,'divCompetiveAdvantages')">
									Specialty Tools <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="divCompetiveAdvantages">
									&nbsp;&nbsp;Please List&nbsp;&nbsp;<input type="text" name="SpecialtyTools" class="form" maxlength="150" size="40" >	</div>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['waitingRoom']): ?>
										<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="26" class="form" onclick="toggleDiv(this.checked,'divWaitingRoom')" checked>
										Waiting Room   <br>
										<div style="width:96%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; padding-left:15px; display:block" id="divWaitingRoom">
										<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray3'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray3'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

										<?php if ($this->_tpl_vars['beverages']): ?>
											<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')" checked>
											Complimentary beverages <br>	
												<div style="width:95%;  padding-left:15px; display:block" id="divBeverages">
												<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray4'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray4'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

												<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['OtherBeverages']; ?>
"><br />																		
												</div>
											<?php else: ?>
												<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')">
											Complimentary beverages <br>	
												<div style="width:95%;  padding-left:15px; display:none" id="divBeverages">
												<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray4'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray4'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

												<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['OtherBeverages']; ?>
"><br />																		
												</div>
											<?php endif; ?>	
										<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray5'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray5'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

										</div>
									<?php else: ?>
										<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="26" class="form" onclick="toggleDiv(this.checked,'divWaitingRoom')" >
										Waiting Room   <br>
										<div style="width:96%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; padding-left:15px; display:none" id="divWaitingRoom">
										<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray3'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray3'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

										<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="35" class="form" onclick="toggleDiv(this.checked,'divBeverages')">
										Complimentary beverages <br>	
											<div style="width:95%;  padding-left:15px; display:none" id="divBeverages">
											<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray4'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray4'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

											<input type="text" name="OtherBeverages" class="form" maxlength="150" size="40" onchange="setChecked('CompetiveAdvantages','frmStepThree','39')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['OtherBeverages']; ?>
"><br />																		
											</div>
										<?php echo smarty_function_html_checkboxes(array('name' => 'CompetiveAdvantages','values' => $this->_tpl_vars['competiveAdvantagesIndexArray5'],'output' => $this->_tpl_vars['competiveAdvantagesStrArray5'],'selected' => $this->_tpl_vars['marketingOpportunities']['CompetiveAdvantages'],'separator' => "<br />"), $this);?>

										</div>
									<?php endif; ?>	
										
									<?php if ($this->_tpl_vars['marketingOpportunities']['AdditionalCompetiveAdvantages']): ?>
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="44" class="form" checked> Other 
									<?php else: ?>
									<input type="checkbox" name="CompetiveAdvantages[]" id="CompetiveAdvantages" value="44" class="form" > Other 
									<?php endif; ?>
									<input type="text" name="AdditionalCompetiveAdvantages" class="form" size="40" maxlength="150" onchange="setChecked('CompetiveAdvantages','frmStepThree','44')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['AdditionalCompetiveAdvantages']; ?>
"><br />		
									
								   <td colspan="2">&nbsp;</td>
							  </tr>
							 
							  <tr>
								<td align="left" style="padding-bottom:5px" valign="top">Are you involved in any (or create) Community Activities ?<br />
			(anything that is checked is asked to fill out information)</td>
								<td colspan="2">																	</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">
			
									<?php if ($this->_tpl_vars['communityDetail']['BloodMobileDetail']): ?>
									<input type="checkbox" name="BloodMobile" id="BloodMobile"  value="1" class="form" onclick="toggleDiv(this.checked,'divBloodMobile')" checked>Blood Mobile Drive <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:block" id="divBloodMobile">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="BloodMobileDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['BloodMobileDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="BloodMobile" id="BloodMobile"  value="1" class="form" onclick="toggleDiv(this.checked,'divBloodMobile')" >Blood Mobile Drive <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="divBloodMobile">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="BloodMobileDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['CharitiesDetail']): ?>
									<input type="checkbox" name="Charities" id="Charities" value="2" class="form" onclick="toggleDiv(this.checked,'divCharities')" checked>
									Charities <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divCharities">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CharitiesDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['CharitiesDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="Charities" id="Charities" value="2" class="form" onclick="toggleDiv(this.checked,'divCharities')">
									Charities <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divCharities">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CharitiesDetail" class="form" size="40" maxlength="150">	</div>
									
									<?php endif; ?>
									
									
									<?php if ($this->_tpl_vars['communityDetail']['AthleticsDetail']): ?>
									<input type="checkbox" name="Athletics" id="Athletics" value="3" class="form" onclick="toggleDiv(this.checked,'divAthletics')" checked>
									Community Athletics <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divAthletics">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="AthleticsDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['AthleticsDetail']; ?>
">	</div>
									
									<?php else: ?>
									<input type="checkbox" name="Athletics" id="Athletics" value="3" class="form" onclick="toggleDiv(this.checked,'divAthletics')">
									Community Athletics <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divAthletics">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="AthleticsDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['CustomerAppreciationDetail']): ?>
									<input type="checkbox" name="CustomerAppreciation" id="CustomerAppreciation" value="4" class="form" onclick="toggleDiv(this.checked,'divCustomerAppreciation')" checked>
									Customer Appreciation Days <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divCustomerAppreciation">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CustomerAppreciationDetail" class="form"  size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['CustomerAppreciationDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="CustomerAppreciation" id="CustomerAppreciation" value="4" class="form" onclick="toggleDiv(this.checked,'divCustomerAppreciation')">
									Customer Appreciation Days <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divCustomerAppreciation">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="CustomerAppreciationDetail" class="form"  size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['FoodBanksDetail']): ?>
									<input type="checkbox" name="FoodBanks" id="FoodBanks" value="5" class="form" onclick="toggleDiv(this.checked,'divFoodBanks')" checked>
									Food Banks <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divFoodBanks">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="FoodBanksDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['FoodBanksDetail']; ?>
">	</div>
									
									<?php else: ?>
									<input type="checkbox" name="FoodBanks" id="FoodBanks" value="5" class="form" onclick="toggleDiv(this.checked,'divFoodBanks')">
									Food Banks <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divFoodBanks">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="FoodBanksDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['HolidayDetail']): ?>
									<input type="checkbox" name="Holiday" id="Holiday" value="6" class="form" onclick="toggleDiv(this.checked,'divHoliday')" checked>
									Holiday Events <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divHoliday">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="HolidayDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['HolidayDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="Holiday" id="Holiday" value="6" class="form" onclick="toggleDiv(this.checked,'divHoliday')">
									Holiday Events <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divHoliday">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="HolidayDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									
									<?php if ($this->_tpl_vars['communityDetail']['LocalChurchDetail']): ?>
									
									<input type="checkbox" name="LocalChurch" id="LocalChurch" value="7" class="form" onclick="toggleDiv(this.checked,'divLocalChurch')" checked>
									Local Church <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divLocalChurch">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalChurchDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['LocalChurchDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="LocalChurch" id="LocalChurch" value="7" class="form" onclick="toggleDiv(this.checked,'divLocalChurch')">
									Local Church <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divLocalChurch">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalChurchDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['LocalEventsDetail']): ?>
									<input type="checkbox" name="LocalEvents" id="LocalEvents" value="8" class="form" onclick="toggleDiv(this.checked,'divLocalEvents')" checked>
									Local Events <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divLocalEvents">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalEventsDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['LocalEventsDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="LocalEvents" id="LocalEvents" value="8" class="form" onclick="toggleDiv(this.checked,'divLocalEvents')">
									Local Events <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divLocalEvents">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="LocalEventsDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['SchoolProgramDetail']): ?>
									<input type="checkbox" name="SchoolProgram" id="SchoolProgram" value="9" class="form" onclick="toggleDiv(this.checked,'divSchoolProgram')" checked>
									School Program <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divSchoolProgram">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="SchoolProgramDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['SchoolProgramDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="SchoolProgram" id="SchoolProgram" value="9" class="form" onclick="toggleDiv(this.checked,'divSchoolProgram')" >
									School Program <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divSchoolProgram">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="SchoolProgramDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									
									<?php if ($this->_tpl_vars['communityDetail']['ScoutsDetail']): ?>
									<input type="checkbox" name="Scouts" id="Scouts" value="10" class="form" onclick="toggleDiv(this.checked,'divScouts')" checked>
									Scouts <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:block" id="divScouts">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="ScoutsDetail" class="form" size="40" maxlength="150" value="<?php echo $this->_tpl_vars['communityDetail']['ScoutsDetail']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="Scouts" id="Scouts" value="10" class="form" onclick="toggleDiv(this.checked,'divScouts')">
									Scouts <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px;display:none" id="divScouts">
									&nbsp;&nbsp;Please give details ?&nbsp;&nbsp;<input type="text" name="ScoutsDetail" class="form" size="40" maxlength="150">	</div>
									<?php endif; ?>
									<?php if ($this->_tpl_vars['communityDetail']['Additional']): ?>
									<input type="checkbox" name="chkAdditional" id="chkAdditional" value="11" class="form" checked>
			
									Other
									<?php else: ?>
									<input type="checkbox" name="chkAdditional" id="chkAdditional" value="11" class="form" checked>
									<?php endif; ?> 
									<input type="text" name="Additional" class="form" size="40" maxlength="150" onchange="setChecked('chkAdditional','frmStepThree','11')" value="<?php echo $this->_tpl_vars['communityDetail']['Additional']; ?>
">																		
								</td>
								<td colspan="2">&nbsp;</td>
							  </tr>
							 
							  <tr>
								<td align="left" style="padding-bottom:5px" valign="top">Do you offer Any financing / Payment Programs ?</td>
								<td colspan="2">
									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">
								<?php if ($this->_tpl_vars['marketingOpportunities']['CashThroughWhom']): ?>
								<input type="checkbox" name="PaymentPrograms[]" id="PaymentPrograms" value="1" class="form" onclick="toggleDiv(this.checked,'div90Day')" checked>
									90 Day Same as cash  <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="div90Day">
									&nbsp;&nbsp;Through whom ?&nbsp;&nbsp;<input type="text" name="CashThroughWhom" class="form" size="40" maxlength="100" value="<?php echo $this->_tpl_vars['marketingOpportunities']['CashThroughWhom']; ?>
">	</div>
									<?php else: ?>
									<input type="checkbox" name="PaymentPrograms[]" id="PaymentPrograms" value="1" class="form" onclick="toggleDiv(this.checked,'div90Day')">
									90 Day Same as cash  <br>
									<div style="width:99%; background-color:#E5E5E5; border:#B5B5B5 1px solid;margin-top:5px;margin-bottom:5px;padding-bottom:3px; display:none" id="div90Day">
									&nbsp;&nbsp;Through whom ?&nbsp;&nbsp;<input type="text" name="CashThroughWhom" class="form" size="40" maxlength="100">	</div>
									<?php endif; ?>
								<?php echo smarty_function_html_checkboxes(array('name' => 'PaymentPrograms','values' => $this->_tpl_vars['paymentProgramIndexArray'],'output' => $this->_tpl_vars['paymentProgramsStrArray'],'selected' => $this->_tpl_vars['marketingOpportunities']['PaymentPrograms'],'separator' => "<br />",'id' => 'PaymentPrograms'), $this);?>

									<input type="text" name="PaymentProgramsOthers" class="form" size="40" maxlength="100" onchange="setChecked('PaymentPrograms','frmStepThree','6')" value="<?php echo $this->_tpl_vars['marketingOpportunities']['PaymentProgramsOthers']; ?>
">		
								</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px" valign="top">Do you offer special Discounts ?</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">
								<?php echo smarty_function_html_checkboxes(array('name' => 'SpecialDiscounts','values' => $this->_tpl_vars['specialDiscountsIndexArray'],'output' => $this->_tpl_vars['specialDiscountsStrArray'],'selected' => $this->_tpl_vars['marketingOpportunities']['SpecialDiscounts'],'separator' => "<br />",'id' => 'SpecialDiscounts'), $this);?>

									<input type="text" name="SpecialDiscountOthers" class="form" size="40" maxlength="100" onchange="setChecked('SpecialDiscounts','frmStepThree','6')"  value="<?php echo $this->_tpl_vars['marketingOpportunities']['SpecialDiscountOthers']; ?>
">	
								</td>
								<td colspan="2">
																										</td>
							  </tr>
							  <tr>
								<td align="left" style="padding-bottom:5px" valign="top">Do you offer a Warranty ?</td>
								<td colspan="2">
																									</td>
							  </tr>
							   <tr>
								<td align="left" style="padding-bottom:10px;padding-left:20px;" valign="top">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Warranty','values' => $this->_tpl_vars['warrantyIndexArray'],'output' => $this->_tpl_vars['warrantyStrArray'],'selected' => $this->_tpl_vars['marketingOpportunities']['Warranty'],'separator' => "<br />",'id' => 'Warranty'), $this);?>

								
									<input type="text" name="WarrantyOther" class="form" size="40" maxlength="100" onchange="setChecked('Warranty','frmStepThree','5')"  value="<?php echo $this->_tpl_vars['marketingOpportunities']['WarrantyOther']; ?>
">	
								</td>
								<td colspan="2">
																										</td>
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
		if(checkOther(\'SpecialWork[]\',\'frmStepThree\',\'7\',\'SpecialWorkOther\')==1)
		{
			return false;
		}
		if(checkOther(\'CompetiveAdvantages[]\',\'frmStepThree\',\'7\',\'MaximumShuttleDistance\')==1)
		{
			return false;
		}
		if(checkOther(\'CompetiveAdvantages[]\',\'frmStepThree\',\'25\',\'SpecialtyTools\')==1)
		{
			return false;
		}
		if(checkOther(\'CompetiveAdvantages[]\',\'frmStepThree\',\'39\',\'OtherBeverages\')==1)
		{
			return false;
		}
		if(checkOther(\'CompetiveAdvantages[]\',\'frmStepThree\',\'44\',\'AdditionalCompetiveAdvantages\')==1)
		{
			return false;
		}
		
		if(checkOther(\'BloodMobile[]\',\'frmStepThree\',\'1\',\'BloodMobileDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'Charities[]\',\'frmStepThree\',\'2\',\'CharitiesDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'Athletics[]\',\'frmStepThree\',\'3\',\'AthleticsDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'CustomerAppreciation[]\',\'frmStepThree\',\'4\',\'CustomerAppreciationDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'FoodBanks[]\',\'frmStepThree\',\'5\',\'FoodBanksDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'Holiday[]\',\'frmStepThree\',\'6\',\'HolidayDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'LocalChurch[]\',\'frmStepThree\',\'7\',\'LocalChurchDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'LocalEvents[]\',\'frmStepThree\',\'8\',\'LocalEventsDetail\')==1)
		{
			return false;
		}
		
		if(checkOther(\'SchoolProgram\',\'frmStepThree\',\'9\',\'SchoolProgramDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'Scouts[]\',\'frmStepThree\',\'10\',\'ScoutsDetail\')==1)
		{
			return false;
		}
		if(checkOther(\'chkAdditional[]\',\'frmStepThree\',\'11\',\'Additional\')==1)
		{
			return false;
		}

		if(checkOther(\'PaymentPrograms[]\',\'frmStepThree\',\'1\',\'CashThroughWhom\')==1)
		{
			return false;
		}

		if(checkOther(\'PaymentPrograms[]\',\'frmStepThree\',\'6\',\'PaymentProgramsOthers\')==1)
		{
			return false;
		}
		if(checkOther(\'SpecialDiscounts[]\',\'frmStepThree\',\'6\',\'SpecialDiscountOthers\')==1)
		{
			return false;
		}
		if(checkOther(\'Warranty[]\',\'frmStepThree\',\'5\',\'WarrantyOther\')==1)
		{
			return false;
		}
		
		return true;;
	}
</script>
'; ?>