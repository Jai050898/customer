{include file=header.tpl}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<div style="height:10px;"></div>
			<h1>{if $smarty.request.project_id neq ""}Edit{else}Add{/if} Competitor</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[name]" id="name" class="input req-string" value="{$Projects.name|stripslashes}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Address:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[address]" id="address" class="input req-string" value="{$Projects.address}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">City:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[city]" id="city" class="input req-string" value="{$Projects.city}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">State:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[state]" id="state" class="input req-string" value="{$Projects.state}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Zip Code:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[zip]" id="zip" class="input req-string" value="{$Projects.zip}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">WebSite:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[website]" id="website" class="input" value="{$Projects.website}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Phone:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[phone]" id="phone" class="input" value="{$Projects.phone}"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Reviews:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[reviews]" id="reviews" class="input" value="{$Projects.reviews}"/></td>
				</tr>
				
				
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Verified:</td>
				  <td align="left" valign="center"><select name="Log[verified]" id="verified" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="Y" {if $Projects.verified eq "Y"} selected="selected"{/if}>YES</option>
											<option value="N" {if $Projects.verified eq "N"} selected="selected"{/if}>NO</option>
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