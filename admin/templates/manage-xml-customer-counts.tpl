{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
{literal}
<style>
.admin_table th {
    border-bottom: 1px solid #DDDDDD;
    color: #FFFFFF;
    font-size: 13px;
    padding: 6px 0 6px 6px;
}
</style>
{/literal}
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
                                    <li>Manage Counts By Customer Visits</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Counts By Customer Visits</div>
                        </div>
                        <div class="ad_textsp">
                
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="user_id" value="{$smarty.request.user_id}" />         
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                   <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        
                                              {if $Users|@count gt 0}
                                                    <tr>
                                                        <td colspan="2">
                                                          <table width="100%" cellspacing="0" cellpadding="5">
                                                              <tr>
                                                                  <td  align="left" bgcolor="#854141">
                                                                          <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                          <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                          <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
                                                                  </td>
                                                                  <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                              </tr>
                                                          </table>
                                                        </td>
                                                    </tr>
                                              {/if}
                        
                                            <tr>
                                                <td align="left" valign="top" colspan="2">
                                                  <table width="100%" cellpadding="0" cellspacing="1" class="admin_table">
                                                        <tr bgcolor="#854141">
                                                                <th  width="7%" align="left"> All Visits Total (Last 6 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (6-12 Months)</th>
                                                                <th width="7%" align="left"> All Visits Total (12-18 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (18-24 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (24-36 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (36-48 Months)</th>
                                                        </tr>
                                                        <tr>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"> {$countsAry.6MonthTotal}</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$countsAry.6to12MonthTotal}</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$countsAry.12to18MonthTotal}</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$countsAry.18to24MonthTotal}</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000; ">{$countsAry.24to36MonthTotal}</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$countsAry.36to48MonthTotal}</td>
                                                        </tr>
                                                  </table>
                                                </td>
                                            </tr>
                        
                        <tr>
                            <td colspan="2">
                                  <div class="pagecount_info_divbox" align="right">
                                  <br/> <br/>
                                      <b>Showing Records {$records_from} to {$records_to} of {$total}</b>
                                      <br/> <br/>
                                      <div class="clr"></div>
                                  </div>
                            </td>
                        </tr> 
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" cellpadding="0" cellspacing="1" class="admin_table">
                                        <tr bgcolor="#854141">
                                                <th width="7%" align="left">S. No</th>
                                                <th width="7%" align="left"><a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>
                                                <th width="7%" align="left"> Visits Total (Last 6 Months)</th>
                                                <th width="7%" align="left"> Visits Total (6-12 Months)</th>
                                                <th width="7%" align="left"> Visits Total (12-18 Months)</th>
                                                <th width="7%" align="left"> Visits Total (18-24 Months)</th>
                                                <th width="7%" align="left"> Visits Total (24-36 Months)</th>
                                                <th width="7%" align="left"> Visits Total (36-48 Months)</th>
                                        </tr>
                                        {foreach item=item name=item from=$customer}
                                           
                                            <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                                <td align="left">{$smarty.foreach.item.index+1}</td>
                                                <td align="left">{$item.fullname}</td>
                                                <td align="left"> {$item.6MonthTotal}</td>
                                                <td align="left">{$item.6to12MonthTotal}</td>
                                                <td align="left">{$item.12to18MonthTotal}</td>
                                                <td align="left">{$item.18to24MonthTotal}</td>
                                                <td align="left">{$item.24to36MonthTotal}</td>
                                                <td align="left">{$item.36to48MonthTotal}</td>
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7" align="center"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        {/foreach}
                                  </table>
                                </td>
                        </tr>
                        {if $customer|@count gt 0}
                        <tr>
                            <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                              <tr>
                              <td  align="left" bgcolor="#854141">&nbsp;		</td>
                              <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                              </tr>
                              </table>
                            </td>
                        </tr>
                      {/if}
                    </table>
                </form>
                <!--end of middle part -->
                              <!--end of right part -->
                                <div class="clr"></div>
                        </div>
                      <!--end of contentpane -->
                      </div>
                    </div>
		</div>
	</div>
</div>

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
