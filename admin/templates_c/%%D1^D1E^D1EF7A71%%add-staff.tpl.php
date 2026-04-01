<?php /* Smarty version 2.6.26, created on 2014-04-10 04:17:30
         compiled from add-staff.tpl */ ?>
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
/admin/manage-staff.php?user_id=<?php echo $_REQUEST['user_id']; ?>
">Manage Staff</a></li>
							<li>Add Staff</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Staff</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name='frmIncoice' method="post" id="frmIncoice" class="form">			

                    <input type="hidden" name="hid_key" id="hid_key" value="<?php echo $_GET['user_id']; ?>
">
                   
                    
                    <input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">				
                        <?php if ($this->_tpl_vars['error'] != ""): ?>
                        <tr class="color_trbg">
                            <td colspan="2" style="color:#FF0000;"><?php echo $this->_tpl_vars['error']; ?>
</td>
                        </tr>
                        <?php endif; ?>
                        <tr>		
                            
                            <td width="47%" height="38" align="right">First Name : </td>						
                            <td width="53%">	
                               
                                <input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['first_name']; ?>
"/>						
                            </td>					  
                        </tr>				
                        <tr>						
                            <td height="36" align="right">Last Name : </td>						
                            <td><input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['last_name']; ?>
"/> </td>				
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Email : </td>						
                            <td>
                                <input type="text" name="Log[email]" id="email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['User']['email']; ?>
" 
                                       onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br />
                                <span id="validdiv" style="padding-left:5px; color:red"></span>
                            </td>
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">UserName : </td>						
                            <td><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['user_name']; ?>
" <?php if ($_REQUEST['user_id'] != ""): ?>
                                       onBlur="javascript:fnCheckUnameAvailEdit('user_name',this.value,'uiddiv',<?php echo $_REQUEST['user_id']; ?>
);" <?php else: ?> onBlur="javascript:fnCheckUnameAvail('user_name',this.value,'uiddiv');" <?php endif; ?>/><br />
                                <span id="uiddiv" style="padding-left:5px; color:red"></span>  </td>				
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Password : </td>						
                            <td><input type="password" name="Log[password]" id="Log[password]"  class="input req-string" value="<?php echo $this->_tpl_vars['User']['password']; ?>
"/> </td>				
                        </tr>					  

                        <!--<tr>						
                            <td height="36" align="right">Company Name : </td>						
                            <td><input type="text" name="Log[company_name]" id="company_name"  class="input req-string" value="<?php echo $this->_tpl_vars['User']['company_name']; ?>
"/> </td>				
                        </tr>
                        <tr>						
                            <td height="36" align="right">City: </td>						
                            <td><input type="text"  name="Log[city]" id="city" class="input req-string" value="<?php echo $this->_tpl_vars['User']['city']; ?>
"/> </td>				
                        </tr>-->
                        <tr>				
                            <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;"><?php echo $this->_tpl_vars['Errormssage']; ?>
</td>			
                        </tr>		
                                            

                        <tr>						
                            <td height="33" colspan="2" align="center">						 
                                <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit"  />	
                            </td>						
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
		scope		: \'#frmIncoice\',
		errorDiv	: \'#errorDiv1\'
});	

</script>
'; ?>
