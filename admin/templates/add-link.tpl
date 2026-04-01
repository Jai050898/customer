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
      <li>{if $smarty.request.link_id neq ""}Edit{else}Add{/if} Link</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">{if $smarty.request.link_id neq ""}Edit{else}Add{/if} Link</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="LinkForm" class="form" id="LinkForm" method="post" onsubmit="javascript: return urlvalidater();">
			<input type="hidden" name="hid_key" id="hid_key" value="">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>{if $smarty.request.link_id neq ""}Edit{else}Add{/if} Link</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%" align="center">Link URL </td>
								<td width="80%" align="left">
									<input type="text" name="Log[link_url]" id="link_url" class="input req-string req_url" value="{$Link.link_url}" style="width:200px;" onchange="javascript:fnCheckURLAvail('link_url',this.value,'{$smarty.request.link_id}');"/>&nbsp;(http://google.com)<br /><span id="validdiv" style="padding-left:5px; color:red"></span>
								 </td>
								 
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" align="center">{if $smarty.request.link_id neq ""}Shoten the URL{else}&nbsp;{/if}</td>
								<td width="80%" align="left">
									{if $smarty.request.link_id eq ""}<a href="javascript:void(0);" onclick="javascript: return fnShortURL();">Shoten the URL</a>{/if}
									<input type="hidden" name="Log[code]" id="code" {if $smarty.request.link_id neq ""} value="{$Link.code}"{/if}/>
									<span id="shortenurl" style="padding-left:10px; font-size:16px">{if $smarty.request.link_id neq ""}{$siteurl}/{$Link.code}{/if}</span>
								 </td>
								 
							  </tr>
							  <tr class="color_trbg">
									<td>Show To Customers</td>
									<td align="left"><input type="checkbox" name="Log[show_to_customers]" value="Y" {if $Link.show_to_customers eq "Y"} checked="checked" {/if} /></td>
								</tr>
							  <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;{$ErrorMsg}</div><div id="errorDiv2" class="error-div"></div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                  <td bgcolor="#854141" ><span id="buttondiv" style="display:{if $smarty.request.link_id eq ""}none;{/if}"> <input id="submitBtn1" value="Submit" type="submit" class="sendBtn" />{if $smarty.request.link_id eq ""}</span>{/if}</td>
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
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.ufvalidator-1.0.4.js"></script>
{literal}
<script language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#LinkForm',
		errorDiv	: '#errorDiv1'
});	
function urlvalidater()
{
	var myVariable = document.getElementById('link_url').value;
	if(/^([a-z]([a-z]|\d|\+|-|\.)*):(\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?((\[(|(v[\da-f]{1,}\.(([a-z]|\d|-|\.|_|~)|[!\$&'\(\)\*\+,;=]|:)+))\])|((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=])*)(:\d*)?)(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*|(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)){0})(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(myVariable)) {
	  $('#hid_key').val('Post');
	  return true;
	} else {
	  //alert("invalid url");
	  document.getElementById('errorDiv2').innerHTML = "Invalid URL";
	  return false;
	}

}
</script>
{/literal}