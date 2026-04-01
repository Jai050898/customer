<?php /* Smarty version 2.6.26, created on 2013-06-18 03:08:34
         compiled from manage-uploads.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-uploads.tpl', 48, false),array('modifier', 'base64_encode', 'manage-uploads.tpl', 79, false),array('modifier', 'date_format', 'manage-uploads.tpl', 81, false),array('function', 'cycle', 'manage-uploads.tpl', 76, false),)), $this); ?>
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
								  <li>Manage Uploads</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Uploads</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUploads" class="form" method="post" name="ManageUploads">
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
							  <td><h2>Manage Uploads</h2></td>
							  <!--<td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-user.php">Add User</a></td>-->
							</tr>
							<tr>
							  <td  colspan="2">
								<div class="search_divbox">
									<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" <?php if ($_REQUEST['status'] == 'A'): ?> selected="selected" <?php endif; ?>>Active</option>
									<option value="I" <?php if ($_REQUEST['status'] == 'I'): ?> selected="selected" <?php endif; ?>>In Active</option>
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageUploads.submit();" /> 
									<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<?php if (count($this->_tpl_vars['Uploads']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUploads,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageUploads,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUploads,'D','chkall[]');"/>
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
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageUploads,'chkall[]','checkall');" /></th>
										<th width="20%" align="left"><a href="javascript: setClientSort('B.first_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUploads);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'A.first_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="35%" align="left">File Name </th>
										<th width="20%" align="left">Comments </th>
										<th width="15%" align="left">Uploaded On</th>
										<th width="10%" align="left">Status</th>
									</tr>
									<?php $_from = $this->_tpl_vars['Uploads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
									<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
										<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"/></td>
										<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo $this->_tpl_vars['item']['first_name']; ?>
<?php echo $this->_tpl_vars['item']['last_name']; ?>
</a></td>
										<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/download.php?imag=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['filename'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
&Un=<?php echo $this->_tpl_vars['item']['user_name']; ?>
"><?php echo $this->_tpl_vars['item']['filename']; ?>
</a></td>
										<td align="left"><?php echo $this->_tpl_vars['item']['comments']; ?>
</td>
										<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['dateuploaded'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
										<td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><span style="color:#008000">Active</span><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><span style="color:#FF0000">Inctive</span><?php elseif ($this->_tpl_vars['item']['status'] == 'D'): ?><span style="color:#800000">Deleted</span><?php endif; ?></td>
									</tr>
									<?php endforeach; else: ?>
									<tr>
									 	<th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Uploads Found</strong></font></th>
									</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Uploads']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageUploads,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageUploads,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageUploads,'D','chkall[]');"/>
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