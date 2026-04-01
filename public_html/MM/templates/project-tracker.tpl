{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-tasks.php">Add Task</a></span>
			<h1>Project Tracker</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Priority</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Dead Line</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Title</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Comemnts</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Status</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.name}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item.priority eq "1"}Urgent{elseif $item.priority eq "2"}High Priority{elseif $item.priority eq "3"}Mediun Priority{elseif $item.priority eq "4"} Normal Priority{elseif $item.priority eq "5"}Low Priority{elseif $item.priority eq "6"}Very Low Priority{else}Whatever{/if}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.dead_line|date_format}</td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="{$siteurl}/view-task.php?task_id={$item.task_id}">{$item.title}</a></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="{$siteurl}/ajax.php?For=Comments&height=600&width=600&type=C&Id={$item.task_id|base64_encode}" class="thickbox" title="View Comments">{$item.commentcount}</a></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><span class="progressBar" id="task_status{$smarty.foreach.item.index}">{$item.task_status}</span></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="{$siteurl}/add-tasks.php?task_id={$item.task_id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Tacking Found</font></td>
				</tr>
				{/foreach}
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
<script type="text/javascript">
	$(document).ready(function() {
		{/literal}{foreach item=item name=item from=$Tasks}{literal}
		$("#task_status{/literal}{$smarty.foreach.item.index}{literal}").progressBar();
		{/literal}{/foreach}{literal}
	});
</script>
{/literal}