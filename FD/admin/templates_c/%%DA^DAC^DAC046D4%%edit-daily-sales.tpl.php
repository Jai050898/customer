<?php /* Smarty version 2.6.26, created on 2012-11-23 00:53:36
         compiled from edit-daily-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'edit-daily-sales.tpl', 51, false),)), $this); ?>
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
/admin/dashboard.php">Home</a></li>
							<li>Edit Daily Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Edit Daily Data</div>
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
												<td colspan="2"><h2>Edit Daily Data</h2></td>
											</tr>
											<?php if ($this->_tpl_vars['error'] != ""): ?>
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong><?php echo $this->_tpl_vars['error']; ?>
</strong></td>
											</tr>
											<?php endif; ?>
											<tr class="color_trbg">
												<td width="12%">Year</td>
												<td width="88%" align="left">
													<?php echo $this->_tpl_vars['AccDet']['year']; ?>

												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%">Year</td>
												<td width="88%" align="left">
													<?php echo ((is_array($_tmp="01-".($this->_tpl_vars['AccDet']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>

												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%">Day</td>
												<td width="88%" align="left">
													<?php echo $this->_tpl_vars['AccDet']['day']; ?>
 (<?php echo ((is_array($_tmp=($this->_tpl_vars['AccDet']['day'])."-".($this->_tpl_vars['AccDet']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a") : smarty_modifier_date_format($_tmp, "%a")); ?>
)
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Gross Sales</td>
												<td width="88%" align="left">
													<input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['grosssales']; ?>
" />
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">Repair Orders</td>
												<td width="88%" align="left">
													<input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['repairorders']; ?>
" />
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>New Customers</td>
												<td align="left"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['newcustomers']; ?>
" /></td>
											 </tr>
											 
											 <tr class="color_trbg">
												<td>Actual Hours</td>
												<td align="left"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['actualhours']; ?>
"></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Vibe</td>
												<td align="left"><select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['vibe'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select></td>
											 </tr>
											 <tr class="color_trbg">
												<td>Activity</td>
												<td align="left"><select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['activity'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select></td>
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