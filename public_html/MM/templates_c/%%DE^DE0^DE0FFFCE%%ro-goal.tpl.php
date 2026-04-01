<?php /* Smarty version 2.6.26, created on 2013-09-17 06:32:45
         compiled from ro-goal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'ro-goal.tpl', 22, false),array('modifier', 'count', 'ro-goal.tpl', 34, false),)), $this); ?>
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
/add-ro-goal.php">Add RO Goal Item</a></span>
			<h1>RO Goal</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Year</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Month</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>New</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Repeat</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp="01-".($this->_tpl_vars['item']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['newval']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['repeatval']; ?>
</td>
					<td bgcolor="#f9f9f7">
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/edit-ro-goal.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No RO Goal Items Found</font></td>
				</tr>
				<?php endif; unset($_from); ?>
				<?php if (count($this->_tpl_vars['Tasks']) > 0): ?>
				<tr>
				  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
					<tr>
					<td  align="left" bgcolor="#336699">&nbsp;		</td>
					<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
					</tr>
					</table>
					</td>
					</tr>
				<?php endif; ?>
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