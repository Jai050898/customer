{include file="header.tpl"}
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
{literal}
<style type="text/css">
#latest_images {
    background: none repeat scroll 0 0 #D2DCE2;
    border: 1px solid #B4B4B4;
    padding: 7px;
    text-align: center;
}
</style>
{/literal}
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
		{include file="right-bar.tpl"}
		<div id="innerleft">
		  <div class="admin-rightpart">
		  <div class="admin_topbgnav">
			  <div id="admin_bcrumb">
				<ul>
					  <li><a href="{$siteurl}/seo/dashboard.php">Home</a></li>
					  <li><a href="{$siteurl}/seo/manage-users.php">Manage Users</a></li>
					  <li>Yahoo SERPs</li>
				</ul>
				<div class="clr"></div>
			  </div>
			  <div id="admin_head">Yahoo SERPs</div>
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
				<div class="contents01">
			{foreach item=item name=item from=$Images}
			<span class="style0001" style="font-size:14px;"><strong>{$item.date|date_format:"%A, %B %e, %Y"}</strong></span>
			
			<div id="latest_images">
			{foreach item=items name=items from=$item.Items}
			
			<a href="javascript: ShowIMG('{$item.date}','{$items.image}');"><img src="{$siteurl}/serps/{$items.image}" width="150" height="104" /></a>
			{/foreach}
			</div>
			<div style="height:10px;"></div>
			{foreachelse}
			No Gogole SERPs  Found
			{/foreach}
			</div>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/thickbox.js"></script>
{literal}
<script language="javascript" type="text/javascript">
function ShowIMG(dt,val)
{
	tb_show("Yahoo SERPs",'show-google-image.php?height=500&width=1040&img='+val);
	return;
}
</script>
{/literal}