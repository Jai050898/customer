{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
                    {include file="right-bar.tpl"}
                    <div id="innerleft">
                      <div class="admin-rightpart">
                          <div class="admin-rightpart">
                        <div class="admin_topbgnav">
                          <div id="admin_bcrumb">
                            <ul>
                                    <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
                                    <li>Manage Reports By Customer Visits</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Reports By Customer Visits</div>
                        </div>
                        <div class="ad_textsp">
                
                    <div class="bodyleft">
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="user_id" value="{$smarty.request.user_id}" />         
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                                <td height="10" colspan="2"></td>
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
                                 <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                        <tr>
                                                <th width="7%" align="left">S. No</th>
                                                <th width="7%" align="left"><a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>
                                                <th width="7%" align="left"> Visits Total (Last 12 Months)</th>
                                                <th width="7%" align="left">Visits Total Life Time</th>
                                        </tr>
                                        {foreach item=item name=item from=$customer}
                                                            <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                                <td align="left">{$smarty.foreach.item.index+1}</td>
                                                <td align="left">{$item.fullname}</td>
                                                <td align="left"> {$item.yearTotal}</td>
                                                <td align="left">{$item.allTotal}</td>
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th width="100%" align="center" colspan="3"><font color="#FF0000"><strong>No Records Found</strong></font></th>
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
                <div class="clear"></div>
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
