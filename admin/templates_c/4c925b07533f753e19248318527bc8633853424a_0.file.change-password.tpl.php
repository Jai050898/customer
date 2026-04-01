<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:09:09
  from '/var/www/html/admin/templates/change-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbab5538a675_13035736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c925b07533f753e19248318527bc8633853424a' => 
    array (
      0 => '/var/www/html/admin/templates/change-password.tpl',
      1 => 1774346200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:right-bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbab5538a675_13035736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="bodypart">
	<div id="mainbody">
		<div id="contentpane">
			<?php $_smarty_tpl->_subTemplateRender("file:right-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<div id="innerleft">
			  <div class="admin-rightpart">
					<div class="admin_topbgnav">
					  <div id="admin_bcrumb">
						  <ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin/dashboard.php">Home</a></li>
							<li>Change Password</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Change Password</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="10"></td>
						</tr>
						<tr>
							<td align="left" valign="top" >
							<form id="ChangeForm" class="form" method="post" name="LoginForm">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2>Change Password</h2></td>
									</tr>
									<tr>
									  <td align="right" valign="middle">&nbsp;</td>
									  <td>&nbsp;</td>
									</tr>
									<tr class="color_trbg">
									  <td width="32%" align="right" valign="middle">Old Password: </td>
									  <td width="68%"><span class="formControl">
										<input name="Old_Password" type="password" class="input req-string req-min" id="Old_Password" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr class="color_trbg">
									  <td width="32%" align="right" valign="middle">New Password:&nbsp;</td>
									  <td width="68%"><span class="formControl">
										<input name="Password" type="password" class="input req-string req-same req-min" id="Password" rel="passwrd" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr>
									  <td align="right" valign="middle">Confirm New Password:</td>
									  <td><span class="formControl">
										<input name="CPassword" type="password" class="input req-string req-same req-min" id="CPassword" rel="passwrd" maxlength="15"  minlength="6"/>
									  </span></td>
									</tr>
									<tr class="color_trbg">
									  <td align="right" valign="middle">&nbsp;</td>
									  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $_smarty_tpl->tpl_vars['ErrorMsg']->value;?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.ufvalidator-1.0.4.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#ChangeForm',
		errorDiv	: '#errorDiv1'
});	
<?php echo '</script'; ?>
>
<?php }
}
