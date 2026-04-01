<?php /* Smarty version 2.6.26, created on 2012-11-22 06:00:29
         compiled from manage-shops.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'manage-shops.tpl', 69, false),array('modifier', 'count', 'manage-shops.tpl', 95, false),)), $this); ?>
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
								  <li>Manage Shops</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Shops</div>
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
							  <td><h2>Manage Shops</h2></td>
							  <td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/add-shop.php">Add Shop</a></td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageShops.submit();" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
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
										<th width="17%" align="left"><a href="javascript: setClientSort('A.name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageShops);">Shop Name</a> <?php if ($_REQUEST['sortby'] == 'A.name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="17%" align="left"><a href="javascript: setClientSort('A.email','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageShops);">Email </a> <?php if ($_REQUEST['sortby'] == 'A.email'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th width="12%" align="left">User Name </th>
										<th width="10%" align="left">Phone </th>
										<th width="10%" align="left">State</th>
										<th width="10%" align="left">City</th>
										<th width="7%" align="left">Status </th>
										<th width="25%" align="left">Actions </th>
									</tr>
									<?php $_from = $this->_tpl_vars['Shops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
"/></td>
											<td align="left"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
											<td align="left" style="padding-right:15px;"> <?php echo $this->_tpl_vars['item']['email']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['user_name']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['phone']; ?>
</td>
											<td align="left" ><?php echo $this->_tpl_vars['item']['State_Name']; ?>
</td>
											<td align="left" ><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
											<td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>
											<td align="left">
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/resendmail_shop.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/email.png" title="Resend Welcome notification mail" alt="Resend Welcome notification mail" /> </a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/add-shop.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_edit.png" title="Edit" alt="Edit" /> </a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/annual-settings.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cog.png" title="Annual Settings" alt="Annual Settings" /> </a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/daily-sales.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calendar_view_day.png" title="Daily Sales" alt="Daily Sales" /> </a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/monthly-sales.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calendar_view_month.png" title="Monthly Sales" alt="Monthly Sales" /> </a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/yearly-sales.php?Shop_ID=<?php echo $this->_tpl_vars['item']['Shop_ID']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calendar_view_year.png" title="Yearly Sales" alt="Yearly Sales" /> </a>
											</td>
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Shops Added</strong></font></th>
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