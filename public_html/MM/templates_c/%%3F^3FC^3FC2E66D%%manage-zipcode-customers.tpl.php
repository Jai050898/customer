<?php /* Smarty version 2.6.26, created on 2013-10-23 06:47:10
         compiled from manage-zipcode-customers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'manage-zipcode-customers.tpl', 51, false),array('modifier', 'count', 'manage-zipcode-customers.tpl', 68, false),)), $this); ?>
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
            <h1>Manage Zipcode Customers</h1>
            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                    <tr>
                        <td height="10" colspan="2"></td>
                    </tr>
                    <tr>
                      <td  colspan="2">
                        <div class="search_divbox" style="color:#fff;">
                                <input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" style="width:150px;"/>
                                <input type="image" src="images/go_but.png" onclick="document.ManageCustomers.submit();" style="vertical-align:bottom;" /> 
                                <div class="clr"></div>
                        </div>
                      </td>
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
                          <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" class="tableinnercontent">
                                <tr>
                                    <th bgcolor="#336699" style="color:#fff;">S. No</th>                     
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('zip','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCustomers);">Zip Code</a> <?php if ($_REQUEST['sortby'] == 'zip'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('city','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCustomers);">City</a> <?php if ($_REQUEST['sortby'] == 'city'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
                                    <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Ccount','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageCustomers);">No Of Customers</a></th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent in <?php echo $this->_tpl_vars['currentYear']; ?>
</th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent Lifetime</th>
                                    <th bgcolor="#336699" style="color:#fff;">Total Amount Spent Lifetime(Only visited during this Year)</th>
                                </tr>
                                <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['item']['zip'] != ""): ?>
                                    <tr>
                                            <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['zip']; ?>
</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['city']; ?>
</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customers.php?zip=<?php echo $this->_tpl_vars['item']['zip']; ?>
"> <?php echo $this->_tpl_vars['item']['Ccount']; ?>
</a></td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['totalSpentYear'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['totalSpentLifetime'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                            <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['totalCustSpentVisitedThisYear'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                    </tr>
                                    <?php else: ?>
                                        <tr>
                                            <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                          </tr>
                                    <?php endif; ?>
                                <?php endforeach; else: ?>
                                    <tr>
                                      <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customers Available</strong></font></th>
                                    </tr>
                                <?php endif; unset($_from); ?>
                          </table>
                        </td>
                    </tr>
                    <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                        <tr>
                            <td colspan="7" bgcolor="#f9f9f7">
                                <table width="100%" cellspacing="0" cellpadding="5">
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