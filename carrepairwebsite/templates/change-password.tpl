{literal}
<style type="text/css">
<!--
.redstar {color: #FF0000}
-->
</style>
{/literal}
{include file=header.tpl}
<!--body-->
<div id="content" class="hfeed" style="min-height:500px;">
		<div class="inner_textpartm" style="font-size:14px;">
			<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
				<div style="height:10px;"></div>
				<h2>Change Password</h2>
					<table width="100%" cellpadding="10" cellspacing="10" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;" class="table_input01">
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td width="35%" align="right">Old Password <span class="redstar">*</span> :</td>
						  <td width="67%" align="left" valign="center"><input name="Old_Password" id="Old_Password" type="password" class="input req-string"/></td>
						</tr>
						<tr>
						<td align="right">New Password<span class="redstar">*</span> :</td>
							<td align="left" valign="center"> <input name="Password" id="Password" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
							<td align="right">Confirm New Password <span class="redstar">*</span>:</td>
							<td align="left" valign="center"><input name="CPassword" id="CPassword" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
						  <td align="left" valign="top" colspan="2" style="color:#935;font-size:12px; padding-left:255px;"><span id="errorDiv1" class="error-div">&nbsp;{if $response neq ''}{$response}{/if}</span></td>
						</tr>
						<tr>
						  <td align="left" valign="top" style="padding-left:295px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" class="form_submit" style="font-size:15px;padding:3px 5px;height:30px;" /></td>
						  <td width="5%"></td>
						</tr> 
					</table>
				<div class="clear"></div>
			</form>
		</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator({literal}{scope: {/literal}'#LoginForm',errorDiv:'#errorDiv1'});
</script>