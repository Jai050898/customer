<?php /* Smarty version 2.6.26, created on 2013-10-11 07:33:14
         compiled from show-all-monitoring.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'show-all-monitoring.tpl', 19, false),array('modifier', 'count', 'show-all-monitoring.tpl', 28, false),)), $this); ?>
		<div>
			<div style="height:10px;"></div>
			<h1>Monitoring Budget</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:8%">&nbsp;</td>
				<?php  for($i=1;$i<=12;$i++) {  ?>
				<td  align="center" valign="middle" bgcolor="#CCFFCC" style="font-size:13px; width:7%"><strong><?php  echo date("M",mktime(0, 0, 0, $i, 1,   1));  ?></strong></td>
				<?php  }  ?>
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%">&nbsp;</td>
			</tr>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
			<tr height="25">
				<td  align="left" valign="middle" bgcolor="#DCE6F2" style="font-size:13px; width:8%"><strong><?php echo $this->_tpl_vars['Calitem']['year']; ?>
</strong></td>
				<?php $_from = $this->_tpl_vars['Calitem']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grosssales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px; width:7%"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<?php endforeach; else: ?>
			<tr height="25">
				<td  align="center" valign="middle" bgcolor="#FFFFFF" colspan="14">No Records Found</td>
			</tr>
			<?php endif; unset($_from); ?>
			<?php if (count($this->_tpl_vars['Cal']) > '0'): ?>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>High</strong></td>
				<?php $_from = $this->_tpl_vars['MaxTotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['MaxTotals1'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Low</strong></td>
				<?php $_from = $this->_tpl_vars['MinTotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['MinTotals1'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Average</strong></td>
				<?php $_from = $this->_tpl_vars['AvgTotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['AvgTotals1'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr height="30">
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Median</strong></td>
				<?php $_from = $this->_tpl_vars['MedTotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['MedTotals1'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['CalGoals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['CalGoalitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['CalGoalitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['CalGoalitem']):
        $this->_foreach['CalGoalitem']['iteration']++;
?>
			<tr height="25" style="color:#993300;">
				<td  align="left" valign="middle" bgcolor="#DCE6F2" style="font-size:13px;text-align: right; width:8%"><strong><?php echo $this->_tpl_vars['CalGoalitem']['year']; ?>
</strong></td>
				<?php $_from = $this->_tpl_vars['CalGoalitem']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Gitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Gitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Gitem']):
        $this->_foreach['Gitem']['iteration']++;
?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right; width:7%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['Gitem']['goalsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
				<?php endforeach; endif; unset($_from); ?>
				<td  align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right; width:7%"><strong>$<?php echo ((is_array($_tmp=$this->_tpl_vars['CalGoalitem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			</table>
			</div>
		<div class="clear"></div>

		</div>