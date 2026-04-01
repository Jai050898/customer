<?php /* Smarty version 2.6.26, created on 2011-02-18 06:57:51
         compiled from integrated-step6.tpl */ ?>
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
/admin/integrated-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Integrated survey</a></li>
							<li>Policies</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Policies</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmPolicy" id="frmPolicy" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step6.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
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
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an environmental statement (or affiliation) ?<br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="EnvironmentalStatement" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['EnvironmentalStatement']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your warranty information / policy ?<br />

					<textarea name="WarrantyInfo" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['WarrantyInfo']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your towing policy ?<br />

					<textarea name="TowingPolicy" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['TowingPolicy']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a satisfaction guarantee policy ? <br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="GuaranteePolicy" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['GuaranteePolicy']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What financing options do you offer ? (car care one, visa, MC, etc.)<br />

					<textarea name="FinancialOption" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['FinancialOption']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Is there any other policies or information I should know ? <br />

					<textarea name="OtherPolicy" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['OtherPolicy']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Is there any special business philosophies that you would like to convey to the customer ? <br />

					<textarea name="BusinessPhilosophy" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['policyInfo']['BusinessPhilosophy']; ?>
</textarea>
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
						</form>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	function validateForm()
	{
		if(trimSpace(document.frmPolicy.WarrantyInfo.value)==\'\')
		{
			alert("Tell me about your warranty information?");
			document.frmPolicy.WarrantyInfo.focus();
			return false;
		}
		if(trimSpace(document.frmPolicy.TowingPolicy.value)==\'\')
		{
			alert("Tell me about your towing policy?");
			document.frmPolicy.TowingPolicy.focus();
			return false;
		}
		if(trimSpace(document.frmPolicy.FinancialOption.value)==\'\')
		{
			alert("Tell me about the financial option you offer?");
			document.frmPolicy.FinancialOption.focus();
			return false;
		}
		return true;
		
	}
</script>
'; ?>