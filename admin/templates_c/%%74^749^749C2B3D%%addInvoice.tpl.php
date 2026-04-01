<?php /* Smarty version 2.6.26, created on 2014-02-21 09:06:00
         compiled from addInvoice.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
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
                                                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-online-payments.php">Manage Online Payments</a></li>
							  
                                                            <li>Add Invoice</li>
                                                    </ul>
                                                  <div class="clr"></div>
                                          </div>
                                          <div id="admin_head">Add Invoice</div>
                            </div>
                                    <div class="ad_textsp">
                                        
                                        <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                            <tr>				
                                                                    <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;"><?php echo $this->_tpl_vars['Errormssage']; ?>
</td>			
                                                                </tr>		
                                                                			  
                                                                <tr><td>
                                                                        <form name='frmIncoice' method="post" id="frmIncoice" class="form">			
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">				
                                                                                <tr>						
                                                                                    <td width="47%" height="38" align="right">Invoice Number : </td>						
                                                                                    <td width="53%">						 
                                                                                        <input type="text" name="invoiceNumber"  id="Number" class="input req-string" />						
                                                                                    </td>					  
                                                                                </tr>				
                                                                                <tr>						
                                                                                    <td height="36" align="right">Amount : </td>						
                                                                                    <td><input type="text" name="invoiceAmount"  id="Amount"class="input req-string" /> ( in $ )</td>				
                                                                                </tr>					  
                                                                                <tr>						
                                                                                    <td height="33" colspan="2" align="center">						 
                                                                                        <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit"  />	
                                                                                    </td>						
                                                                                </tr>					
                                                                            </table>				
                                                                        </form>				
                                                         </td></tr>       		
                                                            </table>	
                                                 


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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
    scope	: \'#frmIncoice\',
    errorDiv	: \'#errorDiv1\'
});	
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
