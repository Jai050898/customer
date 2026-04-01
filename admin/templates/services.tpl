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
							<li><a href="{$siteurl}/admin/website-survey.php?user_id={$smarty.request.id}">Website survey</a></li>
							<li>Services</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Services</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmServices" id="frmServices" method="post" class="fValidator-form" onsubmit="return validateForm();" action="services.php?id={$smarty.request.id}">
							<table width="100%" border="0" class="left_content" style="color:#2f3337;">
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>
{literal}
<script language="javascript" type="text/javascript">
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

		return true;
		
	}
</script>
{/literal}