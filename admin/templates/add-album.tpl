{include file="header.tpl"}
<link type="text/css" rel="stylesheet" href="{$siteurl}/css/jquery.wysiwyg.css" />
{literal}
<style type="text/css">
.error-div{color:#FF0000;}
</style>
{/literal}
<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		{include file="right-bar.tpl"}
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="{$siteurl}/dashboard.php">Home</a></li>
      <li>{if $smarty.request.album_id neq ""}Edit{else}Add{/if} Album</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">{if $smarty.request.album_id neq ""}Edit{else}Add{/if} Album</div>
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
									<td colspan="2"><h2>{if $smarty.request.album_id neq ""}Edit{else}Add{/if} Album</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Album Name</td>
								<td width="80%" align="left">
									<input type="text" name="Log[album_name]" id="album_name" class="input req-string" value="{$Cat.album_name}"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Description</td>
								<td width="80%" align="left">
									<textarea name="Log[album_description]" cols="64" rows="10"  id="album_description" class="input req-string" style="width:500px; height:200px;">{$Cat.album_description}</textarea>
								 </td>
							  </tr>
							  <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
                </tr>
              </table>
		</form></td>
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
{include file="footer.tpl"}
<script language="javascript" type="text/javascript" src="{$siteurl}/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#CatForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$('#album_description').wysiwyg();
		});	
</script>
{/literal}