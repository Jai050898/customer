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
                            <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Labor Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Parts Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total HazardWaste Amount</th>
                                    </tr>

                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Shopsuplies Amount</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Tax Amount</th>
                                    </tr>
                                    <tr>
                                     <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">&nbsp;</th>
                                    </tr>
                                    
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Gross Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Discount Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Net Sales</th>
                                    </tr>
                                    </table>
                            </th>
                            <th width="9%" height="30"  align="left" valign="top">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                        <tr>
                                            {foreach item=item name=item from=$years}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>
                                            {/foreach}
                                        </tr>
                                        
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.laborSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.partsSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.hazardSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.shopSupplySum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.taxSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;" colspan="{$years|@count}">&nbsp;</td> 
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.grossSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.discountSum|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                        <tr>
                                            {foreach item=item name=item from=$roCalculationsArray}
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">${$item.NetSales|number_format:2:".":","}</td> 
                                            {/foreach}    
                                        </tr>
                                  </table>
                            </th>
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
