<?php /* Smarty version 2.6.26, created on 2013-05-20 21:05:11
         compiled from view-portfolio.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-portfolio.tpl', 38, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
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
/dashboard.php">Home</a></li>
					  <li>View Portfolio</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head">View Portfolio</div>
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
										<td colspan="2"><h2>View Portfolio for <?php echo $this->_tpl_vars['Portfolio']['name']; ?>
</h2></td>
									  </tr>
									<tr class="color_trbg">
									<td width="20%">Project Name</td>
									<td width="80%" align="left">
										<?php echo $this->_tpl_vars['Portfolio']['name']; ?>

									 </td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['Portfolio']['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
									 	</td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/thumbnails/<?php echo $this->_tpl_vars['Portfolio']['image']; ?>
" id="thumb"></td>
									 	</td>
									</tr>
									<tr>
									  <td align="right" valign="middle">&nbsp;</td>
									  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
									</tr>
									
								</table>
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