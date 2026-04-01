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
							<li>Branding</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Branding</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmBranding" id="frmBranding" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step5.php?id={$smarty.request.id}">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
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
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a mission statement ? <span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="MissionStatement" rows="3" cols="50" class="form">{$brandingInfo.MissionStatement}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a motto, slogan, or commonly recognized statement ? <span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="Slogan" rows="3" cols="50" class="form">{$brandingInfo.Slogan}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What parts or banner programs are you affiliated with ? (ACDelco, NAPA, Carquest, other)<br />

					<textarea name="BannerAffiliated" rows="3" cols="50" class="form">{$brandingInfo.BannerAffiliated}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an oil company affiliation ? (Texaco, Shell, other)<br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="OilCompanyAffiliation" rows="3" cols="50" class="form">{$brandingInfo.OilCompanyAffiliation}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a tire company affiliation ? (Firestone, other)<br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="TyreCompanyAffiliation" rows="3" cols="50" class="form">{$brandingInfo.TyreCompanyAffiliation}</textarea>
</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
	function validateForm()
	{
		if(trimSpace(document.frmBranding.BannerAffiliated.value)=='')
		{
			alert("Tell me about the parts or banner programs you are affiliated with?");
			document.frmBranding.BannerAffiliated.focus();
			return false;
		}
		return true;
		
	}
</script>
{/literal}