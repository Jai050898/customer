<?php /* Smarty version 2.6.26, created on 2013-06-14 06:23:30
         compiled from site-inspection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'site-inspection.tpl', 33, false),array('modifier', 'count', 'site-inspection.tpl', 433, false),)), $this); ?>
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
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['CustInfo']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['email']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['address']; ?>
</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['city']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['state']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['country']; ?>
</td>
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
												<input type="checkbox" name="Log[ga_verified]" value="Y" id="ga_verified" <?php if ($this->_tpl_vars['Cat']['ga_verified'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Webmaster tools Verified:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gw_verified]" value="Y" id="gw_verified" <?php if ($this->_tpl_vars['Cat']['gw_verified'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Alerts:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[galerts]" value="Y" id="galerts" <?php if ($this->_tpl_vars['Cat']['galerts'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Adwords:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gadwords]" value="Y" id="gadwords" <?php if ($this->_tpl_vars['Cat']['gadwords'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">YouTube Page:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[youtubepage]" value="Y" id="youtubepage" <?php if ($this->_tpl_vars['Cat']['youtubepage'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Places Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[google_places_location]" id="google_places_location" class="input " value="<?php echo $this->_tpl_vars['Cat']['google_places_location']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 1 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category1]" id="category1" class="input " value="<?php echo $this->_tpl_vars['Cat']['category1']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 2 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category2]" id="category2" class="input " value="<?php echo $this->_tpl_vars['Cat']['category3']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 3 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category3]" id="category3" class="input " value="<?php echo $this->_tpl_vars['Cat']['category3']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 4 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category4]" id="category4" class="input " value="<?php echo $this->_tpl_vars['Cat']['category4']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">category 5 </td>
											<td width="80%" align="left">
												<input type="text" name="Log[category5]" id="category5" class="input " value="<?php echo $this->_tpl_vars['Cat']['category5']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Avg. Impressions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[avgimpressions]" id="avgimpressions" class="input " value="<?php echo $this->_tpl_vars['Cat']['avgimpressions']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Avg. Actions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[avgactions]" id="avgactions" class="input " value="<?php echo $this->_tpl_vars['Cat']['avgactions']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Highest Impressions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[highestimpressions]" id="highestimpressions" class="input " value="<?php echo $this->_tpl_vars['Cat']['highestimpressions']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Highest Actions</td>
											<td width="80%" align="left">
												<input type="text" name="Log[highestactions]" id="highestactions" class="input " value="<?php echo $this->_tpl_vars['Cat']['highestactions']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Last Checked Date(YYYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lastcheckeddate]" id="lastcheckeddate" class="input " value="<?php echo $this->_tpl_vars['Cat']['lastcheckeddate']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Description<br />Max 200 characters</td>
											<td width="80%" align="left">
												<textarea name="Log[google_description]" id="google_description" class="input" style="width:250px; height:100px;" onblur="javascript: return checkcount(this.value);"><?php echo ((is_array($_tmp=$this->_tpl_vars['Cat']['google_description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Error pages</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">301:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_301]" value="Y" id="ep_301" <?php if ($this->_tpl_vars['Cat']['ep_301'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">400:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_400]" value="Y" id="ep_400" <?php if ($this->_tpl_vars['Cat']['ep_400'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">401:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_401]" value="Y" id="ep_401" <?php if ($this->_tpl_vars['Cat']['ep_401'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">403:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_403]" value="Y" id="ep_403" <?php if ($this->_tpl_vars['Cat']['ep_403'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">404:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_404]" value="Y" id="ep_404" <?php if ($this->_tpl_vars['Cat']['ep_404'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">500:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ep_500]" value="Y" id="ep_500" <?php if ($this->_tpl_vars['Cat']['ep_500'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Setup Pages</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Privacy:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[privacy]" value="Y" id="privacy" <?php if ($this->_tpl_vars['Cat']['privacy'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">TOS:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[tos]" value="Y" id="tos" <?php if ($this->_tpl_vars['Cat']['tos'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Disclaimer:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[disclaimer]" value="Y" id="disclaimer" <?php if ($this->_tpl_vars['Cat']['disclaimer'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Copyright:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[copyright]" value="Y" id="copyright" <?php if ($this->_tpl_vars['Cat']['copyright'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										
										
										<tr class="color_trbg">
											<td width="20%">Robots.txt File:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[robots]" value="Y" id="robots" <?php if ($this->_tpl_vars['Cat']['robots'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">ICO File:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ico_icon]" value="Y" id="ico_icon" <?php if ($this->_tpl_vars['Cat']['ico_icon'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Hcard:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[hcard]" value="Y" id="hcard" <?php if ($this->_tpl_vars['Cat']['hcard'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Raven Tools Setup</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Raven Setup:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[raven_setup]" value="Y" id="hcard" <?php if ($this->_tpl_vars['Cat']['raven_setup'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">GA Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[ga_linked]" value="Y" id="ga_linked" <?php if ($this->_tpl_vars['Cat']['ga_linked'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">GWT Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[gwt_linked]" value="Y" id="gwt_linked" <?php if ($this->_tpl_vars['Cat']['gwt_linked'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">FB Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[fb_linked]" value="Y" id="fb_linked" <?php if ($this->_tpl_vars['Cat']['fb_linked'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">T Linked:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[t_linked]" value="Y" id="t_linked" <?php if ($this->_tpl_vars['Cat']['t_linked'] == 'Y'): ?> checked="checked"<?php endif; ?> />
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Rank Check</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Getlisted Rank Percentage</td>
											<td width="80%" align="left">
												<input type="text" name="Log[getlistedrankpercentage]" id="getlistedrankpercentage" class="input " value="<?php echo $this->_tpl_vars['Cat']['getlistedrankpercentage']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Hubspot Rank</td>
											<td width="80%" align="left">
												<input type="text" name="Log[hubspotrank]" id="hubspotrank" class="input " value="<?php echo $this->_tpl_vars['Cat']['hubspotrank']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Seomoz Rank</td>
											<td width="80%" align="left">
												<input type="text" name="Log[seomozrank]" id="seomozrank" class="input " value="<?php echo $this->_tpl_vars['Cat']['seomozrank']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Last checked Date (YYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[rk_lastcheckeddate]" id="rk_lastcheckeddate" class="input " value="<?php echo $this->_tpl_vars['Cat']['rk_lastcheckeddate']; ?>
"/>
											 </td>
										</tr>
										
										<tr>
											<td colspan="2"><h2>Social count</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Facebook Fanpage Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[fbfanpagelocation]" id="fbfanpagelocation" class="input " value="<?php echo $this->_tpl_vars['Cat']['fbfanpagelocation']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Facebook fans</td>
											<td width="80%" align="left">
												<input type="text" name="Log[fbfans]" id="fbfans" class="input " value="<?php echo $this->_tpl_vars['Cat']['fbfans']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Plus for Business Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[gpbusinesslocation]" id="gpbusinesslocation" class="input " value="<?php echo $this->_tpl_vars['Cat']['gpbusinesslocation']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Google Plus Count</td>
											<td width="80%" align="left">
												<input type="text" name="Log[gpcount]" id="gpcount" class="input " value="<?php echo $this->_tpl_vars['Cat']['gpcount']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Linked Business Page Location</td>
											<td width="80%" align="left">
												<input type="text" name="Log[linedinpagelocation]" id="linedinpagelocation" class="input " value="<?php echo $this->_tpl_vars['Cat']['linedinpagelocation']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">LinkIn Follows</td>
											<td width="80%" align="left">
												<input type="text" name="Log[linkinfollows]" id="linkinfollows" class="input " value="<?php echo $this->_tpl_vars['Cat']['linkinfollows']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Twitter Followers</td>
											<td width="80%" align="left">
												<input type="text" name="Log[twitterfollowers]" id="twitterfollowers" class="input " value="<?php echo $this->_tpl_vars['Cat']['twitterfollowers']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Check Date (YYYY-mm-dd)</td>
											<td width="80%" align="left">
												<input type="text" name="Log[sc_checkdate]" id="sc_checkdate" class="input " value="<?php echo $this->_tpl_vars['Cat']['sc_checkdate']; ?>
"/>
											 </td>
										</tr>
										
										<tr class="color_trbg">
											<td width="20%">Chuck:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[chuck]" id="chuck" class="input " value="<?php echo $this->_tpl_vars['Cat']['chuck']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Shock:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[shock]" id="shock" class="input " value="<?php echo $this->_tpl_vars['Cat']['shock']; ?>
"/>
											 </td>
										</tr>
										
										
										<tr>
											<td colspan="2"><h2>Location</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Latitude:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lat]" id="lat" class="input " value="<?php echo $this->_tpl_vars['Cat']['lat']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Longitude:</td>
											<td width="80%" align="left">
												<input type="text" name="Log[lang]" id="lang" class="input " value="<?php echo $this->_tpl_vars['Cat']['lang']; ?>
"/>
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
													<?php $_from = $this->_tpl_vars['KEY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="services[]" id="services" <?php if ($this->_tpl_vars['KEYarray'] != '' && in_array ( $this->_tpl_vars['item']['key_id'] , $this->_tpl_vars['KEYarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['key_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
													<?php if ($this->_foreach['item']['iteration']%5 == 0): ?>
													</tr><tr>
													<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
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
						
						<?php $_from = $this->_tpl_vars['Brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<?php if (count($this->_tpl_vars['item']['Brands']) > 0): ?>
						<tr>
						<td><b><?php echo $this->_tpl_vars['item']['name']; ?>
</b></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						
						<?php $_from = $this->_tpl_vars['item']['Brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" <?php if ($this->_tpl_vars['Brandsarray'] != '' && in_array ( $this->_tpl_vars['item1']['brand_id'] , $this->_tpl_vars['Brandsarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item1']['brand_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['brand_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						<?php if ($this->_foreach['item1']['iteration']%2 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						
						</tr>
						</table>
						</td>
						</tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<tr>
						<td><strong>Others</strong></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						<?php $_from = $this->_tpl_vars['Rbrands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" <?php if ($this->_tpl_vars['Brandsarray'] != '' && in_array ( $this->_tpl_vars['item']['brand_id'] , $this->_tpl_vars['Brandsarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['brand_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['brand_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						<?php if ($this->_foreach['item']['iteration']%2 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</tr>
						</table>
						</td>
						</tr>
					</table>
												</td>
											  </tr>
										<tr>
											<td align="right" valign="middle">&nbsp;</td>
											<td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#CatForm\',
		errorDiv	: \'#errorDiv1\'
});
function checkcount(val)
{
	var len = $("#google_description").val();
	if(len.length >= 200)
	{
		alert("The Maximum Google Description must be 200 characters only");
		return false;
	}
	$(\'#hid_key\').val(\'Post\');
	return true;
}
</script>
'; ?>