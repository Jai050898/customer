<?php /* Smarty version 2.6.26, created on 2013-09-17 02:11:52
         compiled from edit-wis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'edit-wis.tpl', 76, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>Calculate What if Scenario</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Technicians:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[technicians]" id="technicians" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['technicians']; ?>
"/></td>
				  <td align="right" valign="center" style="padding-left:5px;">Advisors:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[advisors]" id="advisors" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['advisors']; ?>
"/></td>
				</tr>
					
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Effeciency:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[effeciency]" id="effeciency" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['effeciency']; ?>
"/></td>
				  <td align="right" valign="center" style="padding-left:5px;">Productivity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[productivity]" id="productivity" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['productivity']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Labor Rate:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[labor_rate]" id="labor_rate" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['labor_rate']; ?>
"/></td>
				  <td align="right" valign="center" style="padding-left:5px;">Parts to Labor Ratio:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[parts_to_labor_ratio]" id="parts_to_labor_ratio" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['parts_to_labor_ratio']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Labor Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[labor_percentage]" id="labor_percentage" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['labor_percentage']; ?>
"/>%</td>
				  <td align="right" valign="center" style="padding-left:5px;">Parts Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[parts_percentage]" id="parts_percentage" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['parts_percentage']; ?>
"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Advertising Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[advertising_percentage]" id="advertising_percentage" class="select req-string req-numeric"  style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['advertising_percentage']; ?>
"/>%</td>
				  <td align="right" valign="center" style="padding-left:5px;">Rent Percentage:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[rent_percentage]" id="rent_percentage" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['rent_percentage']; ?>
"/>%</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Hours Per Tech:<span class="redstar"> * </span></td>

				  <td align="left" valign="center"><input type="text" name="Log[hours_per_tech]" id="hours_per_tech" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['hours_per_tech']; ?>
"/></td>
				  <td align="right" valign="center" style="padding-left:5px;">Average RO:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[average_RO]" id="average_RO" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['average_RO']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Database Records:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[database_records]" id="database_records" class="select req-string req-numeric" style="width:75px;" value="<?php echo $this->_tpl_vars['Tasks']['database_records']; ?>
"/></td>
				</tr>
				<tr>
				  <td colspan="4" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="4"><input name="input" id="submitBtn1" type="button" value="Calculate Payment" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		<div style="height:10px;"></div>
		<div id="resdiv">
		<h1>Results</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Labor Sales (GLS):</td>
				  <td align="left" valign="center"><input type="text" name="GLS" id="GLS" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['GLS'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Parts Sales (GPS):</td>
				  <td align="left" valign="center"><input type="text" name="GPS" id="GPS" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['GPS'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Sales (GS):</td>
				  <td align="left" valign="center"><input type="text" name="GS" id="GS" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['GS'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Total Labor Costs (TLC):</td>
				  <td align="left" valign="center"><input type="text" name="TLC" id="TLC" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['TLC'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Total Parts Costs (TPC):</td>
				  <td align="left" valign="center"><input type="text" name="TPC" id="TPC" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['TPC'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Marketing Budget:</td>
				  <td align="left" valign="center"><input type="text" name="MB" id="MB" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['MB'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Rent Budget:</td>
				  <td align="left" valign="center"><input type="text" name="RB" id="RB" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['RB'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Number of Customers Needed:</td>
				  <td align="left" valign="center"><input type="text" name="NCN" id="NCN" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['NOC'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2) : number_format($_tmp, 2)); ?>
"/></td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="4"><input name="input" id="submitBtn2" type="submit" value="Save" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</div>
		</form>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		onSuccess  : function(){
			 clavals();
		 },
		 errorDiv	: \'#errorDiv1\'
});
function clavals()
{
	//Code for calculation
	var GLS = $("#technicians").val()*$("#effeciency").val()*$("#productivity").val()*$("#labor_percentage").val()*$("#hours_per_tech").val();
	var GPS = GLS*$("#parts_to_labor_ratio").val();
	var GS = GPS+GLS;
	var TLC = GLS*$("#labor_percentage").val();
	var TPC = GPS*$("#parts_percentage").val();
	var MB = GS*$("#advertising_percentage").val();
	var RB = GS*$("#rent_percentage").val();
	var NCN = GS/$("#average_RO").val();
	GLS = GLS.toFixed(2);
	$("#GLS").val(GLS);
	GPS = GPS.toFixed(2);
	$("#GPS").val(GPS);
	GS = GS.toFixed(2);
	$("#GS").val(GS);
	TLC = TLC.toFixed(2);
	$("#TLC").val(TLC);
	TPC = TPC.toFixed(2);
	$("#TPC").val(TPC);
	MB = MB.toFixed(2);
	$("#MB").val(MB);
	RB = RB.toFixed(2);
	$("#RB").val(RB);
	NCN = NCN.toFixed(2);
	$("#NCN").val(NCN);
	//$("#resdiv").show("slow");
}
</script>
'; ?>