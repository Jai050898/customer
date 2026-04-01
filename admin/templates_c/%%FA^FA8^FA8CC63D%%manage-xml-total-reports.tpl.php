<?php /* Smarty version 2.6.26, created on 2014-01-29 10:01:17
         compiled from manage-xml-total-reports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-xml-total-reports.tpl', 25, false),array('function', 'cycle', 'manage-xml-total-reports.tpl', 60, false),)), $this); ?>
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
/admin/dashboard.php">Home</a></li>
                                    <li>Manage Total Reports</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Total Reports</div>
                        </div>
                        <div class="ad_textsp">
                            <form id="ManageMMSCustomers" class="form" method="post" name="ManageMMSCustomers">
                   
                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5">
                                                                                          <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                                                    <tr>
                                                        <td colspan="2">
                                                          <table width="100%" cellspacing="0" cellpadding="5">
                                                              <tr>
                                                                  <td  align="left" bgcolor="#854141">
                                                                          <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                          <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                          <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
                                                                  </td>
                                                                  <td  align="right"  bgcolor="#854141"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
                                                              </tr>
                                                          </table>
                                                        </td>
                                                    </tr>
                                              <?php endif; ?>
                                              <tr>
                                                  <td align="left" valign="top" colspan="2">

                        
                        
                                              <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                        <tr>
                                                <th width="7%" align="left">S. No</th>
                                                <th width="7%" align="left">Year</th>
                                                <th width="7%" align="left">Last Time Visited</th>
                                                <th width="7%" align="left">Last Time Visited Difference</th>
                                                <th width="7%" align="left">Total Customers who visited</th>
                                                <th width="7%" align="left">Total Cust who Visited Diff</th>
                                                <th width="7%" align="left">First time visit</th>
                                                <th width="7%" align="left">First Time Visit Difference</th>
                                                </tr>
                                        <?php $_from = $this->_tpl_vars['yearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                        			 <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
                                            <tr>
                                                <td align="left"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['lastVisited']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['lastVisitedDiff']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['totalVisitedCustomers']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['totalVisitedCustomersDiff']; ?>
</td>
                                                <td align="left"> <?php echo $this->_tpl_vars['item']['total']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['diff']; ?>
</td>
                                            </tr>
                                        <?php endforeach; else: ?>
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        <?php endif; unset($_from); ?>
                                   </table>
                                                  </td>
                                              </tr>
                                              <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                                                <tr>
                                                    <td colspan="2">
                                                        <table width="100%" cellspacing="0" cellpadding="5">
                                                                <tr>
                                                                    <td>
                                                                            <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'A','chkall[]');"/>
                                                                            <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageMMSCustomers,'I','chkall[]');" />
                                                                            <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageMMSCustomers,'D','chkall[]');"/> -->
                                                                    </td>
                                                                    <td><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
                                                                </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                              <?php endif; ?>
                                      </table>
                </form>
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