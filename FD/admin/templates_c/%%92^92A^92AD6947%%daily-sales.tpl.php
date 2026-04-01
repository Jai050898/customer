<?php /* Smarty version 2.6.26, created on 2012-11-23 03:00:26
         compiled from daily-sales.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'daily-sales.tpl', 60, false),array('modifier', 'date_format', 'daily-sales.tpl', 63, false),array('modifier', 'count', 'daily-sales.tpl', 81, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
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
								  <li>Daily Sales</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Daily Sales</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageShops" class="form" method="post" name="ManageShops">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
						<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Daily Sales</h2></td>
							  <td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-daily-sales.php?Shop_ID=<?php echo $_REQUEST['Shop_ID']; ?>
&Company_ID=<?php echo $_REQUEST['Company_ID']; ?>
">Add Daily Sales</a></td>
							</tr>
							<?php if ($_REQUEST['task'] != ""): ?>
							<tr>
							  <td align="cneter" colspan="2">
							  <?php if ($_REQUEST['task'] == 's'): ?>
							  <p align="center" style="color:#0000FF;"><strong>Mail send successfully</strong></p>
							  <?php else: ?>
							   <p align="center" style="color:#FF0000;"><strong>Mail send Failed</strong></p>
							  <?php endif; ?>
							  </td>
							</tr>
							<?php endif; ?>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageShops,'chkall[]','checkall');" /></th>
										<th width="10%" align="left">Year</th>
										<th width="15%" align="left">Month</th>
										<th width="12%" align="left">Day</th>
										<th width="10%" align="left">Gross Sales </th>
										<th width="10%" align="left">Repair Orders</th>
										<th width="10%" align="left">New Customers</th>
										<th width="10%" align="left">Actual Hours</th>
										<th width="10%" align="left">Actions </th>
									</tr>
									<?php $_from = $this->_tpl_vars['Shops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
											<td align="left"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
											<td align="left"> <?php echo ((is_array($_tmp="01-".($this->_tpl_vars['item']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['day']; ?>
 (<?php echo ((is_array($_tmp=($this->_tpl_vars['item']['day'])."-".($this->_tpl_vars['item']['month'])."-2012")) ? $this->_run_mod_handler('date_format', true, $_tmp, "%a") : smarty_modifier_date_format($_tmp, "%a")); ?>
)</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['grosssales']; ?>
</td>
											<td align="left" ><?php echo $this->_tpl_vars['item']['repairorders']; ?>
</td>
											<td align="left" ><?php echo $this->_tpl_vars['item']['newcustomers']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['actualhours']; ?>
</td>
											<td align="left">
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/edit-daily-sales.php?id=<?php echo $this->_tpl_vars['item']['id']; ?>
&Shop_ID=<?php echo $_REQUEST['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_edit.png" title="Edit" alt="Edit" /> </a>
											</td>
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No  Daily Data Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Shops']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageShops,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageShops,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageShops,'D','chkall[]');"/>
												</td>
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
							<?php endif; ?>
						</table>
					</form>
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
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>