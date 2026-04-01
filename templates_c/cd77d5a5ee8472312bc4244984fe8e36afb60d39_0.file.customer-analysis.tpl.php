<?php
/* Smarty version 3.1.48, created on 2026-03-31 12:11:52
  from '/var/www/html/templates/customer-analysis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbba0804f863_45713469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd77d5a5ee8472312bc4244984fe8e36afb60d39' => 
    array (
      0 => '/var/www/html/templates/customer-analysis.tpl',
      1 => 1774959102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:rightbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbba0804f863_45713469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style type="text/css">
    .month-tab-market table td {
        font-weight: normal;
    }
</style>

<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
            <div style="height:10px;"></div>

            <span style="float:right;">&nbsp;</span>
            <h1>Customer Analysis</h1>
            <div style="height:10px;"></div>
            
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#6699cc" style="border:1px solid #6699cc">
                    <tr>
                    <th width="9%" height="30"  align="left" valign="top">
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Data</th>
                            </tr>
                            <tr>
                              <th  height="30" colspan="2" bgcolor="#336699" align="center" valign="middle" style="color:#fff;">Gross Customers</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Repair Orders</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Vehicles</th>
                            </tr>
                            
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Labor Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Parts Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Discounts</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Net Sales</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(Prior 2 Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts to Labor Ratio&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Gross Disc/Adj</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Parts Sales as % of Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Labor Sales as a % of Sales</th>
                            </tr>

                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#336699" align="center" valign="middle"  style="color:#fff;">Average Discount Per RO</th>
                            </tr>

                            </table>
                    </th>

                    <th width="9%" height="30"  align="left" valign="top">
                                <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['years'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <td height="30" align="center" valign="middle" bgcolor="#336699" style="color:#fff;"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grossCustomers'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,0,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grossRos'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,0,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>


                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grossVehicles'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,0,".",",");?>
</td>    
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grosslaborSales'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grosspartsSales'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['grossSales'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['discount'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['netSale'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                     <tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['comparitiveGrossSale'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['variance'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['averageROB4Discount'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['averageROAfterDiscount'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['PartsToLaborRatio'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                     <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['managercharges'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$ <?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>

                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['percentagePartsSales'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
%</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['percentageLaborSales'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
%</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allArray']->value['AverageDiscountRO'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;">$<?php echo number_format($_smarty_tpl->tpl_vars['item']->value,2,".",",");?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                           
                                            
                                            
                                  </table>
                            </th>
                    </tr>
            </table>
            <div style="height:10px; clear:both;"></div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="clear"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
