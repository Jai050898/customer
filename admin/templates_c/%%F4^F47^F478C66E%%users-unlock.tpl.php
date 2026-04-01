<?php /* Smarty version 2.6.26, created on 2013-12-17 05:08:20
         compiled from users-unlock.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
    <div id="mainbody">
        <div id="contentpane">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div id="innerleft">
              <div class="admin-rightpart">
                <div class="admin_topbgnav">
                  <div id="admin_bcrumb">
                      <ul>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/dashboard.php">Home</a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-users.php">Manage Users</a></li>
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
                                            <?php if ($this->_tpl_vars['status'] == 'unlocked'): ?>
                                                <font><strong>Unlocked Successfully!!!</strong></font>
                                            <?php elseif ($this->_tpl_vars['status'] == ''): ?>
                                                <font color="#FF0000"><strong>An Error occured while Processing the Request!!!</strong></font>
                                            <?php endif; ?>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>