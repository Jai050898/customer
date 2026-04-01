		<div>
			<div style="height:10px;"></div>
			<h1>Monitoring Budget</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:8%">&nbsp;</td>
				{php} for($i=1;$i<=12;$i++) { {/php}
				<td  align="center" valign="middle" bgcolor="#CCFFCC" style="font-size:13px; width:7%"><strong>{php} echo date("M",mktime(0, 0, 0, $i, 1,   1)); {/php}</strong></td>
				{php} } {/php}
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%">&nbsp;</td>
			</tr>
			{foreach item=Calitem name=Calitem from=$Cal}
			<tr height="25">
				<td  align="left" valign="middle" bgcolor="#DCE6F2" style="font-size:13px; width:8%"><strong>{$Calitem.year}</strong></td>
				{foreach item=item name=item from=$Calitem.Items}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%">${$item.grosssales|number_format:2:".":","}</td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%"><strong>${$Calitem.amount|number_format:2:".":","}</strong></td>
			</tr>
			{foreachelse}
			<tr height="25">
				<td  align="center" valign="middle" bgcolor="#FFFFFF" colspan="14">No Records Found</td>
			</tr>
			{/foreach}
			{if $Cal|@count gt '0'}
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>High</strong></td>
				{foreach item=item name=item from=$MaxTotals}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$item|number_format:2:".":","}</strong></td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$MaxTotals1|number_format:2:".":","}</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Low</strong></td>
				{foreach item=item name=item from=$MinTotals}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$item|number_format:2:".":","}</strong></td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$MinTotals1|number_format:2:".":","}</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Average</strong></td>
				{foreach item=item name=item from=$AvgTotals}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$item|number_format:2:".":","}</strong></td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$AvgTotals1|number_format:2:".":","}</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Median</strong></td>
				{foreach item=item name=item from=$MedTotals}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$item|number_format:2:".":","}</strong></td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>${$MedTotals1|number_format:2:".":","}</strong></td>
			</tr>
			{foreach item=CalGoalitem name=CalGoalitem from=$CalGoals}
			<tr height="25" style="color:#993300;">
				<td  align="left" valign="middle" bgcolor="#DCE6F2" style="font-size:13px; width:8%"><strong>{$CalGoalitem.year}</strong></td>
				{foreach item=Gitem name=Gitem from=$CalGoalitem.Items}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%">${$Gitem.goalsales|number_format:2:".":","}</td>
				{/foreach}
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%"><strong>${$CalGoalitem.amount|number_format:2:".":","}</strong></td>
			</tr>
			{/foreach}
			{/if}
			</table>
			</div>
		<div class="clear"></div>

		</div>
