{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
                    {include file="right-bar.tpl"}
                    <div id="innerleft">
                      <div class="admin-rightpart">
                          <div class="admin-rightpart">
                              <div class="admin_topbgnav">
                          	<div id="admin_bcrumb">
                            	<ul>
                                    <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
                                    <li>Last Visited Customer Total Emails Report</li>
                            	</ul>
                            	<div class="clr"></div>
                          	</div>
                          	<div id="admin_head">Last Visited Customer Total Emails Report</div>
                        	</div>
                            	<div id="contentpane">
                      		    <div class="bodyleft">
					<form id="ManageCustomers" class="form" method="post" name="ManageCustomers">
					    <input type="hidden" name="hid_key" id="hid_key" value="" />
					    <input type="hidden" name="hid_type" id="hid_type" value="" />
					    <input type="hidden" name="hid_id" id="hid_id" value="" />
					    <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
					    <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
					    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
						<tr>
							<td height="10" colspan="2"></td>
						</tr>
						<tr>
							<td align="left" valign="top" colspan="2">
							  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141"  class="tableinnercontent">
								<tr>
								        <th bgcolor="#854141" style="color:#fff;">S. No</th>
								        <th bgcolor="#854141" style="color:#fff;">Year</th>
								        <th bgcolor="#854141" style="color:#fff;">Last Time Visited Customer Emails</th>
								</tr>
								{foreach item=item name=item from=$yearArr}
								    <tr>
								        <td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
								        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.year}</td>
								        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">{$item.emailCnt}</td>
								    </tr>
								{foreachelse}
								    <tr>
								        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Records Found</strong></font></th>
								    </tr>
								{/foreach}
							  </table>
							</td>
						</tr>
					    </table>
					</form>
					 <div class="clear"></div>
				  </div>
			   <div class="clear"></div>

			 </div>           
       <!--end of contentpane -->
                      </div>
                    </div>
		</div>
	</div>
</div>

