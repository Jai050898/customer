<?php /* Smarty version 2.6.26, created on 2012-11-21 01:06:29
         compiled from annual-settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Annual Settings</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<?php if ($_REQUEST['task'] != ""): ?>
				<tr>
					<td colspan="2" align="center" style="color:#00FF00;"><strong>Your Annual Settings updates Successfully</strong></td>
				</tr>
				<?php endif; ?>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Time Keeping:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  <select name="Log[timekeeping]" id="timekeeping" onChange="showdiv(this.value)">
				  <option value="">-- Please Select --</option>
				  <option value="Y" <?php if ($this->_tpl_vars['AccDet']['timekeeping'] == 'Y'): ?> selected="selected" <?php endif; ?>>YES</option>
				  <option value="N" <?php if ($this->_tpl_vars['AccDet']['timekeeping'] == 'N'): ?> selected="selected" <?php endif; ?>>NO</option>
				  </select>
				  </td>
				</tr>
				<tr id="efficiencytr" <?php if ($this->_tpl_vars['AccDet']['efficiency'] == ''): ?> style="display:none;" <?php endif; ?>>
				  <td align="right" valign="top" style="padding-left:95px;">Efficiency:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[efficiency]" id="efficiency" class="input req-string" value="<?php if ($this->_tpl_vars['AccDet']['efficiency'] == ''): ?>1.25<?php else: ?><?php echo $this->_tpl_vars['AccDet']['efficiency']; ?>
<?php endif; ?>" /></td>
				</tr>
				<tr id="productivitytr" <?php if ($this->_tpl_vars['AccDet']['productivity'] == ''): ?> style="display:none;" <?php endif; ?>>
				  <td align="right" valign="center" style="padding-left:75px;">Productivity:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[productivity]" id="productivity" class="input req-string" value="<?php if ($this->_tpl_vars['AccDet']['productivity'] == ''): ?>0.90<?php else: ?><?php echo $this->_tpl_vars['AccDet']['productivity']; ?>
<?php endif; ?>" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Shop Labor Rate:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[shoplaborrate]" id="shoplaborrate" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['shoplaborrate']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Total Technicians:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totaltechnicians]" id="totaltechnicians" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['totaltechnicians']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Total Advisors:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totaladvisors]" id="totaladvisors" value="<?php echo $this->_tpl_vars['AccDet']['totaladvisors']; ?>
" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Total Shop Bays:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[totalshopbays]" id="totalshopbays" value="<?php echo $this->_tpl_vars['AccDet']['totalshopbays']; ?>
" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Gross Sales Goal:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[grosssalesgoal]" id="grosssalesgoal" value="<?php echo $this->_tpl_vars['AccDet']['grosssalesgoal']; ?>
" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Marketing Advertising Budget:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[marketingadvertisingbudget]" id="marketingadvertisingbudget" value="<?php echo $this->_tpl_vars['AccDet']['marketingadvertisingbudget']; ?>
" class="input req-string req-numeric"></td>
				</tr>
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
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
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator(<?php echo '{scope: '; ?>
'#EditProfile',errorDiv:'#errorDiv1'});
</script>
<?php echo '
<script language="javascript" type="text/javascript">
	$(document).ready(function() {	
	$("#opening_date").datepicker();
		});	
	function showdiv(val)
	{
		if(val == "Y")
		{
			$("#efficiency").val(\'\');
			$("#productivity").val(\'\');
			$("#efficiencytr").show();
			$("#productivitytr").show();
		}
		else
		{
			$("#efficiency").val(\'1.25\');
			$("#productivity").val(\'0.90\');
			$("#efficiencytr").hide();
			$("#productivitytr").hide();
		}
	}
</script>
'; ?>