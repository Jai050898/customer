<?php /* Smarty version 2.6.26, created on 2013-01-22 04:36:09
         compiled from view-mis-vehicle.tpl */ ?>
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
/admin/manage-users.php">Manage MIS Customers</a></li>
					  <li>View MIS Vehicle</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">View MIS Vehicle</div>
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
							<td colspan="2"><h2>View MIS Vehicle</h2></td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Year</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Year']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Make</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Make']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Model</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Model']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Sub Model</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_SubModel']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Year Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_YearNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Make Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_MakeNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Model Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_ModelNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Engine Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_EngineNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Trans Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_TransNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Brake Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_BrakeNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odometer1</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Odometer1']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Odometer2</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Odometer2']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Miles Per Day</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_MilesPerDay']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Vin</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Vin']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Mfg Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_MfgDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Insp Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_InspDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Last in Date</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_LastinDate']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Mfg</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Mfg']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax1</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax1']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax2</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax2']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax3</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax3']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax4</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax4']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax5</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax5']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax6</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax6']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax7</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax7']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax8</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax8']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax9</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax9']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Tax10</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_tax10']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Lastrevision</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_lastrevision']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Unit No</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_UnitNo']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Drive Type</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_DriveType']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">GVW</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_GVW']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Engine</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Engine']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Trans Desc</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_TransDesc']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Brake</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Brake']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Body</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_Body']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Body Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_BodyNum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">APAA Num</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_APAANum']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">License</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_License']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">CatalogEngine</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_CatalogEngine']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">SpecificConditions</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_SpecificConditions']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Price Level</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_pricelevel']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Labor Level</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_laborlevel']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Use Vehicle Levels</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_UseVehicleLevels']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Vehicle Memo</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_vehicleMemo']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Vehicle Memo Print On Order</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_vehicleMemoPrintOnOrder']; ?>
</td>
						  </tr>
						  <tr class="color_trbg">
							<td width="20%">Napa Vehicle</td>
							<td width="80%" align="left"><?php echo $this->_tpl_vars['User']['MIS_napaVehicle']; ?>
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