<?php /* Smarty version 2.6.26, created on 2013-05-20 08:46:11
         compiled from add-cd.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'add-cd.tpl', 38, false),)), $this); ?>
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
/admin/manage-cd.php">Manage Confirmed Directories</a></li>
								  <li><?php if ($_REQUEST['id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Confirmed Directories</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head"><?php if ($_REQUEST['id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Confirmed Directories</div>
					  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
										<tr>
											<td colspan="2"><h2><?php if ($_REQUEST['id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Confirmed Directories</h2></td>
										  </tr>
										  <tr class="color_trbg">
										<td width="20%">Category:</td>
										<td width="80%" align="left">
											<select name="Log[cid]" id="cid" class="select">
												<option value="">-- Select --</option>
												<?php $_from = $this->_tpl_vars['BCats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['Cat']['cid']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										 </td>
									  </tr>
										<tr class="color_trbg">
											<td width="20%">Name <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[name]" id="name" class="input req-string" value="<?php echo $this->_tpl_vars['Cat']['name']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">URL <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[url]" id="url" class="input req-string" value="<?php echo $this->_tpl_vars['Cat']['url']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Checkin ?</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[checkin]" id="checkin" value="Y" <?php if ($this->_tpl_vars['Cat']['checkin'] == 'Y'): ?> checked="checked" <?php endif; ?> />
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Payment</td>
											<td width="80%" align="left">
												<input type="checkbox" name="Log[payment]" id="payment" value="Y" <?php if ($this->_tpl_vars['Cat']['payment'] == 'Y'): ?> checked="checked" <?php endif; ?> onchange="showDetails();"  />
											 </td>
										</tr>
										
										<tr class="color_trbg" id="detailsdiv" <?php if ($this->_tpl_vars['Cat']['payment'] == 'N'): ?> style="display:none;" <?php endif; ?>>
											<td  colspan="2">
												<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
													<tr class="color_trbg">
														<td width="20%">Amount <span class="redstar"> * </span></td>
														<td width="80%" align="left">
															<input type="text" name="Log[amount]" id="amount" class="input" value="<?php echo $this->_tpl_vars['Cat']['amount']; ?>
"/>
														 </td>
													</tr>
													<tr class="color_trbg">
														<td width="20%">Description <span class="redstar"> * </span><strong></strong></td>
														<td width="80%" align="left">
															<textarea name="Log[description]" id="description" style="width:250px; height:100px;"><?php echo $this->_tpl_vars['Cat']['description']; ?>
</textarea>
														 </td>
													</tr>
												</table>
											</td>
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
		scope		: \'#CatForm\',
		errorDiv	: \'#errorDiv1\'
});
function showDetails()
{
	if($(\'#payment\').is(":checked"))
	{
		$(\'#detailsdiv\').show();
		$("#amount").addClass("input req-string");
		$("#description").addClass("input req-string");
	}
	else
	{
		$(\'#detailsdiv\').hide();
		$("#amount").removeClass("input req-string").addClass("input");
		$("#description").removeClass("input req-string").addClass("input");	
	}
}
</script>
'; ?>