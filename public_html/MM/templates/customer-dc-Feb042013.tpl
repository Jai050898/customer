{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Center</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Title</th>
										<th bgcolor="#336699" style="color:#fff;">Total</th>
										<th bgcolor="#336699" style="color:#fff;">Last Year</th>
									</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ctot}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ltot}</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg Customers Visits</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgcust} times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgcust} times</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. Length of time since last visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgdays} days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgdays} days</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. $ per visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$avgcost}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$lavgcost}</td>
										</tr>
										
								  </table>
					<div class="clear"></div>
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}