{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Yearly Data</h1>

			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				{if $error neq ""}
				<tr>
					<td colspan="2" align="center" style="color:#FF0000;"><strong>{$error}</strong></td>
				</tr>
				{/if}
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  {assign var=firstyear value="2003"}
				  {assign var=thisyear value=$smarty.now|date_format:"%Y"}
				<select name="Log[year]" id="year" class="select req-string">
				<option value="">-- Please Select -- </option>
				{section name=yearValue start=$firstyear loop=$thisyear step=1}
				<option value="{$smarty.section.yearValue.index}" {if $AccDet.year eq $smarty.section.yearValue.index} selected="selected"{/if}>{$smarty.section.yearValue.index}</option>
				{/section}
				</select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="{$AccDet.grosssales}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Repair Orders:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="{$AccDet.repairorders}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">New Customers:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="{$AccDet.newcustomers}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="{$AccDet.actualhours}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Facebook Fans:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[facebookfans]" id="facebookfans" value="{$AccDet.facebookfans}" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Google Plus Users:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[googleplususers]" id="googleplususers" value="{$AccDet.googleplususers}" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Vibe:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.vibe eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $AccDet.vibe eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $AccDet.vibe eq "-1"} selected="selected"{/if}>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Activity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.activity eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $AccDet.activity eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $AccDet.activity eq "-1"} selected="selected"{/if}>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Available Staff:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[availablestaff]" id="availablestaff" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $AccDet.availablestaff eq "+1"} selected="selected"{/if}>Overtime</option>
				  <option value="0" {if $AccDet.availablestaff eq "0"} selected="selected"{/if}>Full Crew</option>
				  <option value="-1" {if $AccDet.availablestaff eq "-1"} selected="selected"{/if}>People on Vacation, off, low</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Days Open:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[daysopen]" id="daysopen" value="{$AccDet.daysopen}" class="input req-string"></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator({literal}{scope: {/literal}'#EditProfile',errorDiv:'#errorDiv1'});
</script>