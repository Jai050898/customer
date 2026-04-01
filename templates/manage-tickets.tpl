{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/rize-ticket.php" >Add Ticket</a></span>
			<h1>Manage Tickets</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Priority</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Subject</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Requested Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Responded Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Status</strong></td>
				</tr>
				{foreach item=item name=item from=$Records}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{if $item.priority eq 1}Urgent{elseif $item.priority eq 2}High{elseif $item.priority eq 3}Normal{elseif $item.priority eq 4}Low{else}Very Low{/if}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/ajax.php?For=ReqInfo&req_id={$item.req_id}&height=500&width=600" class="thickbox" title="View tickets">{$item.subject}</a></td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.create_date|date_format:"%b %d,%Y"}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{if $item.respond_date neq "0000-00-00 00:00:00"}{$item.respond_date|date_format:"%b %d,%Y"}{else}--{/if}</td>
					<td  bgcolor="#f9f9f7">{if $item.status eq "O"}<font color="#00CC33">Open</font>{elseif $item.status eq "R"}<font color="#0000FF">ReOpened</font>{else}<font color="#FF0000">Closed</font>{/if}</td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" style="color:#000000;">No Tickets Found</td>
				</tr>
				{/foreach}
				{if $Records|@count gt 0}
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
