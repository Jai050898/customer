<?php /* Smarty version 2.6.26, created on 2012-11-22 05:25:58
         compiled from monthly-sales.tpl */ ?>
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
			<h1>Monthly Data</h1>

			<div style="padding-top:15px;">

			<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td colspan="4" class="companyheading1"  bgcolor="#eaeaea" height="10"><?php echo $this->_tpl_vars['disDate']; ?>
</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '1'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('1');">January</a><?php else: ?>January<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '2'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('2');">February</a><?php else: ?>February<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '3'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('3');">March</a><?php else: ?>March<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '4'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('4');">April</a><?php else: ?>April<?php endif; ?></div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '5'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('5');">May</a><?php else: ?>May<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '6'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('6');">June</a><?php else: ?>June<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '7'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('7');">July</a><?php else: ?>July<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '8'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('8');">August</a><?php else: ?>August<?php endif; ?></div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '9'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('9');">Spetember</a><?php else: ?>Spetember<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '10'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('10');">October</a><?php else: ?>October<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '11'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('11');">November</a><?php else: ?>November<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '12'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('12');">December</a><?php else: ?>December<?php endif; ?></div></td>
	</tr>
	</table>
		
		</div>
	
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
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function ShowRegLogin(id)
{
	tb_show(\'Monthly Data\',\'monthlyform.php?height=350&width=640&id=\'+id);
	return;
}
</script>
'; ?>