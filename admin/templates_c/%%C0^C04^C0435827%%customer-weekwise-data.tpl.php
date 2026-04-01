<?php /* Smarty version 2.6.26, created on 2014-02-26 03:45:00
         compiled from customer-weekwise-data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'customer-weekwise-data.tpl', 37, false),)), $this); ?>
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
                                                            <li>Customer Dashboard</li>
                                                    </ul>
                                                <div class="clr"></div>
                                        </div>
                                        <div id="admin_head">Customer Weekwise Data</div>
                                </div>

                                <div id="body">
                                    <div class="bodybg" style="min-height:475px;">
                                        <div>

                                            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                                                <tr>
                                                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Week</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Week</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(Before Discount)</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(After Discount)</th>

                                                </tr>
                                                <tr>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Week</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['highestWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['highestWeekTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['highestROWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['highAvgROB4'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['highAvgROAfter'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Week</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lowestWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['lowestWeekTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['lowestROWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['lowAvgROB4'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['lowAvgROAfter'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                </tr>
                                                <tr>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Week</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['averageWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['averageWeekTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['averageROWeek']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['AverageROB4'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['AverageROAfter'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                <!--
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['averageROTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                -->
                                                </tr>
                                            </table>
                                            <div style="height:10px;"></div>
                                            <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#854141">
                                                <tr>
                                                    <th bgcolor="#854141" style="color:#fff;">Week</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Repair Orders</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Gross Sales</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Gross Discounts</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Net Sales</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(Before Discount)</th>
                                                    <th bgcolor="#854141" style="color:#fff;">Average RO<br/>(After Discount)</th>

                                                </tr>
                                                <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                                                <tr>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['Week']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['roTotal']; ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['discount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['netSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['averageROB4Discount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>

                                                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['averageROAfterDiscount'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>

                                                </tr>
                                                <?php endforeach; else: ?>
                                                <tr>
                                                    <th bgcolor="#f9f9f7" style="color:#000000;" colspan="3"><font color="#FF0000"><strong>No Customer Data Found</strong></font></th>
                                                </tr>
                                                <?php endif; unset($_from); ?>
                                            </table>
                                            <div style="height:10px; clear:both;"></div>
                                        </div>
                                                                                <div class="clear"></div>
                                    </div>
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
