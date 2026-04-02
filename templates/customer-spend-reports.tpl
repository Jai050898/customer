{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Customer Spend Reports</h1>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                        <td align="left" valign="top" colspan="2">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                <tr>
                            <td align="left" valign="center" colspan="8">
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </div></td>
			</tr>	
                            </table>
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
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                 
                                      <tr>
                                                <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>
                                                <th bgcolor="#336699" style="color:#fff;">First Visit Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Second Visit Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Third Visit Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Fourth Visit Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Fifth Visit Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Total Visits Amount</th>
                                                <th bgcolor="#336699" style="color:#fff;">Average RO</th>

                                        </tr>
                                        {foreach item=item name=item from=$customer}
                                            <tr>
                                        
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                                {foreach item=item1 name=item1 from=$item.VisitArray}
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item1.grossSales eq "-1"}&nbsp;{else}${$item1.grossSales|number_format:2:".":","}{/if}</td>
                                                {/foreach}
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item.grossTotal eq ""}{'-N-A-'}{else}${$item.grossTotal|number_format:2:".":","}{/if}</td>
                                                
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.avgRO|number_format:2:".":","}</td>
                                            
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="9"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        {/foreach}
                                  </table>
                                </td>
                        </tr>
                        {if $customer|@count gt 0}
                        <tr>
                            <td colspan="9" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
            { include file="rightbar.tpl" }
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#fdate").datepicker();
	$("#tdate").datepicker();
    });	
</script>
{/literal}
