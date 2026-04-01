{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Manage Zipcode Customers</h1>
            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                    <tr>
                        <td height="10" colspan="2"></td>
                    </tr>
                    <tr>
                      <td  colspan="2">
                        <div class="search_divbox" style="color:#fff;">
                                <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" style="width:150px;"/>
                                <input type="image" src="images/go_but.png" onclick="document.ManageCustomers.submit();" style="vertical-align:bottom;" /> 
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
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('zip','{$sortioption}',document.ManageCustomers);">Zip Code</a> {if $smarty.request.sortby eq 'zip'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('city','{$sortioption}',document.ManageCustomers);">City</a> {if $smarty.request.sortby eq 'city'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Ccount','{$sortioption}',document.ManageCustomers);">No Of Customers</a></th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent in {$currentYear}</th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent Lifetime</th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent Lifetime(Only visited during this Year)</th>
                                </tr>
                                {foreach item=item name=item from=$Users}
                                    {if $item.zip neq ""}
                                    <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.zip}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.city}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/manage-customers.php?zip={$item.zip}"> {$item.Ccount}</a></td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.totalSpentYear|number_format:2:".":","}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.totalSpentLifetime|number_format:2:".":","}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.totalCustSpentVisitedThisYear|number_format:2:".":","}</td>
                                    </tr>
                                    {else}
                                        <tr>
                                            <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                          </tr>
                                    {/if}
                                {foreachelse}
                                    <tr>
                                      <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
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