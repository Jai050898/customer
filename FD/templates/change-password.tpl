{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
		<div class="bodyleft">
			<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
				<div style="height:10px;"></div>
				<h1>Change Password</h1>
					<table width="100%" cellpadding="5" cellspacing="2" class="left_content" style="color:#2f3337;">
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td align="right" valign="center" style="padding-left:95px;">Old Password :<span class="redstar">*</span> </td>
							<td align="left" valign="center"><input name="Old_Password" id="Old_Password" type="password" class="input req-string"/></td>
						</tr>
						<tr>
						<td align="right" valign="center" style="padding-left:95px;">New Password :<span class="redstar">*</span></td>
							<td align="left" valign="center"> <input name="Password" id="Password" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
							<td align="right" valign="center" style="padding-left:95px;">Confirm New Password :<span class="redstar">*</span></td>
							<td align="left" valign="center"><input name="CPassword" id="CPassword" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
						  <td align="center" valign="top" colspan="2" style="padding-left:255px;"><span id="errorDiv1" class="error-div">&nbsp;{if $response neq ''}{$response}{/if}</span></td>
						</tr>
						<tr>
						  <td align="left" valign="top" style="padding-left:295px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" /></td>
						  <td></td>
						</tr> 
					</table>
				<div class="clear"></div>
			</form>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
	<div><img src="images/bodybottom.png" alt="" /></div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator({literal}{scope: {/literal}'#LoginForm',errorDiv:'#errorDiv1'});
</script>