{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
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
					  <li>{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio Request</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head">{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio Request</div>
				</div>
				<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
	
					<tr>
						<td align="left" valign="top" >
							<form name="PortfolioForm" class="form" id="PortfolioForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="Image_Logo" id="Image_Logo" value="" />
							<input type="hidden" name="hid_key" id="hid_key" value="">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2>{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio Request</h2></td>
									  </tr>
									<tr class="color_trbg">
										<td width="20%">Name</td>
										<td width="80%" align="left"><input type="text" name="Log[name]" id="name" class="select req-string" value="{$Portfolio.name}"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Phone</td>
										<td width="80%" align="left"><input type="text" name="Log[phone]" id="phone" class="select req-string" value="{$Portfolio.phone}"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Email</td>
										<td width="80%" align="left"><input type="text" name="Log[email]" id="email" class="select req-string req-email" value="{$Portfolio.email}"/></td>
									</tr>  
									<tr class="color_trbg">
										<td width="20%">Code</td>
										<td width="80%" align="left"><input type="text" name="Log[code]" id="code" class="select req-string" value="{$Portfolio.code}"/>&nbsp;&nbsp;<a href="javascript: GenNum();">Generate Code</a></td>
									</tr> 
									<tr class="color_trbg">
										<td width="20%">Show Portfolio</td>
										<td width="80%" align="left">
											<select name="Log[show_status]" id="show_status" class="searchinput">
												<option value="">-- Select Status --</option>
												<option value="Y" {if $Portfolio.show_status eq "Y"} selected="selected"{/if}>Y</option>
												<option value="N" {if $Portfolio.show_status eq "N"} selected="selected"{/if}>N</option>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#PortfolioForm',
		errorDiv	: '#errorDiv1'
});
function GenNum()
{
	tb_show('Generate Number','http://www.autorepairmarketing.com/customer/admin/gennumber.php?height=330&width=640');
	return;
}	
</script>
{/literal}