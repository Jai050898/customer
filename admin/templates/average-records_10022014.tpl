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
                                <div id="admin_head">Average Records</div>
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
                                                        <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Average Gross Customers</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Gross Sales</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                                                    </tr>
                                                    
                                                    </table>
                                                </th>
                                                <th width="20%" height="30"  align="left" valign="top">
                                                    <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                                    <tr>
                                                    {foreach item=item name=item from=$allArray.years}
                                                        <td height="30" align="center" valign="middle" bgcolor="#854141" style="color:#fff;">{$item}</td>
                                                    {/foreach}
                                                    </tr>
                                                    <tr>
                                                    {foreach item=item name=item from=$allArray.averagegrossCustomers|number_format:0:".":","}
                                                        <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">{$item}</td>
                                                    {/foreach}
                                                    </tr>
                                                    
                                                    <tr>
                                                    {foreach item=item name=item from=$allArray.averagegrossSales|number_format:2:".":","}
                                                    <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">${$item}</td>
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
                                                    
                                                    

                                                    </table>
                                                </th>
                                                </tr>
                                        </table>
                                    <div style="height:10px; clear:both;"></div>
                                    </div>
                                <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
