{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Monitoring Goal</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[year]" id="year" class="select req-string req-numeric" value="{$Tasks.year}"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>	
				{foreach item=item name=item from=$months}
				<tr>
				<td colspan="2"><u><strong>{$item}</strong></u></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Loggrosssales[]" id="new{$smarty.foreach.item.index+1}" class="select req-string req-numeric" value="{$Tasks.Loggrosssales}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">RO Count:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Logrocount[]" id="repeat{$smarty.foreach.item.index+1}" class="select req-string req-numeric" value="{$Tasks.Logrocount}"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				{/foreach}
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}