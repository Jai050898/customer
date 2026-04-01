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
							<li>Competitive Advantages</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Competitive Advantages</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmCompetitiveAdvantages" id="frmCompetitiveAdvantages" method="post" class="fValidator-form" onsubmit="return validateForm();" action="competitiveAdvantages.php?id={$smarty.request.id}">
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
					<td align="left" style="padding-left:25px" valign="middle">Do you offer any of the following competitive advantages ?<br /> 
					{if $competitiveAdvantagesInfo.CompShuttleService}
						<input type="checkbox" name="chkCompShuttleService" value="1" checked onclick="clearText('CompShuttleService')" border="0"/>&nbsp;Complimentary Shuttle Service
					{else}
						<input type="checkbox" name="chkCompShuttleService" value="1" onclick="clearText('CompShuttleService')"/>&nbsp;Complimentary Shuttle Service
					{/if}
					<br /><span class="infoText">(if so, is there a range/distance)</span> <input type="text" name="CompShuttleService" class="form" id="CompShuttleService" maxlength="200" size="50" onchange="setChecked('chkCompShuttleService','frmCompetitiveAdvantages','1')" value="{$competitiveAdvantagesInfo.CompShuttleService}"> 
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-left:25px" valign="top">
					{html_checkboxes name="CompetitiveAdvantages" options=$competitiveAdvantages selected=$advantageSelected separator="<br />"}
					
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-left:25px" valign="middle">Waiting Room---</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-left:40px" valign="top">
					{html_checkboxes name="CompetitiveAdvantagesWR" options=$competitiveAdvantagesWR selected=$wrAdvantageSelected separator="<br />"}
					
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					{if $competitiveAdvantagesInfo.CompetitiveAdvantagesOther}
						<input type="checkbox" name="chkCompAdvantagesOther" value="Other" checked onclick="clearText('CompetitiveAdvantagesOther')"/>&nbsp;Complimentary Shuttle Service															{else}
						<input type="checkbox" name="chkCompAdvantagesOther" value="Other" onclick="clearText('CompetitiveAdvantagesOther')"/>&nbsp;Complimentary Shuttle Service	
					{/if}	
					<input type="text" name="CompetitiveAdvantagesOther" class="form" id="CompetitiveAdvantagesOther" maxlength="200" size="50" onchange="setChecked('chkCompAdvantagesOther','frmCompetitiveAdvantages','Other')" value="{$competitiveAdvantagesInfo.CompetitiveAdvantagesOther}">																	</td>
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
		if(checkOther('chkCompShuttleService','frmCompetitiveAdvantages','1','CompShuttleService')==1)
		{
			return false;
		}
		if(checkOther('chkCompAdvantagesOther','frmCompetitiveAdvantages','Other','CompetitiveAdvantagesOther')==1)
		{
			return false;
		}

		return true;
		
	}
</script>
{/literal}