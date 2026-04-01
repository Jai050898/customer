{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Marketing Budget for {$Cal.year}</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Branding / Marketing Effort</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Cal.year} Budget</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Cal.year} Actual Cost</strong></td>
			</tr>
			{foreach item=item name=item from=$Item}
			{if $item.Items neq ""}
			<tr style="background-color:#f3f3f3;">
				<td colspan="3" align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$item.cat_name}</strong></td>
			</tr>
			{foreach item=item1 name=item1 from=$item.Items}
			<tr style="background-color:{cycle values='#ffffff,#ffffff'};">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">{$item1.title}</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">$ {$item1.amount|number_format:2:".":","}</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">$ {$item1.actual_amount|number_format:2:".":","}</td>
			</tr>
			{/foreach}
			{/if}
			{/foreach}
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Gross Sales</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Cal.gsales|number_format:2:".":","}</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Cal.gsales|number_format:2:".":","}</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Total</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Cal.amount|number_format:2:".":","}</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Cal.actualamount|number_format:2:".":","}</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>% of Gross Sales</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Cal.per} %</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Cal.actper} %</strong></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function Share(id)
{
	tb_show('Share Calendar','sharecalform.php?height=330&width=640&id='+id);
	return;
}
</script>
{/literal}