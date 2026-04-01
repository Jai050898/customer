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
	<div class="inner_textpartm">
	<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h2>Login Form</h2>
	<table width="100%" height="190px;" border="0" cellspacing="0" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;  font-size:14px;">
		<tr>
			<td width="26%" style="padding-top:10px;"></td>
			<td width="74%"></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:75px; padding-right:10px;">Email<span class="redstar"> * </span>:</td>
		  <td align="left" valign="center"><input type="text" name="Log[email]" id="email" class="input req-string req-email" value=""></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:75px; padding-right:10px;">Password<span class="redstar"> * </span>:</td>
		  <td align="left" valign="center"><input type="password" name="Log[password]" id="password" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">{if $Responce neq ''}{$Responce}{/if}</td>
		</tr>
		<tr>
			<td align="left" valign="top" style="padding-left:285px;" colspan="2"><input name="input" id="Login" type="Submit" value="Submit" class="form_submit" style="font-size:15px;padding:3px 5px; height:30px;" /></td>
		</tr>
		<tr>
		  <td align="left" valign="center" style="padding-left:265px;" colspan="2"><a href="{$siteurl}/forgot-password.php">Forgot Password?</a></td>
		</tr>
	</table>
<div class="clear"></div>
</form>
</div>
<div class="clear"></div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Login').formValidator({literal}{scope: {/literal}'#LoginForm',errorDiv:'#errorDiv1'});
</script>