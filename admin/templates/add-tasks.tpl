{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
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
      <li>{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Task</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Task</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>{if $smarty.request.task_id neq ""}Edit{else}Add{/if} Task</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									<select name="Log[priority]" id="priority" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" {if $Tasks.priority eq "1"} selected="selected"{/if}>Urgent</option>
										<option value="2" {if $Tasks.priority eq "2"} selected="selected"{/if}>High Priority</option>
										<option value="3" {if $Tasks.priority eq "3"} selected="selected"{/if}>Mediun Priority</option>
										<option value="4" {if $Tasks.priority eq "4"} selected="selected"{/if}>Normal Priority</option>
										<option value="5" {if $Tasks.priority eq "5"} selected="selected"{/if}>Low Priority</option>
										<option value="6" {if $Tasks.priority eq "6"} selected="selected"{/if}>Very Low Priority</option>
										<option value="7" {if $Tasks.priority eq "7"} selected="selected"{/if}>Whatever</option>
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Context:</td>
								<td width="80%" align="left">
								<select name="Log[context]" id="context" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" {if $Tasks.context eq "1"} selected="selected"{/if}>Work</option>
										<option value="2" {if $Tasks.context eq "2"} selected="selected"{/if}>Meeting</option>
										<option value="3" {if $Tasks.context eq "3"} selected="selected"{/if}>Document</option>
										<option value="4" {if $Tasks.context eq "4"} selected="selected"{/if}>Internet</option>
										<option value="5" {if $Tasks.context eq "5"} selected="selected"{/if}>Phone</option>
										<option value="6" {if $Tasks.context eq "6"} selected="selected"{/if}>Email</option>
										<option value="7" {if $Tasks.context eq "7"} selected="selected"{/if}>Home</option>
										<option value="8" {if $Tasks.context eq "8"} selected="selected"{/if}>Others</option>
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Deadline</td>
								<td width="80%" align="left">
									<input type="text" name="deadline" id="deadline" class="select req-string" value="{$Tasks.dead_line|date_format:'%m-%d-%Y'}"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Project:</td>
								<td width="80%" align="left">
									<select name="Log[project_id]" id="project_id" class="select req-string">
										<option value="">-- Select --</option>
										{foreach item=item name=item from=$Projects}
										<option value="{$item.project_id}" {if $item.project_id eq $Tasks.project_id} selected="selected"{/if}>{$item.name}</option>
										{/foreach}
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Title</td>
								<td width="80%" align="left">
									<input type="text" name="Log[title]" id="title" class="select req-string" value="{$Tasks.title}"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Description</td>
								<td width="80%" align="left">
									<textarea name="Log[description]" cols="64" rows="10"  id="task_description" class="input req-string" style="width:500px; height:200px;">{$Tasks.description}</textarea>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Task Status</td>
								<td width="80%" align="left">
									<input type="hidden" name="task_status" id="task_status"  value="{$Tasks.task_status}"/> 
									<span class="progressBar" id="sb">{$Tasks.task_status}%</span>
									<span>
									<a href="javascript:fnSelectProf('sb',20,'task_status');" id="c20d">20</a> |
									<a href="javascript:fnSelectProf('sb',40,'task_status');" id="c40d">40</a> |
									<a href="javascript:fnSelectProf('sb',60,'task_status');" id="c60d">60</a> |
									<a href="javascript:fnSelectProf('sb',80,'task_status');" id="c80d">80</a> |
									<a href="javascript:fnSelectProf('sb',100,'task_status');" id="c100d">100</a>
								</span>
								 </td>
							  </tr>
							  <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
                </tr>
              </table>
		</form></td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
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