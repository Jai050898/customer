{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-daily-data.php">Add Daily Data</a></span>
			<h1>Manage Daily Data</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Available Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actual Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Sold Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Productivity</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Efficiency</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.ddate}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.available_hours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.actual_hours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.sold_hours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.productivity}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.efficiency}</td>
					<td bgcolor="#f9f9f7">
						<a href="{$siteurl}/edit-daily-data.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/manage-daily-data.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Data Found</font></td>
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