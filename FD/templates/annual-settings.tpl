{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Annual Settings</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				{if $smarty.request.task neq ""}
				<tr>
					<td colspan="2" align="center" style="color:#00FF00;"><strong>Your Annual Settings updates Successfully</strong></td>
				</tr>
				{/if}
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Time Keeping:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[timekeeping]" id="timekeeping" onChange="showdiv(this.value)">
				  <option value="">-- Please Select --</option>
				  <option value="Y" {if $AccDet.timekeeping eq "Y"} selected="selected" {/if}>YES</option>
				  <option value="N" {if $AccDet.timekeeping eq "N"} selected="selected" {/if}>NO</option>
				  </select>
				  </td>
				</tr>
				<tr id="efficiencytr" {if $AccDet.efficiency eq ''} style="display:none;" {/if}>
				  <td align="right" valign="top" style="padding-left:95px;">Efficiency:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[efficiency]" id="efficiency" class="input req-string" value="{if $AccDet.efficiency eq ''}1.25{else}{$AccDet.efficiency}{/if}" /></td>
				</tr>
				<tr id="productivitytr" {if $AccDet.productivity eq ''} style="display:none;" {/if}>
				  <td align="right" valign="center" style="padding-left:75px;">Productivity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[productivity]" id="productivity" class="input req-string" value="{if $AccDet.productivity eq ''}0.90{else}{$AccDet.productivity}{/if}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Shop Labor Rate:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[shoplaborrate]" id="shoplaborrate" class="input req-string req-numeric" value="{$AccDet.shoplaborrate}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Total Technicians:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totaltechnicians]" id="totaltechnicians" class="input req-string req-numeric" value="{$AccDet.totaltechnicians}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Total Advisors:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totaladvisors]" id="totaladvisors" value="{$AccDet.totaladvisors}" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Total Shop Bays:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totalshopbays]" id="totalshopbays" value="{$AccDet.totalshopbays}" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales Goal:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssalesgoal]" id="grosssalesgoal" value="{$AccDet.grosssalesgoal}" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Marketing Advertising Budget:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[marketingadvertisingbudget]" id="marketingadvertisingbudget" value="{$AccDet.marketingadvertisingbudget}" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
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