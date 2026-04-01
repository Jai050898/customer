{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
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
      <li>View Task</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Task</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View Task</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									 {if $Tasks.priority eq "1"}Urgent{elseif $Tasks.priority eq "2"}High Priority{elseif $Tasks.priority eq "3"}Mediun Priority{elseif $Tasks.priority eq "4"} Normal Priority{elseif $Tasks.priority eq "5"}Low Priority{elseif $Tasks.priority eq "6"}Very Low Priority{else}Whatever{/if}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Context:</td>
								<td width="80%" align="left">
									{if $Tasks.context eq "1"}Work{elseif $Tasks.context eq "2"}Meeting{elseif $Tasks.context eq "3"}Document{elseif $Tasks.context eq "4"}Internet{elseif $Tasks.context eq "5"}Phone{elseif $Tasks.context eq "6"}Email{elseif $Tasks.context eq "7"}Home{else}Others{/if}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Deadline</td>
								<td width="80%" align="left">
									{$Tasks.dead_line|date_format:"%m-%d-%Y"}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Project:</td>
								<td width="80%" align="left">
									{$Tasks.name}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Title</td>
								<td width="80%" align="left">
									{$Tasks.title}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Description</td>
								<td width="80%" align="left">
									{$Tasks.description|nl2br}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Comments</td>
								<td width="80%" align="left">
									<a href="{$siteurl}/ajax.php?For=Comments&height=600&width=600&Id={$Tasks.task_id|base64_encode}" class="thickbox" title="View Comments">{$Tasks.commentcount}</a>
								 </td>
							  </tr>
							  <!-- <tr class="color_trbg">
								<td width="20%">Dispaly Type</td>
								<td width="80%" align="left">
									<select name="Log[diaplay_type]" id="diaplay_type" class="select req-string">
											<option value="">-- Select --</option>
											<option value="1" {if $Tasks.diaplay_type eq "1"} selected="selected"{/if}>Public</option>
											<option value="2" {if $Tasks.diaplay_type eq "2"} selected="selected"{/if}>Internal</option>
											<option value="3" {if $Tasks.diaplay_type eq "3"} selected="selected"{/if}>Private</option>
										</select>	
								 </td>
							  </tr> -->
							  <tr class="color_trbg">
								<td width="20%">Task Status</td>
								<td width="80%" align="left">
									<span class="progressBar" id="sb">{$Tasks.task_status}%</span>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Task Status History</a>
								 </td>
							  </tr>
							  <tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table style="border:solid 1px #000000;" cellpadding="1" cellspacing="2" width="80%" align="center"> 
										<tr>
										<td style="border:solid 1px #000000">Date</td>
										<td style="border:solid 1px #000000">Action</td>
										</tr>
										{foreach item=item name=item from=$Status}
											<tr>
												<td style="border:solid 1px #000000">{$item.created_date|date_format:"%m-%d-%Y"}</td>
												<td style="border:solid 1px #000000"><span class="progressBar" id="task_status{$smarty.foreach.item.index}">{$item.task_percentage}</span></td>
											</tr>
										{foreachelse}
											<tr>
												<td colspan="2"><font color="#FF0000">No History Found</font></td>
											</tr>
										{/foreach}
									</table>
								</td>
							  </tr>
			              </table>
		</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.progressbar.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function showhistory()
{
	if($("#spamdiv").text() == "Show")
	{
		$("#spamdiv").text("Hide");
		$("#showdiv").show();
	}
	else
	{
		$("#spamdiv").text("Show");
		$("#showdiv").hide();
	}
}
$(document).ready(function() {	
	$("#sb").progressBar();
		{/literal}{foreach item=item name=item from=$Status}{literal}
		$("#task_status{/literal}{$smarty.foreach.item.index}{literal}").progressBar();
		{/literal}{/foreach}{literal}
	});	
</script>
{/literal}