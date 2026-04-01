{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Account Details</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;" width="35%">Name:</td>
				  <td align="left" valign="center" width="65%"><strong>{$AccDet.first_name} {$AccDet.last_name}</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Email:</td>
				  <td align="left" valign="center">{$AccDet.email}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Phone:</td>
				  <td align="left" valign="center">{$AccDet.phone}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Address:</td>
				  <td align="left" valign="center">{$AccDet.address}</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">City:</td>
				  <td align="left" valign="center">{$AccDet.city}</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">State:</td>
					<td align="left" valign="center">{$AccDet.State_Name}</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Country:</td>
				  <td align="left" valign="center">{$AccDet.Country_Name}</td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}