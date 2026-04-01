<?php /* Smarty version 2.6.26, created on 2011-02-17 06:40:45
         compiled from history.tpl */ ?>
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
/admin/website-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Website survey</a></li>
							<li>Company History</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Company History</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmHistory" id="frmHistory" method="post" class="fValidator-form" onsubmit="return validateForm();" action="history.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" class="left_content" style="color:#2f3337;">
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
							<td width="84%" align="left" valign="middle" style="padding-bottom:10px">What year was the business established ? <br />

							<input type="text" name="YearEstablised" id="YearEstablised" maxlength="4" size="10" class="form" value="<?php echo $this->_tpl_vars['historyInfo']['YearEstablised']; ?>
"/></td>
							<td width="16%" colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">How did you get into this industry ?<br />

							<textarea name="HowToIndustry" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['HowToIndustry']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">What is your company history and founders ?<br />( <span class="infoText">Has this business changed ownership recently? if so, when?</span> )<br />

							<textarea name="CompanyHistory" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['CompanyHistory']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">Has there been any changes of physical location ?<br />

							<textarea name="PhysicalLocationChange" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['PhysicalLocationChange']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						   <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">Has there been any change of ownership ?<br />

							<textarea name="OwnershipChange" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['OwnershipChange']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">Are there any history of awards or certifications special to the shop ?<br />

							<textarea name="CertificationHistory" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['CertificationHistory']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">Any special milestones the shop or business owner has achieved ?<br />

							<textarea name="SpecialMilestone" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['SpecialMilestone']; ?>
</textarea>
</td>
							<td colspan="2">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="left" style="padding-bottom:10px" valign="middle">Tell me anything else you can about your company ?<br />

							<textarea name="OtherDetail" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['historyInfo']['OtherDetail']; ?>
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
/js/common.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	function validateForm()
	{
		var newHeight=window.innerHeight;	
		newHeight=newHeight-180;
		//document.getElementById("pralay").style.height=newHeight+\'px\';
		//document.getElementById("pralay").style.display=\'block\';
		if(trimSpace(document.frmHistory.YearEstablised.value)==\'\')
		{
			alert("What year was the business established?");
			document.frmHistory.YearEstablised.focus();
			return false;
		}
		if(trimSpace(document.frmHistory.HowToIndustry.value)==\'\')
		{
			alert("How did you get into this industry?");
			document.frmHistory.HowToIndustry.focus();
			return false;
		}
		if(trimSpace(document.frmHistory.historyInfo.value)==\'\')
		{
			alert("Tell us about your company history and founders?");
			document.frmHistory.historyInfo.focus();
			return false;
		}
		return true;
		
	}
	</script>
'; ?>