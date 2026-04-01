{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <div>
                    <div style="float: left;"><h1>Export Customer Reports</h1></div>
                {if $customer|count gt 0}<div style="float: right; font-size:15px;"><a href="{$siteurl}/exporttocsv.php?days={$smarty.request.days}&percentage={$smarty.request.percentage}" target="_blank" id="exportData">Export Data</a></div>{/if}
                    <div style="clear:both;"></div>
                </div>
                <form id="ManageCustomers" class="form" method="post" name="ManageCustomers" onsubmit="return validateFrom();">
                    <input type="hidden" name="hid_key" id="hid_key" value="" />
                    <input type="hidden" name="hid_type" id="hid_type" value="" />
                    <input type="hidden" name="hid_id" id="hid_id" value="" />
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
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
                                <input type="text" name="percentage" class="input" id="percentage" onblur="if(this.value == '') this.value='Enter a Percentage to proceed'" onfocus="if(this.value == 'Enter a Percentage to proceed') this.value=''" value="{if $smarty.request.percentage neq ""}{$smarty.request.percentage}{else}Enter a Percentage to proceed{/if}" class="searchinput" />
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> 
                                <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                <div class="clr"></div>
                            </div>
                          </td>
                        </tr>
                        {if $smarty.request.days neq ''}
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
                                        <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;"> {$item.address1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.city}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.state}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.zip}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.amountSpent}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$item.rebate}</td>
                                    </tr>
                                {/foreach}
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
            { include file="rightbar.tpl" }
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
            
        if($('#percentage').val() == 'Enter a Percentage to proceed'){
            $('#errorDiv1').html('Please enter a Percentage to proceed');
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