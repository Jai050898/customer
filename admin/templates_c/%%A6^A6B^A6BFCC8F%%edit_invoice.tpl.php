<?php /* Smarty version 2.6.26, created on 2014-02-21 09:02:32
         compiled from edit_invoice.tpl */ ?>
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
	
                                                        <li>Edit Invoice</li>
                                                </ul>
                                              <div class="clr"></div>
                                      </div>
                                      <div id="admin_head">Edit Invoice</div>
                        </div>
                        <div class="ad_textsp"> 
                            <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                    <tr>				
                                        <td height="32" align="center"><div id="errorDiv1" style="color: #FF0000;"><?php echo $this->_tpl_vars['Errormssage']; ?>
</div></td>			

                                    </tr>
                                    <tr><td>
                                        <form name='frmIncoice' method="post" id ="frmIncoice" class="form" >			
                                            <input type="hidden" name="hid_key" id="hid_key" value="<?php echo $_REQUEST['id']; ?>
" />
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                                <tr>						
                                                    <td width="47%" height="38" align="right">Invoice Number :</td>
                                                       <td width="53%">
                                                       <span class="formControl">
                                                       <input type="text"  class="input req-string" name="invoiceNumber" id="Number" value="<?php echo $this->_tpl_vars['dataArray']['invoiceNumber']; ?>
" />	
                                                  </span>

                                                       </td>					  
                                                   </tr>				
                                                   <tr>						
                                                       <td height="36" align="right">Amount : </td>
                                                       <td>
                                                       <span class="formControl">

                                                       <input type="text"  class="input req-string" name="invoiceAmount" id="Amount" value="<?php echo $this->_tpl_vars['dataArray']['invoiceAmount']; ?>
"/> ( in $ )</span></td>				
                                                   </tr>
                                                   <tr>						
                                                       <td height="33" colspan="2" align="center">
                                                           <input type="submit" name="btnSubmit"  id="submitBtn" value="Submit"  />
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
$(\'#submitBtn\').formValidator({
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
