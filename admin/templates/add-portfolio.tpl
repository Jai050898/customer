{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
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
					  <li>{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head">{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio</div>
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
										<td colspan="2"><h2>{if $smarty.request.portfolio_id neq ""}Edit{else}Add{/if} Portfolio</h2></td>
									  </tr>
									
									<tr class="color_trbg">
									<td width="20%">Project Name</td>
									<td width="80%" align="left">
									<input type="text" name="Log[project_name]" id="project_name" class="input req-string" value="{$Portfolio.project_name}" />
									 </td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Portfolio Text</td>
										<td width="80%" align="left"><textarea name="Log[text]" cols="64" rows="10"  id="text" class="input" style="width:500px; height:200px;">{$Portfolio.text}</textarea>
									 	</td>
									</tr>
									<tr>
									  <td  valign="top" width="20%">Upload Image</td>
									  
									  <td width="80%" align="left">
									  <table>
									  <tr align="left" valign="top">
									  <td>
											<input type="file" id="photo_name" name="photo_name"  style="width:305px;" />&nbsp;
										</td>
										<td>
											{if $Portfolio.image neq ""}<img src="{$siteurl}/photos/thumbnails/{$Portfolio.image}" id="thumb">{else}<img src="{$siteurl}/images/noimage.png" id="thumb">{/if}
											<div id="MsgDiv" style=" width:100px; position:absolute;z-index:101;margin-left:5px;float:left;"></div>
											<div class="clr" style="height:10px;"></div>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajaxupload.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#PortfolioForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
		ImageUploadingForAll('photo_name','MsgDiv','Image_Logo','no');								
});	
$(document).ready(function() {	
	$('#text').wysiwyg();
		});	
</script>
{/literal}