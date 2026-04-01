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
                                                                  <li><a href="{$siteurl}/admin/manage-xml-ros.php">Manage MMS RO's</a></li>
								  <li>Manage MMS Customers RO Details</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage MMS Customers RO Details</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageMMSCustomers" class="form" method="post" name="ManageMMSCustomers">
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
							  <td><h2>Manage MMS Customers RO Details</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageMMSCustomers.submit();" /> 
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
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageMMSCustomers,'chkall[]','checkall');" /></th>
                                                                                <th width="17%" align="left"><a href="javascript: setClientSort('RD.ro_id','{$sortioption}',document.ManageMMSCustomers);">RO Id</a> {if $smarty.request.sortby eq 'ro_id'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('C.fullname','{$sortioption}',document.ManageMMSCustomers);">Custmer Name</a> {if $smarty.request.sortby eq 'R.fullname'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('V.name','{$sortioption}',document.ManageMMSCustomers);">Vehicle Name</a> {if $smarty.request.sortby eq 'V.name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="10%" align="left">Transaction Id</th>
                                                                                <th width="10%" align="left">Unit Quantity</th>
                                                                                <th width="10%" align="left">Unit Cost</th>
                                                                                <th width="10%" align="left">Unit Sale</th>
										<th width="10%" align="left">Extended Cost</th>
                                                                                <th width="10%" align="left">Extended Sale</th>
                                                                                <th width="10%" align="left">Labor Hours</th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.id}"/></td>
                                                                                        <td align="left">{$item.ro_id}</td>
											<td align="left"><a href="{$siteurl}/admin/manage-xml-customers.php?cust_id={$item.cust_id}">{$item.fullname}</a></td>
											<td align="left"><a href="{$siteurl}/admin/manage-xml-vehicles.php?vid={$item.vehicle_id}">{$item.name}</td>
                                                                                        <td align="left">{$item.transactiondetailextid}</td>
                                                                                        <td align="left">{$item.unitquantity}</td>
                                                                                        <td align="left">{$item.unitcost}</td>
											<td align="left">{$item.unitsale}</td>
											<td align="left" >{$item.extendedcost}</td>
                                                                                        <td align="left" >{$item.extendedsale}</td>
                                                                                        <td align="left" >{$item.laborhours}</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="11"><font color="#FF0000"><strong>No MMS Customers Ro Details Available</strong></font></th>
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