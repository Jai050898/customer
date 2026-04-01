{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
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
					  <li>{if $smarty.request.project_id neq ""}Edit{else}Add{/if} Project</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head">{if $smarty.request.project_id neq ""}Edit{else}Add{/if} Project</div>
				</div>
				<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
						<td align="left" valign="top" >
							<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="hid_key" id="hid_key" value="">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2>{if $smarty.request.project_id neq ""}Edit{else}Add{/if} Project</h2></td>
									  </tr>
									  <tr class="color_trbg">
										<td width="20%">Customer</td>
										<td width="80%" align="left">
											<select name="Log[client_id]" id="client_id" class="select req-string">
												<option value="">-- Select --</option>
												{foreach item=item name=item from=$Clients}
												<option value="{$item.user_id}" {if $Projects.client_id eq $item.user_id} selected="selected"{/if}>{$item.first_name}</option>
												{/foreach}
											</select>
										 </td>
									  </tr>
									  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									<select name="Log[priority]" id="priority" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" {if $Projects.priority eq "1"} selected="selected"{/if}>Urgent</option>
										<option value="2" {if $Projects.priority eq "2"} selected="selected"{/if}>High Priority</option>
										<option value="3" {if $Projects.priority eq "3"} selected="selected"{/if}>Medium Priority</option>
										<option value="4" {if $Projects.priority eq "4"} selected="selected"{/if}>Normal Priority</option>
										<option value="5" {if $Projects.priority eq "5"} selected="selected"{/if}>Low Priority</option>
										<option value="6" {if $Projects.priority eq "6"} selected="selected"{/if}>Very Low Priority</option>
										<option value="7" {if $Projects.priority eq "7"} selected="selected"{/if}>Whatever</option>
									</select>
								 </td>
							  </tr>
									<tr class="color_trbg">
									<td width="20%">Project Name</td>
									<td width="80%" align="left">
										<input type="text" name="Log[name]" id="album_name" class="select req-string" value="{$Projects.name}"/>
									 </td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left"><textarea name="Log[description]" cols="64" rows="10"  id="album_description" class="input req-string" style="width:500px; height:200px;">{$Projects.description}</textarea>
									 	</td>
									</tr>
									<tr class="color_trbg">
									<td width="20%">Project Status</td>
									<td width="80%" align="left">
										<select name="Log[project_status]" id="project_status" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="1" {if $Projects.project_status eq "1"} selected="selected"{/if}>New</option>
											<option value="2" {if $Projects.project_status eq "2"} selected="selected"{/if}>Proposal</option>
											<option value="3" {if $Projects.project_status eq "3"} selected="selected"{/if}>In Progress</option>
											<option value="4" {if $Projects.project_status eq "4"} selected="selected"{/if}>Completed</option>
											<option value="5" {if $Projects.project_status eq "5"} selected="selected"{/if}>Cancelled</option>
										</select>
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
							</form>
						</td>
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
		</div>
	</div>
</div>
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