<?php /* Smarty version 2.6.26, created on 2013-08-23 05:49:43
         compiled from view-xml-vehicle.tpl */ ?>
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
/admin/manage-xml-vehicles.php">Manage MMS Vehicles</a></li>
					  <li>View MMS Vehicle</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View MMS Vehicle</div>
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
							<td colspan="2"><h2>View MMS Vehicle</h2></td>
						  </tr>
                                                  <tr class="color_trbg">
							<td width="20%">Name</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['name']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Year</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['year']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Make</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['make']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Model</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['model']; ?>
</td>
						  </tr>
                                                  <tr class="color_trbg">
							<td width="20%">Vin</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['vin']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Licence</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['license']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odometer</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['odometer']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Engine Name</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['engine']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Reg. Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['regdate']; ?>
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