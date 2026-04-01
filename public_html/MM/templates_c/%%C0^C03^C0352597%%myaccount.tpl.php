<?php /* Smarty version 2.6.26, created on 2013-10-11 03:13:03
         compiled from myaccount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'myaccount.tpl', 11, false),array('modifier', 'number_format', 'myaccount.tpl', 71, false),array('modifier', 'date_format', 'myaccount.tpl', 95, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Account Details</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;" width="40%">Business Name:</td>
				  <td align="left" valign="center" width="60%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Address:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['address']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">City:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['city']; ?>
</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:10px;">State:</td>
					<td align="left" valign="center"><?php if ($this->_tpl_vars['AccDet']['State_Code'] != ""): ?><?php echo $this->_tpl_vars['AccDet']['State_Code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['AccDet']['State_Name']; ?>
<?php endif; ?></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Zip code:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['zip_code']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Phone:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['phone']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:10px;">Web Site:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['website']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;" width="35%">Full Owners Name:</td>
				  <td align="left" valign="center" width="65%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['first_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['last_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Public email address:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['email']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Screen Name:</td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['screen_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Fax Number:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['fax']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Country:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['Country_Name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Year Shop Established:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['shop_started_year']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Number of employees :</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['no_of_emp']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Number of shop bays:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['no_of_shop_bays']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Shop Labor Rate :</td>
				  <td align="left" valign="center">$<?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['shop_labor_rate'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">No of Technicians :</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['no_of_technicians']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">No of Advisors :</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['no_of_advisors']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">sq ft of shop (entire) :</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['sq_ft_of_shop']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Payment types accepted:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['PTNames']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Languages spoken:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['LGNames']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Birthday:</td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Approx gross annual revenue:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AR']; ?>
</td>
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
									<?php echo $this->_tpl_vars['hourLog']['monday_open']; ?>

								</td>
								<td>
									<?php echo $this->_tpl_vars['hourLog']['monday_close']; ?>
 
								</td>
								
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
				
				
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Primary Automotive Services:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['PANames']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Primary Brands:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['BrandNames']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:10px;">Surrounding Cities to target:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['Cities']; ?>
</td>
				</tr>
				
				
				
			</table>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>