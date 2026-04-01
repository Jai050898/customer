{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Account Details</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;" width="40%">Business Name:</td>
				  <td align="left" valign="center" width="60%"><strong>{$AccDet.company_name|stripslashes}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Address:</td>
				  <td align="left" valign="center">{$AccDet.address}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">City:</td>
				  <td align="left" valign="center">{$AccDet.city}</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:10px;">State:</td>
					<td align="left" valign="center">{if $AccDet.State_Code neq ""}{$AccDet.State_Code}{else}{$AccDet.State_Name}{/if}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Zip code:</td>
				  <td align="left" valign="center">{$AccDet.zip_code}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Phone:</td>
				  <td align="left" valign="center">{$AccDet.phone}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Web Site:</td>
				  <td align="left" valign="center">{$AccDet.website}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;" width="35%">Full Owners Name:</td>
				  <td align="left" valign="center" width="65%"><strong>{$AccDet.first_name|stripslashes} {$AccDet.last_name|stripslashes}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Public email address:</td>
				  <td align="left" valign="center">{$AccDet.email}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Screen Name:</td>
				  <td align="left" valign="center">{$AccDet.screen_name|stripslashes}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Fax Number:</td>
				  <td align="left" valign="center">{$AccDet.fax}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Country:</td>
				  <td align="left" valign="center">{$AccDet.Country_Name}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Year Shop Established:</td>
				  <td align="left" valign="center">{$AccDet.shop_started_year}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Number of employees :</td>
				  <td align="left" valign="center">{$AccDet.no_of_emp}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Number of shop bays:</td>
				  <td align="left" valign="center">{$AccDet.no_of_shop_bays}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Shop Labor Rate :</td>
				  <td align="left" valign="center">${$AccDet.shop_labor_rate|number_format:2:".":","}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">No of Technicians :</td>
				  <td align="left" valign="center">{$AccDet.no_of_technicians}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">No of Advisors :</td>
				  <td align="left" valign="center">{$AccDet.no_of_advisors}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">sq ft of shop (entire) :</td>
				  <td align="left" valign="center">{$AccDet.sq_ft_of_shop}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Payment types accepted:</td>
				  <td align="left" valign="center">{$PTNames}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Languages spoken:</td>
				  <td align="left" valign="center">{$LGNames}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Birthday:</td>
				  <td align="left" valign="center">{$AccDet.dob|date_format:"%m-%d-%Y"}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Approx gross annual revenue:</td>
				  <td align="left" valign="center">{$AR}</td>
				</tr>
				<tr class="color_trbg">
					<td align="right" valign="top" style="padding-left:10px;">Hours of operation</td>
					<td align="left">
							<table width="75%" border="0" cellspacing="5" cellpadding="5">
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
				
				
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Primary Automotive Services:</td>
				  <td align="left" valign="center">{$PANames}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Primary Brands:</td>
				  <td align="left" valign="center">{$BrandNames}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Surrounding Cities to target:</td>
				  <td align="left" valign="center">{$Cities}</td>
				</tr>
				
				
				
			</table>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}