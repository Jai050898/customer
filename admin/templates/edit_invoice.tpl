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
	
                                                        <li>Edit Invoice</li>
                                                </ul>
                                              <div class="clr"></div>
                                      </div>
                                      <div id="admin_head">Edit Invoice</div>
                        </div>
                        <div class="ad_textsp"> 
                            <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                    <tr>				
                                        <td height="32" align="center"><div id="errorDiv1" style="color: #FF0000;">{$Errormssage}</div></td>			

                                    </tr>
                                    <tr><td>
                                        <form name='frmIncoice' method="post" id ="frmIncoice" class="form" >			
                                            <input type="hidden" name="hid_key" id="hid_key" value="{$smarty.request.id}" />
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                                <tr>						
                                                    <td width="47%" height="38" align="right">Invoice Number :</td>
                                                       <td width="53%">
                                                       <span class="formControl">
                                                       <input type="text"  class="input req-string" name="invoiceNumber" id="Number" value="{$dataArray.invoiceNumber}" />	
                                                  </span>

                                                       </td>					  
                                                   </tr>				
                                                   <tr>						
                                                       <td height="36" align="right">Amount : </td>
                                                       <td>
                                                       <span class="formControl">

                                                       <input type="text"  class="input req-string" name="invoiceAmount" id="Amount" value="{$dataArray.invoiceAmount}"/> ( in $ )</span></td>				
                                                   </tr>
                                                   <tr>						
                                                       <td height="33" colspan="2" align="center">
                                                           <input type="submit" name="btnSubmit"  id="submitBtn" value="Submit"  />
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
$('#submitBtn').formValidator({
    scope	: '#frmIncoice',
    errorDiv	: '#errorDiv1'
});	
</script>
{/literal}
{include file="footer.tpl"}

