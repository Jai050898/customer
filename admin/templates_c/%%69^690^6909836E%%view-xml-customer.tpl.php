<?php /* Smarty version 2.6.26, created on 2014-01-27 08:34:24
         compiled from view-xml-customer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-xml-customer.tpl', 40, false),array('modifier', 'number_format', 'view-xml-customer.tpl', 65, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
                                        <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-customers.php">Manage MMS Customers</a></li>
                                        <li>View MMS Customers</li>
                              </ul>
                              <div class="clr"></div>
                        </div>
                        <div id="admin_head">View MMS Customers</div>
                  </div>
                  <div class="ad_textsp">
                    <table width="100%" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="10"></td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" >
                                  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                                  <tr>
                                        <td colspan="2"><h2>View MMS Customers</h2></td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Name</td>
                                        <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['fname']; ?>
 <?php echo $this->_tpl_vars['User']['lname']; ?>
</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Email</td>
                                        <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['email']; ?>
</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Address</td>
                                        <td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['address1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">State</td>
                                        <td width="80%" align="left"><?php if ($this->_tpl_vars['User']['State_Name'] != ''): ?><?php echo $this->_tpl_vars['User']['State_Name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['User']['state']; ?>
<?php endif; ?></td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">City</td>
                                        <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['city']; ?>
</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Zip Code</td>
                                        <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['zip']; ?>
</td>
                                  </tr>
                                  <tr class="color_trbg">
                                        <td width="20%">Company Name</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['company_name']; ?>
</td>
                                  </tr>
                                 </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" >
                                <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
                                    <tr>
                                          <td colspan="2"><h2>LIFETIME SPENDING TOTAL: <?php if ($this->_tpl_vars['User']['total_extendedsale'] != 0 && $this->_tpl_vars['User']['total_extendedsale'] != ''): ?> $<?php echo ((is_array($_tmp=$this->_tpl_vars['User']['total_extendedsale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
 <?php else: ?> <?php endif; ?></h2></td>
                                    </tr>
                                    <tr class="color_trbg">
                                          <td width="20%">RO Id</td>
                                          <td width="80%" align="left"><?php echo $this->_tpl_vars['User']['ro_id']; ?>
</td>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['RODetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                        <tr>
                                            <td align="left" valign="top"  colspan="2"><h2>#<?php echo $this->_tpl_vars['k']+1; ?>
:</h2></td>
                                        </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Transaction Id</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['transactiondetailextid']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Line Items Order</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['lineitemsortorder']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Quantity</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['unitquantity']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Cost</td>
                                            <td width="80%" align="left">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['unitcost'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Unit Sale</td>
                                            <td width="80%" align="left">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['unitsale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Extended Cost</td>
                                            <td width="80%" align="left">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['extendedcost'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Extended Sale</td>
                                            <td width="80%" align="left">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['extendedsale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Detailed Description</td>
                                            <td width="80%" align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['detaildescription'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Material Supplier</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['materialsupplier']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Material Manufacturer</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['materialmanufacturer']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Part Number</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['partnumber']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Labor Hours</td>
                                            <td width="80%" align="left"><?php echo $this->_tpl_vars['item']['laborhours']; ?>
</td>
                                      </tr>
                                      <tr class="color_trbg">
                                            <td width="20%">Labor Rate</td>
                                            <td width="80%" align="left">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['laborrate'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                      </tr>
                                    <?php endforeach; else: ?>
                                        <tr>
                                          <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></th>
                                        </tr>
                                    <?php endif; unset($_from); ?>
                                </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="top">&nbsp;</td>
                        </tr>
                        <tr>
                        <td height="50" align="left" valign="top">&nbsp;</td>
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