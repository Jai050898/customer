<?php /* Smarty version 2.6.26, created on 2013-05-14 04:27:14
         compiled from manage-users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'manage-users.tpl', 70, false),array('modifier', 'stripslashes', 'manage-users.tpl', 72, false),array('modifier', 'count', 'manage-users.tpl', 102, false),)), $this); ?>
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
/seo/dashboard.php">Home</a></li>
								  <li>Manage Users</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Users</div>
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
							  <td><h2>Manage Users</h2></td>
							  <td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-user.php">Add User</a></td>
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
									<input type="image" src="../images/go_but.png" onclick="document.ManageUsers.submit();" /> 
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
										<th width="5%" align="left">S No</th>
										<th width="22%" align="left"><a href="javascript: setClientSort('A.company_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUsers);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'A.company_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="30%" align="left"><a href="javascript: setClientSort('A.email','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUsers);">Email </a> <?php if ($_REQUEST['sortby'] == 'A.email'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
										<th width="10%" align="left">Status </th>
										<th width="35%" align="left">Actions </th>
									</tr>
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
											<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></td>
											<td align="left" style="padding-right:15px;"> <?php echo $this->_tpl_vars['item']['email']; ?>
</td>
											<td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>
											<td align="left">
											<!-- <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/add-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_edit.png" title="Edit" alt="Edit" /> </a> -->
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/gogoleserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Google Serp's" alt="Google Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/bingserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Bing Serp's" alt="Bing Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/yahooserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Yahoo Serp's" alt="Yahoo Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/online-tests.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/timeline_marker.png" title="Online Tests" alt="Online Tests" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=g" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/google-small.png" title="Google Serach" alt="Google Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=y" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/yahoo-small.png" title="Yahoo Serach" alt="Yahoo Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=b" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/bing-small.png" title="Bing Serach" alt="Bing Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/site-inspection.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/confirmed-directories.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cd.png" title="Confirmed Directories" alt="Confirmed Directories" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/manage-competitors.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/competitors.png" title="Competitors" alt="Competitors" /></a>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/opensearch-all.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023" target="_blank"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/building.png" title="Near city Search" alt="Near city Search" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/print.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023" target="_blank"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/print.gif" title="Print" alt="Print" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/export.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/export-brands.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/seo/export-all.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/download.png" title="Export All List" alt="Export All List" /></a>
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
												<td  align="left" bgcolor="#854141">&nbsp;
													
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