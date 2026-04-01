{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Manage Vehicles</h1>
            <form id="ManageVehicles" class="form" method="post" name="ManageVehicles">
                <input type="hidden" name="hid_key" id="hid_key" value="" />
                <input type="hidden" name="hid_type" id="hid_type" value="" />
                <input type="hidden" name="hid_id" id="hid_id" value="" />
                <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                    <tr>
                        <td height="10" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" colspan="2">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                <tr>
                                    <td align="right" valign="top" style="padding-left:5px; color: #013F7D">From Date:</td>
                                    <td align="left" valign="center"><input type="text" name="sdate" id="sdate" class="select" value="{$smarty.request.sdate}"/></td>
                                    <td>&nbsp;</td>
                                    <td align="right" valign="top" style="padding-left:5px;  color: #013F7D">To Date:</td>
                                    <td align="left" valign="center"><input type="text" name="edate" id="edate" class="select" value="{$smarty.request.edate}"/></td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                    </tr>
                    <tr>
                      <td colspan="2">
                            <div class="search_divbox">
                                <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
                                <input type="image" src="images/go_but.png" onclick="document.ManageVehicles.submit();"  style="vertical-align:bottom;"/> 
                                <div class="clr"></div>
                            </div>
                      </td>
                    </tr>   
                    <tr>
                      <td colspan="2">
                            <div class="pageinfo_divbox" style=" color: #013F7D; float: right; font-weight: bold; margin-right: 5px;">
                                Showing Records {$records_from} to {$records_to} of {$total}
                                <div class="clr"></div>
                            </div>
                      </td>
                    </tr>   
                    
                    <tr>
                        <td align="left" valign="top" colspan="2">
                          <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                            <tr>
                                <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('make','{$sortioption}',document.ManageVehicles);">Make </a> {if $smarty.request.sortby eq 'make'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Total','{$sortioption}',document.ManageVehicles);">Total</a></th>
                            </tr>
                            {foreach item=item name=item from=$Users}
                                <tr>
                                    <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-models-by-make.php?user_id={$smarty.request.user_id}&make={$item.make}&sdate={$smarty.request.sdate}&edate={$smarty.request.edate}">{$item.make}</a></td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="{$siteurl}/view-models-by-make.php?user_id={$smarty.request.user_id}&make={$item.make}&sdate={$smarty.request.sdate}&edate={$smarty.request.edate}">{$item.Total}</a></td>
                                    </tr>
                            {foreachelse}
                                <tr>
                                    <th align="center" bgcolor="#f9f9f7" style="color:#000000;" colspan="6"><font color="#FF0000"><strong>No Vehicles Added</strong></font></th>
                                </tr>
                            {/foreach}
                          </table>
                        </td>
                    </tr>
                    {if $Users|@count gt 0}
                            <tr>
                                <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                                      <tr>
                                      <td  align="left" bgcolor="#336699">&nbsp;</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
{literal}
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
    });	
</script>
{/literal}