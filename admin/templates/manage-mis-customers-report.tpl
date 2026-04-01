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
								  <li>Manage MIS Customers Report</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage MIS Customers Report</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageMISCustomers" class="form" method="post" name="ManageMISCustomers">
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
							  <td><h2>Manage MIS Customers Report</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<select name="user_id" id="user_id" class="searchinput">
									<option value="">-- Select --</option>
									{foreach item=item name=item from=$Clients}
									<option value="{$item.user_id}" {if $smarty.request.user_id eq $item.user_id} selected="selected"{/if}>{$item.first_name}</option>
									{/foreach}
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageMISCustomers.submit();" />
									</div>
									<div class="search_divbox">
									<label style="float:left; margin-right:10px;"><strong>Years</strong> :</label> <label style="float:left; margin-right:5px;"><strong>From</strong></label><input type="text" name="yearfrom" id="yearfrom" value="{if $smarty.request.yearfrom neq ""}{$smarty.request.yearfrom}{/if}" class="searchinput"  /><label style="float:left; margin-right:5px;"><strong>To</strong></label><input type="text" name="yearto" id="yearto" value="{if $smarty.request.yearto neq ""}{$smarty.request.yearto}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageMISCustomers.submit();"  /> &nbsp;&nbsp;&nbsp;
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
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMISCustomers,'D','chkall[]');"/> -->
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
										<th width="6%" align="left">S. No</th>
										<th width="17%" align="left"><a href="javascript: setClientSort('MIS_lastname','{$sortioption}',document.ManageMISCustomers);">Customer Name</a> {if $smarty.request.sortby eq 'MIS_lastname'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="10%" align="left"><a href="javascript: setClientSort('MIS_LifetimeVisits','{$sortioption}',document.ManageMISCustomers);">Life Time Visits </a> {if $smarty.request.sortby eq 'MIS_LifetimeVisits'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="10%" align="left">First Visited</th>
										<th width="10%" align="left">Last Visited</th>
										<th width="10%" align="left">Customer From(Days)</th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left">{$smarty.foreach.item.index+1}</td>
											<td align="left"><a href="{$siteurl}/admin/view-mis-customer.php?user_id={$item.MIS_cust_ID}">{$item.MIS_lastname} {$item.MIS_firstname}</a></td>
											<td align="left" style="padding-right:15px;"><a href="{$siteurl}/admin/manage-mis-ros.php?user_id={$item.MIS_cust_ID}">{$item.MIS_LifetimeVisits}</a></td>
											<td align="left">{$item.MIS_FirstVisited}</td>
											<td align="left">{$item.MIS_LastVisited}</td>
											<td align="left" >{$item.duration} Days</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="6"><font color="#FF0000"><strong>No MIS Customers Added</strong></font></th>
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
													<!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMISCustomers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMISCustomers,'D','chkall[]');"/> -->
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