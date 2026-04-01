<?php /* Smarty version 2.6.26, created on 2011-01-21 10:56:01
         compiled from add-client.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-Clients.php">Manage Clients</a></li>
							<li><?php if ($_REQUEST['client_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Client</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"><?php if ($_REQUEST['client_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Client</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form name="ClientsForm" id="ClientsForm" method="post" class="form" onsubmit="javascript:$('#hid_key').val('Post');">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										<?php if ($_REQUEST['client_id'] == ''): ?>
										<input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
										<?php endif; ?>
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2><?php if ($_REQUEST['client_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Client</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Company Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[company_name]" id="company_name" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['company_name']; ?>
"/>
												 </td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">First Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['first_name']; ?>
"/>
												 </td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Last Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['last_name']; ?>
"/>
												 </td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Email <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['email']; ?>
" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											<?php if ($_REQUEST['client_id'] == ""): ?>
												<tr class="color_trbg">
													<td>Password <span class="redstar"> * </span></td>
													<td align="left"><input type="password" name="Log[password]" id="Log[password]" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['password']; ?>
"/></td>
											  </tr>
											<?php endif; ?>
											<tr class="color_trbg">
												<td>Phone <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[phone]" id="phone" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['Clients']['phone']; ?>
" maxlength="10"/></td>
											  </tr>
											<tr class="color_trbg">
												<td>Address <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[address]" id="address" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['address']; ?>
"/></td>
											</tr>
											<tr>
												<td>Country <span class="redstar"> * </span></td>
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
" <?php if ($this->_tpl_vars['Clients']['country'] == $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Code']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Name']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											</tr>
											<tr>
												<td>State <span class="redstar"> * </span></td>
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
" <?php if ($this->_tpl_vars['Clients']['state'] == $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_ID']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_Name']; ?>
</option>
													<?php endfor; endif; ?>
												</select></span>
												</td>
											</tr>
											<tr class="color_trbg">
												<td>City <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input req-string" value="<?php echo $this->_tpl_vars['Clients']['city']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code <span class="redstar"> * </span></td>
												<td align="left"><input type="text" name="Log[zipcode]" id="zipcode" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['Clients']['zipcode']; ?>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#ClientsForm\',
		errorDiv	: \'#errorDiv1\'
});	
</script>
'; ?>