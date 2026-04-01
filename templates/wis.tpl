{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/cal-wis.php">Add What if Scenarios</a></span>
			<h1>What if Scenarios</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<!-- <td  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></td> -->
					<td  bgcolor="#336699" style="color:#fff;"><strong>GLS</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>GPS</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>GS</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>TLC</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>TPC</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>MB</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>RB</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>No of Customers Needed</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<!-- <td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td> -->
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.GLS|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.GPS|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.GS|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.TLC|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.TPC|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.MB|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.RB|number_format:2}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ {$item.NOC|number_format:2}</td>
					<td bgcolor="#f9f9f7">
						<!-- <a href="{$siteurl}/show-monitoring-budget.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/cal.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp; -->
						<a href="{$siteurl}/edit-wis.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/wis.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="11" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No What if Scenarios Found</font></td>
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