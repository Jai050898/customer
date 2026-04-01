{include file="header.tpl"}
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="{$siteurl}/seo/dashboard.php">Home</a></li>
								  <li>What if Scenarios</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">What if Scenarios</div>
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
							  <td><h2>What if Scenarios</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageUsers,'chkall[]','checkall');" /></th>
										<th width="5%" align="left">S No </th>
										<th width="9%" align="left">Year</th>
										<th width="9%" align="left">GLS</th>
										<th width="9%" align="left">GPS</th>
										<th width="9%" align="left">GS</th>
										<th width="9%" align="left">TLC</th>
										<th width="9%" align="left">TPC</th>
										<th width="9%" align="left">MB</th>
										<th width="9%" align="left">RB</th>
										<th width="9%" align="left">NOCN</th>
										<th width="9%" align="left">Status</th>
										<th width="5%" align="left">Action</th>
									</tr>
									{foreach item=item name=item from=$Tasks}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
										<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.id}"/></td>
											<td align="left">{$smarty.foreach.item.index+1}</td>
											<td align="left">{$item.year}</td>
											<td align="left" >{$item.GLS}</td>
											<td align="left">{$item.GPS}</td>
											<td align="left">{$item.GS}</td>
											<td align="left">{$item.TLC}</td>
											<td align="left">{$item.TPC}</td>
											<td align="left">{$item.MB}</td>
											<td align="left">{$item.RB}</td>
											<td align="left">{$item.NOC}</td>
											<td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
											<td align="left">
											<a href="{$siteurl}/seo/edit-wis.php?id={$item.id}&user_id={$smarty.request.user_id}" class="link023"><img src="{$siteurl}/images/edit.png" border="0" title="Edit" alt="Edit" /></a>
											</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="13"><font color="#FF0000"><strong>No What if Scenarios Added</strong></font></th>
										</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							{if $Tasks|@count gt 0}
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
<script language="javascript" type="text/javascript" src="{$siteurl}/seo/js/jquery.ufvalidator-1.0.4.js"></script>