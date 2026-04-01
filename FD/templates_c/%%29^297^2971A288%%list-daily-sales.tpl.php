<?php /* Smarty version 2.6.26, created on 2012-11-22 05:02:43
         compiled from list-daily-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'list-daily-sales.tpl', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/daily-sales.php">Daily Sales Entry</a></span>
			<h1>Daily Sales</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Month</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Day</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Gross Sales</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>Repair Orders</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="15%"><strong>New Customers</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Actual Hours</strong></td>
					<td  bgcolor="#336699" style="color:#fff;" width="10%"><strong>Actions</strong></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp="01-".($this->_tpl_vars['item']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['day']; ?>
 (<?php echo ((is_array($_tmp=($this->_tpl_vars['item']['day'])."-".($this->_tpl_vars['item']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a") : smarty_modifier_date_format($_tmp, "%a")); ?>
)</td>
					<td bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo $this->_tpl_vars['item']['grosssales']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['repairorders']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['newcustomers']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['actualhours']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="edit-daily-sales.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
">Edit</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="8" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Daily Sales Found</font></td>
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