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
      <li>Manage Projects</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Projects</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageProjects" class="form" method="post" name="ManageProjects">
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
			  <td><h2>Manage Projects</h2></td>
			  <td align="right"><a href="{$siteurl}/admin/add-project.php">Add Project</a></td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
			  	<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" {if $smarty.request.status eq "A"} selected="selected" {/if}>Active</option>
									<option value="I" {if $smarty.request.status eq "I"} selected="selected" {/if}>In Active</option>
								</select>&nbsp;&nbsp;
				<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageProjects.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			{if $Projects|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageProjects,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageProjects,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageProjects,'D','chkall[]');"/>
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
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageProjects,'chkall[]','checkall');" /></th>
				  <th width="25%" align="left"><a href="javascript: setClientSort('A.name','{$sortioption}',document.ManageProjects);">Project Name</a> {if $smarty.request.sortby eq 'A.name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
				  <th width="15%" align="left">Customer</th>
				  <th width="15%" align="left">Project Status </th>
				  <th width="10%" align="left"><a href="javascript: setClientSort('totaltasks','{$sortioption}',document.ManageProjects);">Tasks</a> {if $smarty.request.sortby eq 'totaltasks'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
				  <th width="10%" align="left">Status </th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('A.created_date','{$sortioption}',document.ManageProjects);">Crated Date </a> {if $smarty.request.sortby eq 'A.created_date'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				{foreach item=item name=item from=$Projects}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.project_id}"/></td>
				  <td align="left"><a href="{$siteurl}/admin/view-project.php?project_id={$item.project_id}">{$item.name}</a>&nbsp;</td>
				  <td align="left">{$item.first_name} {$item.last_name}</td>
				  <td align="left">{if $item.project_status eq "1"}<font color="#00CC33">New</font>{elseif $item.project_status eq "2"}<font color="#0000FF">Proposal</font>{elseif $item.project_status eq "3"}<font color="#00EEFF">In Progress</font>{elseif $item.project_status eq "4"}<font color="#00ff00">Completed</font>{else}<font color="#FF0000">Cancelled</font>{/if}</td>
				  <td align="left">{$item.totaltasks}</td>
				  <td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
				  <td align="left"> {$item.created_date|date_format:"%m-%d-%Y"}</td>
				  <td align="left"><a href="{$siteurl}/admin/add-project.php?project_id={$item.project_id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Projects Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
			{if $Projects|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageProjects,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageProjects,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageProjects,'D','chkall[]');"/>
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