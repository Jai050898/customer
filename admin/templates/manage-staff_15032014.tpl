{include file="header.tpl"}

<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
					<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							<li><a href="{$siteurl}/dashboard.php">Home</a></li>
							<li>Manage Staff</li>
							
						  </ul>
						<div class="clr"></div>
					  </div>
                                        <div id="admin_head">Manage staff

                                        <div class="admin_nav" style="float:right;font-weight:bold;">
    <a href="{$siteurl}/admin/add-staff.php">Add Staff</a></div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
        <form id="ManageStaff" class="form" method="GET" name="ManageStaff">
            <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
            <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <td height="10" colspan="2"></td>
                </tr>
                <tr>
                 
                </tr>
                <tr>
                    <td colspan="2">
                          <div class="pagecount_info_divbox">
                              Showing Records {$records_from} to {$records_to} of {$total}
                              <div class="clr"></div>
                          </div>
                    </td>
                </tr> 
                <tr>
                    <td align="left" valign="top" colspan="2">
                      <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141" class="tableinnercontent">
                            <tr>
                                <th bgcolor="#854141" style="color:#fff;">S. No</th>
                                <th bgcolor="#854141" style="color:#fff;"><a href="javascript: setClientSort('first_name','{$sortioption}',document.ManageStaff);">First Name</a> {if $smarty.request.sortby eq 'first_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
                                <th bgcolor="#854141" style="color:#fff;">Last Name </th>
                                <th bgcolor="#854141" style="color:#fff;">UserName</th>
                                <th bgcolor="#854141" style="color:#fff;">Password</th>
                                
                                <th bgcolor="#854141" style="color:#fff;">Email</th>
                            </tr>
                            {foreach item=item name=item from=$Users}
                                <tr>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$smarty.foreach.item.index+1}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.first_name}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.last_name}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.user_name}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.password}</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.email}</td>
                                    
                                </tr>
                        {foreachelse}
                                <tr>
                                  <th bgcolor="#f9f9f7" style="color:#000000;text-align:center" colspan="6"><font color="#FF0000"><strong>No Staff Available</strong></font></th>
                                </tr>
                            {/foreach}
                      </table>
                    </td>
                </tr>
                {if $Users|@count gt 0}
                        <tr>
                  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                        <tr>
                        <td  align="left" bgcolor="#854141">&nbsp;		</td>
                        <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                {/if}
            </table>
        </form>
	</td>
							</tr>
							<tr>
								<td align="left" valign="top">&nbsp;</td>
							</tr>
						</table>
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
       
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
