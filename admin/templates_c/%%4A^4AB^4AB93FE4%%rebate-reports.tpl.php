<?php /* Smarty version 2.6.26, created on 2014-03-24 03:13:57
         compiled from rebate-reports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'rebate-reports.tpl', 72, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
								  <li>Rebate Reports</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Rebate Reports<div class="admin_nav" style="float:right;font-weight:bold;">
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
							  <td><h2>Rebate</h2></td>
							 
							</tr>
							<tr>
							  
							</tr>
						
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												
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
							
							
							
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
									        <th align="left">S.No </th>                                                            									      		<th align="center">Batched ON </th>

									
<!--                                                                    	      <th width="6%" align="left">Company Name</th>
                                                                          
                                                                            <th width="6%" align="left">Full Name</th>
                                                                                <th width="6%" align="left">Address</th>
                                                                                <th width="6%" align="left">City</th>
                                                                                <th width="6%" align="left">State</th>
                                                                                <th width="6%" align="left">Zip</th>
										<th width="6%" align="left">Amount Spent</th>
										<th width="6%" align="left">Rebate</th>
																				<th width="6%" align="left">Start Date</th>
										<th width="6%" align="left">End Date</th>-->

									</tr> 
									<?php $_from = $this->_tpl_vars['rebate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
											<td align="left">
										<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>

										</td>
		 <td style="color:#000000;text-align:center;"><a href="view-report.php?user_id=<?php echo $_REQUEST['user_id']; ?>
&date=<?php echo $this->_tpl_vars['item']['batch_date']; ?>
"><?php echo $this->_tpl_vars['item']['batch_date']; ?>
</a>
                                                                                        
										</td>
	<!--										<td align="left">
										<?php echo $this->_tpl_vars['item']['company_name']; ?>

											</td>
                                                                                	<td align="left"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['address1']; ?>
</td>
											<td align="left"><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['state']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['zip']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['amountSpent']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['rebate']; ?>
</td>
                                                                                        <td align="left"><?php echo $this->_tpl_vars['item']['batch_start_date']; ?>
</td>
                             
                                                                                         <td align="left"><?php echo $this->_tpl_vars['item']['batch_end_date']; ?>
</td>
                       
				
</td>-->
                                                                                        
										</tr>
									<?php endforeach; else: ?>
										<tr>
										  <th width="100%" align="center" colspan="1"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									<?php endif; unset($_from); ?>
								  </table>
								</td>
							</tr>
							
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
/admin/js/jquery.ufvalidator-1.0.4.js"></script>