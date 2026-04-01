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
			<h1>{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[name]" id="name" class="select req-string" value="{$Cal.name}"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				{foreach item=item name=item from=$Items}
				<tr  id="itemtr{$item.id}">
				  <td colspan="2">
				  <table  id="item{$item.id}">
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Item Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log1[title][{$item.id}]" id="title" class="select req-string" value="{$item.title}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Category:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log1[cat_id][{$item.id}]" id="cat_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item1 name=item1 from=$Cat}
										<option value="{$item1.id}" {if $item1.id eq $item.cat_id} selected="selected"{/if}>{$item1.cat_name}</option>
										{/foreach}
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Start date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log1[sdate][{$item.id}]" id="editsdate{$smarty.foreach.item.index+1}" class="select req-string" value='{$item.sdate|date_format:"%m-%d-%Y"}'/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">End date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log1[edate][{$item.id}]" id="editedate{$smarty.foreach.item.index+1}" class="select req-string" value='{$item.edate|date_format:"%m-%d-%Y"}'/></td>
				</tr>
				<tr  align="right" >
					<td colspan="3"><a href="javascript:void(0);" onclick="javascript: DeleteItem({$item.id})"><img src="{$siteurl}/images/del.png" border="0" />&nbsp;Delete Item</a></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				{/foreach}
				<tr>
				  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMore();">Add More Items</a></td>
				</tr>
				<tr class="Clone" style="display:none" id="newoption">
				  <td colspan="2">
				  <table>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Item Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="selectclass" value="{$Tasks.title}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Category:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="selectclass">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Cat}
										<option value="{$item.id}" {if $item.id eq $Cat.id} selected="selected"{/if}>{$item.cat_name}</option>
										{/foreach}
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Start date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[sdate][]" id="sdate" class="selectclass" value="{$Tasks.sdate}"/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">End date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[edate][]" id="edate" class="selectclass" value="{$Tasks.edate}"/></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				<tr class="Clone" align="right" style="display:none" id="newoptionadd">
					<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/relCopy.jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();	
	{/literal}
	{foreach item=item name=item from=$Items}
	{literal}
	$("#editsdate"+{/literal}{$smarty.foreach.item.index+1}{literal}).datepicker();
	$("#editedate"+{/literal}{$smarty.foreach.item.index+1}{literal}).datepicker();	
	{/literal}
	{/foreach}
	{literal}
});
/*for(i=0;i<50;i++)
{
	$("#sdate"+i).datepicker();
	$("#edate"+i).datepicker();	
}	*/
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
function ShowMore()
{
	$(".selectclass").each(function(){$(this).attr('class','');$(this).attr('class','select req-string');});
	/*$(".selectclass").attr('class','');
	$(".selectclass").attr('class','select req-string');*/
	$("#newoption").show();
	$("#newoptionadd").show();
}
function DeleteItem(id)
{
	$("#item"+id).hide('slow');
	//$("#itemtr"+id).hide('50');
	$.post(site_path+"/ajax.php",{For:'DelCalItem',id:id},function(data){});
}
</script>
{/literal}