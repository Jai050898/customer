<?php /* Smarty version 2.6.26, created on 2012-11-19 05:49:29
         compiled from add-tasks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'add-tasks.tpl', 75, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
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
      <li><?php if ($_REQUEST['task_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Task</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head"><?php if ($_REQUEST['task_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Task</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2><?php if ($_REQUEST['task_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Task</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									<select name="Log[priority]" id="priority" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" <?php if ($this->_tpl_vars['Tasks']['priority'] == '1'): ?> selected="selected"<?php endif; ?>>Urgent</option>
										<option value="2" <?php if ($this->_tpl_vars['Tasks']['priority'] == '2'): ?> selected="selected"<?php endif; ?>>High Priority</option>
										<option value="3" <?php if ($this->_tpl_vars['Tasks']['priority'] == '3'): ?> selected="selected"<?php endif; ?>>Mediun Priority</option>
										<option value="4" <?php if ($this->_tpl_vars['Tasks']['priority'] == '4'): ?> selected="selected"<?php endif; ?>>Normal Priority</option>
										<option value="5" <?php if ($this->_tpl_vars['Tasks']['priority'] == '5'): ?> selected="selected"<?php endif; ?>>Low Priority</option>
										<option value="6" <?php if ($this->_tpl_vars['Tasks']['priority'] == '6'): ?> selected="selected"<?php endif; ?>>Very Low Priority</option>
										<option value="7" <?php if ($this->_tpl_vars['Tasks']['priority'] == '7'): ?> selected="selected"<?php endif; ?>>Whatever</option>
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Context:</td>
								<td width="80%" align="left">
								<select name="Log[context]" id="context" class="select req-string">
										<option value="">-- Select --</option>
										<option value="1" <?php if ($this->_tpl_vars['Tasks']['context'] == '1'): ?> selected="selected"<?php endif; ?>>Work</option>
										<option value="2" <?php if ($this->_tpl_vars['Tasks']['context'] == '2'): ?> selected="selected"<?php endif; ?>>Meeting</option>
										<option value="3" <?php if ($this->_tpl_vars['Tasks']['context'] == '3'): ?> selected="selected"<?php endif; ?>>Document</option>
										<option value="4" <?php if ($this->_tpl_vars['Tasks']['context'] == '4'): ?> selected="selected"<?php endif; ?>>Internet</option>
										<option value="5" <?php if ($this->_tpl_vars['Tasks']['context'] == '5'): ?> selected="selected"<?php endif; ?>>Phone</option>
										<option value="6" <?php if ($this->_tpl_vars['Tasks']['context'] == '6'): ?> selected="selected"<?php endif; ?>>Email</option>
										<option value="7" <?php if ($this->_tpl_vars['Tasks']['context'] == '7'): ?> selected="selected"<?php endif; ?>>Home</option>
										<option value="8" <?php if ($this->_tpl_vars['Tasks']['context'] == '8'): ?> selected="selected"<?php endif; ?>>Others</option>
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Deadline</td>
								<td width="80%" align="left">
									<input type="text" name="deadline" id="deadline" class="select req-string" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['dead_line'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m-%d-%Y') : smarty_modifier_date_format($_tmp, '%m-%d-%Y')); ?>
"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Project:</td>
								<td width="80%" align="left">
									<select name="Log[project_id]" id="project_id" class="select req-string">
										<option value="">-- Select --</option>
										<?php $_from = $this->_tpl_vars['Projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['item']['project_id']; ?>
" <?php if ($this->_tpl_vars['item']['project_id'] == $this->_tpl_vars['Tasks']['project_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Title</td>
								<td width="80%" align="left">
									<input type="text" name="Log[title]" id="title" class="select req-string" value="<?php echo $this->_tpl_vars['Tasks']['title']; ?>
"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Description</td>
								<td width="80%" align="left">
									<textarea name="Log[description]" cols="64" rows="10"  id="task_description" class="input req-string" style="width:500px; height:200px;"><?php echo $this->_tpl_vars['Tasks']['description']; ?>
</textarea>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Task Status</td>
								<td width="80%" align="left">
									<input type="hidden" name="task_status" id="task_status"  value="<?php echo $this->_tpl_vars['Tasks']['task_status']; ?>
"/> 
									<span class="progressBar" id="sb"><?php echo $this->_tpl_vars['Tasks']['task_status']; ?>
%</span>
									<span>
									<a href="javascript:fnSelectProf('sb',20,'task_status');" id="c20d">20</a> |
									<a href="javascript:fnSelectProf('sb',40,'task_status');" id="c40d">40</a> |
									<a href="javascript:fnSelectProf('sb',60,'task_status');" id="c60d">60</a> |
									<a href="javascript:fnSelectProf('sb',80,'task_status');" id="c80d">80</a> |
									<a href="javascript:fnSelectProf('sb',100,'task_status');" id="c100d">100</a>
								</span>
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
/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.progressbar.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#sb").progressBar();
	$("#deadline").datepicker();
	$(\'#task_description\').wysiwyg();
		});	
</script>
'; ?>