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
			<div style="height:10px;"></div>
			<h1>Project members</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				{if $AllUsers neq ""}
			  <tr>
				<td colspan="3"><a href="javascript: showForm();"><span id="spamdiv1">Show</span> Add User to this project Form</a></td>
			  </tr>
			  <tr id="showdiv1" style="display:none">
				<td colspan="3">
				<form name="myform" id="myform" method="post" onsubmit="javascript:$('#adduser').val('Save');">
				<input type="hidden" name="adduser" id="adduser">
					<table>
					<tr class="color_trbg">
						<td valign="top">User</td>
						<td align="left">
							<select name="Log[user_id]" id="user_id" class="select req-string">
								<option value="">-- Please Select --</option>
								{foreach item=item name=item from=$AllUsers}
									<option value="{$item.user_id}">{$item.first_name}</option>
								{/foreach}
							</select>
						</td>
					  </tr>
					  <tr>
						  <td align="right" valign="middle">&nbsp;</td>
						  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
						</tr>
					  <tr class="color_trbg">
						<td valign="top" colspan="2" align="center"><input id="submitBtn1" value="Add User" type="submit" class="sendBtn" /></td>
					  </tr>
					</table>
					</form>
				</td>
			  </tr>
			  {/if}
			  <tr>
			  <td colspan="3">
			  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
			  <tr>
				<td bgcolor="#336699" style="color:#fff;">Name</td>
				<td bgcolor="#336699" style="color:#fff;">Location</td>
				<td bgcolor="#336699" style="color:#fff;">Adde Date</td>
				<td bgcolor="#336699" style="color:#fff;">Action</td>
			  </tr>
			  {foreach item=item name=item from=$Users}
			  <tr>
				<td bgcolor="#f9f9f7" style="color:#000000;">{$item.first_name}</td>
				<td bgcolor="#f9f9f7" style="color:#000000;">{$item.city} - {$item.country}</td>
				<td bgcolor="#f9f9f7" style="color:#000000;">{$item.created_date|date_format}</td>
				<td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/client/view-project.php?project_id={$Project.project_id}&id={$item.id}&act=del">Delete</a></td>
			  </tr>
			  {foreachelse}
			  	 <tr>
					<td colspan="4" align="center" bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000">No Users Added to this project</font></td>
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
function showForm()
{
	if($("#spamdiv1").text() == "Show")
	{
		$("#spamdiv1").text("Hide");
		$("#showdiv1").show();
	}
	else
	{
		$("#spamdiv1").text("Show");
		$("#showdiv1").hide();
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