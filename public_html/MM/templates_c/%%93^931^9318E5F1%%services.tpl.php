<?php /* Smarty version 2.6.26, created on 2013-09-17 02:23:47
         compiled from services.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'services.tpl', 58, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>WebSite Survey</h1>
			<div style="height:10px;"></div>
			<form name="frmServices" id="frmServices" method="post" class="fValidator-form" onsubmit="return validateForm();" action="services.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Services</u></h2>
				<table width="100%" border="0" >
				  <tr>
					<td align="center" colspan="3">&nbsp;</td>
				  </tr>
				  <?php if ($this->_tpl_vars['Errormssage']): ?>
				  <tr>
					<td align="center" colspan="3"><span class="error"><?php echo $this->_tpl_vars['Errormssage']; ?>
</span>																	</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
				  <?php endif; ?>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your menu of services ?(General and normal of most shops, or specialty, Diagnosis, eletrical, etc.)<br />

					<textarea name="MenuServices" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['MenuServices']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you specialize in a particular make or style (asian, domestic, foreign) ?<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="SpecializeStyle" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['SpecializeStyle']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any specialty services ? (hybrid repair, other<br /><span class="infoText">(If so, please give details)</span>)<br />

					<textarea name="SpecialtyServices" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['SpecialtyServices']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are you known in your community for anything special? (RV repair, brakes,honest repair, hybrid servicing, other such information)<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="KnownForSpecial" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['KnownForSpecial']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer Fleet Services ?</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'FleetServices','options' => $this->_tpl_vars['fleetServices'],'selected' => $this->_tpl_vars['fleetSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="FleetServicesOther" class="form" id="FleetServicesOther" maxlength="200" size="50" onchange="setChecked('FleetServices[]','frmServices','Other')" value="<?php echo $this->_tpl_vars['servicesInfo']['FleetServicesOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any service Wraps ?
<br /><span class="infoText">(If so, please give details)</span><br />

					<textarea name="ServiceWraps" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['servicesInfo']['ServiceWraps']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you offer any special service packages ?<br /></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'SpecialServicePackage','options' => $this->_tpl_vars['specialPackages'],'selected' => $this->_tpl_vars['packageSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="SpecialServicePackageOther" class="form" id="SpecialServicePackageOther" maxlength="200" size="50" onchange="setChecked('SpecialServicePackage[]','frmServices','Other')" value="<?php echo $this->_tpl_vars['servicesInfo']['SpecialServicePackageOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >		
					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
				  </tr>
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
			  </table>
			  </div>
			</form>
			
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/common.js"></script>	
<?php echo '
	<script language="javascript">
	function validateForm()
	{
		if(trimSpace(document.frmServices.MenuServices.value)==\'\')
		{
			alert("Tell me about the your menu services?");
			document.frmServices.MenuServices.focus();
			return false;
		}
		if(checkOther(\'FleetServices[]\',\'frmServices\',\'Other\',\'FleetServicesOther\')==1)
		{
			return false;
		}
		if(checkOther(\'SpecialServicePackage[]\',\'frmServices\',\'Other\',\'SpecialServicePackageOther\')==1)
		{
			return false;
		}

		return true;
		
	}
	</script>
'; ?>