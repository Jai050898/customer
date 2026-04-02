{include file="header.tpl"}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
        <div style="height:10px;"></div>
        <span style="float:right;">&nbsp;</span>
        <h1>Manage Customers RO's</h1>
        <form id="ManageXMLCustomers" class="form" method="GET" name="ManageXMLCustomers">
            <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
            <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <td height="10" colspan="2"></td>
                </tr>
                <tr>
                  <td  colspan="2">
                        <div class="search_divbox">
                            <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
                            <input type="image" src="images/go_but.png" onclick="document.ManageXMLCustomers.submit();" style="vertical-align:bottom;" /> 
                            <div class="clr"></div>
                        </div>
                  </td>
                </tr>
                <tr>
                    <td colspan="2">
                          <div class="pagecount_info_divbox">
                              Showing Records {$records_from} to {$records_to} of {$total}
                              <div class="clr"></div>
                          </div>
                    </td>
                </tr> 
                <tr>
                    <td align="left" valign="top" colspan="2">
                        <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" class="tableinnercontent">
                            <tr>
                                <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('R.ro_id','{$sortioption}',document.ManageXMLCustomers);">RO Id</a> {if $smarty.request.sortby eq 'R.ro_id'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                <th bgcolor="#336699" style="color:#fff;">Full Name</th>
                                <th bgcolor="#336699" style="color:#fff;">Vehicle Name</th>
                                <th bgcolor="#336699" style="color:#fff;">Odometer In / OUT</th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('R.transaction_date','{$sortioption}',document.ManageXMLCustomers);">Transaction Date</a></th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('R.transactiontotal','{$sortioption}',document.ManageXMLCustomers);">Transaction Total</a></th>
                            </tr>
                            {foreach item=item name=item from=$Users}
                                <tr>
                                    <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                    <!-- <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/manage-ro-details.php?ro_id={$item.ro_id}">{$item.ro_id}</a></td> -->
                                    <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-repair-order.php?ro_id={$item.ro_id}">{$item.ro_id}</a></td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.fullname}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.name}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.odometerin} / {$item.odometerout}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.transaction_date|date_format:"%m/%d/%y"}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.transactiontotal|number_format:2:".":","}</td>
                                </tr>
                            {foreachelse}
                                <tr>
                                  <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Customers Ro's Added</strong></font></th>
                                </tr>
                            {/foreach}
                        </table>
                    </td>
                </tr>
                {if $Users|@count gt 0}
                    <tr>
                        <td colspan="7" bgcolor="#f9f9f7">
                            <table width="100%" cellspacing="0" cellpadding="5">
                                <tr>
                                    <td  align="left" bgcolor="#336699">&nbsp;</td>
                                    <td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                {/if}
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