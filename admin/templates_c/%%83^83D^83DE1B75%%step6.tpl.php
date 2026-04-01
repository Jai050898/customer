<?php /* Smarty version 2.6.26, created on 2011-02-16 09:29:26
         compiled from step6.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'step6.tpl', 44, false),)), $this); ?>
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
							<li>Marketing / Advertising Elements</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Marketing / Advertising Elements</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepSix" id="frmStepSix" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
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
							<td align="left" style="padding-bottom:10px;padding-right:8px" valign="top" >What elements do you have available to your 
		business / customers branded with your companies identity?</td>
							<td colspan="2">
																								</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
							<em>Business Documents</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'BusinessDocuments','values' => $this->_tpl_vars['businessDocumentsIndexArray'],'output' => $this->_tpl_vars['businessDocumentsStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['BusinessDocuments'],'separator' => "<br />"), $this);?>

								</div>	
							</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
								<em>Staff</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Staff','values' => $this->_tpl_vars['staffIndexArray'],'output' => $this->_tpl_vars['staffStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Staff'],'separator' => "<br />"), $this);?>

																									</div>																	</td>
							<td colspan="2">																	</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Signage / Display</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Signage','values' => $this->_tpl_vars['signageIndexArray'],'output' => $this->_tpl_vars['signageStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Signage'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																	</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Multimedia</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Multimedia','values' => $this->_tpl_vars['multimediaIndexArray'],'output' => $this->_tpl_vars['multimediaStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Multimedia'],'separator' => "<br />"), $this);?>

																									</div>																	</td>
							<td colspan="2">																	</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Interactive</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Interactive','values' => $this->_tpl_vars['interactiveIndexArray'],'output' => $this->_tpl_vars['interactiveStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Interactive'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																	</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Online </em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Online','values' => $this->_tpl_vars['onlineIndexArray'],'output' => $this->_tpl_vars['onlineStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Online'],'separator' => "<br />"), $this);?>

								
								<div style="width:100%; padding-left:10px; display:block" id="divSearchEngine" >
									<?php echo smarty_function_html_checkboxes(array('name' => 'SearchEngine','values' => $this->_tpl_vars['searchEngineIndexArray'],'output' => $this->_tpl_vars['searchEngineStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['SearchEngine'],'separator' => "<br />",'id' => 'FuelSource'), $this);?>

									
									<input type="text" name="SearchEngineOther" class=" form" maxlength="100" onchange="setChecked('SearchEngine','frmStepSix','4')" value="<?php echo $this->_tpl_vars['marketingElementsDetail']['SearchEngineOther']; ?>
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
									<?php echo smarty_function_html_checkboxes(array('name' => 'Worksheets','values' => $this->_tpl_vars['worksheetsIndexArray'],'output' => $this->_tpl_vars['worksheetsStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Worksheets'],'separator' => "<br />",'id' => 'Worksheets'), $this);?>

									<input type="text" name="WorksheetsOther" class=" form" onchange="setChecked('Worksheets','frmStepSix','4')" value="<?php echo $this->_tpl_vars['marketingElementsDetail']['WorksheetsOther']; ?>
">	
								</div>
								<em>Brochures</em><br>
								<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_checkboxes(array('name' => 'Brochures','values' => $this->_tpl_vars['brochuresIndexArray'],'output' => $this->_tpl_vars['brochuresStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Brochures'],'separator' => "<br />",'id' => 'Brochures'), $this);?>

									
									<input type="text" name="BrochuresOther" class=" form" onchange="setChecked('Brochures','frmStepSix','3')" value="<?php echo $this->_tpl_vars['marketingElementsDetail']['Brochures']; ?>
">	
								</div>
								<em>Questionaire</em><br>
								<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_checkboxes(array('name' => 'Questionaire','values' => $this->_tpl_vars['questionaireIndexArray'],'output' => $this->_tpl_vars['questionaireStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Questionaire'],'separator' => "<br />"), $this);?>

								</div>																	</td>
							<td colspan="2">																	</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Off-Site Advertising</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'OffSiteAdvertising','values' => $this->_tpl_vars['offsiteAdvIndexArray'],'output' => $this->_tpl_vars['offsiteAdvStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['OffSiteAdvertising'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																																			</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Published</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Published','values' => $this->_tpl_vars['publishedIndexArray'],'output' => $this->_tpl_vars['publishedStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Published'],'separator' => "<br />"), $this);?>

								</div>																	</td>
							<td colspan="2">																																				</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Mailing</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'Mailing','values' => $this->_tpl_vars['mailingIndexArray'],'output' => $this->_tpl_vars['mailingStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['Mailing'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																																				</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>In Hand</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'InHand','values' => $this->_tpl_vars['inHandIndexArray'],'output' => $this->_tpl_vars['inHandStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['InHand'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																																	</td>
						  </tr>
						 <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>In/On Vehicle</em><br>
								<div style="width:100%; padding-left:10px">
								<?php echo smarty_function_html_checkboxes(array('name' => 'InVehicle','values' => $this->_tpl_vars['in_onVehicleIndexArray'],'output' => $this->_tpl_vars['in_onVehicleStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['InVehicle'],'separator' => "<br />"), $this);?>

								
								</div>																	</td>
							<td colspan="2">																																			</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<em>Fleet Development</em><br>
								<div style="width:100%; padding-left:10px">
								<?php if ($this->_tpl_vars['marketingElementsDetail']['FleetDevelopment']): ?>
									<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" checked>
								<?php else: ?>	
									<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" >
								<?php endif; ?>
								Donut Delivery Boxes<br>
								<em>Fleet Packette</em><br>
								<div style="width:100%; padding-left:10px">
									<?php echo smarty_function_html_checkboxes(array('name' => 'FleetPackette','values' => $this->_tpl_vars['fleetPacketteIndexArray'],'output' => $this->_tpl_vars['fleetPacketteStrArray'],'selected' => $this->_tpl_vars['marketingElementsDetail']['FleetPackette'],'separator' => "<br />"), $this);?>

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
			if(checkOther(\'SearchEngine[]\',\'frmStepSix\',\'4\',\'SearchEngineOther\')==1)
			{
				return false;
			}
			if(checkOther(\'Worksheets[]\',\'frmStepSix\',\'4\',\'WorksheetsOther\')==1)
			{
				return false;
			}
			if(checkOther(\'Brochures[]\',\'frmStepSix\',\'3\',\'BrochuresOther\')==1)
			{
				return false;
			}
			if(checkOther(\'radOutSourced[]\',\'frmStepSix\',\'1\',\'SendRemindersOutsourceWhom\')==1)
			{
				return false;
			}
			if(checkOther(\'radOutsourcedService[]\',\'frmStepSix\',\'1\',\'SendServiceOutsourceWhom\')==1)
			{
				return false;
			}
			
			
			return true;;
		}
</script>
'; ?>