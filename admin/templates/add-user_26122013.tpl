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
							<li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
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
									<form name="UsersForm" id="UsersForm" method="post" class="form" onsubmit="enableSelects();" enctype="multipart/form-data">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										{if $smarty.request.user_id eq ""}
										<input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										{/if}
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</h2></td>
											</tr>
											{if $error neq ""}
												<tr class="color_trbg">
												<td colspan="2" style="color:#FF0000;">{$error}</td>
											  </tr>
											{/if}
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
													<input type="text" name="Log[public_email]" id="public_email" class="input" value="{$User.public_email}" />
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">User Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="{$User.user_name}" onBlur="javascript:fnCheckUnameAvail('user_name',this.value,'uiddiv');"/><br /><span id="uiddiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											{if $smarty.request.user_id eq ""}
												<tr class="color_trbg">
													<td>Password</td>
													<td align="left"><input type="text" name="Log[password]" id="Log[password]" class="input req-string" value="{$User.password}"/></td>
											  </tr>
											{/if}
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
												<td>Garage Mgmt Sofware Version</td>
												<td align="left"><input type="text" name="Log[arage_mgmt_software_version]" id="arage_mgmt_software_version" class="input " value="{$User.arage_mgmt_software_version}"/></td>
											  </tr>
                                                                                          <tr class="color_trbg">
												<td>Server operating System</td>
												<td align="left"><input type="text" name="Log[server_operating_system]" id="server_operating_system" class="input " value="{$User.server_operating_system}"/></td>
											  </tr>
                                                                                          <tr class="color_trbg">
                                                                                              <td>Active Extraction</td>
                                                                                              <td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="active_extraction" id="active_extraction" {if $User.active_extraction == 'Y'} checked="checked" {/if} value="{$item.id}" /></td>
                                                                                          </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="{$User.website}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Adwords Budget</td>
												<td align="left"><input type="text" name="Log[adwords_budget]" id="adwords_budget" class="input" value="{$User.adwords_budget}"/></td>
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
													<option value="{$country[list].Country_Code}" {if $User.country eq $country[list].Country_Code || $country[list].Country_Code eq "US"} selected="selected" {/if}>{$country[list].Country_name}</option>
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
													<option value="{$States[list].State_ID}" {if $User.state  eq $States[list].State_ID} selected="selected" {/if}>{if $States[list].State_Code neq ""}{$States[list].State_Code}{else}{$States[list].State_name}{/if}</option>
													{/section}
												</select></span>
												</td>
											</tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input req-string" value="{$User.city}"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Population (in thousands)</td>
												<td align="left"><input type="text" name="Log[population]" id="population" class="input " value="{$User.population}"/></td>
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
												<td>Shop Labor Rate</td>
												<td align="left"><input type="text" name="Log[shop_labor_rate]" id="shop_labor_rate" class="input" value="{$User.shop_labor_rate}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>No of Technicians</td>
												<td align="left"><input type="text" name="Log[no_of_technicians]" id="no_of_technicians" class="input" value="{$User.no_of_technicians}"/></td>
											  </tr>
											   
											  <tr class="color_trbg">
												<td>No of Advisors</td>
												<td align="left"><input type="text" name="Log[no_of_advisors]" id="no_of_advisors" class="input" value="{$User.no_of_advisors}"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>sq ft of shop (entire)</td>
												<td align="left"><input type="text" name="Log[sq_ft_of_shop]" id="sq_ft_of_shop" class="input" value="{$User.sq_ft_of_shop}"/></td>
											  </tr>											  
											<tr class="color_trbg">
												<td valign="top">Payment Types accepted</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
													<tr>
													{foreach item=item name=item from=$PT}
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="payment_type[]" id="payment_type" {if $PTarray neq '' && in_array($item.id, $PTarray)} checked="checked" {/if} value="{$item.id}" />&nbsp;{$item.payment_type}</td>
													{if $smarty.foreach.item.iteration%5 eq 0}
													</tr><tr>
													{/if}
													{/foreach}
													</tr>
												</table>
												</td>
											  </tr> 
											 <tr class="color_trbg">
												<td valign="top">Languages</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
													<tr>
													{foreach item=item name=item from=$LG}
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="language[]" id="language" {if $LGarray neq '' && in_array($item.id, $LGarray)} checked="checked" {/if} value="{$item.id}" />&nbsp;{$item.languages}</td>
													{if $smarty.foreach.item.iteration%5 eq 0}
													</tr><tr>
													{/if}
													{/foreach}
													</tr>
												</table>
														
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Birthday (YYYY-MM-DD)</td>
												<td align="left"><input type="text" name="Log[dob]" id="dob" class="input" value="{$User.dob|date_format:'%m-%d-%Y'}"/></td>
											  </tr> 
											  <tr class="color_trbg">
												<td>Approx Annual Gross Revenue</td>
												<td align="left">
														<select name="Log[gross_revenue]" id="gross_revenue" style="width:187px; height:23px;" class="select">
													<option value="">-----Please Select-----</option>
													{section name=list loop=$AS}
													<option value="{$AS[list].id}" {if $User.gross_revenue eq $AS[list].id} selected="selected" {/if}>{$AS[list].annual_revenue}</option>
													{/section}
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td valign="top">Hours of operation </td>
												<td align="left">
													<!--<input type="text" name="Log[hours_of_operation]" id="hours_of_operation" class="input" value="{$User.hours_of_operation}"/>-->
														<table width="40%" border="0" cellspacing="5" cellpadding="5">
														<tr>
															<td><strong>Day</strong></td>
															<td style="padding-left:15px;"><strong>Open</strong></td>
															<td style="padding-left:35px;"><strong>Close</strong></td>
															<td><strong>Holiday</strong></td>
															<td><strong>Copy</strong></td>

														</tr>
														  <tr>
															<th scope="row">Monday</th>
															<td>
																<select name="Log1[monday_open]" id="monday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.monday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.monday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[monday_close]" id="monday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.monday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.monday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[monday_lock]" id="monday_lock" {if $hourLog.monday_lock eq 1} checked="checked" {/if}  value="1"/></td>

															<td><a href="javascript: CopyTimeFun();">Copy</a></td>

														  </tr>
														  <tr>
															<th scope="row">Tuesday</th>
															<td>
																<select name="Log1[tueday_open]" id="tueday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.tueday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.tueday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[tueday_close]" id="tueday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.tueday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.tueday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[tueday_lock]" id="tueday_lock" value="1" {if $hourLog.tueday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														  <tr>
															<th scope="row">Wednesday</th>
															<td>
																<select name="Log1[wedday_open]" id="wedday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.wedday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.wedday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[wedday_close]" id="wedday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.wedday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.wedday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[wedday_lock]" id="wedday_lock" value="1" {if $hourLog.wedday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														  <tr>
															<th scope="row">Thursday</th>
															<td>
																<select name="Log1[thuday_open]" id="thuday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.thuday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.thuday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[thuday_close]" id="thuday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.thuday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.thuday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[thuday_lock]" id="thuday_lock" value="1" {if $hourLog.thuday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														  <tr>
															<th scope="row">Friday</th>
															<td>
																<select name="Log1[friday_open]" id="friday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.friday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.friday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[friday_close]" id="friday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.friday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.friday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[friday_lock]" id="friday_lock" value="1" {if $hourLog.friday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														  <tr>
															<th scope="row">Saturday</th>
															<td>
																<select name="Log1[satday_open]" id="satday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.satday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.satday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[satday_close]" id="satday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.satday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.satday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[satday_lock]" id="satday_lock" value="1" {if $hourLog.satday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														  <tr>
															<th scope="row">Sunday</th>
															<td>
																<select name="Log1[sunday_open]" id="sunday_open" style="width:95px; height:23px;float:left;" class="select" {if $hourLog.sunday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																		<option value="{$hrs[list]}" {if $hourLog.sunday_open eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td>
																<select name="Log1[sunday_close]" id="sunday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select" {if $hourLog.sunday_lock eq 1} disabled="disabled" {/if}>
																	{section name=list loop=$hrs}
																	<option value="{$hrs[list]}" {if $hourLog.sunday_close eq $hrs[list]} selected="selected" {/if}>{$hrs[list]}</option>
																	{/section}
																</select>
															</td>
															<td><input type="checkbox" class="hours_checkbox input" name="Log1[sunday_lock]" id="sunday_lock" value="1" {if $hourLog.sunday_lock eq 1} checked="checked" {/if}/></td>
														  </tr>
														</table>
												</td>
											  </tr> 
											  <tr class="color_trbg">
												<td valign="top">Primary Automotive Services</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
													<tr>
													{foreach item=item name=item from=$KEY}
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="services[]" id="services" {if $KEYarray neq '' && in_array($item.key_id, $KEYarray)} checked="checked" {/if} value="{$item.key_id}" />&nbsp;{$item.key_name|stripslashes}</td>
													{if $smarty.foreach.item.iteration%5 eq 0}
													</tr><tr>
													{/if}
													{/foreach}
												</tr>
												</table>	
														
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td valign="top">Primary Brands</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
						
						{foreach item=item name=item from=$Brands}
						{if $item.Brands|@count gt 0}
						<tr>
						<td><b>{$item.name}</b></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						
						{foreach item=item1 name=item1 from=$item.Brands}
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" {if $Brandsarray neq '' && in_array($item1.brand_id, $Brandsarray)} checked="checked" {/if} value="{$item1.brand_id}" />&nbsp;{$item1.brand_name|stripslashes}</td>
						{if $smarty.foreach.item1.iteration%2 eq 0}
						</tr><tr>
						{/if}
						{/foreach}
						
						</tr>
						</table>
						</td>
						</tr>
						{/if}
						{/foreach}
						<tr>
						<td><strong>Others</strong></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						{foreach item=item name=item from=$Rbrands}
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" {if $Brandsarray neq '' && in_array($item.brand_id, $Brandsarray)} checked="checked" {/if} value="{$item.brand_id}" />&nbsp;{$item.brand_name|stripslashes}</td>
						{if $smarty.foreach.item.iteration%2 eq 0}
						</tr><tr>
						{/if}
						{/foreach}
						</tr>
						</table>
						</td>
						</tr>
					</table>
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
											{if $smarty.request.user_id neq ""}
											<tr class="color_trbg">
												<td>Upload Zip File (SEO Use Only)</td>
												<td align="left"><input type="file" name="seoupload" id="seoupload" />&nbsp;&nbsp;{if $User.filename neq ""}<a href="http://mm.autorepairmarketing.com/customer/Secured/{$User.user_name}/adminUploads/{$User.filename}">{$User.filename}</a>{/if}</td>
											  </tr>
											  {/if}
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
$(".hours_checkbox").click(function(){
	if ($("#monday_lock").is(":checked")) {
		$('#monday_open').val('00:00am');
		$('#monday_close').val('00:00am');
		$('#monday_open').attr('disabled', 'disabled');
		$('#monday_close').attr('disabled', 'disabled');
	}
	else {
		$('#monday_open').attr('disabled', false);
		$('#monday_close').attr('disabled', false);
	}
	if ($("#tueday_lock").is(":checked")) {
		$('#tueday_open').val('00:00am');
		$('#tueday_close').val('00:00am');
		$('#tueday_open').attr('disabled', 'disabled');
		$('#tueday_close').attr('disabled', 'disabled');
	}
	else {
		$('#tueday_open').attr('disabled', false);
		$('#tueday_close').attr('disabled', false);
	}
	if ($("#wedday_lock").is(":checked")) {
		$('#wedday_open').val('00:00am');
		$('#wedday_close').val('00:00am');
		$('#wedday_open').attr('disabled', 'disabled');
		$('#wedday_close').attr('disabled', 'disabled');
	}
	else {
		$('#wedday_open').attr('disabled', false);
		$('#wedday_close').attr('disabled', false);
	}
	if ($("#thuday_lock").is(":checked")) {
		$('#thuday_open').val('00:00am');
		$('#thuday_close').val('00:00am');
		$('#thuday_open').attr('disabled', 'disabled');
		$('#thuday_close').attr('disabled', 'disabled');
	}
	else {
		$('#thuday_open').attr('disabled', false);
		$('#thuday_close').attr('disabled', false);
	}
	if ($("#friday_lock").is(":checked")) {
		$('#friday_open').val('00:00am');
		$('#friday_close').val('00:00am');
		$('#friday_open').attr('disabled', 'disabled');
		$('#friday_close').attr('disabled', 'disabled');
	}
	else {
		$('#friday_open').attr('disabled', false);
		$('#friday_close').attr('disabled', false);
	}
	if ($("#satday_lock").is(":checked")) {
		$('#satday_open').val('00:00am');
		$('#satday_close').val('00:00am');
		$('#satday_open').attr('disabled', 'disabled');
		$('#satday_close').attr('disabled', 'disabled');
	}
	else {
		$('#satday_open').attr('disabled', false);
		$('#satday_close').attr('disabled', false);
	}
	if ($("#sunday_lock").is(":checked")) {
		$('#sunday_open').val('00:00am');
		$('#sunday_close').val('00:00am');
		$('#sunday_open').attr('disabled', 'disabled');
		$('#sunday_close').attr('disabled', 'disabled');
	}
	else {
		$('#sunday_open').attr('disabled', false);
		$('#sunday_close').attr('disabled', false);
	}
	
	
});
function enableSelects(){
	$('#monday_open').attr('disabled', false);
	$('#monday_close').attr('disabled', false);
	$('#tueday_open').attr('disabled', false);
	$('#tueday_close').attr('disabled', false);
	$('#wedday_open').attr('disabled', false);
	$('#wedday_close').attr('disabled', false);
	$('#thuday_open').attr('disabled', false);
	$('#thuday_close').attr('disabled', false);
	$('#friday_open').attr('disabled', false);
	$('#friday_close').attr('disabled', false);
	$('#satday_open').attr('disabled', false);
	$('#satday_close').attr('disabled', false);
	$('#sunday_open').attr('disabled', false);
	$('#sunday_close').attr('disabled', false);
	$('#hid_key').val('Post');
	
}
function CopyTimeFun()
{
	var otime = $('#monday_open').val();
	var ctime =  $('#monday_close').val();
	
	if (!$("#tueday_lock").is(":checked")) {
		document.getElementById('tueday_open').value = otime;
		document.getElementById('tueday_close').value = ctime;
	}
	if (!$("#wedday_lock").is(":checked")) {
		document.getElementById('wedday_open').value = otime;
		document.getElementById('wedday_close').value = ctime;
	}
	if (!$("#thuday_lock").is(":checked")) {
		document.getElementById('thuday_open').value = otime;
		document.getElementById('thuday_close').value = ctime;
	}
	if (!$("#friday_lock").is(":checked")) {
		document.getElementById('friday_open').value = otime;
		document.getElementById('friday_close').value = ctime;
	}
	if (!$("#satday_lock").is(":checked")) {
		document.getElementById('satday_open').value = otime;
		document.getElementById('satday_close').value = ctime;
	}
	if (!$("#sunday_lock").is(":checked")) {
		document.getElementById('sunday_open').value = otime;
		document.getElementById('sunday_close').value = ctime;
	}
}
</script>
{/literal}