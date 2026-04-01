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
								  <li>Daily Sales</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Daily Sales</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageShops" class="form" method="post" name="ManageShops">
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
							  <td><h2>Daily Sales</h2></td>
							  <td align="right"><a href="{$siteurl}/manager/add-daily-sales.php?Shop_ID={$smarty.request.Shop_ID}">Add Daily Sales</a></td>
							</tr>
							{if $smarty.request.task neq ""}
							<tr>
							  <td align="cneter" colspan="2">
							  {if $smarty.request.task eq "s"}
							  <p align="center" style="color:#0000FF;"><strong>Mail send successfully</strong></p>
							  {else}
							   <p align="center" style="color:#FF0000;"><strong>Mail send Failed</strong></p>
							  {/if}
							  </td>
							</tr>
							{/if}
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageShops,'chkall[]','checkall');" /></th>
										<th width="10%" align="left">Year</th>
										<th width="15%" align="left">Month</th>
										<th width="12%" align="left">Day</th>
										<th width="10%" align="left">Gross Sales </th>
										<th width="10%" align="left">Repair Orders</th>
										<th width="10%" align="left">New Customers</th>
										<th width="10%" align="left">Actual Hours</th>
										<th width="10%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Shops}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.id}"/></td>
											<td align="left">{$item.year}</td>
											<td align="left"> {"01-`$item.month`-2012"|date_format:"%B"}</td>
											<td align="left">{$item.day} ({"`$item.day`-`$item.month`-2012"|date_format:"%a"})</td>
											<td align="left">{$item.grosssales}</td>
											<td align="left" >{$item.repairorders}</td>
											<td align="left" >{$item.newcustomers}</td>
											<td align="left">{$item.actualhours}</td>
											<td align="left">
											<a href="{$siteurl}/manager/edit-daily-sales.php?id={$item.id}&Shop_ID={$smarty.request.Shop_ID}" class="link023"><img src="{$siteurl}/images/page_edit.png" title="Edit" alt="Edit" /> </a>
											</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No  Daily Data Added</strong></font></th>
										</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							{if $Shops|@count gt 0}
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageShops,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageShops,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageShops,'D','chkall[]');"/>
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