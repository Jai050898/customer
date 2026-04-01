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
                                    <li>Duplicate Customers</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Duplicate Customers</div>
                        </div>
                        <div class="ad_textsp">
                              <form id="ManageMMSCustomers" class="form" method="GET" name="ManageMMSCustomers">
                                <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                                <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                                <table width="100%" cellspacing="0" cellpadding="0">
                                              <tr>
                                                      <td height="10" colspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td><h2>Duplicate Customers</h2></td>
                                                <td align="right">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td  colspan="2">
                                                      <div class="search_divbox">
                                                          <select name="user_id" id="user_id" class="searchinput" onchange="document.getElementById('ManageMMSCustomers').submit();">
                                                                  <option value="">-- Select --</option>
                                                                  {foreach item=item name=item from=$shops}
                                                                  <option value="{$item.xml_id}" {if $smarty.request.user_id eq $item.xml_id} selected="selected"{/if}>{$item.company_name|stripslashes}</option>
                                                                  {/foreach}
                                                          </select>&nbsp;&nbsp;
                                                          <input type="image" src="../images/go_but.png" onchange="document.ManageMMSCustomers.submit();" />
                                                      </div>
                                                </td>
                                              </tr>
                                              {if $Users|@count gt 0}
                                                    <tr>
                                                        <td colspan="2">
                                                          <table width="100%" cellspacing="0" cellpadding="5">
                                                              <tr>
                                                                  <td  align="left" bgcolor="#854141">
                                                                          <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                          <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                          <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
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
                                                            <th width="17%" align="left">FullName</th>
                                                            <th width="17%" align="left">Address1</th>
                                                            <th width="15%" align="left" >City</th>
							    <th width="10%" align="left">State</th>
							    <th width="8%" align="left">Zip</th>
                                                            <th width="15%" align="left">Mobile</th>
                                                            <th width="16%" align="left">DOB</th>
                                                            <th width="16%" align="left">duplicated<br>Count</th>

                                                          </tr>
                                                          {if $Users|@count gt 0}
                                                            {foreach item=item name=item from=$Users}
                                                                  <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">               
                                                                    <td align="left">{$item.fullname}</td>
                                                                    <td align="left">{$item.address1}</td>
                                                                    <td align="left">{$item.city}</td>
                                                                    <td align="left">{$item.state}</td>
                                                                    <td align="left">{$item.zip}</td>
                                                                    <td align="left">{if $item.cell eq ""}{"-"}{else}
                                                                    {$item.cell}{/if}</td>
                                                                    <td align="left">{$item.dob|date_format:"%m/%d/%Y"}</td>
                                                                    <td align="left">{$item.count}</td>
                                                                </tr>
                                                              {foreachelse}
                                                                  <tr>

                                                                    <th width="100%" align="center" colspan="8"><font color="#FF0000"><strong>No duplicate data foung for this shop!!!</strong></font></th>
                                                                  </tr>
                                                              {/foreach}
                                                            {else}
                                                                <tr>

                                                                    <th width="100%" align="center" colspan="8"><font color="#FF0000"><strong>Please Select a shop to display duplicate Customer Data.</strong></font></th>
                                                                  </tr>
                                                            {/if}
                                                    </table>
                                                  </td>
                                              </tr>
                                              {if $Users|@count gt 0}
                                                <tr>
                                                    <td colspan="2">
                                                        <table width="100%" cellspacing="0" cellpadding="5">
                                                                <tr>
                                                                    <td>
                                                                            <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                            <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                            <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
                                                                    </td>
                                                                    <td><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
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
