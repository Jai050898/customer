<?php /* Smarty version 2.6.26, created on 2011-02-18 07:09:34
         compiled from integrated-step11.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'integrated-step11.tpl', 67, false),array('function', 'html_radios', 'integrated-step11.tpl', 98, false),)), $this); ?>
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
							<li>Services</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"> Services</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmServices" id="frmServices" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step11.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				  <tr>
					<td align="center" colspan="3">&nbsp;</td>
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
					<td align="left" style="padding-bottom:10px" valign="middle">What is your menu of services ?(General and normal of most shops, or specialty, Diagnosis, eletrical, etc.)<br />

					<textarea name="MenuServices" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['MenuServices']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you specialize in a particular make or style (asian, domestic, foreign) ?<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="SpecializeStyle" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['SpecializeStyle']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any specialty services ? (hybrid repair, other<br /><span class="infoText">(If so, please give details)</span>)<br />

					<textarea name="SpecialtyServices" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['SpecialtyServices']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are you known in your community for anything special? (RV repair, brakes,honest repair, hybrid servicing, other such information)<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="KnownForSpecial" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['KnownForSpecial']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer Fleet Services ?</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'FleetServices','options' => $this->_tpl_vars['fleetServices'],'selected' => $this->_tpl_vars['fleetSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="FleetServicesOther" class="form" id="FleetServicesOther" maxlength="200" size="50" onchange="setChecked('FleetServices[]','frmServices','Other')" value="<?php echo $this->_tpl_vars['servicesInfo']['FleetServicesOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any service Wraps ?
<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="ServiceWraps" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['ServiceWraps']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any special service packages ?<br /></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'SpecialServicePackage','options' => $this->_tpl_vars['specialPackages'],'selected' => $this->_tpl_vars['packageSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="SpecialServicePackageOther" class="form" id="SpecialServicePackageOther" maxlength="200" size="50" onchange="setChecked('SpecialServicePackage[]','frmServices','Other')" value="<?php echo $this->_tpl_vars['servicesInfo']['SpecialServicePackageOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:5px;" valign="top" >Do you follow up on customer Feedback?</td>
					<td colspan="2">																																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Survey Documents</em><br>
						<div style="width:100%; padding-left:10px">
						<?php echo smarty_function_html_radios(array('name' => 'SurveyDocOutsourced','selected' => $this->_tpl_vars['servicesInfo']['SurveyDocOutsourced'],'options' => $this->_tpl_vars['inOutHouseArray'],'separator' => "<br />",'onclick' => "toggleDiv(this.value,'divSurveyDocuments')",'id' => 'SurveyDocOutsourced'), $this);?>

																							</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <?php if ($this->_tpl_vars['servicesInfo']['SurveyDocOutsourced']): ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99%; display:block" id="divSurveyDocuments">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SurveyDocOutsourceWhom" id="SurveyDocOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['servicesInfo']['SurveyDocOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php else: ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99%; display:none" id="divSurveyDocuments">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SurveyDocOutsourceWhom" id="SurveyDocOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['SurveyDocOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php endif; ?>
				<tr>
				 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Phone Call Follow Up</em><br>
						<?php echo smarty_function_html_radios(array('name' => 'PhoneFollowUpOutsourced','selected' => $this->_tpl_vars['servicesInfo']['PhoneFollowUpOutsourced'],'options' => $this->_tpl_vars['inOutHouseArray'],'separator' => "<br />",'onclick' => "toggleDiv(this.value,'divPhoneCall')",'id' => 'PhoneFollowUpOutsourced'), $this);?>

																						</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <?php if ($this->_tpl_vars['servicesInfo']['PhoneFollowUpOutsourced']): ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divPhoneCall">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="PhoneFollowUpOutsourceWhom" id="PhoneFollowUpOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="<?php echo $this->_tpl_vars['servicesInfo']['PhoneFollowUpOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php else: ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:none" id="divPhoneCall">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="PhoneFollowUpOutsourceWhom" id="PhoneFollowUpOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="<?php echo $this->_tpl_vars['BOwnerEmail']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php endif; ?>														  
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Online</em><br>
						<div style="width:100%; padding-left:10px" id="divOnline">
						<?php if (! $this->_tpl_vars['servicesInfo']['OnlineOutSoure']): ?>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')" checked>
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							<?php echo smarty_function_html_checkboxes(array('name' => 'OnlineInhouseType','options' => $this->_tpl_vars['OnlineInhouseTypeArr'],'selected' => $this->_tpl_vars['servicesInfo']['OnlineInhouseType'],'separator' => "<br />"), $this);?>

						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')">
						Outsourced	
						<?php else: ?>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')">
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							<?php echo smarty_function_html_checkboxes(array('name' => 'OnlineInhouseType','options' => $this->_tpl_vars['OnlineInhouseType'],'selected' => $this->_tpl_vars['servicesInfo']['OnlineInhouseType'],'separator' => "<br />"), $this);?>

						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')" checked>
						Outsourced	
						<?php endif; ?>																	</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 
				  <?php if ($this->_tpl_vars['servicesInfo']['OnlineOutSoure']): ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divOnlineOutSource">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="OnlineOutsourceWhom" id="OnlineOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="<?php echo $this->_tpl_vars['servicesInfo']['OnlineOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php else: ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:none" id="divOnlineOutSource">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="OnlineOutsourceWhom" id="OnlineOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="<?php echo $this->_tpl_vars['BOwnerEmail']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php endif; ?>	
				   <tr>
					<td width="75%" align="left" valign="top" style="padding-bottom:10px">Do you send out Service Reminders?</td>
					<td width="25%" colspan="2">																	 </td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
					<?php echo smarty_function_html_radios(array('name' => 'SendReminders','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['servicesInfo']['SendReminders'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendReminders');  toggleDiv(this.value-1,'divSendRemindersOutsource');"), $this);?>

					
					<?php if ($this->_tpl_vars['servicesInfo']['SendReminders']): ?>
					<div style="width:99% ;display:block" id="divSendReminders">
						<?php echo smarty_function_html_radios(array('name' => 'radElectronic','options' => $this->_tpl_vars['SendRemindersArr'],'selected' => $this->_tpl_vars['servicesInfo']['radElectronic'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value+1,'divSendReminders2');"), $this);?>

						
						<?php if ($this->_tpl_vars['servicesInfo']['radElectronic']): ?>
						<div style="width:99% ;display:block" id="divSendReminders2">	
						<?php echo smarty_function_html_radios(array('name' => 'radOutsourced','options' => $this->_tpl_vars['inOutHouseArray'],'selected' => $this->_tpl_vars['servicesInfo']['radOutsourced'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendRemindersOutsource');",'id' => 'radOutsourced'), $this);?>

						</div>
						<?php else: ?>
						<div style="width:99% ;display:block" id="divSendReminders2">	
						<?php echo smarty_function_html_radios(array('name' => 'radOutsourced','options' => $this->_tpl_vars['inOutHouseArray'],'selected' => $this->_tpl_vars['servicesInfo']['radOutsourced'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendRemindersOutsource');",'id' => 'radOutsourced'), $this);?>

						</div>
						<?php endif; ?>	
					</div>
					<?php else: ?>
					<div style="width:99% ;display:none" id="divSendReminders">
						<input type="radio" name="radElectronic" value="0" class="form" onclick="toggleDiv(this.value+1,'divSendReminders2');">
							Electronic 
						<input type="radio" name="radElectronic" value="1" class="form" onclick="toggleDiv(this.value,'divSendReminders2');">
							Mail<br />	
						<div style="width:99% ;display:none" id="divSendReminders2">	
						<input type="radio" name="radOutsourced" id="radOutsourced" value="0" class="form" onclick="toggleDiv(this.value,'divSendRemindersOutsource');">
							In House  
						<input type="radio" name="radOutsourced" id="radOutsourced" value="1" class="form" onclick="toggleDiv(this.value,'divSendRemindersOutsource');">					
							Outsourced <br />
						</div>	
					</div>
					<?php endif; ?>																		</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
					<?php if ($this->_tpl_vars['servicesInfo']['radOutsourced']): ?>
					<tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendRemindersOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendRemindersOutsourceWhom" id="SendRemindersOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['servicesInfo']['SendRemindersOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php else: ?>
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:none; width:99%" id="divSendRemindersOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendRemindersOutsourceWhom" id="SendRemindersOutsourceWhom" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['SendRemindersOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php endif; ?>
				   <tr>
					<td width="75%" align="left" valign="top" style="padding-bottom:10px">Do you send our Recommended Services?</td>
					<td width="25%" colspan="2">																	 </td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
					<?php echo smarty_function_html_radios(array('name' => 'SendService','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['servicesInfo']['SendService'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendService'); toggleDiv(this.value-1,'divSendServiceOutsource');"), $this);?>

					
					<?php if ($this->_tpl_vars['servicesInfo']['SendService']): ?>
					<div style="width:99% ;display:block" id="divSendService">
						<?php echo smarty_function_html_radios(array('name' => 'radElectronicService','options' => $this->_tpl_vars['SendRemindersArr'],'selected' => $this->_tpl_vars['servicesInfo']['radElectronicService'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value+1,'divSendService2');toggleDiv(this.value-1,'divSendServiceOutsource');"), $this);?>

						
						
						<?php if ($this->_tpl_vars['servicesInfo']['radElectronicService']): ?>
						<div style="width:99% ;display:block" id="divSendService2">
						<?php echo smarty_function_html_radios(array('name' => 'radOutsourcedService','options' => $this->_tpl_vars['inOutHouseArray'],'selected' => $this->_tpl_vars['servicesInfo']['radOutsourcedService'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendServiceOutsource');",'id' => 'radOutsourcedService'), $this);?>

						</div>
						<?php else: ?>
						<div style="width:99% ;display:block" id="divSendService2">
						<?php echo smarty_function_html_radios(array('name' => 'radOutsourcedService','options' => $this->_tpl_vars['inOutHouseArray'],'selected' => $this->_tpl_vars['servicesInfo']['radOutsourcedService'],'separator' => "&nbsp;",'onclick' => "toggleDiv(this.value,'divSendServiceOutsource');",'id' => 'radOutsourcedService'), $this);?>

						</div>
						
						<?php endif; ?>	
					</div>
					<?php else: ?>
					<div style="width:99% ;display:none" id="divSendService">
						<input type="radio" name="radElectronicService" value="0" class="form" onclick="toggleDiv(this.value+1,'divSendService2');">
							Electronic 
						<input type="radio" name="radElectronicService" value="1" class="form" onclick="toggleDiv(this.value,'divSendService2');">
							Mail<br />	
						<div style="width:99% ;display:none" id="divSendService2">
						<input type="radio" name="radOutsourcedService" id="radOutsourcedService" value="0" class="form" onclick="toggleDiv(this.value,'divSendServiceOutsource');">
							In House  
						<input type="radio" name="radOutsourcedService" id="radOutsourcedService" value="1" class="form" onclick="toggleDiv(this.value,'divSendServiceOutsource');">
							Outsourced <br />
						</div>	
					</div>
					<?php endif; ?>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['servicesInfo']['radOutsourcedService']): ?> 
				 <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendServiceOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendServiceOutsourceWhom" id="SendServiceOutsource" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['servicesInfo']['SendServiceOutsourceWhom']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php else: ?>
				   <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:none; width:99%" id="divSendServiceOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendServiceOutsourceWhom" id="SendServiceOutsource" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['BOwnerEmail']; ?>
"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <?php endif; ?>													  
				  
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
		if(trimSpace(document.frmServices.MenuServices.value)==\'\')
		{
			alert("Tell me about the your menu services?");
			document.frmServices.MenuServices.focus();
			return false;
		}
		if(checkOther(\'FleetServices[]\',\'frmServices\',\'Other\',\'FleetServicesOther\')==1)
		{
			return false;
		}
		if(checkOther(\'SpecialServicePackage[]\',\'frmServices\',\'Other\',\'SpecialServicePackageOther\')==1)
		{
			return false;
		}
		if(checkOther(\'SurveyDocOutsourced\',\'frmServices\',\'1\',\'SurveyDocOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'PhoneFollowUpOutsourced\',\'frmServices\',\'1\',\'PhoneFollowUpOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'OnlineOutSoure\',\'frmServices\',\'1\',\'OnlineOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'radOutsourced\',\'frmServices\',\'1\',\'SendRemindersOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'radOutsourcedService\',\'frmServices\',\'1\',\'SendServiceOutsourceWhom\')==1)
		{
			return false;
		}
		return true;
		
	}
</script>
'; ?>