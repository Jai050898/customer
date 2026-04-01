{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.album_id neq ""}Edit{else}Add{/if} Project</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[name]" id="name" class="input req-string" value="{$Projects.name}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Description:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[description]" cols="64" rows="10"  id="album_description" class="input req-string" style="width:460px; height:200px;">{$Projects.description}</textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Status:</td>
				  <td align="left" valign="center"><select name="Log[project_status]" id="project_status" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="1" {if $Projects.project_status eq "1"} selected="selected"{/if}>New</option>
											<option value="2" {if $Projects.project_status eq "2"} selected="selected"{/if}>Proposal</option>
											<option value="3" {if $Projects.project_status eq "3"} selected="selected"{/if}>In Progress</option>
											<option value="4" {if $Projects.project_status eq "4"} selected="selected"{/if}>Completed</option>
											<option value="5" {if $Projects.project_status eq "5"} selected="selected"{/if}>Cancelled</option>
										</select></td>
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
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#ProjectForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$('#album_description').wysiwyg();
		});	
</script>
{/literal}