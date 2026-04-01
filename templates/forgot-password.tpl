{include file="header.tpl"}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="ForgotPassword" id="ForgotPassword" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Forgot Password</h1>
	<table width="100%" height="130px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Email:<span class="redstar">*</span></td>
		  <td align="left" valign="center"><input type="test" name="Log[Email]" id="Email" class="input req-string req-email" value="{if $smarty.request.Log.Email neq ''}{$smarty.request.Log.Email}{/if}"/></td>
		</tr>
		<tr>
		  <td align="center" valign="top" colspan="2" style="padding-left:215px;"><span id="errorDiv1" class="error-div">&nbsp;{if $response neq ''}{$response}{else} Enter your Email-id{/if}</span></td>
		</tr>
		<tr>
		  <td align="left" valign="top" style="padding-left:215px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" /></td>
		  <td></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator({literal}{scope: {/literal}'#ForgotPassword',errorDiv:'#errorDiv1'});
</script>