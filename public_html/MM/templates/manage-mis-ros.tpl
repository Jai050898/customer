{include file=header.tpl}
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;">&nbsp;</span>
			<h1>Manage MIS Customers RO's</h1>
					<form id="ManageMISCustomers" class="form" method="post" name="ManageMISCustomers">
						<input type="hidden" name="hid_key" id="hid_key" value="" />
						<input type="hidden" name="hid_type" id="hid_type" value="" />
						<input type="hidden" name="hid_id" id="hid_id" value="" />
						<input type="hidden" name="sortby" value="{$smarty.request.sortby}" />
						<input type="hidden" name="sortoption" value="{$smarty.request.sortoption}" />
						<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<div class="search_divbox">
									<input type="text" name="keyword" id="keyword" value="{if $smarty.request.keyword neq ""}{$smarty.request.keyword}{/if}" class="searchinput" />
									<input type="image" src="images/go_but.png" onclick="document.ManageMISCustomers.submit();" style="vertical-align:bottom;" /> 
								 	<div class="clr"></div>
								</div>
							  </td>
							</tr>
							<tr>
								<td align="left" valign="top" colspan="2">
								  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
									<tr>
										<th bgcolor="#336699" style="color:#fff;">S. No</th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_type','{$sortioption}',document.ManageMISCustomers);">Type</a> {if $smarty.request.sortby eq 'MIS_type'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle"  />{/if}  </th>
										<th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('MIS_license','{$sortioption}',document.ManageMISCustomers);">License </a> {if $smarty.request.sortby eq 'MIS_license'}<img src="images/{$sortimoption}.gif" alt="" align="absmiddle" />{/if}</th>
										<th bgcolor="#336699" style="color:#fff;">Schedule Date</th>
										<th bgcolor="#336699" style="color:#fff;">Promised Date</th>
										<th bgcolor="#336699" style="color:#fff;">Balance Due</th>
									</tr>
									{foreach item=item name=item from=$Users}
										<tr>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$smarty.foreach.item.index+1}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.MIS_type}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;"><a href="{$siteurl}/view-mis-ro.php?hid={$item.MIS_id}"> {$item.MIS_license}</a></td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.MIS_sched}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.MIS_promised}</td>
											<td bgcolor="#f9f9f7" style="color:#000000;">{$item.MIS_balancedue}</td>
										</tr>
									{foreachelse}
										<tr>
										  <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No MIS Customers Ro's Added</strong></font></th>
										</tr>
									{/foreach}
								  </table>
								</td>
							</tr>
							{if $Users|@count gt 0}
								<tr>
							  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
								<tr>
								<td  align="left" bgcolor="#336699">&nbsp;		</td>
								<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;">{if $first neq ""}{$first}{/if}{if $prev neq ""}{$prev}{/if}{if $nav neq ""}{$nav}{/if}{if $next neq ""}{$next}{/if}{if $last neq ""}{$last}{/if}</div></td>
								</tr>
								</table>
								</td>
								</tr>
							{/if}
						</table>
					</form>
					<div class="clear"></div>
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>