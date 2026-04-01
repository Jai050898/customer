{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div>
			<div style="height:10px;"></div>

			<span style="float:right;">&nbsp;</span>
			<h1>Customer Data Center</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Title</th>
										<th bgcolor="#336699" style="color:#fff;">Total</th>
										<th bgcolor="#336699" style="color:#fff;">Last Year</th>
										<th bgcolor="#336699" style="color:#fff;">Last 3 Months</th>
										<th bgcolor="#336699" style="color:#fff;">Last Month</th>
									</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ctot}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$ltot}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$l3mtot}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lmtot}</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg Customers Visits</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgcust} times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgcust} times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$l3mavgcust} times</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lmavgcust} times</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. Length of time since last visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$avgdays} days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lavgdays} days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$l3mavgdays} days</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$lmavgdays} days</td>
										</tr>
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">Avg. $ per visit</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$avgcost}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$lavgcost}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$l3mavgcost}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">$ {$lmavgcost}</td>
										</tr>
										
								  </table>
								  <div style="height:10px; clear:both;"></div>
			<h1>Customer Data Year Wise</h1>
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">Year</th>
										<th bgcolor="#336699" style="color:#fff;">First Visit Customers</th>
										<th bgcolor="#336699" style="color:#fff;">Last Visit Customers</th>
									</tr>
									{foreach item=item name=item from=$res}
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.year}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.fvisits}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.lvisits}</td>
										</tr>
									{/foreach}	
								  </table>
								  <div style="height:10px; clear:both;"></div>
			</div>
		{ * include file="rightbar.tpl"* }
		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
		});	
</script>
{/literal}