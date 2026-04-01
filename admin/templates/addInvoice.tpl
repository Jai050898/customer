{include file="header.tpl"}
<link href="{$siteurl}/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			{include file="right-bar.tpl"}
			<div id="innerleft">
			  <div class="admin-rightpart">
                            <div class="admin_topbgnav">
                                          <div id="admin_bcrumb">
                                                    <ul>
                                                            <li><a href="{$siteurl}/admin/dashboard.php">Home</a></li>
                                                            <li><a href="{$siteurl}/admin/manage-online-payments.php">Manage Online Payments</a></li>
							  
                                                            <li>Add Invoice</li>
                                                    </ul>
                                                  <div class="clr"></div>
                                          </div>
                                          <div id="admin_head">Add Invoice</div>
                            </div>
                                    <div class="ad_textsp">
                                        
                                        <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                            <tr>				
                                                                    <td height="32" align="center" id="errorDiv1" class="error" style="color: #FF0000;">{$Errormssage}</td>			
                                                                </tr>		
                                                                			  
                                                                <tr><td>
                                                                        <form name='frmIncoice' method="post" id="frmIncoice" class="form">			
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">				
                                                                                <tr>						
                                                                                    <td width="47%" height="38" align="right">Invoice Number : </td>						
                                                                                    <td width="53%">						 
                                                                                        <input type="text" name="invoiceNumber"  id="Number" class="input req-string" />						
                                                                                    </td>					  
                                                                                </tr>				
                                                                                <tr>						
                                                                                    <td height="36" align="right">Amount : </td>						
                                                                                    <td><input type="text" name="invoiceAmount"  id="Amount"class="input req-string" /> ( in $ )</td>				
                                                                                </tr>					  
                                                                                <tr>						
                                                                                    <td height="33" colspan="2" align="center">						 
                                                                                        <input type="submit" id="submitBtn1" name="btnSubmit" value="Submit"  />	
                                                                                    </td>						
                                                                                </tr>					
                                                                            </table>				
                                                                        </form>				
                                                         </td></tr>       		
                                                            </table>	
                                                 


					<!--end of right part -->
					  <div class="clr"></div>
                                    </div>
				
		 <!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
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

