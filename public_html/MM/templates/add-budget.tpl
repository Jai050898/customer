{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Budget</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[year]" id="year" class="select req-string req-numeric" value="{$Tasks.year}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[gsales]" id="gsales" class="select req-string req-numeric" value="{$Tasks.gsales}"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<tr>
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="center" valign="center" style="padding-left:5px;">Item Name:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Category:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Bugdet Amount:</td>
				  <td align="center" valign="center" style="padding-left:5px;"> Actual Amount:</td>
				</tr>
				<tr  class="Clone" >
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="select req-string" value="{$Tasks.title}"/></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Cat}
										<option value="{$item.id}" {if $item.id eq $Cat.id} selected="selected"{/if}>{$item.cat_name}</option>
										{/foreach}
									</select></td>
				  <td align="left" valign="center"><input type="text" name="Log[amount][]" id="amount" class="select req-string req-numeric" value="{$Tasks.amount}"/></td>
				  <td align="left" valign="center"><input type="text" name="Log[actual_amount][]" id="actual_amount" class="select req-string req-numeric" value="{$Tasks.actual_amount}"/></td>
				</tr>
				<tr class="Clone" align="right">
					<td colspan="4"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
				</tr>
				  </table>
				  </td>
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
		{* include file="rightbar.tpl" *}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/relCopy.jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
</script>
{/literal}