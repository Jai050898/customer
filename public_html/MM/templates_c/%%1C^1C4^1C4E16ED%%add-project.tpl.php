<?php /* Smarty version 2.6.26, created on 2013-09-17 01:29:59
         compiled from add-project.tpl */ ?>
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
			<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<div style="height:10px;"></div>
			<h1><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Project</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[name]" id="name" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['name']; ?>
"/></td>
				</tr>
				<tr class="color_trbg">
						<td align="right" valign="center" style="padding-left:5px;">Priority</td>
						<td align="left" valign="center">
							<select name="Log[priority]" id="priority" class="input req-string" style="height:25px;">
								<option value="">-- Select --</option>
								<option value="1" <?php if ($this->_tpl_vars['Projects']['priority'] == '1'): ?> selected="selected"<?php endif; ?>>Urgent</option>
								<option value="2" <?php if ($this->_tpl_vars['Projects']['priority'] == '2'): ?> selected="selected"<?php endif; ?>>High Priority</option>
								<option value="3" <?php if ($this->_tpl_vars['Projects']['priority'] == '3'): ?> selected="selected"<?php endif; ?>>Medium Priority</option>
								<option value="4" <?php if ($this->_tpl_vars['Projects']['priority'] == '4'): ?> selected="selected"<?php endif; ?>>Normal Priority</option>
								<option value="5" <?php if ($this->_tpl_vars['Projects']['priority'] == '5'): ?> selected="selected"<?php endif; ?>>Low Priority</option>
								<option value="6" <?php if ($this->_tpl_vars['Projects']['priority'] == '6'): ?> selected="selected"<?php endif; ?>>Very Low Priority</option>
								<option value="7" <?php if ($this->_tpl_vars['Projects']['priority'] == '7'): ?> selected="selected"<?php endif; ?>>Whatever</option>
							</select>
						 </td>
					  </tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Description:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><textarea name="Log[description]" cols="64" rows="10"  id="album_description" class="input req-string" style="width:460px; height:200px;"><?php echo $this->_tpl_vars['Projects']['description']; ?>
</textarea></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Status:</td>
				  <td align="left" valign="center"><select name="Log[project_status]" id="project_status" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="1" <?php if ($this->_tpl_vars['Projects']['project_status'] == '1'): ?> selected="selected"<?php endif; ?>>New</option>
											<option value="2" <?php if ($this->_tpl_vars['Projects']['project_status'] == '2'): ?> selected="selected"<?php endif; ?>>Proposal</option>
											<option value="3" <?php if ($this->_tpl_vars['Projects']['project_status'] == '3'): ?> selected="selected"<?php endif; ?>>In Progress</option>
											<option value="4" <?php if ($this->_tpl_vars['Projects']['project_status'] == '4'): ?> selected="selected"<?php endif; ?>>Completed</option>
											<option value="5" <?php if ($this->_tpl_vars['Projects']['project_status'] == '5'): ?> selected="selected"<?php endif; ?>>Cancelled</option>
										</select></td>
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
		scope		: \'#ProjectForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$(\'#album_description\').wysiwyg();
		});	
</script>
'; ?>