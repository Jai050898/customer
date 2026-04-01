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
								  <li>Manage MMS Customers</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage MMS Customers</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageXMLCustomers" class="form" method="post" name="ManageXMLCustomers">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
						<input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Manage MMS Customers</h2></td>
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
									<input type="image" src="../images/go_but.png" onclick="document.ManageXMLCustomers.submit();" /> 
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
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLCustomers,'D','chkall[]');"/> -->
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
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageXMLCustomers,'chkall[]','checkall');" /></th>
										<th width="17%" align="left"><a href="javascript: setClientSort('lname','{$sortioption}',document.ManageXMLCustomers);">Customer Name</a> {if $smarty.request.sortby eq 'lname'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('city','{$sortioption}',document.ManageXMLCustomers);">City </a> {if $smarty.request.sortby eq 'city'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="10%" align="left">State</th>
										<th width="10%" align="left">Total Vehicles</th>
										<th width="10%" align="left">Total Repair Orders</th>
                                                                                <th width="10%" align="left">Distance</th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.cust_id}"/></td>
											<td align="left"><a href="{$siteurl}/admin/view-xml-customer.php?user_id={$item.cust_id}">{if $item.lname neq '' && $item.fname neq ''}{$item.lname} {$item.fname}{else}-N/A-{/if}</a></td>
											<td align="left" style="padding-right:15px;"> {$item.city}</td>
											<td align="left">{$item.state}</td>
											<td align="left" ><a href="{$siteurl}/admin/manage-xml-vehicles.php?user_id={$item.cust_id}">{$item.Vcount}</a></td>
											<td align="left" ><a href="{$siteurl}/admin/manage-xml-ros.php?user_id={$item.cust_id}">{$item.Rcount}</a></td>
                                                                                        <td align="left" >{if $item.distance neq ''}{$item.distance|number_format:2}{else}-N/A-{/if}</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No MMS Customers Added</strong></font></th>
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
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLCustomers,'D','chkall[]');"/> -->
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