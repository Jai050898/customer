<?php /* Smarty version 2.6.26, created on 2014-02-14 01:56:17
         compiled from top-ten-vehicles.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
	<div class="bodybg" style="min-height:475px;">
            <div class="bodyleft">
                <div style="height:10px;"></div>
                <span style="float:right;">&nbsp;</span>
                <h1>Top Ten Vehicles</h1>
                <form id="ManageCustomers" class="form" method="GET" name="ManageCustomers">
                    <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                    <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                    <table  width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                        <tr>
                                <td height="10" colspan="2"></td>
                        </tr> 
                        <tr>
                                <td align="left" valign="top" colspan="2">
                                  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc"  class="tableinnercontent">
                                        <tr>
                                            <th bgcolor="#336699" style="color:#fff;">#</th>
                                            <th bgcolor="#336699" style="color:#fff;">Top Ten Makes</th>
                                            <th bgcolor="#336699" style="color:#fff;">Top Ten Models</th>
                                        </tr>
                                        <?php $_from = $this->_tpl_vars['vehicle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <tr>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['make']; ?>
 (<?php echo $this->_tpl_vars['item']['makeCnt']; ?>
)</td>
                                                <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['model']; ?>
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
                <div class="clear"></div>
            </div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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