<?php /* Smarty version 2.6.26, created on 2014-03-17 01:29:52
         compiled from manage-staff.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-staff.tpl', 55, false),array('function', 'cycle', 'manage-staff.tpl', 101, false),)), $this); ?>
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
								  <li>Manage Staff</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Staff<div class="admin_nav" style="float:right;font-weight:bold;">
    <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-staff.php?user_id=<?php echo $_GET['user_id']; ?>
">Add Staff</a></div>
						</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUsers" class="form" method="post" name="ManageUsers">
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
							  <td><h2>Manage Staff Members</h2></td>
							 
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
                                                                        <select name="login_status" id="login_status" class="searchinput">
									<option value="">-- Login Status --</option>
									<option value="A" <?php if ($_REQUEST['login_status'] == 'A'): ?> selected="selected" <?php endif; ?>>Active</option>
                                                                        <option value="P" <?php if ($_REQUEST['login_status'] == 'P'): ?> selected="selected" <?php endif; ?>>Pending</option>
								</select>&nbsp;&nbsp;
									<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" <?php if ($_REQUEST['status'] == 'A'): ?> selected="selected" <?php endif; ?>>Active</option>
									<option value="I" <?php if ($_REQUEST['status'] == 'I'): ?> selected="selected" <?php endif; ?>>In Active</option>
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageUsers.submit();" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<?php if (count($this->_tpl_vars['Users']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUsers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageUsers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUsers,'D','chkall[]');"/>
													<input name="input3" type="button"  value="Active Login" onclick="javascript:SetStatus(document.ManageUsers,'O','chkall[]');"/>
													<input name="input5" type="button"  value="InActive Login" onclick="javascript:SetStatus(document.ManageUsers,'P','chkall[]');"/>
													
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
									<th width="3%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageUsers,'chkall[]','checkall');" /></th>
                                                                    	      <th width="6%" align="left">User Name</th>
                                                                          
                                                                            <th width="6%" align="left">First Name</th>
                                                                                <th width="6%" align="left">Last Name</th>
                                                                                <th width="6%" align="left">Company Name</th>
                                                                                <th width="6%" align="left">Email</th>
                                                                                <th width="6%" align="left">Login</th>
										<th width="6%" align="left">Status </th>
										<th width="6%" align="left">Action</th>
									</tr> 
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
		
											<td align="left">								<input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
"/></td>
										<input type="hidden" name="staff_user_id" id="staff_user_id" value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
" />
										<td align="left"><?php echo $this->_tpl_vars['item']['user_name']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['first_name']; ?>
</td>
											<td align="left">
										<?php echo $this->_tpl_vars['item']['last_name']; ?>

											</td>
                                                                                	<td align="left"><?php echo $this->_tpl_vars['item']['company_name']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['email']; ?>
</td>
											<td><?php echo $this->_tpl_vars['item']['login_status']; ?>
</td>
                                                                                        <td><?php echo $this->_tpl_vars['item']['status']; ?>
</td>
                                                                                        <td style="color:#000000;text-align:center;"><a href="edit-staff.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><img src="../images/page_edit.png" border="0" alt="edit" title="edit"/></a>
</td>
                                                                                        
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Users']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUsers,'A','chkall[]');"/>
													<input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageUsers,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUsers,'D','chkall[]');"/>
													<input name="input3" type="button"  value="Active Login" onclick="javascript:SetStatus(document.ManageUsers,'O','chkall[]');"/>
													<input name="input5" type="button"  value="InActive Login" onclick="javascript:SetStatus(document.ManageUsers,'P','chkall[]');"/>
													
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