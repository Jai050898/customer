{include file=header.tpl}
<link rel="stylesheet" media="screen" type="text/css" href="{$siteurl}/css/colorpicker.css" />
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="{$siteurl}/add-cat.php">Add Category</a></span>
			<h1>Calendar Categories</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Color</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Categoty Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
					<td bgcolor="#{$item.color}" style="color:#000000;">
					<td bgcolor="#f9f9f7" style="color:#000000;">{$item.cat_name}</td>
					<td bgcolor="#f9f9f7"><a href="{$siteurl}/calendars-cat.php?cat_id={$item.id}&act=del" class="link023">Delete</a></td>
				</tr>
				{foreachelse}
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Categories Found</font></td>
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
<script type="text/javascript" src="{$siteurl}/js/colorpicker.js"></script>
{literal}
<script type="text/javascript">
	$(document).ready(function() {
		{/literal}{foreach item=item name=item from=$Tasks}{literal}
		$('#input{/literal}{$smarty.foreach.item.index}{literal}').ColorPickerSetColor({ color: '{/literal}{$item.color}{literal}' });
		{/literal}{/foreach}{literal}
	});
</script>
{/literal}