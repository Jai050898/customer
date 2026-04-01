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
							<li><a href="{$siteurl}/admin/manage-users.php">Home</a></li> 
							<li><a href="{$siteurl}/admin/notification_mail.php?user_id={$smarty.request.user_id}">Manage Notificaiton Mail</a></li>
							
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Manage Notification Mail</div>
				  </div>
					<div class="ad_textsp">
						<table width="50%" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name='frmIncoice' method="post" id="frmIncoice" class="form">			

                    <input type="hidden" name="hid_key" id="hid_key" value="{$smarty.get.user_id}">
                   
                    
                    <input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										
                    <table width="50%" border="0" cellspacing="0" cellpadding="0" align="center">				
                        <tr>						
                            <td height="36" align="right">Email : </td>						
                            <td>
                                <input type="text" name="Log[email]" id="email" class="input req-string req-email" value="{$notify_mail}" 
                                      />
                               
                            </td>
                        </tr>					  
                        <tr>						
                            <td height="36" align="right">Active : </td>						
                            <td>
                            {if $notify_status==1}
                            <input type="checkbox" name="Log[active]" id="active"  value="1" checked="checked"/>
                            {else}
                                                        <input type="checkbox" name="Log[active]" id="active"  value="1" />
                                                        {/if}
                             </td>				
                        </tr>					  
                        
                        <tr>				
                            <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;" colspan="2">{$Errormssage} {if $error neq ""}<span style="color:#FF0000;">{$error}</span> {/if}</td>			
                        </tr>		
                                            

                        <tr>						
                            <td height="33" colspan="2" align="center">						 
                                <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit" onclick="checkvalidation()"  />	
                            </td>						
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

