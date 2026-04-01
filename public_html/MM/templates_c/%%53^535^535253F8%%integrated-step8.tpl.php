<?php /* Smarty version 2.6.26, created on 2013-09-17 02:35:51
         compiled from integrated-step8.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'integrated-step8.tpl', 40, false),array('function', 'html_checkboxes', 'integrated-step8.tpl', 157, false),)), $this); ?>
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
			<h1>Integrated Survey </h1>
			<form name="frmStepOne" id="frmStepOne" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step8.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Basic Marketing Info</u></h2>
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
					<td align="left" style="padding-bottom:10px" valign="middle">What was your companies gross sales last year ? 
					<input type="text" name="LastYearGrossSales" id="LastYearGrossSales" maxlength="30" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['LastYearGrossSales']; ?>
" onKeyUp="return valid_number(this)"/> <span class="infoText"><br />
(Should have numeric value, e.g. 1,500,000 )</span>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">How much did you spend last year on marketing / advertising ? 
					<input type="text" name="LastYearMarketingExpenditure" id="LastYearMarketingExpenditure" maxlength="30" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['LastYearMarketingExpenditure']; ?>
" onKeyUp="return valid_number(this)" /> <span class="infoText">(Should have numeric value, e.g. 1,500,000 )</span></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an annual marketing / advertising plan ? 
					  <select name="HasAnnualMarketingPlan" class="form" onchange="toggleDiv(this.value,'divMarketingPlan')" style="width:80px">
						<option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['basicInfoDetail']['HasAnnualMarketingPlan']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['basicInfoDetail']['HasAnnualMarketingPlan']): ?>
				  <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block " id="divMarketingPlan">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						 <tr>
							<td width="75%" align="left" valign="middle" style="padding-bottom:10px;padding-left:5px">Is it created in house or outside  ? 
							 <?php if ($this->_tpl_vars['basicInfoDetail']['InHousePlan']): ?>
							  <input type="radio" name="InHousePlan" value="1" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value-1,'trPlanCreatedBy')" id="InHousePlan" checked/>
Inside
<input type="radio" name="InHousePlan" id="InHousePlan" value="0" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value+1,'trPlanCreatedBy')" />
Outside																			  
							  <?php else: ?>
							 <input type="radio" name="InHousePlan" value="1" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value-1,'trPlanCreatedBy')" id="InHousePlan" />
Inside
<input type="radio" name="InHousePlan" id="InHousePlan" value="0" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value+1,'trPlanCreatedBy')" checked/>
Outside																			 
							  <?php endif; ?>
</td>
							<td width="25%" colspan="2">&nbsp;</td>
					   </tr>
						  <?php if ($this->_tpl_vars['basicInfoDetail']['PlanCreatedBy']): ?>
						   <tr >
							<td align="left" style="padding-bottom:10px;padding-left:5px;" valign="middle">
							<div style="width:100%;display:block" id="trPlanCreatedBy" align="left">
							if outside who did it  ? 
							 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['PlanCreatedBy']; ?>
"/>
							 </div>
							 </td>
							<td colspan="2"></td>
						  </tr>	
						  <?php else: ?>
						   <tr >
							<td align="left" style="padding-bottom:10px;padding-left:5px;" valign="middle">
							<div style="width:100%;display:none" id="trPlanCreatedBy" align="left">
							if outside who did it  ? 
							 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="<?php echo $this->_tpl_vars['PlanCreatedBy']; ?>
"/>
							 </div>
							 </td>
							<td colspan="2"></td>
						  </tr>	
						  <?php endif; ?>
					  </table>
					  </div>																	</td>
				  </tr>
				  <?php else: ?>
				  <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none " id="divMarketingPlan">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						 <tr>
							<td width="75%" align="left" valign="middle" style="padding-bottom:10px;padding-left:5px">Is it created in house or outside  ? 
							  <input type="radio" name="InHousePlan" value="1" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value-1,'trPlanCreatedBy')" id="InHousePlan" checked/>
Inside
<input type="radio" name="InHousePlan" id="InHousePlan" value="0" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value+1,'trPlanCreatedBy')" />
Outside </td>
							<td width="25%" colspan="2">&nbsp;</td>
					   </tr>
						   <tr >
							<td align="left" style="padding-bottom:10px;padding-left:5px;" valign="middle">
							<div style="width:100%;display:none" id="trPlanCreatedBy" align="left">
							if outside who did it  ? 
							 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="<?php echo $this->_tpl_vars['PlanCreatedBy']; ?>
"/>
							 </div>
							 </td>
							<td colspan="2"></td>
						  </tr>	
					  </table>
					  </div>																	</td>
				  </tr>
				  <?php endif; ?>
				 <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an annual marketing / advertising budget ? 
					  <select name="HasAnnualBudget" class="form" onchange="toggleDiv(this.value,'divAnnualBudget')" style="width:80px">
					   <option value="">--Select--</option>
					   <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['basicInfoDetail']['HasAnnualBudget']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['basicInfoDetail']['HasAnnualBudget']): ?>
				  <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divAnnualBudget">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td align="right" style="padding-bottom:10px" valign="middle" width="20%">What is that budget ?</td>
							<td width="81%" colspan="2">
							<input type="text" name="BudgetAmount" id="BudgetAmount" maxlength="30" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['BudgetAmount']; ?>
" onKeyUp="return valid_number(this)"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
				  </tr>	
				  <?php else: ?>
				   <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divAnnualBudget">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td align="right" style="padding-bottom:10px" valign="middle" width="20%">What is that budget ?</td>
							<td width="81%" colspan="2">
							<input type="text" name="BudgetAmount" id="BudgetAmount" maxlength="30" size="40" class="form" value="<?php echo $this->_tpl_vars['BudgetAmount']; ?>
" onKeyUp="return valid_number(this)"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
				  </tr>	
				  <?php endif; ?>															  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="top">What market segment do you service ?</td>
					<td colspan="2">
																					</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'MarketSegment','values' => $this->_tpl_vars['marketSegmentIndexArray'],'output' => $this->_tpl_vars['marketSegmentStrArray'],'selected' => $this->_tpl_vars['basicInfoDetail']['MarketSegment'],'separator' => "<br />",'id' => 'MarketSegment'), $this);?>

					
						<input type="text" name="OtherMarkerSegment" id="OtherMarketSegment" class="form" maxlength="100" size="40" onchange="setChecked('MarketSegment','frmStepOne','4')" value="<?php echo $this->_tpl_vars['basicInfoDetail']['OtherMarkerSegment']; ?>
">	
					</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="top">What fuel source do you service ?</td>
					<td colspan="2">
																						</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'FuelSource','values' => $this->_tpl_vars['fuellSourceIndexArray'],'output' => $this->_tpl_vars['fuellSourceStrArray'],'selected' => $this->_tpl_vars['basicInfoDetail']['FuelSource'],'separator' => "<br />",'id' => 'FuelSource'), $this);?>

					
						<input type="text" name="OtherFuelSource" id="OtherFuelSource" class="form" maxlength="100" size="40" onchange="setChecked('FuelSource','frmStepOne','5')" value="<?php echo $this->_tpl_vars['basicInfoDetail']['OtherFuelSource']; ?>
">	
					</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have any fleet business ? 
					  <select name="HasFleetBusiness" class="form" onchange="toggleDiv(this.value,'divFleetBusiness')" style="width:80px">
						<option value="">--Select--</option>
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['basicInfoDetail']['HasFleetBusiness']), $this);?>

					  </select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <?php if ($this->_tpl_vars['basicInfoDetail']['HasFleetBusiness']): ?>
				  <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divFleetBusiness">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td align="right" style="padding-bottom:10px" valign="middle" width="43%">What percentage of your business is fleet related ?</td>
							<td width="57%" colspan="2">
							<input type="text" name="PercentageInFleet" id="PercentageInFleet" maxlength="5" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['PercentageInFleet']; ?>
" onKeyUp="return valid_number(this)"/><br />
<span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%) </span>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
				  </tr>	
				  <?php else: ?>
				   <tr>
					<td colspan="3" align="center">
					<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divFleetBusiness">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td align="right" style="padding-bottom:10px" valign="middle" width="43%">What percentage of your business is fleet related ?</td>
							<td width="57%" colspan="2">
							<input type="text" name="PercentageInFleet" id="PercentageInFleet" maxlength="5" size="40" class="form" value="<?php echo $this->_tpl_vars['PercentageInFleet']; ?>
" onKeyUp="return valid_number(this)"/><br />
<span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%) </span>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
				  </tr>	
				  <?php endif; ?>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have detailed tracking of all marketing efforts? 
					<input type="text" name="DetailTracking" id="DetailTracking" maxlength="150" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['DetailTracking']; ?>
" /> 
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="hidInHousePlan" value="" >
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
	var DayArray=Array(\'Sunday\',\'Monday\',\'TuesDay\',\'WednesDay\',\'ThursDay\',\'FriDay\',\'SaturDay\');
	
	
	function validateForm()
	{
		
			if(document.frmStepOne.hidInHousePlan.value==\'0\' && trimSpace(document.frmStepOne.PlanCreatedBy.value)==\'\')
			{
				alert(\'Please tell us who made your advertisement plan\');
				document.frmStepOne.PlanCreatedBy.focus();
				return false;
			}
			if(document.frmStepOne.HasAnnualBudget.value==1 && (trimSpace(document.frmStepOne.BudgetAmount.value)==\'\' || isNaN(document.frmStepOne.BudgetAmount.value)))
			{
				alert(\'Please enter your budget amount. It should have a numeric value.\');
				document.frmStepOne.BudgetAmount.focus();
				return false;
			}
			if(checkOther(\'MarketSegment[]\',\'frmStepOne\',\'4\',\'OtherMarketSegment\')==1)
				return false;
			else 
			{	if(checkOther(\'FuelSource[]\',\'frmStepOne\',\'5\',\'OtherFuelSource\')==1)
					return false;
				else 
				{
					if(document.frmStepOne.HasFleetBusiness.value==1 && (trimSpace(document.frmStepOne.PercentageInFleet.value)==\'\' || isNaN(document.frmStepOne.PercentageInFleet.value)))
					{
						alert(\'What percentage of your business is fleet related ? It should have a numeric value.\');
						document.frmStepOne.PercentageInFleet.focus();
						return false;
					}
					else
					{
						return true;
					}
				}	
			}
			return true;	
	}
	
	function setInHousePlanVal(val)
	{
		document.frmStepOne.hidInHousePlan.value=val;
	}
	</script>
'; ?>