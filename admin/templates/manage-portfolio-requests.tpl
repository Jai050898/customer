{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
{/literal}
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
      <li>Manage Portfolio Requests</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Portfolio Requests</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManagePortfolio" class="form" method="post" name="ManagePortfolio">
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
			  <td><h2>Manage Portfolio Requests</h2></td>
			  <td align="right"><a href="{$siteurl}/admin/add-portfolio-request.php">Add Portfolio Requests</a></td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
			  	<select name="show_status" id="show_status" class="searchinput">
									<option value="">-- Protfolio Status --</option>
									<option value="Y" {if $smarty.request.show_status eq "Y"} selected="selected" {/if}>YES</option>
									<option value="N" {if $smarty.request.show_status eq "N"} selected="selected" {/if}>NO</option>
								</select>&nbsp;&nbsp;
				<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" {if $smarty.request.status eq "A"} selected="selected" {/if}>Active</option>
									<option value="I" {if $smarty.request.status eq "I"} selected="selected" {/if}>InActive</option>
								</select>&nbsp;&nbsp;
				<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManagePortfolio.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			{if $Portfolio|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManagePortfolio,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManagePortfolio,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManagePortfolio,'D','chkall[]');"/>
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
				  <th width="5%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManagePortfolio,'chkall[]','checkall');" /></th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('name','{$sortioption}',document.ManagePortfolio);">Name</a> {if $smarty.request.sortby eq 'name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
				  <th width="10%" align="left">Phone </th>
				  <th width="15%" align="left">Email </th>
				  <th width="10%" align="left">Code </th>
				  <th width="10%" align="left">Portfolio Status </th>
				  <th width="10%" align="left">Status </th>
				  <th width="10%" align="left"><a href="javascript: setClientSort('requeste_date','{$sortioption}',document.ManagePortfolio);">Date </a> {if $smarty.request.sortby eq 'requeste_date'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				{foreach item=item name=item from=$Portfolio}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.id}"/></td>
				  <td align="left">{$item.name}</td>
				  <td align="left">{$item.phone}</td>
				  <td align="left">{$item.email}</td>
				  <td align="left">{if $item.code neq ""} {$item.code}{else}NA{/if}</td>
				  <td align="left">{if $item.show_status eq "Y"}<font color="#00CC33">YES</font>{else}<font color="#FF0000">No</font>{/if}</td>
				  <td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
				  <td align="left"> {$item.request_date|date_format:"%b %d,%Y"}</td>
				  <td align="left"><a href="{$siteurl}/admin/add-portfolio-request.php?portfolio_id={$item.id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Portfolio Requests Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
			{if $Portfolio|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManagePortfolio,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManagePortfolio,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManagePortfolio,'D','chkall[]');"/>
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
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>