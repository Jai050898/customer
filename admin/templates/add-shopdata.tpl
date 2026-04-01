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
							<li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
							<li><a href="{$siteurl}/admin/manage-data.php">Manage Shop Data</a></li>
							<li>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form id="UsersForm" class="form" name="UsersForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');" enctype="multipart/form-data">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} Shop Data</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Shop Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_name]" id="shop_name" class="input req-string" value="{$User.shop_name}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="25%">Owner's Full Name <span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[owner_name]" id="owner_name" class="input req-string" value="{$User.owner_name}"/>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td>Store Address</td>
												<td align="left"><textarea  name="Log[address]" id="address"  style="height:100px; width:300px;" >{$User.address}</textarea></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Phone Number</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone"  value="{$User.phone}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Fax Number</td>
												<td align="left"><input type="text" name="Log[fax]" id="fax"  value="{$User.fax}"/></td>
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
												<td>Site URL to promote </td>
												<td align="left"><input type="text" name="Log[site_url]" id="site_url" class="input" value="{$User.site_url}"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td width="12%">Public/Email Address <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$User.email}" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
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
														<select name="payment_type[]" id="payment_type" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$PT}
													<option value="{$PT[list].id}" {if $PTarray neq '' && in_array($PT[list].id, $PTarray)} selected="selected" {/if}>{$PT[list].payment_type}</option>
													{/section}
												</select>
												</td>
											  </tr> 
											 <tr class="color_trbg">
												<td>Languages</td>
												<td align="left">
														<select name="language[]" id="language" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$LG}
													<option value="{$LG[list].id}" {if $LGarray neq '' && in_array($LG[list].id, $LGarray)} selected="selected" {/if}>{$LG[list].languages}</option>
													{/section}
												</select>
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
														<select name="services[]" id="services" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$KEY}
													<option value="{$KEY[list].key_id}" {if $KEYarray neq '' && in_array($KEY[list].key_id, $KEYarray)} selected="selected" {/if}>{$KEY[list].key_name}</option>
													{/section}
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Primary Brands</td>
												<td align="left">
														<select name="brands[]" id="brands" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$Brands}
													<option value="{$Brands[list].brand_id}" {if $Brandsarray neq '' && in_array($Brands[list].brand_id, $Brandsarray)} selected="selected" {/if}>{$Brands[list].brand_name}</option>
													{/section}
												</select>
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