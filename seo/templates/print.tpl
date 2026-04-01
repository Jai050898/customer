<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>MMS User Print Page</title>
{literal}
<script language="javascript" type="text/javascript">
	var site_path = "{/literal}{$siteurl}{literal}";
	var img_path = "{/literal}{$siteurl}{literal}/images";
</script>
{/literal}
<link href="{$siteurl}/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="margin-left:25px; margin-right:25px; font-size:12px;">
<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
					  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
						  <tr>
							<td colspan="2"><h2>User Information</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Business Name</td>
							<td width="75%" align="left">{$User.company_name|stripslashes}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Address</td>
							<td width="75%" align="left">{$User.address|nl2br}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">City</td>
							<td width="75%" align="left">{$User.city}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">State</td>
							<td width="75%" align="left">{$User.State_Name}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Zip Code</td>
							<td width="75%" align="left">{$User.zip_code}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Phone</td>
							<td width="75%" align="left">{$User.phone}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Website</td>
							<td width="75%" align="left">{$User.website}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Full Owners Name</td>
							<td width="75%" align="left">{$User.first_name|stripslashes} {$User.last_name|stripslashes}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Public email address</td>
							<td width="75%" align="left">{$User.email}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Screen Name </td>
							<td align="left">{$User.screen_name|stripslashes}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Fax Number</td>
							<td width="75%" align="left">{$User.fax}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Country</td>
							<td width="75%" align="left">{$User.Country_Name}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Year Shop Established</td>
							<td align="left">{$User.shop_started_year}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Number of employees </td>
							<td align="left">{$User.no_of_emp}</td>
						  </tr> 
						  <tr class="color_trbg">
							<td>Number of shop bays </td>
							<td align="left">{$User.no_of_shop_bays}</td>
						  </tr> 
						  <tr class="color_trbg">
							<td >Payment types accepted</td>
							<td align="left">{$PTNames}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Languages spoken</td>
							<td align="left">{$LGNames}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Birthday (YYYY-MM-DD)</td>
							<td align="left">{$User.dob}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Approx gross annual revenue</td>
							<td align="left">{$AR}</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Hours of operation</td>
							<td align="left">
									<table width="50%" border="0" cellspacing="5" cellpadding="5">
									<tr>
										<td><strong>Day</strong></td>
										<td style="padding-left:15px;" align="left"><strong>Open</strong></td>
										<td style="padding-left:15px;" align="left"><strong>Close</strong></td>
									</tr>
									  <tr>
										<th scope="row">Monday</th>
										<td>
											{$hourLog.monday_open}
										</td>
										<td>
											{$hourLog.monday_close} 
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Tuesday</th>
										<td>
											{$hourLog.tueday_open}
										</td>
										<td>
											{$hourLog.tueday_close}
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Wednesday</th>
										<td>
											{$hourLog.wedday_open}
										</td>
										<td>
											{$hourLog.wedday_close}
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Thursday</th>
										<td>
											{$hourLog.thuday_open}
										</td>
										<td>
											{$hourLog.thuday_close}
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Friday</th>
										<td>
											{$hourLog.friday_open}
										</td>
										<td>
											{$hourLog.friday_close}
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Saturday</th>
										<td>
											{$hourLog.satday_open}
										</td>
										<td>
											{$hourLog.satday_close}
										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Sunday</th>
										<td>
											{$hourLog.sunday_open}
										</td>
										<td>
											{$hourLog.sunday_close}
										</td>
										
									  </tr>
									</table>
							</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Automotive Services</td>
							<td align="left">
								<table width="100%" border="0" cellspacing="5" cellpadding="5">
								<tr>
								{foreach item=item name=item from=$PANames}
								<td align="left" style="width:50px; border-bottom:none;">{$item}</td>
								{if $smarty.foreach.item.iteration%10 eq 0}
								</tr><tr>
								{/if}
								{foreachelse}
								<td align="left" style="border-bottom:none;">NA</td>
								{/foreach}
								</tr>
								</table>
							</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Brands</td>
							<td align="left">
								<table width="100%" border="0" cellspacing="5" cellpadding="5">
								<tr>
								{foreach item=item name=item from=$BrandNames}
								<td align="left" style="width:50px; border-bottom:none;">{$item}</td>
								{if $smarty.foreach.item.iteration%10 eq 0}
								</tr><tr>
								{/if}
								{foreachelse}
								<td align="left" style="border-bottom:none;">NA</td>
								{/foreach}
								</tr>
								</table>
							</td>
						  </tr>
						  <tr class="color_trbg" >
								<td>Surrounding Cities to target </td>
								<td align="left">{$Cities}</td>
							</tr>
							
						  <!-- <tr class="color_trbg">
							<td width="25%">Adwords Budget</td>
							<td width="75%" align="left">{$User.adwords_budget}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Upload Zip File</td>
							<td align="left">{if $User.filename neq ""}<a href="http://mm.autorepairmarketing.com/customer/Secured/{$User.user_name}/adminUploads/{$User.filename}">{$User.filename}</a>{else}Not Uploaded{/if}</td>
						  </tr> -->
						 </table>
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
					<td height="50" align="center" valign="top">&nbsp;</td>
					</tr>
				</table>
</div>
</body>
</html>
{literal}
<script language="javascript" type="text/javascript">
window.print();
</script>
{/literal}