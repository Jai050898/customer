<?php /* Smarty version 2.6.26, created on 2013-10-23 08:49:03
         compiled from new-reports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'new-reports.tpl', 9, false),array('modifier', 'number_format', 'new-reports.tpl', 64, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <div>
                    <div style="float: left;"><h1>Export Customer Reports</h1></div>
                <?php if (((is_array($_tmp=$this->_tpl_vars['customer'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0): ?><div style="float: right; font-size:15px;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/exporttocsv.php?days=<?php echo $_REQUEST['days']; ?>
&percentage=<?php echo $_REQUEST['percentage']; ?>
" target="_blank" id="exportData">Export Data</a></div><?php endif; ?>
                    <div style="clear:both;"></div>
                </div>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                        <tr>
                            <td colspan="8" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td  colspan="8">
                            <div class="search_divbox">
                                <select name="days" id="days" class="select" style="padding: 2px;">
                                    <option value="">---Please Select Duration---</option>
                                    <option value="30 DAY" <?php if ($_REQUEST['days'] == '30 DAY'): ?> selected="selected"<?php endif; ?>>30 DAYS</option>
                                    <option value="60 DAY" <?php if ($_REQUEST['days'] == '60 DAY'): ?> selected="selected"<?php endif; ?>>60 DAYS</option>
                                    <option value="90 DAY" <?php if ($_REQUEST['days'] == '90 DAY'): ?> selected="selected"<?php endif; ?>>90 DAYS</option>
                                    <option value="6 MONTH" <?php if ($_REQUEST['days'] == '6 MONTH'): ?> selected="selected"<?php endif; ?>>6 MONTHS</option>
                                    <option value="9 MONTH" <?php if ($_REQUEST['days'] == '9 MONTH'): ?> selected="selected"<?php endif; ?>>9 MONTHS</option>
                                    <option value="1 YEAR" <?php if ($_REQUEST['days'] == '1 YEAR'): ?> selected="selected"<?php endif; ?>>1 YEAR</option>
                                </select>
                                <input type="text" name="percentage" class="input" id="percentage" onblur="if(this.value == '') this.value='Enter a Percentage to proceed'" onfocus="if(this.value == 'Enter a Percentage to proceed') this.value=''" value="<?php if ($_REQUEST['percentage'] != ""): ?><?php echo $_REQUEST['percentage']; ?>
<?php else: ?>Enter a Percentage to proceed<?php endif; ?>" class="searchinput" />
                                <input type="image" src="images/go_but.png" onclick="<?php echo '$(\'#submitBtn1\').click();'; ?>
" style="vertical-align:bottom;"/> 
                                <input name="input" id="submitBtn1" type="Submit" value="Submit" style="display: none;" />
                                <div class="clr"></div>
                            </div>
                          </td>
                        </tr>
                        <?php if ($_REQUEST['days'] != ''): ?>
                            <tr>
                                <td colspan="8">
                                      <div class="pagecount_info_divbox">
                                          Showing Records <?php echo $this->_tpl_vars['records_from']; ?>
 to <?php echo $this->_tpl_vars['records_to']; ?>
 of <?php echo $this->_tpl_vars['total']; ?>

                                          <div class="clr"></div>
                                      </div>
                                </td>
                            </tr> 
                            <tr>
                                    <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                    <th bgcolor="#336699" style="color:#fff;">Customer Name</th>
                                    <th bgcolor="#336699" style="color:#fff;">Address</th>
                                    <th bgcolor="#336699" style="color:#fff;">City</th>
                                    <th bgcolor="#336699" style="color:#fff;">State</th>
                                    <th bgcolor="#336699" style="color:#fff;">Zip</th>
                                    <th bgcolor="#336699" style="color:#fff;">Amount Spent During <?php echo $_REQUEST['days']; ?>
</th>
                                    <th bgcolor="#336699" style="color:#fff;">Rebate</th>
                            </tr>
                            <?php if (((is_array($_tmp=$this->_tpl_vars['customer'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0): ?>
                                <?php $_from = $this->_tpl_vars['customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                    <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-customer.php?user_id=<?php echo $this->_tpl_vars['item']['cust_id']; ?>
"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"> <?php echo $this->_tpl_vars['item']['address1']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['state']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['zip']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['amountSpent'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['rebate'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                    </tr>
                                <?php endforeach; endif; unset($_from); ?>
                                <?php if (count($this->_tpl_vars['customer']) > 0): ?>
                                    <tr>
                                        <td colspan="8" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
                                          <tr>
                                          <td  align="left" bgcolor="#336699">&nbsp;</td>
                                          <td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
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
                            <?php else: ?>
                                <tr>
                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                </tr>
                            <?php endif; ?>
                        <?php else: ?>
                            <tr>
                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>Enter Search Criteria to view the results here</strong></font></th>
                            </tr>
                        <?php endif; ?>
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
<?php echo '
<script language="javascript" type="text/javascript">
    function validateFrom(){
        if($(\'#days\').val() == \'\'){
            $(\'#errorDiv1\').html(\'Please Select the Duration\');
            return false;
        }
            
        if($(\'#percentage\').val() == \'Enter a Percentage to proceed\'){
            $(\'#errorDiv1\').html(\'Please enter a Percentage to proceed\');
            return false;
        }
        
        /* var percentage = $(\'#percentage\').val();
        var regEx = "/^[0-9]{0,8}[.][0-9]{0,2}|[0-9]{0,8}$/";
        if(regEx.test(percentage)){            
            return true;
        } else {
            $(\'#errorDiv1\').html(\'Please enter valid Decimals\');
            return false;
        } */
    }
</script>
'; ?>