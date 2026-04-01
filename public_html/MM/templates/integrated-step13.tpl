{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmStepSeven" id="frmStepSeven" method="post" enctype="multipart/form-data" class="fValidator-form"  onsubmit="return validateForm()">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Marketing / Advertising Leaders</u></h2>
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
						<td width="76%" align="left" valign="top" style="padding-bottom:5px;padding-right:8px" >Do you purchase Mailing Lists</td>
						<td width="24%" colspan="2">																	</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-left:25px" valign="top" >
							<div style="width:100%; padding-left:10px">
							{html_radios name="PurchaseMailingList" options=$arrayYesNo
selected=$marketingLeadersDetail.PurchaseMailingList separator="&nbsp;" onclick="toggleDiv(this.value,'divPurhaseMailing'); setHidValue(this.value); toggleDiv(this.value-1,'divPurchaseMailingOutsource')"}
							{if $marketingLeadersDetail.PurchaseMailingList}
							<div style="width:100%; display:block" id="divPurhaseMailing">
							{html_radios name="PurchaseMailingOutsource" options=$selfOutHouseArray
selected=$marketingLeadersDetail.PurchaseMailingOutsource separator="&nbsp;" onclick="toggleDiv(this.value,'divPurchaseMailingOutsource')" id="radOutSourced"}
							
							</div>
							{else}
							<div style="width:100%; display:none" id="divPurhaseMailing">
							<input type="radio" name="PurchaseMailingOutsource" id="PurchaseMailingOutsource"  value="0" class="form" onclick="toggleDiv(this.value,'divPurchaseMailingOutsource')">
							Self  &nbsp;&nbsp;
							<input type="radio" name="PurchaseMailingOutsource" id="PurchaseMailingOutsource" value="1" class="form" onclick="toggleDiv(this.value,'divPurchaseMailingOutsource')">
							Outsourced 
							</div>
							{/if}
							</div>	
						</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					 {if $marketingLeadersDetail.PurchaseMailingOutsource}
					  <tr>
						 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
							<div style="border:#B5B5B5 1px solid; width:99% ; display:block" id="divPurchaseMailingOutsource">
						<table width="100%" border="0" bgcolor="#E5E5E5">
							   <tr>
								<td width="27%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
								<td width="73%" colspan="2">
								<input type="text" name="PurchaseMailingOutsourceWhom" id="PurchaseMailingOutsourceWhom" maxlength="100" size="40" class="form" value="{$marketingLeadersDetail.PurchaseMailingOutsourceWhom}"/>																			</td>
							  </tr>	
						  </table>
						  </div>																	</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  {else}
					  <tr>
						 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
							<div style="border:#B5B5B5 1px solid; width:99% ; display:none" id="divPurchaseMailingOutsource">
						<table width="100%" border="0" bgcolor="#E5E5E5">
							   <tr>
								<td width="27%" align="right" valign="middle" style="padding-bottom:10px">Outsourced to whom ?</td>
								<td width="73%" colspan="2">
								<input type="text" name="PurchaseMailingOutsourceWhom" id="PurchaseMailingOutsourceWhom" maxlength="100" size="40" class="form" value="{$marketingLeadersDetail.PurchaseMailingOutsourceWhom}"/>																			</td>
							  </tr>	
						  </table>
						  </div>																	</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  {/if}	
					   {if $marketingLeadersDetail.PurchaseMailingList}
					   <tr>
					   <td align="left" colspan="3">
					   <div id="trPurchaseList" style="display:block">
						   <table width="100%" border="0">
							   <tr >
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you purchase lists for:</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr >
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									<div style="width:100%; padding-left:10px">
									{html_checkboxes name="PurchaseList" values=$purchaseIndexArray output=$purchaseStrArray
selected=$marketingLeadersDetail.PurchaseList separator="<br />" id="PurchaseList"}
									
									<input type="text" name="PurchaseListOther" id="PurchaseListOther" class="form" maxlength="100" onchange="setChecked('PurchaseList','frmStepSeven','3')" value="{$marketingLeadersDetail.PurchaseListOther}"/>	
									<br>
								<td colspan="2">																	</td>
							  </tr>
						   </table>
					   </div>
					   </td>
					   </tr>
					   {else}
					   <tr>
					   <td align="left" colspan="3">
					   <div id="trPurchaseList" style="display:none">
						   <table width="100%" border="0">
							   <tr >
								<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you purchase lists for:</td>
								<td colspan="2">
																									</td>
							  </tr>
							  <tr >
								<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
									<div style="width:100%; padding-left:10px">
									{html_checkboxes name="PurchaseList" values=$purchaseIndexArray output=$purchaseStrArray
selected=$marketingLeadersDetail.PurchaseList separator="<br />" id="PurchaseList"}
									
									<input type="text" name="PurchaseListOther" id="PurchaseListOther" class="form" value="{$BOwnerEmail}" maxlength="100" onchange="setChecked('PurchaseList','frmStepSeven','3')" value="{$marketingLeadersDetail.PurchaseListOther}"/>	
									<br>
								<td colspan="2">																	</td>
							  </tr>
						   </table>
					   </div>
					   </td>
					   </tr>
					   {/if}
					   
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you offer any of the following?</td>
						<td colspan="2">
																							</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<div style="width:100%; padding-left:10px">
							{html_checkboxes name="OfferList" values=$offerIndexArray output=$offerStrArray
selected=$marketingLeadersDetail.OfferList separator="<br />"}
							</div>
							</td>
						<td colspan="2">																	</td>
					  </tr>
					  <tr>
						<td  colspan="3" align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >What incentives do you use to bring in business, and what methods do you use with those (i.e. - Published advertisements or Direct Mailers) ?</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
						<div style="border:#B5B5B5 1px solid;">
						<table width="100%" border="0" bgcolor="#E5E5E5">
						  <tr>
							<td width="67%" align="left">&nbsp;</td>
							<td width="14%" align="center">&nbsp;Advertisements </td>
							<td width="19%" align="center">&nbsp;Mailers </td>
						  </tr>
						  <tr>
							<td>
							<div style="width:100%; padding-left:10px" >
							Back to School <br>
							Spring Break<br>
							Summer Break<br>
							Expiring Warranty<br>
							Bring in 5 year or older vehicle<br>
							Soon to expire warranty<br>
							Intro to local business<br>
							Tax Day<br>
							Christmas<br>
							Easter<br>
							Thanksgiving<br>
							4th of July<br>
							Mother's Day<br>
							Father's Day<br>
							</div>
							</td>
							<td align="center">
							<div style="width:100%;">
							{html_checkboxes name="Advertisements" values=$advStrArray
selected=$marketingLeadersDetail.Advertisements separator="<br />"}
							
							</div>
							</td>
							<td align="center">
							<div style="width:100%;">
							{html_checkboxes name="Mailers" values=$advStrArray
selected=$marketingLeadersDetail.Mailers separator="<br />"}
							
							</div>
							</td>
						  </tr>
						  
						</table>
						</div>
						</td>
						<td colspan="2">	</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Are there any other special incentives you use to bring in business - and how are they used (Advertisement / Mailer)?"</td>
						<td colspan="2">
																							</td>
					  </tr>
					   <tr>
						<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							
							<textarea name="OtherSpecialIncentive" class="form" cols="70" rows="4">{$marketingLeadersDetail.OtherSpecialIncentive}</textarea>
							
							<br>
						<td colspan="2">																	</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >In Hand to get return business</td>
						<td colspan="2">
																							</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							
							{html_checkboxes name="InHand" values=$inhandIndexArray2 output=$inhandStrArray2
selected=$marketingLeadersDetail.InHand separator="<br />"}
							
						<td colspan="2">																	</td>
					  </tr>
					   <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you have an outside Salesperson for fleet business ?</td>
						<td colspan="2">
																							</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-left:25px" valign="top" >
							<div style="width:100%; padding-left:10px">
							{html_radios name="HaveOutSideSalesFleet" options=$arrayYesNo
selected=$marketingLeadersDetail.HaveOutSideSalesFleet separator="&nbsp;"}
							
							</div>	
						</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					   <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Do you have an outside salesperson for other business ?</td>
						<td colspan="2">
																							</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-left:25px" valign="top" >
							<div style="width:100%; padding-left:10px">
							{html_radios name="HaveOutSideSalesOther" options=$arrayYesNo
selected=$marketingLeadersDetail.HaveOutSideSalesOther separator="&nbsp;" onclick="toggleDiv(this.value,'divOutsideSales')" id="HaveOutSideSalesOther"}
							
							</div>	
						</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					 {if $marketingLeadersDetail.HaveOutSideSalesOther }
					  <tr>
						 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
							<div style="border:#B5B5B5 1px solid; width:99%; display:block" id="divOutsideSales">
						<table width="100%" border="0" bgcolor="#E5E5E5">
							   <tr>
								<td width="21%" align="right" valign="middle" style="padding-bottom:10px">Please describe ?</td>
								<td width="79%" colspan="2">
								<input type="text" name="HaveOutSideSalesOtherDetail" id="HaveOutSideSalesOtherDetail" maxlength="100" size="40" class="form" value="{$marketingLeadersDetail.HaveOutSideSalesOtherDetail}"/>																			</td>
							  </tr>	
						  </table>
						  </div>																	</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  {else}
					   <tr>
						 <td align="left" style="padding-bottom:10px;padding-left:25px" valign="top" >
							<div style="border:#B5B5B5 1px solid; width:99%; display:none" id="divOutsideSales">
						<table width="100%" border="0" bgcolor="#E5E5E5">
							   <tr>
								<td width="21%" align="right" valign="middle" style="padding-bottom:10px">Please describe ?</td>
								<td width="79%" colspan="2">
								<input type="text" name="HaveOutSideSalesOtherDetail" id="HaveOutSideSalesOtherDetail" maxlength="100" size="40" class="form" value="{$BOwnerEmail}"/>																			</td>
							  </tr>	
						  </table>
						  </div>																	</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  {/if}
					  
					  <tr>
						<td align="left" style="padding-bottom:5px;padding-right:8px" valign="top" >Check 4 words that best describe how you want to be perceived by your customers?</td>
						<td colspan="2">
																							</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px;padding-left:25px" valign="top">
							<div style="width:100%; padding-left:10px">
							{html_checkboxes name="PerceivedCustomers" values=$perceivedCustomersArray output=$perceivedCustomersArray
selected=$marketingLeadersDetail.PerceivedCustomers separator="<br />" id="PerceivedCustomers"}
							
									<input type="text" name="PerceivedCustomersOther" id="PerceivedCustomersOther" class="form" maxlength="100" onchange="setChecked('PerceivedCustomers','frmStepSeven','Other')" value="{$marketingLeadersDetail.PerceivedCustomersOther}"/>	

							<br>
						<td colspan="2">																	</td>
					  </tr>	
					  <tr>
						<td align="center" colspan="3">
						<input type="hidden" name="isNew" value="{$isNew}" >
						<input type="hidden" name="hidPurChaseMailing" value="{$hidPurChaseMailing}" >	
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
		if(checkOther('PurchaseMailingOutsource','frmStepSeven','1','PurchaseMailingOutsourceWhom')==1)
		{
			return false;
		}
		if(checkOther('PurchaseList[]','frmStepSeven','3','PurchaseListOther')==1)
		{
			return false;
		}
		if(checkOther('HaveOutSideSalesOther','frmStepSeven','1','HaveOutSideSalesOtherDetail')==1)
		{
			return false;
		}
		if(checkOther('PerceivedCustomers[]','frmStepSeven','Other','PerceivedCustomersOther')==1)
		{
			return false;
		}
		return true;
	}
	
	function UnCheckAll(chk)
	{
		
		for (i = 0; i < chk.length; i++)
		{
			//alert(chk[i].checked);
			chk[i].checked = false ;
		}	
	}
	
	function setHidValue(val)
	{
		document.frmStepSeven.hidPurChaseMailing.value=val;
		//alert(document.frmStepSeven.hidPurChaseMailing.value);
		if(val == '1')
		{
			document.getElementById('trPurchaseList').style.display='block';
		}
		if(val == '0')
		{
			document.getElementById('trPurchaseList').style.display='none';
			UnCheckAll(document.getElementById('PurchaseList'));
		}	
			
	}
	</script>
{/literal}