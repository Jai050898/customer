{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Manage Spendings By Customer Visits</h1>
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
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                        <tr>
                                            <th bgcolor="#336699" style="color:#fff;">S.No</th>
                                            <th bgcolor="#336699" style="color:#fff;">Customer Spendings</th>
                                            <th bgcolor="#336699" style="color:#fff;"> (Last 12 Months)</th>
                                            <th bgcolor="#336699" style="color:#fff;"> For All Times</th>
                                                
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">1</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$0 - $250</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto250TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto250TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">2</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$251 - $500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">3</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$501 - $1000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">4</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$1001 - $1250</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1250TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1250TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">5</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$1251 - $1500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto1500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">6</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$1501 - $2000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto2000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto2000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">7</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$2001 - $2500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto2500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto2500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">8</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$2501 - $3000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto3000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto3000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">9</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$3001 - $3500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto3500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto3500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">10</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$3501 - $5000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto5000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto5000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">11</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$5001 - $7500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto7500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto7500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">12</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$7501 - $10000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto10000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto10000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">13</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$10001 - $12500</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto12500TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto12500TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">14</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$12501 - $15000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto15000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto15000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">15</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$15001 - $20000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto20000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto20000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">16</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$20001 - $25000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto25000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto25000TotalAll}</td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">17</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">$25001 - $30000</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto30000TotalYear}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$customer.upto30000TotalAll}</td>
                                        </tr>
                                  </table>
                                </td>
                        </tr>
                    </table>
                </form>
                <div class="clear"></div>
            </div>
            { include file="rightbar.tpl" }
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
