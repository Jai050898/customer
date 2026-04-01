<?php /* Smarty version 2.6.26, created on 2014-02-07 10:29:00
         compiled from ro-calculations.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'ro-calculations.tpl', 65, false),array('modifier', 'count', 'ro-calculations.tpl', 89, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>RO Calculations</h1>
                <form id="ManageCustomers" class="form" method="post" name="ManageCustomers">
                    <input type="hidden" name="hid_key" id="hid_key" value="" />
                    <input type="hidden" name="hid_type" id="hid_type" value="" />
                    <input type="hidden" name="hid_id" id="hid_id" value="" />
                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                            <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Labor Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Parts Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total HazardWaste Amount</th>
                                    </tr>

                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Shopsuplies Amount</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Tax Amount</th>
                                    </tr>
                                    <tr>
                                     <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">&nbsp;</th>
                                    </tr>
                                    
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Gross Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Discount Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Net Sales</th>
                                    </tr>
                                    </table>
                            </th>
                            <th width="9%" height="30"  align="left" valign="top">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </tr>
                                        
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['laborSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['partsSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['hazardSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['shopSupplySum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['taxSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;" colspan="<?php echo count($this->_tpl_vars['years']); ?>
">&nbsp;</td> 
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['discountSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['NetSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                  </table>
                            </th>
                        </tr>
                    </table>
                                        
                    <div style="clear: both; height: 20px;"></div>
                    <h1>RO Calculations Upto Current Month</h1>
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                            <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Labor Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Parts Sales</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total HazardWaste Amount</th>
                                    </tr>

                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Shopsuplies Amount</th>
                                    </tr>
                                    <tr>
                                      <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Tax Amount</th>
                                    </tr>
                                    <tr>
                                     <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">&nbsp;</th>
                                    </tr>
                                    
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Gross Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Discount Sales</th>
                                    </tr>
                                    <tr>
                                        <th  height="38" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Total Net Sales</th>
                                    </tr>
                                    </table>
                            </th>
                            <th width="9%" height="30"  align="left" valign="top">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </tr>
                                        
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['laborSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['partsSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['hazardSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['shopSupplySum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['taxSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;" colspan="<?php echo count($this->_tpl_vars['years']); ?>
">&nbsp;</td> 
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['discountSum'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                        <tr>
                                            <?php $_from = $this->_tpl_vars['roCalculationsCurrnetArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['NetSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td> 
                                            <?php endforeach; endif; unset($_from); ?>    
                                        </tr>
                                  </table>
                            </th>
                        </tr>
                    </table>
                </form>
                <div class="clear"></div>
            </div>
                        <div class="clear"></div>
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
/admin/js/jquery.ufvalidator-1.0.4.js"></script>