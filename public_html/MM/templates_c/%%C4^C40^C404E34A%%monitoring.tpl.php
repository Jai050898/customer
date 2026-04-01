<?php /* Smarty version 2.6.26, created on 2013-10-16 03:05:55
         compiled from monitoring.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'monitoring.tpl', 22, false),)), $this); ?>
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
			<span style="float:right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-monitoring.php">Add Monitoring Item</a>&nbsp;&nbsp;<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-monitoring-goals.php">Add Monitoring Goal Item</a></span>
			<h1>Monitoring Budget</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Total Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Max Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Min Amount</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></th>
				</tr>
				<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['amount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['maxamt'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$ <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['minamt'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
					<td bgcolor="#f9f9f7">
						<!-- <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/show-monitoring-budget.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cal.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;&nbsp; -->
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/edit-monitoring.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/monitoring.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&act=del" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Monitoring Items Found</font></td>
				</tr>
				<?php endif; unset($_from); ?>
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