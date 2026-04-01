{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmCompetitiveAdvantages" id="frmCompetitiveAdvantages" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step12.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Marketing / Advertising</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
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

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an advertising Calendar ?

<br />

					{html_options name='HaveAdvertisingCalender' options=$arrayYesNo selected=$marketingInfo.HaveAdvertisingCalender}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What coupons / specials are you currently running ?<br />



					<textarea name="CouponsRunning" rows="3" cols="50" class="form">{$marketingInfo.CouponsRunning}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				 <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What multimedia marketing efforts do you have?<br />

					{html_checkboxes name="MultimediaMarketing" options=$arrayMultimediaMarketing selected=$multimediaOptionsSelected separator="<br />"}

					<input type="text" name="MultimediaMarketingOptionsOther" class="form" id="MultimediaMarketingOptionsOther" maxlength="200" size="50" onchange="setChecked('MultimediaMarketing[]','frmMarketing','Other')" value="{$marketingInfo.MultimediaMarketingOptionsOther}">				
					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">What are the names of your top 3 competitors ? <span class="infoText">(Examples are either specific: Jacks repair, ABC Service or general: Dealerships, mobile repair cos, etc.</span>

<br />



					<textarea name="TopCompetitors" rows="3" cols="50" class="form">{$marketingInfo.TopCompetitors}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use an ad agency for marketing and advertising or do it yourself ?<br /><span class="infoText">(if so, please give me detail)</span><br />



					<textarea name="UseMarketingAgency" rows="3" cols="50" class="form">{$marketingInfo.UseMarketingAgency}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out email notifications / specials / advertising of any kind ?<br /><span class="infoText">(if so, please give me detail)</span><br />



					<textarea name="SendEmailNotification" rows="3" cols="50" class="form">{$marketingInfo.SendEmailNotification}</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use any of the following in your advertising / marketing ?<br /></td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">

					{html_checkboxes name="MarketingOptions" options=$marketingOptions selected=$marketingOptionsSelected separator="<br />"}

					<input type="text" name="MarketingOptionsOther" class="form" id="MarketingOptionsOther" maxlength="200" size="50" onchange="setChecked('MarketingOptions[]','frmMarketing','Other')" value="{$marketingInfo.MarketingOptionsOther}">																	</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out oil Change Reminders ?

<br />

					{html_options name='OilChangeReminder' options=$arrayYesNo selected=$marketingInfo.OilChangeReminder}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out recomended repair reminders ?

<br />

					{html_options name='RepairReminders' options=$arrayYesNo selected=$marketingInfo.RepairReminders}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a night own / early bird drop off available ?

<br />

					{html_options name='NightOwnBirdDropOff' options=$arrayYesNo selected=$marketingInfo.NightOwnBirdDropOff}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you use / have a list of customer testimonials ?<br /><span class="infoText">(if so, please send some

to be used - 3 sets would be fine)</span><br />



				   {html_options name='CustomerTestimonials' options=$arrayYesNo selected=$marketingInfo.CustomerTestimonials}

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you schedule next appointment dates when the customer is picking up their vehicle ?

<br />

					{html_options name='ScheduleAppointment' options=$arrayYesNo selected=$marketingInfo.ScheduleAppointment}

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

						{html_checkboxes name="BusinessDocuments" values=$businessDocumentsIndexArray output=$businessDocumentsStrArray

selected=$marketingOptionsSelected.BusinessDocuments separator="<br />"}

						</div>	

					</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

						<em>Staff</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Staff" values=$staffIndexArray output=$staffStrArray

selected=$marketingOptionsSelected.Staff separator="<br />"}

																							</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Signage / Display</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Signage" values=$signageIndexArray output=$signageStrArray

selected=$marketingOptionsSelected.Signage separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Multimedia</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Multimedia" values=$multimediaIndexArray output=$multimediaStrArray

selected=$marketingOptionsSelected.Multimedia separator="<br />"}

																							</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Interactive</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Interactive" values=$interactiveIndexArray output=$interactiveStrArray

selected=$marketingOptionsSelected.Interactive separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Online </em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Online" values=$onlineIndexArray output=$onlineStrArray

selected=$marketingOptionsSelected.Online separator="<br />"}

						

						<div style="width:100%; padding-left:10px; display:block" id="divSearchEngine" >

							{html_checkboxes name="SearchEngine" values=$searchEngineIndexArray output=$searchEngineStrArray

selected=$marketingOptionsSelected.SearchEngine separator="<br />" id="FuelSource"}

							

							<input type="text" name="SearchEngineOther" class=" form" maxlength="100" onchange="setChecked('SearchEngine','frmStepSix','4')" value="{$marketingInfo.SearchEngineOther}">	

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

							{html_checkboxes name="Worksheets" values=$worksheetsIndexArray output=$worksheetsStrArray selected=$marketingOptionsSelected.Worksheets separator="<br />" id="Worksheets"}

							<input type="text" name="WorksheetsOther" class=" form" onchange="setChecked('Worksheets','frmStepSix','4')" value="{$marketingInfo.WorksheetsOther}">	

						</div>

						<em>Brochures</em><br>

						<div style="width:100%; padding-left:10px">

							{html_checkboxes name="Brochures" values=$brochuresIndexArray output=$brochuresStrArray selected=$marketingOptionsSelected.Brochures separator="<br />" id="Brochures"}

							

							<input type="text" name="BrochuresOther" class=" form" onchange="setChecked('Brochures','frmStepSix','3')" value="{$marketingInfo.BrochuresOther}">	

						</div>

						<em>Questionaire</em><br>

						<div style="width:100%; padding-left:10px">

							{html_checkboxes name="Questionaire" values=$questionaireIndexArray output=$questionaireStrArray selected=$marketingOptionsSelected.Questionaire separator="<br />"}

						</div>																	</td>

					<td colspan="2">																	</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Off-Site Advertising</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="OffSiteAdvertising" values=$offsiteAdvIndexArray output=$offsiteAdvStrArray selected=$marketingOptionsSelected.OffSiteAdvertising separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																																			</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Published</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Published" values=$publishedIndexArray output=$publishedStrArray selected=$marketingOptionsSelected.Published separator="<br />"}

						</div>																	</td>

					<td colspan="2">																																				</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Mailing</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="Mailing" values=$mailingIndexArray output=$mailingStrArray selected=$marketingOptionsSelected.Mailing separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																																				</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>In Hand</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="InHand" values=$inHandIndexArray output=$inHandStrArray selected=$marketingOptionsSelected.InHand separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																																	</td>

				  </tr>

				 <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>In/On Vehicle</em><br>

						<div style="width:100%; padding-left:10px">

						{html_checkboxes name="InVehicle" values=$in_onVehicleIndexArray output=$in_onVehicleStrArray selected=$marketingOptionsSelected.InVehicle separator="<br />"}

						

						</div>																	</td>

					<td colspan="2">																																			</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">

					<em>Fleet Development</em><br>

						<div style="width:100%; padding-left:10px">

						{if $marketingOptionsSelected.FleetDevelopment}

							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" checked>

						{else}	

							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" >

						{/if}

						Donut Delivery Boxes<br>

						<em>Fleet Packette</em><br>

						<div style="width:100%; padding-left:10px">

							{html_checkboxes name="FleetPackette" values=$fleetPacketteIndexArray output=$fleetPacketteStrArray selected=$marketingOptionsSelected.FleetPackette separator="<br />"}

						</div>

						</div>																	</td>

					<td colspan="2">																																		</td>

				  </tr>

				  

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
		if(trimSpace(document.frmMarketing.TopCompetitors.value)=='')
		{
			alert("Tell me your top 3 competitors?");
			document.frmMarketing.TopCompetitors.focus();
			return false;
		}
		if(checkOther('MarketingOptions[]','frmMarketing','Other','MarketingOptionsOther')==1)
		{
			return false;
		}
		if(checkOther('SearchEngine[]','frmMarketing','4','SearchEngineOther')==1)
		{
			return false;
		}
		if(checkOther('Worksheets[]','frmMarketing','4','WorksheetsOther')==1)
		{
			return false;
		}
		if(checkOther('Brochures[]','frmMarketing','3','BrochuresOther')==1)
		{
			return false;
		}
		if(checkOther('radOutSourced[]','frmMarketing','1','SendRemindersOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('radOutsourcedService[]','frmMarketing','1','SendServiceOutsourceWhom')==1)
		{
			return false;
		}
		return true;
	}
	</script>
{/literal}