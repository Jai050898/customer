{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/monthly-sales.php">Monthly Sales Entry</a></span>
			<h1>Monthly Sales</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Month</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Gross Sales</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Repair Orders</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>New Customers</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actual Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Days Open</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{"01-`$item.month`-2012"|date_format:"%B"}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.grosssales}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.repairorders}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.newcustomers}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.actualhours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.daysopen} days</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="edit-monthly-sales.php?id={$item.id}">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Monthly Sales Found</font></td>
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