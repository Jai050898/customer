{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
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
                                                                  <li>Extraction List</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Extraction List</div>
				  </div>
				  <div class="ad_textsp">
					<form id="ManageUsers" class="form" method="post" name="ManageUsers">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
									<tr>
										<th width="3%" align="left">ID</th>
										<th width="20%" align="left">Customer Name</th>
                                                                                <th width="1%" align="left">&nbsp;</th>
                                                                                <th width="11%" align="left">Customer Total</th>
                                                                                <th width="2%" align="left">&nbsp;</th>
										<th width="15%" align="left">Customer Total ({$lastYear})</th>
                                                                                <th width="4%" align="left">&nbsp;</th>
										<th width="12%" align="left">Gross Sale ({$lastYear})</th>
                                                                                <th width="4%" align="left">&nbsp;</th>
										<th width="11%" align="left">RO Total ({$lastYear})</th>
                                                                                <th width="4%" align="left">&nbsp;</th>
                                                                                <th width="13%" align="left">Average RO ({$lastYear})</th>
                                                                                <th width="1%" align="left">&nbsp;</th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr style="background-color:{cycle values='#ffffff,#f3f3f3'};">
											<td align="left">{$item.user_id}</td>
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
