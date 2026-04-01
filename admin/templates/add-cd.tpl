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
								  <li><a href="{$siteurl}/admin/manage-cd.php">Manage Confirmed Directories</a></li>
								  <li>{if $smarty.request.id neq ""}Edit{else}Add{/if} Confirmed Directories</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head">{if $smarty.request.id neq ""}Edit{else}Add{/if} Confirmed Directories</div>
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
											<td colspan="2"><h2>{if $smarty.request.id neq ""}Edit{else}Add{/if} Confirmed Directories</h2></td>
										  </tr>
										  <tr class="color_trbg">
										<td width="20%">Category:</td>
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
											<td width="20%">Name <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[name]" id="name" class="input req-string" value="{$Cat.name}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">URL <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[url]" id="url" class="input req-string" value="{$Cat.url}"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Checkin ?</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[checkin]" id="checkin" value="Y" {if $Cat.checkin eq "Y"} checked="checked" {/if} />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Payment</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[payment]" id="payment" value="Y" {if $Cat.payment eq "Y"} checked="checked" {/if} onchange="showDetails();"  />
											 </td>
										</tr>
										
										<tr class="color_trbg" id="detailsdiv" {if $Cat.payment eq "N"} style="display:none;" {/if}>
											<td  colspan="2">
												<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
													<tr class="color_trbg">
														<td width="20%">Amount <span class="redstar"> * </span></td>
														<td width="80%" align="left">
															<input type="text" name="Log[amount]" id="amount" class="input" value="{$Cat.amount}"/>
														 </td>
													</tr>
													<tr class="color_trbg">
														<td width="20%">Description <span class="redstar"> * </span><strong></strong></td>
														<td width="80%" align="left">
															<textarea name="Log[description]" id="description" style="width:250px; height:100px;">{$Cat.description}</textarea>
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
function showDetails()
{
	if($('#payment').is(":checked"))
	{
		$('#detailsdiv').show();
		$("#amount").addClass("input req-string");
		$("#description").addClass("input req-string");
	}
	else
	{
		$('#detailsdiv').hide();
		$("#amount").removeClass("input req-string").addClass("input");
		$("#description").removeClass("input req-string").addClass("input");	
	}
}
</script>
{/literal}