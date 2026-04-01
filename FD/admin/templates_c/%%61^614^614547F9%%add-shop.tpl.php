<?php /* Smarty version 2.6.26, created on 2012-11-20 05:34:09
         compiled from add-shop.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'add-shop.tpl', 88, false),)), $this); ?>
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
							<li><?php if ($_REQUEST['Shop_ID'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"><?php if ($_REQUEST['Shop_ID'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="ShopsForm" id="ShopsForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2><?php if ($_REQUEST['Shop_ID'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop</h2></td>
											</tr>
											<?php if ($this->_tpl_vars['error'] != ""): ?>
											<tr>
												<td colspan="2" align="center" style="color:#FF0000;"><strong><?php echo $this->_tpl_vars['error']; ?>
</strong></td>
											</tr>
											<?php endif; ?>
											<tr class="color_trbg">
												<td width="12%">Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[name]" id="name" class="input req-string" value="<?php echo $this->_tpl_vars['Shop']['name']; ?>
"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="12%" valign="top">Email</td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['Shop']['email']; ?>
" />
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td width="12%" valign="top">User Name</td>
												<td width="88%" align="left">
													<input type="text" name="Log[user_name]" id="Shop_name" class="input req-string" value="<?php echo $this->_tpl_vars['Shop']['user_name']; ?>
" />
												 </td>
											  </tr>
											<?php if ($_REQUEST['Shop_ID'] == ""): ?>
												<tr class="color_trbg">
													<td>Password</td>
													<td align="left"><input type="text" name="Log[password]" id="Log[password]" class="input req-string" value="<?php echo $this->_tpl_vars['Shop']['password']; ?>
"/></td>
											  </tr>
											<?php endif; ?>
											
											<tr class="color_trbg">
												<td>Phone</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input req-numeric" value="<?php echo $this->_tpl_vars['Shop']['phone']; ?>
" maxlength="10"/></td>
											 </tr>
											 
											<tr class="color_trbg">
												<td>Address</td>
												<td align="left"><input type="text" name="Log[address]" id="address" class="input " value="<?php echo $this->_tpl_vars['Shop']['address']; ?>
"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Website</td>
												<td align="left"><input type="text" name="Log[website]" id="website" class="input" value="<?php echo $this->_tpl_vars['Shop']['website']; ?>
"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Shop Email</td>
												<td align="left"><input type="text" name="Log[shop_email]" id="shop_email" class="input" value="<?php echo $this->_tpl_vars['Shop']['shop_email']; ?>
"/></td>
											  </tr>
											   <tr class="color_trbg">
												<td>Shop Opening Date</td>
												<td align="left"><input type="text" name="Log[opening_date]" id="opening_date" class="input" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Shop']['opening_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m-%d-%Y') : smarty_modifier_date_format($_tmp, '%m-%d-%Y')); ?>
"/></td>
											  </tr>
											<tr>
												<td>Country</td>
												<td align="left">
												<select name="Log[country]" id="country" style="width:187px; height:23px;" class="select req-string" onchange="fnGetCountryStates(this.value,'state[]','state','StateRow');">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['country']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
													<option value="<?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Code']; ?>
" <?php if ($this->_tpl_vars['Shop']['country'] == $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Code']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Name']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											</tr>
											<tr>
												<td>State</td>
												<td align="left"><span id="StateRow">
												<select name="state[]" id="state" style="width:187px; height:23px;" class="input req-string">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['States']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
													<option value="<?php echo $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_ID']; ?>
" <?php if ($this->_tpl_vars['Shop']['state'] == $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_ID']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_Name']; ?>
</option>
													<?php endfor; endif; ?>
												</select></span>
												</td>
											</tr>
											<tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input " value="<?php echo $this->_tpl_vars['Shop']['city']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip_code]" id="zip_code" class="input req-numeric" value="<?php echo $this->_tpl_vars['Shop']['zip_code']; ?>
" maxlength="6"/></td>
											</tr>
											<tr>
												<td align="right" valign="middle">&nbsp;</td>
												<td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
											</tr>
											<tr>
												<td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
												<td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
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
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#ShopsForm\',
		errorDiv	: \'#errorDiv1\'
});	
$(document).ready(function() {	
	$("#opening_date").datepicker();
		});	
</script>
'; ?>