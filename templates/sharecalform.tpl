<div class="bodyleftpopup">
			<div style="height:10px;"></div>
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript: sendajax();return false;">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<input type="hidden" name="id" id="id" value="{$smarty.request.id}">
			<div style="height:10px;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;" align="center">
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
				  <td align="left" colspan="2" valign="top" style="width:160px;"><strong>Enter emails separated by comma :<span class="redstar"> * </span></strong></td>
				</tr>
				<tr>
				  <td align="left" colspan="2"><textarea name="emails" id="emails" style=" width:300px; height:100px;" class="input req-string" ></textarea></td>
				</tr>
				<tr>
				  <td align="left" colspan="2" valign="top" style="width:160px;"><strong>Comments:</strong></td>
				</tr>
				<tr>
				  <td align="left" colspan="2"><textarea name="comments" id="comments" style=" width:300px; height:100px;"></textarea></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator({literal}{scope: {/literal}'#EditProfile',errorDiv:'#errorDiv1'});
</script>
{literal}
<script language="javascript" type="text/javascript">
function sendajax()
{
	//$(".bodyleftpopup").html('<div style="padding-top:150px; text-align:center; color:#0000FF"><strong>Saving Data...</strong></div>');
	$('#hid_type').val('Edit');
	$.post('sharecalformsubmit.php',{emails: $("#emails").val(), comments: $("#comments").val(), id: $("#id").val() }, function(data) {
	  if(data == "success")
	  {
	  		$(".bodyleftpopup").html('<div style="padding-top:150px; text-align:center; color:#0000FF"><strong>Calendar Shared Successfully...</strong></div>');
	  }
	  else
	  {
	  	$(".bodyleftpopup").html('<div style="padding-top:150px; text-align:center; color:#FF0000"><strong>Error....</strong></div>');
	  }
	});
	return false;
}
</script>
{/literal}