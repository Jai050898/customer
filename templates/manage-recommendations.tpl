{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Manage Recommendations</h1>
                <form id="ManageCustomers" class="form" method="post" name="ManageCustomers">
                    <input type="hidden" name="hid_key" id="hid_key" value="" />
                    <input type="hidden" name="hid_type" id="hid_type" value="" />
                    <input type="hidden" name="hid_id" id="hid_id" value="" />
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                        <tr>
                                                <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                                <th bgcolor="#336699" style="color:#fff;">Customer Name</th>
                                                <th bgcolor="#336699" style="color:#fff;">Vehicle</th>
                                                <th bgcolor="#336699" style="color:#fff;">Recommended Text</th>
                                                <th bgcolor="#336699" style="color:#fff;">Recommendation Date</th>
                                                <th bgcolor="#336699" style="color:#fff;">FollowUp Date</th>
                                        </tr>
                                        {foreach item=item name=item from=$Users}
                                            <tr>
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-customer.php?user_id={$item.cust_id}">{$item.fullname}</a></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-vehicle.php?vid={$item.veh_id}">{$item.name}</a></td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$item.rec_text|nl2br}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$item.rec_date|date_format:"%m/%d/%y"}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$item.dt_follow_update|date_format:"%m/%d/%y"}</td>
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No records Available</strong></font></th>
                                            </tr>
                                        {/foreach}
                                  </table>
                                </td>
                        </tr>
                        {if $Users|@count gt 0}
                                <tr>
                                    <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
            { include file="rightbar.tpl" }
            <div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
