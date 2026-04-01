<?php /* Smarty version 2.6.26, created on 2012-09-18 02:31:19
         compiled from view-stats.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'view-stats.tpl', 57, false),array('modifier', 'date_format', 'view-stats.tpl', 60, false),array('modifier', 'count', 'view-stats.tpl', 73, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
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
								  <li>Link Statistics</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Link Statistics</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageStats" class="form" method="post" name="ManageStats">
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
							  <td><h2>Link Statistics <?php if ($this->_tpl_vars['url'] != ""): ?>For <?php echo $this->_tpl_vars['url']; ?>
<?php endif; ?></h2></td>
							  <!--<td align="right"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-user.php">Add User</a></td>-->
							</tr>
							<tr>
							  <td  colspan="2">
								<div class="search_divbox">
									<input type="text" name="clicked_date" id="clicked_date" value="<?php if ($_REQUEST['clicked_date'] != ""): ?><?php echo $_REQUEST['clicked_date']; ?>
<?php endif; ?>" class="searchinput" />&nbsp;
									<input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
									<input type="image" src="../images/go_but.png" onclick="document.ManageStats.submit();" /> 
									<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageStats,'chkall[]','checkall');" /></th>
										<th width="20%" align="left"><a href="javascript: setClientSort('B.first_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageStats);">Customer Name</a> <?php if ($_REQUEST['sortby'] == 'B.first_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="18%" align="left"><a href="javascript: setClientSort('A.clicked_date','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageStats);">Clicked Date <?php if ($_REQUEST['sortby'] == 'A.clicked_date'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
										<th width="12%" align="left">IP </th>
										<th width="35%" align="left">Browser</th>
										<th width="10%" align="left">Status</th>
									</tr>
									<?php $_from = $this->_tpl_vars['Statistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
									<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
										<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['stat_id']; ?>
"/></td>
										<td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-user.php?user_id=<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo $this->_tpl_vars['item']['first_name']; ?>
<?php echo $this->_tpl_vars['item']['last_name']; ?>
</a></td>
										<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['clicked_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b %d,%Y %I:%M:%S %p") : smarty_modifier_date_format($_tmp, "%b %d,%Y %I:%M:%S %p")); ?>
</td>
										<td align="left"><?php echo $this->_tpl_vars['item']['clicked_ip']; ?>
</td>
										<td align="left"><?php echo $this->_tpl_vars['item']['clicked_browser']; ?>
</td>
										<td align="left"><?php if ($this->_tpl_vars['item']['status'] == 'A'): ?><span style="color:#008000">Active</span><?php elseif ($this->_tpl_vars['item']['status'] == 'I'): ?><span style="color:#FF0000">Inctive</span><?php elseif ($this->_tpl_vars['item']['status'] == 'D'): ?><span style="color:#800000">Deleted</span><?php endif; ?></td>
									</tr>
									<?php endforeach; else: ?>
									<tr>
									 	<th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Statistics Found</strong></font></th>
									</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							<?php if (count($this->_tpl_vars['Statistics']) > 0): ?>
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												<td  align="left" bgcolor="#854141">
													<input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageStats,'A','chkall[]');"/>
													<input name="input" type="button"  value="Inactive" onclick="javascript:SetStatus(document.ManageStats,'I','chkall[]');" />
													<input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageStats,'D','chkall[]');"/>
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
/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(document).ready(function() {	
	$("#clicked_date").datepicker();
		});	
</script>
'; ?>