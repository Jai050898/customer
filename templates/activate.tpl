{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Account Activated....</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="left" valign="center" style="padding-left:95px;">Hi <strong>{$UsrDet.full_name}</strong>...<br>
				  	Your Account has been activated...<br>
					<!-- Your Login credentials have been sent to your E-mail.<br /> -->
					You can Now Log On to our site by clicking on the following link!.<br />
					<a href="{$siteurl}/login.php">Click here to Login</a>
				  	</td>
				  
				</tr>
			</table>
			<div class="clear"></div>
		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}