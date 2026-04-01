<?php /* Smarty version 2.6.26, created on 2013-08-30 04:09:19
         compiled from edit-profile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'edit-profile.tpl', 153, false),array('modifier', 'stripslashes', 'edit-profile.tpl', 317, false),array('modifier', 'count', 'edit-profile.tpl', 332, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="">
			<form name="EditProfile" id="EditProfile" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Edit');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<div style="height:10px;"></div>
			<h1>Edit Profile</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">First Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[first_name]" id="first_name" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['first_name']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Last Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[last_name]" id="last_name" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['last_name']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Email:</td>
				  <td align="left" valign="center"><input type="text" name="Log[email]" id="email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['AccDet']['email']; ?>
" onBlur="javascript:fnCheckEmailAvail('email',this.value,'validdiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Public Email Address to be seen:</td>
				  <td align="left" valign="center"><input type="text" name="Log[public_email]" id="public_email" class="input " value="<?php echo $this->_tpl_vars['AccDet']['public_email']; ?>
"  /></td>
				</tr>
				
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Company Name:</td>
				  <td align="left" valign="center"><input type="text" name="Log[company_name]" id="company_name" class="input req-string" value="<?php echo $this->_tpl_vars['AccDet']['company_name']; ?>
" /></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Phone:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[phone]" id="phone" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['phone']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Fax:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[fax]" id="fax" class="input req-string req-numeric" value="<?php echo $this->_tpl_vars['AccDet']['fax']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Address:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[address]" id="address" class="input req-string" style="height:80px;"><?php echo $this->_tpl_vars['AccDet']['address']; ?>
</textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">County:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[county]" id="county" class="input " value="<?php echo $this->_tpl_vars['AccDet']['county']; ?>
"></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Country:<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
					<select name="Log[country]" id="country" style="width:187px; height:23px;" class="select req-string" onchange="fnGetCountryStates(this.value,'state[]','state','StateRow');">
						<option value="">--Please Select--</option>
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
" <?php if ($this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Code'] == $this->_tpl_vars['AccDet']['country']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Name']; ?>
</option>
						<?php endfor; endif; ?>
					</select>
				  </td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:5px;">State:<span class="redstar"> * </span></td>
					<td align="left" valign="center"><span id="StateRow">
					<select name="state[]" id="state" style="width:187px; height:23px;" class="select req-string">
						<option value="">--Please Select--</option>
						<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['State']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo $this->_tpl_vars['State'][$this->_sections['list']['index']]['State_ID']; ?>
" <?php if ($this->_tpl_vars['State'][$this->_sections['list']['index']]['State_ID'] == $this->_tpl_vars['AccDet']['state']): ?> selected="selected"<?php endif; ?>><?php if ($this->_tpl_vars['State'][$this->_sections['list']['index']]['State_Code'] != ""): ?><?php echo $this->_tpl_vars['State'][$this->_sections['list']['index']]['State_Code']; ?>
<?php else: ?><?php echo $this->_tpl_vars['State'][$this->_sections['list']['index']]['State_Name']; ?>
<?php endif; ?></option>
						<?php endfor; endif; ?>
					</select>
					</span></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">City:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[city]" id="city" value="<?php echo $this->_tpl_vars['AccDet']['city']; ?>
" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Zip code:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[zip_code]" id="zip_code" value="<?php echo $this->_tpl_vars['AccDet']['zip_code']; ?>
" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Web Site:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[website]" id="website" value="<?php echo $this->_tpl_vars['AccDet']['website']; ?>
" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Screen Name :<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[screen_name]" id="screen_name" value="<?php echo $this->_tpl_vars['AccDet']['screen_name']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Year shop established :<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[shop_started_year]" id="shop_started_year" value="<?php echo $this->_tpl_vars['AccDet']['shop_started_year']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Number of employees :<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[no_of_emp]" id="no_of_emp" value="<?php echo $this->_tpl_vars['AccDet']['no_of_emp']; ?>
" class="input"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Number of shop bays :<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[no_of_shop_bays]" id="no_of_shop_bays" value="<?php echo $this->_tpl_vars['AccDet']['no_of_shop_bays']; ?>
" class="input"></td>
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
				  <td align="right" valign="top" style="padding-left:5px;">Payment Types accepted :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  	<table width="100%" border="0" cellspacing="5" cellpadding="5">
						<tr>
						<?php $_from = $this->_tpl_vars['PT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="payment_type[]" id="payment_type" <?php if ($this->_tpl_vars['PTarray'] != '' && in_array ( $this->_tpl_vars['item']['id'] , $this->_tpl_vars['PTarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />&nbsp;<?php echo $this->_tpl_vars['item']['payment_type']; ?>
</td>
						<?php if ($this->_foreach['item']['iteration']%4 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</tr>
					</table>
				  	
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Languages :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  	<table width="100%" border="0" cellspacing="5" cellpadding="5">
													<tr>
													<?php $_from = $this->_tpl_vars['LG']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
													<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="language[]" id="language" <?php if ($this->_tpl_vars['LGarray'] != '' && in_array ( $this->_tpl_vars['item']['id'] , $this->_tpl_vars['LGarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['id']; ?>
" />&nbsp;<?php echo $this->_tpl_vars['item']['languages']; ?>
</td>
													<?php if ($this->_foreach['item']['iteration']%4 == 0): ?>
													</tr><tr>
													<?php endif; ?>
													<?php endforeach; endif; unset($_from); ?>
													</tr>
												</table>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Birthday (MM-DD-YYYY) :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  	<input type="text" name="Log[dob]" id="dob" class="input" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['AccDet']['dob'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m-%d-%Y') : smarty_modifier_date_format($_tmp, '%m-%d-%Y')); ?>
"/>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Approx Annual Gross Revenue :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  	<select name="Log[gross_revenue]" id="gross_revenue" style="width:187px; height:23px;" class="select req-string">
						<option value="">-----Please Select-----</option>
						<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['AS']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo $this->_tpl_vars['AS'][$this->_sections['list']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['AccDet']['gross_revenue'] == $this->_tpl_vars['AS'][$this->_sections['list']['index']]['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['AS'][$this->_sections['list']['index']]['annual_revenue']; ?>
</option>
						<?php endfor; endif; ?>
					</select>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Hours of operation :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
							<table width="40%" border="0" cellspacing="5" cellpadding="5">
							<tr>
								<td><strong>Day</strong></td>
								<td style="padding-left:15px;"><strong>Open</strong></td>
								<td style="padding-left:35px;"><strong>Close</strong></td>
								<td><strong>Holiday</strong></td>
								<td><strong>Copy</strong></td>
	
							</tr>
							  <tr>
								<th scope="row">Monday</th>
								<td>
									<select name="Log1[monday_open]" id="monday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['monday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['monday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[monday_close]" id="monday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['monday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['monday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[monday_lock]" id="monday_lock" <?php if ($this->_tpl_vars['hourLog']['monday_lock'] == 1): ?> checked="checked" <?php endif; ?>  value="1"/></td>
	
								<td><a href="javascript: CopyTimeFun();">Copy</a></td>
	
							  </tr>
							  <tr>
								<th scope="row">Tuesday</th>
								<td>
									<select name="Log1[tueday_open]" id="tueday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['tueday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['tueday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[tueday_close]" id="tueday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['tueday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['tueday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[tueday_lock]" id="tueday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['tueday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							  <tr>
								<th scope="row">Wednesday</th>
								<td>
									<select name="Log1[wedday_open]" id="wedday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['wedday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['wedday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[wedday_close]" id="wedday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['wedday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['wedday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[wedday_lock]" id="wedday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['wedday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							  <tr>
								<th scope="row">Thursday</th>
								<td>
									<select name="Log1[thuday_open]" id="thuday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['thuday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['thuday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[thuday_close]" id="thuday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['thuday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['thuday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[thuday_lock]" id="thuday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['thuday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							  <tr>
								<th scope="row">Friday</th>
								<td>
									<select name="Log1[friday_open]" id="friday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['friday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['friday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[friday_close]" id="friday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['friday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['friday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[friday_lock]" id="friday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['friday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							  <tr>
								<th scope="row">Saturday</th>
								<td>
									<select name="Log1[satday_open]" id="satday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['satday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['satday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[satday_close]" id="satday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['satday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['satday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[satday_lock]" id="satday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['satday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							  <tr>
								<th scope="row">Sunday</th>
								<td>
									<select name="Log1[sunday_open]" id="sunday_open" style="width:95px; height:23px;float:left;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['sunday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['sunday_open'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td>
									<select name="Log1[sunday_close]" id="sunday_close" style="width:95px; height:23px;float:left; margin-left:15px;" class="select req-string" <?php if ($this->_tpl_vars['hourLog']['sunday_lock'] == 1): ?> disabled="disabled" <?php endif; ?>>
										<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['hrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
" <?php if ($this->_tpl_vars['hourLog']['sunday_close'] == $this->_tpl_vars['hrs'][$this->_sections['list']['index']]): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['hrs'][$this->_sections['list']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
								</td>
								<td><input type="checkbox" class="hours_checkbox input" name="Log1[sunday_lock]" id="sunday_lock" value="1" <?php if ($this->_tpl_vars['hourLog']['sunday_lock'] == 1): ?> checked="checked" <?php endif; ?>/></td>
							  </tr>
							</table>
					</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Primary Automotive Services :<span class="redstar"> * </span></td>
				  <td align="left" valign="center">
				  	<table width="100%" border="0" cellspacing="5" cellpadding="5">
						<tr>
						<?php $_from = $this->_tpl_vars['KEY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="services[]" id="services" <?php if ($this->_tpl_vars['KEYarray'] != '' && in_array ( $this->_tpl_vars['item']['key_id'] , $this->_tpl_vars['KEYarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['key_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['key_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						<?php if ($this->_foreach['item']['iteration']%3 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</tr>
					</table>
				  </td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Primary Brands :</td>
				  <td align="left" valign="center">
				  	<table width="100%" border="0" cellspacing="5" cellpadding="5">
						
						<?php $_from = $this->_tpl_vars['Brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<?php if (count($this->_tpl_vars['item']['Brands']) > 0): ?>
						<tr>
						<td><b><?php echo $this->_tpl_vars['item']['name']; ?>
</b></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						
						<?php $_from = $this->_tpl_vars['item']['Brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" <?php if ($this->_tpl_vars['Brandsarray'] != '' && in_array ( $this->_tpl_vars['item1']['brand_id'] , $this->_tpl_vars['Brandsarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item1']['brand_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item1']['brand_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						<?php if ($this->_foreach['item1']['iteration']%2 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						
						</tr>
						</table>
						</td>
						</tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						<tr>
						<td><strong>Others</strong></td>
						</tr>
						<tr>
						<td>
						<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
						<?php $_from = $this->_tpl_vars['Rbrands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
						<td align="left" style="width:50px; border-bottom:none;"><input type="checkbox" name="brands[]" id="brands" <?php if ($this->_tpl_vars['Brandsarray'] != '' && in_array ( $this->_tpl_vars['item']['brand_id'] , $this->_tpl_vars['Brandsarray'] )): ?> checked="checked" <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['brand_id']; ?>
" />&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['brand_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
						<?php if ($this->_foreach['item']['iteration']%2 == 0): ?>
						</tr><tr>
						<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
						</tr>
						</table>
						</td>
						</tr>
					</table>
				  </td>
				</tr>
				<?php if ($this->_tpl_vars['Cities'] != ""): ?>
				<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Cities']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Surrounding Cities to target  :</td>
				  <td align="left" valign="center">
				  	<input type="text" name="taget_citiesold[]" id="taget_citiesild" class="input" value="<?php echo $this->_tpl_vars['Cities'][$this->_sections['list']['index']]['city_name']; ?>
"/>
				  </td>
				</tr>
				<?php endfor; endif; ?>
				<?php endif; ?>
				<tr class="Clone" >
				  <td align="right" valign="top" style="padding-left:5px;">Surrounding Cities to target  :</td>
				  <td align="left" valign="center">
				  	<input type="text" name="taget_cities[]" id="taget_cities" class="input" value="<?php echo $this->_tpl_vars['AccDet']['taget_cities']; ?>
"/>
				  </td>
				</tr>
				<tr class="Clone" align="right">
					<td colspan="2"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator(<?php echo '{scope: '; ?>
'#EditProfile',errorDiv:'#errorDiv1'});
</script>
<?php echo '
<script language="javascript" type="text/javascript">
	$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
});
$(".hours_checkbox").click(function(){
	if ($("#monday_lock").is(":checked")) {
		$(\'#monday_open\').val(\'00:00am\');
		$(\'#monday_close\').val(\'00:00am\');
		$(\'#monday_open\').attr(\'disabled\', \'disabled\');
		$(\'#monday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#monday_open\').attr(\'disabled\', false);
		$(\'#monday_close\').attr(\'disabled\', false);
	}
	if ($("#tueday_lock").is(":checked")) {
		$(\'#tueday_open\').val(\'00:00am\');
		$(\'#tueday_close\').val(\'00:00am\');
		$(\'#tueday_open\').attr(\'disabled\', \'disabled\');
		$(\'#tueday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#tueday_open\').attr(\'disabled\', false);
		$(\'#tueday_close\').attr(\'disabled\', false);
	}
	if ($("#wedday_lock").is(":checked")) {
		$(\'#wedday_open\').val(\'00:00am\');
		$(\'#wedday_close\').val(\'00:00am\');
		$(\'#wedday_open\').attr(\'disabled\', \'disabled\');
		$(\'#wedday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#wedday_open\').attr(\'disabled\', false);
		$(\'#wedday_close\').attr(\'disabled\', false);
	}
	if ($("#thuday_lock").is(":checked")) {
		$(\'#thuday_open\').val(\'00:00am\');
		$(\'#thuday_close\').val(\'00:00am\');
		$(\'#thuday_open\').attr(\'disabled\', \'disabled\');
		$(\'#thuday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#thuday_open\').attr(\'disabled\', false);
		$(\'#thuday_close\').attr(\'disabled\', false);
	}
	if ($("#friday_lock").is(":checked")) {
		$(\'#friday_open\').val(\'00:00am\');
		$(\'#friday_close\').val(\'00:00am\');
		$(\'#friday_open\').attr(\'disabled\', \'disabled\');
		$(\'#friday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#friday_open\').attr(\'disabled\', false);
		$(\'#friday_close\').attr(\'disabled\', false);
	}
	if ($("#satday_lock").is(":checked")) {
		$(\'#satday_open\').val(\'00:00am\');
		$(\'#satday_close\').val(\'00:00am\');
		$(\'#satday_open\').attr(\'disabled\', \'disabled\');
		$(\'#satday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#satday_open\').attr(\'disabled\', false);
		$(\'#satday_close\').attr(\'disabled\', false);
	}
	if ($("#sunday_lock").is(":checked")) {
		$(\'#sunday_open\').val(\'00:00am\');
		$(\'#sunday_close\').val(\'00:00am\');
		$(\'#sunday_open\').attr(\'disabled\', \'disabled\');
		$(\'#sunday_close\').attr(\'disabled\', \'disabled\');
	}
	else {
		$(\'#sunday_open\').attr(\'disabled\', false);
		$(\'#sunday_close\').attr(\'disabled\', false);
	}
	
	
});
function enableSelects(){
	$(\'#monday_open\').attr(\'disabled\', false);
	$(\'#monday_close\').attr(\'disabled\', false);
	$(\'#tueday_open\').attr(\'disabled\', false);
	$(\'#tueday_close\').attr(\'disabled\', false);
	$(\'#wedday_open\').attr(\'disabled\', false);
	$(\'#wedday_close\').attr(\'disabled\', false);
	$(\'#thuday_open\').attr(\'disabled\', false);
	$(\'#thuday_close\').attr(\'disabled\', false);
	$(\'#friday_open\').attr(\'disabled\', false);
	$(\'#friday_close\').attr(\'disabled\', false);
	$(\'#satday_open\').attr(\'disabled\', false);
	$(\'#satday_close\').attr(\'disabled\', false);
	$(\'#sunday_open\').attr(\'disabled\', false);
	$(\'#sunday_close\').attr(\'disabled\', false);
	$(\'#hid_key\').val(\'Post\');
	
}
function CopyTimeFun()
{
	var otime = $(\'#monday_open\').val();
	var ctime =  $(\'#monday_close\').val();
	
	if (!$("#tueday_lock").is(":checked")) {
		document.getElementById(\'tueday_open\').value = otime;
		document.getElementById(\'tueday_close\').value = ctime;
	}
	if (!$("#wedday_lock").is(":checked")) {
		document.getElementById(\'wedday_open\').value = otime;
		document.getElementById(\'wedday_close\').value = ctime;
	}
	if (!$("#thuday_lock").is(":checked")) {
		document.getElementById(\'thuday_open\').value = otime;
		document.getElementById(\'thuday_close\').value = ctime;
	}
	if (!$("#friday_lock").is(":checked")) {
		document.getElementById(\'friday_open\').value = otime;
		document.getElementById(\'friday_close\').value = ctime;
	}
	if (!$("#satday_lock").is(":checked")) {
		document.getElementById(\'satday_open\').value = otime;
		document.getElementById(\'satday_close\').value = ctime;
	}
	if (!$("#sunday_lock").is(":checked")) {
		document.getElementById(\'sunday_open\').value = otime;
		document.getElementById(\'sunday_close\').value = ctime;
	}
}
</script>
'; ?>