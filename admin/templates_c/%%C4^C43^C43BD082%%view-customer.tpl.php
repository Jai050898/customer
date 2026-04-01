<?php /* Smarty version 2.6.26, created on 2014-01-27 07:46:23
         compiled from view-customer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-customer.tpl', 26, false),array('modifier', 'number_format', 'view-customer.tpl', 43, false),array('modifier', 'date_format', 'view-customer.tpl', 54, false),)), $this); ?>
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
                            <!--body-->
                            <div id="body">
                                <div class="bodybg" style="min-height:475px;">
                                    <div class="bodyleft">
                                        <div style="height:10px;"></div>
                                            <h1>View Customer</h1>
                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">Name :</td>
                                                    <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['fname']; ?>
 <?php echo $this->_tpl_vars['User']['lname']; ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">Email :</td>
                                                    <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['email']; ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">Address :</td>
                                                    <td align="left" valign="center" width="65%"><?php echo ((is_array($_tmp=$this->_tpl_vars['User']['address1'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">State :</td>
                                                    <td align="left" valign="center" width="65%"><?php if ($this->_tpl_vars['User']['State_Name'] != ''): ?><?php echo $this->_tpl_vars['User']['State_Name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['User']['state']; ?>
<?php endif; ?></td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">City :</td>
                                                    <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['city']; ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="center" style="padding-left:55px;" width="35%">Zip Code :</td>
                                                    <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['User']['zip']; ?>
</td>
                                                </tr>
                                            </table>
		    
                                            <div style="height:10px;"></div>
                                            <h2>Lifetime Spending Total: $<?php echo ((is_array($_tmp=$this->_tpl_vars['User']['lifetimeSpendingTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</h2>
                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                                                <tr>
                                                    <th>Visit</th>
                                                    <th>Amount Spent</th>
                                                    <th>Date</th>
                                                </tr>
                                                <?php $_from = $this->_tpl_vars['RODetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                    <tr>
                                                        <td align="right" valign="top" width="15%"  style="text-align:center"><h2><?php echo $this->_tpl_vars['k']+1; ?>
</h2></td>
                                                        <td align="left" valign="center" width="55%"  style="text-align:center"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-ro-details-view.php?id=<?php echo $this->_tpl_vars['item']['ro_id']; ?>
">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['roDetailtotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</a></td>
                                                        <td align="left" valign="center" width="30%"  style="text-align:center"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-ro-details-view.php?id=<?php echo $this->_tpl_vars['item']['ro_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['transaction_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
</a></td>
                                                    </tr>
                                                <?php endforeach; else: ?>
                                                    <tr>
                                                        <td align="left" valign="top"  colspan="3"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></td>
                                                    </tr>
                                                <?php endif; unset($_from); ?>
                                            </table>

                                        </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!--end body-->	
                            </div>
                       </div>
            </div>
        </div>
</div>
