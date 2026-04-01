{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <div>
                    <div style="float: left;"><h1>New Customer Reports</h1></div>
                
                    <div style="clear:both;"></div>
                </div>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                        <tr>
                            <td colspan="8" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td  colspan="8">
                            <div class="search_divbox">
                                <select name="days" id="days" class="select" style="padding: 2px;">
                                    <option value="">---Please Select Duration---</option>
                                    <option value="30 DAY" {if $smarty.request.days eq "30 DAY"} selected="selected"{/if}>30 DAYS</option>
                                    <option value="60 DAY" {if $smarty.request.days eq "60 DAY"} selected="selected"{/if}>60 DAYS</option>
                                    <option value="90 DAY" {if $smarty.request.days eq "90 DAY"} selected="selected"{/if}>90 DAYS</option>
                                    <option value="6 MONTH" {if $smarty.request.days eq "6 MONTH"} selected="selected"{/if}>6 MONTHS</option>
                                    <option value="9 MONTH" {if $smarty.request.days eq "9 MONTH"} selected="selected"{/if}>9 MONTHS</option>
                                    <option value="1 YEAR" {if $smarty.request.days eq "1 YEAR"} selected="selected"{/if}>1 YEAR</option>
                                </select>
                                
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> 
                                <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                <div class="clr"></div>
                            </div>
                          </td>
                        </tr>
                        {if $smarty.request.days neq ''}
                            <tr>
                                <td colspan="8">
                                      <div class="pagecount_info_divbox">
                                          Showing Records {$records_from} to {$records_to} of {$total}
                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> 
                            <tr>
                                    <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                    <th bgcolor="#336699" style="color:#fff;">Customer Name</th>
                                    <th bgcolor="#336699" style="color:#fff;">Address</th>
                                    <th bgcolor="#336699" style="color:#fff;">City</th>
                                    <th bgcolor="#336699" style="color:#fff;">State</th>
                                    <th bgcolor="#336699" style="color:#fff;">Zip</th>
                                    <th bgcolor="#336699" style="color:#fff;">Amount Spent During {$smarty.request.days}</th>
                                    <th bgcolor="#336699" style="color:#fff;">Rebate</th>
                            </tr>
                            {if $customer|count gt 0}
                                {foreach item=item name=item from=$customer}
                                    <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.address1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.city}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.state}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.zip}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.amountSpent|number_format:2:".":","}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.rebate|number_format:2:".":","}</td>
                                    </tr>
                                {/foreach}
                                {if $customer|@count gt 0}
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
                            {else}
                                <tr>
                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                </tr>
                            {/if}
                        {else}
                            <tr>
                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>Enter Search Criteria to view the results here</strong></font></th>
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
{literal}
<script language="javascript" type="text/javascript">
    function validateFrom(){
        if($('#days').val() == ''){
            $('#errorDiv1').html('Please Select the Duration');
            return false;
        }
            
        
        
        /* var percentage = $('#percentage').val();
        var regEx = "/^[0-9]{0,8}[.][0-9]{0,2}|[0-9]{0,8}$/";
        if(regEx.test(percentage)){            
            return true;
        } else {
            $('#errorDiv1').html('Please enter valid Decimals');
            return false;
        } */
    }
</script>
{/literal}