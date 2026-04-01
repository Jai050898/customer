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
      <li>Add Daily Data</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Add Daily Data</div>
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
				
				<tr class="Clone" >
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[ddate][]" id="ddate" class="select req-string reqDate" value="{$Tasks.ddate}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Available Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[available_hours][]" id="available_hours" class="select req-string  req-numeric" value="{$Tasks.available_hours}"/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actual_hours][]" id="actual_hours" class="select req-string  req-numeric" value="{$Tasks.actual_hours}" onchange="javascript: return checkdate(this.id);"/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Sold Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[sold_hours][]" id="sold_hours" class="select req-string  req-numeric" value="{$Tasks.sold_hours}"/></td>
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
	$("#ddate").datepicker();
});
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
</script>
{/literal}