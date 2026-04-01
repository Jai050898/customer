{include file="header.tpl"}
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
						<div class="login-pantop"><img src="{$siteurl}/images/loginicon.gif" alt="Login" align="absbottom" /> Login</div>
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
							  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
							</tr>
							<tr>
							  <td align="right" valign="middle">&nbsp;</td>
							  <td><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
							</tr>
							<tr>
							  <td align="right" valign="center" style="padding-right:65px;" colspan="2"><a href="{$siteurl}/manager/forgot-password.php">Forgot Password?</a></td>
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
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
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
</script>
{/literal}