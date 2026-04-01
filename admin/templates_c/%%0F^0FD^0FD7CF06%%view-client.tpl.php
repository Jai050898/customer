<?php /* Smarty version 2.6.26, created on 2011-01-21 11:47:04
         compiled from view-client.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-client.tpl', 51, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/admin/manage-clients.php">Manage Clients</a></li>
							  <li>View Client</li>
						</ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head">View Client</div>
				  </div>
				 <div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
								  <tr>
									<td colspan="2"><h2>View Client</h2></td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Name: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['first_name']; ?>
 <?php echo $this->_tpl_vars['Client']['last_name']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Email: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['email']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Phone: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['phone']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Address: </td>
									<td width="80%" align="left">
										<?php echo ((is_array($_tmp=$this->_tpl_vars['Client']['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Website: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['website']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">Country: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['Country_Name']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">State: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['State_Name']; ?>

									 </td>
								  </tr>
								  <tr class="color_trbg">
									<td width="20%">City: </td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Client']['city']; ?>

									 </td>
								  </tr>
								 </table>
							  </td>
							</tr>
							<tr>
							  <td align="left" valign="top">&nbsp;</td>
							</tr>
							<tr>
							<td height="50" align="left" valign="top">&nbsp;</td>
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