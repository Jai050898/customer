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
								  <li>Manage Users</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Users</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUsers" class="form" method="post" name="ManageUsers">
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
							  <td><h2>Manage Users</h2></td>
							  <td align="right"><a href="{$siteurl}/admin/client-roster.php" target="_blank">All Clients Roster</a>&nbsp;&nbsp;<a href="{$siteurl}/admin/add-user.php">Add User</a></td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" {if $smarty.request.status eq "A"} selected="selected" {/if}>Active</option>
									<option value="I" {if $smarty.request.status eq "I"} selected="selected" {/if}>In Active</option>
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageUsers.submit();" /> 
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
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUsers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageUsers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUsers,'D','chkall[]');"/>
													<input name="input3" type="button"  value="Active Login" onclick="javascript:SetStatus(document.ManageUsers,'O','chkall[]');"/>
													<input name="input5" type="button"  value="InActive Login" onclick="javascript:SetStatus(document.ManageUsers,'P','chkall[]');"/>
													<input name="input6" type="button"  value="Roster" onclick="javascript:SetStatus(document.ManageUsers,'R','chkall[]');"/>
												</td>
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
											</tr>
										</table>
									</td>
								</tr>
							{/if}
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
										<th width="3%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageUsers,'chkall[]','checkall');" /></th>
										<th width="3%" align="left">ID</th>
										<th width="14%" align="left"><a href="javascript: setClientSort('A.company_name','{$sortioption}',document.ManageUsers);">Customer Name</a> {if $smarty.request.sortby eq 'A.company_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="6%" align="left">Login</th>
										<th width="6%" align="left">Status </th>
										<th width="75%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.user_id}"/></td>
											<td align="left">{$item.user_id}</td>
											<td align="left"><a href="{$siteurl}/admin/view-user.php?user_id={$item.user_id}">{$item.company_name|stripslashes}</a></td>
											<td align="left" >{if $item.login_status eq "A"}<font color="#00CC33">Active</font>{else}<font color="#FF0000">InActive</font>{/if}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
											<td align="left">
											<a href="{$siteurl}/admin/resendmail_user.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/email.png" title="Resend Welcome notification mail" alt="Resend Welcome notification mail" /> </a>&nbsp;
											<a href="{$siteurl}/admin/add-user.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/page_edit.png" title="Edit" alt="Edit" /> </a>&nbsp;
											<a href="{$siteurl}/admin/cal-user.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/cal.png" border="0" style="cursor:pointer;" title="User Calendars" alt=" User Calendars" /></a>&nbsp;
											<a href="{$siteurl}/admin/calendars-cat.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/calculator_link.png" border="0" style="cursor:pointer;" title="User Calendars Categories" alt=" User Calendars Categories" /></a>&nbsp;
											<a href="{$siteurl}/admin/ro-goal.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/database.png" border="0" style="cursor:pointer;" title="User RO Goals" alt=" User  RO Goals" /></a>&nbsp;
											<a href="{$siteurl}/admin/marketing-budget.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/money_dollar.png" border="0" style="cursor:pointer;" title="Marketing Budget" alt="Marketing Budget" /></a>&nbsp;
											<a href="{$siteurl}/admin/show-all-budgets.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/money.png" border="0" style="cursor:pointer;" title="Marketing Budget Map" alt="Marketing Budget Map" /></a>&nbsp;
											{if $item.access_to_mark_survey eq "Y"}
											<a href="{$siteurl}/admin/marketing-survey.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/zoom_in.png" title="Marketing Survey" alt="Marketing Survey" /></a>&nbsp;
											<a href="{$siteurl}/admin/marketing-survey-report.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/page_green.png" title="Marketing Survey Report" alt="Marketing Survey Report" /></a>&nbsp;
											{/if}
											{if $item.access_to_site_survey eq "Y"}
											<a href="{$siteurl}/admin/website-survey.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/zoom_out.png" title="Website Survey" alt="Website Survey" /></a>&nbsp;
											<a href="{$siteurl}/admin/website-survey-report.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/page_red.png" title="Website Survey Report" alt="Website Survey Report" /></a>&nbsp;
											{/if}
											{if $item.access_to_integrated_survey eq "Y"}
											<a href="{$siteurl}/admin/integrated-survey.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/zoom.png" title="Survey" alt="Survey" /></a>&nbsp;
											<a href="{$siteurl}/admin/integrated-survey-report.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/page.png" title="Survey Report" alt="Survey Report" /></a>&nbsp;{/if}
											<a href="{$siteurl}/admin/survey-report.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/page.png" title="All Survey Report" alt="All Survey Report" /></a>&nbsp;
											<a href="{$siteurl}/admin/online-tests.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/timeline_marker.png" title="Online Tests" alt="Online Tests" /></a>&nbsp;
											<a href="{$siteurl}/admin/gogoleserp.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/images.png" title="Google Serp's" alt="Google Serp's" /></a>&nbsp;
											<a href="{$siteurl}/admin/bingserp.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/images.png" title="Bing Serp's" alt="Bing Serp's" /></a>&nbsp;
											<a href="{$siteurl}/admin/yahooserp.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/images.png" title="Yahoo Serp's" alt="Yahoo Serp's" /></a>&nbsp;
											<a href="{$siteurl}/admin/wis.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/time_go.png" title="What if Scenarios" alt="What if Scenarios" /></a>&nbsp;
											<a href="{$siteurl}/admin/opensearch.php?id={$item.user_id}&type=g" target="_blank" class="link023"><img src="{$siteurl}/images/google-small.png" title="Google Serach" alt="Google Serach" /></a>&nbsp;
											<a href="{$siteurl}/admin/opensearch.php?id={$item.user_id}&type=y" target="_blank" class="link023"><img src="{$siteurl}/images/yahoo-small.png" title="Yahoo Serach" alt="Yahoo Serach" /></a>&nbsp;
											<a href="{$siteurl}/admin/opensearch.php?id={$item.user_id}&type=b" target="_blank" class="link023"><img src="{$siteurl}/images/bing-small.png" title="Bing Serach" alt="Bing Serach" /></a>&nbsp;
											<a href="{$siteurl}/admin/site-inspection.php?id={$item.user_id}" class="link023"><img src="{$siteurl}/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></a>&nbsp;
											<a href="{$siteurl}/admin/confirmed-directories.php?id={$item.user_id}" class="link023"><img src="{$siteurl}/images/cd.png" title="Confirmed Directories" alt="Confirmed Directories" /></a>&nbsp;
											<a href="{$siteurl}/admin/manage-competitors.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/competitors.png" title="Competitors" alt="Competitors" /></a>&nbsp;
											<a href="{$siteurl}/admin/opensearch-all.php?user_id={$item.user_id}" class="link023" target="_blank"><img src="{$siteurl}/images/building.png" title="Near city Search" alt="Near city Search" /></a>&nbsp;
											<a href="{$siteurl}/admin/print.php?user_id={$item.user_id}" class="link023" target="_blank"><img src="{$siteurl}/images/print.gif" title="Print" alt="Print" /></a>&nbsp;
											<a href="{$siteurl}/admin/export.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></a>&nbsp;
											<a href="{$siteurl}/admin/export-brands.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></a>&nbsp;
											<a href="{$siteurl}/admin/export-all.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/download.png" title="Export All List" alt="Export All List" /></a>&nbsp;
											<a href="{$siteurl}/admin/users-map.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/map.png" title="MIS Users Map" alt="MIS Users Map" /></a>&nbsp;
											<a href="{$siteurl}/admin/users-daily-data.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/data-server.png" title="MIS Users Daily Data" alt="MIS Users Daily Data" /></a>
											</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
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
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUsers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageUsers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUsers,'D','chkall[]');"/>
													<input name="input3" type="button"  value="Active Login" onclick="javascript:SetStatus(document.ManageUsers,'O','chkall[]');"/>
													<input name="input5" type="button"  value="InActive Login" onclick="javascript:SetStatus(document.ManageUsers,'P','chkall[]');"/>
													<input name="input6" type="button"  value="Roster" onclick="javascript:SetStatus(document.ManageUsers,'R','chkall[]');"/>
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