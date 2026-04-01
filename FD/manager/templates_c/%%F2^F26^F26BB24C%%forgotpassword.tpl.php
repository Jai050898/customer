<?php /* Smarty version 2.6.26, created on 2012-11-20 04:34:01
         compiled from forgotpassword.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/form.css" rel="stylesheet" type="text/css">
<?php echo '
<style type="text/css">
.error-div{color:#FF0000;}
</style>
'; ?>

<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
         <table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="500" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">
	<form id="FPForm" class="form" method="post" name="FPForm">
		<div class="login-pan" style="float:none">
            <div class="login-pantop"><img src="images/loginicon.gif" alt="Login" align="absbottom" />Forgot Password</div>
            <div class="login-panmid">
              <table width="80%" align="center" cellpadding="5">
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td width="32%" align="right" valign="middle">User Name/Email: </td>
                  <td width="68%"><span class="formControl">
                    <input name="Reg[Email]" type="text" class="input req-string req-email"  id="email" />
                  </span></td>
                </tr>
                
				<tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
                </tr>
				
              </table>
            </div>
         <div class="login-panbot"></div>
        </div>
	</form>		
	</td>
  </tr>
</table></td>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#FPForm\',
		errorDiv	: \'#errorDiv1\'
});
</script>
'; ?>