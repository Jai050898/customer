<?php /* Smarty version 2.6.26, created on 2013-01-19 05:38:04
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">
<!--
.text_red {color: #FF0000}
-->
</style>
'; ?>

<div id="content" class="hfeed" style="min-height:500px;">
<!--banner-->
<!-- <div class="bodybg"><img src="images/banner.png" width="953" height="344" /></div> -->
<!--end banner-->
<!--body-->
<div id="body">


<div class="inner_textpartm">

<form name="frmAppointment" id="frmAppointment" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
		
		<table border="0" cellpadding="2" cellspacing="2" align="left" style="margin-left:25px;" width="100%">
          
		  	
		  <?php if ($this->_tpl_vars['error'] != ""): ?>
		   <tr> 
            <td colspan="2" align="center" valign="bottom"> 
              <div align="center"><span class="error"><?php echo $this->_tpl_vars['error']; ?>
</span></div>            </td>
          </tr>
		<?php endif; ?>
          <tr> 
            <td colspan="2" class="generalcontent"><strong>Your Request Information</strong> ( <span class="text_red">*</span>=Required Fields )</td>
          </tr>
		  <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">Business Name<span class="text_red">*</span> : </td>
            <td width="580" align="left"><span class="formControl">
            <input type="text" name="Log[bname]" id="bname"  class="input req-string"> </span> <small>(Ex : Auto Repaire Marketing)</small>          </td>
          </tr>
          <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">Domin<span class="text_red">*</span> : </td>
            <td width="580" align="left"><span class="formControl">
            <input type="text" name="Log[domain]" id="domain"  class="input req-string req-url"> </span> <small>(Ex : www.domainname.com)</small>          </td>
          </tr>
          <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">Keyword<span class="text_red">*</span> : </td>
            <td align="left"><span class="formControl">
              <input type="text" name="Log[keyword]" id="keyword"  class="input req-string"></span></td>
          </tr>
          <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">City<span class="text_red">*</span> : </td>
            <td align="left"><span class="formControl">
              <input type="text" name="Log[city]" id="city"  class="input req-string">
            </span><small>Full Name</small> </td>
          </tr>
          <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">State<span class="text_red">*</span> : </td>
            <td align="left"><span class="formControl">
            <input type="text" name="Log[state]" id="state" class="input req-string"> </span> <small>Full Name</small>          </td>
          </tr>
		  <tr> 
            <td width="100" align="right" valign="middle" class="generalcontent">Zipcode<span class="text_red">*</span> : </td>
            <td align="left"><span class="formControl">
            <input type="text" name="Log[zip_code]" id="zip_code" class="input req-string"> </span>          </td>
          </tr>
		  <tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:200px;">&nbsp;</td>
		</tr>	  
          <tr> 
            <td width="100"></td>
            <td>
			  <input name="input" id="Regis" type="Submit" value="Submit" class="form_submit" style="font-size:15px;padding:3px 5px;height:30px;" /></td>
          </tr>
          <tr height="20"> 
            <td valign="bottom" align="center" height="20" colspan="2"></td>
          </tr>
		  
          <tr> 
            <td valign="bottom" align="center" colspan="2">&nbsp;</td>
          </tr>
      </table>
	</form>


<div class="clear"></div>


</div>



</div>
<!--end body-->
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
$(\'#Regis\').formValidator({
		scope		: \'#frmAppointment\',
		errorDiv	: \'#errorDiv1\'
});
</script>
'; ?>