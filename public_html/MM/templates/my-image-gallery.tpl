{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Image Gallery</h1>
			<form name="MyGallery" id="MyGallery" onsubmit="javascript:$('#hid_key').val('Save');" method="post" class="form">
			<input type="hidden" name="hid_key" id="hid_key" value="" />
			<input type="hidden" name="hid_id" id="hid_id" value="" />
			<input type="hidden" name="hid_type" id="hid_type" value="" />
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-right:10px;" align="right" colspan="4"><a href="{$siteurl}/add-photos-new.php?album_id={$smarty.request.album}">Add Photos</a></td>
				</tr>
				<tr>
				  {foreach item=item name=item from=$Photos}
				  <td align="left" valign="left" style="padding-left:10px;">
					  <div onmouseover="javascript:document.getElementById('ActionDiv{$smarty.foreach.item.index}').style.visibility='visible';" onmouseout="javascript:document.getElementById('ActionDiv{$smarty.foreach.item.index}').style.visibility='hidden';">
						  <a href="{$siteurl}/view-image.php?Id={$item.photo_id|base64_encode}"><img src="{$siteurl}/photos/thumbnails/{$item.photo_name}" alt="Gallery" /></a>
						  Views ( {$item.views})<br />{$item.created_date|date_format}
						  <div style="float:right; padding-right:0px;height:20px;visibility:hidden;" id="ActionDiv{$smarty.foreach.item.index}"><a href="javascript:void(0);" onclick="fnDeleteRecord(document.MyGallery,{$item.photo_id},'');">{html_image file="images/delete.gif" alt="Delete" vspace="2"}</a></div>
						  <div class="clr"></div>
						  </div>
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
					<td colspan="4"><div style="float:right; padding-right:100px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
				</tr>
				{/if}
			</table>
			</form>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>	
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>	
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>