{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>RO Calculations</h1>
                <form id="ManageCustomers" class="form" method="post" name="ManageCustomers">
                    <input type="hidden" name="hid_key" id="hid_key" value="" />
                    <input type="hidden" name="hid_type" id="hid_type" value="" />
                    <input type="hidden" name="hid_id" id="hid_id" value="" />
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Labor Sales</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.laborSum|number_format:2:".":","}</td> 
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Parts Sales</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.partsSum|number_format:2:".":","}</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total HazardWaste Amount</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.hazardSum|number_format:2:".":","}</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Shopsuplies Amount</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.shopSupplySum|number_format:2:".":","}</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Tax Amount</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.taxSum|number_format:2:".":","}</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">&nbsp;</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Gross Sales</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.grossSum|number_format:2:".":","}</td>
                                        </tr>
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Discount Sales</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.discountSum|number_format:2:".":","}</td>
                                        </tr>
                                            <tr>
                                                <th bgcolor="#336699" style="color:#fff;">Total Net Sales</th>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$roCalculationsArray.NetSales|number_format:2:".":","}</td>
                                            </tr>
                                  </table>
                                </td>
                        </tr>
                    </table>
                </form>
                <div class="clear"></div>
            </div>
            {* include file="rightbar.tpl" *}
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
