{literal}
<style type="text/css">
<!--
.redstar {color: #FF0000}
-->
</style>
{/literal}
{include file=header.tpl}
<!--body-->
<div id="content" class="hfeed" style="min-height:500px;">
		<div class="inner_textpartm" style="font-size:14px;">
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');" enctype="multipart/form-data">
			<input type="hidden" name="Image_Logo" id="Image_Logo" value="{$AccDet.shop_img}" />
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h2>Edit Profile</h2>
			<table width="100%" border="0" cellspacing="10" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;">
				<tr>
					<td width="21%" style="padding-top:10px;"></td>
					<td width="79%"></td>
				</tr>
				<tr>
				  <td align="right" valign="center">Name<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_name]" id="shop_name" class="input req-string" value="{$AccDet.shop_name}"></td>
				</tr>
				<tr>
				  <td align="right" valign="center">Email:</td>
				  <td align="left" valign="center">{$AccDet.shop_email}</td>
				</tr>
				<tr>
				  <td align="right" valign="center">Upload Image:</td>
				  <td align="left" valign="center"><input name="image" id="image" type="file" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center">Phone<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_phone]" id="shop_phone" class="input req-string" value="{$AccDet.shop_phone}"></td>
				</tr>
				<div style="width:120px;float:left;margin-left:562px;z-index:100;margin-top:11px;position:absolute;vertical-align:bottom;margin-bottom:500px;">
				<img src="{$siteurl}/photos/resize/{$AccDet.shop_img}" id="thumb" style="padding:2px;border:1px solid #699908 height:70px" />
				</div>
				<span id="delspan"></span>
				<div id="MsgDiv" style="position:absolute;z-index:101;margin-left:560px;float:left;margin-top:125px;"></div>
				<tr>
				  <td align="right" valign="center">Phone Target<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_phone_target]" id="shop_phone_target" class="input req-string" value="{$AccDet.shop_phone_target}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top">Address<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><textarea name="Log[shop_address]" id="shop_address" class="input req-string" style="height:80px;">{$AccDet.shop_address}</textarea></td>
				</tr>
				<tr>
					<td align="right" valign="center">State<span class="redstar"> * </span>:</td>
					<td align="left" valign="center"><span id="StateRow"><input type="text" name="Log[shop_state]" id="shop_state" class="input req-string" value="{$AccDet.shop_state}"></td>
				</tr>
				<tr>
				  <td align="right" valign="top">City<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_city]" id="shop_city" value="{$AccDet.shop_city}" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top">Zip code<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_zip]" id="zip_code" value="{$AccDet.shop_zip}" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top">Web Site<span class="redstar"> * </span>:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_website]" id="shop_website" value="{$AccDet.shop_website}" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top">Shop Hours:</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_hours]" id="shop_hours" value="{$AccDet.shop_hours}" class="input"></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="left" valign="top" style="padding-left:250px;" colspan="2"><input name="input" id="Regis" type="Submit" value="Submit" class="form_submit" style="font-size:15px;padding:3px 5px;height:30px;" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajaxupload.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator({literal}{scope: {/literal}'#EditProfile',errorDiv:'#errorDiv1'});
	ImageUploadingForAll('image','MsgDiv','Image_Logo','yes','thumb');
</script>