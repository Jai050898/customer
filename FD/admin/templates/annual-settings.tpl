{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
{literal}
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
{/literal}
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
							<li><a href="{$siteurl}/admin/manage-shops.php?Company_ID={$smarty.request.Company_ID}">Manage Shops</a></li>
							<li>Annual Settings</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Annual Settings</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
									<input type="hidden" name="hid_type" id="hid_type" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td style="padding-top:10px;"></td>
												<td></td>
											</tr>
											{if $smarty.request.task neq ""}
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong>Your Annual Settings updates Successfully</strong></td>
											</tr>
											{/if}
											<tr class="color_trbg">
												<td width="25%">Time Keeping:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<select name="Log[timekeeping]" id="timekeeping" onChange="showdiv(this.value)">
													  <option value="">-- Please Select --</option>
													  <option value="Y" {if $AccDet.timekeeping eq "Y"} selected="selected" {/if}>YES</option>
													  <option value="N" {if $AccDet.timekeeping eq "N"} selected="selected" {/if}>NO</option>
													  </select>
												 </td>
											  </tr>
											<tr class="color_trbg" id="efficiencytr" {if $AccDet.efficiency eq ''} style="display:none;" {/if}>
												<td width="25%" valign="top">Efficiency:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[efficiency]" id="efficiency" class="input req-string" value="{if $AccDet.efficiency eq ''}1.25{else}{$AccDet.efficiency}{/if}" />
												 </td>
											  </tr>
											  <tr class="color_trbg" id="productivitytr" {if $AccDet.productivity eq ''} style="display:none;" {/if}>
												<td width="25%" valign="top">Productivity:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[productivity]" id="productivity" class="input req-string" value="{if $AccDet.productivity eq ''}0.90{else}{$AccDet.productivity}{/if}" />
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Shop Labor Rate:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shoplaborrate]" id="shoplaborrate" class="input req-string req-numeric" value="{$AccDet.shoplaborrate}" /></td>
											 </tr>
											 
											<tr class="color_trbg">
												<td>Total Technicians:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totaltechnicians]" id="totaltechnicians" class="input req-string req-numeric" value="{$AccDet.totaltechnicians}"></td>
											  </tr>
											<tr class="color_trbg">
												<td>Total Advisors:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totaladvisors]" id="totaladvisors" value="{$AccDet.totaladvisors}" class="input req-string req-numeric"></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Total Shop Bays:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totalshopbays]" id="totalshopbays" value="{$AccDet.totalshopbays}" class="input req-string"></td>
											  </tr>
											   <tr class="color_trbg">
												<td>Gross Sales Goal:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[grosssalesgoal]" id="grosssalesgoal" value="{$AccDet.grosssalesgoal}" class="input req-string req-numeric"></td>
											  </tr>
											<tr>
												<td>Marketing Advertising Budget:<span class="redstar"> * </span></td>
												<td align="left">
												<input type="text" name="Log[marketingadvertisingbudget]" id="marketingadvertisingbudget" value="{$AccDet.marketingadvertisingbudget}" class="input req-string req-numeric">
												</td>
											</tr>										
											<tr>
											  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
											</tr>
											<tr>
												<td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
												<td bgcolor="#854141"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
											</tr>
										</table>
									</form>
								</td>
							</tr>
							<tr>
								<td align="left" valign="top">&nbsp;</td>
							</tr>
						</table>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator({literal}{scope: {/literal}'#EditProfile',errorDiv:'#errorDiv1'});
</script>
{literal}
<script language="javascript" type="text/javascript">
	$(document).ready(function() {	
	$("#opening_date").datepicker();
		});	
	function showdiv(val)
	{
		if(val == "Y")
		{
			$("#efficiency").val('');
			$("#productivity").val('');
			$("#efficiencytr").show();
			$("#productivitytr").show();
		}
		else
		{
			$("#efficiency").val('1.25');
			$("#productivity").val('0.90');
			$("#efficiencytr").hide();
			$("#productivitytr").hide();
		}
	}
</script>
{/literal}