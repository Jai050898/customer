<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>MMS User Print Page</title>
{literal}
<script language="javascript" type="text/javascript">
	var site_path = "{/literal}{$siteurl}{literal}";
	var img_path = "{/literal}{$siteurl}{literal}/images";
</script>
{/literal}
<link href="{$siteurl}/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div style="margin-left:25px; margin-right:25px; font-size:12px;">
<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
					  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
						  <tr>
							<td colspan="6" align="center" style="text-align:center;"><h2>Client Roster</h2></td>
						  </tr>
						  {foreach item=item name=item from=$Users}
						  <tr class="color_trbg">
							<td width="20%">{$item.company_name|stripslashes}</td>
							<td width="20%">{$item.first_name|stripslashes} {$item.last_name|stripslashes}</td>
							<td width="15%">{$item.city|stripslashes}</td>
							<td width="10%">{$item.State_Code|stripslashes}</td>
							<td width="15%">{$item.phone|stripslashes}</td>
							<td width="20%">{$item.website|stripslashes}</td>
						  </tr>
						  {foreachelse}
							<tr>
							  <th width="100%" align="center" colspan="6"><font color="#FF0000"><strong>No Users Added</strong></font></th>
							</tr>
						{/foreach}
						<tr>
							  <th width="100%" align="left" colspan="3"><small>&copy; Motorhead Marketing</small></th>
							  <th width="100%" align="right" colspan="3"><small>{$dateprint|date_format:"%m-%d-%Y %H %M %S"}</small></th>
						</tr>
					 </table>
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="top">&nbsp;</td>
					</tr>
					<tr>
					<td height="50" align="center" valign="top">&nbsp;</td>
					</tr>
				</table>
</div>
</body>
</html>
{literal}
<script language="javascript" type="text/javascript">
window.print();
</script>
{/literal}