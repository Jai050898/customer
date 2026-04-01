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
								  <li>Manage Links</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Links</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageLinks" class="form" method="post" name="ManageLinks">
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
							  <td><h2>Manage Links</h2></td>
							  <td align="right"><a href="{$siteurl}/admin/add-link.php">Add Link</a></td>
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
									<input type="image" src="../images/go_but.png" onclick="document.ManageLinks.submit();" /> 
									<div class="clr"></div>
								</div>
							  </td>
							</tr>
							{if $Links|@count gt 0}
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageLinks,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageLinks,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageLinks,'D','chkall[]');"/>
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
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageLinks,'chkall[]','checkall');" /></th>
										<th width="35%" align="left"><a href="javascript: setClientSort('link_url','{$sortioption}',document.ManageLinks);">Link</a> {if $smarty.request.sortby eq 'link_url'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="15%" align="left"><a href="javascript: setClientSort('no_of_clicks','{$sortioption}',document.ManageLinks);">No Of Clicks {if $smarty.request.sortby eq 'no_of_clicks'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}</th>
										<th width="10%" align="left">Code </th>
										<th width="20%" align="left">Created Date </th>
										<th width="20%" align="left">Status</th>
										<th width="20%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Links}
									<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
										<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.link_id}"/></td>
										<td align="left"><a href="{$item.link_url}" target="_blank">{$item.link_url}</a></td>
										<td align="left">{if $item.no_of_clicks neq "0"}<a href="{$siteurl}/admin/view-stats.php?link_id={$item.link_id}&url={$item.link_url|base64_encode}" class="link023">{$item.no_of_clicks}</a>{else}0{/if}</td>
										<td align="left">{$item.code}</td>
										<td align="left">{$item.created_date|date_format:"%m-%d-%Y"}</td>
										<td align="left">{if $item.status eq 'A'}<span style="color:#008000">Active</span>{elseif $item.status eq 'I'}<span style="color:#FF0000">Inctive</span>{elseif $item.status eq 'D'}<span style="color:#800000">Deleted</span>{/if}</td>
										<td align="left"><a href="{$siteurl}/admin/add-link.php?link_id={$item.link_id}" class="link023">Edit</a>&nbsp;<a href="{$siteurl}/admin/view-stats.php?link_id={$item.link_id}&url={$item.link_url|base64_encode}" class="link023">Statistics</a></td>
									</tr>
									{foreachelse}
									<tr>
									 	<th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Links Found</strong></font></th>
									</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							{if $Links|@count gt 0}
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageLinks,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageLinks,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageLinks,'D','chkall[]');"/>
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