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
								  <li>Manage Requests</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Requests</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageRequests" class="form" method="post" name="ManageRequests">
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
							  <td><h2>Manage Requests</h2></td>
							  <td align="right">&nbsp;</td>
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
									<input type="image" src="../images/go_but.png" onclick="document.ManageRequests.submit();" /> 
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
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageRequests,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageRequests,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageRequests,'D','chkall[]');"/>
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
										<th width="5%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageRequests,'chkall[]','checkall');" /></th>
										<th width="20%" align="left"><a href="javascript: setClientSort('bname','{$sortioption}',document.ManageRequests);">Business Name</a> {if $smarty.request.sortby eq 'bname'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="20%" align="left"><a href="javascript: setClientSort('domain','{$sortioption}',document.ManageRequests);">Domain</a> {if $smarty.request.sortby eq 'domain'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="20%" align="left"><a href="javascript: setClientSort('keyword','{$sortioption}',document.ManageRequests);">Keyword</a> {if $smarty.request.sortby eq 'keyword'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="15%" align="left">City </th>
										<th width="15%" align="left">State</th>
										<th width="10%" align="left">Status </th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.id}"/></td>
											<td align="left"> {$item.bname|stripslashes}</td>
											<td align="left"><a href="{$siteurl}/admin/view-request.php?id={$item.id}">{$item.domain}</a></td>
											<td align="left"> {$item.keyword|stripslashes}</td>
											<td align="left" >{$item.city|stripslashes}</td>
											<td align="left" >{$item.state|stripslashes}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Requests Added</strong></font></th>
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
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageRequests,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageRequests,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageRequests,'D','chkall[]');"/>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/general.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>