<?php /* Smarty version 2.6.26, created on 2014-02-15 01:50:10
         compiled from finish-websurvey.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Website Survey</h1>
			<div class="left_content" style="color:#2f3337;">
			<?php if ($this->_tpl_vars['Successmssage'] != ""): ?>
			
			<br /><br /><br /><br /><br />
			
			<p align="center"><span class="success"><?php echo $this->_tpl_vars['Successmssage']; ?>
</span></p>
			
			<br /><br /><br /><br />
			
			<?php else: ?>
			<p align="justify" style="padding-right:15px"><br />
			Are you finished with your survey? <br /><br />
			If so, please click the Submit My Survey below.<br />
			Otherwise your survey will not be finished and we will not be notified until completed. <br />
			This will allow you to go back into the system and review your answers or make changes if necessary. <br />
			Once you click the button below, we will contact you shortly, but the system will complete the submission of data.			
			
			<br />
			<br /><br />
			</p>
			<br />
			<p align="center">

			<form name="frmComplete" method="post">
			<div style="width:500px; height:80px; background-color:#F6F4DF; margin:auto; border:1px solid #848267; padding:10px; text-align:center">
			<b>I am finished with this survey.</b><br /><br />
			<input type="submit" value="Submit My Survey" name="btnSubmit" />
			</div>
			</form>

			</p>
			<?php endif; ?>
			</div>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>