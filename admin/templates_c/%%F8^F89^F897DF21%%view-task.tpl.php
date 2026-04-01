<?php /* Smarty version 2.6.26, created on 2013-06-18 02:58:32
         compiled from view-task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'view-task.tpl', 55, false),array('modifier', 'nl2br', 'view-task.tpl', 73, false),array('modifier', 'base64_encode', 'view-task.tpl', 79, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
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
      <li>View Task</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Task</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View Task</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									 <?php if ($this->_tpl_vars['Tasks']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '3'): ?>Mediun Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Context:</td>
								<td width="80%" align="left">
									<?php if ($this->_tpl_vars['Tasks']['context'] == '1'): ?>Work<?php elseif ($this->_tpl_vars['Tasks']['context'] == '2'): ?>Meeting<?php elseif ($this->_tpl_vars['Tasks']['context'] == '3'): ?>Document<?php elseif ($this->_tpl_vars['Tasks']['context'] == '4'): ?>Internet<?php elseif ($this->_tpl_vars['Tasks']['context'] == '5'): ?>Phone<?php elseif ($this->_tpl_vars['Tasks']['context'] == '6'): ?>Email<?php elseif ($this->_tpl_vars['Tasks']['context'] == '7'): ?>Home<?php else: ?>Others<?php endif; ?>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Deadline</td>
								<td width="80%" align="left">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['dead_line'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Project:</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['Tasks']['name']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Title</td>
								<td width="80%" align="left">
									<?php echo $this->_tpl_vars['Tasks']['title']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Description</td>
								<td width="80%" align="left">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Comments</td>
								<td width="80%" align="left">
									<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ajax.php?For=Comments&height=600&width=600&Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['task_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
" class="thickbox" title="View Comments"><?php echo $this->_tpl_vars['Tasks']['commentcount']; ?>
</a>
								 </td>
							  </tr>
							  <!-- <tr class="color_trbg">
								<td width="20%">Dispaly Type</td>
								<td width="80%" align="left">
									<select name="Log[diaplay_type]" id="diaplay_type" class="select req-string">
											<option value="">-- Select --</option>
											<option value="1" <?php if ($this->_tpl_vars['Tasks']['diaplay_type'] == '1'): ?> selected="selected"<?php endif; ?>>Public</option>
											<option value="2" <?php if ($this->_tpl_vars['Tasks']['diaplay_type'] == '2'): ?> selected="selected"<?php endif; ?>>Internal</option>
											<option value="3" <?php if ($this->_tpl_vars['Tasks']['diaplay_type'] == '3'): ?> selected="selected"<?php endif; ?>>Private</option>
										</select>	
								 </td>
							  </tr> -->
							  <tr class="color_trbg">
								<td width="20%">Task Status</td>
								<td width="80%" align="left">
									<span class="progressBar" id="sb"><?php echo $this->_tpl_vars['Tasks']['task_status']; ?>
%</span>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Task Status History</a>
								 </td>
							  </tr>
							  <tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table style="border:solid 1px #000000;" cellpadding="1" cellspacing="2" width="80%" align="center"> 
										<tr>
										<td style="border:solid 1px #000000">Date</td>
										<td style="border:solid 1px #000000">Action</td>
										</tr>
										<?php $_from = $this->_tpl_vars['Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
											<tr>
												<td style="border:solid 1px #000000"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
</td>
												<td style="border:solid 1px #000000"><span class="progressBar" id="task_status<?php echo ($this->_foreach['item']['iteration']-1); ?>
"><?php echo $this->_tpl_vars['item']['task_percentage']; ?>
</span></td>
											</tr>
										<?php endforeach; else: ?>
											<tr>
												<td colspan="2"><font color="#FF0000">No History Found</font></td>
											</tr>
										<?php endif; unset($_from); ?>
									</table>
								</td>
							  </tr>
			              </table>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.progressbar.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
function showhistory()
{
	if($("#spamdiv").text() == "Show")
	{
		$("#spamdiv").text("Hide");
		$("#showdiv").show();
	}
	else
	{
		$("#spamdiv").text("Show");
		$("#showdiv").hide();
	}
}
$(document).ready(function() {	
	$("#sb").progressBar();
		'; ?>
<?php $_from = $this->_tpl_vars['Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?><?php echo '
		$("#task_status'; ?>
<?php echo ($this->_foreach['item']['iteration']-1); ?>
<?php echo '").progressBar();
		'; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '
	});	
</script>
'; ?>