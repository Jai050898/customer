<?php /* Smarty version 2.6.26, created on 2014-03-19 01:07:08
         compiled from manage-permission.tpl */ ?>
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
								  <li>Manage Permission</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Permission</div>
				  </div>
				  <div class="ad_textsp">
                                        <form name="menuForm" id="menuForm" method="post" >  
					<?php echo $this->_tpl_vars['returnpermissions']; ?>

                                            <div align="center" id="errorDiv1" class="error" style="color: #FF0000;"></div>	
                                        <input type="submit" name="submitBtn" id="submitBtn" value="submit" />	
						
					</form>
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
<?php echo '
<script type="text/javascript">
// To check/uncheck all checkboxes 
$(\'#menuForm>ul>li>input\').click(function(){ 
    if($(this).is(\':checked\')){        
        $(this).nextAll(\'ul\').find(\'input[type="checkbox"]\').attr(\'checked\',true);             
     } else {        
        $(this).nextAll(\'ul\').find(\'input[type="checkbox"]\').attr(\'checked\',false);       
     }
 });
 $(\'#menuForm>ul>li>ul>li>input\').click(function(){ 
    if($(this).is(\':checked\')){        
        $(this).nextAll(\'ul\').find(\'input[type="checkbox"]\').attr(\'checked\',true);             
     } else {        
        $(this).nextAll(\'ul\').find(\'input[type="checkbox"]\').attr(\'checked\',false);       
     }
 });
$(\'#submitBtn\').click(function(){ 
    if($(\'#menuForm>ul>li>input\').is(\':checked\') == false){ 
            $(\'#errorDiv1\').show();
            $(\'#errorDiv1\').html("Please check any of check box");
            return false;
       }
});
 </script>
 '; ?>
