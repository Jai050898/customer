{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Links</h1>
			<div style="min-height:470px;color:#2f3337;" class="left_content" >
			<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				<tr>
				  {foreach item=item name=item from=$Links}
				  <td align="left" valign="left" style="padding-left:10px;" width="50%">
				  <a href="{$siteurl}/view-link.php?Id={$item.link_id|base64_encode}&url={$item.link_url|base64_encode}" target="_blank"><img src="images/leftarrow.png" border="0">&nbsp;
				   {$siteurl}/{$item.code}</a>
				  </td>
				  {assign var='row' value=$smarty.foreach.item.index+1}
				   {if $row mod 2 eq "0"}
				  	</tr><tr>
					{/if}
				  {foreachelse}
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Links added</td>
					</tr>
				  {/foreach}
				</tr>
				{if $Links|@count gt 0}
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4"><div style="float:right; padding-right:10px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
				</tr>
				{/if}
			</table>
			</div>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>	