<?php /* Smarty version 2.6.26, created on 2013-10-11 07:39:07
         compiled from project-tracker.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'project-tracker.tpl', 24, false),array('modifier', 'base64_encode', 'project-tracker.tpl', 26, false),)), $this); ?>
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
/add-tasks.php">Add Task</a></span>
			<h1>Project Tracker</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Priority</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Dead Line</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Title</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Comemnts</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Status</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Action</strong></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php if ($this->_tpl_vars['item']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['item']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '3'): ?>Mediun Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?></td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['dead_line'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-task.php?task_id=<?php echo $this->_tpl_vars['item']['task_id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ajax.php?For=Comments&height=600&width=600&type=C&Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['task_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
" class="thickbox" title="View Comments"><?php echo $this->_tpl_vars['item']['commentcount']; ?>
</a></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><span class="progressBar" id="task_status<?php echo ($this->_foreach['item']['iteration']-1); ?>
"><?php echo $this->_tpl_vars['item']['task_status']; ?>
</span></td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-tasks.php?task_id=<?php echo $this->_tpl_vars['item']['task_id']; ?>
" class="link023">Edit</a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Tacking Found</font></td>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.progressbar.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script type="text/javascript">
	$(document).ready(function() {
		'; ?>
<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?><?php echo '
		$("#task_status'; ?>
<?php echo ($this->_foreach['item']['iteration']-1); ?>
<?php echo '").progressBar();
		'; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '
	});
</script>
'; ?>