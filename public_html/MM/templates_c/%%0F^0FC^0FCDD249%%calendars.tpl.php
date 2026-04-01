<?php /* Smarty version 2.6.26, created on 2013-10-16 03:09:48
         compiled from calendars.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/colorpicker.css" />
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-cal.php">Add Calendar Item</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/shared-cal.php">Shared Calendars</a></span>
			<h1>Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
				<tr>
					<th  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Name</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Start Date</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>End Date</strong></th>
					<th  bgcolor="#336699" style="color:#fff;"><strong>Duration</strong></th>
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
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['sdate']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['edate']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['duration']; ?>
 days</td>
					<td bgcolor="#f9f9f7">
					<a href="javascript: ShowGntt(<?php echo $this->_tpl_vars['item']['id']; ?>
);" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cal.png" border="0" title="View Gantt" alt="View Gantt" /></a>&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/show-cal.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calendar.png" border="0" title="Calendar" alt="Calendar" /></a>&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/edit-cal.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/edit.png" border="0" title="Edit" alt="Edit" /></a>&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/copy-cal.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/copy.png" border="0" title="Copy" alt="Copy" /></a>&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/calendars.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&act=del" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a>&nbsp;
						<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/slow-periods.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/timeline_marker.png" border="0" title="Slow Periods" alt="Slow Periods" /></a></td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" align="center"><font color="#FF0000">No Calendar Items Found</font></td>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/colorpicker.js"></script>
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
		$(\'#input'; ?>
<?php echo ($this->_foreach['item']['iteration']-1); ?>
<?php echo '\').ColorPickerSetColor({ color: \''; ?>
<?php echo $this->_tpl_vars['item']['color']; ?>
<?php echo '\' });
		'; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '
	});
	function ShowGntt(id)
	{
		tb_show(\'Show Chart\',\'cal-gantt.php?height=500&width=1040&id=\'+id);
		return;
	}
</script>
'; ?>