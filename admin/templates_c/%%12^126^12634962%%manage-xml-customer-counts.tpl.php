<?php /* Smarty version 2.6.26, created on 2014-01-21 00:48:28
         compiled from manage-xml-customer-counts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-xml-customer-counts.tpl', 40, false),array('function', 'cycle', 'manage-xml-customer-counts.tpl', 105, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<?php echo '
<style>
.admin_table th {
    border-bottom: 1px solid #DDDDDD;
    color: #FFFFFF;
    font-size: 13px;
    padding: 6px 0 6px 6px;
}
</style>
'; ?>

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
                                    <li>Manage Counts By Customer Visits</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Counts By Customer Visits</div>
                        </div>
                        <div class="ad_textsp">
                
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="user_id" value="<?php echo $_REQUEST['user_id']; ?>
" />         
                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                   <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        
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
                                                  <table width="100%" cellpadding="0" cellspacing="1" class="admin_table">
                                                        <tr bgcolor="#854141">
                                                                <th  width="7%" align="left"> All Visits Total (Last 6 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (6-12 Months)</th>
                                                                <th width="7%" align="left"> All Visits Total (12-18 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (18-24 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (24-36 Months)</th>
                                                                <th  width="7%" align="left"> All Visits Total (36-48 Months)</th>
                                                        </tr>
                                                        <tr>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"> <?php echo $this->_tpl_vars['countsAry']['6MonthTotal']; ?>
</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['countsAry']['6to12MonthTotal']; ?>
</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['countsAry']['12to18MonthTotal']; ?>
</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['countsAry']['18to24MonthTotal']; ?>
</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000; "><?php echo $this->_tpl_vars['countsAry']['24to36MonthTotal']; ?>
</td>
                                                            <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['countsAry']['36to48MonthTotal']; ?>
</td>
                                                        </tr>
                                                  </table>
                                                </td>
                                            </tr>
                        
                        <tr>
                            <td colspan="2">
                                  <div class="pagecount_info_divbox" align="right">
                                  <br/> <br/>
                                      <b>Showing Records <?php echo $this->_tpl_vars['records_from']; ?>
 to <?php echo $this->_tpl_vars['records_to']; ?>
 of <?php echo $this->_tpl_vars['total']; ?>
</b>
                                      <br/> <br/>
                                      <div class="clr"></div>
                                  </div>
                            </td>
                        </tr> 
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" cellpadding="0" cellspacing="1" class="admin_table">
                                        <tr bgcolor="#854141">
                                                <th width="7%" align="left">S. No</th>
                                                <th width="7%" align="left"><a href="javascript: setClientSort('fullname','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCustomers);">Name</a></th>
                                                <th width="7%" align="left"> Visits Total (Last 6 Months)</th>
                                                <th width="7%" align="left"> Visits Total (6-12 Months)</th>
                                                <th width="7%" align="left"> Visits Total (12-18 Months)</th>
                                                <th width="7%" align="left"> Visits Total (18-24 Months)</th>
                                                <th width="7%" align="left"> Visits Total (24-36 Months)</th>
                                                <th width="7%" align="left"> Visits Total (36-48 Months)</th>
                                        </tr>
                                        <?php $_from = $this->_tpl_vars['customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                           
                                            <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
                                                <td align="left"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</td>
                                                <td align="left"> <?php echo $this->_tpl_vars['item']['6MonthTotal']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['6to12MonthTotal']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['12to18MonthTotal']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['18to24MonthTotal']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['24to36MonthTotal']; ?>
</td>
                                                <td align="left"><?php echo $this->_tpl_vars['item']['36to48MonthTotal']; ?>
</td>
                                            </tr>
                                        <?php endforeach; else: ?>
                                            <tr>
                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7" align="center"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                            </tr>
                                        <?php endif; unset($_from); ?>
                                  </table>
                                </td>
                        </tr>
                        <?php if (count($this->_tpl_vars['customer']) > 0): ?>
                        <tr>
                            <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                              <tr>
                              <td  align="left" bgcolor="#854141">&nbsp;		</td>
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