{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Edit Profile</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">First Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="{$AccDet.first_name}"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Last Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="{$AccDet.last_name}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Email:</td>
				  <td align="left" valign="center"><input type="text" name="Log[email]" id="email" class="input req-string" value="{$AccDet.email}" onBlur="javascript:fnCheckEmailAvailClient('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Phone:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[phone]" id="phone" class="input req-string req-numeric" value="{$AccDet.phone}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Address:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[address]" id="address" class="input req-string" style="height:80px;">{$AccDet.address}</textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Country:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
					<select name="Log[country]" id="country" style="width:187px; height:23px;" class="select req-string" onchange="fnGetCountryStates(this.value,'state[]','state','StateRow');">
						<option value="">--Please Select--</option>
						{section name=list loop=$country}
						<option value="{$country[list].Country_Code}" {if $country[list].Country_Code eq $AccDet.country} selected="selected"{/if}>{$country[list].Country_Name}</option>
						{/section}
					</select>
				  </td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:95px;">State:<span class="redstar"> * </span></td>
					<td align="left" valign="center"><span id="StateRow">
					<select name="state[]" id="state" style="width:187px; height:23px;" class="select req-string">
						<option value="">--Please Select--</option>
						{section name=list loop=$State}
						<option value="{$State[list].State_ID}" {if $State[list].State_ID eq $AccDet.state} selected="selected"{/if}>{$State[list].State_Name}</option>
						{/section}
					</select>
					</span></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">City:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[city]" id="city" value="{$AccDet.city}" class="input req-string"></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator({literal}{scope: {/literal}'#EditProfile',errorDiv:'#errorDiv1'});
</script>