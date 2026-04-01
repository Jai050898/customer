{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-ro-goal.php">Add RO Goal Item</a></span>
			<h1>RO Goal</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Month</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>New</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Repeat</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{"01-`$item.month`-2012"|date_format:"%B"}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.newval}</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.repeatval}</td>
					<td bgcolor="#f9f9f7">
						<a href="{$siteurl}/edit-ro-goal.php?id={$item.id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>
					</td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No RO Goal Items Found</font></td>
				</tr>
				{/foreach}
				{if $Tasks|@count gt 0}
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
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}