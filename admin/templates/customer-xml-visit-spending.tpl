{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
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
								  <li>Customer visit Spending</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Customer visit Spending</div>
                                    </div>
                                     <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                                    <input type="hidden" name="user_id" id="user_id" value="{$smarty.request.user_id}" />
                                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                                    <table  width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#ffffff">
                                        <tr>
                                                <td height="10" colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <td align="left" valign="top" colspan="2">
                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                                                <tr>
                                            <td align="left" valign="center" colspan="8">
                                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;<input type="image" src="../images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </div></td>
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
                                                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff"  class="tableinnercontent">

                                                        <tr bgcolor="#854141" style="color:#ffffff;">
                                                            <th>S. No</th>
                                                            <th><a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>
                                                            <th>First Visit Amount</th>
                                                            <th>Second Visit Amount</th>
                                                            <th>Third Visit Amount</th>
                                                            <th>Fourth Visit Amount</th>
                                                            <th>Fifth Visit Amount</th>
                                                            <th>Total Visits Amount</th>
                                                            <th>Average RO</th>

                                                        </tr>
                                                        {foreach item=item name=item from=$customer}
                                                            <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">

                                                                <td>{$smarty.foreach.item.index+1}</td>
                                                                <td><a href="{$siteurl}/admin/view-xml-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                                                
                                                                {foreach item=item1 name=item1 from=$item.VisitArray}
                                                                <td>{if $item1.grossSales eq "-1"}&nbsp;{else}${$item1.grossSales|number_format:2:".":","}{/if}</td>
                                                                {/foreach}
                                                                <td>{if $item.grossTotal eq ""}{'-N-A-'}{else}${$item.grossTotal|number_format:2:".":","}{/if}</td>

                                                                <td>${$item.avgRO|number_format:2:".":","}</td>

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
                                            <td  align="left" bgcolor="#854141">&nbsp;		</td>
                                            <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                            </tr>
                                            </table>
                                            </td>
                                        </tr>
                                    {/if}
                                    </table>
                                </form>
                             </div>
			</div>
		</div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#fdate").datepicker();
	$("#tdate").datepicker();
    });	
</script>
{/literal}
