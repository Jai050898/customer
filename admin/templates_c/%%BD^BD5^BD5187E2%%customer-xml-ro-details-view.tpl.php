<?php /* Smarty version 2.6.26, created on 2014-01-27 07:49:26
         compiled from customer-xml-ro-details-view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'customer-xml-ro-details-view.tpl', 28, false),array('modifier', 'number_format', 'customer-xml-ro-details-view.tpl', 32, false),array('modifier', 'nl2br', 'customer-xml-ro-details-view.tpl', 48, false),)), $this); ?>
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
                    <!--body-->
                        <div id="body">
                            <div class="bodybg" style="min-height:475px;">
                                <div class="bodyleft">
                                    <div style="height:10px;"></div>
                                        <h1>Customer RO Detailed View</h1>

                                        <div style="height:10px;"></div>
                                        <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
                                        <?php $_from = $this->_tpl_vars['RODetails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                            <tr>
                                                <td align="left" valign="top"  colspan="2"><h2>#<?php echo $this->_tpl_vars['k']+1; ?>
:</h2></td>
                                            </tr>
                                            <tr>
                                                <td align="right" valign="center" style="padding-left:55px;" width="35%">Line Items Order :</td>
                                                <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['item']['lineitemsortorder']; ?>
</td>
                                            </tr>
                                            <tr>
                                                <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Quantity :</td>
                                                <td align="left" valign="center" width="65%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['unitquantity'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
                                            </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Cost :</td>
                                            <td align="left" valign="center" width="65%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['unitcost'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Unit Sale :</td>
                                            <td align="left" valign="center" width="65%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['unitsale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Extented Cost :</td>
                                            <td align="left" valign="center" width="65%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['extendedcost'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Extented Sale :</td>
                                            <td align="left" valign="center" width="65%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['extendedsale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="top" style="padding-left:55px;" width="35%">Detailed Description :</td>
                                            <td align="left" valign="center" width="65%"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['detaildescription'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Material Supplier :</td>
                                            <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['item']['materialsupplier']; ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Material Manufacturer :</td>
                                            <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['item']['materialmanufacturer']; ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Part Number :</td>
                                            <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['item']['partnumber']; ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Hours :</td>
                                            <td align="left" valign="center" width="65%"><?php echo $this->_tpl_vars['item']['laborhours']; ?>
</td>
                                        </tr>
                                        <tr>
                                            <td align="right" valign="center" style="padding-left:55px;" width="35%">Labor Rate:</td>
                                            <td align="left" valign="center" width="65%">$<?php echo ((is_array($_tmp=$this->_tpl_vars['RODetails']['laborrate'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                        </tr>
                                        <?php endforeach; else: ?>
                                        <tr>
                                            <td align="left" valign="top"  colspan="2"><font color="#FF0000"><strong>No MMS RO's Found</strong></font></td>
                                        </tr>
                                        <?php endif; unset($_from); ?>
                                        </table>
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
                        <!--end body-->	
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