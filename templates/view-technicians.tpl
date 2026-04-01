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
                            <td align="left" valign="center" colspan="7">
                                <div class="search_divbox"><label style="color: #FFFFFF;"> Date:</label> &nbsp;<input type="text" name="sdate" id="sdate" class="select req-string reqDate" value="{$smarty.request.sdate}"/>&nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">
                                <input type="image" src="images/go_but.png" onclick="{literal}$('#submitBtn1').click();{/literal}" style="vertical-align:bottom;"/> 
                            <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                </div>
                          
                            <div class="search_divbox">
                                
                               
                            </div>
                            </td>
			</tr>
                        
                                   
                            </div>
                          </td>
                        </tr>
                      
                            <tr>
                                <td colspan="9">
                                      <div class="pagecount_info_divbox">
                                          Showing Records {$records_from} to {$records_to} of {$total}
                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> </table></form>
                                          <form id="batchcustomers" name="batchcustomer" method="POST" action="">
                                              <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                            <tr>   
                                    <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                    <th bgcolor="#336699" style="color:#fff;">Technician</th>
                                    <th bgcolor="#336699" style="color:#fff;">Day hours<br/>{$seldate|date_format:"%d/%m/%Y"}</th>
                                    <th bgcolor="#336699" style="color:#fff;">Last one week hours<br/>{$weekdate|date_format:"%d/%m/%Y"}&nbsp;to&nbsp;{$seldate|date_format:"%d/%m/%Y"}</th>
                                    <th bgcolor="#336699" style="color:#fff;">Last one Month hours<br/>{$month|date_format:"%d/%m/%Y"}&nbsp;to&nbsp;{$seldate|date_format:"%d/%m/%Y"}</th>
                                    
                            </tr>
                            {if $customer|count gt 0}
                                           
                                {foreach item=item name=item from=$customer}
                                   
                                      
                                    <tr>
                                       
                                        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.technician}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.total_day}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.total_week}</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.total_month}</td>
                                        
                                    </tr>
                                {/foreach}
                                {if $customer|@count gt 0}
                                    <tr>
                                        <td colspan="9" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No Technicians Available</strong></font></th>
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


{/literal}


