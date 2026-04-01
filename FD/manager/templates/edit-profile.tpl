{include file="header.tpl"}
{literal}
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
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
							<li><a href="{$siteurl}/dashboard.php">Home</a></li>
							<li>Edit Profile</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Edit Profile</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="UsersForm" id="UsersForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2>Edit Company</h2></td>
											</tr>
											{if $smarty.request.task neq ""}
											<tr>
											  <td align="cneter" colspan="2">
											  {if $smarty.request.task eq "S"}
											  <p align="center" style="color:#0000FF;"><strong>Details Updated Successfully</strong></p>
											  {else}
											   <p align="center" style="color:#FF0000;"><strong>Updation failed .. Please try again</strong></p>
											  {/if}
											  </td>
											</tr>
											{/if}
											<tr class="color_trbg">
												<td width="12%">Company Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[name]" id="name" class="input req-string" value="{$User.name}"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Email</td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$User.email}" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">User Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[username]" id="username" class="input req-string" value="{$User.username}" onBlur="javascript:fnCheckUnameAvail('username',this.value,'uiddiv');"/><br /><span id="uiddiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input req-numeric" value="{$User.phone}" maxlength="10"/></td>
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
		scope		: '#UsersForm',
		errorDiv	: '#errorDiv1'
});	
</script>
{/literal}