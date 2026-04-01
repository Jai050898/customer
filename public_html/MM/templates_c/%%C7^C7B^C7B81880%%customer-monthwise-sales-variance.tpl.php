<?php /* Smarty version 2.6.26, created on 2014-01-03 05:18:40
         compiled from customer-monthwise-sales-variance.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'customer-monthwise-sales-variance.tpl', 93, false),array('modifier', 'string_format', 'customer-monthwise-sales-variance.tpl', 94, false),)), $this); ?>
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
            <h1>Customer Monthwise Sales Variance Data</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#6699cc" style="border:1px solid #6699cc">
                    <tr>
                        <th width="9%" height="27"  align="left" valign="top">
                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                <tr>
                                    <th  height="27" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Month / Year</th>
                                </tr>
                                <tr>
                                  <th  height="27" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">&nbsp;</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jan</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Feb</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Mar</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Apr</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">May</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jun</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Jul</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Aug</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Sep</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Oct</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Nov</th>
                                </tr>
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Dec</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">High</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Low</th>
                                </tr>
                                
                                <tr>
                                  <th colspan="2" height="27" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average</th>
                                </tr>
                            </table>
                        </th>
                        <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                            <th width="9%" height="27"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    
                                      <tr>
                                      <th colspan="2"   height="27" align="center" valign="middle"  bgcolor="#336699" style="color:#fff; font-weight:bold;"><?php echo $this->_tpl_vars['item']['Year']; ?>
</th>
                                      </tr>
                                      
                                    <tr>
                                        <td width="50%" align="center"  height="27" valign="middle" bgcolor="#336699" style="color:#fff;">Sales</td>
                                        <td width="50%" align="center"  height="27" valign="middle" bgcolor="#336699" style="color:#fff;">Variance</td>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['item']['Month']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
                                        <tr>
                                            <td align="center"  height="27" valign="middle" bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['grossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                            <td align="center"  height="27" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['variance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%</td>
                                        </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                  </table>
                                  <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                      <tr>
                                            <td height="27" width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['highGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                            <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['varianceHigh'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
%</td>
                                      </tr>
                                      <tr>
                                           <td height="27" width="50%"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['lowGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                           <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['varianceLow'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
%</td>
                                      </tr>
                                      <tr>
                                            <td height="27" width="50%"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['averageGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                                            <td height="27"  width="50%" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['varianceAvg'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
%</td>
                                      </tr>
                                  </table>
                            </th>
                    <?php endforeach; else: ?>
                    </tr>
                        <tr>
                            <th bgcolor="#f9f9f7" style="color:#000000;"  height="27" colspan="3"><font color="#FF0000"><strong>No Data Found</strong></font></th>
                        </tr>
                    <?php endif; unset($_from); ?>
                    

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