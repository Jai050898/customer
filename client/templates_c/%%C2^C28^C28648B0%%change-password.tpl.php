<?php /* Smarty version 2.6.26, created on 2011-02-01 08:39:39
         compiled from change-password.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
		<div class="bodyleft">
			<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
				<div style="height:10px;"></div>
				<h1>Change Password</h1>
					<table width="100%" cellpadding="5" cellspacing="2" class="left_content" style="color:#2f3337;">
						<tr>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td align="right" valign="center" style="padding-left:95px;">Old Password :<span class="redstar">*</span> </td>
							<td align="left" valign="center"><input name="Old_Password" id="Old_Password" type="password" class="input req-string"/></td>
						</tr>
						<tr>
						<td align="right" valign="center" style="padding-left:95px;">New Password :<span class="redstar">*</span></td>
							<td align="left" valign="center"> <input name="Password" id="Password" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
							<td align="right" valign="center" style="padding-left:95px;">Confirm New Password :<span class="redstar">*</span></td>
							<td align="left" valign="center"><input name="CPassword" id="CPassword" type="password" class="input req-string req-same req-min" minlength="6" maxlength="15" rel="password" /></td>
						</tr>
						<tr>
						  <td align="center" valign="top" colspan="2" style="padding-left:255px;"><span id="errorDiv1" class="error-div">&nbsp;<?php if ($this->_tpl_vars['response'] != ''): ?><?php echo $this->_tpl_vars['response']; ?>
<?php endif; ?></span></td>
						</tr>
						<tr>
						  <td align="left" valign="top" style="padding-left:295px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" /></td>
						  <td></td>
						</tr> 
					</table>
				<div class="clear"></div>
			</form>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
	<div><img src="images/bodybottom.png" alt="" /></div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Post').formValidator(<?php echo '{scope: '; ?>
'#LoginForm',errorDiv:'#errorDiv1'});
</script>