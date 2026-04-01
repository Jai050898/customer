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
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$ctot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Vehicles</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$vtot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Orders</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$rotot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Order Transaction Details</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$ro_transactio_tot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Schedules</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$sctot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Customer Lifetime Value</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >$ {$avgCustLifeVal|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Variance</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >$ {$avgVariance|number_format:2:".":","}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Best Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$bestYear} (${$bestYearTotal|number_format:2:".":","})</td>
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
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Year</th>
                    <th bgcolor="#336699" style="color:#fff;">Customers</th>
                    <th bgcolor="#336699" style="color:#fff;">Repair Orders</th>
                    <th bgcolor="#336699" style="color:#fff;">Vehicles</th>
                    <th bgcolor="#336699" style="color:#fff;">Gross Sales</th>
                    <th bgcolor="#336699" style="color:#fff;">Variance</th>
                </tr>
                {foreach item=item name=item from=$dataArray}
                    <tr>
                        <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/customer-monthwise-data.php?y={$item.Year}" title="Monthwise Report">{$item.Year}</a>  <a href="{$siteurl}/customer-weekwise-data.php?y={$item.Year}" title="Weekwise Report"> (W)</a></td>
                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$item.custTotal}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$item.roTotal}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$item.vehicleTotal}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >${$item.grossSale|number_format:2:".":","}</td>
                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >{$item.variance|string_format:"%.2f"}%</td>
                        <!-- <td bgcolor="#f9f9f7" style="color:#000000;">&nbsp;</td> -->
                    </tr>
                 {foreachelse}
                    <tr>
                        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="5"><font color="#FF0000"><strong>No Customer Data Found</strong></font></th>
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