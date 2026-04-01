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
				<form id="LoginForm" class="form" method="post" name="LoginForm" enctype="multipart/form-data">
					<div class="login-pan" style="float:none">
						<div class="login-pantop"><img src="{$siteurl}/images/loginicon.gif" alt="Login" align="absbottom" /> Upload</div>
						<div class="login-panmid">
						  <table width="80%" align="center" cellpadding="5">
							<tr>
							  <td align="right" valign="middle">&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
							{if $error neq ""}
							<tr>
							  <td align="center" valign="middle" colspan="2" style="color:#FF0000;">{$error}</td>
							</tr>
							{/if}
							<tr>
							  <td width="32%" align="right" valign="middle">CSV file: </td>
							  <td width="68%"><span class="formControl">
								<input type="file" name="csvupload" id="csvupload" class="req-string" />
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