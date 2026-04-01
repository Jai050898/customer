<?php /* Smarty version 2.6.26, created on 2013-09-17 02:23:49
         compiled from competitiveAdvantages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', 'competitiveAdvantages.tpl', 38, false),)), $this); ?>
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
			<form name="frmCompetitiveAdvantages" id="frmCompetitiveAdvantages" method="post" class="fValidator-form" onsubmit="return validateForm();" action="competitiveAdvantages.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Competitive Advantages</u></h2>
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
					<td align="left" style="padding-left:25px" valign="middle">Do you offer any of the following competitive advantages ?<br /> 
					<?php if ($this->_tpl_vars['competitiveAdvantagesInfo']['CompShuttleService']): ?>
						<input type="checkbox" name="chkCompShuttleService" value="1" checked onclick="clearText('CompShuttleService')" border="0"/>&nbsp;Complimentary Shuttle Service
					<?php else: ?>
						<input type="checkbox" name="chkCompShuttleService" value="1" onclick="clearText('CompShuttleService')"/>&nbsp;Complimentary Shuttle Service
					<?php endif; ?>
					<br /><span class="infoText">(if so, is there a range/distance)</span> <input type="text" name="CompShuttleService" class="form" id="CompShuttleService" maxlength="200" size="50" onchange="setChecked('chkCompShuttleService','frmCompetitiveAdvantages','1')" value="<?php echo $this->_tpl_vars['competitiveAdvantagesInfo']['CompShuttleService']; ?>
"> 
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-left:25px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'CompetitiveAdvantages','options' => $this->_tpl_vars['competitiveAdvantages'],'selected' => $this->_tpl_vars['advantageSelected'],'separator' => "<br />"), $this);?>

					
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-left:25px" valign="middle">Waiting Room---</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				   <tr>
					<td align="left" style="padding-left:40px" valign="top">
					<?php echo smarty_function_html_checkboxes(array('name' => 'CompetitiveAdvantagesWR','options' => $this->_tpl_vars['competitiveAdvantagesWR'],'selected' => $this->_tpl_vars['wrAdvantageSelected'],'separator' => "<br />"), $this);?>

					
					<td colspan="2">&nbsp;</td>
				  </tr>
				  
				  
				  <tr>
					<td align="left" style="padding-bottom:10px; padding-left:25px" valign="top">
					<?php if ($this->_tpl_vars['competitiveAdvantagesInfo']['CompetitiveAdvantagesOther']): ?>
						<input type="checkbox" name="chkCompAdvantagesOther" value="Other" checked onclick="clearText('CompetitiveAdvantagesOther')"/>&nbsp;Complimentary Shuttle Service															<?php else: ?>
						<input type="checkbox" name="chkCompAdvantagesOther" value="Other" onclick="clearText('CompetitiveAdvantagesOther')"/>&nbsp;Complimentary Shuttle Service	
					<?php endif; ?>	
					<input type="text" name="CompetitiveAdvantagesOther" class="form" id="CompetitiveAdvantagesOther" maxlength="200" size="50" onchange="setChecked('chkCompAdvantagesOther','frmCompetitiveAdvantages','Other')" value="<?php echo $this->_tpl_vars['competitiveAdvantagesInfo']['CompetitiveAdvantagesOther']; ?>
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
		if(checkOther(\'chkCompShuttleService\',\'frmCompetitiveAdvantages\',\'1\',\'CompShuttleService\')==1)
		{
			return false;
		}
		if(checkOther(\'chkCompAdvantagesOther\',\'frmCompetitiveAdvantages\',\'Other\',\'CompetitiveAdvantagesOther\')==1)
		{
			return false;
		}

		return true;
		
	}
	</script>
'; ?>