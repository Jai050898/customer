<?php /* Smarty version 2.6.26, created on 2013-04-18 06:29:11
         compiled from add-competitor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'add-competitor.tpl', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
'; ?>

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
/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-competitors.php">Manage Competitors</a></li>
							<li><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Competitors</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Competitors</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="UsersForm" id="UsersForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Competitors</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[name]" id="name" class="input req-string" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['User']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"/>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%">Address</td>
												<td width="88%" align="left">
													<input type="text" name="Log[address]" id="address" class="input req-string" value="<?php echo $this->_tpl_vars['User']['address']; ?>
"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input req-string" value="<?php echo $this->_tpl_vars['User']['city']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>State</td>
												<td align="left"><input type="text" name="Log[state]" id="state" class="input req-string" value="<?php echo $this->_tpl_vars['User']['state']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip]" id="zip" class="input req-string" value="<?php echo $this->_tpl_vars['User']['zip']; ?>
" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input" value="<?php echo $this->_tpl_vars['User']['phone']; ?>
"/></td>
											 </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="<?php echo $this->_tpl_vars['User']['website']; ?>
" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Reviews</td>
												<td align="left"><input type="text" name="Log[reviews]" id="reviews" class="input" value="<?php echo $this->_tpl_vars['User']['reviews']; ?>
" /></td>
											</tr>
											<tr class="color_trbg">
												<td>Verified</td>
												<td align="left">
												<select name="Log[verified]" id="verified" class="input req-string">
												<option value="">-- Please Select --</option>
												<option value="Y" <?php if ($this->_tpl_vars['User']['verified'] == 'Y'): ?> selected="selected" <?php endif; ?>>YES</option>
												<option value="N" <?php if ($this->_tpl_vars['User']['verified'] == 'N'): ?> selected="selected" <?php endif; ?>>NO</option>
												</select>
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
		scope		: \'#UsersForm\',
		errorDiv	: \'#errorDiv1\'
});	
</script>
'; ?>