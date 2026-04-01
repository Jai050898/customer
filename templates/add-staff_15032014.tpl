{include file=header.tpl}
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
        <div style="height:10px;"></div>
        <span style="float:right;">&nbsp;</span>
        <h1>Add Staff</h1>
		<div class="bodyleft">
                <form name='frmIncoice' method="post" id="frmIncoice" class="form">			

                    <input type="hidden" name="hid_key" id="hid_key" value="">
                    <input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">				
                        {if $error neq ""}
                        <tr class="color_trbg">
                            <td colspan="2" style="color:#FF0000;">{$error}</td>
                        </tr>
                        {/if}
                        <tr>						
                            <td width="47%" height="38" align="right">First Name : </td>						
                            <td width="53%">						 
                                <input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="{$User.first_name}"/>						
                            </td>					  
                        </tr>				
                        <tr>						
                            <td height="36" align="right">Last Name : </td>						
                            <td><input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="{$User.last_name}"/> </td>				
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Email : </td>						
                            <td>
                                <input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$User.email}" 
                                       onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br />
                                <span id="validdiv" style="padding-left:5px; color:red"></span>
                            </td>
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">UserName : </td>						
                            <td><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value="{$User.user_name}" {if $smarty.request.user_id neq ""}
                                       onBlur="javascript:fnCheckUnameAvailEdit('user_name',this.value,'uiddiv',{$smarty.request.user_id});" {else} onBlur="javascript:fnCheckUnameAvail('user_name',this.value,'uiddiv');" {/if}/><br />
                                <span id="uiddiv" style="padding-left:5px; color:red"></span>  </td>				
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Password : </td>						
                            <td><input type="password" name="Log[password]" id="Log[password]"  class="input req-string" value="{$User.password}"/> </td>				
                        </tr>					  

                        <tr>						
                            <td height="36" align="right">Company Name : </td>						
                            <td><input type="text" name="Log[company_name]" id="company_name"  class="input req-string" value="{$User.company_name}"/> </td>				
                        </tr>
                        <tr>						
                            <td height="36" align="right">City: </td>						
                            <td><input type="text"  name="Log[city]" id="city" class="input req-string" value="{$User.city}"/> </td>				
                        </tr>
                        <tr>				
                            <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;">{$Errormssage}</td>			
                        </tr>		
                                            

                        <tr>						
                            <td height="33" colspan="2" align="center">						 
                                <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit"  />	
                            </td>						
                        </tr>					
                    </table>				
                </form>	
                </div>
		<div class="clear"></div>
        </div>
        { include file="rightbar.tpl" }
        <div class="clear"></div>
    </div>
</div>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>

<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
    scope	: '#frmIncoice',
    errorDiv	: '#errorDiv1'
});	
</script>
{/literal}
{include file="footer.tpl"}

