<?php /* Smarty version 2.6.26, created on 2013-09-17 02:23:46
         compiled from notoriety.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'notoriety.tpl', 45, false),)), $this); ?>
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
			<form name="frmNotoriey" id="frmNotoriey" method="post" class="fValidator-form" onsubmit="return validateForm();" action="notoriety.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Notoriey</u></h2>
				<table width="100%" border="0">
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