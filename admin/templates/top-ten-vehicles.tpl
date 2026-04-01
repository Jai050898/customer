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
								  <li><a href="{$siteurl}/admin/manage-xml-vehicles.php">Manage XML Vehicles</a></li>
								 
                                                                  <li>Top Ten Vehicles</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Top Ten Vehicles</div>
                                                </div>
                
                                            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                                                <input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
                                                <input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
                                                <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff">
                                                    <tr>
                                                            <td height="10" colspan="2"></td>
                                                    </tr> 
                                                    <tr>
                                                            <td align="left" valign="top" colspan="2">
                                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff"  class="tableinnercontent">
                                                                       <tr bgcolor="#854141" style="color:#ffffff;">
                                                                        <th>#</th>
                                                                        <th>Top Ten Makes</th>
                                                                        <th>Top Ten Models</th>
                                                                    </tr>
                                                                    {foreach item=item name=item from=$vehicle}
                                                                                    <tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
                                                                            <td>{$smarty.foreach.item.index+1}</td>
                                                                            <td>{$item.make} ({$item.makeCnt})</td>
                                                                            <td>{$item.model} ({$item.modelCnt})</td>
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
