{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Edit Daily Data</h1>

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
				  {$Res.year}
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Month:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  {"01-`$Res.month`-2012"|date_format:"%B"}
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Day:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  {$Res.day} ({"`$Res.day`-`$Res.month`-2012"|date_format:"%a"})
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="{$Res.grosssales}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Repair Orders:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="{$Res.repairorders}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">New Customers:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="{$Res.newcustomers}" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="{$Res.actualhours}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Vibe:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $Res.vibe eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $Res.vibe eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $Res.vibe eq "-1"} selected="selected"{/if}>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Activity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" {if $Res.activity eq "+1"} selected="selected"{/if}>Positive</option>
				  <option value="0" {if $Res.activity eq "0"} selected="selected"{/if}>Average</option>
				  <option value="-1" {if $Res.activity eq "-1"} selected="selected"{/if}>Negative</option>
				  </select>
				  </td>
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