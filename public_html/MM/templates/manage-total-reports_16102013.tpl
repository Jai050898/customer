{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Manage Total Reports</h1>
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
                                                <th bgcolor="#336699" style="color:#fff;">Year</th>
                                                <th bgcolor="#336699" style="color:#fff;">Total</th>
                                                <th bgcolor="#336699" style="color:#fff;">Difference</th>
                                        </tr>
                                        {foreach item=item name=item from=$yearArr}
                                            <tr>
                                                <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.year}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> {$item.total}</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.diff}</td>
                                            </tr>
                                        {foreachelse}
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        {/foreach}
                                  </table>
                                </td>
                        </tr>
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
