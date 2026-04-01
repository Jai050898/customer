{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Admin Uploaded Files</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
			{foreach item=item name=item from=$UploadsAll}
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;" width="35%">File Name:</td>
				  <td align="left" valign="center" width="65%"><strong><a href="download.php?imag={$item|base64_encode}&folder=admin">{$item}</a></strong></td>
				</tr>
			{foreachelse}
				<tr>
				<td colspan="2"></td>
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