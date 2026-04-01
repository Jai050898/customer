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
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$ctot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Vehicles</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$vtot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Orders</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$rotot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Order Transaction Details</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$ro_transactio_tot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Schedules</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">{$sctot}</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Customer Lifetime Value</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">$ {$avgCustLifeVal|number_format:2}</td>
                </tr>
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