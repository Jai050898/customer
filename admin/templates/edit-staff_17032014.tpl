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
							<li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
							<li>{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">{if $smarty.request.user_id neq ""}Edit{else}Add{/if} User</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>Edit Staff</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">First Name:</td>
				 <td width="53%">						 
                                    <input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="{$User.first_name}" />						
                                </td>
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Last Name:</td>
				  <td>
                                      <input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="{$User.last_name}"/> 
                                  </td>				
                       
                                </tr>
				<tr>
                                    <td align="right" valign="center" style="padding-left:5px;">UserName :</td>
                                    <td><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="{$User.user_name}"/> </td>				
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Password</td>
				  <td><input type="password" name="Log[password]" id="Log[password]"  class="input req-string" value="{$User.password}"/> </td>				
                                </tr>
                                
							<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Company Name :</td>
				  <td><input type="text" name="Log[company_name]" id="company_name"  class="input req-string" value="{$User.company_name}"/> </td>				
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">City :</td>
				<td><input type="text" name="Log[city]" id="city"  class="input req-string" value="{$User.city}"/> </td>				
                                </tr>
                                <tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px; padding-left:215px;">&nbsp;</td>
				</tr>
	
          
                                <tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="submitBtn1" id="submitBtn1" type="submit" value="Submit" /></td>
				</tr>
			</table>
			<div class="clear"></div>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}
