{include file="header.tpl"}
<div id="bodypart">
      <div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
		<div id="innerleft">
			<div class="admin-rightpart">
				<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							  <li><a href="{$siteurl}/dashboard.php">Home</a></li>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$TotalClients}</strong></div>
										<div class="clr" style="height:15px;"></div>

										<div style="float:left; width:120px; padding-left:20px;">Active Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$ActiveClients}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$InActiveClients}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Clients</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$DeletedClients}</strong></div>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$Totalcustomers}</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$Activecustomers}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$InActivecustomers}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Customers</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$Deletedcustomers}</strong></div>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$TotalAlbums}</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$ActiveAlbums}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$InActiveAlbums}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Albums</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$DeletedAlbums}</strong></div>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$TotalProjects}</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$ActiveProjects}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$InActiveProjects}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Projects</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$DeletedProjects}</strong></div>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$TotalTasks}</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$ActiveTasks}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Inactive Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$InActiveTasks}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Tasks</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$DeletedTasks}</strong></div>
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
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$TotalBlogs}</strong></div>
										<div class="clr" style="height:15px;"></div>
										  
										<div style="float:left; width:120px; padding-left:20px;">Active Blogs</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$ActiveBlogs}</strong></div>
										<div class="clr" style="height:15px;"></div>
										
										<div style="float:left; width:120px; padding-left:20px;">Deleted Blogs</div>
										<div style="float:left;width:10px">&nbsp;</div>					
										<div style="float:left;width:35px; padding-right:25px;" align="right"><strong>{$DeletedBlogs}</strong></div>
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
									<div style="float:left; width:100px; ">{$CustomersToday}</div>
									<div style="float:left; width:100px; ">{$CustomersWeek}</div>
									<div style="float:left; width:100px; ">{$CustomersMnth}</div>
									<div style="float:left; width:112px; ">{$CustomersYear}</div>
									<div style="float:left; width:100px; ">{$Totalcustomers}</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Clients</strong></div>
									<div style="float:left; width:100px; ">{$ClientsToday}</div>
									<div style="float:left; width:100px; ">{$ClientsWeek}</div>
									<div style="float:left; width:100px; ">{$ClientsMnth}</div>
									<div style="float:left; width:112px; ">{$ClientsYear}</div>
									<div style="float:left; width:100px; ">{$TotalClients}</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Albums</strong></div>
									<div style="float:left; width:100px; ">{$AlbumsToday}</div>
									<div style="float:left; width:100px; ">{$AlbumsWeek}</div>
									<div style="float:left; width:100px; ">{$AlbumsMnth}</div>
									<div style="float:left; width:112px; ">{$AlbumsYear}</div>
									<div style="float:left; width:100px; ">{$TotalAlbums}</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Projects</strong></div>
									<div style="float:left; width:100px; ">{$ProjectsToday}</div>
									<div style="float:left; width:100px; ">{$ProjectsWeek}</div>
									<div style="float:left; width:100px; ">{$ProjectsMnth}</div>
									<div style="float:left; width:112px; ">{$ProjectsYear}</div>
									<div style="float:left; width:100px; ">{$TotalProjects}</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Tasks</strong></div>
									<div style="float:left; width:100px; ">{$TasksToday}</div>
									<div style="float:left; width:100px; ">{$TasksWeek}</div>
									<div style="float:left; width:100px; ">{$TasksMnth}</div>
									<div style="float:left; width:112px; ">{$TasksYear}</div>
									<div style="float:left; width:100px; ">{$TotalTasks}</div>
									<div class="clr"></div>
								</div>
								<div class="clr" style="height:10px;"></div>
								<div style="border-bottom:1px dotted  #CCC;padding:3px 0px; padding-top:10px;">
									<div style="float:left; width:135px; padding-left:10px;"><strong>Blogs</strong></div>
									<div style="float:left; width:100px; ">{$BlogsToday}</div>
									<div style="float:left; width:100px; ">{$BlogsWeek}</div>
									<div style="float:left; width:100px; ">{$BlogsMnth}</div>
									<div style="float:left; width:112px; ">{$BlogsYear}</div>
									<div style="float:left; width:100px; ">{$TotalBlogs}</div>
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
{include file="footer.tpl"}