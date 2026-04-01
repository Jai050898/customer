<?php /* Smarty version 2.6.26, created on 2014-03-15 04:51:23
         compiled from manage-staff_dev.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-staff_dev.tpl', 78, false),)), $this); ?>
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
/dashboard.php">Home</a></li>
							<li>Manage Staff</li>
							
						  </ul>
						<div class="clr"></div>
					  </div>
                                        <div id="admin_head">Manage staff

                                        <div class="admin_nav" style="float:right;font-weight:bold;">
    <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/add-staff.php?user_id=<?php echo $_GET['user_id']; ?>
">Add Staff</a></div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
        <form id="ManageStaff" class="form" method="GET" name="ManageStaff">
            <input type="hidden" name="sortby" value="<?php echo $_REQUEST['sortby']; ?>
" />
            <input type="hidden" name="sortoption" value="<?php echo $_REQUEST['sortoption']; ?>
" />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <td height="10" colspan="2"></td>
                </tr>
                <tr>
                 
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
                      <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141" class="tableinnercontent">
                            <tr>
                                <th bgcolor="#854141" style="color:#fff;">S. No</th>
                                <th bgcolor="#854141" style="color:#fff;"><a href="javascript: setClientSort('first_name','<?php echo $this->_tpl_vars['sortioption']; ?>
',document.ManageStaff);">First Name</a> <?php if ($_REQUEST['sortby'] == 'first_name'): ?><img src="images/<?php echo $this->_tpl_vars['sortimoption']; ?>
.gif" alt="" align="absmiddle"  /><?php endif; ?>  </th>
                                <th bgcolor="#854141" style="color:#fff;">Last Name </th>
                                <th bgcolor="#854141" style="color:#fff;">UserName</th>
                                <th bgcolor="#854141" style="color:#fff;">Password</th>
                                
                                <th bgcolor="#854141" style="color:#fff;">Email</th>
                            </tr>
                            <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                <tr>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['first_name']; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['last_name']; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['user_name']; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['password']; ?>
</td>
                                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['item']['email']; ?>
</td>
                                    
                                </tr>
                        <?php endforeach; else: ?>
                                <tr>
                                  <th bgcolor="#f9f9f7" style="color:#000000;text-align:center" colspan="6"><font color="#FF0000"><strong>No Staff Available</strong></font></th>
                                </tr>
                            <?php endif; unset($_from); ?>
                      </table>
                    </td>
                </tr>
                <?php if (count($this->_tpl_vars['Users']) > 0): ?>
                        <tr>
                  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
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
	</td>
							</tr>
							<tr>
								<td align="left" valign="top">&nbsp;</td>
							</tr>
						</table>
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
/js/jquery.alerts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/js/jquery.ufvalidator-1.0.4.js"></script>