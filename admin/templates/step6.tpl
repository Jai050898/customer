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