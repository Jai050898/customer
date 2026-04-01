{include file="header.tpl"}
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
      <li><a href="{$siteurl}/dashboard.php">Home</a></li>
      <li>View User Questionnaire</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View User Questionnaire</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="myform" id="myform" method="post" action="user-questionniare.php?user_id={$smarty.request.user_id}">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View User Questionnaire</h2></td>
							 </tr>
							  <tr>
							  <td  colspan="2"><div class="search_divbox">
							  <select name="cat_id" id="cat_id" class="searchinput" onchange="document.myform.submit();">
									<option value="">Select Category</option>
									{section name=list loop=$Cat}
									<option value="{$Cat[list].cat_id}" {if $smarty.request.cat_id eq $Cat[list].cat_id} selected="selected" {/if}>{$Cat[list].cat_name}</option>
									{/section}
								</select>
							 <div class="clr"></div>
							  </div></td>
							</tr>
							  {foreach item=item name=item from=$Quest}
								<tr>
								   <td width="1%" style=" padding-left:15px;"><strong>{$smarty.foreach.item.index+1}.</strong></td>
								  <td width="90%" align="left" valign="left"><strong>{$item.question}</strong></td>
								</tr>
								<tr>
								<td colspan="2" style=" padding-left:35px;">
									{if $item.quest_type neq "T"}
									{foreach item=item1 name=item1 from=$item.Options}
									{if $item.quest_type eq "R"}
										<input type="radio" value="{$item1.option_id}" name="answer" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');" {if $item.Ans eq $item1.option_id} checked="checked"{/if} disabled="disabled">&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br><br>
									{elseif $item.quest_type eq "C"}
										<input type="checkbox" value="{$item1.option_id}" name="answers[]" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}',document.myform,'answers[]');" {if in_array($item1.option_id,$item.Ans)} checked="checked"{/if} disabled="disabled">&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br><br>
									{/if}
									{/foreach}
									{else}
									<textarea name="answer" cols="64" rows="10"  id="answer" style="width:400px; height:100px;" onblur="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');" readonly="readonly">{$item.Ans}</textarea>
									{/if}
									<div id="Ansdiv{$item.quest_id}"></div>
									</td>
								</tr>
								{foreachelse}
								<tr>
									<td style="padding-top:10px;padding-left:25px;" colspan="2">No Answers Found</td>
								</tr>
								{/foreach}
								{if $Quest|@count gt 0}
								<tr>
									<td colspan="2"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
								</tr>
								{/if}
							  
              </table>
			  			  </form>
		</td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
							  
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
{include file="footer.tpl"}
