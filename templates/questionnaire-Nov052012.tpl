{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Survey</h1>
			<form name="myform" id="myform" method="post">
			<table width="100%" border="0" cellspacing="1" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><div style="font-size:16px;"><u><strong>{$Survey.cat_name}</strong></u></div></td>
				</tr>
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><div>{$Survey.cat_description|nl2br}</div></td>
				</tr>				
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2">&nbsp;</td>
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
					<p><strong>{$k}</strong></p>
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
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2" style=" color:#FF0000;">NOTE: Once you submit the survey you can not Update the answers that you have given</td>
				</tr>
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><input type="submit" name="submit" value="Submit Survey"</td>
				</tr>
				
				
			</table>
			</form>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
	<div><img src="images/bodybottom.png" alt="" /></div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>