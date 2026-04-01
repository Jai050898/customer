{include file="header.tpl"}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft daily_hours_left">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-daily-data.php">Add Daily Data</a></span>
			<h1>Manage Daily Data</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Date</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Actual Hours</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Available Hours</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sold Hours</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Sales before Discount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Parts Sales</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Labor sales</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Technician</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Adviser</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Sales per Bay</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Efficiency</strong></th>
                                        <th  bgcolor="#336699" style="color:#fff;"><strong>Productivity</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></th>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.ddate|date_format:"%m/%d/%y"}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.available_hours}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.actual_hours}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.sold_hours}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.sales_before_discounts|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.parts_sales|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.labor_sales|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.sales_per_technician|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.sales_per_advisor|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.sales_per_bay|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.efficiency}%</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.productivity}%</td>
					<td bgcolor="#f9f9f7">
						<a href="{$siteurl}/edit-daily-data.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/manage-daily-data.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="14" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Data Found</font></td>
				</tr>
				{/foreach}
			</table>
			<div class="clear"></div>
		</div>
                {* include file="rightbar.tpl" *}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
