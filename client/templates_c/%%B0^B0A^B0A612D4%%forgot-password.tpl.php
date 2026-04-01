<?php /* Smarty version 2.6.26, created on 2011-02-01 09:48:32
         compiled from forgot-password.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="ForgotPassword" id="ForgotPassword" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Forgot Password</h1>
	<table width="100%" height="130px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Email:<span class="redstar">*</span></td>
		  <td align="left" valign="center"><input type="test" name="Log[Email]" id="Email" class="input req-string req-email" value="<?php if ($_REQUEST['Log']['Email'] != ''): ?><?php echo $_REQUEST['Log']['Email']; ?>
<?php endif; ?>"/></td>
		</tr>
		<tr>
		  <td align="center" valign="top" colspan="2" style="padding-left:215px;"><span id="errorDiv1" class="error-div">&nbsp;<?php if ($this->_tpl_vars['response'] != ''): ?><?php echo $this->_tpl_vars['response']; ?>
<?php else: ?> Enter your Email-id<?php endif; ?></span></td>
		</tr>
		<tr>
		  <td align="left" valign="top" style="padding-left:215px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" /></td>
		  <td></td>
		</tr> 
		</table>
<div class="clear"></div>
</form>
</div>
<div class="clear"></div>
</div>
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
'#ForgotPassword',errorDiv:'#errorDiv1'});
</script>