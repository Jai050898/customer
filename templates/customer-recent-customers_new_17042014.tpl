{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>New Customers Data</h1>
                <form id="ManageCustomers" class="form"  method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                        <!-- <tr>
                          <td  colspan="8">
                            <div class="search_divbox">
                                <select name="days" id="days" class="select" style="padding: 2px;">
                                    <option value="Yesterday">yesterday</option>
                                    <option value="3 DAYS" {if $smarty.request.days eq "3 DAYS"} selected="selected"{/if}>3 DAYS</option>
                                    <option value="5 DAYS" {if $smarty.request.days eq "5 DAYS"} selected="selected"{/if}>5 DAYS</option>
                                </select>
                                
                                
                                <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                <div class="clr"></div>
                            </div>
                          </td>
                        </tr> -->
                       
                              <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                               <tr>
                            <td colspan="8" id="errorDiv2" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                               </tr>
                               <tr>
                            <td align="left" valign="center" colspan="8">
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;
                                <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput"  style="height:20px;"/>&nbsp;&nbsp;&nbsp;
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </div></td>
			</tr>
			<tr>
                    </tr>   
			<tr>
                                <td colspan="8">
                                      <div class="pagecount_info_divbox">
                                          Showing Records {$records_from} to {$records_to} of {$total}
                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> 
                            
                                    <tr>
                                            <th bgcolor="#336699" style="color:#fff;">
                                            <a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>    
                                            <th bgcolor="#336699" style="color:#fff;">
                                            <a href="javascript: setClientSort('ro_id','{$sortioption}',document.ManageCustomers);">Invoice No.</a></th>
                                            <th bgcolor="#336699" style="color:#fff;">Gross Sales</th>
                                            <th bgcolor="#336699" style="color:#fff;">Discount</th>
                                            <th bgcolor="#336699" style="color:#fff;">Net Sale</th>
                                            <th bgcolor="#336699" style="color:#fff;">Source</th>
                                            <th bgcolor="#336699" style="color:#fff;">Referral</th>
                                            <th bgcolor="#336699" style="color:#fff;">Action</th>

                                    </tr>
                                    {foreach item=item name=item from=$allArray}
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$item.fullname}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$item.ro_id}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.gross}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> ${$item.discount}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.netSale}</td>
                                            {if $item.source eq '' && $item.referral eq ''}
                                                <td colspan='3' bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="javascript: ShowSR({$item.id}, {$item.ro_id}, {$item.company_id}, {$item.cust_id});">Add Data</a>
                                                </td>
                                            {else}
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">
                                                <a href="{$siteurl}/customer-source-referral.php?source={$item.source}">{$item.source}</a></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.referral}</td>
                                                <td>&nbsp;&nbsp;<a href="javascript: ShowSR({$item.id}, {$item.ro_id}, {$item.company_id}, {$item.cust_id});">Edit</a></td>
                                            {/if}
                                        </tr>
                                    {foreachelse}	                                  
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: center;" colspan="9"><font color="#FF0000" ><strong>No Records Found</strong></font></td>    
                                        </tr>
                                     {/foreach}
                                     
                              </table>
                     
                 
                    {if $allArray|@count gt 0}
                        <tr>
                            <td colspan="8" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                              <tr>
                              <td  align="left" bgcolor="#336699">&nbsp;</td>
                              <td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                              </tr>
                              </table>
                            </td>
                        </tr>
                      {/if}
                </form>
                <div class="clear"></div>
            </div>
           
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>

{literal}
<script language="javascript" type="text/javascript">	
function ShowSR(id,ro_id,company_id, cust_id) {
    tb_show('Recent Customers','newcustomers.php?height=200&width=500&id='+id+'&ro_id='+ro_id+'&company_id='+company_id+'&cust_id='+cust_id);
    return;
}
	
</script>
{/literal}
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

