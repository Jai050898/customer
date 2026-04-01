{include file=header.tpl}
<!--body-->
<div id="content" class="hfeed" style="min-height:500px;">
<div align="right" style="float:right; font-size:14px;"><table cellpadding="0" cellspacing="0"><tr><td style="padding-right:5px;"><img src="{$siteurl}/images/arrow.gif" border="0" /></td><td> <a href="{$siteurl}/edit-profile.php">Edit Profile</a></td></tr></table></div>
		<div class="inner_textpartm" style="font-size:14px;">
			<div style="height:10px;"></div>
			<h2>Account Details</h2>
			<table width="100%" border="0" cellspacing="10" cellpadding="5" style="background-image:url(images/contactbg.gif); background-repeat:no-repeat; background-position:top;">
				<tr>
					<td style="padding-top:10px;" colspan="2">&nbsp;</td>
				</tr>
				<tr>
				  <td width="22%" align="right" valign="center" style="padding-left:55px;">Shop Name:</td>
				  <td width="78%" align="left" valign="center"><strong>{$AccDet.shop_name}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Email:</td>
				  <td align="left" valign="center">{$AccDet.shop_email}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Phone:</td>
				  <td align="left" valign="center">{$AccDet.shop_phone}</td>
				</tr>
				<div style="width:120px;float:left;margin-left:562px;z-index:100;margin-top:11px;position:absolute;vertical-align:bottom;margin-bottom:500px;">
				<img src="{$siteurl}/photos/resize/{$AccDet.shop_img}" id="thumb" style="padding:2px;border:1px solid #699908 height:70px" />
				</div>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Phone Target:</td>
				  <td align="left" valign="center">{$AccDet.shop_phone_target}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Address:</td>
				  <td align="left" valign="center">{$AccDet.shop_address}</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">State:</td>
					<td align="left" valign="center">{$AccDet.shop_state}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">City:</td>
				  <td align="left" valign="center">{$AccDet.shop_city}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Zip code:</td>
				  <td align="left" valign="center">{$AccDet.shop_zip}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Web Site:</td>
				  <td align="left" valign="center">{$AccDet.shop_website}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Shop Hours:</td>
				  <td align="left" valign="center">{if $AccDet.shop_hours neq ""}{$AccDet.shop_hours}{else}NA{/if}</td>
				</tr>			
			</table>
			<div class="clear"></div>
		</div>
</div>
<!--end body-->	
{include file="footer.tpl"}