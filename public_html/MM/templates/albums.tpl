{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Albums</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Select Album</U></h3></td>
				</tr>
				<tr>
				  {foreach item=item name=item from=$Cat}
				  <td align="left" valign="left" style="padding-left:30px;"><strong><a href="{$siteurl}/image-gallery.php?album={$item.album_id}" style="color:#5E7185;font-family:arial;font-size:14px;"><img src="{$siteurl}/images/gallery.jpeg" alt="Gallery" /><br />{$item.album_name} ( {$item.totphotos})</a><br />{$item.created_date|date_format}</strong></td>
				  {assign var='row' value=$smarty.foreach.item.index+1}
				   {if $row mod 2 eq "0"}
				  	</tr><tr>
					{/if}
				  {foreachelse}
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Albums added</td>
					</tr>
				  {/foreach}
				</tr>
				
			</table>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
	
</div>
<!--end body-->	
{include file="footer.tpl"}