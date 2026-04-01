<?php /* Smarty version 2.6.26, created on 2013-12-10 10:46:36
         compiled from pwd_chngd_successfully.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Successfully changed..</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="left" valign="center" style="padding-left:95px;">Hi <strong><?php echo $this->_tpl_vars['UsrDet']['full_name']; ?>
</strong>...<br>
				  	You have successfully changed your password..<br>
					<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/login.php">Click Here</a> to log on to your account with new password.
				  	</td>
				  
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