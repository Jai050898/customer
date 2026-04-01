<?php /* Smarty version 2.6.26, created on 2014-03-21 03:04:03
         compiled from customer-xml-visit-spending.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'customer-xml-visit-spending.tpl', 63, false),array('modifier', 'number_format', 'customer-xml-visit-spending.tpl', 69, false),array('modifier', 'count', 'customer-xml-visit-spending.tpl', 84, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
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
								  <li>Customer visit Spending</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Customer visit Spending</div>
                                    </div>
                                     <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_REQUEST['user_id']; ?>
" />
                                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                                    <table  width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#ffffff">
                                        <tr>
                                                <td height="10" colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <td align="left" valign="top" colspan="2">
                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                                                <tr>
                                            <td align="left" valign="center" colspan="8">
                                                <div class="search_divbox"><label style="color: #FFFFFF;">From Date:</label> &nbsp;<input type="text" name="fdate" id="fdate" class="select req-string reqDate" value="<?php echo $_REQUEST['fdate']; ?>
" /> &nbsp;&nbsp;&nbsp;<label style="color: #FFFFFF;">To Date:</label> &nbsp;<input type="text" name="tdate" id="tdate" class="select req-string reqDate" value="<?php echo $_REQUEST['tdate']; ?>
" />&nbsp;&nbsp;&nbsp;<input type="image" src="../images/go_but.png" onclick="<?php echo '$(\'#submitBtn1\').click();'; ?>
" style="vertical-align:bottom;"/> </div></td>
                                        </tr>	
                                            </table>
                                    </tr>


                                        <tr>
                                            <td colspan="2">
                                                <div class="pagecount_info_divbox">
                                                    Showing Records <?php echo $this->_tpl_vars['records_from']; ?>
 to <?php echo $this->_tpl_vars['records_to']; ?>
 of <?php echo $this->_tpl_vars['total']; ?>

                                                    <div class="clr"></div>
                                                </div>
                                            </td>
                                        </tr> 
                                        <tr>
                                                <td align="left" valign="top" colspan="2">
                                                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff"  class="tableinnercontent">

                                                        <tr bgcolor="#854141" style="color:#ffffff;">
                                                            <th>S. No</th>
                                                            <th><a href="javascript: setClientSort('fullname','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCustomers);">Name</a></th>
                                                            <th>First Visit Amount</th>
                                                            <th>Second Visit Amount</th>
                                                            <th>Third Visit Amount</th>
                                                            <th>Fourth Visit Amount</th>
                                                            <th>Fifth Visit Amount</th>
                                                            <th>Total Visits Amount</th>
                                                            <th>Average RO</th>

                                                        </tr>
                                                        <?php $_from = $this->_tpl_vars['customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                            <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">

                                                                <td><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                                                <td><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-xml-customer.php?user_id=<?php echo $this->_tpl_vars['item']['cust_id']; ?>
"><?php echo $this->_tpl_vars['item']['fullname']; ?>
</a></td>
                                                                
                                                                <?php $_from = $this->_tpl_vars['item']['VisitArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
                                                                <td><?php if ($this->_tpl_vars['item1']['grossSales'] == "-1"): ?>&nbsp;<?php else: ?>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['grossSales'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php endif; ?></td>
                                                                <?php endforeach; endif; unset($_from); ?>
                                                                <td><?php if ($this->_tpl_vars['item']['grossTotal'] == ""): ?><?php echo '-N-A-'; ?>
<?php else: ?>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
<?php endif; ?></td>

                                                                <td>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['avgRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>

                                                            </tr>
                                                        <?php endforeach; else: ?>
                                                            <tr>
                                                                <th bgcolor="#f9f9f7" style="color:#000000;" colspan="9"><font color="#FF0000"><strong>No Records Found</strong></font></th>
                                                            </tr>
                                                        <?php endif; unset($_from); ?>
                                                </table>
                                                </td>
                                        </tr>
                                        <?php if (count($this->_tpl_vars['customer']) > 0): ?>
                                        <tr>
                                            <td colspan="9" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#fdate").datepicker();
	$("#tdate").datepicker();
    });	
</script>
'; ?>
