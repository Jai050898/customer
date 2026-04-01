{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Customer Best Returns</h1>
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
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;
                               <!-- <select name="source" id="source" class="searchinput" onchange="document.getElementById('ManageCustomers').submit();">
                                                                  <option value="">-- Select --</option>
                                                                  {foreach item=item name=item from=$source}
                                                                  <option value="{$item.source}" {if $smarty.request.source eq $item.source} selected="selected"{/if}>{$item.source|stripslashes}</option>
                                                                  {/foreach}
                                                          </select>&nbsp;&nbsp;-->
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </div></td>
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
                                            <th bgcolor="#336699" style="color:#fff;">Source</th>
                                            <th bgcolor="#336699" style="color:#fff;">Referral</th>
                                            <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>
                                            <th bgcolor="#336699" style="color:#fff;">First Visited Date</th>
                                            <th bgcolor="#336699" style="color:#fff;">Second Visited Date</th>
                                            <th bgcolor="#336699" style="color:#fff;">Third Visited Date</th>
                                            <th bgcolor="#336699" style="color:#fff;">First Visit RO</th>
                                            <th bgcolor="#336699" style="color:#fff;">Second Visit RO</th>
                                            <th bgcolor="#336699" style="color:#fff;">Third Visit RO</th>
                                            <th bgcolor="#336699" style="color:#fff;">Total Visits RO</th>
                                            <th bgcolor="#336699" style="color:#fff;">Total Visits</th>

                                        </tr>
                                        {foreach item=item name=item from=$customer}
                                       
                                       
                                            <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item.source neq ''}{$item.source}{else}{/if}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item.referral neq ''}{$item.referral}{else}{/if}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                                {foreach item=item1 name=item1 from=$item.VisitArray}
                                                
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item1.created_date eq "-1"}&nbsp;{else}{$item1.created_date|date_format}{/if}</td>
                                                {/foreach}
                                                
                                                {foreach item=item1 name=item1 from=$item.VisitArray}
                                                
                                                                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{if $item1.grossSales eq "-1"}&nbsp;{else}${$item1.grossSales|number_format:2:".":","}{/if}</td>
                                                {/foreach}
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.grossTotal|number_format:2:".":","}</td>
                                                
                                              
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.allTotal}</td>
                                            
                                            </tr>
                        
                                        {foreachelse}

                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="9"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        {/foreach}
                                            <tr>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong>Total Visits</strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong></strong></font></td>
						<td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong>${$Totalcounts|number_format:2:".":","}</strong></font></td>
			
						<td bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000"><strong>{$Totalgrosscount}</strong></font></td>
						</tr>

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
            <div class="clear"></div>
	</div>
</div>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>

{literal}
<script language="javascript" type="text/javascript">
    function validateFrom(){
        if($('#fdate').val() == ''){
            $('#errorDiv1').html('Please Select the From Date');
            return false;
        }
            
        if($('#tdate').val() == ''){
            $('#errorDiv1').html('Please Select the To Date');
            return false;
        }
    }
    $(document).ready(function() {	
	$("#fdate").datepicker();
	$("#tdate").datepicker();
    });
</script>
{/literal}

{include file="footer.tpl"}

