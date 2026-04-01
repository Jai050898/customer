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
                            <td colspan="9" id="errorDiv2" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                               </tr>
                               <tr>
                            <td align="left" valign="center" colspan="8">
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;
                           
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> &nbsp;&nbsp; &nbsp;<a href="{$siteurl}/export-lastvisits-data.php?fdate={$smarty.get.fdate}&tdate={$smarty.get.tdate}" target="_blank">Export Data</a></div></td>
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
                                        <th bgcolor="#336699" style="color:#fff;">S.No</th>
                                        <th bgcolor="#336699" style="color:#fff;">Customer ID</th>
                                            <th bgcolor="#336699" style="color:#fff;">
                                            <a href="javascript: setClientSort('fullname','{$sortioption}',document.ManageCustomers);">Name</a></th>    
                                                                        <th bgcolor="#336699" style="color:#fff;">Email</th>
                                            
                                            
                                            <th bgcolor="#336699" style="color:#fff;">last visite date</th>

                                    </tr>
                                    {foreach item=item name=item from=$allArray}
                                        <tr> <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                              <td bgcolor="#f9f9f7" style="color:#000000;">{$item.cust_id}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$item.fullname}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;">{$item.email}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.transaction_date}</td>

                                            
                                        </tr>
                                    {foreachelse}	                                  
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: center;" colspan="5"><font color="#FF0000" ><strong>No Records Found</strong></font></td>    
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

