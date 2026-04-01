{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmNotoriey" id="frmNotoriey" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step7.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Notoriey</u></h2>
				
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
					<td align="left" style="padding-bottom:10px" valign="middle">Does your business have any awards or publicly recognized notoriety ?<br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="AwardNotoriety" rows="3" cols="50" class="form">{$notorietyInfo.AwardNotoriety}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What General Business association are you related with (BBB, AAA, etc.) ?<br />

					<textarea name="GeneralBusinessAssocation" rows="3" cols="50" class="form">{$notorietyInfo.GeneralBusinessAssocation}</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you participate in any special Events ?</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					{html_checkboxes name="SpecialEvents" options=$specialEvents selected=$eventsSelected separator="<br />"}
					<input type="text" name="SpecialEventsOther" class="form" id="SpecialEventsOther" maxlength="200" size="50" onchange="setChecked('SpecialEvents[]','frmNotoriey','Other')" value="{$notorietyInfo.SpecialEventsOther}">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you participate in any community activities, or offer community support ?<br />
(Fund raisers, customer appreciation days, womens shelter support, etc.)
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					{html_checkboxes name="CommunityActivities" options=$communityActivities selected=$activitiesSelected separator="<br />"}
					<input type="text" name="CommunityActivitiesOther" class="form" id="CommunityActivitiesOther" maxlength="200" size="50" onchange="setChecked('CommunityActivities[]','frmNotoriey','Other')" value="{$notorietyInfo.CommunityActivitiesOther}">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your area known for ?<br /><span class="infoText">( views, entertainment, city/state motto, other ) </span><br />

					<input type="text" name="AreaKnownFor" maxlength="240" size="50" class="form" value="{$notorietyInfo.AreaKnownFor}">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Is there anything specifically noteworthy about your location ?<br /><span class="infoText">( unique landmarks, views of certain areas or landmarks )</span><br />

					<input type="text" name="LocationSpecial" maxlength="240" size="50" class="form" value="{$notorietyInfo.LocationSpecial}">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Specific Local sports team affiliation that you would like mentioned <br /><span class="infoText">( local high school or university )</span><br />

					<input type="text" name="LocalSportsTeam" maxlength="240" size="50" class="form" value="{$notorietyInfo.LocalSportsTeam}">
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
		if(trimSpace(document.frmNotoriey.GeneralBusinessAssocation.value)=='')
		{
			alert("Tell me about the General Business association are you related with?");
			document.frmNotoriey.GeneralBusinessAssocation.focus();
			return false;
		}
		if(checkOther('SpecialEvents[]','frmNotoriey','Other','SpecialEventsOther')==1)
		{
			return false;
		}
		if(checkOther('CommunityActivities[]','frmNotoriey','Other','CommunityActivitiesOther')==1)
		{
			return false;
		}

		return true;
		
	}
	</script>
{/literal}