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
                            <li><a href="{$siteurl}/dashboard.php">Home</a></li>
                            <li><a href="{$siteurl}/admin/manage-users.php">Manage Users</a></li>
                            <li>Unlock User Login</li>
                      </ul>
                      <div class="clr"></div>
                  </div>
                  <div id="admin_head">Unlock User Login</div>
                </div>
                <div class="ad_textsp">
                  <table width="100%" cellspacing="0" cellpadding="0">
                      <tr><td height="10" colspan="2"></td></tr>
                      <tr>
                          <td align="left" valign="top" colspan="2">
                            <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                  <tr>
                                      <th width="100%" align="center" colspan="7">
                                            {if $status eq 'unlocked'}
                                                <font><strong>Unlocked Successfully!!!</strong></font>
                                            {elseif $status eq ''}
                                                <font color="#FF0000"><strong>An Error occured while Processing the Request!!!</strong></font>
                                            {/if}
                                      </th>
                                  </tr>
                            </table>
                          </td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/admin/js/jquery.ufvalidator-1.0.4.js"></script>