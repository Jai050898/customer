<?php /* Smarty version 2.6.26, created on 2014-03-03 09:09:31
         compiled from duplicate-data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'duplicate-data.tpl', 37, false),array('modifier', 'count', 'duplicate-data.tpl', 44, false),array('modifier', 'date_format', 'duplicate-data.tpl', 84, false),array('function', 'cycle', 'duplicate-data.tpl', 76, false),)), $this); ?>
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
                                    <li>Duplicate Customers</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Duplicate Customers</div>
                        </div>
                        <div class="ad_textsp">
                              <form id="ManageMMSCustomers" class="form" method="GET" name="ManageMMSCustomers">
                                <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                                <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                                <table width="100%" cellspacing="0" cellpadding="0">
                                              <tr>
                                                      <td height="10" colspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td><h2>Duplicate Customers</h2></td>
                                                <td align="right">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td  colspan="2">
                                                      <div class="search_divbox">
                                                          <select name="user_id" id="user_id" class="searchinput" onchange="document.getElementById('ManageMMSCustomers').submit();">
                                                                  <option value="">-- Select --</option>
                                                                  <?php $_from = $this->_tpl_vars['shops']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                                  <option value="<?php echo $this->_tpl_vars['item']['xml_id']; ?>
" <?php if ($_REQUEST['user_id'] == $this->_tpl_vars['item']['xml_id']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</option>
                                                                  <?php endforeach; endif; unset($_from); ?>
                                                          </select>&nbsp;&nbsp;
                                                          <input type="image" src="../images/go_but.png" onchange="document.ManageMMSCustomers.submit();" />
                                                      </div>
                                                </td>
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
                                                    <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                                          <tr>
                                                            <th width="17%" align="left">FullName</th>
                                                            <th width="17%" align="left">Address1</th>
                                                            <th width="15%" align="left" >City</th>
							    <th width="10%" align="left">State</th>
							    <th width="8%" align="left">Zip</th>
                                                            <th width="15%" align="left">Mobile</th>
                                                            <th width="16%" align="left">DOB</th>
                                                            <th width="16%" align="left">duplicated<br>Count</th>

                                                          </tr>
                                                          <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                                                            <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                                  <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">               
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['address1']; ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['state']; ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['zip']; ?>
</td>
                                                                    <td align="left"><?php if ($this->_tpl_vars['item']['cell'] == ""): ?><?php echo "-"; ?>
<?php else: ?>
                                                                    <?php echo $this->_tpl_vars['item']['cell']; ?>
<?php endif; ?></td>
                                                                    <td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['count']; ?>
</td>
                                                                </tr>
                                                              <?php endforeach; else: ?>
                                                                  <tr>

                                                                    <th width="100%" align="center" colspan="8"><font color="#FF0000"><strong>No duplicate data foung for this shop!!!</strong></font></th>
                                                                  </tr>
                                                              <?php endif; unset($_from); ?>
                                                            <?php else: ?>
                                                                <tr>

                                                                    <th width="100%" align="center" colspan="8"><font color="#FF0000"><strong>Please Select a shop to display duplicate Customer Data.</strong></font></th>
                                                                  </tr>
                                                            <?php endif; ?>
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