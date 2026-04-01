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
							<li><a href="{$siteurl}/admin/integrated-survey.php?user_id={$smarty.request.id}">Integrated survey</a></li>
							<li>About The Company</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">About The Company</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmStepOne" id="frmStepOne" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step1.php?id={$smarty.request.id}">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
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
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What is your main phone number ? 
					<input type="text" name="MainPhone" id="MainPhone" maxlength="15" size="20" class="form" value="{$basicInfoDetail.MainPhone}"/></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you have a toll free number ? 
					<input type="text" name="TollFreePhone" id="TollFreePhone" maxlength="15" size="20" class="form" value="{$basicInfoDetail.TollFreePhone}"/> <span class="infoText">(If yes, please enter the number)</span></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What is your fax number ? 
					<input type="text" name="FaxLineNumber" id="FaxLineNumber" maxlength="15" size="20" class="form" value="{$basicInfoDetail.FaxLineNumber}"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What phone system do you use ? 
					<input type="text" name="PhoneSystem" id="PhoneSystem" maxlength="150" size="40" class="form" value="{$basicInfoDetail.PhoneSystem}"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you have an on-hold message that is changed regularly ? 
					<input type="text" name="OnHoldMessage" id="OnHoldMessage" maxlength="200" size="40" class="form" value="{$basicInfoDetail.OnHoldMessage}"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Business Owner Email Address : 
					<input type="text" name="OwnerEmailAddress" id="OwnerEmailAddress" maxlength="80" size="40" class="form" value="{$basicInfoDetail.OwnerEmailAddress}"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <tr>
					<td colspan="3" align="left" style="padding-bottom:10px" valign="middle">Is there a specific company email address you would like customers to respond to as a general / info address ?

					<input type="text" name="GeneralEmailAddress" id="GeneralEmailAddress" maxlength="80" size="40" class="form" value="{$basicInfoDetail.GeneralEmailAddress}"/></td>
					
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
					<td align="left" style="padding-bottom:10px" valign="middle">What are the directions to reach your company (from all direction) ?<br />

					<textarea name="CompanyDirection" rows="3" cols="50" class="form">{$basicInfoDetail.CompanyDirection}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are there any special directions or land marks that should be noted on our directions ?<br />

					<textarea name="DirectionLandMark" rows="3" cols="50" class="form">{$basicInfoDetail.DirectionLandMark}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">County of Operation ?<br />
				   <input type="text" name="CountyOfOpeation" class="form"  maxlength="200" size="50" value="{$basicInfoDetail.CountyOfOpeation}">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
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
		if(trimSpace(document.frmStepOne.GeneralEmailAddress.value)!='' && !echeck(trimSpace(document.frmStepOne.GeneralEmailAddress.value)))
		{
			document.frmStepOne.GeneralEmailAddress.focus();
			return false;
		}
		if(checkOther('GarageMgtSystem[]','frmStepOne','8','GarageMgtSystemOther')==1)
		{
			return false;
		}
	}
</script>
{/literal}