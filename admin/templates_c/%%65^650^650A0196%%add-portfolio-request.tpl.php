<?php /* Smarty version 2.6.26, created on 2014-02-06 02:32:10
         compiled from add-portfolio-request.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
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
					  <li><?php if ($_REQUEST['portfolio_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Portfolio Request</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head"><?php if ($_REQUEST['portfolio_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Portfolio Request</div>
				</div>
				<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
	
					<tr>
						<td align="left" valign="top" >
							<form name="PortfolioForm" class="form" id="PortfolioForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="Image_Logo" id="Image_Logo" value="" />
							<input type="hidden" name="hid_key" id="hid_key" value="">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2><?php if ($_REQUEST['portfolio_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Portfolio Request</h2></td>
									  </tr>
									<tr class="color_trbg">
										<td width="20%">Name</td>
										<td width="80%" align="left"><input type="text" name="Log[name]" id="name" class="select req-string" value="<?php echo $this->_tpl_vars['Portfolio']['name']; ?>
"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Phone</td>
										<td width="80%" align="left"><input type="text" name="Log[phone]" id="phone" class="select req-string" value="<?php echo $this->_tpl_vars['Portfolio']['phone']; ?>
"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Email</td>
										<td width="80%" align="left"><input type="text" name="Log[email]" id="email" class="select req-string req-email" value="<?php echo $this->_tpl_vars['Portfolio']['email']; ?>
"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Code</td>
										<td width="80%" align="left"><input type="text" name="Log[code]" id="code" class="select req-string" value="<?php echo $this->_tpl_vars['Portfolio']['code']; ?>
"/>&nbsp;&nbsp;<a href="javascript: GenNum();">Generate Code</a></td>
									</tr> 
									<tr class="color_trbg">
										<td width="20%">Show Portfolio</td>
										<td width="80%" align="left">
											<select name="Log[show_status]" id="show_status" class="searchinput">
												<option value="">-- Select Status --</option>
												<option value="Y" <?php if ($this->_tpl_vars['Portfolio']['show_status'] == 'Y'): ?> selected="selected"<?php endif; ?>>Y</option>
												<option value="N" <?php if ($this->_tpl_vars['Portfolio']['show_status'] == 'N'): ?> selected="selected"<?php endif; ?>>N</option>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#PortfolioForm\',
		errorDiv	: \'#errorDiv1\'
});
function GenNum() {
	tb_show(\'Generate Number\',\'https://www.autorepairmarketing.com/customer/admin/gennumber.php?height=330&width=640\');
	return;
}	
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>