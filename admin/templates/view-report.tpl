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
								  <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
								  <li><a href="{$siteurl}/admin/rebate-reports.php?user_id={$smarty.request.user_id}">Rebate Reports</a></li>
							   <li>View Reports</li>
							  
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
						<input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
						<input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Rebate</h2></td>
							 
							</tr>
							<tr>
                            <td colspan="2" align="right">
                                  <div class="pagecount_info_divbox">
                                      Showing Records {$records_from} to {$records_to} of {$total}
                                      <div class="clr"></div>
                                  </div>
                            </td>
                        </tr> 
							<tr>
							  
							</tr>
						
								{if $Users|@count gt 0}
								<tr>
                                                                    <td colspan="2">
                                                                            <table width="100%" cellspacing="0" cellpadding="5">
                                                                                    <tr>
                                                                                           
                                                                                            <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
                                                                                    </tr>
                                                                            </table>
                                                                    </td>
								</tr>
							{/if}
							
							
							
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
									                                                                    									      		<th width="6%" align="left">Batch Date </th>

									
                                                                    	      <th width="6%" align="left">Company Name</th>
                                                                          
                                                                            <th width="6%" align="left">Full Name</th>
                                                                                <th width="6%" align="left">Address</th>
                                                                                <th width="6%" align="left">City</th>
                                                                                <th width="6%" align="left">State</th>
                                                                                <th width="6%" align="left">Zip</th>
										<th width="6%" align="left">Amount Spent</th>
                                                                                <th width="6%" align="left">Rebate Percentage</th>
                                                                                <th width="6%" align="left">Rebate </th>
										<th width="6%" align="left">Range</th>
										<th width="6%" align="left">Batch Start Date</th>
										<th width="6%" align="left">Batch End Date</th>
									</tr> 
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
		 <td style="color:#000000;text-align:center;">{$item.batch_date}
                                                                                        
										</td>
										<td align="left">
										{$item.company_name}
											</td>
                                                                                	<td align="left">{$item.fullname}</td>
											<td align="left">{$item.address1}</td>
											<td align="left">{$item.city}</td>
                                                                                        <td align="left">{$item.state}</td>
                                                                                        <td align="left">{$item.zip}</td>
                                                                                        <td align="left">{$item.amountSpent}</td>
                                                                                                                                                                  <td align="left">{$item.rebate_percent}</td>

                                                                                        <td align="left">{$item.rebate}</td>
                                                                                        <td align="left">{if $item.start_range gt 0 && $item.end_range gt 0 }{$item.start_range}-{$item.end_range}{else}No Range specified{/if}</td>

                                                                                        <td align="left">{$item.batch_start_date}</td>
                             
                                                                                         <td align="left">{$item.batch_end_date}</td>
                       
				
</td>
                                                                                        
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							
												{if $Users|@count gt 0}
								<tr>
									<td colspan="2">
										<table width="100%" cellspacing="0" cellpadding="5">
											<tr>
												
												<td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
											</tr>
										</table>
									</td>
								</tr>
							{/if}
							
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

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
