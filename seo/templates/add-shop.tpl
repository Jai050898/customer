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
							<li><a href="{$siteurl}/seo/dashboard.php">Home</a></li>
							<li><a href="{$siteurl}/seo/manage-shops.php">Manage Shop</a></li>
							<li>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form id="UsersForm" class="form" name="UsersForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');" enctype="multipart/form-data">
										<input type="hidden" name="Image_Logo" id="Image_Logo" value="{$User.shop_img}" />
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Shop Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_name]" id="shop_name" class="input req-string" value="{$User.shop_name}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%">Email <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_email]" id="shop_email" class="input req-string req-email" value="{$User.shop_email}" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[shop_phone]" id="shop_phone"  value="{$User.shop_phone}"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Address</td>
												<td align="left"><textarea  name="Log[shop_address]" id="shop_address"  style="height:100px; width:300px;" >{$User.shop_address}</textarea></td>
											  </tr>
											<tr class="color_trbg">
												<td>Website </td>
												<td align="left"><input type="text" name="Log[shop_website]" id="shop_website" class="input" value="{$User.shop_website}"/></td>
											  </tr>
											<tr>
												<td>State <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shop_state]" id="shop_state" class="input req-string" value="{$User.shop_state}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>City <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shop_city]" id="shop_city" class="input req-string" value="{$User.shop_city}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[shop_zip]" id="shop_zip" class="input" value="{$User.shop_zip}"  maxlength="6"/></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
	<script language="javascript" type="text/javascript">
	$('#submitBtn1').formValidator({
			scope		: '#UsersForm',
			errorDiv	: '#errorDiv1'
	});
	</script>
{/literal}