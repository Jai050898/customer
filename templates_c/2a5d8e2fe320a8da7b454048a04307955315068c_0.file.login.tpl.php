<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:31:05
  from '/var/www/html/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbb07911b7e0_57653612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5d8e2fe320a8da7b454048a04307955315068c' => 
    array (
      0 => '/var/www/html/templates/login.tpl',
      1 => 1774952424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbb07911b7e0_57653612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="LoginForm" id="LoginForm" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Reg');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Login Form</h1>
	<table width="100%" height="190px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">User Name:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="text" name="Log[user_name]" id="user_name" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Password:<span class="redstar"> * </span></td>
		  <td align="left" valign="center"><input type="password" name="Log[password]" id="password" class="input req-string" value=""></td>
		</tr>
		<tr>
		  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;"><?php if ($_smarty_tpl->tpl_vars['Responce']->value != '') {
echo $_smarty_tpl->tpl_vars['Responce']->value;
}?></td>
		</tr>
		<tr>
			<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="Login" type="Submit" value="Submit" /></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-right:65px;" colspan="2"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/forgot-password.php">Forgot Password?</a></td>
		</tr>
	</table>
<div class="clear"></div>
</form>
</div>
<div class="clear"></div>
</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/ajax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.ufvalidator-1.0.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
	$('#Login').formValidator({scope: '#LoginForm',errorDiv:'#errorDiv1'});
<?php echo '</script'; ?>
><?php }
}
