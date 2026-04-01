<?php /* Smarty version 2.6.26, created on 2014-02-13 09:54:38
         compiled from average-records.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'average-records.tpl', 54, false),)), $this); ?>
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
                                    <li>Customer Dashboard</li>
                                </ul>
                                <div class="clr"></div>
                                </div>
                                <div id="admin_head">Averages of Data</div>
                            </div>
                            <div id="body">
                                <div class="bodybg" style="min-height:475px;">
                                    <div>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#754141">
                                                <tr>
                                                <th width="9%" height="30"  align="left" valign="top">
                                                    <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                                    <tr>
                                                        <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Data</th>
                                                    </tr>
                                                    <tr>
                                                        <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Average Gross Customers</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Gross Sales</th>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2" height="36" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                                                    </tr>
                                                    
                                                    </table>
                                                </th>
                                                <th width="20%" height="30"  align="left" valign="top">
                                                    <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                                    <tr>
                                                    <?php $_from = $this->_tpl_vars['allArray']['years']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                        <td height="30" align="center" valign="middle" bgcolor="#854141" style="color:#fff;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                    </tr>
                                                    <tr>
                                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['averagegrossCustomers'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                        <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']; ?>
</td>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                    </tr>
                                                    
                                                    <tr>
                                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['averagegrossSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                        <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo $this->_tpl_vars['item']; ?>
</td>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                    </tr>    
                                                    
                                                    <tr>
                                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['comparitiveGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                    <td height="36"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item'] != 0.00): ?>$<?php echo $this->_tpl_vars['item']; ?>
<?php endif; ?></td>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                    </tr>
                                                   

                                                    <tr>
                                                    <?php $_from = ((is_array($_tmp=$this->_tpl_vars['allArray']['variance'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                    <td height="36" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item'] != 0.00): ?><?php echo $this->_tpl_vars['item']; ?>
<?php endif; ?></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    