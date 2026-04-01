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
							  <li><a href="{$siteurl}/dashboard.php">Home</a></li>
							  <li>Survey Response</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> Survey Response</div>
				  </div>
				  
				<div class="ad_textsp">
				<p align="justify" style="padding-right:15px">
					<table width="100%" border="0" cellspacing="1" cellpadding="5">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><span style="font-size:18px;">Survey Name : {$Survey.cat_name}</span></td>
				</tr>
				{foreach item=item name=item from=$Quest}
				<tr>
				   <td width="100%" style=" padding-left:15px;">{$smarty.foreach.item.index+1}.&nbsp;&nbsp;<strong>{$item.question|stripslashes}</strong></td>
				</tr>
				<tr>
				<td colspan="2" style=" padding-left:35px;">
					{if $item.quest_type neq "T" && $item.quest_type neq "B"}
					{foreach item=item1 name=item1 from=$item.Options}
					{if $item.quest_type eq "R"}
						<input type="radio" value="{$item1.option_id}" name="answer{$item.quest_id}" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');" {if $item.Ans eq $item1.option_id} checked="checked"{/if}>&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br>
					{elseif $item.quest_type eq "C"}
						<input type="checkbox" value="{$item1.option_id}" name="answers[]" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}',document.myform,'answers[]');" {if in_array($item1.option_id,$item.Ans)} checked="checked"{/if}>&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br>
					{/if}
					{/foreach}
					{foreach from=$item.OptionsLab key=k item=v}
					<p style="padding-top:10px;"><strong>{$k}</strong></p>
					{foreach item=item1 name=item1 from=$v}
					{if $item.quest_type eq "R"}
						<input type="radio" value="{$item1.option_id}" name="answer{$item.quest_id}" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');" {if $item.Ans eq $item1.option_id} checked="checked"{/if}>&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br>
					{elseif $item.quest_type eq "C"}
						<input type="checkbox" value="{$item1.option_id}" name="answers[]" onchange="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}',document.myform,'answers[]');" {if in_array($item1.option_id,$item.Ans)} checked="checked"{/if}>&nbsp;&nbsp;<strong>{$item1.option_name}</strong><br>
					{/if}
					{/foreach}
					
					{/foreach}
					{elseif $item.quest_type eq "B"}
						<input type="text" value="{$item.Ans}" id="answer" name="answer" onblur="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');" /> 
					{else}
					<textarea name="answer" cols="64" rows="10"  id="answer" style="width:400px; height:100px;" onblur="javascript: StoreAnswer('{$item.quest_id}',this.value,'{$smarty.request.cat}','{$item.quest_type}');">{$item.Ans}</textarea>
					{/if}
					<div id="Ansdiv{$item.quest_id}"></div>
					</td>
				</tr>
				{foreachelse}
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2">No Questions Added</td>
				</tr>
				{/foreach}
				{if $Quest|@count gt 0}
				<tr>
					<td colspan="2"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
				</tr>
				{/if}
			</table>
                </p>
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