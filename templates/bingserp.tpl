{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Bing SERPs</h1>
			<div id="bodyleft">
<div  class="left_content" style="color:#2f3337;">
<div class="contents01">
{foreach item=item name=item from=$Images}
<span class="style0001">{$item.date|date_format:"%A, %B %e, %Y"}</span>

<div id="latest_images">
{foreach item=items name=items from=$item.Items}

<a href="javascript: ShowIMG('{$item.date}','{$items.image}');"><img src="{$siteurl}/serps/{$items.image}" width="150" height="104" /></a>
{/foreach}
</div>
<div style="height:10px;"></div>
{foreachelse}
No Bing SERPs  Found
{/foreach}
{if $Images|@count gt 0}
	<table  width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
			<tr>
			<td  align="left" bgcolor="#336699">&nbsp;		</td>
			<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
			</tr>
			</table>
			</td>
		</tr>
	</table>
{/if}
</div>
</div>

</div>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
{literal}
<script language="javascript" type="text/javascript">
function ShowIMG(dt,val)
{
	tb_show("Bing SERPs",'show-google-image.php?height=500&width=1040&img='+val);
	return;
}
</script>
{/literal}