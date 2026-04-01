<?php /* Smarty version 2.6.26, created on 2013-09-17 06:30:04
         compiled from rize-ticket.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TicketForm" class="form" id="TicketForm" method="post" onSubmit="javascript:$('#hid_key').val('Post');">
				<input type="hidden" name="hid_key" id="hid_key" value=""/>
				<input type="hidden" name="hid_value" id="hid_value"/>
			<div style="height:10px;"></div>
			<h1><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Ticket</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Priority:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[priority]" id="Priority" class="select req-string"  style="width:182px;">
							<option value="">--- Please Select ---</option>
							<option value="1" <?php if ($this->_tpl_vars['result']['Job_Priority'] == '1'): ?>selected<?php endif; ?> >Urgent</option>
							<option value="2" <?php if ($this->_tpl_vars['result']['Job_Priority'] == '2'): ?>selected<?php endif; ?> >High</option>
							<option value="3"<?php if ($this->_tpl_vars['result']['Job_Priority'] == '3'): ?>selected<?php endif; ?> >Normal</option>
							<option value="4"  <?php if ($this->_tpl_vars['result']['Job_Priority'] == '4'): ?>selected<?php endif; ?>>Low</option>
							<option value="5"  <?php if ($this->_tpl_vars['result']['Job_Priority'] == '5'): ?>selected<?php endif; ?>>VeryLow</option>
							</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Subject:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input name="Log[subject]" type="text" class="input req-string" id="Subject" value="<?php echo $this->_tpl_vars['Records']['Subject']; ?>
" style="width:350px" /></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Description:</td>
				  <td align="left" valign="center"><textarea name="Log[description]" id="album_description" class="input req-string" style="width:460px; height:200px;"/><?php if ($this->_tpl_vars['Records']['Description'] != ''): ?><?php echo $this->_tpl_vars['Records']['Description']; ?>
<?php endif; ?></textarea></td>
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
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "rightbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TicketForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$(\'#album_description\').wysiwyg();
		});	
</script>
'; ?>