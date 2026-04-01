{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>View MIS Customers</h1>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_firstname} {$User.MIS_lastname}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Spouse Name :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_spousename}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Company :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_company}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Address :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_address|nl2br}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">State :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_state}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">City :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_city}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Zip Code :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_zip}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Balance Due :</td>
							<td align="left" valign="center" width="65%">$ {$User.MIS_BalanceDue}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Credit Amount :</td>
							<td align="left" valign="center" width="65%">$ {$User.MIS_CreditAmt}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Average RO :</td>
							<td align="left" valign="center" width="65%">$ {$User.MIS_AverageRO}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">YTD Total :</td>
							<td align="left" valign="center" width="65%">$ {$User.MIS_YTDTotal}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Life Total :</td>
							<td align="left" valign="center" width="65%">$ {$User.MIS_LifeTotal}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Price Level :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_pricelevel}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Level :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_laborlevel}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Remarks :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_remarks}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax1 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax1}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax2 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax2}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax3 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax3}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax4 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax4}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax5 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax5}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax6 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax6}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax7 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax7}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax8 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax8}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax9 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax9}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Tax10 :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_tax10}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Special Orders :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_SpecialOrders}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Follow Up :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_followUp}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Email Address :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_EmailAddress}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Fee Assessment Date :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_FeeAssessmentDate}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Current Fee Amount :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_CurrentFeeAmount}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">No Late Fee :</td>
							<td align="left" valign="center" width="65%">{if $User.MIS_NoLateFee eq "0"}YES{else}NO{/if}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">New Cust FollowUp Date :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_NewCustFollowUpDate}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Last Visited :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_LastVisited}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">First Visited :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_FirstVisited}</td>
						  </tr>
						  <tr>
							<td align="right" valign="center" style="padding-left:55px;" width="35%">Lifetime Visits :</td>
							<td align="left" valign="center" width="65%">{$User.MIS_LifetimeVisits}</td>
						  </tr>
						 </table>			  
			  <div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}