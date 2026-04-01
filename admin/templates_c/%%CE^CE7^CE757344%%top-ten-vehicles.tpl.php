<?php /* Smarty version 2.6.26, created on 2014-03-20 09:18:26
         compiled from top-ten-vehicles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'top-ten-vehicles.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-xml-vehicles.php">Manage XML Vehicles</a></li>
								 
                                                                  <li>Top Ten Vehicles</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Top Ten Vehicles</div>
                                                </div>
                
                                            <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                                                <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                                                <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                                                <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff">
                                                    <tr>
                                                            <td height="10" colspan="2"></td>
                                                    </tr> 
                                                    <tr>
                                                            <td align="left" valign="top" colspan="2">
                                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#ffffff"  class="tableinnercontent">
                                                                       <tr bgcolor="#854141" style="color:#ffffff;">
                                                                        <th>#</th>
                                                                        <th>Top Ten Makes</th>
                                                                        <th>Top Ten Models</th>
                                                                    </tr>
                                                                    <?php $_from = $this->_tpl_vars['vehicle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                                                    <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
                                                                            <td><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                                                            <td><?php echo $this->_tpl_vars['item']['make']; ?>
 (<?php echo $this->_tpl_vars['item']['makeCnt']; ?>
)</td>
                                                                            <td><?php echo $this->_tpl_vars['item']['model']; ?>
 (<?php echo $this->_tpl_vars['item']['modelCnt']; ?>
)</td>
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
/admin/js/jquery.ufvalidator-1.0.4.js"></script>