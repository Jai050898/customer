{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>View Task</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Priority:</td>
				  <td align="left" valign="center"><strong>{if $Tasks.priority eq "1"}Urgent{elseif $Tasks.priority eq "2"}High Priority{elseif $Tasks.priority eq "3"}Mediun Priority{elseif $Tasks.priority eq "4"} Normal Priority{elseif $Tasks.priority eq "5"}Low Priority{elseif $Tasks.priority eq "6"}Very Low Priority{else}Whatever{/if}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Context:</td>
				  <td align="left" valign="center">{if $Tasks.context eq "1"}Work{elseif $Tasks.context eq "2"}Meeting{elseif $Tasks.context eq "3"}Document{elseif $Tasks.context eq "4"}Internet{elseif $Tasks.context eq "5"}Phone{elseif $Tasks.context eq "6"}Email{elseif $Tasks.context eq "7"}Home{else}Others{/if}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Deadline:</td>
				  <td align="left" valign="center">{$Tasks.dead_line|date_format}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Project:</td>
				  <td align="left" valign="center">{$Tasks.name}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Title:</td>
				  <td align="left" valign="center">{$Tasks.title}</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">Description:</td>
					<td align="left" valign="center">{$Tasks.description|nl2br}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Comments:</td>
				  <td align="left" valign="center"><a href="{$siteurl}/ajax.php?For=Comments&height=600&width=600&Id={$Tasks.task_id|base64_encode}" class="thickbox" title="View Comments">{$Tasks.commentcount}</a></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Task Status:</td>
				  <td align="left" valign="center"><span class="progressBar" id="sb">{$Tasks.task_status}%</span>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Task Status History</a></td>
				</tr>
				<tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
										<tr>
										<td bgcolor="#336699" style="color:#fff;">Date</td>
										<td bgcolor="#336699" style="color:#fff;">Action</td>
										</tr>
										{foreach item=item name=item from=$Status}
											<tr>
												<td bgcolor="#f9f9f7" style="color:#000000;">{$item.created_date|date_format}</td>
												<td bgcolor="#f9f9f7" style="color:#000000;"><span class="progressBar" id="task_status{$smarty.foreach.item.index}">{$item.task_percentage}</span></td>
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
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
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