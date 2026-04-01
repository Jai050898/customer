{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Manage Customers</h1>
            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                    <tr>
                            <td height="10" colspan="2"></td>
                    </tr>
                    <tr>
                      <td  colspan="2">
                            <div class="search_divbox">
                                    <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
                                    <input type="image" src="images/go_but.png" onclick="document.ManageCustomers.submit();" style="vertical-align:bottom;"/> 
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
                                        <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('fname','{$sortioption}',document.ManageCustomers);">Customer Name</a> {if $smarty.request.sortby eq 'fname'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                        <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('city','{$sortioption}',document.ManageCustomers);">City </a> {if $smarty.request.sortby eq 'city'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                        <th bgcolor="#336699" style="color:#fff;">State</th>
                                        <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Vcount','{$sortioption}',document.ManageCustomers);">Total Vehicles </a> {if $smarty.request.sortby eq 'Vcount'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                        <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Rcount','{$sortioption}',document.ManageCustomers);">Total ROs </a> {if $smarty.request.sortby eq 'Rcount'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                        <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('distance','{$sortioption}',document.ManageCustomers);">Distance (Miles)</a></th>
                                </tr>
                                {foreach item=item name=item from=$Users}
                                    <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fname} {$item.lname}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.city}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.state}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/manage-vehicles.php?user_id={$item.cust_id}">{$item.Vcount}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/manage-ros.php?user_id={$item.cust_id}">{$item.Rcount}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item.distance neq ''}{$item.distance|string_format:"%.2f"}{else}-N/A-{/if}</td>
                                    </tr>
                                {foreachelse}
                                    <tr>
                                        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No MIS Customers Added</strong></font></th>
                                    </tr>
                                {/foreach}
                          </table>
                        </td>
                    </tr>
                    {if $Users|@count gt 0}
                        <tr>
                            <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                            <tr>
                            <td  align="left" bgcolor="#336699">&nbsp;		</td>
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
