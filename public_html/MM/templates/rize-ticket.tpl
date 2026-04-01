{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TicketForm" class="form" id="TicketForm" method="post" onSubmit="javascript:$('#hid_key').val('Post');">
				<input type="hidden" name="hid_key" id="hid_key" value=""/>
				<input type="hidden" name="hid_value" id="hid_value"/>
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.project_id neq ""}Edit{else}Add{/if} Ticket</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Priority:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[priority]" id="Priority" class="select req-string"  style="width:182px;">
							<option value="">--- Please Select ---</option>
							<option value="1" {if $result.Job_Priority eq '1'}selected{/if} >Urgent</option>
							<option value="2" {if $result.Job_Priority eq '2'}selected{/if} >High</option>
							<option value="3"{if $result.Job_Priority eq '3'}selected{/if} >Normal</option>
							<option value="4"  {if $result.Job_Priority eq '4'}selected{/if}>Low</option>
							<option value="5"  {if $result.Job_Priority eq '5'}selected{/if}>VeryLow</option>
							</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Subject:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input name="Log[subject]" type="text" class="input req-string" id="Subject" value="{$Records.Subject}" style="width:350px" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Description:</td>
				  <td align="left" valign="center"><textarea name="Log[description]" id="album_description" class="input req-string" style="width:460px; height:200px;"/>{if $Records.Description neq ''}{$Records.Description}{/if}</textarea></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TicketForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$('#album_description').wysiwyg();
		});	
</script>
{/literal}