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
						<td width="14%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						<td width="14%"><table width="100%" cellspacing="0" cellpadding="0" border="0">
						  <tbody><tr>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
							<td><img width="11" height="11" border="0" alt="" src="images/checkout_bullet.gif"/></td>
							<td width="50%"><img width="100%" height="1" border="0" alt="" src="images/pixel_silver.gif"/></td>
						  </tr>
						</tbody></table></td>
						
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
						<td width="14%" align="center" class="checkoutBarTo">Step5</td>
						<td width="14%" align="center" class="checkoutBarTo"><strong>Step6</strong></td>
						<td width="14%" align="center" class="checkoutBarCurrent">Finished</td>
					  </tr>
					</tbody>
					</table>
			<form name="frmStepSix" id="frmStepSix" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm()">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Marketing / Advertising Elements</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5">
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
selected=$marketingElementsDetail.BusinessDocuments separator="<br />"}
						</div>	
					</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
						<em>Staff</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Staff" values=$staffIndexArray output=$staffStrArray
selected=$marketingElementsDetail.Staff separator="<br />"}
																							</div>																	</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Signage / Display</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Signage" values=$signageIndexArray output=$signageStrArray
selected=$marketingElementsDetail.Signage separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Multimedia</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Multimedia" values=$multimediaIndexArray output=$multimediaStrArray
selected=$marketingElementsDetail.Multimedia separator="<br />"}
																							</div>																	</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Interactive</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Interactive" values=$interactiveIndexArray output=$interactiveStrArray
selected=$marketingElementsDetail.Interactive separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Online </em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Online" values=$onlineIndexArray output=$onlineStrArray
selected=$marketingElementsDetail.Online separator="<br />"}
						
						<div style="width:100%; padding-left:10px; display:block" id="divSearchEngine" >
							{html_checkboxes name="SearchEngine" values=$searchEngineIndexArray output=$searchEngineStrArray
selected=$marketingElementsDetail.SearchEngine separator="<br />" id="FuelSource"}
							
							<input type="text" name="SearchEngineOther" class=" form" maxlength="100" onchange="setChecked('SearchEngine','frmStepSix','4')" value="{$marketingElementsDetail.SearchEngineOther}">	
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
							{html_checkboxes name="Worksheets" values=$worksheetsIndexArray output=$worksheetsStrArray selected=$marketingElementsDetail.Worksheets separator="<br />" id="Worksheets"}
							<input type="text" name="WorksheetsOther" class=" form" onchange="setChecked('Worksheets','frmStepSix','4')" value="{$marketingElementsDetail.WorksheetsOther}">	
						</div>
						<em>Brochures</em><br>
						<div style="width:100%; padding-left:10px">
							{html_checkboxes name="Brochures" values=$brochuresIndexArray output=$brochuresStrArray selected=$marketingElementsDetail.Brochures separator="<br />" id="Brochures"}
							
							<input type="text" name="BrochuresOther" class=" form" onchange="setChecked('Brochures','frmStepSix','3')" value="{$marketingElementsDetail.Brochures}">	
						</div>
						<em>Questionaire</em><br>
						<div style="width:100%; padding-left:10px">
							{html_checkboxes name="Questionaire" values=$questionaireIndexArray output=$questionaireStrArray selected=$marketingElementsDetail.Questionaire separator="<br />"}
						</div>																	</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Off-Site Advertising</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="OffSiteAdvertising" values=$offsiteAdvIndexArray output=$offsiteAdvStrArray selected=$marketingElementsDetail.OffSiteAdvertising separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																																			</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Published</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Published" values=$publishedIndexArray output=$publishedStrArray selected=$marketingElementsDetail.Published separator="<br />"}
						</div>																	</td>
					<td colspan="2">																																				</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Mailing</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="Mailing" values=$mailingIndexArray output=$mailingStrArray selected=$marketingElementsDetail.Mailing separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																																				</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>In Hand</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="InHand" values=$inHandIndexArray output=$inHandStrArray selected=$marketingElementsDetail.InHand separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																																	</td>
				  </tr>
				 <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>In/On Vehicle</em><br>
						<div style="width:100%; padding-left:10px">
						{html_checkboxes name="InVehicle" values=$in_onVehicleIndexArray output=$in_onVehicleStrArray selected=$marketingElementsDetail.InVehicle separator="<br />"}
						
						</div>																	</td>
					<td colspan="2">																																			</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
					<em>Fleet Development</em><br>
						<div style="width:100%; padding-left:10px">
						{if $marketingElementsDetail.FleetDevelopment}
							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" checked>
						{else}	
							<input type="checkbox" name="FleetDevelopment[]" value="1" class=" form" >
						{/if}
						Donut Delivery Boxes<br>
						<em>Fleet Packette</em><br>
						<div style="width:100%; padding-left:10px">
							{html_checkboxes name="FleetPackette" values=$fleetPacketteIndexArray output=$fleetPacketteStrArray selected=$marketingElementsDetail.FleetPackette separator="<br />"}
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
			if(checkOther('SearchEngine[]','frmStepSix','4','SearchEngineOther')==1)
			{
				return false;
			}
			if(checkOther('Worksheets[]','frmStepSix','4','WorksheetsOther')==1)
			{
				return false;
			}
			if(checkOther('Brochures[]','frmStepSix','3','BrochuresOther')==1)
			{
				return false;
			}
			if(checkOther('radOutSourced[]','frmStepSix','1','SendRemindersOutsourceWhom')==1)
			{
				return false;
			}
			if(checkOther('radOutsourcedService[]','frmStepSix','1','SendServiceOutsourceWhom')==1)
			{
				return false;
			}
			
			
			return true;;
		}
	</script>
{/literal}