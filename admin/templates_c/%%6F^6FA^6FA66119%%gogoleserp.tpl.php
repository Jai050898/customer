<?php /* Smarty version 2.6.26, created on 2013-10-30 04:17:33
         compiled from gogoleserp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'gogoleserp.tpl', 44, false),array('modifier', 'date_format', 'gogoleserp.tpl', 70, false),array('modifier', 'count', 'gogoleserp.tpl', 82, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<?php echo '
<style type="text/css">
#latest_images {
    background: none repeat scroll 0 0 #D2DCE2;
    border: 1px solid #B4B4B4;
    padding: 7px;
    text-align: center;
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
					  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-users.php">Manage Users</a></li>
					  <li>Google SERPs</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">Google SERPs</div>
		  </div>
		  <div class="ad_textsp">
		  <table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Customer Information</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<table>
								<tr>
								<td align="right"><strong>Company Name :</strong></td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['CustInfo']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['email']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['address']; ?>
</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['city']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['state']; ?>
</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left"><?php echo $this->_tpl_vars['CustInfo']['country']; ?>
</td>
								</tr>
								</table>
							  </td>
							</tr>

						</table>
				<div class="clr" style="height:15px;"></div>		
				<div class="contents01">
			<?php $_from = $this->_tpl_vars['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
			<span class="style0001" style="font-size:14px;"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</strong></span>
			
			<div id="latest_images">
			<?php $_from = $this->_tpl_vars['item']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['items']):
        $this->_foreach['items']['iteration']++;
?>
			
			<a href="javascript: ShowIMG('<?php echo $this->_tpl_vars['item']['date']; ?>
','<?php echo $this->_tpl_vars['items']['image']; ?>
');"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/serps/<?php echo $this->_tpl_vars['items']['image']; ?>
" width="150" height="104" /></a>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			<div style="height:10px;"></div>
			<?php endforeach; else: ?>
			No Gogole SERPs  Found
			<?php endif; unset($_from); ?>
			<?php if (count($this->_tpl_vars['Images']) > 0): ?>
				<table  width="100%" cellspacing="0" cellpadding="5">
					<tr>
						<td bgcolor="#854141"><table width="100%" cellspacing="0" cellpadding="5">
						<tr>
						<td  align="left" bgcolor="#854141">&nbsp;		</td>
						<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
						</tr>
						</table>
						</td>
					</tr>
				</table>
			<?php endif; ?>
			</div>
			<!--end of middle part -->
			  <!--end of right part -->
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
function ShowIMG(dt,val)
{
	tb_show("Google SERPs",\'show-google-image.php?height=500&width=1040&img=\'+val);
	return;
}
</script>
'; ?>