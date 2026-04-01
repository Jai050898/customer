{include file=header.tpl}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div>
			<div style="height:10px;"></div>
			<h1>Marketing Budget</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<table border="1" style="border:solid 1px #999999;" width="100%">
			<tr>
				<td><strong>Branding / Marketing Effort</strong></td>
				{foreach item=Calitem name=Calitem from=$Cal}
				<td colspan="2">
				<table border="1" style="border:solid 1px #999999;" width="100%">
				<tr>
				<td colspan="2" align="center"><strong>{$Calitem.year}</strong></td>
				<tr>
				<td style="width:50%"><strong> Budget</strong></td>
				<td><strong>Actual Cost</strong></td>
				</tr>
				</table>
				</td>
				{foreachelse}
				<td>NA</td>
				<td>NA</td>
				{/foreach}
			</tr>
			{foreach item=item name=item from=$Item}
			{* if $item.Items neq "" *}
			<tr style="background-color:#f3f3f3;">
				<td colspan="{$colspan}"><strong>{$item.cat_name}</strong></td>
			</tr>
			{foreach item=item1 name=item1 from=$item.Items}
			<tr style="background-color:{cycle values='#ffffff,#ffffff'};">
				<td>{$item1.title}</td>
			{foreach item=Citem name=Citem from=$item1.Arr}
				<td>{if $Citem.amount neq ""}$ {$Citem.amount}{else} NA {/if}</td>
				<td>{if $Citem.actual_amount neq ""}$ {$Citem.actual_amount}{else} NA {/if}</td>
			{foreachelse}
				<td>NA</td>
				<td>NA</td>
			{/foreach}
			</tr>
			{foreachelse}
			<tr>
				<td>{$item1.title}</td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td>NA</td>
				<td>NA</td>
			{foreachelse}
				<td>NA</td>
				<td>NA</td>
			{/foreach}
			</tr>
			{/foreach}
			{* /if *}
			{/foreach}
			<tr style="background-color:#f3f3f3;">
				<td><strong>Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>$ {$Calitem.gsales}</strong></td>
				<td><strong>$ {$Calitem.gsales}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td><strong>Total</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>$ {$Calitem.amount}</strong></td>
				<td><strong>$ {$Calitem.actualamount}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
			<td><strong>% of Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td><strong>{$Calitem.per} %</strong></td>
				<td><strong>{$Calitem.actper} %</strong></td>
			{/foreach}
			</tr>
			</table>
			</div>
		<div class="clear"></div>

		</div>
		{* include file="rightbar.tpl" *}
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