<?php /* Smarty version 2.6.26, created on 2014-02-15 06:33:16
         compiled from customer-dashboard-statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'customer-dashboard-statistics.tpl', 34, false),array('modifier', 'string_format', 'customer-dashboard-statistics.tpl', 129, false),)), $this); ?>
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
						<div id="admin_head">Customer Dashboard

<div class="admin_nav" style="float:right;font-weight:bold;">
    <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/new-xml-customers.php?&user_id=<?php echo $_REQUEST['user_id']; ?>
&fdate=<?php echo $this->_tpl_vars['todayDate']; ?>
&tdate=<?php echo $this->_tpl_vars['todayDate']; ?>
">New Customer Report</a></div>
</div>
				  
<div id="body">
    <div class="bodybg" style="min-height:475px;">
        <div>
           
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Customers</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo ((is_array($_tmp=$this->_tpl_vars['ctot'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Vehicles</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['vtot'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Orders</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['rotot'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Repair Order Transaction Details</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['ro_transactio_tot'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
            </table>
            <br /><br />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                <?php if ($this->_tpl_vars['sctot'] != 0): ?> 
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">No of Schedules</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['sctot'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Customer Lifetime Value</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >$ <?php echo ((is_array($_tmp=$this->_tpl_vars['avgCustLifeVal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Total average year of customer visits in Last 12 Months</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $this->_tpl_vars['last12monthsavgCustVisits']; ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Total average years of all time visitors</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo $this->_tpl_vars['avgCustVisits']; ?>
</td>
                </tr>
            </table>
            <br /><br />
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;">Title</th>
                    <th bgcolor="#854141" style="color:#fff;">Total</th>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Variance</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['avgVariance'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
 %</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Average Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" >$<?php echo ((is_array($_tmp=$this->_tpl_vars['averageYearTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Highest Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo $this->_tpl_vars['highestYear']; ?>
 ($<?php echo ((is_array($_tmp=$this->_tpl_vars['highestYearTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
)</td>
                </tr>
                <tr>
                    <td bgcolor="#f9f9f7" style="color:#000000;">Lowest Year</td>
                    <td bgcolor="#f9f9f7" style="color:#000000;text-align: right;" ><?php echo $this->_tpl_vars['lowestYear']; ?>
 ($<?php echo ((is_array($_tmp=$this->_tpl_vars['lowestYearTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
)</td>
                </tr>
            </table>
            <div style="height:15px;"></div>
            <div style="min-height: 30px; padding: 10px 10px 10px 30px; border: 1px solid rgb(133, 65, 65);">
                <h2 style="font-weight:bold;">CY to PY Year-wise Calculations:</h2> <br>
                <div style="background:#FF0000;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">If CY value is  Less then PY</div></div>

            <div style="background:#2090FF;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">If CY value is Greater than 10% of PY</div></div>  

            <div style="background:#000000;min-height:10px; min-width:10px; width:15px; margin:5px;"><div style="margin:0px 0px 0px 50px; width:250px">Normal value changes</div></div>

            </div>
            <br/>
            <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#854141">
                <tr>
                    <th bgcolor="#854141" style="color:#fff;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-xml-monthwise-sales-variance.php?user_id=<?php echo $_REQUEST['user_id']; ?>
" title="Monthwise Sales Variance">Year</a></th>
                    <th bgcolor="#854141" style="color:#fff;">Cust's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">RO's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">Vehi's</th>
                    <th bgcolor="#854141" style="color:#fff;">PY Variance</th>
                    <th bgcolor="#854141" style="color:#fff;">CY 2 PY Y2D (IN $'s)</th>
                    <th bgcolor="#854141" style="color:#fff;">CY 2 PY Y2D (IN %'s)</th>
                    <th bgcolor="#854141" style="color:#fff;">Total Gross Sales</th>
                    <th bgcolor="#854141" style="color:#fff;">Comparative Gross Sales(CY vs PY)</th>
                    <th bgcolor="#854141" style="color:#fff;">Variance</th>
                </tr>
                <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
                    <?php if ($this->_tpl_vars['item']['custTotal'] != 0): ?>
                        <tr>
                            <td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-monthwise-data.php?user_id=<?php echo $_REQUEST['user_id']; ?>
&y=<?php echo $this->_tpl_vars['item']['Year']; ?>
" title="Monthwise Report"><?php echo $this->_tpl_vars['item']['Year']; ?>
</a> 
                             <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/customer-weekwise-data.php?user_id=<?php echo $_REQUEST['user_id']; ?>
&y=<?php echo $this->_tpl_vars['item']['Year']; ?>
" title="Weekwise Report"> (W)</a></td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['custTotalClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['custTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['custVarianceClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['custVariance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['roTotalClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['roTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['roVarianceClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['roVariance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['vehicleTotalClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['vehicleTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 0, ".", ",") : number_format($_tmp, 0, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['vehicleVarianceClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['vehicleVariance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['grossSaleCy2PyClass']; ?>
;text-align: right;" >$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSaleCy2Py'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['grossSaleCy2PyPercentageClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSaleCy2PyPercentage'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['grossSaleClass']; ?>
;text-align: right;" >$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['grossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['comparativeGrossSaleClass']; ?>
;text-align: right;" ><?php if ($this->_tpl_vars['item']['absComparativeGrossSaleExp'] == '-'): ?> - <?php endif; ?>$<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['comparativeGrossSale'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, ".", ",") : number_format($_tmp, 2, ".", ",")); ?>
</td>
                            <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['varianceClass']; ?>
;text-align: right;" ><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['variance'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%</td>
                            <!-- <td bgcolor="#f9f9f7" style="color:<?php echo $this->_tpl_vars['item']['varianceClass']; ?>
;">&nbsp;</td> -->
                        </tr>
                    <?php endif; ?>
                 <?php endforeach; else: ?>
                    <tr>
                        <th bgcolor="#f9f9f7" style="color:#854141;" colspan="5"><font color="#854141"><strong>No Customer Data Found</strong></font></th>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();
		});	
</script>
'; ?>
