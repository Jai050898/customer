{include file="header.tpl"}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-budget.php">Add Budget Item</a></span>
			<h1>Marketing Budget</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Budget Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Actual Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Gross Sales</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></th>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.year}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ {$item.amount|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ {$item.actualamount|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ {$item.gsales|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7">
						<a href="{$siteurl}/show-budget.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/cal.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/edit-budget.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/marketing-budget.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Budget Items Found</font></td>
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