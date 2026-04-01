<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:01:03
  from '/var/www/html/admin/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cba96fe3c958_24487544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da864f31be673ae4849253af9d332177c35fe06' => 
    array (
      0 => '/var/www/html/admin/templates/index.tpl',
      1 => 1774346214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cba96fe3c958_24487544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
			<table width="100%" cellspacing="0" cellpadding="0">
			  <tr>
				<td align="center" valign="top">
					<table width="500" cellspacing="0" cellpadding="0">
			  <tr>
				<td align="left">
				<form id="LoginForm" class="form" method="post" name="LoginForm">
					<div class="login-pan" style="float:none">
						<div class="login-pantop"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/images/loginicon.gif" alt="Login" align="absbottom" /> Login</div>
						<div class="login-panmid">
						  <table width="80%" align="center" cellpadding="5">
							<tr>
							  <td align="right" valign="middle">&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td width="32%" align="right" valign="middle">User Name: </td>
							  <td width="68%"><span class="formControl">
								<input name="Reg[user_name]" type="text" class="input req-string"  id="user_name" />
							  </span></td>
							</tr>
							<tr>
							  <td align="right" valign="middle">Password: </td>
							  <td><span class="formControl">
								<input name="Reg[Password]" type="password" class="input req-string" id="password" />
							  </span></td>
							</tr>
							
							<tr>
							  <td align="right" valign="middle">&nbsp;</td>
							  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $_smarty_tpl->tpl_vars['ErrorMsg']->value;?>
</div></td>
							</tr>
							<tr>
							  <td align="right" valign="middle">&nbsp;</td>
							  <td><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
							</tr>
						  </table>
						</div>
					 <div class="login-panbot"></div>
					</div>
				</form>		
				</td>
			  </tr>
			</table>
				</td>
			  </tr>
			  <tr>
				<td align="left" valign="top">&nbsp;</td>
			  </tr>
			  <tr>
				<td height="200" align="left" valign="top">&nbsp;</td>
			  </tr>
			</table> 
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
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
		scope		: '#LoginForm',
		errorDiv	: '#errorDiv1'
});
var num = 1;
function fnChange_Code()
{
	var im = new Image(150,40);
	im.src = "rand_image.php?num="+num;
	document.getElementById("ran_id").innerHTML = '';
	document.getElementById("ran_id").appendChild(im);
	num++;
}
<?php echo '</script'; ?>
>
<?php }
}
