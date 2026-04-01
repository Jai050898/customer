{include file="header.tpl"}
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
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
      <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
	  <li><a href="{$siteurl}/admin/manage-shops.php">Manage Shop</a></li>
      <li>View User</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Shop</div>
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
									<td colspan="2"><h2>View Shop</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Name</td>
								<td width="80%" align="left">
									{$User.shop_name|stripslashes}
								 </td>
							  </tr>
							  
							  <tr class="color_trbg">
								<td width="20%">Email</td>
								<td width="80%" align="left">
									{$User.shop_email}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Phone</td>
								<td width="80%" align="left">
									{$User.shop_phone}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Address</td>
								<td width="80%" align="left">
									{$User.shop_address|nl2br}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Website</td>
								<td width="80%" align="left">
									{$User.shop_website}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">State</td>
								<td width="80%" align="left">
									{$User.shop_state}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">City</td>
								<td width="80%" align="left">
									{$User.shop_city}
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Zip Code</td>
								<td width="80%" align="left">
									{$User.shop_zip}
								 </td>
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
{include file="footer.tpl"}
