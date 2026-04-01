{include file="header.tpl"}
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
                                    <li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
                                    <li>Change Password</li>
                              </ul>
                            <div class="clr"></div>
                      </div>
                        <div id="admin_head">Change Password</div>
                    </div>
                    <div class="ad_textsp">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                    <td height="10"></td>
                            </tr>
                            <tr>
                                <td align="left" valign="top" >
                                    <form id="ChangePasswordForm" class="form" method="post" name="ChangePasswordForm">
                                        <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                                            <tr>
                                                <td colspan="2"><h2>Change Password</h2></td>
                                            </tr>
                                            <tr>
                                              <td align="right" valign="middle">&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            
                                            <tr class="color_trbg">
                                              <td width="32%" align="right" valign="middle">New Password:&nbsp;</td>
                                              <td width="68%"><span class="formControl">
                                                    <input name="Password" type="password" class="input req-string req-same req-min" id="Password" rel="passwrd" maxlength="15"  minlength="6"/>
                                              </span></td>
                                            </tr>
                                            <tr>
                                              <td align="right" valign="middle">Confirm New Password:</td>
                                              <td><span class="formControl">
                                                    <input name="CPassword" type="password" class="input req-string req-same req-min" id="CPassword" rel="passwrd" maxlength="15"  minlength="6"/>
                                              </span></td>
                                            </tr>
                                            <tr class="color_trbg">
                                              <td align="right" valign="middle">&nbsp;</td>
                                              <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
                                            </tr>
                                            <tr>
                                              <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                                              <td bgcolor="#854141"><input name="Submit" id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
    scope	: '#ChangePasswordForm',
    errorDiv	: '#errorDiv1'
});	
</script>
{/literal}
