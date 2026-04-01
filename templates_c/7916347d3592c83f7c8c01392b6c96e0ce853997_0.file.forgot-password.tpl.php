<?php
/* Smarty version 3.1.48, created on 2026-04-01 11:04:53
  from '/var/www/html/templates/forgot-password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69ccfbd5884f90_41135740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7916347d3592c83f7c8c01392b6c96e0ce853997' => 
    array (
      0 => '/var/www/html/templates/forgot-password.tpl',
      1 => 1774950629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69ccfbd5884f90_41135740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:325px;">
<div class="bodyleft">
	<form name="ForgotPassword" id="ForgotPassword" method="post" class="form" onsubmit="javascript:$('#hid_type').val('Post');">
	<input type="hidden" name="hid_type" id="hid_type" value="">
	<div style="height:10px;"></div>
	<h1>Forgot Password</h1>
	<table width="100%" height="130px;" border="0" cellspacing="0" cellpadding="5" class="left_content" style="color:#2f3337;">
		<tr>
			<td style="padding-top:10px;"></td>
			<td></td>
		</tr>
		<tr>
		  <td align="right" valign="center" style="padding-left:95px;">Email:<span class="redstar">*</span></td>
		  <td align="left" valign="center"><input type="test" name="Log[Email]" id="Email" class="input req-string req-email" value="<?php if ($_REQUEST['Log']['Email'] != '') {
echo $_REQUEST['Log']['Email'];
}?>"/></td>
		</tr>
		<tr>
		  <td align="center" valign="top" colspan="2" style="padding-left:215px;"><span id="errorDiv1" class="error-div">&nbsp;<?php if ($_smarty_tpl->tpl_vars['response']->value != '') {
echo $_smarty_tpl->tpl_vars['response']->value;
} else { ?> Enter your Email-id<?php }?></span></td>
		</tr>
		<tr>
		  <td align="left" valign="top" style="padding-left:215px;" colspan="2" ><input name="input" id="Post" type="Submit" value="Submit" /></td>
		  <td></td>
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
/js/jquery.ufvalidator-1.0.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
	$('#Post').formValidator({scope: '#ForgotPassword',errorDiv:'#errorDiv1'});
<?php echo '</script'; ?>
><?php }
}
