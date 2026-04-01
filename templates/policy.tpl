{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>WebSite Survey</h1>
			<div style="height:10px;"></div>
			<form name="frmPolicy" id="frmPolicy" method="post" class="fValidator-form" onsubmit="return validateForm();" action="policy.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Policies</u></h2>
			<table width="100%" border="0">
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
				<td align="left" style="padding-bottom:10px" valign="middle">Do you have an environmental statement (or affiliation) ?<br />
<span class="infoText">(If so, please give us detail)</span><br />

				<textarea name="EnvironmentalStatement" rows="3" cols="50" class="form">{$policyInfo.EnvironmentalStatement}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">What is your warranty information / policy ?<br />

				<textarea name="WarrantyInfo" rows="3" cols="50" class="form">{$policyInfo.WarrantyInfo}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">What is your towing policy ?<br />

				<textarea name="TowingPolicy" rows="3" cols="50" class="form">{$policyInfo.TowingPolicy}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			   <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">Do you have a satisfaction guarantee policy ? <br />
<span class="infoText">(If so, please give us detail)</span><br />

				<textarea name="GuaranteePolicy" rows="3" cols="50" class="form">{$policyInfo.GuaranteePolicy}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">What financing options do you offer ? (car care one, visa, MC, etc.)<br />

				<textarea name="FinancialOption" rows="3" cols="50" class="form">{$policyInfo.FinancialOption}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">Is there any other policies or information I should know ? <br />

				<textarea name="OtherPolicy" rows="3" cols="50" class="form">{$policyInfo.OtherPolicy}</textarea>
</td>
				<td colspan="2">&nbsp;</td>
			  </tr>
			  <tr>
				<td align="left" style="padding-bottom:10px" valign="middle">Is there any special business philosophies that you would like to convey to the customer ? <br />

				<textarea name="BusinessPhilosophy" rows="3" cols="50" class="form">{$policyInfo.BusinessPhilosophy}</textarea>
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
		if(trimSpace(document.frmPolicy.WarrantyInfo.value)=='')
		{
			alert("Tell me about your warranty information?");
			document.frmPolicy.WarrantyInfo.focus();
			return false;
		}
		if(trimSpace(document.frmPolicy.TowingPolicy.value)=='')
		{
			alert("Tell me about your towing policy?");
			document.frmPolicy.TowingPolicy.focus();
			return false;
		}
		if(trimSpace(document.frmPolicy.FinancialOption.value)=='')
		{
			alert("Tell me about the financial option you offer?");
			document.frmPolicy.FinancialOption.focus();
			return false;
		}
		return true;
		
	}
	</script>
{/literal}