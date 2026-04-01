<?php /* Smarty version 2.6.26, created on 2011-02-17 06:41:24
         compiled from marketing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'marketing.tpl', 36, false),array('function', 'html_checkboxes', 'marketing.tpl', 82, false),)), $this); ?>
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
							<li>Marketing / Advertising</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Marketing / Advertising</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmMarketing" id="frmMarketing" method="post" class="fValidator-form" onsubmit="return validateForm();" action="marketing.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" border="0" class="left_content" style="color:#2f3337;">
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
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have an advertising Calendar ?
<br />
					<?php echo smarty_function_html_options(array('name' => 'HaveAdvertisingCalender','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['marketingInfo']['HaveAdvertisingCalender']), $this);?>

</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What coupons / specials are you currently running ?<br />

					<textarea name="CouponsRunning" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['CouponsRunning']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				 <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you do any multimedia marketing ?
<br />
					<?php echo smarty_function_html_options(array('name' => 'MultimediaMarketing','options' => $this->_tpl_vars['arrayMultimediaMarketing'],'selected' => $this->_tpl_vars['marketingInfo']['MultimediaMarketing']), $this);?>

</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What are the names of your top 3 competitors ? (for online research comparison)
<br />

					<textarea name="TopCompetitors" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['TopCompetitors']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you use an ad agency for marketing and advertising or do it yourself ?<br /><span class="infoText">(if so, please give me detail)</span><br />

					<textarea name="UseMarketingAgency" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['UseMarketingAgency']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out email notifications / specials / advertising of any kind ?<br /><span class="infoText">(if so, please give me detail)</span><br />

					<textarea name="SendEmailNotification" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['marketingInfo']['SendEmailNotification']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you use any of the following in your advertising / marketing ?<br /></td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'MarketingOptions','options' => $this->_tpl_vars['marketingOptions'],'selected' => $this->_tpl_vars['marketingOptionsSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="MarketingOptionsOther" class="form" id="MarketingOptionsOther" maxlength="200" size="50" onchange="setChecked('MarketingOptions[]','frmMarketing','Other')" value="<?php echo $this->_tpl_vars['marketingInfo']['MarketingOptionsOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out oil Change Reminders ?
<br />
					<?php echo smarty_function_html_options(array('name' => 'OilChangeReminder','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['marketingInfo']['OilChangeReminder']), $this);?>

</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you send out recomended repair reminders ?
<br />
					<?php echo smarty_function_html_options(array('name' => 'RepairReminders','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['marketingInfo']['RepairReminders']), $this);?>

</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have a night own / early bird drop off available ?
<br />
					<?php echo smarty_function_html_options(array('name' => 'NightOwnBirdDropOff','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['marketingInfo']['NightOwnBirdDropOff']), $this);?>

</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you use / have a list of customer testimonials ?<br /><span class="infoText">(if so, please send some
to be used - 3 sets would be fine)</span><br />

				   <?php echo smarty_function_html_options(array('name' => 'CustomerTestimonials','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['marketingInfo']['CustomerTestimonials']), $this);?>

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
		if(trimSpace(document.frmMarketing.TopCompetitors.value)==\'\')
		{
			alert("Tell me your top 3 competitors?");
			document.frmMarketing.TopCompetitors.focus();
			return false;
		}
		if(checkOther(\'MarketingOptions[]\',\'frmMarketing\',\'Other\',\'MarketingOptionsOther\')==1)
		{
			return false;
		}

		return true;
		
	}
</script>
'; ?>