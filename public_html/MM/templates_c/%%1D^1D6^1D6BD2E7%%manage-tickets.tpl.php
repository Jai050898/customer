<?php /* Smarty version 2.6.26, created on 2013-06-11 09:56:27
         compiled from manage-tickets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'manage-tickets.tpl', 22, false),array('modifier', 'count', 'manage-tickets.tpl', 31, false),)), $this); ?>
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
/rize-ticket.php" >Add Ticket</a></span>
			<h1>Manage Tickets</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Priority</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Subject</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Requested Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Responded Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Status</strong></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Records']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item']['priority'] == 1): ?>Urgent<?php elseif ($this->_tpl_vars['item']['priority'] == 2): ?>High<?php elseif ($this->_tpl_vars['item']['priority'] == 3): ?>Normal<?php elseif ($this->_tpl_vars['item']['priority'] == 4): ?>Low<?php else: ?>Very Low<?php endif; ?></td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ajax.php?For=ReqInfo&req_id=<?php echo $this->_tpl_vars['item']['req_id']; ?>
&height=500&width=600" class="thickbox" title="View tickets"><?php echo $this->_tpl_vars['item']['subject']; ?>
</a></td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['create_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item']['respond_date'] != "0000-00-00 00:00:00"): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['respond_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
<?php else: ?>--<?php endif; ?></td>
					<td  bgcolor="#f9f9f7"><?php if ($this->_tpl_vars['item']['status'] == 'O'): ?><font color="#00CC33">Open</font><?php elseif ($this->_tpl_vars['item']['status'] == 'R'): ?><font color="#0000FF">ReOpened</font><?php else: ?><font color="#FF0000">Closed</font><?php endif; ?></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" style="color:#000000;">No Tickets Found</td>
				</tr>
				<?php endif; unset($_from); ?>
				<?php if (count($this->_tpl_vars['Records']) > 0): ?>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>