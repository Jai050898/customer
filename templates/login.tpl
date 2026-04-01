{include file="header.tpl"}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Login Form</h1>
	<table width="100%" height="190px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">User Name:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Password:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="password" name="Log[password]" id="password" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">{if $Responce neq ''}{$Responce}{/if}</td>
		</tr>
		<tr>
			<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Login" type="Submit" value="Submit" /></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-right:65px;" colspan="2"><a href="{$siteurl}/forgot-password.php">Forgot Password?</a></td>
		</tr>
	</table>
<div class="clear"></div>
</form>
</div>
<div class="clear"></div>
</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Login').formValidator({literal}{scope: {/literal}'#LoginForm',errorDiv:'#errorDiv1'});
</script>