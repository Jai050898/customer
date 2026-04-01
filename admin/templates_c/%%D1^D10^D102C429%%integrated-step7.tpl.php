<?php /* Smarty version 2.6.26, created on 2011-02-18 06:59:02
         compiled from integrated-step7.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'integrated-step7.tpl', 54, false),)), $this); ?>
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
							<li>Notoriey </li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Notoriey </div>
				  </div>
					<div class="ad_textsp">
						<form name="frmNotoriey" id="frmNotoriey" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step7.php?id=<?php echo $_REQUEST['id']; ?>
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
					<td align="left" style="padding-bottom:10px" valign="middle">Does your business have any awards or publicly recognized notoriety ?<br />
<span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="AwardNotoriety" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['notorietyInfo']['AwardNotoriety']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What General Business association are you related with (BBB, AAA, etc.) ?<br />

					<textarea name="GeneralBusinessAssocation" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['notorietyInfo']['GeneralBusinessAssocation']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you participate in any special Events ?</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'SpecialEvents','options' => $this->_tpl_vars['specialEvents'],'selected' => $this->_tpl_vars['eventsSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="SpecialEventsOther" class="form" id="SpecialEventsOther" maxlength="200" size="50" onchange="setChecked('SpecialEvents[]','frmNotoriey','Other')" value="<?php echo $this->_tpl_vars['notorietyInfo']['SpecialEventsOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you participate in any community activities, or offer community support ?<br />
(Fund raisers, customer appreciation days, womens shelter support, etc.)
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'CommunityActivities','options' => $this->_tpl_vars['communityActivities'],'selected' => $this->_tpl_vars['activitiesSelected'],'separator' => "<br />"), $this);?>

					<input type="text" name="CommunityActivitiesOther" class="form" id="CommunityActivitiesOther" maxlength="200" size="50" onchange="setChecked('CommunityActivities[]','frmNotoriey','Other')" value="<?php echo $this->_tpl_vars['notorietyInfo']['CommunityActivitiesOther']; ?>
">																	</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">What is your area known for ?<br /><span class="infoText">( views, entertainment, city/state motto, other ) </span><br />

					<input type="text" name="AreaKnownFor" maxlength="240" size="50" class="form" value="<?php echo $this->_tpl_vars['notorietyInfo']['AreaKnownFor']; ?>
">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Is there anything specifically noteworthy about your location ?<br /><span class="infoText">( unique landmarks, views of certain areas or landmarks )</span><br />

					<input type="text" name="LocationSpecial" maxlength="240" size="50" class="form" value="<?php echo $this->_tpl_vars['notorietyInfo']['LocationSpecial']; ?>
">
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Specific Local sports team affiliation that you would like mentioned <br /><span class="infoText">( local high school or university )</span><br />

					<input type="text" name="LocalSportsTeam" maxlength="240" size="50" class="form" value="<?php echo $this->_tpl_vars['notorietyInfo']['LocalSportsTeam']; ?>
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
		if(trimSpace(document.frmNotoriey.GeneralBusinessAssocation.value)==\'\')
		{
			alert("Tell me about the General Business association are you related with?");
			document.frmNotoriey.GeneralBusinessAssocation.focus();
			return false;
		}
		if(checkOther(\'SpecialEvents[]\',\'frmNotoriey\',\'Other\',\'SpecialEventsOther\')==1)
		{
			return false;
		}
		if(checkOther(\'CommunityActivities[]\',\'frmNotoriey\',\'Other\',\'CommunityActivitiesOther\')==1)
		{
			return false;
		}

		return true;
		
	}
</script>
'; ?>