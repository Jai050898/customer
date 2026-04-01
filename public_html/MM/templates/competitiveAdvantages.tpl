{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>WebSite Survey</h1>
			<div style="height:10px;"></div>
			<form name="frmCompetitiveAdvantages" id="frmCompetitiveAdvantages" method="post" class="fValidator-form" onsubmit="return validateForm();" action="competitiveAdvantages.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Competitive Advantages</u></h2>
				<table width="100%" border="0" >
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