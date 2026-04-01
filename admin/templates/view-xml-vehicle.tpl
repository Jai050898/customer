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
					  <li><a href="{$siteurl}/admin/manage-xml-vehicles.php">Manage MMS Vehicles</a></li>
					  <li>View MMS Vehicle</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View MMS Vehicle</div>
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
							<td colspan="2"><h2>View MMS Vehicle</h2></td>
						  </tr>
                                                  <tr class="color_trbg">
							<td width="20%">Name</td>
							<td width="80%" align="left">{$User.name}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Year</td>
							<td width="80%" align="left">{$User.year}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Make</td>
							<td width="80%" align="left">{$User.make}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Model</td>
							<td width="80%" align="left">{$User.model}</td>
						  </tr>
                                                  <tr class="color_trbg">
							<td width="20%">Vin</td>
							<td width="80%" align="left">{$User.vin}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Licence</td>
							<td width="80%" align="left">{$User.license}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odometer</td>
							<td width="80%" align="left">{$User.odometer}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Engine Name</td>
							<td width="80%" align="left">{$User.engine}</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Reg. Date</td>
							<td width="80%" align="left">{$User.regdate}</td>
						  </tr>					  
						 </table>
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
					<td height="50" align="left" valign="top">&nbsp;</td>
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