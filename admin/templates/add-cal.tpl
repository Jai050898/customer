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
      <li>Edit Calendar</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Add Calendar</div>
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
				  <td align="left" valign="center"><input type="text" name="LogMain[name]" id="name" class="select req-string" value="{$Tasks.name}"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<tr class="Clone" >
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Item Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="select req-string" value="{$Tasks.title}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Category:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Cat}
										<option value="{$item.id}" {if $item.id eq $Cat.id} selected="selected"{/if}>{$item.cat_name}</option>
										{/foreach}
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Start date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[sdate][]" id="sdate" class="select req-string reqDate" value="{$Tasks.sdate}"/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">End date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[edate][]" id="edate" class="select req-string reqDate" value="{$Tasks.edate}" onchange="javascript: return checkdate(this.id);"/></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				<tr class="Clone" align="right">
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
});
function checkdate(id)
{
	d1=$("#"+id).val();
	d2s=id.replace("edate","sdate");
	d2 = $("#"+d2s).val();
	if(d2 == "")
	{
		alert("Please Fill Start Date first!");
		$("#"+id).val("");
		return false;
	}
	date1=new Date(d1.split("-")[2], d1.split("-")[0], d1.split("-")[1]);
	date2=new Date(d2.split("-")[2], d2.split("-")[0], d2.split("-")[1]);
	
	if(date1<date2)
	{	
		alert("End Date cannot be before Start Date!");
		$("#"+id).val("");
		return false;
	}
	return true;
}
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
</script>
{/literal}