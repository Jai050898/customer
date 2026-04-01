<?php /* Smarty version 2.6.26, created on 2012-11-19 08:30:29
         compiled from myaccount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'myaccount.tpl', 55, false),)), $this); ?>
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
			<h1>Account Details</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;" width="35%">Name:</td>
				  <td align="left" valign="center" width="65%"><strong><?php echo $this->_tpl_vars['AccDet']['name']; ?>
</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Email:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['email']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">User Name:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['user_name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Phone:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['phone']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Address:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['address']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Country:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['Country_Name']; ?>
</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">State:</td>
					<td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['State_Name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">City:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['city']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Zip code:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['zip_code']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Web Site:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['website']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Shop Email:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['AccDet']['shop_email']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Shop Opening Date:</td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['opening_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m-%d-%Y') : smarty_modifier_date_format($_tmp, '%m-%d-%Y')); ?>
</td>
				</tr>
			</table>
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