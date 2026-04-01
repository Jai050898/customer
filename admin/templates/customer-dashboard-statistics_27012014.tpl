{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
								  <li>Customer Dashboard</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Customer Dashboard</div>
				  </div>
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
           
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$ctot|number_format:0:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Vehicles</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$vtot|number_format:0:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Orders</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$rotot|number_format:0:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Order Transaction Details</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$ro_transactio_tot|number_format:0:".":","}</td>
                </tr>
            </table>
            <br /><br />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                {if $sctot neq 0} 
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Schedules</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$sctot|number_format:0:".":","}</td>
                </tr>
                {/if}
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Customer Lifetime Value</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >$ {$avgCustLifeVal|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Total average year of customer visits in Last 12 Months</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$last12monthsavgCustVisits}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Total average years of all time visitors</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$avgCustVisits}</td>
                </tr>
            </table>
            <br /><br />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Variance</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$avgVariance|number_format:2:".":","} %</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >${$averageYearTotal|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$highestYear} (${$highestYearTotal|number_format:2:".":","})</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$lowestYear} (${$lowestYearTotal|number_format:2:".":","})</td>
                </tr>
            </table>
            <div style="height:15px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;"><a href="{$siteurl}/admin/customer-xml-monthwise-sales-variance.php" title="Monthwise Sales Variance">Year</a></th>
                    <th bgcolor="#854141" style="color:#fff;">Cust's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">RO's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">Vehi's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">CY 2 PY Y2D (IN $'s)</th>
                    <th bgcolor="#854141" style="color:#fff;">CY 2 PY Y2D (IN %'s)</th>
                    <th bgcolor="#854141" style="color:#fff;">Total Gross Sales</th>
                    <th bgcolor="#854141" style="color:#fff;">Comparative Gross Sales(CY vs PY)</th>
                    <th bgcolor="#854141" style="color:#fff;">Variance</th>
                </tr>
                {foreach item=item name=item from=$dataArray}
                    {if $item.custTotal neq 0}
                        <tr>
                            <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/admin/customer-monthwise-data.php?user_id={$smarty.request.user_id}&y={$item.Year}" title="Monthwise Report">{$item.Year}</a> 
                             <a href="{$siteurl}/admin/customer-weekwise-data.php?user_id={$smarty.request.user_id}&y={$item.Year}" title="Weekwise Report"> (W)</a></td>
                            <td bgcolor="#f9f9f7" style="color:{$item.custTotalClass};text-align: right;" >{$item.custTotal|number_format:0:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.custVarianceClass};text-align: right;" >{$item.custVariance|string_format:"%.2f"} %</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.roTotalClass};text-align: right;" >{$item.roTotal|number_format:0:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.roVarianceClass};text-align: right;" >{$item.roVariance|string_format:"%.2f"} %</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.vehicleTotalClass};text-align: right;" >{$item.vehicleTotal|number_format:0:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.vehicleVarianceClass};text-align: right;" >{$item.vehicleVariance|string_format:"%.2f"} %</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.grossSaleCy2PyClass};text-align: right;" >${$item.grossSaleCy2Py|number_format:2:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.grossSaleCy2PyPercentageClass};text-align: right;" >{$item.grossSaleCy2PyPercentage|string_format:"%.2f"} %</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.grossSaleClass};text-align: right;" >${$item.grossSale|number_format:2:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.comparativeGrossSaleClass};text-align: right;" >{if $item.absComparativeGrossSaleExp eq '-'} - {/if}${$item.comparativeGrossSale|number_format:2:".":","}</td>
                            <td bgcolor="#f9f9f7" style="color:{$item.varianceClass};text-align: right;" >{$item.variance|string_format:"%.2f"}%</td>
                            <!-- <td bgcolor="#f9f9f7" style="color:{$item.varianceClass};">&nbsp;</td> -->
                        </tr>
                    {/if}
                 {foreachelse}
                    <tr>
                        <th bgcolor="#f9f9f7" style="color:#854141;" colspan="5"><font color="#854141"><strong>No Customer Data Found</strong></font></th>
                    </tr>
                {/foreach}
            </table>
            <div style="height:10px; clear:both;"></div>
        </div>
        { * include file="rightbar.tpl"* }
        <div class="clear"></div>
    </div>
</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
