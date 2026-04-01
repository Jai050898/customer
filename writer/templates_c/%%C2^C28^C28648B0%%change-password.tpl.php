<?php /* Smarty version 2.6.26, created on 2013-06-15 02:47:04
         compiled from change-password.tpl */ ?>
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
/seo/dashboard.php">Home</a></li>
							<li>Change Password</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Change Password</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
							<td align="left" valign="top" >
							<form id="ChangeForm" class="form" method="post" name="LoginForm">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2>Change Password</h2></td>
									</tr>
									<tr>
									  <td align="right" valign="middle">&nbsp;</td>
									  <td>&nbsp;</td>
									</tr>
									<tr class="color_trbg">
									  <td width="32%" align="right" valign="middle">Old Password: </td>
									  <td width="68%"><span class="formControl">
										<input name="Old_Password" type="password" class="input req-string req-min" id="Old_Password" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr class="color_trbg">
									  <td width="32%" align="right" valign="middle">New Password:&nbsp;</td>
									  <td width="68%"><span class="formControl">
										<input name="Password" type="password" class="input req-string req-same req-min" id="Password" rel="passwrd" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr>
									  <td align="right" valign="middle">Confirm New Password:</td>
									  <td><span class="formControl">
										<input name="CPassword" type="password" class="input req-string req-same req-min" id="CPassword" rel="passwrd" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr class="color_trbg">
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#ChangeForm\',
		errorDiv	: \'#errorDiv1\'
});	
</script>
'; ?>