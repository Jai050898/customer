<?php /* Smarty version 2.6.26, created on 2013-04-08 09:12:32
         compiled from add-shopdata.tpl */ ?>
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
/admin/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-data.php">Manage Shop Data</a></li>
							<li><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop Data</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head"><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop Data</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
								<td height="10"></td>
							</tr>
							<tr>
								<td align="left" valign="top" >
									<form id="UsersForm" class="form" name="UsersForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');" enctype="multipart/form-data">
										<input type="hidden" name="hid_key" id="hid_key" value="">
										
										<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
											<tr>
												<td colspan="2"><h2><?php if ($_REQUEST['user_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Shop Data</h2></td>
											</tr>
											<tr class="color_trbg">
												<td width="12%">Shop Name <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[shop_name]" id="shop_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['shop_name']; ?>
"/>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td width="25%">Owner's Full Name <span class="redstar"> * </span></td>
												<td width="75%" align="left">
													<input type="text" name="Log[owner_name]" id="owner_name" class="input req-string" value="<?php echo $this->_tpl_vars['User']['owner_name']; ?>
"/>
												 </td>
											  </tr>
											  <tr class="color_trbg">
												<td>Store Address</td>
												<td align="left"><textarea  name="Log[address]" id="address"  style="height:100px; width:300px;" ><?php echo $this->_tpl_vars['User']['address']; ?>
</textarea></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Phone Number</td>
												<td align="left"><input type="text" name="Log[phone]" id="phone"  value="<?php echo $this->_tpl_vars['User']['phone']; ?>
"/></td>
											  </tr>
											  <tr class="color_trbg">
												<td>Fax Number</td>
												<td align="left"><input type="text" name="Log[fax]" id="fax"  value="<?php echo $this->_tpl_vars['User']['fax']; ?>
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
" <?php if ($this->_tpl_vars['User']['country'] == $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Code']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Name']; ?>
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
" <?php if ($this->_tpl_vars['User']['state'] == $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_ID']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['States'][$this->_sections['list']['index']]['State_Name']; ?>
</option>
													<?php endfor; endif; ?>
												</select></span>
												</td>
											</tr>
										    <tr class="color_trbg">
												<td>City</td>
												<td align="left"><input type="text" name="Log[city]" id="city" class="input " value="<?php echo $this->_tpl_vars['User']['city']; ?>
"/></td>
											</tr>
											<tr class="color_trbg">
												<td>Zip Code</td>
												<td align="left"><input type="text" name="Log[zip_code]" id="zip_code" class="input req-numeric" value="<?php echo $this->_tpl_vars['User']['zip_code']; ?>
" maxlength="6"/></td>
											</tr>
											  
											 <tr class="color_trbg">
												<td>Site URL to promote </td>
												<td align="left"><input type="text" name="Log[site_url]" id="site_url" class="input" value="<?php echo $this->_tpl_vars['User']['site_url']; ?>
"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td width="12%">Public/Email Address <span class="redstar"> * </span></td>
												<td width="88%" align="left">
													<input type="text" name="Log[email]" id="email" class="input req-string req-email" value="<?php echo $this->_tpl_vars['User']['email']; ?>
" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"/><br /><span id="validdiv" style="padding-left:5px; color:red"></span>
												 </td>
											  </tr>
											<tr class="color_trbg">
												<td>Screen Name </td>
												<td align="left"><input type="text" name="Log[screen_name]" id="screen_name" class="input" value="<?php echo $this->_tpl_vars['User']['screen_name']; ?>
"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Year shop established </td>
												<td align="left"><input type="text" name="Log[shop_started_year]" id="shop_started_year" class="input" value="<?php echo $this->_tpl_vars['User']['shop_started_year']; ?>
"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Number of employees </td>
												<td align="left"><input type="text" name="Log[no_of_emp]" id="no_of_emp" class="input" value="<?php echo $this->_tpl_vars['User']['no_of_emp']; ?>
"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Number of shop bays </td>
												<td align="left"><input type="text" name="Log[no_of_shop_bays]" id="no_of_shop_bays" class="input" value="<?php echo $this->_tpl_vars['User']['no_of_shop_bays']; ?>
"/></td>
											  </tr> 
											<tr class="color_trbg">
												<td>Payment Types accepted</td>
												<td align="left">
														<select name="payment_type[]" id="payment_type" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['PT']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<option value="<?php echo $this->_tpl_vars['PT'][$this->_sections['list']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['PTarray'] != '' && in_array ( $this->_tpl_vars['PT'][$this->_sections['list']['index']]['id'] , $this->_tpl_vars['PTarray'] )): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['PT'][$this->_sections['list']['index']]['payment_type']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											  </tr> 
											 <tr class="color_trbg">
												<td>Languages</td>
												<td align="left">
														<select name="language[]" id="language" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['LG']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<option value="<?php echo $this->_tpl_vars['LG'][$this->_sections['list']['index']]['id']; ?>
" <?php if ($this->_tpl_vars['LGarray'] != '' && in_array ( $this->_tpl_vars['LG'][$this->_sections['list']['index']]['id'] , $this->_tpl_vars['LGarray'] )): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['LG'][$this->_sections['list']['index']]['languages']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Birthday (YYYY-MM-DD)</td>
												<td align="left"><input type="text" name="Log[dob]" id="dob" class="input" value="<?php echo $this->_tpl_vars['User']['dob']; ?>
"/></td>
											  </tr> 
											  <tr class="color_trbg">
												<td>Approx Annual Gross Revenue</td>
												<td align="left">
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
" <?php if ($this->_tpl_vars['User']['gross_revenue'] == $this->_tpl_vars['AS'][$this->_sections['list']['index']]['id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['AS'][$this->_sections['list']['index']]['annual_revenue']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Hours of operation </td>
												<td align="left"><input type="text" name="Log[hours_of_operation]" id="hours_of_operation" class="input" value="<?php echo $this->_tpl_vars['User']['hours_of_operation']; ?>
"/></td>
											  </tr> 
											  <tr class="color_trbg">
												<td>Primary Automotive Services</td>
												<td align="left">
														<select name="services[]" id="services" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['KEY']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<option value="<?php echo $this->_tpl_vars['KEY'][$this->_sections['list']['index']]['key_id']; ?>
" <?php if ($this->_tpl_vars['KEYarray'] != '' && in_array ( $this->_tpl_vars['KEY'][$this->_sections['list']['index']]['key_id'] , $this->_tpl_vars['KEYarray'] )): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['KEY'][$this->_sections['list']['index']]['key_name']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
												</td>
											  </tr>
											  <tr class="color_trbg">
												<td>Primary Brands</td>
												<td align="left">
														<select name="brands[]" id="brands" style="width:187px; height:50px;" class="select req-string" multiple="multiple">
													<option value="">-----Please Select-----</option>
													<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Brands']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<option value="<?php echo $this->_tpl_vars['Brands'][$this->_sections['list']['index']]['brand_id']; ?>
" <?php if ($this->_tpl_vars['Brandsarray'] != '' && in_array ( $this->_tpl_vars['Brands'][$this->_sections['list']['index']]['brand_id'] , $this->_tpl_vars['Brandsarray'] )): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['Brands'][$this->_sections['list']['index']]['brand_name']; ?>
</option>
													<?php endfor; endif; ?>
												</select>
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
												<tr class="color_trbg" >
													<td>Surrounding Cities to target </td>
													<td align="left"><input type="text" name="taget_citiesold[]" id="taget_citiesild" class="input" value="<?php echo $this->_tpl_vars['Cities'][$this->_sections['list']['index']]['city_name']; ?>
"/></td>
											  	</tr> 
												<?php endfor; endif; ?>
											  <?php endif; ?>
											  <tr class="color_trbg Clone" >
												<td>Surrounding Cities to target </td>
												<td align="left"><input type="text" name="taget_cities[]" id="taget_cities" class="input" value="<?php echo $this->_tpl_vars['User']['taget_cities']; ?>
"/></td>
											  </tr> 
											  <tr class="Clone" align="right">
												<td colspan="2"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<?php echo '
	<script language="javascript" type="text/javascript">
	$(\'#submitBtn1\').formValidator({
			scope		: \'#UsersForm\',
			errorDiv	: \'#errorDiv1\'
	});
	$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
});
	</script>
'; ?>