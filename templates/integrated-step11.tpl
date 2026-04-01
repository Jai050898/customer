{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmServices" id="frmServices" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step11.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Services</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5">
				  <tr>
					<td align="center" colspan="3">&nbsp;</td>
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
					<td align="left" style="padding-bottom:10px" valign="middle">What is your menu of services ?(General and normal of most shops, or specialty, Diagnosis, eletrical, etc.)<br />

					<textarea name="MenuServices" rows="3" cols="50" class="form">{$servicesInfo.MenuServices}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you specialize in a particular make or style (asian, domestic, foreign) ?<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="SpecializeStyle" rows="3" cols="50" class="form">{$servicesInfo.SpecializeStyle}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any specialty services ? (hybrid repair, other<br /><span class="infoText">(If so, please give details)</span>)<br />

					<textarea name="SpecialtyServices" rows="3" cols="50" class="form">{$servicesInfo.SpecialtyServices}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are you known in your community for anything special? (RV repair, brakes,honest repair, hybrid servicing, other such information)<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="KnownForSpecial" rows="3" cols="50" class="form">{$servicesInfo.KnownForSpecial}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer Fleet Services ?</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					{html_checkboxes name="FleetServices" options=$fleetServices selected=$fleetSelected separator="<br />"}
					<input type="text" name="FleetServicesOther" class="form" id="FleetServicesOther" maxlength="200" size="50" onchange="setChecked('FleetServices[]','frmServices','Other')" value="{$servicesInfo.FleetServicesOther}">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any service Wraps ?
<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="ServiceWraps" rows="3" cols="50" class="form">{$servicesInfo.ServiceWraps}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any special service packages ?<br /></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					{html_checkboxes name="SpecialServicePackage" options=$specialPackages selected=$packageSelected separator="<br />"}
					<input type="text" name="SpecialServicePackageOther" class="form" id="SpecialServicePackageOther" maxlength="200" size="50" onchange="setChecked('SpecialServicePackage[]','frmServices','Other')" value="{$servicesInfo.SpecialServicePackageOther}">																	</td>
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
						{html_radios name="SurveyDocOutsourced" selected=$servicesInfo.SurveyDocOutsourced options=$inOutHouseArray separator="<br />" onclick="toggleDiv(this.value,'divSurveyDocuments')" id="SurveyDocOutsourced"}
																							</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 {if $servicesInfo.SurveyDocOutsourced}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99%; display:block" id="divSurveyDocuments">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SurveyDocOutsourceWhom" id="SurveyDocOutsourceWhom" maxlength="100" size="40" class="form" value="{$servicesInfo.SurveyDocOutsourceWhom}"/>																			</td>
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
						{html_radios name="PhoneFollowUpOutsourced" selected=$servicesInfo.PhoneFollowUpOutsourced options=$inOutHouseArray separator="<br />" onclick="toggleDiv(this.value,'divPhoneCall')" id="PhoneFollowUpOutsourced"}
																						</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 {if $servicesInfo.PhoneFollowUpOutsourced}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divPhoneCall">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="PhoneFollowUpOutsourceWhom" id="PhoneFollowUpOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$servicesInfo.PhoneFollowUpOutsourceWhom}"/>																			</td>
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
						{if !$servicesInfo.OnlineOutSoure}
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')" checked>
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							{html_checkboxes name="OnlineInhouseType" options=$OnlineInhouseTypeArr
selected=$servicesInfo.OnlineInhouseType separator="<br />"}
						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')">
						Outsourced	
						{else}
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="0" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value+1,'divOnlineInhouse')">
						In House<br />
						<div style="width:100%; padding-left:10px ;display:block" id="divOnlineInhouse">
							{html_checkboxes name="OnlineInhouseType" options=$OnlineInhouseType
selected=$servicesInfo.OnlineInhouseType separator="<br />"}
						</div>
						<input type="radio" name="OnlineOutSoure" id="OnlineOutSoure" value="1" class="form" onclick="toggleDiv(this.value,'divOnlineOutSource'); toggleDiv(this.value-1,'divOnlineInhouse')" checked>
						Outsourced	
						{/if}																	</div>																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 
				  {if $servicesInfo.OnlineOutSoure}
				  <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid; width:99% ;display:block" id="divOnlineOutSource">
					 <table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="OnlineOutsourceWhom" id="OnlineOutsourceWhom" maxlength="100" size="40" class="fValidate['email'] form" value="{$servicesInfo.OnlineOutsourceWhom}"/>																			</td>
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
selected=$servicesInfo.SendReminders separator="&nbsp;" onclick="toggleDiv(this.value,'divSendReminders');  toggleDiv(this.value-1,'divSendRemindersOutsource');"}
					
					{if $servicesInfo.SendReminders}
					<div style="width:99% ;display:block" id="divSendReminders">
						{html_radios name="radElectronic" options=$SendRemindersArr
selected=$servicesInfo.radElectronic separator="&nbsp;"  onclick="toggleDiv(this.value+1,'divSendReminders2');"}
						
						{if $servicesInfo.radElectronic}
						<div style="width:99% ;display:block" id="divSendReminders2">	
						{html_radios name="radOutsourced" options=$inOutHouseArray
selected=$servicesInfo.radOutsourced separator="&nbsp;" onclick="toggleDiv(this.value,'divSendRemindersOutsource');" id="radOutsourced"}
						</div>
						{else}
						<div style="width:99% ;display:block" id="divSendReminders2">	
						{html_radios name="radOutsourced" options=$inOutHouseArray
selected=$servicesInfo.radOutsourced separator="&nbsp;" onclick="toggleDiv(this.value,'divSendRemindersOutsource');" id="radOutsourced"}
						</div>
						{/if}	
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
					{if $servicesInfo.radOutsourced}
					<tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendRemindersOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendRemindersOutsourceWhom" id="SendRemindersOutsourceWhom" maxlength="100" size="40" class="form" value="{$servicesInfo.SendRemindersOutsourceWhom}"/>																			</td>
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
selected=$servicesInfo.SendService separator="&nbsp;" onclick="toggleDiv(this.value,'divSendService'); toggleDiv(this.value-1,'divSendServiceOutsource');"}
					
					{if $servicesInfo.SendService}
					<div style="width:99% ;display:block" id="divSendService">
						{html_radios name="radElectronicService" options=$SendRemindersArr
selected=$servicesInfo.radElectronicService separator="&nbsp;" onclick="toggleDiv(this.value+1,'divSendService2');toggleDiv(this.value-1,'divSendServiceOutsource');"}
						
						
						{if $servicesInfo.radElectronicService}
						<div style="width:99% ;display:block" id="divSendService2">
						{html_radios name="radOutsourcedService" options=$inOutHouseArray
selected=$servicesInfo.radOutsourcedService separator="&nbsp;" onclick="toggleDiv(this.value,'divSendServiceOutsource');" id="radOutsourcedService"}
						</div>
						{else}
						<div style="width:99% ;display:block" id="divSendService2">
						{html_radios name="radOutsourcedService" options=$inOutHouseArray
selected=$servicesInfo.radOutsourcedService separator="&nbsp;" onclick="toggleDiv(this.value,'divSendServiceOutsource');" id="radOutsourcedService"}
						</div>
						
						{/if}	
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
				  {if $servicesInfo.radOutsourcedService} 
				 <tr>
					 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
						<div style="border:#B5B5B5 1px solid ;display:block; width:99%" id="divSendServiceOutsource">
					<table width="100%" border="0" bgcolor="#E5E5E5">
						   <tr>
							<td width="30%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
							<td width="70%" colspan="2">
							<input type="text" name="SendServiceOutsourceWhom" id="SendServiceOutsource" maxlength="100" size="40" class="form" value="{$servicesInfo.SendServiceOutsourceWhom}"/>																			</td>
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
		if(trimSpace(document.frmServices.MenuServices.value)=='')
		{
			alert("Tell me about the your menu services?");
			document.frmServices.MenuServices.focus();
			return false;
		}
		if(checkOther('FleetServices[]','frmServices','Other','FleetServicesOther')==1)
		{
			return false;
		}
		if(checkOther('SpecialServicePackage[]','frmServices','Other','SpecialServicePackageOther')==1)
		{
			return false;
		}
		if(checkOther('SurveyDocOutsourced','frmServices','1','SurveyDocOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('PhoneFollowUpOutsourced','frmServices','1','PhoneFollowUpOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('OnlineOutSoure','frmServices','1','OnlineOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('radOutsourced','frmServices','1','SendRemindersOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('radOutsourcedService','frmServices','1','SendServiceOutsourceWhom')==1)
		{
			return false;
		}
		return true;
		
	}
	</script>
{/literal}