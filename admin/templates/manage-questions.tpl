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
      <li>Manage Questions</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Manage Questions</div>
      </div>
	  <div class="ad_textsp">
		<form id="ManageQuest" class="form" method="get" name="ManageQuest">
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
			  <td><h2>Manage Questions</h2></td>
			  <td align="right"><a href="{$siteurl}/admin/add-question.php">Add Question</a></td>
			</tr>
			 <tr>
			  <td  colspan="2"><div class="search_divbox">
			  <select name="cat_id" id="cat_id" class="searchinput" onchange="document.ManageQuest.submit();">
					<option value="">Select Survey</option>
					{section name=list loop=$Cat}
					<option value="{$Cat[list].cat_id}" {if $smarty.request.cat_id eq $Cat[list].cat_id} selected="selected" {/if}>{$Cat[list].cat_name}</option>
					{/section}
				</select>&nbsp;
			  <select name="quest_type" id="quest_type"  class="searchinput" onchange="document.ManageQuest.submit();">
					<option value="">Select Question Type</option>
					<option value="R" {if $smarty.request.quest_type eq "R"} selected="selected" {/if}>Radio</option>
					<option value="C" {if $smarty.request.quest_type eq "C"} selected="selected" {/if}>Multple Choice</option>
					<option value="B" {if $smarty.request.quest_type eq "B"} selected="selected" {/if}>Text Box</option>
					<option value="T" {if $smarty.request.quest_type eq "T"} selected="selected" {/if}>Text Answer</option>
				</select>&nbsp;
				<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" /> <input type="image" src="../images/go_but.png" onclick="document.ManageQuest.submit();" /> 
			 <div class="clr"></div>
			  </div></td>
			</tr>
			{if $Quest|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageQuest,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageQuest,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageQuest,'D','chkall[]');"/>
				</td>
				<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
				</tr>
				</table>
				</td>
                </tr>
			{/if}
			
			{if $smarty.request.cat_id neq ""}
			<tr>
			  <td align="left" valign="top" colspan="2"><table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
				<tr>
				  <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageQuest,'chkall[]','checkall');" /></th>
				  <th width="5%" align="left">Order</th>
				  <th width="8%" align="left">Order No</th>
				  <th width="15%" align="left"><a href="javascript: setClientSort('A.quest_type','{$sortioption}',document.ManageQuest);">Question Type </a> {if $smarty.request.sortby eq 'A.quest_type'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
				  <th width="20%" align="left">Question </th>
				  <th width="15%" align="left">Status</th>
				  <th width="15%" align="left">Created Date</th>
				  <th width="10%" align="left">Actions </th>
				</tr>
				{foreach item=item name=item from=$Quest}
				<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
				  <td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="{$item.quest_id}"/></td>
				  <td align="left">
				  {if $Quest|@count gt 1}
				  {if $smarty.foreach.item.first}<a href="{$siteurl}/admin/manage-questions.php?act=down&id={$item.quest_id}&cat_id={$item.cat_id}&order={$item.showorder}"><img src="{$siteurl}/images/arrow_down.png" /></a>{elseif $smarty.foreach.item.last}<a href="{$siteurl}/admin/manage-questions.php?act=up&id={$item.quest_id}&cat_id={$item.cat_id}&order={$item.showorder}"><img src="{$siteurl}/images/arrow_up.png" /></a>{else}<a href="{$siteurl}/admin/manage-questions.php?act=down&id={$item.quest_id}&cat_id={$item.cat_id}&order={$item.showorder}"><img src="{$siteurl}/images/arrow_down.png" /></a>&nbsp;&nbsp;<a href="{$siteurl}/admin/manage-questions.php?act=up&id={$item.quest_id}&cat_id={$item.cat_id}&order={$item.showorder}"><img src="{$siteurl}/images/arrow_up.png" /></a>{/if}
				  {/if}
				  </td>
				  <td align="left">{$item.showorder}</td>
				  <td align="left">{if $item.quest_type eq "R"}Radio{elseif $item.quest_type eq "C"}Multple Choice{elseif $item.quest_type eq "B"}Text box{else}Text Answer{/if}</td>
				  <td align="left"><a href="{$siteurl}/admin/view-question.php?quest_id={$item.quest_id}"> {$item.question|stripslashes}</a></td>
				  <td align="left">{if $item.status eq "A"}<font color="#00CC33">Active</font>{elseif $item.status eq "I"}<font color="#0000FF">InActive</font>{elseif $item.status eq "P"}<font color="#00EEFF">Pending</font>{else}<font color="#FF0000">Deleted</font>{/if}</td>
				  <td align="left"> {$item.created_date|date_format:"%m-%d-%Y"}</td> 				  
				  <td align="left"><a href="{$siteurl}/admin/add-question.php?quest_id={$item.quest_id}" class="link023">Edit</a></td>
				</tr>
				{foreachelse}
				<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Questions Added</strong></font></th>
				</tr>
				{/foreach}
			  </table></td>
			</tr>
			{else}
			<tr>
				  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>Please Select Survey</strong></font></th>
				</tr>
			{/if}
			
			{if $Quest|@count gt 0}
			<tr>
			  <td colspan="2"><table width="100%" cellspacing="0" cellpadding="5">
				<tr>
				<td  align="left" bgcolor="#854141">
				<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageQuest,'A','chkall[]');"/>
				<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageQuest,'I','chkall[]');" />
				<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageQuest,'D','chkall[]');"/>
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