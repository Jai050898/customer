{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <div>
                    <div style="float: left;"><h1>Export Customer Reports</h1></div>
                {if $customer|count gt 0}<!--<div style="float: right; font-size:15px;"><a href="{$siteurl}/exporttocsv.php?sdate={$smarty.request.sdate}&edate={$smarty.request.edate}&percentage={$smarty.request.percentage}&start_range={$smarty.request.start_range}&end_range={$smarty.request.end_range}" target="_blank" id="exportData">Export Rebate check Data</a></div>-->{/if}
                    <div style="clear:both;"></div>
                </div>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                        <tr>
                            <td colspan="9" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td  colspan="9">
                            <div class="search_divbox">
                               <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                <tr>
                                    <td align="right" valign="top" style="padding-left:5px; color: #013F7D">From Date:</td>
                                    <td align="left" valign="center"><input type="text" name="sdate" id="sdate" class="select req-string reqDate" value="{$smarty.request.sdate}"/></td>
                                    <td>&nbsp;</td>
                                    <td align="right" valign="top" style="padding-left:5px;  color: #013F7D">To Date:</td>
                                    <td align="left" valign="center"><input type="text" name="edate" id="edate" class="select req-string reqDate" value="{$smarty.request.edate}"/></td>
                                    <td>&nbsp;</td>
                                </tr>
                            
                                    <tr><td style="padding-left:5px; color: #013F7D;background-color:#6699cc">Percentage<input type="text" name="percentage" class="input" id="percentage" onblur="if(this.value == '') this.value='Enter a Percentage to proceed'" onfocus="if(this.value == 'Enter a Percentage to proceed') this.value=''" value="{if $smarty.request.percentage neq ""}{$smarty.request.percentage}{else}Enter a Percentage to proceed{/if}" class="searchinput" style="width:100px" />
                                </td>
                                <td style="padding-left:5px; color: #013F7D;background-color:#6699cc">Range between <input type="text" name="start_range" class="input" id="start_range" style="width:100px"  value="{if $smarty.request.start_range neq ""}{$smarty.request.start_range}{else}{/if}" /> and <input type="text" name="end_range" class="input" id="end_range"  style="width:100px"  value="{if $smarty.request.end_range neq ""}{$smarty.request.end_range}{else}{/if}" /> </td>
                                <td style="padding-left:5px; color: #013F7D;background-color:#6699cc"><input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </td>
                               <td style="padding-left:5px; color: #013F7D;background-color:#6699cc"> <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                <div class="clr"></div></td></tr>
                                    </table>  
                            </div>
                          </td>
                        </tr>
                        {if $smarty.request.percentage neq ''}
                            <tr>
                                <td colspan="9">
                                      <div class="pagecount_info_divbox">
                                          Showing Records {$records_from} to {$records_to} of {$total}
                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> </table></form>
                                          <form id="batchcustomers" name="batchcustomer" method="POST" action="rebate_checkexporttocsv.php">
                                              <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                            <tr>   <th bgcolor="#336699" style="color:#fff;">Remove</th>
                                    <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                    <th bgcolor="#336699" style="color:#fff;">Customer Name</th>
                                    <th bgcolor="#336699" style="color:#fff;">Address</th>
                                    <th bgcolor="#336699" style="color:#fff;">City</th>
                                    <th bgcolor="#336699" style="color:#fff;">State</th>
                                    <th bgcolor="#336699" style="color:#fff;">Zip</th>
                                    <th bgcolor="#336699" style="color:#fff;">Amount Spent </th>
                                    <th bgcolor="#336699" style="color:#fff;">Rebate</th>
                            </tr>
                            {if $customer|count gt 0}
                                            <input type="hidden" name="start_date" id="sdate" value={$smarty.request.sdate} />
                                            <input type="hidden" name="end_date" id="edate" value={$smarty.request.edate} />
                                            <input type="hidden" name="percentage" id="percentage" value={$smarty.request.percentage} />
                                            <input type="hidden" name="start_range" id="start_range" value={$smarty.request.start_range} />
                                            <input type="hidden" name="end_range" id="end_range" value={$smarty.request.end_range} />
                                {foreach item=item name=item from=$customer}
                                    {if $smarty.request.start_range !='' && $smarty.request.end_range !=''}
                                       {if $item.rebate gt $smarty.request.start_range && $item.rebate lt $smarty.request.end_range}
                                    <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">
                                            <input type=checkbox name="unbatch[]" id="unbatch" value={$item.cust_id} />

                                        </td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.address1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.city}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.state}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.zip}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.amountSpent|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.rebate|number_format:2:".":","}</td>
                                    </tr>
                                    {/if}
                                    {else}
                                        <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">
                                            <input type="checkbox" name="unbatch[]" id="unbatch" value={$item.cust_id} />
                                        </td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.address1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.city}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.state}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.zip}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.amountSpent|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.rebate|number_format:2:".":","}</td>
                                    </tr>
                                {/if}
                               
                                {/foreach}
                                {if $customer|@count gt 0}
                                    <tr>
                                        <td colspan="9" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                                          <tr>
                                          <td  align="left" bgcolor="#336699">&nbsp;<input type="submit" value="Batch" name="batch_report" id="batch_report" /></td>
                                          <td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                          </tr>
                                          </table>
                                        </td>
                                    </tr>
                                {/if}
                            {else}
                                <tr>
                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                </tr>
                            {/if}
                        {else}
                            <tr>
                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>Enter Search Criteria to view the result</strong></font></th>
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

<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>

<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
    });	
</script>
{/literal}
{literal}
<script language="javascript" type="text/javascript">
    function validateFrom(){
        var percentage = $('#percentage').val();
        var regEx = "/^[0-9]{0,8}[.][0-9]{0,2}|[0-9]{0,8}$/";
        var startrange = $().val();
        var endrange = $().val();
        if($('#percentage').val() == 'Enter a Percentage to proceed'){
            $('#errorDiv1').html('Please enter  Percentage to proceed');
            return false;
        }else if(regEx.test(percentage)){   
            alert('true');
            return true;
        } else {
            $('#errorDiv1').html('Please enter valid Decimals');
            alert('flase');
            return false;
        } 
    }
</script>
{/literal}


