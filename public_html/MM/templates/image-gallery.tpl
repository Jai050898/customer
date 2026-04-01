{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Image Gallery</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  {foreach item=item name=item from=$Photos}
				  <td align="left" valign="left" style="padding-left:10px;">
				  <a href="{$siteurl}/view-image.php?Id={$item.photo_id|base64_encode}">
				  <img src="{$siteurl}/photos/thumbnails/{$item.photo_name}" alt="Gallery" /></a><br />Views ( {$item.views})<br />{$item.created_date|date_format}
				  </td>
				  {assign var='row' value=$smarty.foreach.item.index+1}
				   {if $row mod 4 eq "0"}
				  	</tr><tr><td colspan="4" height="30">&nbsp;</td></tr><tr>
					{/if}
				  {foreachelse}
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Photos added</td>
					</tr>
				  {/foreach}
				</tr>
				{if $Photos|@count gt 0}
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4"><div style="float:right; padding-right:10px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>	