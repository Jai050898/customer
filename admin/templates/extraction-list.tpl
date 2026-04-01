{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css"  media="screen" rel="stylesheet" type="text/css">
<link href="{$siteurl}/css/print_stylesheet.css" media="print" rel="stylesheet" type="text/css"  >
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
								  <li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
                                                                  <li>Extraction List </li>
							  </ul>
							<div class="clr"></div>
						</div>
                                                                  <div id="admin_head">Extraction List <span style="float:right;margin-right:10px;">  <a href="javascript:void(0);" id="printPage"><img alt="Print" title="Print" src="{$siteurl}/images/print.gif"></a> <a href="{$siteurl}/admin/export-extractionList.php" ><img alt="Export Keyword List" title="Export Keyword List" src="{$siteurl}/images/export.png"></a>  </span></div> 
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUsers" class="form" method="post" name="ManageUsers">
						<table width="100%" cellspacing="0" cellpadding="0" id="print_content">
							<tr>
							 	<td height="10" colspan="2">
							 	<input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
						<input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
							 	</td>
							</tr>
							<tr> 
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table info_border">
									<tr>
										<th width="3%" align="left" ><a href="javascript: setClientSort('A.user_id','{$sortioption}',document.ManageUsers);">ID</a> {if $smarty.request.sortby eq 'company_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}</th>
										<th width="3%" align="left">
										<a href="javascript: setClientSort('A.company_name','{$sortioption}',document.ManageUsers);">Customer Name</a> {if $smarty.request.sortby eq 'company_name'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}</th>
                                                                                <th width="1%" align="left" >&nbsp;</th>
                                                                                <th width="6%" align="left" >Customer Total</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="9%" align="left" >Customer Total ({$lastYear})</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="9%" align="left" >Gross Sale ({$lastYear})</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
										<th width="6%" align="left" >RO Total ({$lastYear})</th>
                                                                                <th width="2%" align="left" >&nbsp;</th>
                                                                                <th width="6%" align="left" >Average RO ({$lastYear})</th>
                                                                                 <th width="2%" align="left" class="th_width" >&nbsp;</th>
                                                                                <th width="10%" align="left" class="th_width">Avg. Customer lifetime value</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="9%" align="left" class="th_width">12 mo lifespan</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Total lifespan</th>
                                                                                <th width="1%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Total Emails</th>
                                                                                <th width="2%" align="left" class="th_width">&nbsp;</th>
                                                                                <th width="8%" align="left" class="th_width">Last Import Date</th>
                                                                                
                                                                                
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left" class="th_width">{$item.user_id}</td>
											<td align="left"><a href="{$siteurl}/admin/view-user.php?user_id={$item.user_id}">{$item.company_name|stripslashes}</a></td>
                                                                                        <td>&nbsp;</td>
											<td align="right" >{$item.custTotal|number_format:0:".":","}</td>
                                                                                        <td>&nbsp;</td>
											<td align="right" >{$item.custTotalLastYear|number_format:0:".":","}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{if $item.grossSale neq 0} ${$item.grossSale|number_format:2:".":","}{else} 0{/if}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{$item.roTotal|number_format:0:".":","}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{if $item.averageRO neq 0} {$item.averageRO|number_format:2:".":","} {else}0{/if}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" > ${$item.avgCustLifetimeValue|number_format:2:".":","}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{$item.last12monthsavgVisits}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{$item.avgVisits}</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >
                                                                                        <a href="https://www.autorepairmarketing.com/customer/admin/last-visited-customer-emails.php?user_id={$item.user_id}">{$item.LastVisitedCustEmailCnt|number_format:0:".":","}</a></td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td align="right" >{$item.invoicedate|date_format:"%b %d,%Y"}</td>
										</tr>
									{foreachelse}
										<tr>
										  <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No Users Added</strong></font></th>
										</tr>
									{/foreach}
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

{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
 <script lang='javascript'>
 $(document).ready(function(){
  $('#printPage').click(function(){
        var data = '<input type="button" value="Print this page" onClick="window.print()">';           
        data += '<div id="div_print">';
        data += $('#print_content').html();
        data += '</div>';

        myWindow=window.open('','','width=800,height=500');
        myWindow.innerWidth = screen.width;
        myWindow.innerHeight = screen.height;
        myWindow.screenX = 0;
        myWindow.screenY = 0;
        myWindow.document.write(data);
        myWindow.focus();
    });
 });
 </script>
 {/literal}
