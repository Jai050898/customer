<?php /* Smarty version 2.6.26, created on 2014-02-15 01:47:51
         compiled from view-task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'view-task.tpl', 20, false),array('modifier', 'nl2br', 'view-task.tpl', 32, false),array('modifier', 'base64_encode', 'view-task.tpl', 36, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>View Task</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Priority:</td>
				  <td align="left" valign="center"><strong><?php if ($this->_tpl_vars['Tasks']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '3'): ?>Mediun Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['Tasks']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?></strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Context:</td>
				  <td align="left" valign="center"><?php if ($this->_tpl_vars['Tasks']['context'] == '1'): ?>Work<?php elseif ($this->_tpl_vars['Tasks']['context'] == '2'): ?>Meeting<?php elseif ($this->_tpl_vars['Tasks']['context'] == '3'): ?>Document<?php elseif ($this->_tpl_vars['Tasks']['context'] == '4'): ?>Internet<?php elseif ($this->_tpl_vars['Tasks']['context'] == '5'): ?>Phone<?php elseif ($this->_tpl_vars['Tasks']['context'] == '6'): ?>Email<?php elseif ($this->_tpl_vars['Tasks']['context'] == '7'): ?>Home<?php else: ?>Others<?php endif; ?></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Deadline:</td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['dead_line'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Project:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['Tasks']['name']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Title:</td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['Tasks']['title']; ?>
</td>
				</tr>
				<tr>
					<td align="right" valign="center" style="padding-left:55px;">Description:</td>
					<td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Comments:</td>
				  <td align="left" valign="center"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ajax.php?For=Comments&height=600&width=600&Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['Tasks']['task_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
" class="thickbox" title="View Comments"><?php echo $this->_tpl_vars['Tasks']['commentcount']; ?>
</a></td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Task Status:</td>
				  <td align="left" valign="center"><span class="progressBar" id="sb"><?php echo $this->_tpl_vars['Tasks']['task_status']; ?>
%</span>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Task Status History</a></td>
				</tr>
				<tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
										<tr>
										<td bgcolor="#336699" style="color:#fff;">Date</td>
										<td bgcolor="#336699" style="color:#fff;">Action</td>
										</tr>
										<?php $_from = $this->_tpl_vars['Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
											<tr>
												<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
												<td bgcolor="#f9f9f7" style="color:#000000;"><span class="progressBar" id="task_status<?php echo ($this->_foreach['item']['iteration']-1); ?>
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
			<div class="clear"></div>
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