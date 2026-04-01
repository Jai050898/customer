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
								  <li><a href="{$siteurl}/admin/manage-brands.php">Manage Brand</a></li>
								  <li>{if $smarty.request.brand_id neq ""}Edit{else}Add{/if} Brand</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head">{if $smarty.request.brand_id neq ""}Edit{else}Add{/if} Brand</div>
					  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
										<tr>
											<td colspan="2"><h2>{if $smarty.request.brand_id neq ""}Edit{else}Add{/if} Brand</h2></td>
										  </tr>
										<tr class="color_trbg">
										<td width="20%">Brand Category:</td>
										<td width="80%" align="left">
											<select name="Log[cid]" id="cid" class="select">
												<option value="">-- Select --</option>
												{foreach item=item name=item from=$BCats}
												<option value="{$item.id}" {if $item.id eq $Cat.cid} selected="selected"{/if}>{$item.name|stripslashes}</option>
												{/foreach}
											</select>
										 </td>
									  </tr>
										<tr class="color_trbg">
											<td width="20%">Brand Name <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[brand_name]" id="brand_name" class="input req-string" value="{$Cat.brand_name|stripslashes}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Export <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<select name="Log[export]" id="interested">
													<option value="N" {if $Cat.export eq "N"} selected="selected"{/if}>NO</option>
													<option value="Y" {if $Cat.export eq "Y"} selected="selected"{/if}>YES</option>
												</select>
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