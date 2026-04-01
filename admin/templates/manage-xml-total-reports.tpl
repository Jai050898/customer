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
                                    <li>Manage Total Reports</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Total Reports</div>
                        </div>
                        <div class="ad_textsp">
                            <form id="ManageMMSCustomers" class="form" method="post" name="ManageMMSCustomers">
                   
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5">
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

                        
                        
                                              <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                        <tr>
                                                <th width="7%" align="left">S. No</th>
                                                <th width="7%" align="left">Year</th>
                                                <th width="7%" align="left">Last Time Visited</th>
                                                <th width="7%" align="left">Last Time Visited Difference</th>
                                                <th width="7%" align="left">Total Customers who visited</th>
                                                <th width="7%" align="left">Total Cust who Visited Diff</th>
                                                <th width="7%" align="left">First time visit</th>
                                                <th width="7%" align="left">First Time Visit Difference</th>
                                                </tr>
                                        {foreach item=item name=item from=$yearArr}
                                        			 <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                            <tr>
                                                <td align="left">{$smarty.foreach.item.index+1}</td>
                                                <td align="left">{$item.year}</td>
                                                <td align="left">{$item.lastVisited}</td>
                                                <td align="left">{$item.lastVisitedDiff}</td>
                                                <td align="left">{$item.totalVisitedCustomers}</td>
                                                <td align="left">{$item.totalVisitedCustomersDiff}</td>
                                                <td align="left"> {$item.total}</td>
                                                <td align="left">{$item.diff}</td>
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        {/foreach}
                                   </table>
                                                  </td>
                                              </tr>
                                              {if $Users|@count gt 0}
                                                <tr>
                                                    <td colspan="2">
                                                        <table width="100%" cellspacing="0" cellpadding="5">
                                                                <tr>
                                                                    <td>
                                                                            <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                            <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                            <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
                                                                    </td>
                                                                    <td><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
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
