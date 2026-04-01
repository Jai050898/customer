{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
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
                            <td align="left" valign="center" colspan="8">
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="{$smarty.request.fdate}" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="{$smarty.request.tdate}" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> </div></td>
			</tr>				  
                        {if $smarty.request.fdate neq ''}
                            <tr>
                                <td colspan="8">
                                      <div class="pagecount_info_divbox">
                                          Showing Records {$records_from} to {$records_to} of {$total}
                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> 
                            <tr>
                                 	    <th  colspan="2" bgcolor="#336699" style="color:#fff;">Source</th>
                                             <th bgcolor="#336699" style="color:#fff;">Total Customers</th>
                                            <th bgcolor="#336699" style="color:#fff;">Total Sales</th>
                                            <th bgcolor="#336699" style="color:#fff;">Average RO's</th>
                                           
                                    </tr>
                                    {foreach item=item name=item from=$allArray}
                                        <tr>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.source}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.referral}</td>

                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> ${$item.roCnt}</td>                       
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> ${$item.gross}</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">${$item.averageRo}</td>
                                            
                                            </tr>
                                    {foreachelse}	                                  
                                        <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: center;" colspan="9"><font color="#FF0000" ><strong>No Records Found</strong></font></td>    
                                        </tr>
                                     {/foreach}
{if $Totalcustomers|@count gt 0}
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
                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>Select duration to view the results here</strong></font></th>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
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
