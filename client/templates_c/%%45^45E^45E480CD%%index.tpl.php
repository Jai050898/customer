<?php /* Smarty version 2.6.26, created on 2011-02-01 09:48:27
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Login Form</h1>
	<table width="100%" height="190px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Email:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="text" name="Log[email]" id="email" class="input req-string req-email" value=""></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Password:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="password" name="Log[password]" id="password" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;"><?php if ($this->_tpl_vars['Responce'] != ''): ?><?php echo $this->_tpl_vars['Responce']; ?>
<?php endif; ?></td>
		</tr>
		<tr>
			<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Login" type="Submit" value="Submit" /></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-right:65px;" colspan="2"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/client/forgot-password.php">Forgot Password?</a></td>
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
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Login').formValidator(<?php echo '{scope: '; ?>
'#LoginForm',errorDiv:'#errorDiv1'});
</script>