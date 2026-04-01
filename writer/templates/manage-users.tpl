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
								  <li><a href="{$siteurl}/writer/dashboard.php">Home</a></li>
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
									<input type="image" src="../images/go_but.png" onclick="document.ManageUsers.submit();" /> 
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
										<th width="5%" align="left">S No</th>
										<th width="30%" align="left"><a href="javascript: setClientSort('A.company_name','{$sortioption}',document.ManageUsers);">Customer Name</a> {if $smarty.request.sortby eq 'A.company_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th width="35%" align="left"><a href="javascript: setClientSort('A.email','{$sortioption}',document.ManageUsers);">Email </a> {if $smarty.request.sortby eq 'A.email'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th width="15%" align="left">Status </th>
										<th width="15%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left">{$smarty.foreach.item.index+1}</td>
											<td align="left"><a href="{$siteurl}/writer/view-user.php?user_id={$item.user_id}">{$item.company_name|stripslashes}</a></td>
											<td align="left" style="padding-right:15px;"> {$item.email}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
											<td align="left">
											<a href="{$siteurl}/writer/site-inspection.php?id={$item.user_id}" class="link023"><img src="{$siteurl}/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></a>&nbsp;
											<a href="{$siteurl}/writer/print.php?user_id={$item.user_id}" class="link023" target="_blank"><img src="{$siteurl}/images/print.gif" title="Print" alt="Print" /></a>&nbsp;
											<a href="{$siteurl}/writer/export.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></a>&nbsp;
											<a href="{$siteurl}/writer/export-brands.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></a>&nbsp;
											<a href="{$siteurl}/writer/export-all.php?user_id={$item.user_id}" class="link023"><img src="{$siteurl}/images/download.png" title="Export All List" alt="Export All List" /></a>
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
												<td  align="left" bgcolor="#854141">&nbsp;
													
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