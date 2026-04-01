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
							<li>Marketing / Advertising</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Marketing / Advertising</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmMarketing" id="frmMarketing" method="post" class="fValidator-form" onsubmit="return validateForm();" action="marketing.php?id={$smarty.request.id}">
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
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an advertising Calendar ?
<br />
					{html_options name='HaveAdvertisingCalender' options=$arrayYesNo1 selected=$marketingInfo.HaveAdvertisingCalender}
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
					<td align="left" style="padding-bottom:10px" valign="middle">Do you do any multimedia marketing ?
<br />
					{html_options name='MultimediaMarketing' options=$arrayMultimediaMarketing selected=$marketingInfo.MultimediaMarketing}
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What are the names of your top 3 competitors ? (for online research comparison)
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
					{html_options name='OilChangeReminder' options=$arrayYesNo1 selected=$marketingInfo.OilChangeReminder}
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out recomended repair reminders ?
<br />
					{html_options name='RepairReminders' options=$arrayYesNo1 selected=$marketingInfo.RepairReminders}
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a night own / early bird drop off available ?
<br />
					{html_options name='NightOwnBirdDropOff' options=$arrayYesNo1 selected=$marketingInfo.NightOwnBirdDropOff}
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you use / have a list of customer testimonials ?<br /><span class="infoText">(if so, please send some
to be used - 3 sets would be fine)</span><br />

				   {html_options name='CustomerTestimonials' options=$arrayYesNo1 selected=$marketingInfo.CustomerTestimonials}
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/common.js"></script>
{literal}
<script language="javascript" type="text/javascript">
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

		return true;
		
	}
</script>
{/literal}