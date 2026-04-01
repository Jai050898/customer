{include file="header.tpl"}
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
					<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							<li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
							<li><a href="{$siteurl}/admin/marketing-survey.php?user_id={$smarty.request.id}">Marketing survey</a></li>
							<li>Basic Information Page</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Basic Information Page</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepOne" id="frmStepOne" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="step1.php?id={$smarty.request.id}">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="">

							  <tr>
			
								<td align="center" colspan="3">&nbsp;																	</td>
			
							  </tr>
			
							  {if $Errormssage}
			
							  <tr>
			
								<td align="center" colspan="3"><span class="error">{$Errormssage}</span>																	</td>
			
							  </tr>
			
							  <tr>
			
								<td align="center" colspan="3">&nbsp;																	</td>
			
							  </tr>
			
							  {/if}
			
							  <tr>
			
								<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Toll Free Phone Number : 
			
								<input type="text" name="TollFreePhone" id="TollFreePhone" maxlength="15" size="20" class="form" value="{$basicInfoDetail.TollFreePhone}"/></td>
			
								<td width="16%" colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Fax Line Number : 
			
								<input type="text" name="FaxLineNumber" id="FaxLineNumber" maxlength="15" size="20" class="form" value="{$basicInfoDetail.TollFreePhone}"/></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">Business Owner Email Address : 
			
								<input type="text" name="OwnerEmailAddress" id="OwnerEmailAddress" maxlength="80" size="40" class="form" value="{$basicInfoDetail.OwnerEmailAddress}"/></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">Web Site Address : 
			
								<input type="text" name="WebSiteAddress" id="WebSiteAddress" maxlength="100" size="40" class="form" value="{$basicInfoDetail.WebSiteAddress}"/></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="top">Garage Management System :</td>
			
								<td colspan="2">																	</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
			
								{html_checkboxes name="GarageMgtSystem" values=$garageMangeMentIndexArray output=$garageMangeMentStrArray
			
			selected=$basicInfoDetail.GarageMgtSystem separator="<br />" id="GarageMgtSystem"}
			
								
			
								<input type="text" name="GarageMgtSystemOther" class="form" id="GarageMgtSystemOther" maxlength="100" size="40" onchange="setChecked('GarageMgtSystem','frmStepOne','8')" value="{$basicInfoDetail.GarageMgtSystemOther}">																	</td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">What Hours and days are you open? 
			
			<input type="text" name="HoursOpen" id="HoursOpen" maxlength="218" size="40" class="form" value="{$basicInfoDetail.HoursOpen}" /></td>
			
								<td colspan="2">																	</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">What was your companies gross sales last year ? 
			
								<input type="text" name="LastYearGrossSales" id="LastYearGrossSales" maxlength="30" size="40" class="form" value="{$basicInfoDetail.LastYearGrossSales}" onKeyUp="return valid_number(this)"/> <span class="infoText"><br />
			
			(Should have numeric value, e.g. 1,500,000 )</span>
			
			</td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">How much did you spend last year on marketing / advertising ? 
			
								<input type="text" name="LastYearMarketingExpenditure" id="LastYearMarketingExpenditure" maxlength="30" size="40" class="form" value="{$basicInfoDetail.LastYearMarketingExpenditure}" onKeyUp="return valid_number(this)" /> <span class="infoText">(Should have numeric value, e.g. 1,500,000 )</span></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">Do you have an annual marketing / advertising plan ? 
			
								  <select name="HasAnnualMarketingPlan" class="form" onchange="toggleDiv(this.value,'divMarketingPlan')" style="width:80px">
			
									<option value="">--Select--</option>
			
									{html_options options=$arrayYesNo selected=$basicInfoDetail.HasAnnualMarketingPlan}
			
								  </select></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  {if $basicInfoDetail.HasAnnualMarketingPlan}
			
							  <tr>
			
								<td colspan="3" align="center">
			
								<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block " id="divMarketingPlan">
			
								 <table width="100%" border="0" bgcolor="#E5E5E5">
			
									 <tr>
			
										<td width="75%" align="left" valign="middle" style="padding-bottom:10px;padding-left:5px">Is it created in house or outside  ? 
			
										 {if $basicInfoDetail.InHousePlan}
			
										  <input type="radio" name="InHousePlan" value="1" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value-1,'trPlanCreatedBy')" id="InHousePlan" checked/>
			
			Inside
			
			<input type="radio" name="InHousePlan" id="InHousePlan" value="0" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value+1,'trPlanCreatedBy')" />
			
			Outside																			  
			
										  {else}
			
										 <input type="radio" name="InHousePlan" value="1" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value-1,'trPlanCreatedBy')" id="InHousePlan" />
			
			Inside
			
			<input type="radio" name="InHousePlan" id="InHousePlan" value="0" class="form" onclick="setInHousePlanVal(this.value); toggleDiv(this.value+1,'trPlanCreatedBy')" checked/>
			
			Outside																			 
			
										  {/if}
			
			</td>
			
										<td width="25%" colspan="2">&nbsp;</td>
			
								   </tr>
			
									  {if $basicInfoDetail.PlanCreatedBy}
			
									   <tr >
			
										<td align="left" style="padding-bottom:10px;padding-left:5px;" valign="middle">
			
										<div style="width:100%;display:block" id="trPlanCreatedBy" align="left">
			
										if outside who did it  ? 
			
										 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="{$basicInfoDetail.PlanCreatedBy}"/>
			
										 </div>
			
										 </td>
			
										<td colspan="2"></td>
			
									  </tr>	
			
									  {else}
			
									   <tr >
			
										<td align="left" style="padding-bottom:10px;padding-left:5px;" valign="middle">
			
										<div style="width:100%;display:none" id="trPlanCreatedBy" align="left">
			
										if outside who did it  ? 
			
										 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="{$PlanCreatedBy}"/>
			
										 </div>
			
										 </td>
			
										<td colspan="2"></td>
			
									  </tr>	
			
									  {/if}
			
								  </table>
			
			
								  </div>																	</td>
			
							  </tr>
			
							  {else}
			
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
			
										 <input type="text" name="PlanCreatedBy" id="PlanCreatedBy" maxlength="40" size="40" class="form" value="{$PlanCreatedBy}"/>
			
										 </div>
			
										 </td>
			
										<td colspan="2"></td>
			
									  </tr>	
			
								  </table>
			
								  </div>																	</td>
			
							  </tr>
			
							  {/if}
			
							 <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">Do you have an annual marketing / advertising budget ? 
			
								  <select name="HasAnnualBudget" class="form" onchange="toggleDiv(this.value,'divAnnualBudget')" style="width:80px">
			
								   <option value="">--Select--</option>
			
								   {html_options options=$arrayYesNo selected=$basicInfoDetail.HasAnnualBudget}
			
								  </select></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  {if $basicInfoDetail.HasAnnualBudget}
			
							  <tr>
			
								<td colspan="3" align="center">
			
								<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divAnnualBudget">
			
								 <table width="100%" border="0" bgcolor="#E5E5E5">
			
									   <tr>
			
										<td align="right" style="padding-bottom:10px" valign="middle" width="20%">What is that budget ?</td>
			
										<td width="81%" colspan="2">
			
										<input type="text" name="BudgetAmount" id="BudgetAmount" maxlength="30" size="40" class="form" value="{$basicInfoDetail.BudgetAmount}" onKeyUp="return valid_number(this)"/>																			</td>
			
									  </tr>	
			
								  </table>
			
								  </div>																	</td>
			
							  </tr>	
			
							  {else}
			
							   <tr>
			
								<td colspan="3" align="center">
			
								<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divAnnualBudget">
			
								 <table width="100%" border="0" bgcolor="#E5E5E5">
			
									   <tr>
			
										<td align="right" style="padding-bottom:10px" valign="middle" width="20%">What is that budget ?</td>
			
										<td width="81%" colspan="2">
			
										<input type="text" name="BudgetAmount" id="BudgetAmount" maxlength="30" size="40" class="form" value="{$BudgetAmount}" onKeyUp="return valid_number(this)"/>																			</td>
			
									  </tr>	
			
								  </table>
			
								  </div>																	</td>
			
							  </tr>	
			
							  {/if}															  
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">How many years has the business name been established ? 
			
								<input type="text" name="YearsEstablished" id="YearsEstablished" maxlength="4" size="20" class="form" value="{$basicInfoDetail.YearsEstablished}" onKeyUp="return valid_number(this)"/></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">How many years have you been at the current physical location ? 
			
								<input type="text" name="YearsInCurrentLocation" id="YearsInCurrentLocation" maxlength="4" size="20" class="form" value="{$basicInfoDetail.YearsInCurrentLocation}" onKeyUp="return valid_number(this)"/></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="top">What market segment do you service ?</td>
			
								<td colspan="2">
			
																								</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
			
								{html_checkboxes name="MarketSegment" values=$marketSegmentIndexArray output=$marketSegmentStrArray
			
			selected=$basicInfoDetail.MarketSegment separator="<br />" id="MarketSegment"}
			
								
			
									<input type="text" name="OtherMarkerSegment" id="OtherMarketSegment" class="form" maxlength="100" size="40" onchange="setChecked('MarketSegment','frmStepOne','4')" value="{$basicInfoDetail.OtherMarkerSegment}">	
			
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
			
								{html_checkboxes name="FuelSource" values=$fuellSourceIndexArray output=$fuellSourceStrArray selected=$basicInfoDetail.FuelSource separator="<br />" id="FuelSource"}
			
								
			
									<input type="text" name="OtherFuelSource" id="OtherFuelSource" class="form" maxlength="100" size="40" onchange="setChecked('FuelSource','frmStepOne','5')" value="{$basicInfoDetail.OtherFuelSource}">	
			
								</td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							  <tr>
			
								<td align="left" style="padding-bottom:10px" valign="middle">Do you have any fleet business ? 
			
								  <select name="HasFleetBusiness" class="form" onchange="toggleDiv(this.value,'divFleetBusiness')" style="width:80px">
			
									<option value="">--Select--</option>
			
									{html_options options=$arrayYesNo selected=$basicInfoDetail.HasFleetBusiness}
			
								  </select></td>
			
								<td colspan="2">&nbsp;</td>
			
							  </tr>
			
							 {if $basicInfoDetail.HasFleetBusiness}
			
							  <tr>
			
								<td colspan="3" align="center">
			
								<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divFleetBusiness">
			
								 <table width="100%" border="0" bgcolor="#E5E5E5">
			
									   <tr>
			
										<td align="right" style="padding-bottom:10px" valign="middle" width="43%">What percentage of your business is fleet related ?</td>
			
										<td width="57%" colspan="2">
			
										<input type="text" name="PercentageInFleet" id="PercentageInFleet" maxlength="5" size="40" class="form" value="{$basicInfoDetail.PercentageInFleet}" onKeyUp="return valid_number(this)"/><br />
			
			<span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%) </span>																			</td>
			
									  </tr>	
			
								  </table>
			
								  </div>																	</td>
			
							  </tr>	
			
							  {else}
			
							   <tr>
			
								<td colspan="3" align="center">
			
								<div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divFleetBusiness">
			
								 <table width="100%" border="0" bgcolor="#E5E5E5">
			
									   <tr>
			
										<td align="right" style="padding-bottom:10px" valign="middle" width="43%">What percentage of your business is fleet related ?</td>
			
										<td width="57%" colspan="2">
			
										<input type="text" name="PercentageInFleet" id="PercentageInFleet" maxlength="5" size="40" class="form" value="{$PercentageInFleet}" onKeyUp="return valid_number(this)"/><br />
			
			<span class="infoText">(Please enter exact percentage value, e.g. enter 30 in case the value is 30%) </span>																			</td>
			
									  </tr>	
			
								  </table>
			
								  </div>																	</td>
			
							  </tr>	
			
							  {/if}
			
							  <tr>
			
								<td align="center" colspan="3">
			
								<input type="hidden" name="hidInHousePlan" value="" >
			
								<input type="hidden" name="isNew" value="{$isNew}" >	
			
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
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
	var DayArray=Array('Sunday','Monday','TuesDay','WednesDay','ThursDay','FriDay','SaturDay');	

	function validateForm()
	{		
		if(trimSpace(document.frmStepOne.OwnerEmailAddress.value)!='' && !echeck(trimSpace(document.frmStepOne.OwnerEmailAddress.value)))
		{
			document.frmStepOne.OwnerEmailAddress.focus();
			return false;
		}
		if(checkOther('GarageMgtSystem[]','frmStepOne','8','GarageMgtSystemOther')==1)
		{
			return false;
		}
		else
		{
			if(document.frmStepOne.hidInHousePlan.value=='0' && trimSpace(document.frmStepOne.PlanCreatedBy.value)=='')
			{
				alert('Please tell us who made your advertisement plan');
				document.frmStepOne.PlanCreatedBy.focus();
				return false;
			}
			if(document.frmStepOne.HasAnnualBudget.value==1 && (trimSpace(document.frmStepOne.BudgetAmount.value)=='' || !checkNumber(document.frmStepOne.BudgetAmount.value)))
			{
				alert('Please enter your budget amount. It should have a numeric value.');
				document.frmStepOne.BudgetAmount.focus();
				return false;
			}
			if(checkOther('MarketSegment[]','frmStepOne','4','OtherMarketSegment')==1)
				return false;
			else 
			{	if(checkOther('FuelSource[]','frmStepOne','5','OtherFuelSource')==1)
					return false;
				else 
				{
					if(document.frmStepOne.HasFleetBusiness.value==1 && (trimSpace(document.frmStepOne.PercentageInFleet.value)=='' || isNaN(document.frmStepOne.PercentageInFleet.value)))
					{
						alert('What percentage of your business is fleet related ? It should have a numeric value.');
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
	}
	function setInHousePlanVal(val)
	{
		document.frmStepOne.hidInHousePlan.value=val;
	}
</script>
{/literal}