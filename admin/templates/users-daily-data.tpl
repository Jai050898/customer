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
								  <li>Users Daily Data</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Users Daily Data</div>
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
							  <td><h2>Manage Users Daily Data</h2></td>
							  <td align="right"><a href="{$siteurl}/admin/add-daily-data.php?user_id={$smarty.request.user_id}">Add Daily Data</a></td>
							</tr>
							
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="10%" align="left">S No </th>
										<th width="20%" align="left">Date</th>
										<th width="15%" align="left">Available Hours</th>
										<th width="15%" align="left">Actual Hours</th>
										<th width="10%" align="left">Sold Hours</th>
										<th width="10%" align="left">Productivity</th>
										<th width="10%" align="left">Efficiency</th>
										<th width="10%" align="left">Status</th>
										<th width="10%" align="left">Actions </th>
									</tr>
									{foreach item=item name=item from=$Tasks}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left">{$smarty.foreach.item.index+1}</td>
											<td align="left" >{$item.ddate}</td>
											<td align="left">{$item.available_hours}</td>
											<td align="left">{$item.actual_hours}</td>
											<td align="left" >{$item.sold_hours}</td>
											<td align="left" >{$item.productivity}</td>
											<td align="left" >{$item.efficiency}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
											<td align="left">									
						<a href="{$siteurl}/admin/edit-daily-data.php?id={$item.id}&user_id={$smarty.request.user_id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="{$siteurl}/admin/users-daily-data.php?id={$item.id}&act=del&user_id={$smarty.request.user_id}" class="link023"><img src="{$siteurl}/images/del.png" border="0" title="Delete" alt="Delete" /></a>
											</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Daily Data Added</strong></font></th>
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