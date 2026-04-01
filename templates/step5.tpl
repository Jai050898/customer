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
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
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
						<td width="14%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td width="50%"><img width="1" height="5" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
					  </tr>

					  <tr>
						
						<td width="14%" align="center" class="checkoutBarCurrent">Step1</td>
						<td width="14%" align="center" class="checkoutBarCurrent">Step2</td>
						<td width="14%" align="center" class="checkoutBarCurrent">Step3</td>
						<td width="14%" align="center" class="checkoutBarTo">Step4</td>
						<td width="14%" align="center" class="checkoutBarTo"><strong>Step5</strong></td>
						<td width="14%" align="center" class="checkoutBarTo">Step6</td>
						<td width="14%" align="center" class="checkoutBarCurrent">Finished</td>
					  </tr>
					</tbody>
					</table>
			<form name="frmStepFive" id="frmStepFive" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Service Practices</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
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
					<td align="left" style="padding-bottom:5px;" valign="top" >Do you follow up on customer Feedback?</td>
					<td colspan="2">																																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Survey Documents</em><br>
						<div style="width:100%; padding-left:10px">
						{html_radios name="SurveyDocOutsourced" selected=$servicePracticesDetail.SurveyDocOutsourced options=$inOutHouseArray separator="<br />" onclick="toggleDiv(this.value,'divSurveyDocuments')" id="SurveyDocOutsourced"}
																							</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 {if $servicePracticesDetail.SurveyDocOutsourced}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99%; display:block" id="divSurveyDocuments">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SurveyDocOutsourceWhom" id="SurveyDocOutsourceWhom" maxlength="100" size="40" class="form" value="{$servicePracticesDetail.SurveyDocOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  {else}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99%; display:none" id="divSurveyDocuments">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SurveyDocOutsourceWhom" id="SurveyDocOutsourceWhom" maxlength="100" size="40" class="form" value="{$SurveyDocOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  {/if}
				<tr>
				 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Phone Call Follow Up</em><br>
						{html_radios name="PhoneFollowUpOutsourced" selected=$servicePracticesDetail.PhoneFollowUpOutsourced options=$inOutHouseArray separator="<br />" onclick="toggleDiv(this.value,'divPhoneCall')" id="PhoneFollowUpOutsourced"}
																						</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 {if $servicePracticesDetail.PhoneFollowUpOutsourced}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divPhoneCall">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="PhoneFollowUpOutsourceWhom" id="PhoneFollowUpOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$servicePracticesDetail.PhoneFollowUpOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  {else}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:none" id="divPhoneCall">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="PhoneFollowUpOutsourceWhom" id="PhoneFollowUpOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$BOwnerEmail}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  {/if}														  
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<em>Online</em><br>
						<div style="width:100%; padding-left:10px" id="divOnline">
						{if !$servicePracticesDetail.OnlineOutSoure}
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')" checked>
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							{html_checkboxes name="OnlineInhouseType" options=$OnlineInhouseTypeArr
selected=$servicePracticesDetail.OnlineInhouseType separator="<br />"}
						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')">
						Outsourced	
						{else}
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')">
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							{html_checkboxes name="OnlineInhouseType" options=$OnlineInhouseType
selected=$servicePracticesDetail.OnlineInhouseType separator="<br />"}
						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')" checked>
						Outsourced	
						{/if}																	</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 
				  {if $servicePracticesDetail.OnlineOutSoure}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divOnlineOutSource">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="OnlineOutsourceWhom" id="OnlineOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$servicePracticesDetail.OnlineOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {else}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:none" id="divOnlineOutSource">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="OnlineOutsourceWhom" id="OnlineOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$BOwnerEmail}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {/if}	
				   <tr>
					<td width="75%" align="left" valign="top" style="padding-bottom:10px">Do you send out Service Reminders?</td>
					<td width="25%" colspan="2">																	 </td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
					{html_radios name="SendReminders" options=$arrayYesNo
selected=$servicePracticesDetail.SendReminders separator="&nbsp;" onclick="toggleDiv(this.value,'divSendReminders');  toggleDiv(this.value-1,'divSendRemindersOutsource');"}
					
					{if $servicePracticesDetail.SendReminders}
					<div style="width:99% ;display:block" id="divSendReminders">
						{html_radios name="radElectronic" options=$SendRemindersArr
selected=$servicePracticesDetail.radElectronic separator="&nbsp;"  onclick="toggleDiv(this.value+1,'divSendReminders2');"}
						
						<div style="width:99% ;display:block" id="divSendReminders2">	
						{html_radios name="radOutsourced" options=$inOutHouseArray
selected=$servicePracticesDetail.radOutsourced separator="&nbsp;" onclick="toggleDiv(this.value,'divSendRemindersOutsource');" id="radOutsourced"}
						</div>	
					</div>
					{else}
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
					{/if}																		</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
					{if $servicePracticesDetail.radOutsourced}
					<tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendRemindersOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendRemindersOutsourceWhom" id="SendRemindersOutsourceWhom" maxlength="100" size="40" class="form" value="{$servicePracticesDetail.SendRemindersOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {else}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:none; width:99%" id="divSendRemindersOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendRemindersOutsourceWhom" id="SendRemindersOutsourceWhom" maxlength="100" size="40" class="form" value="{$SendRemindersOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {/if}
				   <tr>
					<td width="75%" align="left" valign="top" style="padding-bottom:10px">Do you send our Recommended Services?</td>
					<td width="25%" colspan="2">																	 </td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
					{html_radios name="SendService" options=$arrayYesNo
selected=$servicePracticesDetail.SendService separator="&nbsp;" onclick="toggleDiv(this.value,'divSendService'); toggleDiv(this.value-1,'divSendServiceOutsource');"}
					
					{if $servicePracticesDetail.SendService}
					<div style="width:99% ;display:block" id="divSendService">
						{html_radios name="radElectronicService" options=$SendRemindersArr
selected=$servicePracticesDetail.radElectronicService separator="&nbsp;" onclick="toggleDiv(this.value+1,'divSendService2');toggleDiv(this.value-1,'divSendServiceOutsource');"}
						
						
						<div style="width:99% ;display:block" id="divSendService2">
						{html_radios name="radOutsourcedService" options=$inOutHouseArray
selected=$servicePracticesDetail.radOutsourcedService separator="&nbsp;" onclick="toggleDiv(this.value,'divSendServiceOutsource');" id="radOutsourcedService"}
						
						</div>	
					</div>
					{else}
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
					{/if}																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  {if $servicePracticesDetail.radOutsourcedService} 
				 <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendServiceOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendServiceOutsourceWhom" id="SendServiceOutsource" maxlength="100" size="40" class="form" value="{$servicePracticesDetail.SendServiceOutsourceWhom}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {else}
				   <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:none; width:99%" id="divSendServiceOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendServiceOutsourceWhom" id="SendServiceOutsource" maxlength="100" size="40" class="form" value="{$BOwnerEmail}"/>																			</td>
						  </tr>	
					  </table>
					  </div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>	
				  {/if}													  
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="{$isNew}" >
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
			if(checkOther('SurveyDocOutsourced','frmStepFive','1','SurveyDocOutsourceWhom')==1)
			{
				return false;
			}
			if(checkOther('PhoneFollowUpOutsourced','frmStepFive','1','PhoneFollowUpOutsourceWhom')==1)
			{
				return false;
			}
			if(checkOther('OnlineOutSoure','frmStepFive','1','OnlineOutsourceWhom')==1)
			{
				return false;
			}
			if(checkOther('radOutsourced','frmStepFive','1','SendRemindersOutsourceWhom')==1)
			{
				return false;
			}
			if(checkOther('radOutsourcedService','frmStepFive','1','SendServiceOutsourceWhom')==1)
			{
				return false;
			}
			
			
			return true;
		}
	</script>
{/literal}