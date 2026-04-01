<?php /* Smarty version 2.6.26, created on 2013-09-17 02:35:48
         compiled from integrated-step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'integrated-step1.tpl', 70, false),)), $this); ?>
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
		<h1>Integrated Survey </h1>
			<form name="frmStepOne" id="frmStepOne" method="post" enctype="multipart/form-data" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step1.php">
				<div class="left_content" style="color:#2f3337;">
				<h2><u>About The Company</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5">
				  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
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
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What is your main phone number ? 
					<input type="text" name="MainPhone" id="MainPhone" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['MainPhone']; ?>
"/></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you have a toll free number ? 
					<input type="text" name="TollFreePhone" id="TollFreePhone" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['TollFreePhone']; ?>
"/> <span class="infoText">(If yes, please enter the number)</span></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What is your fax number ? 
					<input type="text" name="FaxLineNumber" id="FaxLineNumber" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['FaxLineNumber']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What phone system do you use ? 
					<input type="text" name="PhoneSystem" id="PhoneSystem" maxlength="150" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['PhoneSystem']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you have an on-hold message that is changed regularly ? 
					<input type="text" name="OnHoldMessage" id="OnHoldMessage" maxlength="200" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['OnHoldMessage']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Business Owner Email Address : 
					<input type="text" name="OwnerEmailAddress" id="OwnerEmailAddress" maxlength="80" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['OwnerEmailAddress']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <tr>
					<td colspan="3" align="left" style="padding-bottom:10px" valign="middle">Is there a specific company email address you would like customers to respond to as a general / info address ?

					<input type="text" name="GeneralEmailAddress" id="GeneralEmailAddress" maxlength="80" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['GeneralEmailAddress']; ?>
"/></td>
					
				  </tr>																  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Web Site Address : 
					<input type="text" name="WebSiteAddress" id="WebSiteAddress" maxlength="100" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['WebSiteAddress']; ?>
"/></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="top">Garage Management System :</td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'GarageMgtSystem','values' => $this->_tpl_vars['garageMangeMentIndexArray'],'output' => $this->_tpl_vars['garageMangeMentStrArray'],'selected' => $this->_tpl_vars['basicInfoDetail']['GarageMgtSystem'],'separator' => "<br />",'id' => 'GarageMgtSystem'), $this);?>

					
					<input type="text" name="GarageMgtSystemOther" class="form" id="GarageMgtSystemOther" maxlength="100" size="40" onchange="setChecked('GarageMgtSystem','frmStepOne','8')" value="<?php echo $this->_tpl_vars['basicInfoDetail']['GarageMgtSystemOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What Hours and days are you open? 
<input type="text" name="HoursOpen" id="HoursOpen" maxlength="218" size="40" class="form" value="<?php echo $this->_tpl_vars['basicInfoDetail']['HoursOpen']; ?>
" /></td>
					<td colspan="2">																	</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What are the directions to reach your company (from all direction) ?<br />

					<textarea name="CompanyDirection" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['basicInfoDetail']['CompanyDirection']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Are there any special directions or land marks that should be noted on our directions ?<br />

					<textarea name="DirectionLandMark" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['basicInfoDetail']['DirectionLandMark']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">County of Operation ?<br />
				   <input type="text" name="CountyOfOpeation" class="form"  maxlength="200" size="50" value="<?php echo $this->_tpl_vars['basicInfoDetail']['CountyOfOpeation']; ?>
">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  <tr>
					<td align="center" colspan="3">
					<input type="hidden" name="hidInHousePlan" value="" >
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
	var DayArray=Array(\'Sunday\',\'Monday\',\'TuesDay\',\'WednesDay\',\'ThursDay\',\'FriDay\',\'SaturDay\');
	
	
	function validateForm()
	{
		
		if(trimSpace(document.frmStepOne.OwnerEmailAddress.value)!=\'\' && !echeck(trimSpace(document.frmStepOne.OwnerEmailAddress.value)))
		{
			document.frmStepOne.OwnerEmailAddress.focus();
			return false;
		}
		if(trimSpace(document.frmStepOne.GeneralEmailAddress.value)!=\'\' && !echeck(trimSpace(document.frmStepOne.GeneralEmailAddress.value)))
		{
			document.frmStepOne.GeneralEmailAddress.focus();
			return false;
		}
		if(checkOther(\'GarageMgtSystem[]\',\'frmStepOne\',\'8\',\'GarageMgtSystemOther\')==1)
		{
			return false;
		}
	}
	</script>
'; ?>