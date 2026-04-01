<?php /* Smarty version 2.6.26, created on 2014-01-31 07:45:25
         compiled from data-profile.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="">
			<form name="DataProfile" id="DataProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Data Profile</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Number of shop bays :<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[no_of_shop_bays]" id="no_of_shop_bays" value="<?php echo $this->_tpl_vars['AccDet']['no_of_shop_bays']; ?>
" class="input req-string"></td>
				</tr>
				
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Shop Labor Rate :</td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_labor_rate]" id="shop_labor_rate" value="<?php echo $this->_tpl_vars['AccDet']['shop_labor_rate']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">No of Technicians :</td>
				  <td align="left" valign="center"><input type="text" name="Log[no_of_technicians]" id="no_of_technicians" value="<?php echo $this->_tpl_vars['AccDet']['no_of_technicians']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">No of Advisors :</td>
				  <td align="left" valign="center"><input type="text" name="Log[no_of_advisors]" id="no_of_advisors" value="<?php echo $this->_tpl_vars['AccDet']['no_of_advisors']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">sq ft of shop (entire) :</td>
				  <td align="left" valign="center"><input type="text" name="Log[sq_ft_of_shop]" id="sq_ft_of_shop" value="<?php echo $this->_tpl_vars['AccDet']['sq_ft_of_shop']; ?>
" class="input"></td>
				</tr>
                                <tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="DataProfileBtn" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		</div>
				<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript">
	$('#DataProfileBtn').formValidator(<?php echo '{scope: '; ?>
'#DataProfile',errorDiv:'#errorDiv1'});
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>