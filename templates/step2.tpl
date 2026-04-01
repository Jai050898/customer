{include file=header.tpl}
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
						<td width="14%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td><img width="11" height="11" border="0" alt="" src="images/checkout_bullet.gif"/></td>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
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
						<td width="14%" align="center" class="checkoutBarCurrent">Step1</td>
						<td width="14%" align="center" class="checkoutBarCurrent"><strong>Step2</strong></td>
						<td width="14%" align="center" class="checkoutBarCurrent">Step3</td>
						<td width="14%" align="center" class="checkoutBarTo">Step4</td>
						<td width="14%" align="center" class="checkoutBarTo">Step5</td>
						<td width="14%" align="center" class="checkoutBarTo">Step6</td>
						<td width="14%" align="center" class="checkoutBarCurrent">Finished</td>
					  </tr>
					</tbody>
					</table>
			<form name="frmStepTwo" id="frmStepTwo" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="step2.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Business Profile</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
				  </tr>
				  {if $Errormssage}
				  <tr>
					<td align="center" colspan="3"><span class="error">{$Errormssage}</span>
					</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
				  </tr>
				  {/if}
				  <tr>
					<td width="79%" align="left" valign="middle" style="padding-bottom:5px">Does your company have a logo ? 
					  <select name="HasLogo" class="form" onchange="toggleDiv(this.value,'divHasLogo')" style="width:80px">
						 <option value="">--Select--</option>
						{html_options options=$arrayYesNo selected=$businessProfileDetail.HasLogo}
					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				 {if $businessProfileDetail.HasLogo}
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divHasLogo">
					 <table width="100%" border="0" bgcolor="#E5E5E5" >
						   <tr>
							<td width="17%" align="right" valign="middle" style="padding-bottom:10px">Is it trademarked ?</td>
							<td width="83%" colspan="2" align="left">
							<select name="IsTradeMarked" class="form" style="width:50px">
								 <option value="">--Select--</option>
								{html_options options=$arrayYesNo selected=$businessProfileDetail.IsTradeMarked}
							</select>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  {else}
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
				  {/if}
				  <tr>
					<td width="79%" align="left" valign="middle" style="padding-bottom:5px">Does your company have a catch phrase / motto / 
or recognized statement ? 
					  <select name="HasCatchPhrase" class="form" onchange="toggleDiv(this.value,'divCatchPhrase')" style="width:80px">
						 <option value="">--Select--</option>
						{html_options options=$arrayYesNo selected=$businessProfileDetail.HasCatchPhrase}
					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  {if $businessProfileDetail.HasCatchPhrase}
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCatchPhrase">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">What is it ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="CatchPhrase" id="CatchPhrase" maxlength="100" size="40" class="form" value="{$businessProfileDetail.CatchPhrase}"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  {else}
				  <tr align="left">
					<td colspan="3" align="center">
					  <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divCatchPhrase">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">What is it ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="CatchPhrase" id="CatchPhrase" maxlength="100" size="40" class="form" value="{$CatchPhrase}"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  {/if}
				  <tr>
					<td align="left" style="padding-bottom:5px" valign="middle">Does your company have a standard set of colors ? 
					  <select name="HasStandardColors" class="form" onchange="toggleDiv(this.value,'divStandardColors')"style="width:80px">
						 <option value="">--Select--</option>
						{html_options options=$arrayYesNo selected=$businessProfileDetail.HasStandardColors}
					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				 {if $businessProfileDetail.HasStandardColors}
				 
				  <tr align="left">
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divStandardColors">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="21%" align="right" valign="top" style="padding-bottom:10px">What are those colors ?</td>
							<td width="79%" colspan="2" align="left">
							<select name="StandardColors[]" id="StandardColors" class="form" style="width:100px" size="5" multiple="multiple">
							{html_options values=$colorArray output=$colorArray selected=$businessProfileDetail.StandardColors}
							  <br />
<span class="infoText">(To select multiple value, press cntrl and then select)</span>
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				 {else}
				  <tr align="left">
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divStandardColors">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="21%" align="right" valign="top" style="padding-bottom:10px">What are those colors ?</td>
							<td width="79%" colspan="2" align="left">
							<select name="StandardColors[]" id="StandardColors" class="form" style="width:100px" size="5" multiple="multiple">
							{html_options values=$colorArray output=$colorArray }
							  <br />
<span class="infoText">(To select multiple value, press cntrl and then select)</span>
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				 {/if} 

				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Does your company have a store jingle ? 
(commonly used in radio ads / tv)&nbsp; <select name="HasJingle" class="form" style="width:80px">
<option value="">--Select--</option>
{html_options options=$arrayYesNo selected=$businessProfileDetail.HasJingle}</select></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <tr>
					<td align="left" style="padding-bottom:5px" valign="middle">Do you Collect Email addresses from your customers ? 
					  <select name="CollectEmailAddress" class="form" onchange="toggleDiv(this.value,'divCollectEmailAddress')"style="width:80px">
						 <option value="">--Select--</option>
						{html_options options=$arrayYesNo selected=$businessProfileDetail.CollectEmailAddress}
					  </select></td>
				   <td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  {if $businessProfileDetail.CollectEmailAddress}
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCollectEmailAddress">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="49%" align="right" valign="middle" style="padding-bottom:10px">What percentage of the time do you get an address ?</td>
							<td width="51%" colspan="2" align="left">
							<input type="text" name="PercentageTime" id="PercentageTime" maxlength="5" size="40" class="form" value="{$businessProfileDetail.PercentageTime}" onKeyUp="return valid_number(this)"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  {else}
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:none" id="divCollectEmailAddress">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="49%" align="right" valign="middle" style="padding-bottom:10px">What percentage of the time do you get an address ?</td>
							<td width="51%" colspan="2" align="left">
							<input type="text" name="PercentageTime" id="PercentageTime" maxlength="5" size="40" class="form" value="{$PercentageTime}" onKeyUp="return valid_number(this)"/>
							</td>
						  </tr>	
					  </table>
					  </div>
					
					</td>
				  </tr>
				  {/if}
				 
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
											{html_checkboxes name="OilCompanies" values=$oilCompaniesIndexArray output=$oilCompaniesStrArray
selected=$affiliationDetail.OilCompanies separator="<br />" id="OilCompanies"}
											
											<input type="text" name="OilCompaniesOther" class="form" maxlength="100" size="40" onchange="setChecked('OilCompanies','frmStepTwo','5')" value="{$affiliationDetail.OilCompaniesOther}">
										   </td>
									  </tr>
										<tr>
											<td align="left"><em>Tire Company</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											{html_checkboxes name="TireCompanies" values=$tyreCompaniesIndexArray output=$tyreCompaniesStrArray
selected=$affiliationDetail.TireCompanies separator="<br />" id="TireCompanies"}
											
											<input type="text" name="TireCompaniesOther" class="form" maxlength="100" size="40" onchange="setChecked('TireCompanies','frmStepTwo','3')" value="{$affiliationDetail.TireCompaniesOther}">
										   </td>
									  </tr>
										<tr>
											<td align="left"><em>Franchise</em>																							</td>
										</tr>	
										  
										 <tr>
											<td align="left" style="padding-left:0px">
											{html_checkboxes name="Franchise" values=$franchiseIndexArray output=$franchiseStrArray
selected=$affiliationDetail.Franchise separator="<br />" id="Franchise"}																																											<input type="text" name="FranchiseOther" class="form" maxlength="100" size="40" onchange="setChecked('Franchise','frmStepTwo','2')"  value="{$affiliationDetail.FranchiseOther}">
										   </td>
										</tr>	
<tr>
											<td align="left"><em>Banner Program</em>																							</td>
									  </tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											{html_checkboxes name="BannerProgram" values=$bannerProgramsIndexArray output=$bannerProgramsStrArray
selected=$affiliationDetail.BannerProgram separator="<br />" id="BannerProgram"}
											<input type="text" name="BannerProgramOther" class=" form" maxlength="100" size="40" onchange="setChecked('BannerProgram','frmStepTwo','6')" value="{$affiliationDetail.BannerProgramOther}">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>Other</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											{html_checkboxes name="AdditionalAffilitiation" values=$othersIndexArray output=$othersStrArray
selected=$affiliationDetail.Additional separator="<br />" id="AdditionalAffilitiation"}
											<input type="text" name="AdditionalAffilitiationOther" class=" form" maxlength="100" size="40" onchange="setChecked('AdditionalAffilitiation','frmStepTwo','3')" value="{$affiliationDetail.AdditionalOther}">
											
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
											{html_checkboxes name="Industry" values=$industryIndexArray output=$industryStrArray
selected=$associationDetail.Industry separator="<br />" id="Industry"}
											<input type="text" name="IndustryOther" class="form" maxlength="100" size="40" onchange="setChecked('Industry','frmStepTwo','7')" value="{$associationDetail.IndustryOther}">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>General Business </em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											{html_checkboxes name="GeneralBusiness" values=$generalBusinessIndexArray output=$generalBusinessStrArray
selected=$associationDetail.GeneralBusiness separator="<br />" id="GeneralBusiness"}
											<input type="text" name="GeneralBusinessOther" class="form" maxlength="100" size="40"  onchange="setChecked('GeneralBusiness','frmStepTwo','4')" value="{$associationDetail.GeneralBusinessOther}">
										   </td>
									  </tr>
										  <tr>
											<td align="left"><em>Other</em>																							</td>
										</tr>	
										 <tr>
											<td align="left" style="padding-left:0px">
											{if $associationDetail.AdditionalOther}
											<input type="checkbox" name="AdditionalAssociation[]" value="1" id="AdditionalAssociation" class="form" checked>
											{else}
											<input type="checkbox" name="AdditionalAssociation[]" value="1" id="AdditionalAssociation" class="form">
											{/if}
											Other 
											<input type="text" name="AdditionalAssociationOther" class=" form" maxlength="100" size="40" onchange="setChecked('AdditionalAssociation','frmStepTwo','1')" value="{$associationDetail.AdditionalOther}">
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
						{html_options options=$arrayYesNo selected=$businessProfileDetail.HasCoOpFunding}
					  </select></td>
					<td width="21%" colspan="2">&nbsp;</td>
				  </tr>
				  {if $businessProfileDetail.HasCoOpFunding}
				  <tr>
					<td colspan="3" align="center">
					 <div style="border:#B5B5B5 1px solid; width:95%;margin:2px 0 7px 0; display:block" id="divCoOpFunding">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="11%" align="right" valign="middle" style="padding-bottom:10px">How much ?</td>
							<td width="89%" colspan="2" align="left">
							<input type="text" name="FundingAmount" class="form" maxlength="30" size="40" onKeyUp="return valid_number(this)" value="{$businessProfileDetail.FundingAmount}">
							</td>
						  </tr>	
					  </table>
					</div>
					</td>
				  </tr>
				  {else}
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
				  {/if}
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="{$isNew}" >
					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;
					</td>
				  </tr>
			  </table>
			</div>
			</form>
			
		<div class="clear"></div>
		
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>	
{literal}
	<script language="javascript">
		function validateForm()
		{
			if(document.frmStepTwo.HasCatchPhrase.value==1 && trimSpace(document.frmStepTwo.CatchPhrase.value)=='')
			{
				alert('Please enter your catch phrase.');
				document.frmStepTwo.CatchPhrase.focus();
				return false;
			}
			if(document.frmStepTwo.CollectEmailAddress.value==1 && (trimSpace(document.frmStepTwo.PercentageTime.value)=='' || isNaN(document.frmStepTwo.PercentageTime.value)))
			{
				alert('Please enter percentage of the time you get an email address. It should have a numeric value');
				document.frmStepTwo.PercentageTime.focus();
				return false;
			}
			if(document.frmStepTwo.HasStandardColors.value==1 && trimSpace(document.frmStepTwo.StandardColors.value)=='')
			{
				alert('Please select the standard colors');
				document.frmStepTwo.StandardColors.focus();
				return false;
			}
			if(checkOther('OilCompanies[]','frmStepTwo','5','OilCompaniesOther')==1)
			{
				return false;
			}
			if(checkOther('TireCompanies[]','frmStepTwo','3','TireCompaniesOther')==1)
			{
				return false;
			}
			if(checkOther('Franchise[]','frmStepTwo','2','FranchiseOther')==1)
			{
				return false;
			}
			if(checkOther('BannerProgram[]','frmStepTwo','6','BannerProgramOther')==1)
			{
				return false;
			}
			if(checkOther('AdditionalAffilitiation[]','frmStepTwo','3','AdditionalAffilitiationOther')==1)
			{
				return false;
			}		
			if(checkOther('Industry[]','frmStepTwo','7','IndustryOther')==1)
			{
				return false;
			}
			if(checkOther('GeneralBusiness[]','frmStepTwo','4','GeneralBusinessOther')==1)
			{
				return false;
			}
			if(checkOther('AdditionalAssociation[]','frmStepTwo','1','AdditionalAssociationOther')==1)
			{
				return false;
			}
			
			if(document.frmStepTwo.HasCoOpFunding.value==1 && (trimSpace(document.frmStepTwo.FundingAmount.value)=='' || isNaN(document.frmStepTwo.FundingAmount.value)))
			{
				alert('Please enter the amount of Co-Op funding ? It should have a numeric value.');
				document.frmStepTwo.FundingAmount.focus();
				return false;
			}
		}
	</script>
{/literal}