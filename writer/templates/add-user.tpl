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
							<li><a href="{$siteurl}/writer/manage-users.php">Manage Users</a></li>
							<li>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</div>
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
										{if $smarty.request.user_id eq ""}
										<input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										{/if}
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="25%">First Name</td>
												<td width="75%" align="left">
													<input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="{$User.first_name|stripslashes}"/>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%">Last Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="{$User.last_name|stripslashes}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Email</td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$User.email}" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">Public Email Address to be seen</td>
												<td width="88%" align="left">
													<input type="text" name="Log[public_email]" id="public_email" class="input req-string req-email" value="{$User.public_email}" />
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%">Company Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[company_name]" id="company_name" class="input req-string" value="{$User.company_name|stripslashes}"/>
												 </td>
											 </tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input req-numeric" value="{$User.phone}" maxlength="10"/></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Fax</td>
												<td align="left"><input type="text" name="Log[fax]" id="fax" class="input req-numeric" value="{$User.fax}" maxlength="10"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Address</td>
												<td align="left"><input type="text" name="Log[address]" id="address" class="input " value="{$User.address}"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="{$User.website}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>County</td>
												<td align="left"><input type="text" name="Log[county]" id="county" class="input " value="{$User.county}"/></td>
											</tr>
											<tr>
												<td>Country</td>
												<td align="left">
												<select name="Log[country]" id="country" style="width:187px; height:23px;" class="select req-string" onchange="fnGetCountryStates(this.value,'state[]','state','StateRow');">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$country}
													<option value="{$country[list].Country_Code}" {if $User.country eq $country[list].Country_Code} selected="selected" {/if}>{$country[list].Country_Name}</option>
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
													<option value="{$States[list].State_ID}" {if $User.state  eq $States[list].State_ID} selected="selected" {/if}>{$States[list].State_Name}</option>
													{/section}
												</select></span>
												</td>
											</tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input " value="{$User.city}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip_code]" id="zip_code" class="input req-numeric" value="{$User.zip_code}" maxlength="6"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Screen Name </td>
												<td align="left"><input type="text" name="Log[screen_name]" id="screen_name" class="input" value="{$User.screen_name}"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Year shop established </td>
												<td align="left"><input type="text" name="Log[shop_started_year]" id="shop_started_year" class="input" value="{$User.shop_started_year}"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Number of employees </td>
												<td align="left"><input type="text" name="Log[no_of_emp]" id="no_of_emp" class="input" value="{$User.no_of_emp}"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Number of shop bays </td>
												<td align="left"><input type="text" name="Log[no_of_shop_bays]" id="no_of_shop_bays" class="input" value="{$User.no_of_shop_bays}"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Payment Types accepted</td>
												<td align="left">
												{section name=list loop=$PT}
													<input type="checkbox" name="payment_type[]" id="payment_type" {if $PTarray neq '' && in_array($PT[list].id, $PTarray)} checked="checked" {/if} value="{$PT[list].id}" />&nbsp;{$PT[list].payment_type}<br /><br />
												{/section}
												</td>
											  </tr> 
											 <tr class="color_trbg">
												<td>Languages</td>
												<td align="left">
												{section name=list loop=$LG}
													<input type="checkbox" name="language[]" id="language" {if $LGarray neq '' && in_array($LG[list].id, $LGarray)} checked="checked" {/if} value="{$LG[list].id}" />&nbsp;{$LG[list].languages}<br /><br />
												{/section}
														
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Birthday (YYYY-MM-DD)</td>
												<td align="left"><input type="text" name="Log[dob]" id="dob" class="input" value="{$User.dob}"/></td>
											  </tr> 
											  <tr class="color_trbg">
												<td>Approx Annual Gross Revenue</td>
												<td align="left">
														<select name="Log[gross_revenue]" id="gross_revenue" style="width:187px; height:23px;" class="select req-string">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$AS}
													<option value="{$AS[list].id}" {if $User.gross_revenue eq $AS[list].id} selected="selected" {/if}>{$AS[list].annual_revenue}</option>
													{/section}
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Hours of operation </td>
												<td align="left"><input type="text" name="Log[hours_of_operation]" id="hours_of_operation" class="input" value="{$User.hours_of_operation}"/></td>
											  </tr> 
											  <tr class="color_trbg">
												<td>Primary Automotive Services</td>
												<td align="left">
												{section name=list loop=$KEY}
													<input type="checkbox" name="services[]" id="services" {if $KEYarray neq '' && in_array($KEY[list].key_id, $KEYarray)} checked="checked" {/if} value="{$KEY[list].key_id}" />&nbsp;{$KEY[list].key_name}<br /><br />
												{/section}
														
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Primary Brands</td>
												<td align="left">
												{section name=list loop=$Brands}
													<input type="checkbox" name="brands[]" id="brands" {if $Brandsarray neq '' && in_array($Brands[list].brand_id, $Brandsarray)} checked="checked" {/if} value="{$Brands[list].brand_id}" />&nbsp;{$Brands[list].brand_name}<br /><br />
												{/section}
												</td>
											  </tr>
											  {if $Cities neq ""}
											  	{section name=list loop=$Cities}
												<tr class="color_trbg" >
													<td>Surrounding Cities to target </td>
													<td align="left"><input type="text" name="taget_citiesold[]" id="taget_citiesild" class="input" value="{$Cities[list].city_name}"/></td>
											  	</tr> 
												{/section}
											  {/if}
											  <tr class="color_trbg Clone" >
												<td>Surrounding Cities to target </td>
												<td align="left"><input type="text" name="taget_cities[]" id="taget_cities" class="input" value="{$User.taget_cities}"/></td>
											  </tr> 
											  <tr class="Clone" align="right">
												<td colspan="2"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
											</tr>	
											<tr class="color_trbg">
												<td>Access To Survey</td>
												<td align="left"><input type="checkbox" name="Log[access_to_mark_survey]" value="Y" {if $User.access_to_mark_survey eq "Y"} checked="checked" {/if} />&nbsp;Marketing Survey<br /><br /><input type="checkbox" name="Log[access_to_site_survey]" value="Y" {if $User.access_to_site_survey eq "Y"} checked="checked" {/if} />&nbsp;Site Survey<br /><br /><input type="checkbox" name="Log[access_to_integrated_survey]" value="Y" {if $User.access_to_integrated_survey eq "Y"} checked="checked" {/if} />&nbsp;Integrated Survey</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/relCopy.jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#UsersForm',
		errorDiv	: '#errorDiv1'
});	
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
</script>
{/literal}