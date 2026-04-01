<?php /* Smarty version 2.6.26, created on 2013-09-17 02:18:53
         compiled from companyDetail.tpl */ ?>
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
			<form name="frmAboutCompany" id="frmAboutCompany" method="post" class="fValidator-form" onsubmit="return validateForm();" action="companyDetail.php">
				<div class="left_content" style="color:#2f3337;">
				<h2><u>Basic Company Information </u></h2>
					<table width="100%">
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
						<input type="text" name="MainPhone" id="MainPhone" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['companyDetail']['MainPhone']; ?>
"/></td>
						<td width="16%" colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you have a toll free number ? 
						<input type="text" name="TollFreePhone" id="TollFreePhone" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['companyDetail']['TollFreePhone']; ?>
"/> <span class="infoText">(If yes, please enter the number)</span></td>
						<td width="16%" colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What is your fax number ?

						<input type="text" name="FaxNumber" id="FaxNumber" maxlength="15" size="20" class="form" value="<?php echo $this->_tpl_vars['companyDetail']['FaxNumber']; ?>
"/></td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  
					  <tr>
						<td colspan="3" align="left" style="padding-bottom:10px" valign="middle">Is there a specific company email address you would like customers to respond to as a general / info address ?

						<input type="text" name="GeneralEmailAddress" id="GeneralEmailAddress" maxlength="80" size="40" class="form" value="<?php echo $this->_tpl_vars['companyDetail']['GeneralEmailAddress']; ?>
"/></td>
						
					  </tr>
					  
					  <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">What Hours and days are you open? 
<input type="text" name="HoursOpen" id="HoursOpen" maxlength="218" size="40" class="form" value="<?php echo $this->_tpl_vars['companyDetail']['HoursOpen']; ?>
" /></td>
						<td colspan="2">																	</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">What are the directions to reach your company (from all direction) ?<br />

						<textarea name="CompanyDirection" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['companyDetail']['CompanyDirection']; ?>
</textarea>
</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">Are there any special directions or land marks that should be noted on our directions ?<br />

						<textarea name="DirectionLandMark" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['companyDetail']['DirectionLandMark']; ?>
</textarea>
</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					   <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">County of Operation ?<br />

					   <input type="text" name="CountyOfOpeation" class="form"  maxlength="200" size="50" value="<?php echo $this->_tpl_vars['companyDetail']['CountyOfOpeation']; ?>
">
</td>
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
		var DayArray=Array(\'Sunday\',\'Monday\',\'TuesDay\',\'WednesDay\',\'ThursDay\',\'FriDay\',\'SaturDay\');
	function validateForm()
	{
		var newHeight=window.innerHeight;	
		newHeight=newHeight-180;
		//document.getElementById("pralay").style.height=newHeight+\'px\';
		//document.getElementById("pralay").style.display=\'block\';
		if(trimSpace(document.frmAboutCompany.MainPhone.value)==\'\')
		{
			alert("What is your main phone number?");
			document.frmAboutCompany.MainPhone.focus();
			return false;
		}
		if(trimSpace(document.frmAboutCompany.GeneralEmailAddress.value)!=\'\' && !echeck(trimSpace(document.frmAboutCompany.GeneralEmailAddress.value)))
		{
			document.frmAboutCompany.GeneralEmailAddress.focus();
			return false;
		}
		else
		{
			if(trimSpace(document.frmAboutCompany.CompanyDirection.value)==\'\')
			{
				alert("Please tell us about the direction to reach your company");
				document.frmAboutCompany.CompanyDirection.focus();
				return false;
			}
			return true;	
		}	
	}
	</script>
'; ?>