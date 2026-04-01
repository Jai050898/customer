<?php /* Smarty version 2.6.26, created on 2014-02-15 01:59:10
         compiled from register.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="RegisterForm" id="RegisterForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
			<input type="hidden" name="hid_type" id="hid_type" value="">
			<input type="hidden" name="emaildiv" id="emaildiv" value="" class="req-string req-val"  />
			<div style="height:10px;"></div>
			<h1>Registration Form</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:75px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[full_name]" id="full_name" class="input req-string" value=""></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Email:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[email]" id="email" class="input req-string req-email" value="" onBlur="javascript:fnCheckEmailAvail('email',this.value,'emaildiv');"><br /><span id="validdiv" style="padding-left:5px; color:red"></span></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Password:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="password" name="Log[password]" id="password" class="input req-string" value=""></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Phone:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[phone]" id="phone" class="input req-string req-numeric" value="" maxlength="10"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Address:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[address]" id="address" class="input req-string" style="height:80px;"></textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:95px;">Country:<span class="redstar"> * </span></td>
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
"><?php echo $this->_tpl_vars['country'][$this->_sections['list']['index']]['Country_Name']; ?>
</option>
						<?php endfor; endif; ?>
					</select>
				  </td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:95px;">State:<span class="redstar"> * </span></td>
					<td align="left" valign="center"><span id="StateRow">
					<select name="state[]" id="state" style="width:187px; height:23px;" class="select req-string">
						<option value="">--Please Select--</option>
					</select>
					</span></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">City:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[city]" id="city" value="" class="input req-string"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Zip code:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[zip_code]" id="zip_code" value="" class="input req-string req-numeric" maxlength="6"></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:95px;">Web Site:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[website]" id="website" value="" class="input req-string"></td>
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
<script language="javascript" type="text/javascript">
	$('#Regis').formValidator(<?php echo '{scope: '; ?>
'#RegisterForm',errorDiv:'#errorDiv1'});
</script>