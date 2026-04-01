<?php /* Smarty version 2.6.26, created on 2011-02-01 13:07:18
         compiled from manage-projects.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'manage-projects.tpl', 25, false),array('modifier', 'count', 'manage-projects.tpl', 33, false),)), $this); ?>
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
/client/add-project.php">Add Project</a></span>
			<h1>Manage Projects</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project Status</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Menbers</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Tasks</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Created Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actions</strong></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/client/view-project.php?project_id=<?php echo $this->_tpl_vars['item']['project_id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a>&nbsp;</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item']['project_status'] == '1'): ?><font color="#00CC33">New</font><?php elseif ($this->_tpl_vars['item']['project_status'] == '2'): ?><font color="#0000FF">Proposal</font><?php elseif ($this->_tpl_vars['item']['project_status'] == '3'): ?><font color="#00EEFF">In Progress</font><?php elseif ($this->_tpl_vars['item']['project_status'] == '4'): ?><font color="#00ff00">Completed</font><?php else: ?><font color="#FF0000">Cancelled</font><?php endif; ?></td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['totmembers']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['totaltasks']; ?>
</td>
					<td bgcolor="#f9f9f7"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y") : smarty_modifier_date_format($_tmp, "%b %d,%Y")); ?>
</td>
					<td  bgcolor="#f9f9f7"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/client/add-project.php?project_id=<?php echo $this->_tpl_vars['item']['project_id']; ?>
" class="link023">Edit</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" style="color:#000000;">No Projects Found</td>
				</tr>
				<?php endif; unset($_from); ?>
				<?php if (count($this->_tpl_vars['Projects']) > 0): ?>
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