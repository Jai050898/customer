{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Shared Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Calendar Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Shared With</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.name}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.emails}</td>
					<td bgcolor="#f9f9f7"><a href="{$siteurl}/shared-cal.php?id={$item.id}&act=del" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
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