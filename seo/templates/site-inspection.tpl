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
								  <li><a href="{$siteurl}/seo/manage-users.php">Manage Users</a></li>
								  <li>Site Inspection</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head">Site Inspection</div>
					  </div>
					<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Customer Information</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<table>
								<tr>
								<td align="right"><strong>Company Name :</strong></td>
								<td align="left">{$CustInfo.company_name|stripslashes}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left">{$CustInfo.email}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left">{$CustInfo.address}</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left">{$CustInfo.city}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left">{$CustInfo.state}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left">{$CustInfo.country}</td>
								</tr>
								</table>
							  </td>
							</tr>

						</table>
				<div class="clr" style="height:15px;"></div>		
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript: return checkcount();">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
										<tr>
											<td colspan="2"><h2>Google Section</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Analytics Verified:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ga_verified]" value="Y" id="ga_verified" {if $Cat.ga_verified eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Webmaster tools Verified:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gw_verified]" value="Y" id="gw_verified" {if $Cat.gw_verified eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Alerts:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[galerts]" value="Y" id="galerts" {if $Cat.galerts eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Adwords:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gadwords]" value="Y" id="gadwords" {if $Cat.gadwords eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">YouTube Page:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[youtubepage]" value="Y" id="youtubepage" {if $Cat.youtubepage eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Places Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[google_places_location]" id="google_places_location" class="input " value="{$Cat.google_places_location}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 1 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category1]" id="category1" class="input " value="{$Cat.category1}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 2 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category2]" id="category2" class="input " value="{$Cat.category3}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 3 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category3]" id="category3" class="input " value="{$Cat.category3}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 4 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category4]" id="category4" class="input " value="{$Cat.category4}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 5 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category5]" id="category5" class="input " value="{$Cat.category5}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Avg. Impressions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[avgimpressions]" id="avgimpressions" class="input " value="{$Cat.avgimpressions}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Avg. Actions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[avgactions]" id="avgactions" class="input " value="{$Cat.avgactions}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Highest Impressions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[highestimpressions]" id="highestimpressions" class="input " value="{$Cat.highestimpressions}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Highest Actions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[highestactions]" id="highestactions" class="input " value="{$Cat.highestactions}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Last Checked Date(YYYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lastcheckeddate]" id="lastcheckeddate" class="input " value="{$Cat.lastcheckeddate}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Description<br />Max 200 characters</td>
											<td width="80%" align="left">
												<textarea name="Log[google_description]" id="google_description" class="input" style="width:250px; height:100px;" onblur="javascript: return checkcount(this.value);">{$Cat.google_description|stripslashes}</textarea>
											 </td>
										</tr>
										<tr>
											<td colspan="2"><h2>Error pages</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">301:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_301]" value="Y" id="ep_301" {if $Cat.ep_301 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">400:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_400]" value="Y" id="ep_400" {if $Cat.ep_400 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">401:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_401]" value="Y" id="ep_401" {if $Cat.ep_401 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">403:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_403]" value="Y" id="ep_403" {if $Cat.ep_403 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">404:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_404]" value="Y" id="ep_404" {if $Cat.ep_404 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">500:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_500]" value="Y" id="ep_500" {if $Cat.ep_500 eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Setup Pages</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Privacy:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[privacy]" value="Y" id="privacy" {if $Cat.privacy eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">TOS:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[tos]" value="Y" id="tos" {if $Cat.tos eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Disclaimer:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[disclaimer]" value="Y" id="disclaimer" {if $Cat.disclaimer eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Copyright:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[copyright]" value="Y" id="copyright" {if $Cat.copyright eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										
										
										<tr class="color_trbg">
											<td width="20%">Robots.txt File:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[robots]" value="Y" id="robots" {if $Cat.robots eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">ICO File:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ico_icon]" value="Y" id="ico_icon" {if $Cat.ico_icon eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Hcard:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[hcard]" value="Y" id="hcard" {if $Cat.hcard eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Raven Tools Setup</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Raven Setup:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[raven_setup]" value="Y" id="hcard" {if $Cat.raven_setup eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">GA Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ga_linked]" value="Y" id="ga_linked" {if $Cat.ga_linked eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">GWT Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gwt_linked]" value="Y" id="gwt_linked" {if $Cat.gwt_linked eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">FB Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[fb_linked]" value="Y" id="fb_linked" {if $Cat.fb_linked eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">T Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[t_linked]" value="Y" id="t_linked" {if $Cat.t_linked eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Rank Check</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Getlisted Rank Percentage</td>
											<td width="80%" align="left">
												<input type="text" name="Log[getlistedrankpercentage]" id="getlistedrankpercentage" class="input " value="{$Cat.getlistedrankpercentage}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Hubspot Rank</td>
											<td width="80%" align="left">
												<input type="text" name="Log[hubspotrank]" id="hubspotrank" class="input " value="{$Cat.hubspotrank}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Seomoz Rank</td>
											<td width="80%" align="left">
												<input type="text" name="Log[seomozrank]" id="seomozrank" class="input " value="{$Cat.seomozrank}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Last checked Date (YYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[rk_lastcheckeddate]" id="rk_lastcheckeddate" class="input " value="{$Cat.rk_lastcheckeddate}"/>
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Social count</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Facebook Fanpage Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[fbfanpagelocation]" id="fbfanpagelocation" class="input " value="{$Cat.fbfanpagelocation}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Facebook fans</td>
											<td width="80%" align="left">
												<input type="text" name="Log[fbfans]" id="fbfans" class="input " value="{$Cat.fbfans}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Plus for Business Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[gpbusinesslocation]" id="gpbusinesslocation" class="input " value="{$Cat.gpbusinesslocation}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Plus Count</td>
											<td width="80%" align="left">
												<input type="text" name="Log[gpcount]" id="gpcount" class="input " value="{$Cat.gpcount}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Linked Business Page Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[linedinpagelocation]" id="linedinpagelocation" class="input " value="{$Cat.linedinpagelocation}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">LinkIn Follows</td>
											<td width="80%" align="left">
												<input type="text" name="Log[linkinfollows]" id="linkinfollows" class="input " value="{$Cat.linkinfollows}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Twitter Followers</td>
											<td width="80%" align="left">
												<input type="text" name="Log[twitterfollowers]" id="twitterfollowers" class="input " value="{$Cat.twitterfollowers}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Check Date (YYYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[sc_checkdate]" id="sc_checkdate" class="input " value="{$Cat.sc_checkdate}"/>
											 </td>
										</tr>
										
										<tr class="color_trbg">
											<td width="20%">Chuck:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[chuck]" id="chuck" class="input " value="{$Cat.chuck}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Shock:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[shock]" id="shock" class="input " value="{$Cat.shock}"/>
											 </td>
										</tr>
										
										
										<tr>
											<td colspan="2"><h2>Location</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Latitude:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lat]" id="lat" class="input " value="{$Cat.lat}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Longitude:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lang]" id="lang" class="input " value="{$Cat.lang}"/>
											 </td>
										</tr>
										
										
										<tr>
											<td colspan="2"><h2>Keywords</h2></td>
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
										
										<tr>
											<td colspan="2"><h2>Brands</h2></td>
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
		scope		: '#CatForm',
		errorDiv	: '#errorDiv1'
});
function checkcount(val)
{
	var len = $("#google_description").val();
	if(len.length >= 200)
	{
		alert("The Maximum Google Description must be 200 characters only");
		return false;
	}
	$('#hid_key').val('Post');
	return true;
}
</script>
{/literal}