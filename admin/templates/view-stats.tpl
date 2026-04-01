{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
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
								  <li>Link Statistics</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Link Statistics</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageStats" class="form" method="post" name="ManageStats">
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
							  <td><h2>Link Statistics {if $url neq "" }For {$url}{/if}</h2></td>
							  <!--<td align="right"><a href="{$siteurl}/admin/add-user.php">Add User</a></td>-->
							</tr>
							<tr>
							  <td  colspan="2">
								<div class="search_divbox">
									<input type="text" name="clicked_date" id="clicked_date" value="{if $smarty.request.clicked_date neq ""}{$smarty.request.clicked_date}{/if}" class="searchinput" />&nbsp;
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageStats.submit();" /> 
									<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageStats,'chkall[]','checkall');" /></th>
										<th width="20%" align="left"><a href="javascript: setClientSort('B.first_name','{$sortioption}',document.ManageStats);">Customer Name</a> {if $smarty.request.sortby eq 'B.first_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="18%" align="left"><a href="javascript: setClientSort('A.clicked_date','{$sortioption}',document.ManageStats);">Clicked Date {if $smarty.request.sortby eq 'A.clicked_date'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="12%" align="left">IP </th>
										<th width="35%" align="left">Browser</th>
										<th width="10%" align="left">Status</th>
									</tr>
									{foreach item=item name=item from=$Statistics}
									<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
										<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.stat_id}"/></td>
										<td align="left"><a href="{$siteurl}/admin/view-user.php?user_id={$item.user_id}">{$item.first_name}{$item.last_name}</a></td>
										<td align="left">{$item.clicked_date|date_format:"%b %d,%Y %I:%M:%S %p"}</td>
										<td align="left">{$item.clicked_ip}</td>
										<td align="left">{$item.clicked_browser}</td>
										<td align="left">{if $item.status eq 'A'}<span style="color:#008000">Active</span>{elseif $item.status eq 'I'}<span style="color:#FF0000">Inctive</span>{elseif $item.status eq 'D'}<span style="color:#800000">Deleted</span>{/if}</td>
									</tr>
									{foreachelse}
									<tr>
									 	<th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Statistics Found</strong></font></th>
									</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							{if $Statistics|@count gt 0}
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageStats,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageStats,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageStats,'D','chkall[]');"/>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$(document).ready(function() {	
	$("#clicked_date").datepicker();
		});	
</script>
{/literal}