{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-monitoring.php">Add Monitoring Item</a>&nbsp;&nbsp;<a href="{$siteurl}/add-monitoring-goals.php">Add Monitoring Goal Item</a></span>
			<h1>Monitoring Budget</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Total Amount</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Max Amount</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Min Amount</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.amount|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.maxamt|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.minamt|number_format:2:".":","}</td>
					<td bgcolor="#f9f9f7">
						<!-- <a href="{$siteurl}/show-monitoring-budget.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/cal.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp; -->
						<a href="{$siteurl}/edit-monitoring.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/monitoring.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Monitoring Items Found</font></td>
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