<?php /* Smarty version 2.6.26, created on 2014-01-31 09:25:48
         compiled from last-visited-customer-emails.tpl */ ?>
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
                                    <li>Last Visited Customer Total Emails Report</li>
                            	</ul>
                            	<div class="clr"></div>
                          	</div>
                          	<div id="admin_head">Last Visited Customer Total Emails Report</div>
                        	</div>
                            	<div id="contentpane">
                      		    <div class="bodyleft">
					<form id="ManageCustomers" class="form" method="post" name="ManageCustomers">
					    <input type="hidden" name="hid_key" id="hid_key" value="" />
					    <input type="hidden" name="hid_type" id="hid_type" value="" />
					    <input type="hidden" name="hid_id" id="hid_id" value="" />
					    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
					    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
					    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
						<tr>
							<td height="10" colspan="2"></td>
						</tr>
						<tr>
							<td align="left" valign="top" colspan="2">
							  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141"  class="tableinnercontent">
								<tr>
								        <th bgcolor="#854141" style="color:#fff;">S. No</th>
								        <th bgcolor="#854141" style="color:#fff;">Year</th>
								        <th bgcolor="#854141" style="color:#fff;">Last Time Visited Customer Emails</th>
								</tr>
								<?php $_from = $this->_tpl_vars['yearArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
								    <tr>
								        <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
								        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
								        <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['emailCnt']; ?>
</td>
								    </tr>
								<?php endforeach; else: ?>
								    <tr>
								        <th bgcolor="#f9f9f7" style="color:#000000;" colspan="7"><font color="#FF0000"><strong>No Records Found</strong></font></th>
								    </tr>
								<?php endif; unset($_from); ?>
							  </table>
							</td>
						</tr>
					    </table>
					</form>
					 <div class="clear"></div>
				  </div>
			   <div class="clear"></div>

			 </div>           
       <!--end of contentpane -->
                      </div>
                    </div>
		</div>
	</div>
</div>
