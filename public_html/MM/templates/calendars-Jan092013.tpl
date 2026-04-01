{include file=header.tpl}
<link rel="stylesheet" media="screen" type="text/css" href="{$siteurl}/css/colorpicker.css" />
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-cal.php">Add Calendar Item</a>&nbsp;|&nbsp;<a href="{$siteurl}/shared-cal.php">Shared Calendars</a></span>
			<h1>Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Start Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>End Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Duration</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.name}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.sdate}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.edate}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.duration} days</td>
					<td bgcolor="#f9f9f7">
					<a href="{$siteurl}/cal-gantt.php?id={$item.id}" class="link023" target="_blank"><img src="{$siteurl}/images/cal.png" border="0" title="View Gantt" alt="View Gantt" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/show-cal.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/calendar.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/edit-cal.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/copy-cal.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/copy.png" border="0" title="Copy" alt="Copy" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/calendars.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/slow-periods.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/timeline_marker.png" border="0" title="Slow Periods" alt="Slow Periods" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Calendar Items Found</font></td>
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
<script type="text/javascript" src="{$siteurl}/js/colorpicker.js"></script>
{literal}
<script type="text/javascript">
	$(document).ready(function() {
		{/literal}{foreach item=item name=item from=$Tasks}{literal}
		$('#input{/literal}{$smarty.foreach.item.index}{literal}').ColorPickerSetColor({ color: '{/literal}{$item.color}{literal}' });
		{/literal}{/foreach}{literal}
	});
</script>
{/literal}