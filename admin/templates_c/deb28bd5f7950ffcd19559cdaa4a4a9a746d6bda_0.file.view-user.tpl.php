<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:10:18
  from '/var/www/html/admin/templates/view-user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbab9a86c522_28681219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb28bd5f7950ffcd19559cdaa4a4a9a746d6bda' => 
    array (
      0 => '/var/www/html/admin/templates/view-user.tpl',
      1 => 1774346192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:right-bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbab9a86c522_28681219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.nl2br.php','function'=>'smarty_modifier_nl2br',),1=>array('file'=>'/var/www/html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
		<?php $_smarty_tpl->_subTemplateRender("file:right-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div id="innerleft">
		  <div class="admin-rightpart">
		  <div class="admin_topbgnav">
			  <div id="admin_bcrumb">
				<ul>
					  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/dashboard.php">Home</a></li>
					  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-users.php">Manage Users</a></li>
					  <li>View User</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View User</div>
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
							<td colspan="2"><h2>View User</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Name</td>
							<td width="80%" align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['User']->value['first_name']);?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['User']->value['last_name']);?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Email</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Phone</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['phone'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Fax</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['fax'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Address</td>
							<td width="80%" align="left"><?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['User']->value['address']);?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Website</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['website'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Adwords Budget</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['adwords_budget'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Country</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['Country_Name'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">State</td>
							<td width="80%" align="left"><?php if ($_smarty_tpl->tpl_vars['User']->value['State_Code'] != '') {
echo $_smarty_tpl->tpl_vars['User']->value['State_Code'];
} else {
echo $_smarty_tpl->tpl_vars['User']->value['State_Name'];
}?></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">City</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['city'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Zip Code</td>
							<td width="80%" align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['zip_code'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Company Name</td>
							<td width="80%" align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['User']->value['company_name']);?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Screen Name </td>
							<td align="left"><?php echo stripslashes($_smarty_tpl->tpl_vars['User']->value['screen_name']);?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Year shop established </td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['shop_started_year'];?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Number of employees </td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['no_of_emp'];?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Number of shop bays </td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['no_of_shop_bays'];?>
</td>
						  </tr> 
						  <tr class="color_trbg">
							<td>Shop Labor Rate</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['shop_labor_rate'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>No of Technicians</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['no_of_technicians'];?>
</td>
						  </tr>
										   
						  <tr class="color_trbg">
							<td>No of Advisors</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['no_of_advisors'];?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>sq ft of shop (entire)</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['User']->value['sq_ft_of_shop'];?>
</td>
						  </tr>
						<tr class="color_trbg">
							<td valign="top">Payment Types accepted</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['PTNames']->value;?>
</td>
						  </tr> 
						 <tr class="color_trbg">
							<td valign="top">Languages</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['LGNames']->value;?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Birthday </td>
							<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['User']->value['dob'],"%m-%d-%Y");?>
</td>
						  </tr> 
						  <tr class="color_trbg">
							<td>Approx Annual Gross Revenue</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['AR']->value;?>
</td>
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
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['monday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['monday_close'];?>
 
										</td>
										
										<?php if ($_REQUEST['user_id'] == '') {?>
										<td><a href="javascript: CopyTimeFun();">Copy</a></td>
										<?php }?>
									  </tr>
									  <tr>
										<th scope="row">Tuesday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['tueday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['tueday_close'];?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Wednesday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['wedday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['wedday_close'];?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Thursday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['thuday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['thuday_close'];?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Friday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['friday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['friday_close'];?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Saturday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['satday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['satday_close'];?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Sunday</th>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['sunday_open'];?>

										</td>
										<td>
											<?php echo $_smarty_tpl->tpl_vars['hourLog']->value['sunday_close'];?>

										</td>
										
									  </tr>
									</table>
							</td>
						  </tr> 
						  <tr class="color_trbg">
							<td valign="top">Primary Automotive Services</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['PANames']->value;?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Brands</td>
							<td align="left"><?php echo $_smarty_tpl->tpl_vars['BrandNames']->value;?>
</td>
						  </tr>
							<tr class="color_trbg" >
								<td>Surrounding Cities to target </td>
								<td align="left"><?php echo $_smarty_tpl->tpl_vars['Cities']->value;?>
</td>
							</tr> 
						  <tr class="color_trbg">
							<td>Upload Zip File</td>
							<td align="left"><?php if ($_smarty_tpl->tpl_vars['User']->value['filename'] != '') {?><a href="http://mm.autorepairmarketing.com/customer/Secured/<?php echo $_smarty_tpl->tpl_vars['User']->value['user_name'];?>
/adminUploads/<?php echo $_smarty_tpl->tpl_vars['User']->value['filename'];?>
"><?php echo $_smarty_tpl->tpl_vars['User']->value['filename'];?>
</a><?php } else { ?>Not Uploaded<?php }?></td>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
