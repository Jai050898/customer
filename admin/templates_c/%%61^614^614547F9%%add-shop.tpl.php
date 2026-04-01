<?php /* Smarty version 2.6.26, created on 2013-03-18 02:54:32
         compiled from add-shop.tpl */ ?>
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
/admin/manage-users.php">Manage Shop</a></li>
							<li><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form id="UsersForm" class="form" name="UsersForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');" enctype="multipart/form-data">
										<input type="hidden" name="Image_Logo" id="Image_Logo" value="<?php echo $this->_tpl_vars['User']['shop_img']; ?>
" />
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Shop Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_name]" id="shop_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['shop_name']; ?>
"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%">Email <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_email]" id="shop_email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['User']['shop_email']; ?>
" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[shop_phone]" id="shop_phone"  value="<?php echo $this->_tpl_vars['User']['shop_phone']; ?>
"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Address</td>
												<td align="left"><textarea  name="Log[shop_address]" id="shop_address"  style="height:100px; width:300px;" ><?php echo $this->_tpl_vars['User']['shop_address']; ?>
</textarea></td>
											  </tr>
											<tr class="color_trbg">
												<td>Website </td>
												<td align="left"><input type="text" name="Log[shop_website]" id="shop_website" class="input" value="<?php echo $this->_tpl_vars['User']['shop_website']; ?>
"/></td>
											  </tr>
											<tr>
												<td>State <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shop_state]" id="shop_state" class="input req-string" value="<?php echo $this->_tpl_vars['User']['shop_state']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>City <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shop_city]" id="shop_city" class="input req-string" value="<?php echo $this->_tpl_vars['User']['shop_city']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[shop_zip]" id="shop_zip" class="input" value="<?php echo $this->_tpl_vars['User']['shop_zip']; ?>
"  maxlength="6"/></td>
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
			scope		: \'#UsersForm\',
			errorDiv	: \'#errorDiv1\'
	});
	</script>
'; ?>