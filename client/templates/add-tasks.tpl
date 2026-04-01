{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.task_id neq ""}Edit{else}Add{/if}Task</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Priority:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[priority]" id="priority" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" {if $Tasks.priority eq "1"} selected="selected"{/if}>Urgent</option>
										<option value="2" {if $Tasks.priority eq "2"} selected="selected"{/if}>High Priority</option>
										<option value="3" {if $Tasks.priority eq "3"} selected="selected"{/if}>Mediun Priority</option>
										<option value="4" {if $Tasks.priority eq "4"} selected="selected"{/if}>Normal Priority</option>
										<option value="5" {if $Tasks.priority eq "5"} selected="selected"{/if}>Low Priority</option>
										<option value="6" {if $Tasks.priority eq "6"} selected="selected"{/if}>Very Low Priority</option>
										<option value="7" {if $Tasks.priority eq "7"} selected="selected"{/if}>Whatever</option>
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Context:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[context]" id="context" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" {if $Tasks.context eq "1"} selected="selected"{/if}>Work</option>
										<option value="2" {if $Tasks.context eq "2"} selected="selected"{/if}>Meeting</option>
										<option value="3" {if $Tasks.context eq "3"} selected="selected"{/if}>Document</option>
										<option value="4" {if $Tasks.context eq "4"} selected="selected"{/if}>Internet</option>
										<option value="5" {if $Tasks.context eq "5"} selected="selected"{/if}>Phone</option>
										<option value="6" {if $Tasks.context eq "6"} selected="selected"{/if}>Email</option>
										<option value="7" {if $Tasks.context eq "7"} selected="selected"{/if}>Home</option>
										<option value="8" {if $Tasks.context eq "8"} selected="selected"{/if}>Others</option>
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Deadline:</td>
				  <td align="left" valign="center"><input type="text" name="deadline" id="deadline" class="select req-string" value="{$Tasks.dead_line|date_format:'%m-%d-%Y'}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Project:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[project_id]" id="project_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Projects}
										<option value="{$item.project_id}" {if $item.project_id eq $Tasks.project_id} selected="selected"{/if}>{$item.name}</option>
										{/foreach}
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Title:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[title]" id="title" class="select req-string" value="{$Tasks.title}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Description:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[description]" cols="64" rows="10"  id="task_description" class="input req-string" style="width:450px; height:200px;">{$Tasks.description}</textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">User:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[user_id]" id="user_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Users}
										<option value="{$item.user_id}" {if $item.user_id eq $Tasks.user_id} selected="selected"{/if}>{$item.first_name}</option>
										{/foreach}
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Task Status:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="hidden" name="task_status" id="task_status"  value="{$Tasks.task_status}"/> 
									<span class="progressBar" id="sb">{$Tasks.task_status}%</span>
									<span>
									<a href="javascript:fnSelectProf('sb',20,'task_status');" id="c20d">20</a> |
									<a href="javascript:fnSelectProf('sb',40,'task_status');" id="c40d">40</a> |
									<a href="javascript:fnSelectProf('sb',60,'task_status');" id="c60d">60</a> |
									<a href="javascript:fnSelectProf('sb',80,'task_status');" id="c80d">80</a> |
									<a href="javascript:fnSelectProf('sb',100,'task_status');" id="c100d">100</a>
								</span></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.progressbar.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$("#sb").progressBar();
	$("#deadline").datepicker();
	$('#task_description').wysiwyg();
		});	
</script>
{/literal}