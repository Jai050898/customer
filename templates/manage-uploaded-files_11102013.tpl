{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/upload-file.php">Add Document</a></span>
			<h1>Manage Documents</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Comments</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Created Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actions</strong></td>
				</tr>
				{foreach item=item name=item from=$Documents}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/download.php?imag={$item.filename|base64_encode}">{$item.filename}</a>&nbsp;</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.comments}</td>
					<td bgcolor="#f9f9f7">{$item.dateuploaded|date_format:"%b %d,%Y"}</td>
					<td  bgcolor="#f9f9f7"><a href="{$siteurl}/download.php?imag={$item.filename|base64_encode}" class="link023">View</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="4" bgcolor="#f9f9f7" style="color:#000000;">No Documents Found</td>
				</tr>
				{/foreach}
				{if $Documents|@count gt 0}
				<tr>
				  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
					<tr>
					<td  align="left" bgcolor="#336699">&nbsp;</td>
					<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
					</tr>
					</table>
					</td>
					</tr>
				{/if}
			</table>
			<div class="clear"></div>
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>