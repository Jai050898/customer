<?php /* Smarty version 2.6.26, created on 2014-03-20 08:47:30
         compiled from manage-users-demo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-users-demo.tpl', 54, false),array('modifier', 'stripslashes', 'manage-users-demo.tpl', 99, false),array('function', 'cycle', 'manage-users-demo.tpl', 96, false),)), $this); ?>
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
							  <td align="right">
                                                              <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/extraction-list.php">Extraction List</a> | <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export-mms-data.php" target="_blank">Generate Report</a> | <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/client-roster.php" target="_blank">All Clients Roster</a> | <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-user.php">Add User</a></td>
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
													<input name="input6" type="button"  value="Roster" onclick="javascript:SetStatus(document.ManageUsers,'R','chkall[]');"/>
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
										<th width="3%" align="left">ID</th>
										<th width="14%" align="left"><a href="javascript: setClientSort('A.company_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageUsers);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'A.company_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="6%" align="left">Login</th>
										<th width="6%" align="left">Status </th>
										<th width="75%" align="left">Actions </th>
									</tr>
									<?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
"/></td>
											<td align="left"><?php echo $this->_tpl_vars['item']['user_id']; ?>
</td>
											<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</a></td>
											<td align="left" ><?php if ($this->_tpl_vars['item']['login_status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['login_status'] == 'P'): ?><font color="#FF0000">Pending</font><?php endif; ?></td>
											<td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><font color="#00CC33">Active</font><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><font color="#0000FF">InActive</font><?php elseif ($this->_tpl_vars['item']['status'] == 'P'): ?><font color="#00EEFF">Pending</font><?php else: ?><font color="#FF0000">Deleted</font><?php endif; ?></td>
											<td align="left">
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/resendmail_user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/email.png" title="Resend Welcome notification mail" alt="Resend Welcome notification mail" /> </a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_edit.png" title="Edit" alt="Edit" /> </a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/cal-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cal.png" border="0" style="cursor:pointer;" title="User Calendars" alt=" User Calendars" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/calendars-cat.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calculator_link.png" border="0" style="cursor:pointer;" title="User Calendars Categories" alt=" User Calendars Categories" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/ro-goal.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/database.png" border="0" style="cursor:pointer;" title="User RO Goals" alt=" User  RO Goals" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/marketing-budget.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/money_dollar.png" border="0" style="cursor:pointer;" title="Marketing Budget" alt="Marketing Budget" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/show-all-budgets.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/money.png" border="0" style="cursor:pointer;" title="Marketing Budget Map" alt="Marketing Budget Map" /></a>&nbsp;
											<?php if ($this->_tpl_vars['item']['access_to_mark_survey'] == 'Y'): ?>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/marketing-survey.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/zoom_in.png" title="Marketing Survey" alt="Marketing Survey" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/marketing-survey-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_green.png" title="Marketing Survey Report" alt="Marketing Survey Report" /></a>&nbsp;
											<?php endif; ?>
											<?php if ($this->_tpl_vars['item']['access_to_site_survey'] == 'Y'): ?>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/website-survey.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/zoom_out.png" title="Website Survey" alt="Website Survey" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/website-survey-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page_red.png" title="Website Survey Report" alt="Website Survey Report" /></a>&nbsp;
											<?php endif; ?>
											<?php if ($this->_tpl_vars['item']['access_to_integrated_survey'] == 'Y'): ?>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/integrated-survey.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/zoom.png" title="Survey" alt="Survey" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/integrated-survey-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page.png" title="Survey Report" alt="Survey Report" /></a>&nbsp;<?php endif; ?>
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/survey-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/page.png" title="All Survey Report" alt="All Survey Report" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/online-tests.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/timeline_marker.png" title="Online Tests" alt="Online Tests" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/gogoleserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Google Serp's" alt="Google Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/bingserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Bing Serp's" alt="Bing Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/yahooserp.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/images.png" title="Yahoo Serp's" alt="Yahoo Serp's" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/wis.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/time_go.png" title="What if Scenarios" alt="What if Scenarios" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=g" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/google-small.png" title="Google Serach" alt="Google Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=y" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/yahoo-small.png" title="Yahoo Serach" alt="Yahoo Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/opensearch.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
&type=b" target="_blank" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/bing-small.png" title="Bing Serach" alt="Bing Serach" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/site-inspection.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/confirmed-directories.php?id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cd.png" title="Confirmed Directories" alt="Confirmed Directories" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-competitors.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/competitors.png" title="Competitors" alt="Competitors" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/opensearch-all.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023" target="_blank"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/building.png" title="Near city Search" alt="Near city Search" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/print.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023" target="_blank"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/print.gif" title="Print" alt="Print" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export-brands.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/export-all.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/download.png" title="Export All List" alt="Export All List" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/users-map.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/map.png" title="MIS Users Map" alt="MIS Users Map" /></a>&nbsp;
											<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/users-daily-data.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/data-server.png" title="MIS Users Daily Data" alt="MIS Users Daily Data" /></a>
                                                                                        <?php if ($this->_tpl_vars['item']['attempts'] >= 5): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/users-unlock.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/lockedbyuser.gif" title="Account Locked for Login. Click to Unlock!!!" alt="Locked for login" /></a>
                                                                                        <?php endif; ?>
                                                                                        <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-dashboard-statistics.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/viewmmsdata.png" title="View MMS Data" alt="View MMS Data" /></a>
                                                                                        <?php endif; ?>
                                                                                        <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-make-reports.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/create_report.png" title=" Manage Make Reports" alt="Manage Make Reports" /></a>
                                                                                        <?php endif; ?>
                                                                                        <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-model-reports.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/model.gif" title=" Manage Model Reports" alt="Manage Model Reports" /></a>
                                                                                        <?php endif; ?>
                                                                                        <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-customer-counts.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/count.gif" title=" Manage Customer Counts" alt="Manage Customer Counts" /></a>
                                                                                            <?php endif; ?>
                                                                                        <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-customer-spendings.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/spendings.png" title="Manage Customer Spendings" alt="Manage Customer Spendings" /></a>
                                                                                            <?php endif; ?>
											<?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-total-reports.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/totalreports.png" title="Manage Total Reports" alt="Manage Total Reports" /></a>
                                                                                            <?php endif; ?>
											<?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-customer-visit-reports.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/customervisits.png" title="Manage Customer Visits" alt="Manage Customer Visits" /></a>
                                                                                            <?php endif; ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/user-change-password.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/changepassword.png" title="User Password Change" alt="User Password Change" /></a>
                                                                                            <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-analysis.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/customeranalysis.png" title="Customer Analysis" alt="Customer Analysis" /></a>
                                                                                            <?php endif; ?>

                                                                                             <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-xml-visit-spending.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/customerspendings.png" title="Customer Visit Wise Spend Report" alt="Customer Visit Wise Spend Report" /></a>
                                                                                            <?php endif; ?>

                                                                                             <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/top-ten-vehicles.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/vehicles.gif" title="Top Ten Vehicles" alt="Top Ten Vehicles" /></a>
                                                                                            <?php endif; ?>
                                                                                             

                                                                                             <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/ro-calculations.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/Calculator.png" title="RO Calculations" alt="RO Calculations" /></a>
                                                                                            <?php endif; ?>

                                                                                             <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/gross-sale-weekwise-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/cal-week.gif" title="Week Wise Gross sale" alt="Week Wise Gross sale" /></a>
                                                                                            <?php endif; ?>

                                                                                             <?php if (in_array ( $this->_tpl_vars['item']['user_id'] , $this->_tpl_vars['mmsAry'] )): ?>
                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/gross-sale-daywise-report.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/calendar_day.png" title="Day Wise Gross sale" alt="Day Wise Gross sale" /></a>
                                                                                            <?php endif; ?>

                                                                                            <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-staff.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/manage_staff.jpg" title="ManageStaff" alt="ManageStaff" /> </a>&nbsp;
                                                                                             <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-permission.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
" class="link023"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/menu_permission.gif" title="MenuPermission" alt="MenuPermission" /></a>&nbsp;

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
													<input name="input6" type="button"  value="Roster" onclick="javascript:SetStatus(document.ManageUsers,'R','chkall[]');"/>
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