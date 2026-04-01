{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>Edit Daily Date</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Date:</td>
				  <td align="left" valign="center">{$Items.ddate|date_format:"%m-%d-%Y"}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Available Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[available_hours]" id="available_hours" class="select req-string req-numeric" value="{$Items.available_hours}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actual_hours]" id="actual_hours " class="select req-string req-numeric" value="{$Items.actual_hours}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Sold Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[sold_hours]" id="sold_hours " class="select req-string req-numeric" value="{$Items.sold_hours}"/></td>
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
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/relCopy.jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}