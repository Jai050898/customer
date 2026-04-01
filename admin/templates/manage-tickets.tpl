{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
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
      <li>Manage Tickets</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Tickets</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageTickets" class="form" method="post" name="ManageTickets">
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
			  <td><h2>Manage Tickets</h2></td>
			  <td align="right">&nbsp;</td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
				<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageTickets.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			{if $Tickets|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTickets,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTickets,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTickets,'D','chkall[]');"/>
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
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageTickets,'chkall[]','checkall');" /></th>
				  <th width="25%" align="left">Customer</th>
				  <th width="15%" align="left">Priority</th>
				  <th width="15%" align="left">Subject</th>
				  <th width="15%" align="left">Requested Date</th>
				  <th width="15%" align="left">Responded Date</th>
				  <th width="10%" align="left">Status </th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				{foreach item=item name=item from=$Tickets}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.project_id}"/></td>
				  <td align="left"><a href="{$siteurl}/admin/view-user.php?user_id={$item.req_from}">{$item.first_name} {$item.last_name}</a>&nbsp;</td>
				  <td align="left">{if $item.priority eq 1}Urgent{elseif $item.priority eq 2}High{elseif $item.priority eq 3}Normal{elseif $item.priority eq 4}Low{else}Very Low{/if}</td>
				  <td align="left"><a href="{$siteurl}/ajax.php?For=ReqInfo&req_id={$item.req_id}&height=500&width=600" class="thickbox" title="View tickets">{$item.subject}</a></td>
				  <td align="left">{$item.create_date|date_format:"%m-%d-%Y"}</td>
				  <td align="left">{if $item.respond_date neq "0000-00-00 00:00:00"}{$item.respond_date|date_format:"%m-%d-%Y"}{else}--{/if}</td>
				  <td align="left"> {if $item.status eq "O"}<font color="#00CC33">Open</font>{elseif $item.status eq "R"}<font color="#0000FF">Re Open</font>{else}<font color="#FF0000">Closed</font>{/if}</td>
				  <td align="left"><a href="{$siteurl}/admin/view-ticket.php?ticket_id={$item.req_id}" class="link023">View</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Tickets Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
			{if $Tickets|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTickets,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTickets,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTickets,'D','chkall[]');"/>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>