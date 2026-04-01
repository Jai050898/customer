{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
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
      <li>Manage Tasks</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Tasks</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageTasks" class="form" method="post" name="ManageTasks">
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
			  <td><h2>Manage Tasks</h2></td>
			  <td align="right"><a href="{$siteurl}/admin/add-tasks.php">Add Tasks</a></td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
			  	<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" {if $smarty.request.status eq "A"} selected="selected" {/if}>Active</option>
									<option value="I" {if $smarty.request.status eq "I"} selected="selected" {/if}>In Active</option>
								</select>&nbsp;&nbsp;
				<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageTasks.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			{if $Tasks|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTasks,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTasks,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTasks,'D','chkall[]');"/>
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
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageTasks,'chkall[]','checkall');" /></th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('A.name','{$sortioption}',document.ManageTasks);">Project Name</a> {if $smarty.request.sortby eq 'A.name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('title','{$sortioption}',document.ManageTasks);">Title</a> {if $smarty.request.sortby eq 'title'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
				  <th width="12%" align="left"><a href="javascript: setClientSort('A.dead_line','{$sortioption}',document.ManageTasks);">Dead Line Date </a> {if $smarty.request.sortby eq 'A.dead_line'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
				  <th width="10%" align="left">Comments</th>
				  <th width="20%" align="left">Status </th>
				  <th width="5%" align="left">Actions </th>
				</tr>
				{foreach item=item name=item from=$Tasks}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.project_id}"/></td>
				  <td align="left"><a href="{$siteurl}/admin/view-project.php?project_id={$item.project_id}">{$item.name}</a>&nbsp;</td>
				  <td align="left"><a href="{$siteurl}/admin/view-task.php?task_id={$item.task_id}">{$item.title}</a></td>
				  <td align="left"> {$item.dead_line|date_format:"%m-%d-%Y"}</td>
				  <td align="left"><a href="{$siteurl}/ajax.php?For=Comments&height=600&width=600&type=A&Id={$item.task_id|base64_encode}" class="thickbox" title="View Comments">{$item.commentcount}</a></td>
				  <td align="left"><span class="progressBar" id="task_status{$smarty.foreach.item.index}">{$item.task_status}</span></td>
				  <td align="left"><a href="{$siteurl}/admin/add-tasks.php?task_id={$item.task_id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Tasks Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
			{if $Tasks|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageTasks,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageTasks,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageTasks,'D','chkall[]');"/>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.progressbar.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script type="text/javascript">
	$(document).ready(function() {
		{/literal}{foreach item=item name=item from=$Tasks}{literal}
		$("#task_status{/literal}{$smarty.foreach.item.index}{literal}").progressBar();
		{/literal}{/foreach}{literal}
	});
</script>
{/literal}