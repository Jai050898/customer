<?php /* Smarty version 2.6.26, created on 2011-02-18 07:13:15
         compiled from integrated-step12.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'integrated-step12.tpl', 50, false),array('function', 'html_checkboxes', 'integrated-step12.tpl', 76, false),)), $this); ?>
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
							<li>Marketing / Advertising</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"> Marketing / Advertising</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmCompetitiveAdvantages" id="frmCompetitiveAdvantages" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step12.php?id=<?php echo $_REQUEST['id']; ?>
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

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an advertising Calendar ?

<br />

					<?php echo smarty_function_html_options(array('name' => 'HaveAdvertisingCalender','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['HaveAdvertisingCalender']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What coupons / specials are you currently running ?<br />



					<textarea name="CouponsRunning" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['CouponsRunning']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				 <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What multimedia marketing efforts do you have?<br />

					<?php echo smarty_function_html_checkboxes(array('name' => 'MultimediaMarketing','options' => $this->_tpl_vars['arrayMultimediaMarketing'],'selected' => $this->_tpl_vars['multimediaOptionsSelected'],'separator' => "<br />"), $this);?>


					<input type="text" name="MultimediaMarketingOptionsOther" class="form" id="MultimediaMarketingOptionsOther" maxlength="200" size="50" onchange="setChecked('MultimediaMarketing[]','frmMarketing','Other')" value="<?php echo $this->_tpl_vars['marketingInfo']['MultimediaMarketingOptionsOther']; ?>
">				
					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What are the names of your top 3 competitors ? <span class="infoText">(Examples are either specific: Jacks repair, ABC Service or general: Dealerships, mobile repair cos, etc.</span>

<br />



					<textarea name="TopCompetitors" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['TopCompetitors']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use an ad agency for marketing and advertising or do it yourself ?<br /><span class="infoText">(if so, please give me detail)</span><br />



					<textarea name="UseMarketingAgency" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['UseMarketingAgency']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out email notifications / specials / advertising of any kind ?<br /><span class="infoText">(if so, please give me detail)</span><br />



					<textarea name="SendEmailNotification" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['SendEmailNotification']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use any of the following in your advertising / marketing ?<br /></td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">

					<?php echo smarty_function_html_checkboxes(array('name' => 'MarketingOptions','options' => $this->_tpl_vars['marketingOptions'],'selected' => $this->_tpl_vars['marketingOptionsSelected'],'separator' => "<br />"), $this);?>


					<input type="text" name="MarketingOptionsOther" class="form" id="MarketingOptionsOther" maxlength="200" size="50" onchange="setChecked('MarketingOptions[]','frmMarketing','Other')" value="<?php echo $this->_tpl_vars['marketingInfo']['MarketingOptionsOther']; ?>
">																	</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out oil Change Reminders ?

<br />

					<?php echo smarty_function_html_options(array('name' => 'OilChangeReminder','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['OilChangeReminder']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out recomended repair reminders ?

<br />

					<?php echo smarty_function_html_options(array('name' => 'RepairReminders','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['RepairReminders']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a night own / early bird drop off available ?

<br />

					<?php echo smarty_function_html_options(array('name' => 'NightOwnBirdDropOff','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['NightOwnBirdDropOff']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use / have a list of customer testimonials ?<br /><span class="infoText">(if so, please send some

to be used - 3 sets would be fine)</span><br />



				   <?php echo smarty_function_html_options(array('name' => 'CustomerTestimonials','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['CustomerTestimonials']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you schedule next appointment dates when the customer is picking up their vehicle ?

<br />

					<?php echo smarty_function_html_options(array('name' => 'ScheduleAppointment','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['marketingInfo']['ScheduleAppointment']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-right:8px" valign="top" >What elements do you have available to your 

business / customers branded with your companies identity?</td>

					<td colspan="2">

																						</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >

					<em>Business Documents</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'BusinessDocuments','values' => $this->_tpl_vars['businessDocumentsIndexArray'],'output' => $this->_tpl_vars['businessDocumentsStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['BusinessDocuments'],'separator' => "<br />"), $this);?>


						</div>	

					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

						<em>Staff</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Staff','values' => $this->_tpl_vars['staffIndexArray'],'output' => $this->_tpl_vars['staffStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Staff'],'separator' => "<br />"), $this);?>


																							</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Signage / Display</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Signage','values' => $this->_tpl_vars['signageIndexArray'],'output' => $this->_tpl_vars['signageStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Signage'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Multimedia</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Multimedia','values' => $this->_tpl_vars['multimediaIndexArray'],'output' => $this->_tpl_vars['multimediaStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Multimedia'],'separator' => "<br />"), $this);?>


																							</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Interactive</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Interactive','values' => $this->_tpl_vars['interactiveIndexArray'],'output' => $this->_tpl_vars['interactiveStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Interactive'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Online </em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Online','values' => $this->_tpl_vars['onlineIndexArray'],'output' => $this->_tpl_vars['onlineStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Online'],'separator' => "<br />"), $this);?>


						

						<div style="width:100%; padding-left:10px; display:block" id="divSearchEngine" >

							<?php echo smarty_function_html_checkboxes(array('name' => 'SearchEngine','values' => $this->_tpl_vars['searchEngineIndexArray'],'output' => $this->_tpl_vars['searchEngineStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['SearchEngine'],'separator' => "<br />",'id' => 'FuelSource'), $this);?>


							

							<input type="text" name="SearchEngineOther" class=" form" maxlength="100" onchange="setChecked('SearchEngine','frmStepSix','4')" value="<?php echo $this->_tpl_vars['marketingInfo']['SearchEngineOther']; ?>
">	

						</div>

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Forms</em><br>

						<div style="width:100%; padding-left:10px">

						<em>Worksheets / Inspection Forms</em><br>

						<div style="width:100%; padding-left:10px">

							<?php echo smarty_function_html_checkboxes(array('name' => 'Worksheets','values' => $this->_tpl_vars['worksheetsIndexArray'],'output' => $this->_tpl_vars['worksheetsStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Worksheets'],'separator' => "<br />",'id' => 'Worksheets'), $this);?>


							<input type="text" name="WorksheetsOther" class=" form" onchange="setChecked('Worksheets','frmStepSix','4')" value="<?php echo $this->_tpl_vars['marketingInfo']['WorksheetsOther']; ?>
">	

						</div>

						<em>Brochures</em><br>

						<div style="width:100%; padding-left:10px">

							<?php echo smarty_function_html_checkboxes(array('name' => 'Brochures','values' => $this->_tpl_vars['brochuresIndexArray'],'output' => $this->_tpl_vars['brochuresStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Brochures'],'separator' => "<br />",'id' => 'Brochures'), $this);?>


							

							<input type="text" name="BrochuresOther" class=" form" onchange="setChecked('Brochures','frmStepSix','3')" value="<?php echo $this->_tpl_vars['marketingInfo']['Brochures']; ?>
">	

						</div>

						<em>Questionaire</em><br>

						<div style="width:100%; padding-left:10px">

							<?php echo smarty_function_html_checkboxes(array('name' => 'Questionaire','values' => $this->_tpl_vars['questionaireIndexArray'],'output' => $this->_tpl_vars['questionaireStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Questionaire'],'separator' => "<br />"), $this);?>


						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Off-Site Advertising</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'OffSiteAdvertising','values' => $this->_tpl_vars['offsiteAdvIndexArray'],'output' => $this->_tpl_vars['offsiteAdvStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['OffSiteAdvertising'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																																			</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Published</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Published','values' => $this->_tpl_vars['publishedIndexArray'],'output' => $this->_tpl_vars['publishedStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Published'],'separator' => "<br />"), $this);?>


						</div>																	</td>

					<td colspan="2">																																				</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Mailing</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'Mailing','values' => $this->_tpl_vars['mailingIndexArray'],'output' => $this->_tpl_vars['mailingStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['Mailing'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																																				</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>In Hand</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'InHand','values' => $this->_tpl_vars['inHandIndexArray'],'output' => $this->_tpl_vars['inHandStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['InHand'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																																	</td>

				  </tr>

				 <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>In/On Vehicle</em><br>

						<div style="width:100%; padding-left:10px">

						<?php echo smarty_function_html_checkboxes(array('name' => 'InVehicle','values' => $this->_tpl_vars['in_onVehicleIndexArray'],'output' => $this->_tpl_vars['in_onVehicleStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['InVehicle'],'separator' => "<br />"), $this);?>


						

						</div>																	</td>

					<td colspan="2">																																			</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Fleet Development</em><br>

						<div style="width:100%; padding-left:10px">

						<?php if ($this->_tpl_vars['marketingOptionsSelected']['FleetDevelopment']): ?>

							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" checked>

						<?php else: ?>	

							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" >

						<?php endif; ?>

						Donut Delivery Boxes<br>

						<em>Fleet Packette</em><br>

						<div style="width:100%; padding-left:10px">

							<?php echo smarty_function_html_checkboxes(array('name' => 'FleetPackette','values' => $this->_tpl_vars['fleetPacketteIndexArray'],'output' => $this->_tpl_vars['fleetPacketteStrArray'],'selected' => $this->_tpl_vars['marketingOptionsSelected']['FleetPackette'],'separator' => "<br />"), $this);?>


						</div>

						</div>																	</td>

					<td colspan="2">																																		</td>

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
		if(trimSpace(document.frmMarketing.TopCompetitors.value)==\'\')
		{
			alert("Tell me your top 3 competitors?");
			document.frmMarketing.TopCompetitors.focus();
			return false;
		}
		if(checkOther(\'MarketingOptions[]\',\'frmMarketing\',\'Other\',\'MarketingOptionsOther\')==1)
		{
			return false;
		}
		if(checkOther(\'SearchEngine[]\',\'frmMarketing\',\'4\',\'SearchEngineOther\')==1)
		{
			return false;
		}
		if(checkOther(\'Worksheets[]\',\'frmMarketing\',\'4\',\'WorksheetsOther\')==1)
		{
			return false;
		}
		if(checkOther(\'Brochures[]\',\'frmMarketing\',\'3\',\'BrochuresOther\')==1)
		{
			return false;
		}
		if(checkOther(\'radOutSourced[]\',\'frmMarketing\',\'1\',\'SendRemindersOutsourceWhom\')==1)
		{
			return false;
		}
		if(checkOther(\'radOutsourcedService[]\',\'frmMarketing\',\'1\',\'SendServiceOutsourceWhom\')==1)
		{
			return false;
		}
		return true;
	}
</script>
'; ?>