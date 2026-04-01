<?php /* Smarty version 2.6.26, created on 2014-01-20 05:57:48
         compiled from manage-xml-customer-spendings.tpl */ ?>
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
                          <div class="admin-rightpart">
                        <div class="admin_topbgnav">
                          <div id="admin_bcrumb">
                            <ul>
                                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/dashboard.php">Home</a></li>
                                    <li>Manage Spendings By Customer Visits</li>
                            </ul>
                            <div class="clr"></div>
                          </div>
                          <div id="admin_head">Manage Spendings By Customer Visits</div>
                        </div>
                        <div class="ad_textsp">
                
                    <div class="bodyleft">
               
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr>
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                        <tr>
                                            <th  width="7%" align="left">S.No</th>
                                            <th  width="7%" align="left">Customer Spendings</th>
                                            <th  width="7%" align="left"> (Last 12 Months)</th>
                                            <th  width="7%" align="left"> For All Times</th>
                                                
                                        </tr>
                                        <tr>
                                            
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">1</td>
                                            <td align="left">$0 - $250</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto250TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto250TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#f3f3f3;">
                                            <td align="left">2</td>
                                            <td align="left">$251 - $500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto500TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">3</td>
                                            <td align="left">$501 - $1,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1000TotalAll']; ?>
</td>
                                        </tr>
                                         <tr style="background-color:#f3f3f3;">
                                            <td align="left">4</td>
                                            <td align="left">$1,001 - $1,250</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1250TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1250TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">5</td>
                                            <td align="left">$1,251 - $1,500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto1500TotalAll']; ?>
</td>
                                        </tr>
                                         <tr style="background-color:#f3f3f3;">
                                            <td align="left">6</td>
                                            <td align="left">$1,501 - $2,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto2000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto2000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">7</td>
                                            <td align="left">$2,001 - $2,500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto2500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto2500TotalAll']; ?>
</td>
                                        </tr>
                                         <tr style="background-color:#f3f3f3;">
                                            <td align="left">8</td>
                                            <td align="left">$2,501 - $3,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto3000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto3000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">9</td>
                                            <td align="left">$3,001 - $3,500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto3500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto3500TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#f3f3f3;">
                                            <td align="left">10</td>
                                            <td align="left">$3,501 - $5,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto5000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto5000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">11</td>
                                            <td align="left">$5,001 - $7,500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto7500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto7500TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#f3f3f3;">
                                            <td align="left">12</td>
                                            <td align="left">$7,501 - $10,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto10000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto10000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">13</td>
                                            <td align="left">$10,001 - $12,500</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto12500TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto12500TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#f3f3f3;">
                                            <td align="left">14</td>
                                            <td align="left">$12,501 - $15,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto15000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto15000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">15</td>
                                            <td align="left">$15,001 - $20,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto20000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto20000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#f3f3f3;">
                                            <td align="left">16</td>
                                            <td align="left">$20,001 - $25,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto25000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto25000TotalAll']; ?>
</td>
                                        </tr>
                                        <tr style="background-color:#ffffff;">
                                            <td align="left">17</td>
                                            <td align="left">$25,001 - $30,000</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto30000TotalYear']; ?>
</td>
                                            <td align="left"><?php echo $this->_tpl_vars['customer']['upto30000TotalAll']; ?>
</td>
                                        </tr>
                                  </table>
                                </td>
                        </tr>
                    </table>
                        
                </form>
                <div class="clear"></div>
            </div>
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