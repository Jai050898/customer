{include file="header.tpl"}
{literal}
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
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
							<li><a href="{$siteurl}/admin/manage-competitors.php">Manage Competitors</a></li>
							<li>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Competitors</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Competitors</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="UsersForm" id="UsersForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Competitors</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[name]" id="name" class="input req-string" value="{$User.name|stripslashes}"/>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%">Address</td>
												<td width="88%" align="left">
													<input type="text" name="Log[address]" id="address" class="input req-string" value="{$User.address}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input req-string" value="{$User.city}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>State</td>
												<td align="left"><input type="text" name="Log[state]" id="state" class="input req-string" value="{$User.state}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip]" id="zip" class="input req-string" value="{$User.zip}" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input" value="{$User.phone}"/></td>
											 </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="{$User.website}" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Reviews</td>
												<td align="left"><input type="text" name="Log[reviews]" id="reviews" class="input" value="{$User.reviews}" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Verified</td>
												<td align="left">
												<select name="Log[verified]" id="verified" class="input req-string">
												<option value="">-- Please Select --</option>
												<option value="Y" {if $User.verified eq "Y"} selected="selected" {/if}>YES</option>
												<option value="N" {if $User.verified eq "N"} selected="selected" {/if}>NO</option>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#UsersForm',
		errorDiv	: '#errorDiv1'
});	
</script>
{/literal}