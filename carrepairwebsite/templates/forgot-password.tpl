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
	<form name="ForgotPassword" id="ForgotPassword" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h2>Forgot Password</h2>
	<table width="100%" height="130px;" border="0" cellspacing="10" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top; font-size:14px;">
		<tr>
			<td width="21%" style="padding-top:10px;"></td>
			<td width="76%"></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Email<span class="redstar">*</span>:</td>
		  <td align="left" valign="center"><input type="test" name="Log[Email]" id="Email" class="input req-string req-email" value="{if $smarty.request.Log.Email neq ''}{$smarty.request.Log.Email}{/if}"/></td>
		</tr>
		<tr>
		  <td align="left" valign="top" colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;"><span id="errorDiv1" class="error-div">&nbsp;{if $response neq ''}{$response}{/if}</span></td>
		</tr>
		<tr>
		  <td align="left" valign="top" style="padding-left:215px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" class="form_submit" style="font-size:15px;padding:3px 5px; height:30px;" /></td>
		  <td width="3%"></td>
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
	$('#Post').formValidator({literal}{scope: {/literal}'#ForgotPassword',errorDiv:'#errorDiv1'});
</script>