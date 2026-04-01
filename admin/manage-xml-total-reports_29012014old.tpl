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
                                    <li>Manage Total Reports</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Total Reports</div>
                        </div>
                        <div class="ad_textsp">
                            <form id="ManageMMSCustomers" class="form" method="post" name="ManageMMSCustomers">
                   
                    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                                                <td><h2>ManageTotal Reports</h2></td>
                                                <td align="right">&nbsp;</td>
                                              </tr>
                        <tr>
                                                <td  colspan="2">
                                                      <div class="search_divbox">
                                                          <select name="user_id" id="user_id" class="searchinput">
                                                                  <option value="">-- Select --</option>
                                                                  {foreach item=item name=item from=$Clients}
                                                                  <option value="{$item.xml_id}" {if $smarty.request.user_id eq $item.xml_id} selected="selected"{/if}>{$item.company_name|stripslashes}</option>
                                                                  {/foreach}
                                                          </select>&nbsp;&nbsp;
                                                          <input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
                                                          <input type="image" src="../images/go_but.png" onclick="document.ManageMMSCustomers.submit();" />
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

                        
                        
                                              <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141"  class="tableinnercontent">
                                        <tr>
                                                <th bgcolor="#854141" style="color:#fff;">S. No</th>
                                                <th bgcolor="#854141" style="color:#fff;">Year</th>
                                                <th bgcolor="#854141" style="color:#fff;">Total</th>
                                                <th bgcolor="#854141" style="color:#fff;">Difference</th>
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
                                  < </table>
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
