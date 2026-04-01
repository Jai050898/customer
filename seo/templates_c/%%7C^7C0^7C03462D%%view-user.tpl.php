<?php /* Smarty version 2.6.26, created on 2013-05-15 07:36:04
         compiled from view-user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'view-user.tpl', 32, false),array('modifier', 'nl2br', 'view-user.tpl', 48, false),array('modifier', 'date_format', 'view-user.tpl', 104, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="innerleft">
		  <div class="admin-rightpart">
		  <div class="admin_topbgnav">
			  <div id="admin_bcrumb">
				<ul>
					  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
					  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
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
							<td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['first_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['User']['last_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Email</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['email']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Phone</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['phone']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Fax</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['fax']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Address</td>
							<td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Website</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['website']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Adwords Budget</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['adwords_budget']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Country</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['Country_Name']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">State</td>
							<td width="80%" align="left"><?php if ($this->_tpl_vars['User']['State_Code'] != ""): ?><?php echo $this->_tpl_vars['User']['State_Code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['User']['State_Name']; ?>
<?php endif; ?></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">City</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['city']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Zip Code</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['zip_code']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Company Name</td>
							<td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Screen Name </td>
							<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['screen_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Year shop established </td>
							<td align="left"><?php echo $this->_tpl_vars['User']['shop_started_year']; ?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Number of employees </td>
							<td align="left"><?php echo $this->_tpl_vars['User']['no_of_emp']; ?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td>Number of shop bays </td>
							<td align="left"><?php echo $this->_tpl_vars['User']['no_of_shop_bays']; ?>
</td>
						  </tr> 
						<tr class="color_trbg">
							<td valign="top">Payment Types accepted</td>
							<td align="left"><?php echo $this->_tpl_vars['PTNames']; ?>
</td>
						  </tr> 
						 <tr class="color_trbg">
							<td valign="top">Languages</td>
							<td align="left"><?php echo $this->_tpl_vars['LGNames']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Birthday</td>
							<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
						  </tr> 
						  <tr class="color_trbg">
							<td>Approx Annual Gross Revenue</td>
							<td align="left"><?php echo $this->_tpl_vars['AR']; ?>
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
											<?php echo $this->_tpl_vars['hourLog']['monday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['monday_close']; ?>
 
										</td>
										
										<?php if ($_REQUEST['user_id'] == ""): ?>
										<td><a href="javascript: CopyTimeFun();">Copy</a></td>
										<?php endif; ?>
									  </tr>
									  <tr>
										<th scope="row">Tuesday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['tueday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['tueday_close']; ?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Wednesday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['wedday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['wedday_close']; ?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Thursday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['thuday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['thuday_close']; ?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Friday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['friday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['friday_close']; ?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Saturday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['satday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['satday_close']; ?>

										</td>
										
									  </tr>
									  <tr>
										<th scope="row">Sunday</th>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['sunday_open']; ?>

										</td>
										<td>
											<?php echo $this->_tpl_vars['hourLog']['sunday_close']; ?>

										</td>
										
									  </tr>
									</table>
							</td>
						  </tr> 
						  <tr class="color_trbg">
							<td valign="top">Primary Automotive Services</td>
							<td align="left"><?php echo $this->_tpl_vars['PANames']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Brands</td>
							<td align="left"><?php echo $this->_tpl_vars['BrandNames']; ?>
</td>
						  </tr>
							<tr class="color_trbg" >
								<td>Surrounding Cities to target </td>
								<td align="left"><?php echo $this->_tpl_vars['Cities']; ?>
</td>
							</tr> 
						  <tr class="color_trbg">
							<td>Upload Zip File</td>
							<td align="left"><?php if ($this->_tpl_vars['User']['filename'] != ""): ?><a href="http://mm.autorepairmarketing.com/customer/Secured/<?php echo $this->_tpl_vars['User']['user_name']; ?>
/adminUploads/<?php echo $this->_tpl_vars['User']['filename']; ?>
"><?php echo $this->_tpl_vars['User']['filename']; ?>
</a><?php else: ?>Not Uploaded<?php endif; ?></td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>