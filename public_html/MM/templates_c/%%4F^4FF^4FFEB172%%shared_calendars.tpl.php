<?php /* Smarty version 2.6.26, created on 2013-09-17 02:03:42
         compiled from shared_calendars.tpl */ ?>
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
			<h1>Shared Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>S No</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Calendar Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Shared With</strong></td>
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
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['emails']; ?>
</td>
					<td bgcolor="#f9f9f7"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/shared-cal.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&act=del" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" title="Delete" alt="Delete" /></a></td>
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