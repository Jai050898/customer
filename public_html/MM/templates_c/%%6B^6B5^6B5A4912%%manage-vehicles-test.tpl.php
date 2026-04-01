<?php /* Smarty version 2.6.26, created on 2013-09-20 04:28:06
         compiled from manage-vehicles-test.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-vehicles-test.tpl', 64, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div class="bodyleft">
            <div style="height:10px;"></div>
            <span style="float:right;">&nbsp;</span>
            <h1>Manage Vehicles</h1>
            <form id="ManageVehicles" class="form" method="post" name="ManageVehicles">
                <input type="hidden" name="hid_key" id="hid_key" value="" />
                <input type="hidden" name="hid_type" id="hid_type" value="" />
                <input type="hidden" name="hid_id" id="hid_id" value="" />
                <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                    <tr>
                        <td height="10" colspan="2"></td>
                    </tr>
                    <tr>
                        <td align="left" valign="top" colspan="2">
                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                                <tr>
                                    <td align="right" valign="top" style="padding-left:5px; color: #013F7D">From Date:</td>
                                    <td align="left" valign="center"><input type="text" name="sdate" id="sdate" class="select" value="<?php echo $_REQUEST['sdate']; ?>
"/></td>
                                    <td>&nbsp;</td>
                                    <td align="right" valign="top" style="padding-left:5px;  color: #013F7D">To Date:</td>
                                    <td align="left" valign="center"><input type="text" name="edate" id="edate" class="select" value="<?php echo $_REQUEST['edate']; ?>
"/></td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                    </tr>
                    <tr>
                      <td colspan="2">
                            <div class="search_divbox">
                                <input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
                                <input type="image" src="images/go_but.png" onclick="document.ManageVehicles.submit();"  style="vertical-align:bottom;"/> 
                                <div class="clr"></div>
                            </div>
                      </td>
                    </tr>
                    
                    <tr>
                        <td align="left" valign="top" colspan="2">
                          <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                            <tr>
                                <th bgcolor="#336699" style="color:#fff;">S. No</th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('make','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageVehicles);">Make </a> <?php if ($_REQUEST['sortby'] == 'make'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
                                <th bgcolor="#336699" style="color:#fff;"><a href="javascript: setClientSort('Total','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageVehicles);">Total</a></th>
                            </tr>
                            <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                <tr>
                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-models-by-make.php?user_id=<?php echo $_REQUEST['user_id']; ?>
&make=<?php echo $this->_tpl_vars['item']['make']; ?>
&sdate=<?php echo $_REQUEST['sdate']; ?>
&edate=<?php echo $_REQUEST['edate']; ?>
"><?php echo $this->_tpl_vars['item']['make']; ?>
</a></td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-models-by-make.php?user_id=<?php echo $_REQUEST['user_id']; ?>
&make=<?php echo $this->_tpl_vars['item']['make']; ?>
&sdate=<?php echo $_REQUEST['sdate']; ?>
&edate=<?php echo $_REQUEST['edate']; ?>
"><?php echo $this->_tpl_vars['item']['Total']; ?>
</a></td>
                                    </tr>
                            <?php endforeach; else: ?>
                                <tr>
                                    <th align="center" bgcolor="#f9f9f7" style="color:#000000;" colspan="6"><font color="#FF0000"><strong>No Vehicles Added</strong></font></th>
                                </tr>
                            <?php endif; unset($_from); ?>
                          </table>
                        </td>
                    </tr>
                    <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                            <tr>
                                <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script type="text/javascript" lang="javascript">
    $(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
    });	
</script>
'; ?>