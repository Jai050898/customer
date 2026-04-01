<?php /* Smarty version 2.6.26, created on 2012-09-18 02:30:48
         compiled from add-link.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
<?php echo '
<style type="text/css">
.error-div{color:#FF0000;}
</style>
'; ?>

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
/dashboard.php">Home</a></li>
      <li><?php if ($_REQUEST['link_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Link</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head"><?php if ($_REQUEST['link_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Link</div>
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
									<td colspan="2"><h2><?php if ($_REQUEST['link_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Link</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%" align="center">Link URL </td>
								<td width="80%" align="left">
									<input type="text" name="Log[link_url]" id="link_url" class="input req-string req_url" value="<?php echo $this->_tpl_vars['Link']['link_url']; ?>
" style="width:200px;" onchange="javascript:fnCheckURLAvail('link_url',this.value,'<?php echo $_REQUEST['link_id']; ?>
');"/>&nbsp;(http://google.com)<br /><span id="validdiv" style="padding-left:5px; color:red"></span>
								 </td>
								 
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" align="center"><?php if ($_REQUEST['link_id'] != ""): ?>Shoten the URL<?php else: ?>&nbsp;<?php endif; ?></td>
								<td width="80%" align="left">
									<?php if ($_REQUEST['link_id'] == ""): ?><a href="javascript:void(0);" onclick="javascript: return fnShortURL();">Shoten the URL</a><?php endif; ?>
									<input type="hidden" name="Log[code]" id="code" <?php if ($_REQUEST['link_id'] != ""): ?> value="<?php echo $this->_tpl_vars['Link']['code']; ?>
"<?php endif; ?>/>
									<span id="shortenurl" style="padding-left:10px; font-size:16px"><?php if ($_REQUEST['link_id'] != ""): ?><?php echo $this->_tpl_vars['siteurl']; ?>
/<?php echo $this->_tpl_vars['Link']['code']; ?>
<?php endif; ?></span>
								 </td>
								 
							  </tr>
							  <tr class="color_trbg">
									<td>Show To Customers</td>
									<td align="left"><input type="checkbox" name="Log[show_to_customers]" value="Y" <?php if ($this->_tpl_vars['Link']['show_to_customers'] == 'Y'): ?> checked="checked" <?php endif; ?> /></td>
								</tr>
							  <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div><div id="errorDiv2" class="error-div"></div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                  <td bgcolor="#854141" ><span id="buttondiv" style="display:<?php if ($_REQUEST['link_id'] == ""): ?>none;<?php endif; ?>"> <input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /><?php if ($_REQUEST['link_id'] == ""): ?></span><?php endif; ?></td>
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
		scope		: \'#LinkForm\',
		errorDiv	: \'#errorDiv1\'
});	
function urlvalidater()
{
	var myVariable = document.getElementById(\'link_url\').value;
	if(/^([a-z]([a-z]|\\d|\\+|-|\\.)*):(\\/\\/(((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:)*@)?((\\[(|(v[\\da-f]{1,}\\.(([a-z]|\\d|-|\\.|_|~)|[!\\$&\'\\(\\)\\*\\+,;=]|:)+))\\])|((\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5])\\.(\\d|[1-9]\\d|1\\d\\d|2[0-4]\\d|25[0-5]))|(([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=])*)(:\\d*)?)(\\/(([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)*)*|(\\/((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)+(\\/(([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)*)*)?)|((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)+(\\/(([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)*)*)|((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)){0})(\\?((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)|[\\uE000-\\uF8FF]|\\/|\\?)*)?(\\#((([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(%[\\da-f]{2})|[!\\$&\'\\(\\)\\*\\+,;=]|:|@)|\\/|\\?)*)?$/i.test(myVariable)) {
	  $(\'#hid_key\').val(\'Post\');
	  return true;
	} else {
	  //alert("invalid url");
	  document.getElementById(\'errorDiv2\').innerHTML = "Invalid URL";
	  return false;
	}

}
</script>
'; ?>