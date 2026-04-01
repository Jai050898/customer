<?php /* Smarty version 2.6.26, created on 2014-03-17 04:48:17
         compiled from edit-staff-demo.tpl */ ?>
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
/admin/manage-staff.php">Manage Staff</a></li>
							<li>Edit Staff</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Edit staff</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
			<form name="TaskForm" class="form" id="TaskForm" method="post"  onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="<?php echo $_GET['id']; ?>
">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">First Name:</td>
				 <td width="53%">						 
                                    <input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['first_name']; ?>
" />					
                                </td>
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Last Name:</td>
				  <td>
                                      <input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['last_name']; ?>
"/> 
                                  </td>				
                       
                                </tr>
                                <tr>
				  <td align="right" valign="center" style="padding-left:5px;">Email:</td>
				  <td>
                                      <input type="text" name="Log[email]" id="email"  class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['email']; ?>
" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br />
                                <span id="validdiv" style="padding-left:5px; color:red"></span>
                           
                                  </td>				
                       
                                </tr>
				<tr>
                                    <td align="right" valign="center" style="padding-left:5px;">UserName :</td>
                                    <td><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['user_name']; ?>
" <?php if ($_REQUEST['user_id'] != ""): ?>
                                       onBlur="javascript:fnCheckUnameAvailEdit('user_name',this.value,'uiddiv',<?php echo $_REQUEST['user_id']; ?>
);" <?php else: ?> onBlur="javascript:fnCheckUnameAvail('user_name',this.value,'uiddiv');" <?php endif; ?>/><br />
                                <span id="uiddiv" style="padding-left:5px; color:red"></span>  
                                     </td>				
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Password</td>
				  <td><input type="password" name="Log[password]" id="Log[password]"  class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['password']; ?>
"/></td>				
                                </tr>
                                
							<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Company Name :</td>
				  <td><input type="text" name="Log[company_name]" id="company_name"  class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['company_name']; ?>
"/> </td>				
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">City :</td>
				<td><input type="text" name="Log[city]" id="city"  class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['city']; ?>
"/> </td>				
                                </tr>
                                <tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px; padding-left:215px;">&nbsp;</td>
				</tr>
	
          
                                <tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="submitBtn1" id="submitBtn1" type="submit" value="Submit" /></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px; padding-left:215px;">&nbsp;</td>
				</tr>
				<?php if ($this->_tpl_vars['error'] != ""): ?>
                        <tr class="color_trbg">
                            <td colspan="2" style="color:#00FF00;text-align:center"><?php echo $this->_tpl_vars['error']; ?>
</td>
                        </tr>
                        <?php endif; ?>
			</table>
			<div class="clear"></div>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>

<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
</script>
'; ?>
