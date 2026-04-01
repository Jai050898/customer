<?php /* Smarty version 2.6.26, created on 2014-01-24 07:33:18
         compiled from new-customers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'new-customers.tpl', 56, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div>
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <div>
                    <div style="float: left;"><h1>New Customer Reports</h1></div>
                
                    <div style="clear:both;"></div>
                </div>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers" onsubmit="return validateFrom();">
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                        <tr>
                            <td colspan="8" id="errorDiv1" style="color:#935;font-size:12px; text-align: center;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="left" valign="center" colspan="8">
                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="<?php echo $_REQUEST['fdate']; ?>
" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="<?php echo $_REQUEST['tdate']; ?>
" />&nbsp;&nbsp;&nbsp;<input type="image" src="images/go_but.png" onclick="<?php echo '$(\'#submitBtn1\').click();'; ?>
" style="vertical-align:bottom;"/> </div></td>
			</tr>				  
                        <?php if ($_REQUEST['fdate'] != ''): ?>
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
                                    <th bgcolor="#336699" style="color:#fff;">City</th>
                                    <th bgcolor="#336699" style="color:#fff;">State</th>
                                    <th bgcolor="#336699" style="color:#fff;">Zip</th>
                                    <th bgcolor="#336699" style="color:#fff;">Registered Date</th>
                                    
                            </tr>
                            <?php if ($this->_tpl_vars['customerCnt'] > 0): ?>
                                <?php $_from = $this->_tpl_vars['customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                    <tr>
                                        <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: left;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-customer.php?user_id=<?php echo $this->_tpl_vars['item']['cust_id']; ?>
"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</a></td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: left;"><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: left;"><?php echo $this->_tpl_vars['item']['state']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: left;"><?php echo $this->_tpl_vars['item']['zip']; ?>
</td>
                                        <td bgcolor="#f9f9f7" style="color:#000000;text-align: left;"><?php echo $this->_tpl_vars['item']['reg_date']; ?>
</td>
                                    </tr>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php else: ?>
                                <tr>
                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                </tr>
                            <?php endif; ?>
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
                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="8"><font color="#FF0000"><strong>Select duration to view the results here</strong></font></th>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
    function validateFrom(){
        if($(\'#fdate\').val() == \'\'){
            $(\'#errorDiv1\').html(\'Please Select the From Date\');
            return false;
        }
            
        if($(\'#tdate\').val() == \'\'){
            $(\'#errorDiv1\').html(\'Please Select the To Date\');
            return false;
        }
    }
    $(document).ready(function() {	
	$("#fdate").datepicker();
	$("#tdate").datepicker();
    });
</script>
'; ?>
