<?php /* Smarty version 2.6.26, created on 2013-01-28 05:28:00
         compiled from add-project.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
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
					  <li><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Project</li>
					 </ul>
					<div class="clr"></div>
				  </div>
					<div id="admin_head"><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Project</div>
				</div>
				<div class="ad_textsp">
					<table width="100%" cellspacing="0" cellpadding="0">
					<tr>
					  <td height="10"></td>
					</tr>
					<tr>
						<td align="left" valign="top" >
							<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="hid_key" id="hid_key" value="">
								<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
									<tr>
										<td colspan="2"><h2><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Project</h2></td>
									  </tr>
									  <tr class="color_trbg">
										<td width="20%">Customer</td>
										<td width="80%" align="left">
											<select name="Log[client_id]" id="client_id" class="select req-string">
												<option value="">-- Select --</option>
												<?php $_from = $this->_tpl_vars['Clients']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
												<option value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
" <?php if ($this->_tpl_vars['Projects']['client_id'] == $this->_tpl_vars['item']['user_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['first_name']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
										 </td>
									  </tr>
									  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									<select name="Log[priority]" id="priority" class="select req-string">
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
									<tr class="color_trbg">
									<td width="20%">Project Name</td>
									<td width="80%" align="left">
										<input type="text" name="Log[name]" id="album_name" class="select req-string" value="<?php echo $this->_tpl_vars['Projects']['name']; ?>
"/>
									 </td>
									</tr>
									<tr class="color_trbg">
										<td width="20%">Description</td>
										<td width="80%" align="left"><textarea name="Log[description]" cols="64" rows="10"  id="album_description" class="input req-string" style="width:500px; height:200px;"><?php echo $this->_tpl_vars['Projects']['description']; ?>
</textarea>
									 	</td>
									</tr>
									<tr class="color_trbg">
									<td width="20%">Project Status</td>
									<td width="80%" align="left">
										<select name="Log[project_status]" id="project_status" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="1" <?php if ($this->_tpl_vars['Projects']['project_status'] == '1'): ?> selected="selected"<?php endif; ?>>New</option>
											<option value="2" <?php if ($this->_tpl_vars['Projects']['project_status'] == '2'): ?> selected="selected"<?php endif; ?>>Proposal</option>
											<option value="3" <?php if ($this->_tpl_vars['Projects']['project_status'] == '3'): ?> selected="selected"<?php endif; ?>>In Progress</option>
											<option value="4" <?php if ($this->_tpl_vars['Projects']['project_status'] == '4'): ?> selected="selected"<?php endif; ?>>Completed</option>
											<option value="5" <?php if ($this->_tpl_vars['Projects']['project_status'] == '5'): ?> selected="selected"<?php endif; ?>>Cancelled</option>
										</select>
									 </td>
									</tr>
									<tr>
									  <td align="right" valign="middle">&nbsp;</td>
									  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
									</tr>
									<tr>
									  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
									  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
									</tr>
								</table>
							</form>
						</td>
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
		</div>
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