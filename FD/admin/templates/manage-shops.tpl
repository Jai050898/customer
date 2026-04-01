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
								  <li>Manage Shops</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Shops</div>
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
							  <td><h2>Manage Shops</h2></td>
							  <td align="right"><a href="{$siteurl}/admin/add-shop.php?Company_ID={$smarty.request.Company_ID}">Add Shop</a></td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageShops.submit();" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
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
										<th width="17%" align="left"><a href="javascript: setClientSort('A.name','{$sortioption}',document.ManageShops);">Shop Name</a> {if $smarty.request.sortby eq 'A.name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('A.email','{$sortioption}',document.ManageShops);">Email </a> {if $smarty.request.sortby eq 'A.email'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="12%" align="left">User Name </th>
										<th width="10%" align="left">Phone </th>
										<th width="10%" align="left">State</th>
										<th width="10%" align="left">City</th>
										<th width="7%" align="left">Status </th>
										<th width="25%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Shops}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.Shop_ID}"/></td>
											<td align="left">{$item.name}</td>
											<td align="left" style="padding-right:15px;"> {$item.email}</td>
											<td align="left">{$item.user_name}</td>
											<td align="left">{$item.phone}</td>
											<td align="left" >{$item.State_Name}</td>
											<td align="left" >{$item.city}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
											<td align="left">
											<a href="{$siteurl}/admin/resendmail_shop.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/email.png" title="Resend Welcome notification mail" alt="Resend Welcome notification mail" /> </a>
											<a href="{$siteurl}/admin/add-shop.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/page_edit.png" title="Edit" alt="Edit" /> </a>
											<a href="{$siteurl}/admin/annual-settings.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/cog.png" title="Annual Settings" alt="Annual Settings" /> </a>
											<a href="{$siteurl}/admin/daily-sales.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/calendar_view_day.png" title="Daily Sales" alt="Daily Sales" /> </a>
											<a href="{$siteurl}/admin/monthly-sales.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/calendar_view_month.png" title="Monthly Sales" alt="Monthly Sales" /> </a>
											<a href="{$siteurl}/admin/yearly-sales.php?Shop_ID={$item.Shop_ID}&Company_ID={$item.Company_ID}" class="link023"><img src="{$siteurl}/images/calendar_view_year.png" title="Yearly Sales" alt="Yearly Sales" /> </a>
											</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Shops Added</strong></font></th>
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