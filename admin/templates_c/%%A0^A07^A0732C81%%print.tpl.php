<?php /* Smarty version 2.6.26, created on 2013-05-03 06:25:42
         compiled from print.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'print.tpl', 28, false),array('modifier', 'nl2br', 'print.tpl', 32, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>MMS User Print Page</title>
<?php echo '
<script language="javascript" type="text/javascript">
	var site_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '";
	var img_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/images";
</script>
'; ?>

<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/style.css" rel="stylesheet" type="text/css">
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
							<td width="75%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Address</td>
							<td width="75%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">City</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['city']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">State</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['State_Name']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Zip Code</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['zip_code']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Phone</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['phone']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Website</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['website']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Full Owners Name</td>
							<td width="75%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['first_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['User']['last_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Public email address</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['email']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Screen Name </td>
							<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['screen_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Fax Number</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['fax']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="25%">Country</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['Country_Name']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Year Shop Established</td>
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
							<td >Payment types accepted</td>
							<td align="left"><?php echo $this->_tpl_vars['PTNames']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Languages spoken</td>
							<td align="left"><?php echo $this->_tpl_vars['LGNames']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Birthday (YYYY-MM-DD)</td>
							<td align="left"><?php echo $this->_tpl_vars['User']['dob']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Approx gross annual revenue</td>
							<td align="left"><?php echo $this->_tpl_vars['AR']; ?>
</td>
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
						  <tr class="color_trbg">
							<td valign="top">Primary Automotive Services</td>
							<td align="left">
								<table width="100%" border="0" cellspacing="5" cellpadding="5">
								<tr>
								<?php $_from = $this->_tpl_vars['PANames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
								<td align="left" style="width:50px; border-bottom:none;"><?php echo $this->_tpl_vars['item']; ?>
</td>
								<?php if ($this->_foreach['item']['iteration']%10 == 0): ?>
								</tr><tr>
								<?php endif; ?>
								<?php endforeach; else: ?>
								<td align="left" style="border-bottom:none;">NA</td>
								<?php endif; unset($_from); ?>
								</tr>
								</table>
							</td>
						  </tr>
						  <tr class="color_trbg">
							<td valign="top">Primary Brands</td>
							<td align="left">
								<table width="100%" border="0" cellspacing="5" cellpadding="5">
								<tr>
								<?php $_from = $this->_tpl_vars['BrandNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
								<td align="left" style="width:50px; border-bottom:none;"><?php echo $this->_tpl_vars['item']; ?>
</td>
								<?php if ($this->_foreach['item']['iteration']%10 == 0): ?>
								</tr><tr>
								<?php endif; ?>
								<?php endforeach; else: ?>
								<td align="left" style="border-bottom:none;">NA</td>
								<?php endif; unset($_from); ?>
								</tr>
								</table>
							</td>
						  </tr>
						  <tr class="color_trbg" >
								<td>Surrounding Cities to target </td>
								<td align="left"><?php echo $this->_tpl_vars['Cities']; ?>
</td>
							</tr>
							
						  <!-- <tr class="color_trbg">
							<td width="25%">Adwords Budget</td>
							<td width="75%" align="left"><?php echo $this->_tpl_vars['User']['adwords_budget']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td>Upload Zip File</td>
							<td align="left"><?php if ($this->_tpl_vars['User']['filename'] != ""): ?><a href="http://mm.autorepairmarketing.com/customer/Secured/<?php echo $this->_tpl_vars['User']['user_name']; ?>
/adminUploads/<?php echo $this->_tpl_vars['User']['filename']; ?>
"><?php echo $this->_tpl_vars['User']['filename']; ?>
</a><?php else: ?>Not Uploaded<?php endif; ?></td>
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
<?php echo '
<script language="javascript" type="text/javascript">
window.print();
</script>
'; ?>