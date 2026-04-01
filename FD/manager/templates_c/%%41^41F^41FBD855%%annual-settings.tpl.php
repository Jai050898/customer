<?php /* Smarty version 2.6.26, created on 2012-11-21 01:35:49
         compiled from annual-settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<?php echo '
<!--<style type="text/css">
.error-div{color:#FF0000;}
</style>-->
'; ?>

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
/manager/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manager/manage-shops.php">Manage Shops</a></li>
							<li>Annual Settings</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Annual Settings</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
									<input type="hidden" name="hid_type" id="hid_type" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td style="padding-top:10px;"></td>
												<td></td>
											</tr>
											<?php if ($_REQUEST['task'] != ""): ?>
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong>Your Annual Settings updates Successfully</strong></td>
											</tr>
											<?php endif; ?>
											<tr class="color_trbg">
												<td width="25%">Time Keeping:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<select name="Log[timekeeping]" id="timekeeping" onChange="showdiv(this.value)">
													  <option value="">-- Please Select --</option>
													  <option value="Y" <?php if ($this->_tpl_vars['AccDet']['timekeeping'] == 'Y'): ?> selected="selected" <?php endif; ?>>YES</option>
													  <option value="N" <?php if ($this->_tpl_vars['AccDet']['timekeeping'] == 'N'): ?> selected="selected" <?php endif; ?>>NO</option>
													  </select>
												 </td>
											  </tr>
											<tr class="color_trbg" id="efficiencytr" <?php if ($this->_tpl_vars['AccDet']['efficiency'] == ''): ?> style="display:none;" <?php endif; ?>>
												<td width="25%" valign="top">Efficiency:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[efficiency]" id="efficiency" class="input req-string" value="<?php if ($this->_tpl_vars['AccDet']['efficiency'] == ''): ?>1.25<?php else: ?><?php echo $this->_tpl_vars['AccDet']['efficiency']; ?>
<?php endif; ?>" />
												 </td>
											  </tr>
											  <tr class="color_trbg" id="productivitytr" <?php if ($this->_tpl_vars['AccDet']['productivity'] == ''): ?> style="display:none;" <?php endif; ?>>
												<td width="25%" valign="top">Productivity:<span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[productivity]" id="productivity" class="input req-string" value="<?php if ($this->_tpl_vars['AccDet']['productivity'] == ''): ?>0.90<?php else: ?><?php echo $this->_tpl_vars['AccDet']['productivity']; ?>
<?php endif; ?>" />
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Shop Labor Rate:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[shoplaborrate]" id="shoplaborrate" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['shoplaborrate']; ?>
" /></td>
											 </tr>
											 
											<tr class="color_trbg">
												<td>Total Technicians:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totaltechnicians]" id="totaltechnicians" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['totaltechnicians']; ?>
"></td>
											  </tr>
											<tr class="color_trbg">
												<td>Total Advisors:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totaladvisors]" id="totaladvisors" value="<?php echo $this->_tpl_vars['AccDet']['totaladvisors']; ?>
" class="input req-string req-numeric"></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Total Shop Bays:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[totalshopbays]" id="totalshopbays" value="<?php echo $this->_tpl_vars['AccDet']['totalshopbays']; ?>
" class="input req-string"></td>
											  </tr>
											   <tr class="color_trbg">
												<td>Gross Sales Goal:<span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[grosssalesgoal]" id="grosssalesgoal" value="<?php echo $this->_tpl_vars['AccDet']['grosssalesgoal']; ?>
" class="input req-string req-numeric"></td>
											  </tr>
											<tr>
												<td>Marketing Advertising Budget:<span class="redstar"> * </span></td>
												<td align="left">
												<input type="text" name="Log[marketingadvertisingbudget]" id="marketingadvertisingbudget" value="<?php echo $this->_tpl_vars['AccDet']['marketingadvertisingbudget']; ?>
" class="input req-string req-numeric">
												</td>
											</tr>										
											<tr>
											  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
											</tr>
											<tr>
												<td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
												<td bgcolor="#854141"><input name="input" id="Regis" type="Submit" value="Submit" /></td>
											</tr>
										</table>
									</form>
								</td>
							</tr>
							<tr>
								<td align="left" valign="top">&nbsp;</td>
							</tr>
						</table>
					  <!--end of middle part -->
					  <!--end of right part -->
					  <div class="clr"></div>
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