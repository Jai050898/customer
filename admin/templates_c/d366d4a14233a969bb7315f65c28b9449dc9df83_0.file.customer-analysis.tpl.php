<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:17:32
  from '/var/www/html/admin/templates/customer-analysis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbad4c4ffdf9_51369611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd366d4a14233a969bb7315f65c28b9449dc9df83' => 
    array (
      0 => '/var/www/html/admin/templates/customer-analysis.tpl',
      1 => 1774346218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:right-bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbad4c4ffdf9_51369611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl->_subTemplateRender("file:right-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div id="innerleft">
			  <div class="admin-rightpart">
				  <div class="admin_topbgnav">
						<div id="admin_bcrumb">
							  <ul>
								  <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/dashboard.php">Home</a></li>
								  <li>Customer Dashboard</li>
							  </ul>
							<div class="clr"></div>
						</div>
						<div id="admin_head">Customer Analysis</div>
				  </div>
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
          
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="month-tab-market"  bgcolor="#754141">
                    <tr>
                    <th width="9%" height="30"  align="left" valign="top">
                        <table width="100%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                                <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Data</th>
                            </tr>
                            <tr>
                              <th  height="30" colspan="2" bgcolor="#854141" align="center" valign="middle" style="color:#fff;">Gross Customers</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Repair Orders</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Vehicles</th>
                            </tr>
                            
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Labor Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Parts Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Gross Discounts</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Net Sales</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Comparative Gross Sales&nbsp;&nbsp;(CY vs PY)</th>
                            </tr>
                            <tr>
                                <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Variance&nbsp;&nbsp;(Comparative Gross Sales (CY vs PY))</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(Prior 2 Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Repair Order&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Parts to Labor Ratio&nbsp;&nbsp;(After Discount)</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Parts Sales as % of Sales</th>
                            </tr>
                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Labor Sales as a % of Sales</th>
                            </tr>

                            <tr>
                              <th colspan="2" height="30" scope="row" bgcolor="#854141" align="center" valign="middle"  style="color:#fff;">Average Discount Per RO</th>
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
                                        <td height="30" align="center" valign="middle" bgcolor="#854141" style="color:#fff;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grossCustomers'],0,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle" bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grossRos'],0,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>


                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grossVehicles'],0,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>    
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grosslaborSales'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grosspartsSales'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['grossSales'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30"  align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['discount'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['netSale'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                     <tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['comparitiveGrossSale'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['variance'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['averageROB4Discount'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['averageROAfterDiscount'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['PartsToLaborRatio'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>

                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['percentagePartsSales'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;?>
%<?php }?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['percentageLaborSales'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {
echo $_smarty_tpl->tpl_vars['item']->value;?>
%<?php }?></td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, number_format($_smarty_tpl->tpl_vars['allArray']->value['AverageDiscountRO'],2,".",","), 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <td height="30" align="center" valign="middle"  bgcolor="#f9f9f7" style="color:#000000;"><?php if ($_smarty_tpl->tpl_vars['item']->value != 0.00) {?>$<?php echo $_smarty_tpl->tpl_vars['item']->value;
}?></td>
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
        { * include file="rightbar.tpl"* }
        <div class="clear"></div>
    </div>
</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
