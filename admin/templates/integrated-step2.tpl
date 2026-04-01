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
							<li>Company History </li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Company History </div>
				  </div>
					<div class="ad_textsp">
						<form name="frmHistory" id="frmHistory" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step2.php?id={$smarty.request.id}">
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
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What year was the business established ? <br />
	
					<input type="text" name="YearEstablised" id="YearEstablised" maxlength="4" size="10" class="form" value="{$historyInfo.YearEstablised}"/></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">How did you get into this industry ?<br />
	
					<textarea name="HowToIndustry" rows="3" cols="50" class="form">{$historyInfo.HowToIndustry}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your company history and founders ?<br />( <span class="infoText">Has this business changed ownership recently? if so, when?</span> )<br />
	
					<textarea name="CompanyHistory" rows="3" cols="50" class="form">{$historyInfo.CompanyHistory}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Has there been any changes of physical location ?<br />
	
					<textarea name="PhysicalLocationChange" rows="3" cols="50" class="form">{$historyInfo.PhysicalLocationChange}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Has there been any change of ownership ?<br />
	
					<textarea name="OwnershipChange" rows="3" cols="50" class="form">{$historyInfo.OwnershipChange}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are there any history of awards or certifications special to the shop ?<br />
	
					<textarea name="CertificationHistory" rows="3" cols="50" class="form">{$historyInfo.CertificationHistory}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Any special milestones the shop or business owner has achieved ?<br />
	
					<textarea name="SpecialMilestone" rows="3" cols="50" class="form">{$historyInfo.SpecialMilestone}</textarea>
	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Tell me anything else you can about your company ?<br />
	
					<textarea name="OtherDetail" rows="3" cols="50" class="form">{$historyInfo.OtherDetail}</textarea>
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
		var newHeight=window.innerHeight;	
		newHeight=newHeight-180;
		//document.getElementById("pralay").style.height=newHeight+'px';
		//document.getElementById("pralay").style.display='block';
		if(trimSpace(document.frmHistory.YearEstablised.value)=='')
		{
			alert("What year was the business established?");
			document.frmHistory.YearEstablised.focus();
			return false;
		}
		if(trimSpace(document.frmHistory.HowToIndustry.value)=='')
		{
			alert("How did you get into this industry?");
			document.frmHistory.HowToIndustry.focus();
			return false;
		}
		if(trimSpace(document.frmHistory.historyInfo.value)=='')
		{
			alert("Tell us about your company history and founders?");
			document.frmHistory.historyInfo.focus();
			return false;
		}
		return true;
		
	}
</script>
{/literal}