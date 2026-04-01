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
					  <li>View Portfolio</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head">View Portfolio</div>
				</div>
				<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
						<td align="left" valign="top" >
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2>View Portfolio for {$Portfolio.name}</h2></td>
									  </tr>
									<tr class="color_trbg">
									<td width="20%">Project Name</td>
									<td width="80%" align="left">
										{$Portfolio.name}
									 </td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left">{$Portfolio.text|nl2br}</td>
									 	</td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left"><img src="{$siteurl}/photos/thumbnails/{$Portfolio.image}" id="thumb"></td>
									 	</td>
									</tr>
									<tr>
									  <td align="right" valign="middle">&nbsp;</td>
									  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
									</tr>
									
								</table>
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
