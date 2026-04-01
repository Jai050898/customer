<?php /* Smarty version 2.6.26, created on 2013-10-24 07:50:16
         compiled from manage-xml-vehicles.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-xml-vehicles.tpl', 40, false),array('function', 'cycle', 'manage-xml-vehicles.tpl', 68, false),)), $this); ?>
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
                                              <li>Manage XML Vehicles</li>
                                      </ul>
                                    <div class="clr"></div>
                            </div>
                            <div id="admin_head">Manage XML Vehicles</div>
                          </div>
                          <div class="ad_textsp">
                                <form id="ManageXMLVehicles" class="form" method="GET" name="ManageXMLVehicles">
                                        <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
                                        <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td height="10" colspan="2"></td>
                                                </tr>
                                                <tr>
                                                  <td><h2>Manage XML Vehicles</h2></td>
                                                  <td align="right">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td  colspan="2">
                                                        <div class="search_divbox">
                                                                <input type="text" name="keyword" id="keyword" value="<?php if ($_REQUEST['keyword'] != ""): ?><?php echo $_REQUEST['keyword']; ?>
<?php endif; ?>" class="searchinput" />
                                                                <input type="image" src="../images/go_but.png" onclick="document.ManageXMLVehicles.submit();" /> 
                                                                <div class="clr"></div>
                                                        </div>
                                                  </td>
                                                </tr>
                                                <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                                                    <tr>
                                                        <td colspan="2">
                                                                <table width="100%" cellspacing="0" cellpadding="5">
                                                                        <tr>
                                                                                <td  align="left" bgcolor="#854141">
                                                                                        <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'A','chkall[]');"/>
                                                                                        <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'I','chkall[]');" />
                                                                                        <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLVehicles,'D','chkall[]');"/> -->
                                                                                </td>
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
                                                <tr>
                                                    <td align="left" valign="top" colspan="2">
                                                      <table width="100%" cellpadding="0" cellspacing="0" class="admin_table">
                                                        <tr>
                                                           <!-- <th width="4%" align="left"><input type="checkbox" name="checkall" id="checkall" onclick="javascript:funCheckAll(document.ManageXMLVehicles,'chkall[]','checkall');" /></th> -->
                                                            <th width="10%" align="left"><a href="javascript: setClientSort('year','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageXMLVehicles);">Year</a> <?php if ($_REQUEST['sortby'] == 'year'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
                                                            <th width="12%" align="left"><a href="javascript: setClientSort('make','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageXMLVehicles);">Make </a> <?php if ($_REQUEST['sortby'] == 'make'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
                                                            <th width="12%" align="left"><a href="javascript: setClientSort('model','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageXMLVehicles);">Model </a> <?php if ($_REQUEST['sortby'] == 'model'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle" /><?php endif; ?></th>
                                                            <th width="20%" align="left">Vin</th>
                                                            <th width="15%" align="left">Engine</th>
                                                        </tr>
                                                        <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                            <tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
                                                                    <!--<td align="left"><input type="checkbox" name="chkall[]" id="chkall" value="<?php echo $this->_tpl_vars['item']['vehicle_id']; ?>
"/></td> -->
                                                                    <td align="left"><?php echo $this->_tpl_vars['item']['year']; ?>
</td>
                                                                    <td align="left"> <?php echo $this->_tpl_vars['item']['make']; ?>
</td>
                                                                    <td align="left"> <?php echo $this->_tpl_vars['item']['model']; ?>
</td>
                                                                    <td align="left"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/view-xml-vehicle.php?vid=<?php echo $this->_tpl_vars['item']['vehicle_id']; ?>
"><?php echo $this->_tpl_vars['item']['vin']; ?>
</a></td>
                                                                    <td align="left" ><?php echo $this->_tpl_vars['item']['engine']; ?>
</td>
                                                            </tr>
                                                        <?php endforeach; else: ?>
                                                            <tr>
                                                              <th width="100%" align="center" colspan="7"><font color="#FF0000"><strong>No XML Vehicles Added</strong></font></th>
                                                            </tr>
                                                        <?php endif; unset($_from); ?>
                                                      </table>
                                                    </td>
                                                </tr>
                                                <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table width="100%" cellspacing="0" cellpadding="5">
                                                                <tr>
                                                                    <td  align="left" bgcolor="#854141">
                                                                            <!-- <input name="input4" type="button"  value="Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'A','chkall[]');"/>
                                                                            <input name="input" type="button"  value="In Active" onclick="javascript:SetStatus(document.ManageXMLVehicles,'I','chkall[]');" />
                                                                            <input name="input2" type="button"  value="Delete" onclick="javascript:SetStatus(document.ManageXMLVehicles,'D','chkall[]');"/> -->
                                                                    </td>
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