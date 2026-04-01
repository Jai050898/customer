<?php /* Smarty version 2.6.26, created on 2013-06-15 03:21:42
         compiled from site-inspection.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'site-inspection.tpl', 33, false),array('modifier', 'count', 'site-inspection.tpl', 122, false),)), $this); ?>
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
/writer/dashboard.php">Home</a></li>
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/writer/manage-users.php">Manage Users</a></li>
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
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript: $('#hid_key').val('Post');">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">							
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
</script>
'; ?>