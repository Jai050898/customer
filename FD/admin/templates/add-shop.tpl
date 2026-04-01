{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/date.css" />
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
							<li><a href="{$siteurl}/manager/dashboard.php">Home</a></li>
							<li><a href="{$siteurl}/manager/manage-shops.php">Manage Shops</a></li>
							<li>{if $smarty.request.Shop_ID neq ""}Edit{else}Add{/if} Shop</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.Shop_ID neq ""}Edit{else}Add{/if} Shop</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="ShopsForm" id="ShopsForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.Shop_ID neq ""}Edit{else}Add{/if} Shop</h2></td>
											</tr>
											{if $error neq ""}
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong>{$error}</strong></td>
											</tr>
											{/if}
											<tr class="color_trbg">
												<td width="12%">Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[name]" id="name" class="input req-string" value="{$Shop.name}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Email</td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$Shop.email}" />
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">User Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[user_name]" id="Shop_name" class="input req-string" value="{$Shop.user_name}" />
												 </td>
											  </tr>
											{if $smarty.request.Shop_ID eq ""}
												<tr class="color_trbg">
													<td>Password</td>
													<td align="left"><input type="text" name="Log[password]" id="Log[password]" class="input req-string" value="{$Shop.password}"/></td>
											  </tr>
											{/if}
											
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input req-numeric" value="{$Shop.phone}" maxlength="10"/></td>
											 </tr>
											 
											<tr class="color_trbg">
												<td>Address</td>
												<td align="left"><input type="text" name="Log[address]" id="address" class="input " value="{$Shop.address}"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="{$Shop.website}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Shop Email</td>
												<td align="left"><input type="text" name="Log[shop_email]" id="shop_email" class="input" value="{$Shop.shop_email}"/></td>
											  </tr>
											   <tr class="color_trbg">
												<td>Shop Opening Date</td>
												<td align="left"><input type="text" name="Log[opening_date]" id="opening_date" class="input" value="{$Shop.opening_date|date_format:'%m-%d-%Y'}"/></td>
											  </tr>
											<tr>
												<td>Country</td>
												<td align="left">
												<select name="Log[country]" id="country" style="width:187px; height:23px;" class="select req-string" onchange="fnGetCountryStates(this.value,'state[]','state','StateRow');">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$country}
													<option value="{$country[list].Country_Code}" {if $Shop.country eq $country[list].Country_Code} selected="selected" {/if}>{$country[list].Country_Name}</option>
													{/section}
												</select>
												</td>
											</tr>
											<tr>
												<td>State</td>
												<td align="left"><span id="StateRow">
												<select name="state[]" id="state" style="width:187px; height:23px;" class="input req-string">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$States}
													<option value="{$States[list].State_ID}" {if $Shop.state  eq $States[list].State_ID} selected="selected" {/if}>{$States[list].State_Name}</option>
													{/section}
												</select></span>
												</td>
											</tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input " value="{$Shop.city}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip_code]" id="zip_code" class="input req-numeric" value="{$Shop.zip_code}" maxlength="6"/></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#ShopsForm',
		errorDiv	: '#errorDiv1'
});	
$(document).ready(function() {	
	$("#opening_date").datepicker();
		});	
</script>
{/literal}