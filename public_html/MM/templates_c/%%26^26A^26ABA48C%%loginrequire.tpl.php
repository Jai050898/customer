<?php /* Smarty version 2.6.26, created on 2013-05-12 08:54:07
         compiled from loginrequire.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--banner-->
<!-- <div class="bodybg"><img src="images/banner.png" width="953" height="344" /></div> -->
<!--end banner-->
<!--body-->
<div id="body">
	<div><img src="images/bodytop.png" alt="" /></div>
	<div class="bodybg">
		<div class="bodyleft">
		
			<h1>Login required </h1>
			<p><span class="blue-font"><strong>You need to login to access this module.</strong></span>
			<br /><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/login.php">Click here to LOGIN</a></p>
		</div>
		<div class="bodyright"></div>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>