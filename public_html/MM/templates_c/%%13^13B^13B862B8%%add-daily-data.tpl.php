<?php /* Smarty version 2.6.26, created on 2013-08-28 08:47:36
         compiled from add-daily-data.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>Add Daily Data</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr >
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="center" valign="center" style="padding-left:5px;">Date:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Available Hours:</td>
				   <td align="center" valign="center" style="padding-left:5px;">Actual Hours:</td>
				   <td align="center" valign="center" style="padding-left:5px;">Sold Hours:</td>
				  
				</tr>
				<tr class="Clone" >
				  <td align="left" valign="center"><input type="text" name="Log[ddate][]" id="ddate" class="select req-string reqDate" value="<?php echo $this->_tpl_vars['Tasks']['ddate']; ?>
"/></td>
				  <td align="left" valign="center"><input type="text" name="Log[available_hours][]" id="available_hours" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['available_hours']; ?>
"/></td>
					<td align="left" valign="center"><input type="text" name="Log[actual_hours][]" id="actual_hours" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['actual_hours']; ?>
"/></td>
					<td align="left" valign="center"><input type="text" name="Log[sold_hours][]" id="sold_hours" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['sold_hours']; ?>
"></td>
				</tr>
				<tr class="Clone" align="right">
					<td colspan="4"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		</div>
				<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#ddate").datepicker();
});
$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
});
</script>
'; ?>