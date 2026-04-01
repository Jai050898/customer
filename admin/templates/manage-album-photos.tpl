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
							  <li>Manage Album Photos</li>
						  </ul>
						 <div class="clr"></div>
					  </div>
					 <div id="admin_head">Manage Album Photos</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageAlbumPhotos" class="form" method="post" name="ManageAlbumPhotos">
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
						  <td  colspan="2"><div class="search_divbox">
						  <select name="user_id" id="user_id" class="searchinput" onchange="document.ManageAlbumPhotos.submit();">
								<option value="">Select User</option>
								{section name=list loop=$Users}
								<option value="{$Users[list].user_id}" {if $smarty.request.user_id eq $Users[list].user_id} selected="selected" {/if}>{$Users[list].first_name}</option>
								{/section}
							</select>&nbsp;
							<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageAlbumPhotos.submit();" /> 
						 <div class="clr"></div>
						  </div></td>
						</tr>
						{if $Photos|@count gt 0}
						<tr>
						  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
							<tr>
							<td  align="left" bgcolor="#854141">
							<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'A','chkall[]');"/>
							<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'I','chkall[]');" />
							<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'D','chkall[]');"/>
							</td>
							<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
							</tr>
							</table>
							</td>
							</tr>
						{/if}
						<tr>
						  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
							<tr>
							  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageAlbumPhotos,'chkall[]','checkall');" /></th>
							  <th width="40%" align="left"><a href="javascript: setClientSort('photo_name','{$sortioption}',document.ManageAlbumPhotos);">Photo Name</a> {if $smarty.request.sortby eq 'photo_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
							  <th width="20%" align="left">Posted By</th>
							  <th width="10%" align="left"><a href="javascript: setClientSort('views','{$sortioption}',document.ManageAlbumPhotos);">Views </a> {if $smarty.request.sortby eq 'views'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
							  <th width="15%" align="left"><a href="javascript: setClientSort('created_date','{$sortioption}',document.ManageAlbumPhotos);">Crated Date </a> {if $smarty.request.sortby eq 'created_date'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
							  <th width="15%" align="left">Status</th>
							</tr>
							{foreach item=item name=item from=$Photos}
							<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
							  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.photo_id}"/></td>
							  <td align="left"><a href="{$siteurl}/admin/view-image.php?Id={$item.photo_id|base64_encode}">{$item.photo_name}</a></td>
							  <td align="left"><a href="{$siteurl}/admin/view-user.php?user_id={$item.user_id}">{$item.first_name}</a></td>
							  <td align="left">{$item.views}</td>
							  <td align="left"> {$item.created_date|date_format:"%b %d,%Y"}</td>
							  <td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
							</tr>
							{foreachelse}
							<tr>
							  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Album Photos Added</strong></font></th>
							</tr>
							{/foreach}
						  </table></td>
						</tr>
						{if $Photos|@count gt 0}
						<tr>
						  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
							<tr>
							<td  align="left" bgcolor="#854141">
							<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'A','chkall[]');"/>
							<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'I','chkall[]');" />
							<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageAlbumPhotos,'D','chkall[]');"/>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>