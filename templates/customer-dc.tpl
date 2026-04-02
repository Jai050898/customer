{include file="header.tpl"}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <div><div style="float:left;"><h1>Customer Data Center</h1></div><div style="float:right;font-weight:bold;"><a href="{$siteurl}/new-customers.php?fdate={$todayDate}&tdate={$todayDate}">New Customer Report</a></div></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
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
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Total Emails</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><a href="{$siteurl}/last-visited-customer-emails.php">{$LastVisitedCustEmailCnt|number_format:0:".":","}</a></td>
                </tr>
            </table>
            <br /><br />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
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
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
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
            <div style="min-height: 30px; padding: 10px 10px 10px 30px; border: 1px solid rgb(102, 153, 204);">
                <h2 style="font-weight:bold;">CY to PY Year-wise Calculations:</h2> <br>
                <div style="background:#FF0000;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">If CY value is  Less then PY</div></div>

            <div style="background:#2090FF;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">If CY value is Greater than 10% of PY</div></div>  

            <div style="background:#000000;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">Normal value changes</div></div>

            </div>
            <br>

            
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;"><a href="{$siteurl}/customer-monthwise-sales-variance.php" title="Monthwise Sales Variance">Year</a></th>
                    <th bgcolor="#336699" style="color:#fff;">Cust's</th>
                    <th bgcolor="#336699" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#336699" style="color:#fff;">RO's</th>
                    <th bgcolor="#336699" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#336699" style="color:#fff;">Vehi's</th>
                    <th bgcolor="#336699" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#336699" style="color:#fff;">CY 2 PY Y2D (IN $'s)</th>
                    <th bgcolor="#336699" style="color:#fff;">CY 2 PY Y2D (IN %'s)</th>
                    <th bgcolor="#336699" style="color:#fff;">Total Gross Sales</th>
                    <th bgcolor="#336699" style="color:#fff;">Comparative Gross Sales(CY vs PY)</th>
                    <th bgcolor="#336699" style="color:#fff;">Variance</th>
                </tr>
                {foreach item=item name=item from=$dataArray}
                    {if $item.custTotal neq 0}
                        <tr>
                            <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/customer-monthwise-data.php?y={$item.Year}" title="Monthwise Report">{$item.Year}</a>  <a href="{$siteurl}/customer-weekwise-data.php?y={$item.Year}" title="Weekwise Report"> (W)</a></td>
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
                        <th bgcolor="#f9f9f7" style="color:#FF0000;" colspan="5"><font color="#FF0000"><strong>No Customer Data Found</strong></font></th>
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
