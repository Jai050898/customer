{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/daily-sales.php">Daily Sales Entry</a></span>
			<h1>Daily Sales</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Month</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Day</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Gross Sales</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Repair Orders</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>New Customers</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Actual Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Actions</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{"01-`$item.month`-2012"|date_format:"%B"}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.day} ({"`$item.day`-`$item.month`-2012"|date_format:"%a"})</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.grosssales}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.repairorders}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.newcustomers}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.actualhours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="edit-daily-sales.php?id={$item.id}">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="8" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Sales Found</font></td>
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