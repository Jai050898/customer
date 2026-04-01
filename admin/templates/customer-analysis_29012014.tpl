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
						<div id="admin_head">Customer Analysis</div>
				  </div>
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
          
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#754141">
                    <tr>
                    <th width="9%" height="30"  align="left" valign="top">
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Data</th>
                            </tr>
                            <tr>
                              <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Gross Customers</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Repair Orders</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Vehicles</th>
                            </tr>
                            
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Labor Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Parts Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Discounts</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Net Sales</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(Prior 2 Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Parts to Labor Ratio&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Parts Sales as % of Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Labor Sales as a % of Sales</th>
                            </tr>

                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Discount Per RO</th>
                            </tr>

                            </table>
                    </th>

                    <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        {foreach item=item name=item from=$allArray.years}
                                        <td height="30" align="center" valign="middle" bgcolor="#854141" style="color:#fff;">{$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossCustomers|number_format:0:".":","}
                                            <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossRos|number_format:0:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>
                                        {/foreach}
                                    </tr>


                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossVehicles|number_format:0:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>    
                                        {/foreach}
                                    </tr>
                                    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grosslaborSales|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grosspartsSales|number_format:2:".":","}
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.grossSales|number_format:2:".":","}
                                            <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                          {/foreach}
                                    </tr>    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.discount|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.netSale|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                     <tr>{foreach item=item name=item from=$allArray.comparitiveGrossSale|number_format:2:".":","}
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    
                                    <tr>
                                        {foreach item=item name=item from=$allArray.variance|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{if $item neq 0.00}{$item}{/if}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.averageROB4Discount|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.averageROAfterDiscount|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.PartsToLaborRatio|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>
                                        {/foreach}
                                    </tr>

                                    <tr>
                                        {foreach item=item name=item from=$allArray.percentagePartsSales|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item}%</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.percentageLaborSales|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">{$item}%</td>
                                        {/foreach}
                                    </tr>
                                    <tr>
                                        {foreach item=item name=item from=$allArray.AverageDiscountRO|number_format:2:".":","}
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
                                        {/foreach}
                                    </tr>
                                           
                                            
                                            
                                  </table>
                            </th>
                    </tr>
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
