<?php /* Smarty version 2.6.26, created on 2014-01-03 08:25:03
         compiled from customer-weekwise-data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'customer-weekwise-data.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Weekwise Data</h1>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Title</th>
                    <th bgcolor="#336699" style="color:#fff;">Week</th>
                    <th bgcolor="#336699" style="color:#fff;">Total</th>
                    <th bgcolor="#336699" style="color:#fff;">Week</th>
                    <th bgcolor="#336699" style="color:#fff;">Average RO</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Week</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['highestWeek']; ?>
</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['highestWeekTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['highestROWeek']; ?>
</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['highestRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
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
                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['lowestRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
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
                    <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['averageROTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                </tr>
            </table>
            <div style="height:10px;"></div>
            <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#6699cc">
                <tr>
                    <th bgcolor="#336699" style="color:#fff;">Week</th>
                    <th bgcolor="#336699" style="color:#fff;">Repair Orders</th>
                    <th bgcolor="#336699" style="color:#fff;">Gross Sales</th>
                    <th bgcolor="#336699" style="color:#fff;">Average RO</th>
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
                        <td bgcolor="#f9f9f7" style="color:#000000;">$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['avgRO'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>