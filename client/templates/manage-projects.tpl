{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/client/add-project.php">Add Project</a></span>
			<h1>Manage Projects</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project Status</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Menbers</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Tasks</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Created Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actions</strong></td>
				</tr>
				{foreach item=item name=item from=$Projects}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/client/view-project.php?project_id={$item.project_id}">{$item.name}</a>&nbsp;</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{if $item.project_status eq "1"}<font color="#00CC33">New</font>{elseif $item.project_status eq "2"}<font color="#0000FF">Proposal</font>{elseif $item.project_status eq "3"}<font color="#00EEFF">In Progress</font>{elseif $item.project_status eq "4"}<font color="#00ff00">Completed</font>{else}<font color="#FF0000">Cancelled</font>{/if}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.totmembers}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.totaltasks}</td>
					<td bgcolor="#f9f9f7">{$item.created_date|date_format:"%b %d,%Y"}</td>
					<td  bgcolor="#f9f9f7"><a href="{$siteurl}/client/add-project.php?project_id={$item.project_id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" style="color:#000000;">No Projects Found</td>
				</tr>
				{/foreach}
				{if $Projects|@count gt 0}
				<tr>
				  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
					<tr>
					<td  align="left" bgcolor="#336699">&nbsp;		</td>
					<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
					</tr>
					</table>
					</td>
					</tr>
				{/if}
			</table>
			<div class="clear"></div>
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>