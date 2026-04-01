{include file=header.tpl}
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post"  onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="{$smarty.get.id}">
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
                                    <input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="{$Projects.first_name}" />						
                                </td>
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Last Name:</td>
				  <td>
                                      <input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="{$Projects.last_name}"/> 
                                  </td>				
                       
                                </tr>
                                
                                <tr>
				  <td align="right" valign="center" style="padding-left:5px;">Email:</td>
				  <td><input type="text" name="Log[email]" id="email"  class="input req-string" value="{$Projects.email}" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br />
                                <span id="validdiv" style="padding-left:5px; color:red"></span>
                           </td>				
                                </tr>
				<tr>
                                    <td align="right" valign="center" style="padding-left:5px;">UserName :</td>
                                    <td><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="{$Projects.user_name}" {if $smarty.request.user_id neq ""}
                                       onBlur="javascript:fnCheckUnameAvailEdit('user_name',this.value,'uiddiv',{$smarty.request.user_id});" {else} onBlur="javascript:fnCheckUnameAvail('user_name',this.value,'uiddiv');" {/if}/><br />
                                <span id="uiddiv" style="padding-left:5px; color:red"></span>  
 </td>				
                                </tr>
                                
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Password</td>
				  <td><input type="password" name="Log[password]" id="Log[password]"  class="input req-string" value="{$Projects.password}"/> </td>				
                                </tr>
                                
				<!--			<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Company Name :</td>
				  <td><input type="text" name="Log[company_name]" id="company_name"  class="input req-string" value="{$Projects.company_name}"/> </td>				
                                </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">City :</td>
				<td><input type="text" name="Log[city]" id="city"  class="input req-string" value="{$Projects.city}"/> </td>				
                                </tr>-->
                                <tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px; padding-left:215px;">&nbsp;</td>
				</tr>
	
          
                                <tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="submitBtn1" id="submitBtn1" type="submit" value="Submit" /></td>
				</tr>
				{if $error neq ""}
                        <tr class="color_trbg">
                            <td colspan="2" style="color:#00FF00;text-align:center">{$error}</td>
                        </tr>
                        {/if}
			</table>
			<div class="clear"></div>
		</form>
		</div>
		{include file="rightbar.tpl"}
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>

{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
</script>
{/literal}
