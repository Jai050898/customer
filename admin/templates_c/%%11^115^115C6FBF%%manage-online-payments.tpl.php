<?php /* Smarty version 2.6.26, created on 2014-02-22 07:50:50
         compiled from manage-online-payments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'manage-online-payments.tpl', 26, false),array('function', 'cycle', 'manage-online-payments.tpl', 57, false),)), $this); ?>
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
								  <li>Manage Online Payments</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Manage Online Payments
						
                                                <div class="admin_nav" style="float:right;font-weight:bold;">
                                                    <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/addInvoice.php">Add Invoice</a></div>

						</div>
                                    </div>
                                    <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#fff">
                                     <?php if (count($this->_tpl_vars['allInvoice']) > 0): ?>
                                                    <tr>
                                                            <td colspan="3">
                                                                    <table width="100%" cellspacing="0" cellpadding="5">
                                                                            <tr>
                                                                            
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
                                                     <div id="body">
                                                        <div class="bodybg" style="min-height:475px;">
                                                            <div>

                                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#fff">
                                                             <tr>				
                                                                    <td height="32" align="center" class="error" style="color:#ff0000;"><?php echo $this->_tpl_vars['Errormssage']; ?>
</td>			
                                                                </tr>
                                                                <tr>
                                                                    <td  bgcolor="#f9f9f7" style="color:#000000;" colspan="5"> <?php echo $this->_tpl_vars['generatedLink']; ?>
 </td>
                                                                </tr> 
                                                                <tr>
                                                                    <th width="20%" align="left">Invoice Number</th>
                                                                    <th width="20%" align="left">Amount( in $)</th>
                                                                    <th width="40%" align="left">Link</th>
                                                                    <th align="center" width="20%">Action</th>
                                                                </tr>
                                                                    <?php unset($this->_sections['invoice']);
$this->_sections['invoice']['name'] = 'invoice';
$this->_sections['invoice']['loop'] = is_array($_loop=$this->_tpl_vars['allInvoice']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['invoice']['show'] = true;
$this->_sections['invoice']['max'] = $this->_sections['invoice']['loop'];
$this->_sections['invoice']['step'] = 1;
$this->_sections['invoice']['start'] = $this->_sections['invoice']['step'] > 0 ? 0 : $this->_sections['invoice']['loop']-1;
if ($this->_sections['invoice']['show']) {
    $this->_sections['invoice']['total'] = $this->_sections['invoice']['loop'];
    if ($this->_sections['invoice']['total'] == 0)
        $this->_sections['invoice']['show'] = false;
} else
    $this->_sections['invoice']['total'] = 0;
if ($this->_sections['invoice']['show']):

            for ($this->_sections['invoice']['index'] = $this->_sections['invoice']['start'], $this->_sections['invoice']['iteration'] = 1;
                 $this->_sections['invoice']['iteration'] <= $this->_sections['invoice']['total'];
                 $this->_sections['invoice']['index'] += $this->_sections['invoice']['step'], $this->_sections['invoice']['iteration']++):
$this->_sections['invoice']['rownum'] = $this->_sections['invoice']['iteration'];
$this->_sections['invoice']['index_prev'] = $this->_sections['invoice']['index'] - $this->_sections['invoice']['step'];
$this->_sections['invoice']['index_next'] = $this->_sections['invoice']['index'] + $this->_sections['invoice']['step'];
$this->_sections['invoice']['first']      = ($this->_sections['invoice']['iteration'] == 1);
$this->_sections['invoice']['last']       = ($this->_sections['invoice']['iteration'] == $this->_sections['invoice']['total']);
?>
<tr style="background-color:<?php echo smarty_function_cycle(array('values' => '#ffffff,#f3f3f3'), $this);?>
;">
                                                                    <td align="left"><?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['invoiceNumber']; ?>
</td>
                                                                    <td align="left"><?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['invoiceAmount']; ?>
</td>
                                                                    <td align="left"><?php if ($this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['is_link_generated'] == 'Y'): ?><a href="https://autorepairmarketing.com/savemoney.php?id=<?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['id']; ?>
" target="_blank">https://autorepairmarketing.com/savemoney.php?id=<?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['id']; ?>
</a> <?php else: ?>- <?php endif; ?></td>
                                                                    <td align="center"><a href='manage-online-payments.php?action=del&id=<?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['id']; ?>
'><img src="../images/delete.png" border="0" alt="Delete" title="Delete"/></a>&nbsp;&nbsp;&nbsp;<a href='editInvoice.php?action=edit&id=<?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['id']; ?>
'><img src="../images/page_edit.png" border="0" alt="Edit" title="Edit"/></a>
                                                                        <?php if ($this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['is_link_generated'] == 'N'): ?>
                                                                            &nbsp;&nbsp;&nbsp;<a href='<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-online-payments.php?action=generateLink&id=<?php echo $this->_tpl_vars['allInvoice'][$this->_sections['invoice']['index']]['id']; ?>
'><img src="../images/link.jpeg" border=0" alt="Generate Link" title="Generate Link"/></a>
                                                                        <?php endif; ?>
                                                                        </td>
                                                               </tr>
                                                                    <?php endfor; else: ?>
                                                                <tr>
                                                                    <td align="center" width="100%" colspan="3" style="color:#ff0000"> No records found!!! </td>
                                                                </tr>
                                                                <?php endif; ?>
                                                                   
                                                                 <?php if (count($this->_tpl_vars['allInvoice']) > 0): ?>
                                                    <tr>
                                                            <td colspan="5">
                                                                    <table width="100%" cellspacing="0" cellpadding="5">
                                                                            <tr>
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

					<!--end of right part -->
					  <div class="clr"></div>
                                    </div>
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
