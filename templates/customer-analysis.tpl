{include file="header.tpl"}
{literal}
<style type="text/css">
    .month-tab-market table td {
        font-weight: normal;
    }
</style>
{/literal}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Analysis</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#6699cc" style="border:1px solid #6699cc">
                    <tr>
                    <th width="9%" height="30"  align="left" valign="top">
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                            </tr>
                            <tr>
                              <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Gross Customers</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Repair Orders</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Vehicles</th>
                            </tr>
                            
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Labor Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Parts Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Discounts</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Net Sales</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(Prior 2 Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts to Labor Ratio&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Disc/Adj</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts Sales as % of Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Labor Sales as a % of Sales</th>
                            </tr>

                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Discount Per RO</th>
                            </tr>

                            </table>
                    </th>

                    <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        {foreach item=item name=item from=$allArray.years}
                                        <td height="30" align="center" valign="middle" bgcolor="#336699" style="color:#fff;">{$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossCustomers}
                                            <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:0:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossRos}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:0:".":","}</td>
                                        {/foreach}
                                    </tr>


                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossVehicles}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:0:".":","}</td>    
                                        {/foreach}
                                    </tr>
                                    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grosslaborSales}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grosspartsSales}
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossSales}
                                            <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                          {/foreach}
                                    </tr>    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.discount}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.netSale}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                     <tr>{foreach item=item name=item from=$allArray.comparitiveGrossSale}
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.variance}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{if $item neq 0.00}{$item|number_format:2:".":","}{/if}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.averageROB4Discount}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.averageROAfterDiscount}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.PartsToLaborRatio}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                     <tr>
                                        {foreach item=item name=item from=$allArray.managercharges}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$ {$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>

                                    <tr>
                                        {foreach item=item name=item from=$allArray.percentagePartsSales}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:2:".":","}%</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.percentageLaborSales}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item|number_format:2:".":","}%</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.AverageDiscountRO}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item|number_format:2:".":","}</td>
                                        {/foreach}
                                    </tr>
                                           
                                            
                                            
                                  </table>
                            </th>
                    </tr>
            </table>
            <div style="height:10px; clear:both;"></div>
        </div>
        {include file="rightbar.tpl"}
        <div class="clear"></div>
    </div>
</div>
{include file="footer.tpl"}
