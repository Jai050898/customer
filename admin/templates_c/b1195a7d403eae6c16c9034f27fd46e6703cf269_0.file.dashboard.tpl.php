<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:08:07
  from '/var/www/html/admin/templates/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbab17c5a1c9_87913030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1195a7d403eae6c16c9034f27fd46e6703cf269' => 
    array (
      0 => '/var/www/html/admin/templates/dashboard.tpl',
      1 => 1774346226,
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
function content_69cbab17c5a1c9_87913030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:8px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Client Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
									<div style="padding:3px 0px;">
										<div style="float:left; width:120px; padding-left:20px;">Total Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['TotalClients']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>

										<div style="float:left; width:120px; padding-left:20px;">Active Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['ActiveClients']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['InActiveClients']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['DeletedClients']->value;?>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Totalcustomers']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Activecustomers']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['InActivecustomers']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['Deletedcustomers']->value;?>
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
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:35px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Album Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
									<div style="padding:3px 0px;">
										
										<div style="float:left; width:120px; padding-left:20px;">Total Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['TotalAlbums']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['ActiveAlbums']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['InActiveAlbums']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['DeletedAlbums']->value;?>
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
						<td align="left" valign="top">
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:8px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Project Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
									<div style="padding:3px 0px;">
										
										<div style="float:left; width:120px; padding-left:20px;">Total Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['TotalProjects']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['ActiveProjects']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['InActiveProjects']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['DeletedProjects']->value;?>
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
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:35px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Task Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px;">
									<div style="padding:3px 0px;">
										
										<div style="float:left; width:120px; padding-left:20px;">Total Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['TotalTasks']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['ActiveTasks']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['InActiveTasks']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['DeletedTasks']->value;?>
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
							<div class="curvepannel" style="width:250px;float:left; padding-top:10px;padding-left:35px;">
								<div class="cp_top">
									<div class="cp_top_L">
										<div style="float:left;width:180px;">Blog Statistics</div>
									</div>
									<div class="cp_top_R"></div>
								</div>
								<div id="CompaniesDiv">
								<div class="cp_midcontent" style="padding-left:5px; min-height:135px;">
									<div style="padding:3px 0px;">
										
										<div style="float:left; width:120px; padding-left:20px;">Total Blogs</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['TotalBlogs']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Blogs</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['ActiveBlogs']->value;?>
</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Blogs</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong><?php echo $_smarty_tpl->tpl_vars['DeletedBlogs']->value;?>
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
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['CustomersToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['CustomersWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['CustomersMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['CustomersYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['Totalcustomers']->value;?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Clients</strong></div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ClientsToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ClientsWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ClientsMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['ClientsYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TotalClients']->value;?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Albums</strong></div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['AlbumsToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['AlbumsWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['AlbumsMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['AlbumsYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TotalAlbums']->value;?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Projects</strong></div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ProjectsToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ProjectsWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['ProjectsMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['ProjectsYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TotalProjects']->value;?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Tasks</strong></div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TasksToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TasksWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TasksMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['TasksYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TotalTasks']->value;?>
</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Blogs</strong></div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['BlogsToday']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['BlogsWeek']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['BlogsMnth']->value;?>
</div>
									<div style="float:left; width:112px; "><?php echo $_smarty_tpl->tpl_vars['BlogsYear']->value;?>
</div>
									<div style="float:left; width:100px; "><?php echo $_smarty_tpl->tpl_vars['TotalBlogs']->value;?>
</div>
									<div class="clr"></div>
								</div>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
