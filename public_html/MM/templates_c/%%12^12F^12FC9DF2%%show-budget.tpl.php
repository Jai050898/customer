<?php /* Smarty version 2.6.26, created on 2013-10-11 07:51:49
         compiled from show-budget.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'show-budget.tpl', 24, false),array('modifier', 'number_format', 'show-budget.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Marketing Budget for <?php echo $this->_tpl_vars['Cal']['year']; ?>
</h1>
			<div style="float:right">&nbsp;</div>
			<div style="clear:both;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:13px; font-family:Arial, Helvetica, sans-serif;">
			<tr>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Branding / Marketing Effort</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong><?php echo $this->_tpl_vars['Cal']['year']; ?>
 Budget</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong><?php echo $this->_tpl_vars['Cal']['year']; ?>
 Actual Cost</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['Item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
			<?php if ($this->_tpl_vars['item']['Items'] != ""): ?>
			<tr style="background-color:#f3f3f3;">
				<td colspan="3" align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</strong></td>
			</tr>
			<?php $_from = $this->_tpl_vars['item']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
			<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#ffffff'), $this);?>
;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><?php echo $this->_tpl_vars['item1']['title']; ?>
</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['actual_amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Gross Sales</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['gsales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>Total</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong>$ <?php echo ((is_array($_tmp=$this->_tpl_vars['Cal']['actualamount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</strong></td>
			</tr>
			<tr style="background-color:#f3f3f3;">
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;"><strong>% of Gross Sales</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong><?php echo $this->_tpl_vars['Cal']['per']; ?>
 %</strong></td>
				<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;text-align: right;"><strong><?php echo $this->_tpl_vars['Cal']['actper']; ?>
 %</strong></td>
			</tr>
			</table>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function Share(id)
{
	tb_show(\'Share Calendar\',\'sharecalform.php?height=330&width=640&id=\'+id);
	return;
}
</script>
'; ?>