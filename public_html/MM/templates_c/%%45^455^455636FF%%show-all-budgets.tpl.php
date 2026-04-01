<?php /* Smarty version 2.6.26, created on 2013-10-11 07:29:44
         compiled from show-all-budgets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'show-all-budgets.tpl', 7, false),array('modifier', 'number_format', 'show-all-budgets.tpl', 36, false),array('function', 'cycle', 'show-all-budgets.tpl', 33, false),)), $this); ?>
<div>
			<div style="height:10px;"></div>
			<h1>Marketing Budget</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<div style="width:100%;"> 
			<?php if (count($this->_tpl_vars['Cal']) > '0'): ?>
				<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr>
				<td  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Branding / Marketing Effort</strong></td>
				<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td colspan="2"  align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">
				<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
				<tr>
				<td colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong><?php echo $this->_tpl_vars['Calitem']['year']; ?>
</strong></td>
				<tr>
				<td style="width:50%; font-size:13px;" align="left" valign="middle" bgcolor="#FFFFFF"><strong> Budget</strong></td>
				<td style="width:50%; font-size:13px;" align="left" valign="middle" bgcolor="#FFFFFF"><strong>Actual Cost</strong></td>
				</tr>
				</table>
				</td>
				<?php endforeach; else: ?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<?php endif; unset($_from); ?>
			</tr>
			<?php $_from = $this->_tpl_vars['Item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<tr style="background-color:#f3f3f3;">
				<td colspan="<?php echo $this->_tpl_vars['colspan']; ?>
" align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['item']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
			<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#ffffff'), $this);?>
;">
				<td align="left" valign="middle"  style="font-size:13px;"><?php echo $this->_tpl_vars['item1']['title']; ?>
</td>
			<?php $_from = $this->_tpl_vars['item1']['Arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Citem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Citem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Citem']):
        $this->_foreach['Citem']['iteration']++;
?>
				<td align="left" valign="middle" style="font-size:13px;text-align: right;"><?php if ($this->_tpl_vars['Citem']['amount'] != ""): ?>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Citem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?> NA <?php endif; ?></td>
				<td align="left" valign="middle" style="font-size:13px;text-align: right;"><?php if ($this->_tpl_vars['Citem']['actual_amount'] != ""): ?>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Citem']['actual_amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php else: ?> NA <?php endif; ?></td>
			<?php endforeach; else: ?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
			<?php endif; unset($_from); ?>
			</tr>
			<?php endforeach; else: ?>
			<tr>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><?php echo $this->_tpl_vars['item1']['title']; ?>
</td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;">NA</td>
				<td>NA</td>
			<?php endforeach; else: ?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;">NA</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;">NA</td>
			<?php endif; unset($_from); ?>
			</tr>
			<?php endif; unset($_from); ?>
						<?php endforeach; endif; unset($_from); ?>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Gross Sales</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Total</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Calitem']['actualamount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			<tr style="background-color:#f3f3f3;">
			<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>% of Gross Sales</strong></td>
			<?php $_from = $this->_tpl_vars['Cal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Calitem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Calitem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['Calitem']):
        $this->_foreach['Calitem']['iteration']++;
?>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong><?php echo $this->_tpl_vars['Calitem']['per']; ?>
 %</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong><?php echo $this->_tpl_vars['Calitem']['actper']; ?>
 %</strong></td>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			</table>
			<?php else: ?>
				<div align="center">No Records Found!!</div>
			<?php endif; ?>
			</div>
		<div class="clear"></div>

		</div>