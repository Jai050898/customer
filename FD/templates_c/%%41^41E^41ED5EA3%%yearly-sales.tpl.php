<?php /* Smarty version 2.6.26, created on 2012-11-22 01:28:16
         compiled from yearly-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'yearly-sales.tpl', 26, false),)), $this); ?>
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
			<h1>Yearly Data</h1>

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
				  <?php $this->assign('firstyear', '2003'); ?>
				  <?php $this->assign('thisyear', ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y"))); ?>
				<select name="Log[year]" id="year" class="select req-string">
				<option value="">-- Please Select -- </option>
				<?php unset($this->_sections['yearValue']);
$this->_sections['yearValue']['name'] = 'yearValue';
$this->_sections['yearValue']['start'] = (int)$this->_tpl_vars['firstyear'];
$this->_sections['yearValue']['loop'] = is_array($_loop=$this->_tpl_vars['thisyear']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['yearValue']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['yearValue']['show'] = true;
$this->_sections['yearValue']['max'] = $this->_sections['yearValue']['loop'];
if ($this->_sections['yearValue']['start'] < 0)
    $this->_sections['yearValue']['start'] = max($this->_sections['yearValue']['step'] > 0 ? 0 : -1, $this->_sections['yearValue']['loop'] + $this->_sections['yearValue']['start']);
else
    $this->_sections['yearValue']['start'] = min($this->_sections['yearValue']['start'], $this->_sections['yearValue']['step'] > 0 ? $this->_sections['yearValue']['loop'] : $this->_sections['yearValue']['loop']-1);
if ($this->_sections['yearValue']['show']) {
    $this->_sections['yearValue']['total'] = min(ceil(($this->_sections['yearValue']['step'] > 0 ? $this->_sections['yearValue']['loop'] - $this->_sections['yearValue']['start'] : $this->_sections['yearValue']['start']+1)/abs($this->_sections['yearValue']['step'])), $this->_sections['yearValue']['max']);
    if ($this->_sections['yearValue']['total'] == 0)
        $this->_sections['yearValue']['show'] = false;
} else
    $this->_sections['yearValue']['total'] = 0;
if ($this->_sections['yearValue']['show']):

            for ($this->_sections['yearValue']['index'] = $this->_sections['yearValue']['start'], $this->_sections['yearValue']['iteration'] = 1;
                 $this->_sections['yearValue']['iteration'] <= $this->_sections['yearValue']['total'];
                 $this->_sections['yearValue']['index'] += $this->_sections['yearValue']['step'], $this->_sections['yearValue']['iteration']++):
$this->_sections['yearValue']['rownum'] = $this->_sections['yearValue']['iteration'];
$this->_sections['yearValue']['index_prev'] = $this->_sections['yearValue']['index'] - $this->_sections['yearValue']['step'];
$this->_sections['yearValue']['index_next'] = $this->_sections['yearValue']['index'] + $this->_sections['yearValue']['step'];
$this->_sections['yearValue']['first']      = ($this->_sections['yearValue']['iteration'] == 1);
$this->_sections['yearValue']['last']       = ($this->_sections['yearValue']['iteration'] == $this->_sections['yearValue']['total']);
?>
				<option value="<?php echo $this->_sections['yearValue']['index']; ?>
" <?php if ($this->_tpl_vars['AccDet']['year'] == $this->_sections['yearValue']['index']): ?> selected="selected"<?php endif; ?>><?php echo $this->_sections['yearValue']['index']; ?>
</option>
				<?php endfor; endif; ?>
				</select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssales]" id="grosssales" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['grosssales']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Repair Orders:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[repairorders]" id="repairorders" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['repairorders']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">New Customers:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[newcustomers]" id="newcustomers" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['newcustomers']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Actual Hours:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actualhours]" id="actualhours" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['actualhours']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Facebook Fans:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[facebookfans]" id="facebookfans" value="<?php echo $this->_tpl_vars['AccDet']['facebookfans']; ?>
" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Google Plus Users:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[googleplususers]" id="googleplususers" value="<?php echo $this->_tpl_vars['AccDet']['googleplususers']; ?>
" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Vibe:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[vibe]" id="vibe" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['vibe'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['vibe'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Activity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[activity]" id="activity" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "+1"): ?> selected="selected"<?php endif; ?>>Positive</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['activity'] == '0'): ?> selected="selected"<?php endif; ?>>Average</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['activity'] == "-1"): ?> selected="selected"<?php endif; ?>>Negative</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Available Staff:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[availablestaff]" id="availablestaff" class="select req-string">
				  <option value="">-- Please Select --</option>
				  <option value="+1" <?php if ($this->_tpl_vars['AccDet']['availablestaff'] == "+1"): ?> selected="selected"<?php endif; ?>>Overtime</option>
				  <option value="0" <?php if ($this->_tpl_vars['AccDet']['availablestaff'] == '0'): ?> selected="selected"<?php endif; ?>>Full Crew</option>
				  <option value="-1" <?php if ($this->_tpl_vars['AccDet']['availablestaff'] == "-1"): ?> selected="selected"<?php endif; ?>>People on Vacation, off, low</option>
				  </select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Days Open:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[daysopen]" id="daysopen" value="<?php echo $this->_tpl_vars['AccDet']['daysopen']; ?>
" class="input req-string"></td>
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