<?php /* Smarty version 2.6.26, created on 2012-11-23 03:15:58
         compiled from add-monthly-sales.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<?php echo '
<style type="text/css">
#TB_window {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 4px solid #A44900;
    color: #000000;
    display: none;
    left: 50%;
    position: fixed;
    text-align: left;
    top: 50%;
    z-index: 102;
}
</style>
'; ?>

<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div id="innerleft">
			  <div class="admin-rightpart">
					<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
							<li>Add Monthly Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Add Monthly Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="95%" border="0" align="center" cellpadding="3" cellspacing="3" bgcolor="#FAFAFA" style="height:250px; ;border:2px solid #E8E8E8;">
	<tr align="center" valign="middle">
		<td colspan="4" class="companyheading1"  bgcolor="#eaeaea" height="10"><?php echo $this->_tpl_vars['disDate']; ?>
</td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '1'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('1',<?php echo $_REQUEST['Shop_ID']; ?>
);">January</a><?php else: ?>January<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '2'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('2',<?php echo $_REQUEST['Shop_ID']; ?>
);">February</a><?php else: ?>February<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '3'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('3',<?php echo $_REQUEST['Shop_ID']; ?>
);">March</a><?php else: ?>March<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '4'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('4',<?php echo $_REQUEST['Shop_ID']; ?>
);">April</a><?php else: ?>April<?php endif; ?></div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '5'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('5',<?php echo $_REQUEST['Shop_ID']; ?>
);">May</a><?php else: ?>May<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '6'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('6',<?php echo $_REQUEST['Shop_ID']; ?>
);">June</a><?php else: ?>June<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '7'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('7',<?php echo $_REQUEST['Shop_ID']; ?>
);">July</a><?php else: ?>July<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '8'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('8',<?php echo $_REQUEST['Shop_ID']; ?>
);">August</a><?php else: ?>August<?php endif; ?></div></td>
	</tr>
	<tr align="center" valign="middle">
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'" height="15"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '9'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('9',<?php echo $_REQUEST['Shop_ID']; ?>
);">Spetember</a><?php else: ?>Spetember<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '10'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('10',<?php echo $_REQUEST['Shop_ID']; ?>
);">October</a><?php else: ?>October<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '11'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('11',<?php echo $_REQUEST['Shop_ID']; ?>
);">November</a><?php else: ?>November<?php endif; ?></div></td>
		<td width="25%" bgcolor="#FFFFFF" onMouseOver="this.style.backgroundColor='#f0f4f9';" onmouseout="this.style.backgroundColor='#FFFFFF'"><div align="center" class="calender01"><?php if ($this->_tpl_vars['m'] >= '12'): ?><a href="javascript: void(0);" onclick="javascript: ShowRegLogin('12',<?php echo $_REQUEST['Shop_ID']; ?>
);">December</a><?php else: ?>December<?php endif; ?></div></td>
	</tr>
	</table>
					  <div class="clr"></div>
					</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function ShowRegLogin(id,shopid)
{
	tb_show(\'Monthly Data\',\''; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/admin/monthlyform.php?height=350&width=640&id=\'+id+\'&shopid=\'+shopid);
	return;
}
</script>
'; ?>