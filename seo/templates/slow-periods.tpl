{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
{/literal}
<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		{include file="right-bar.tpl"}
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="{$siteurl}/dashboard.php">Home</a></li>
      <li>Slow Periods</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Slow Periods</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="hid_key" id="hid_key" value="">
							<input type="hidden" name="mylength" id="mylength" value="1">
						  <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">{$Cal.name}</td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				{foreach item=item name=item from=$Items}
				<tr  id="itemtr{$item.id}">
				  <td colspan="2">
				  <table  id="item{$item.id}">
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
		</form></td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  
</table>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
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