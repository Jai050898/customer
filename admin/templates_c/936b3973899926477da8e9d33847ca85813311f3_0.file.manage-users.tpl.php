<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:09:13
  from '/var/www/html/admin/templates/manage-users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbab593d76c0_22438009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '936b3973899926477da8e9d33847ca85813311f3' => 
    array (
      0 => '/var/www/html/admin/templates/manage-users.tpl',
      1 => 1774346206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:right-bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbab593d76c0_22438009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/function.cycle.php','function'=>'smarty_function_cycle',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl->_subTemplateRender("file:right-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
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
						<input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby'];?>
" />
						<input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption'];?>
" />
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Manage Users</h2></td>
							  <td align="right">
                                                              <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/extraction-list.php">Extraction List</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/export-mms-data.php" target="_blank">Generate Report</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/client-roster.php" target="_blank">All Clients Roster</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/add-user.php">Add User</a></td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
                                                                        <select name="login_status" id="login_status" class="searchinput">
									<option value="">-- Login Status --</option>
									<option value="A" <?php if ($_REQUEST['login_status'] == "A") {?> selected="selected" <?php }?>>Active</option>
                                                                        <option value="P" <?php if ($_REQUEST['login_status'] == "P") {?> selected="selected" <?php }?>>Pending</option>
								</select>&nbsp;&nbsp;
									<select name="status" id="status" class="searchinput">
									<option value="">-- Select Status --</option>
									<option value="A" <?php if ($_REQUEST['status'] == "A") {?> selected="selected" <?php }?>>Active</option>
									<option value="I" <?php if ($_REQUEST['status'] == "I") {?> selected="selected" <?php }?>>In Active</option>
								</select>&nbsp;&nbsp;
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != '') {
echo $_REQUEST['keyword'];
}?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageUsers.submit();" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<?php if (count($_smarty_tpl->tpl_vars['Users']->value) > 0) {?>
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
                                                                                                        <input name="input7" type="button"  value="Active & Login" onclick="javascript:SetStatus(document.ManageUsers,'B','chkall[]');"/>
                                                                                                        <input name="input8" type="button"  value="Inactive & Inlogin" onclick="javascript:SetStatus(document.ManageUsers,'C','chkall[]');"/>
                                                                                         
												</td>
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($_smarty_tpl->tpl_vars['first']->value != '') {
echo $_smarty_tpl->tpl_vars['first']->value;
}
if ($_smarty_tpl->tpl_vars['prev']->value != '') {
echo $_smarty_tpl->tpl_vars['prev']->value;
}
if ($_smarty_tpl->tpl_vars['nav']->value != '') {
echo $_smarty_tpl->tpl_vars['nav']->value;
}
if ($_smarty_tpl->tpl_vars['next']->value != '') {
echo $_smarty_tpl->tpl_vars['next']->value;
}
if ($_smarty_tpl->tpl_vars['last']->value != '') {
echo $_smarty_tpl->tpl_vars['last']->value;
}?></div></td>
											</tr>
										</table>
									</td>
								</tr>
							<?php }?>
							<?php if ($_REQUEST['task'] != '') {?>
							<tr>
							  <td align="cneter" colspan="2">
							  <?php if ($_REQUEST['task'] == "s") {?>
							  <p align="center" style="color:#0000FF;"><strong>Mail send successfully</strong></p>
							  <?php } else { ?>
							   <p align="center" style="color:#FF0000;"><strong>Mail send Failed</strong></p>
							  <?php }?>
							  </td>
							</tr>
							<?php }?>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="3%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageUsers,'chkall[]','checkall');" /></th>
										<th width="3%" align="left">ID</th>
										<th width="14%" align="left"><a href="javascript: setClientSort('A.company_name','<?php echo $_smarty_tpl->tpl_vars['sortioption']->value;?>
',document.ManageUsers);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'A.company_name') {?><img src="images/<?php echo $_smarty_tpl->tpl_vars['sortimoption']->value;?>
.gif" alt="" align="absmiddle"  /><?php }?>  </th>
										<th width="6%" align="left">Login</th>
										<th width="6%" align="left">Status </th>
										<th width="75%" align="left">Actions </th>
									</tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Users']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values'=>'#ffffff,#f3f3f3'),$_smarty_tpl);?>
;">
											<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"/></td>
											<td align="left"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
</td>
											<td align="left"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/view-user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['item']->value['company_name']);?>
</a></td>
											<td align="left" ><?php if ($_smarty_tpl->tpl_vars['item']->value['login_status'] == "A") {?><font color="#00CC33">Active</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['login_status'] == "P") {?><font color="#FF0000">Pending</font><?php }?></td>
											<td align="left"><?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == "A") {?><font color="#00CC33">Active</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status'] == "I") {?><font color="#0000FF">InActive</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['status'] == "P") {?><font color="#00EEFF">Pending</font><?php } else { ?><font color="#FF0000">Deleted</font><?php }?></td>
											<td align="left">
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/resendmail_user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/email.png" title="Resend Welcome notification mail" alt="Resend Welcome notification mail" /> </a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/add-user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_edit.png" title="Edit" alt="Edit" /> </a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/cal-user.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal.png" border="0" style="cursor:pointer;" title="User Calendars" alt=" User Calendars" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/calendars-cat.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/calculator_link.png" border="0" style="cursor:pointer;" title="User Calendars Categories" alt=" User Calendars Categories" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/ro-goal.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/database.png" border="0" style="cursor:pointer;" title="User RO Goals" alt=" User  RO Goals" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/marketing-budget.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/money_dollar.png" border="0" style="cursor:pointer;" title="Marketing Budget" alt="Marketing Budget" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/show-all-budgets.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/money.png" border="0" style="cursor:pointer;" title="Marketing Budget Map" alt="Marketing Budget Map" /></a>&nbsp;
											<?php if ($_smarty_tpl->tpl_vars['item']->value['access_to_mark_survey'] == "Y") {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/marketing-survey.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom_in.png" title="Marketing Survey" alt="Marketing Survey" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/marketing-survey-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_green.png" title="Marketing Survey Report" alt="Marketing Survey Report" /></a>&nbsp;
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['item']->value['access_to_site_survey'] == "Y") {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/website-survey.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom_out.png" title="Website Survey" alt="Website Survey" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/website-survey-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_red.png" title="Website Survey Report" alt="Website Survey Report" /></a>&nbsp;
											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['item']->value['access_to_integrated_survey'] == "Y") {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/integrated-survey.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom.png" title="Survey" alt="Survey" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/integrated-survey-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page.png" title="Survey Report" alt="Survey Report" /></a>&nbsp;<?php }?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/survey-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page.png" title="All Survey Report" alt="All Survey Report" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/online-tests.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/timeline_marker.png" title="Online Tests" alt="Online Tests" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/gogoleserp.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Google Serp's" alt="Google Serp's" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/bingserp.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Bing Serp's" alt="Bing Serp's" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/yahooserp.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Yahoo Serp's" alt="Yahoo Serp's" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/wis.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/time_go.png" title="What if Scenarios" alt="What if Scenarios" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/opensearch.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
&type=g" target="_blank" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/google-small.png" title="Google Serach" alt="Google Serach" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/opensearch.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
&type=y" target="_blank" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/yahoo-small.png" title="Yahoo Serach" alt="Yahoo Serach" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/opensearch.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
&type=b" target="_blank" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/bing-small.png" title="Bing Serach" alt="Bing Serach" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/site-inspection.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/confirmed-directories.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cd.png" title="Confirmed Directories" alt="Confirmed Directories" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-competitors.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/competitors.png" title="Competitors" alt="Competitors" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/opensearch-all.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/building.png" title="Near city Search" alt="Near city Search" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/print.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/print.gif" title="Print" alt="Print" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/export.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/export-brands.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/export-all.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/download.png" title="Export All List" alt="Export All List" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/users-map.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/map.png" title="MIS Users Map" alt="MIS Users Map" /></a>&nbsp;
											<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/users-daily-data.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/data-server.png" title="MIS Users Daily Data" alt="MIS Users Daily Data" /></a>
                                                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['attempts'] >= 5) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/users-unlock.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/lockedbyuser.gif" title="Account Locked for Login. Click to Unlock!!!" alt="Locked for login" /></a>
                                                                                        <?php }?>
                                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/customer-dashboard-statistics.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/viewmmsdata.png" title="View MMS Data" alt="View MMS Data" /></a>
                                                                                        <?php }?>
                                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-make-reports.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/create_report.png" title=" Manage Make Reports" alt="Manage Make Reports" /></a>
                                                                                        <?php }?>
                                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-model-reports.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/model.gif" title=" Manage Model Reports" alt="Manage Model Reports" /></a>
                                                                                        <?php }?>
                                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-customer-counts.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/count.gif" title=" Manage Customer Counts" alt="Manage Customer Counts" /></a>
                                                                                            <?php }?>
                                                                                        <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-customer-spendings.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/spendings.png" title="Manage Customer Spendings" alt="Manage Customer Spendings" /></a>
                                                                                            <?php }?>
											<?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-total-reports.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/totalreports.png" title="Manage Total Reports" alt="Manage Total Reports" /></a>
                                                                                            <?php }?>
											<?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-xml-customer-visit-reports.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customervisits.png" title="Manage Customer Visits" alt="Manage Customer Visits" /></a>
                                                                                            <?php }?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/user-change-password.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/changepassword.png" title="User Password Change" alt="User Password Change" /></a>
                                                                                            <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/customer-analysis.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customeranalysis.png" title="Customer Analysis" alt="Customer Analysis" /></a>
                                                                                            <?php }?>
                                                                                           <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/customer-xml-visit-spending.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customerspendings.png" title="Customer Visit Wise Spend Report" alt="Customer Visit Wise Spend Report" /></a>
                                                                                            <?php }?>

                                                                                             <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/top-ten-vehicles.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/vehicles.gif" title="Top Ten Vehicles Report" alt="Top Ten Vehicles Report" /></a>
                                                                                            <?php }?>
                                                                                             

                                                                                             <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/ro-calculations.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/Calculator.png" title="RO Calculations Report" alt="RO Calculations Report" /></a>
                                                                                            <?php }?>

                                                                                             <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/gross-sale-weekwise-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal-week.gif" title="Week Wise Gross sale Report" alt="Week Wise Gross sale Report" /></a>
                                                                                            <?php }?>

                                                                                             <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/gross-sale-daywise-report.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/calendar_day.png" title="Day Wise Gross sale Report" alt="Day Wise Gross sale Report" /></a>
                                                                                            <?php }?>

                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-staff.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/manage_staff.jpg" title="ManageStaff" alt="ManageStaff" /> </a>&nbsp;
       <!--                                                                                      <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-permission.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/menu_permission.gif" title="MenuPermission" alt="MenuPermission" /></a>&nbsp; -->

                                                                                             <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/rebate-reports.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/rebate.gif" title="Rebate Reports" alt="Rebate Reports" /> </a>
                                                                                            <?php }?>
											    <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['user_id'],$_smarty_tpl->tpl_vars['mmsAry']->value)) {?>
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/average-records.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/average.jpg" title="Average records" alt="Average records" /></a>
                                                                                            <?php }?>
                                                                                             <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/manage-permission.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/menu_permission.gif" title="MenuPermission" alt="MenuPermission" /></a>&nbsp;
                                                                                             <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/notification_mail.php?user_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="link023"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/mail_notification.png" title="Notification Mail" alt="Notification Mail" height="18px" width="18px" /></a>&nbsp;

											</td>
										</tr>
									<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								  </table>
								</td>
							</tr>
							<?php if (count($_smarty_tpl->tpl_vars['Users']->value) > 0) {?>
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
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($_smarty_tpl->tpl_vars['first']->value != '') {
echo $_smarty_tpl->tpl_vars['first']->value;
}
if ($_smarty_tpl->tpl_vars['prev']->value != '') {
echo $_smarty_tpl->tpl_vars['prev']->value;
}
if ($_smarty_tpl->tpl_vars['nav']->value != '') {
echo $_smarty_tpl->tpl_vars['nav']->value;
}
if ($_smarty_tpl->tpl_vars['next']->value != '') {
echo $_smarty_tpl->tpl_vars['next']->value;
}
if ($_smarty_tpl->tpl_vars['last']->value != '') {
echo $_smarty_tpl->tpl_vars['last']->value;
}?></div></td>
											</tr>
										</table>
									</td>
								</tr>
							<?php }?>
						</table>
					</form>
					<!--end of middle part -->
					<!--end of right part -->
					  <div class="clr"></div>
                                          <!--legend pane-->
                                          <div>
                                              <table width="100%" >
                                              <tr>
                                                  <td ><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_edit.png" title="Edit" alt="Edit" /></td>
                                                  <td>Edit</td>
                                                  <td>To edit personal details of customer. </td>
                                              </tr>
                                              <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal.png" border="0" style="cursor:pointer;" title="User Calendars" alt=" User Calendars" /></td>
                                                  <td>User Calendars</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/calculator_link.png" border="0" style="cursor:pointer;" title="User Calendars Categories" alt=" User Calendars Categories" /></td>
                                                  <td>User Calendars Categorie</td>
                                                  <td>Manages categorie like Ro,vechicles,customers etc</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/database.png" border="0" style="cursor:pointer;" title="User RO Goals" alt=" User  RO Goals" /></td>
                                                  <td>User  RO Goals</td>
                                                  <td>To add Repair order Goal,edit and also delete.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/money_dollar.png" border="0" style="cursor:pointer;" title="Marketing Budget" alt="Marketing Budget" /></td>
                                                  <td>Marketing Budget</td>
                                                  <td>To show budget records from tbl_budget' table and  can add budget items.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/money.png" border="0" style="cursor:pointer;" title="Marketing Budget Map" alt="Marketing Budget Map" /></td>
                                                  <td>Marketing Budget Map</td>
                                                  <td>To show Year wise reports of gross sales and percentage of gross sales and total gross sales.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom_in.png" title="Marketing Survey" alt="Marketing Survey" /></td>
                                                  <td>Marketing Survey</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_green.png" title="Marketing Survey Report" alt="Marketing Survey Report" /></td>
                                                  <td>Marketing Survey Report</td>
                                                  <td>To take feedback from customer.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom_out.png" title="Website Survey" alt="Website Survey" /></td>
                                                  <td>Website Survey</td>
                                                  <td>To take feedback from customer through online</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page_red.png" title="Website Survey Report" alt="Website Survey Report" /></td>
                                                  <td>Website Survey Report</td>
                                                  <td>To make report from the feedback given by customers through website</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/zoom.png" title="Survey" alt="Survey" /></td>
                                                  <td>Survey</td>
                                                  <td>To take feedback from customer.Integrated survey</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/page.png" title="Survey Report" alt="Survey Report" /></td>
                                                  <td>Survey Report</td>
                                                  <td>To make a report from the feedback given by customers through integrated survey.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/timeline_marker.png" title="Online Tests" alt="Online Tests" /></td>
                                                  <td>Online Tests</td>
                                                  <td>This report consists of links in which we can check the site rankings ,site errors and also by which language website is developed etc.can be known by this page(online-tests). </td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Google Serp's" alt="Google Serp's" /></td>
                                                  <td>Google Serp's</td>
                                                  <td>It consists of seo  images from google.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Bing Serp's" alt="Bing Serp's" /></td>
                                                  <td>Bing Serp's</td>
                                                  <td>It consists of seo  images from Bing.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/images.png" title="Yahoo Serp's" alt="Yahoo Serp's" /></td>
                                                  <td>yahoo Serp's</td>
                                                  <td>It consists of seo  images from Yahoo.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/time_go.png" title="What if Scenarios" alt="What if Scenarios" /></td>
                                                  <td>What if Scenarios</td>
                                                  <td>To calculate Calculate What if Scenario,add ,edit and also delete.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                            <!--  <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/google-small.png" title="Google Serach" alt="Google Serach" /></td>
                                                  <td>Google Serach</td>
                                                  <td>Description</td>
                                              </tr>  
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/yahoo-small.png" title="Yahoo Serach" alt="Yahoo Serach" /></td>
                                                  <td>Yahoo Serach</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/bing-small.png" title="Bing Serach" alt="Bing Serach" /></td>
                                                  <td>Bing Serach</td>
                                                  <td>Description</td>-->
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/site-ins.png" title="Site Inspection" alt="Site Inspection" /></td>
                                                  <td>Site Inspection</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cd.png" title="Confirmed Directories" alt="Confirmed Directories" /></td>
                                                  <td>Confirmed Directories</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/competitors.png" title="Competitors" alt="Competitors" /></td>
                                                  <td>Competitors</td>
                                                  <td>To show the competors from tbl_competors' table.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/building.png" title="Near city Search" alt="Near city Search" /></td>
                                                  <td>Near city Search</td>
                                                  <td>To show near by cities.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/print.gif" title="Print" alt="Print" /></td>
                                                  <td>Print</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/export.png" title="Export Keyword List" alt="Export Keyword List" /></td>
                                                  <td>Export Keyword List</td>
                                                  <td>To export all keywords based on the list selected.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/tag-export.png" title="Export Brands List" alt="Export Brands List" /></td>
                                                  <td>Export Brands List</td>
                                                  <td>To export all top brands based on the list selected.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/download.png" title="Export All List" alt="Export All List" /></td>
                                                  <td>Export All List</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/map.png" title="MIS Users Map" alt="MIS Users Map" /></td>
                                                  <td>MIS Users Map</td>
                                                  <td>To show MIS users data map</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/data-server.png" title="MIS Users Daily Data" alt="MIS Users Daily Data" /></td>
                                                  <td>MIS Users Daily Data</td>
                                                  <td>Description</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/lockedbyuser.gif" title="Account Locked for Login. Click to Unlock!!!" alt="Locked for login" /></td>
                                                  <td>Account Locked for Login. Click to Unlock!!!</td>
                                                  <td>TO unlock the customers</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/viewmmsdata.png" title="View MMS Data" alt="View MMS Data" /</td>
                                                  <td>View MMS Data</td>
                                                  <td>To show all the year wise reports of total ros,total customers,total vehicles,total emails,total transaction details,gross sales,comparative gross sales variance for ros,customers,vehicles,and also showing year wise,month-wise ands week-wise reports  and also showing new customers reports in this particular page(customer dashboard).</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/create_report.png" title=" Manage Make Reports" alt="Manage Make Reports" /></td>
                                                  <td>Manage Make Reports</td>
                                                  <td>To show make reports of the vechicles from XML_ro table</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/model.gif" title=" Manage Model Reports" alt="Manage Model Reports" /></td>
                                                  <td>Manage Model Reports</td>
                                                  <td>To show  model reports of the vechicles from XML_ro table</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/count.gif" title=" Manage Customer Counts" alt="Manage Customer Counts" /></td>
                                                  <td> Manage Customer Counts</td>
                                                  <td>To show customers Counts By Customer Visits.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/spendings.png" title="Manage Customer Spendings" alt="Manage Customer Spendings" /></td>
                                                  <td>Manage Customer Spendings</td>
                                                  <td>To show customers Spendings By Customer Visits.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/totalreports.png" title="Manage Total Reports" alt="Manage Total Reports" /></td>
                                                  <td>Manage Total Reports</td>
                                                  <td>To show all the customers count who are last visited and first time visited the shop those details are shown in this particular report and also showing last time visited difference and first time visited difference.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customervisits.png" title="Manage Customer Visits" alt="Manage Customer Visits" /></td>
                                                  <td>Manage Customer Visits</td>
                                                  <td>manage xml customer visit reports</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                              <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/changepassword.png" title="User Password Change" alt="User Password Change" /> </td>
                                                  <td>User Password Change</td>
                                                  <td>To change customer password</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customeranalysis.png" title="Customer Analysis" alt="Customer Analysis" /> </td>
                                                  <td>Customer Analysis</td>
                                                  <td>To show year wise reports of total customers,total ros,total vehicles,total parts sales,total sales,net discounts,comparative gross sales, average ro (b4 discount), average ro(after discount),Parts to Labor Ratio  (After Discount),Parts Sales as % of Sales,Average Discount Per RO and Labor Sales as a % of Sales are shown in this report.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/customerspendings.png" title="Customer Visit Wise Spend Report" alt="Customer Visit Wise Spend Report" /> </td>
                                                  <td>Customer Visit Wise Spend Report</td>
                                                  <td>To show customers Spendings By Customer Visits.</td>
                                              </tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/vehicles.gif" title="Top Ten Vehicles Report" alt="Top Ten Vehicles Report" /> </td>
                                                  <td>Top Ten Vehicles Report</td>
                                                  <td>To show top ten vehicles from entire database</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/Calculator.png" title="RO Calculations Report" alt="RO Calculations Report" /> </td>
                                                  <td>RO Calculations Report</td>
                                                  <td>In this report we are calculating year wise repair orders(RO'S) upto current year and current month and also calculating Total Labor Sales,Total Parts Sales,Total HazardWaste Amount,Total Shopsuplies Amount,Total Tax Amount,Total Gross Sales,Total Discount Sales,Total Net Sales.</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/cal-week.gif" title="Week Wise Gross sale Report" alt="Week Wise Gross sale Report" /> </td>
                                                  <td>Week Wise Gross sale Repor</td>
                                                  <td>To show Gross sales after discount.This report(page) we are calculating Total Gross sales(after discounts) based on a week,and also showing colors red,green,blue,black.we shows RED IF it is one of the 30 LOWEST IN DOLLARS – AFTER DISCOUNTS days in the year. GREEN if it is one of the 30 best days of the year. BLACK for all the rest.   </td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/calendar_day.png" title="Day Wise Gross sale Report" alt="Day Wise Gross sale Report" /> </td>
                                                  <td>Day Wise Gross sale Report</td>
                                                  <td>To show Gross sales after discount.This report(page) we are calculating Total Gross sales(after discounts) based on a day and also showing colors red,green,blue,black. We are showing same coloring – 30 LOWEST, 30 HIGHEST, and BLACK for the rest. The difference in the two reports is how the days are aligned. So in the a report we can see if it is dependent upon a day of the week, and in report B we can see if it is dependent upon the date of the year.  </td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/manage_staff.jpg" title="ManageStaff" alt="ManageStaff" /> </td>
                                                  <td>ManageStaff</td>
                                                  <td>To create and edit the staff of cusotmers</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <!--<tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/menu_permission.gif" title="MenuPermission" alt="MenuPermission" /> </td>
                                                  <td>MenuPermission</td>
                                                  <td>Description</td>
                                              </tr> -->
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/rebate.gif" title="Rebate Reports" alt="Rebate Reports" /> </td>
                                                  <td>Rebate Reports</td>
                                                  <td>To show Customers rebate</td>
                                              </tr>
                                               <tr><td colspan="3" style="background-color:#000;"></td></tr>
                                               <tr>
                                                  <td> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/average.jpg" title="Average records" alt="Average records" /> </td>
                                                  <td>Average records</td>
                                                  <td>This report(page) is for customers to show average records(i.e) in this report  we are showing  year wise averages like average gross customers, average gross sales, average comparative gross sales,average variance are showing for the partcular year.</td>
                                              </tr>
                                              
                                              </table>
                                          </div>
                                          <!--legend panel -->
				  </div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/ajax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.alerts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.alerts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/js/jquery.ufvalidator-1.0.4.js"><?php echo '</script'; ?>
>
<?php }
}
