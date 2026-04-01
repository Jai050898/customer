<?php /* Smarty version 2.6.26, created on 2013-06-15 02:41:02
         compiled from dashboard.tpl */ ?>
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
/dashboard.php">Home</a></li>
							  <li>DashBoard</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> DashBoard</div>
				  </div>
				<div class="ad_textsp">
				 <table width="100%" cellspacing="0" cellpadding="0">
					  <tr>
						<td align="center" valign="top">
							<table width="500" cellspacing="0" cellpadding="0">
								<tr>
									<td align="left">&nbsp;</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="left" valign="top">
							
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:35px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Customer Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
									<div style="padding:3px 0px;">
										
										<div style="float:left; width:120px; padding-left:20px;">Total Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $this->_tpl_vars['Totalcustomers']; ?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $this->_tpl_vars['Activecustomers']; ?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $this->_tpl_vars['InActivecustomers']; ?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $this->_tpl_vars['Deletedcustomers']; ?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
									</div>
									<div class="clr"></div>
								</div>
								<div class="cp_bottom">
									<div class="cp_bottom_L"></div>
									<div class="cp_bottom_R"></div>
								</div>
								</div>
								<div class="clr"></div>
							</div>
							
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="curvepannel" style="margin-left:30px;width:800px; padding-top:25px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:700px;">Calender Statistics&nbsp;</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CalenderDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
								<div style="border-bottom:1px solid #CCC;padding-bottom:3px;">	
									<div style="float:left; width:142px"><strong>&nbsp;</strong></div>
									<div style="float:left; width:100px"><strong>Today</strong></div>
									<div style="float:left; width:100px"><strong>This Week</strong></div>
									<div style="float:left; width:100px"><strong>This Month</strong></div>
									<div style="float:left; width:100px"><strong>This Year</strong></div>
									<div style="float:left; width:100px; padding-left:15px;"><strong>Total</strong></div>
									<div class="clr"></div>
								</div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Customers</strong></div>
									<div style="float:left; width:100px; "><?php echo $this->_tpl_vars['CustomersToday']; ?>
</div>
									<div style="float:left; width:100px; "><?php echo $this->_tpl_vars['CustomersWeek']; ?>
</div>
									<div style="float:left; width:100px; "><?php echo $this->_tpl_vars['CustomersMnth']; ?>
</div>
									<div style="float:left; width:112px; "><?php echo $this->_tpl_vars['CustomersYear']; ?>
</div>
									<div style="float:left; width:100px; "><?php echo $this->_tpl_vars['Totalcustomers']; ?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
			
								
								</div>
								
								<div class="cp_bottom">
									<div class="cp_bottom_L"></div>
									<div class="cp_bottom_R"></div>
								</div>
								</div>
								<div class="clr"></div>
							</div>
						</td>
					</tr>
					<tr>
						<td height="200" align="left" valign="top">&nbsp;</td>
					</tr>
				</table>
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