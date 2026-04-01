{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>View Project</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Project Title:</td>
				  <td align="left" valign="center"><strong>{$Project.name}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Priority:</td>
				  <td align="left" valign="center"><strong>{if $Project.priority eq "1"}Urgent{elseif $Project.priority eq "2"}High Priority{elseif $Project.priority eq "3"}Medium Priority{elseif $Project.priority eq "4"} Normal Priority{elseif $Project.priority eq "5"}Low Priority{elseif $Project.priority eq "6"}Very Low Priority{else}Whatever{/if}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Description:</td>
				  <td align="left" valign="center">{$Project.description|nl2br}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Project Status:</td>
				  <td align="left" valign="center">{if $Project.project_status eq "1"}New{elseif $Project.project_status eq "2"}Proposal{elseif $Project.project_status eq "3"}In Progress{elseif $Project.project_status eq "4"}Completed{else}Cancelled{/if}&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Project Status History</a></td>
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
												<td bgcolor="#f9f9f7" style="color:#000000;">{if $item.project_status eq "1"}New{elseif $item.project_status eq "2"}Proposal{elseif $item.project_status eq "3"}In Progress{elseif $item.project_status eq "4"}Completed{else}Cancelled{/if}</td>
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
</script>
{/literal}