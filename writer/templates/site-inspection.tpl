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
								  <li><a href="{$siteurl}/writer/dashboard.php">Home</a></li>
								  <li><a href="{$siteurl}/writer/manage-users.php">Manage Users</a></li>
								  <li>Site Inspection</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head">Site Inspection</div>
					  </div>
					<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							 	<td height="10" colspan="2"></td>
							</tr>
							<tr>
							  <td><h2>Customer Information</h2></td>
							  <td align="right">&nbsp;</td>
							</tr>
							<tr>
							  <td  colspan="2">
							  	<table>
								<tr>
								<td align="right"><strong>Company Name :</strong></td>
								<td align="left">{$CustInfo.company_name|stripslashes}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Email :</strong></td>
								<td align="left">{$CustInfo.email}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Address :</strong></td>
								<td align="left">{$CustInfo.address}</td>
								</tr>
								<tr>
								<td align="right"><strong>City :</strong></td>
								<td align="left">{$CustInfo.city}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>State :</strong></td>
								<td align="left">{$CustInfo.state}</td>
								<td style="width:150px;">&nbsp;</td>
								<td align="right"><strong>Country :</strong></td>
								<td align="left">{$CustInfo.country}</td>
								</tr>
								</table>
							  </td>
							</tr>

						</table>
				<div class="clr" style="height:15px;"></div>		
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript: $('#hid_key').val('Post');">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">							
										<tr>
											<td colspan="2"><h2>Setup Pages</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Privacy:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[privacy]" value="Y" id="privacy" {if $Cat.privacy eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">TOS:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[tos]" value="Y" id="tos" {if $Cat.tos eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Disclaimer:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[disclaimer]" value="Y" id="disclaimer" {if $Cat.disclaimer eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Copyright:</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[copyright]" value="Y" id="copyright" {if $Cat.copyright eq "Y"} checked="checked"{/if} />
											 </td>
										</tr>
										<tr>
											<td colspan="2"><h2>Keywords</h2></td>
										  </tr>
										<tr class="color_trbg">
												<td valign="top">Primary Automotive Services</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
													<tr>
													{foreach item=item name=item from=$KEY}
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="services[]" id="services" {if $KEYarray neq '' && in_array($item.key_id, $KEYarray)} checked="checked" {/if} value="{$item.key_id}" />&nbsp;{$item.key_name|stripslashes}</td>
													{if $smarty.foreach.item.iteration%5 eq 0}
													</tr><tr>
													{/if}
													{/foreach}
												</tr>
												</table>	
														
												</td>
											  </tr>
										
										<tr>
											<td colspan="2"><h2>Brands</h2></td>
										  </tr>
                                        <tr class="color_trbg">
												<td valign="top">Primary Brands</td>
												<td align="left">
												<table width="100%" border="0" cellspacing="5" cellpadding="5">
						
						{foreach item=item name=item from=$Brands}
						{if $item.Brands|@count gt 0}
						<tr>
						<td><b>{$item.name}</b></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						
						{foreach item=item1 name=item1 from=$item.Brands}
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" {if $Brandsarray neq '' && in_array($item1.brand_id, $Brandsarray)} checked="checked" {/if} value="{$item1.brand_id}" />&nbsp;{$item1.brand_name|stripslashes}</td>
						{if $smarty.foreach.item1.iteration%2 eq 0}
						</tr><tr>
						{/if}
						{/foreach}
						
						</tr>
						</table>
						</td>
						</tr>
						{/if}
						{/foreach}
						<tr>
						<td><strong>Others</strong></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						{foreach item=item name=item from=$Rbrands}
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" {if $Brandsarray neq '' && in_array($item.brand_id, $Brandsarray)} checked="checked" {/if} value="{$item.brand_id}" />&nbsp;{$item.brand_name|stripslashes}</td>
						{if $smarty.foreach.item.iteration%2 eq 0}
						</tr><tr>
						{/if}
						{/foreach}
						</tr>
						</table>
						</td>
						</tr>
					</table>
												</td>
											  </tr>
										
										<tr>
											<td align="right" valign="middle">&nbsp;</td>
											<td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
										</tr>
									<tr>
										  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
										  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
									</tr>
									</table>
								</form>
							</td>
							</tr>
							<tr>
								<td align="left" valign="top">&nbsp;</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#CatForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}