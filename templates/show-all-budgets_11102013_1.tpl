<div>
			<div style="height:10px;"></div>
			<h1>Marketing Budget</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			{if $Cal|@count gt '0'}
				<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr>
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Branding / Marketing Effort</strong></td>
				{foreach item=Calitem name=Calitem from=$Cal}
				<td colspan="2"  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">
				<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
				<tr>
				<td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Calitem.year}</strong></td>
				<tr>
				<td style="width:50%; font-size:13px;" align="left" valign="middle" bgcolor="#FFFFFF"><strong> Budget</strong></td>
				<td style="width:50%; font-size:13px;" align="left" valign="middle" bgcolor="#FFFFFF"><strong>Actual Cost</strong></td>
				</tr>
				</table>
				</td>
				{foreachelse}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				{/foreach}
			</tr>
			{foreach item=item name=item from=$Item}
			{* if $item.Items neq "" *}
			<tr style="background-color:#f3f3f3;">
				<td colspan="{$colspan}" align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$item.cat_name}</strong></td>
			</tr>
			{foreach item=item1 name=item1 from=$item.Items}
			<tr style="background-color:{cycle values='#ffffff,#ffffff'};">
				<td align="left" valign="middle"  style="font-size:13px;">{$item1.title}</td>
			{foreach item=Citem name=Citem from=$item1.Arr}
				<td align="left" valign="middle" style="font-size:13px;">{if $Citem.amount neq ""}$ {$Citem.amount|number_format:2:".":","}{else} NA {/if}</td>
				<td align="left" valign="middle" style="font-size:13px;">{if $Citem.actual_amount neq ""}$ {$Citem.actual_amount|number_format:2:".":","}{else} NA {/if}</td>
			{foreachelse}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
			{/foreach}
			</tr>
			{foreachelse}
			<tr>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">{$item1.title}</td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td>NA</td>
			{foreachelse}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
			{/foreach}
			</tr>
			{/foreach}
			{* /if *}
			{/foreach}
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Calitem.gsales|number_format:2:".":","}</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Calitem.gsales|number_format:2:".":","}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Total</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Calitem.amount|number_format:2:".":","}</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>$ {$Calitem.actualamount|number_format:2:".":","}</strong></td>
			{/foreach}
			</tr>
			<tr style="background-color:#f3f3f3;">
			<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>% of Gross Sales</strong></td>
			{foreach item=Calitem name=Calitem from=$Cal}
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Calitem.per} %</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>{$Calitem.actper} %</strong></td>
			{/foreach}
			</tr>
			</table>
			{else}
				<div align="center">No Records Found!!</div>
			{/if}
			</div>
		<div class="clear"></div>

		</div>