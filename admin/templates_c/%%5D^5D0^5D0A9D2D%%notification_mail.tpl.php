<?php /* Smarty version 2.6.26, created on 2014-08-01 02:53:13
         compiled from notification_mail.tpl */ ?>
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
/admin/manage-users.php">Home</a></li> 
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/notification_mail.php?user_id=<?php echo $_REQUEST['user_id']; ?>
">Manage Notificaiton Mail</a></li>
							
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Manage Notification Mail</div>
				  </div>
					<div class="ad_textsp">
						<table width="50%" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name='frmIncoice' method="post" id="frmIncoice" class="form">			

                    <input type="hidden" name="hid_key" id="hid_key" value="<?php echo $_GET['user_id']; ?>
">
                   
                    
                    <input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										
                    <table width="50%" border="0" cellspacing="0" cellpadding="0" align="center">				
                        <tr>						
                            <td height="36" align="right">Email : </td>						
                            <td>
                                <input type="text" name="Log[email]" id="email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['notify_mail']; ?>
" 
                                      />
                               
                            </td>
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Active : </td>						
                            <td>
                            <?php if ($this->_tpl_vars['notify_status'] == 1): ?>
                            <input type="checkbox" name="Log[active]" id="active"  value="1" checked="checked"/>
                            <?php else: ?>
                                                        <input type="checkbox" name="Log[active]" id="active"  value="1" />
                                                        <?php endif; ?>
                             </td>				
                        </tr>					  
                        
                        <tr>				
                            <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;" colspan="2"><?php echo $this->_tpl_vars['Errormssage']; ?>
 <?php if ($this->_tpl_vars['error'] != ""): ?><span style="color:#FF0000;"><?php echo $this->_tpl_vars['error']; ?>
</span> <?php endif; ?></td>			
                        </tr>		
                                            

                        <tr>						
                            <td height="33" colspan="2" align="center">						 
                                <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit" onclick="checkvalidation()"  />	
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
