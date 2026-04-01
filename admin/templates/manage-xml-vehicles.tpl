{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
    <div id="mainbody">
        <div id="contentpane">
            {include file="right-bar.tpl"}
            <div id="innerleft">
                  <div class="admin-rightpart">
                          <div class="admin_topbgnav">
                            <div id="admin_bcrumb">
                                      <ul>
                                              <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
                                              <li>Manage XML Vehicles</li>
                                      </ul>
                                    <div class="clr"></div>
                            </div>
                            <div id="admin_head">Manage XML Vehicles</div>
                          </div>
                          <div class="ad_textsp">
                                <form id="ManageXMLVehicles" class="form" method="GET" name="ManageXMLVehicles">
                                        <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                                        <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td height="10" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                  <td><h2>Manage XML Vehicles</h2></td>
                                                  <td align="right">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td  colspan="2">
                                                        <div class="search_divbox">
                                                                <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
                                                                <input type="image" src="../images/go_but.png" onclick="document.ManageXMLVehicles.submit();" /> 
                                                                <div class="clr"></div>
                                                        </div>
                                                  </td>
                                                </tr>
                                                {if $Users|@count gt 0}
                                                    <tr>
                                                        <td colspan="2">
                                                                <table width="100%" cellspacing="0" cellpadding="5">
                                                                        <tr>
                                                                                <td  align="left" bgcolor="#854141">
                                                                                        <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'A','chkall[]');"/>
                                                                                        <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'I','chkall[]');" />
                                                                                        <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLVehicles,'D','chkall[]');"/> -->
                                                                                </td>
                                                                                <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                                        </tr>
                                                                </table>
                                                        </td>
                                                    </tr>
                                                {/if}
                                                <tr>
                                                    <td align="left" valign="top" colspan="2">
                                                      <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                                        <tr>
                                                           <!-- <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageXMLVehicles,'chkall[]','checkall');" /></th> -->
                                                            <th width="10%" align="left"><a href="javascript: setClientSort('year','{$sortioption}',document.ManageXMLVehicles);">Year</a> {if $smarty.request.sortby eq 'year'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                                            <th width="12%" align="left"><a href="javascript: setClientSort('make','{$sortioption}',document.ManageXMLVehicles);">Make </a> {if $smarty.request.sortby eq 'make'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                                            <th width="12%" align="left"><a href="javascript: setClientSort('model','{$sortioption}',document.ManageXMLVehicles);">Model </a> {if $smarty.request.sortby eq 'model'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
                                                            <th width="20%" align="left">Vin</th>
                                                            <th width="15%" align="left">Engine</th>
                                                        </tr>
                                                        {foreach item=item name=item from=$Users}
                                                            <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                                                    <!--<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.vehicle_id}"/></td> -->
                                                                    <td align="left">{$item.year}</td>
                                                                    <td align="left"> {$item.make}</td>
                                                                    <td align="left"> {$item.model}</td>
                                                                    <td align="left"><a href="{$siteurl}/admin/view-xml-vehicle.php?vid={$item.vehicle_id}">{$item.vin}</a></td>
                                                                    <td align="left" >{$item.engine}</td>
                                                            </tr>
                                                        {foreachelse}
                                                            <tr>
                                                              <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No XML Vehicles Added</strong></font></th>
                                                            </tr>
                                                        {/foreach}
                                                      </table>
                                                    </td>
                                                </tr>
                                                {if $Users|@count gt 0}
                                                    <tr>
                                                        <td colspan="2">
                                                            <table width="100%" cellspacing="0" cellpadding="5">
                                                                <tr>
                                                                    <td  align="left" bgcolor="#854141">
                                                                            <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'A','chkall[]');"/>
                                                                            <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'I','chkall[]');" />
                                                                            <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLVehicles,'D','chkall[]');"/> -->
                                                                    </td>
                                                                    <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                {/if}
                                        </table>
                                </form>
                                <!--end of middle part -->
                                <!--end of right part -->
                                <div class="clr"></div>
                          </div>
                        <!--end of contentpane -->
                  </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>