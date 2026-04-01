<?php /* Smarty version 2.6.26, created on 2014-02-15 01:51:52
         compiled from error404.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div>
			<div style="height:10px;"></div>
			<h1>Error 404 - File Not Found</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                <tr>
                    <td style="padding-top:10px;"></td>
                    <td></td>
                </tr>
                <tr>
                  <td align="left" valign="left" colspan="2">
				  	<p align="center" style="padding-bottom:15px;"><span style="font-size:14px; color:#807678;">The server cannot find the page you requested.</span></p>
					<p align="center"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/404.png" align="absmiddle"  alt="404 ERROR"></p>
					<p align="center" style="padding-top:15px;">	<span style="font-size:14px; color:#807678;"style="font-size:14px; color:#807678;">The file may have been moved or deleted, or perhaps you entered the wrong url.</span></p>
					<p align="center" style="padding-top:10px;"><span style="font-size:14px; color:#807678;">You may be able to find the information you were looking for by clicking on one of the links above.</span></p>
				  </td>
                </tr>
                <tr>
                  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:350px;">&nbsp;</td>
                </tr>
            </table>
			<div class="clear"></div>
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