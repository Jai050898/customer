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
					  <li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
					  <li>Print User</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">Print User</div>
		  </div>
		  <div class="ad_textsp">
				<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
					  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
						  <tr>
							<td colspan="2"><h2>Print User</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Name</td>
							<td width="80%" align="left">{$User.first_name|stripslashes} {$User.last_name|stripslashes}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Email</td>
							<td width="80%" align="left">{$User.email}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Phone</td>
							<td width="80%" align="left">{$User.phone}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Fax</td>
							<td width="80%" align="left">{$User.fax}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Address</td>
							<td width="80%" align="left">{$User.address|nl2br}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Website</td>
							<td width="80%" align="left">{$User.website}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Adwords Budget</td>
							<td width="80%" align="left">{$User.adwords_budget}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Country</td>
							<td width="80%" align="left">{$User.Country_Name}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">State</td>
							<td width="80%" align="left">{$User.State_Name}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">City</td>
							<td width="80%" align="left">{$User.city}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Zip Code</td>
							<td width="80%" align="left">{$User.zip_code}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Company Name</td>
							<td width="80%" align="left">{$User.company_name|stripslashes}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Screen Name </td>
							<td align="left">{$User.screen_name|stripslashes}</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Year shop established </td>
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
							<td valign="top">Payment Types accepted</td>
							<td align="left">{$PTNames}</td>
						  </tr> 
						 <tr class="color_trbg">
							<td valign="top">Languages</td>
							<td align="left">{$LGNames}</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Birthday (YYYY-MM-DD)</td>
							<td align="left">{$User.dob}</td>
						  </tr> 
						  <tr class="color_trbg">
							<td>Approx Annual Gross Revenue</td>
							<td align="left">{$AR}</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Hours of operation </td>
							<td align="left">
									<table width="40%" border="0" cellspacing="5" cellpadding="5">
									<tr>
										<td><strong>Day</strong></td>
										<td style="padding-left:15px;"><strong>Open</strong></td>
										<td style="padding-left:35px;"><strong>Close</strong></td>
									</tr>
									  <tr>
										<th scope="row">Monday</th>
										<td>
											{$hourLog.monday_open}
										</td>
										<td>
											{$hourLog.monday_close} 
										</td>
										
										{if $smarty.request.user_id eq ""}
										<td><a href="javascript: CopyTimeFun();">Copy</a></td>
										{/if}
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
							<td align="left">{$PANames}</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Brands</td>
							<td align="left">{$BrandNames}</td>
						  </tr>
							<tr class="color_trbg" >
								<td>Surrounding Cities to target </td>
								<td align="left">{$Cities}</td>
							</tr> 
						  <tr class="color_trbg">
							<td>Upload Zip File</td>
							<td align="left">{if $User.filename neq ""}<a href="http://mm.autorepairmarketing.com/customer/Secured/{$User.user_name}/adminUploads/{$User.filename}">{$User.filename}</a>{else}Not Uploaded{/if}</td>
						  </tr>
						 </table>
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
					<td height="50" align="left" valign="top"><a href="{$siteurl}/seo/print.php?user_id={$smarty.request.user_id}" target="_blank"><input type="button" name="Print" value="Print" style="cursor:pointer;" /></a></td>
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
