<?php /* Smarty version 2.6.26, created on 2014-01-25 09:36:23
         compiled from customer-analysis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'customer-analysis.tpl', 88, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<style type="text/css">
    .month-tab-market table td {
        font-weight: normal;
    }
</style>
'; ?>

<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Analysis</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#6699cc" style="border:1px solid #6699cc">
                    <tr>
                    <th width="9%" height="30"  align="left" valign="top">
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                            </tr>
                            <tr>
                              <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Gross Customers</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Repair Orders</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Vehicles</th>
                            </tr>
                            
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Labor Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Parts Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Discounts</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Net Sales</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(Prior 2 Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts to Labor Ratio&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts Sales as % of Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Labor Sales as a % of Sales</th>
                            </tr>

                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Discount Per RO</th>
                            </tr>

                            </table>
                    </th>

                    <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        <?php $_from = $this->_tpl_vars['allArray']['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                        <td height="30" align="center" valign="middle" bgcolor="#336699" style="color:#fff;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grossCustomers'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grossRos'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>


                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grossVehicles'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>    
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grosslaborSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grosspartsSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['grossSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                          <?php endforeach; endif; unset($_from); ?>
                                    </tr>    
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['discount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['netSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                     <tr><?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['comparitiveGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['variance'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item'] != 0.00): ?><?php echo $this->_tpl_vars['item']; ?>
<?php endif; ?></td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['averageROB4Discount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['averageROAfterDiscount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['PartsToLaborRatio'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>

                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['percentagePartsSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
%</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['percentageLaborSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
%</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                    <tr>
                                        <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['AverageDiscountRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </tr>
                                           
                                            
                                            
                                  </table>
                            </th>
                    </tr>
            </table>
            <div style="height:10px; clear:both;"></div>
        </div>
                <div class="clear"></div>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>