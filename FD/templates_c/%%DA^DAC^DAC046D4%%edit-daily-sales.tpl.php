<?php /* Smarty version 2.6.26, created on 2012-11-22 05:10:42
         compiled from edit-daily-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'edit-daily-sales.tpl', 31, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Edit Daily Data</h1>

			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<?php if ($this->_tpl_vars['error'] != ""): ?>
				<tr>
					<td colspan="2" align="center" style="color:#FF0000;"><strong><?php echo $this->_tpl_vars['error']; ?>
</strong></td>
				</tr>
				<?php endif; ?>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <?php echo $this->_tpl_vars['Res']['year']; ?>

				  </td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Month:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <?php echo ((is_array($_tmp="01-".($this->_tpl_vars['Res']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>

				  </td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Day:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <?php echo $this->_tpl_vars['Res']['day']; ?>
 (<?php echo ((is_array($_tmp=($this->_tpl_vars['Res']['day'])."-".($this->_tpl_vars['Res']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a") : smarty_modifier_date_format($_tmp, "%a")); ?>
)
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="<?php echo $this->_tpl_vars['Res']['grosssales']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Repair Orders:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="<?php echo $this->_tpl_vars['Res']['repairorders']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">New Customers:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['Res']['newcustomers']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['Res']['actualhours']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Vibe:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['Res']['vibe'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['Res']['vibe'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['Res']['vibe'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Activity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['Res']['activity'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['Res']['activity'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['Res']['activity'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator(<?php echo '{scope: '; ?>
'#EditProfile',errorDiv:'#errorDiv1'});
</script>