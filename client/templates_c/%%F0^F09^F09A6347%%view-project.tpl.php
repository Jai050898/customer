<?php /* Smarty version 2.6.26, created on 2011-02-01 12:22:01
         compiled from view-project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-project.tpl', 16, false),array('modifier', 'date_format', 'view-project.tpl', 31, false),)), $this); ?>
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
			<h1>View Project</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Project Title:</td>
				  <td align="left" valign="center"><strong><?php echo $this->_tpl_vars['Project']['name']; ?>
</strong></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:55px;">Description:</td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['Project']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="top" style="padding-left:55px;">Project Status:</td>
				  <td align="left" valign="center"><?php if ($this->_tpl_vars['Project']['project_status'] == '1'): ?>New<?php elseif ($this->_tpl_vars['Project']['project_status'] == '2'): ?>Proposal<?php elseif ($this->_tpl_vars['Project']['project_status'] == '3'): ?>In Progress<?php elseif ($this->_tpl_vars['Project']['project_status'] == '4'): ?>Completed<?php else: ?>Cancelled<?php endif; ?>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Project Status History</a></td>
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
												<td bgcolor="#f9f9f7" style="color:#000000;"><?php if ($this->_tpl_vars['item']['project_status'] == '1'): ?>New<?php elseif ($this->_tpl_vars['item']['project_status'] == '2'): ?>Proposal<?php elseif ($this->_tpl_vars['item']['project_status'] == '3'): ?>In Progress<?php elseif ($this->_tpl_vars['item']['project_status'] == '4'): ?>Completed<?php else: ?>Cancelled<?php endif; ?></td>
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
			<div style="height:10px;"></div>
			<h1>Project members</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<?php if ($this->_tpl_vars['AllUsers'] != ""): ?>
			  <tr>
				<td colspan="3"><a href="javascript: showForm();"><span id="spamdiv1">Show</span> Add User to this project Form</a></td>
			  </tr>
			  <tr id="showdiv1" style="display:none">
				<td colspan="3">
				<form name="myform" id="myform" method="post" onsubmit="javascript:$('#adduser').val('Save');">
				<input type="hidden" name="adduser" id="adduser">
					<table>
					<tr class="color_trbg">
						<td valign="top">User</td>
						<td align="left">
							<select name="Log[user_id]" id="user_id" class="select req-string">
								<option value="">-- Please Select --</option>
								<?php $_from = $this->_tpl_vars['AllUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
									<option value="<?php echo $this->_tpl_vars['item']['user_id']; ?>
"><?php echo $this->_tpl_vars['item']['first_name']; ?>
</option>
								<?php endforeach; endif; unset($_from); ?>
							</select>
						</td>
					  </tr>
					  <tr>
						  <td align="right" valign="middle">&nbsp;</td>
						  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
						</tr>
					  <tr class="color_trbg">
						<td valign="top" colspan="2" align="center"><input id="submitBtn1" value="Add User" type="submit" class="sendBtn" /></td>
					  </tr>
					</table>
					</form>
				</td>
			  </tr>
			  <?php endif; ?>
			  <tr>
			  <td colspan="3">
			  <table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc" >
			  <tr>
				<td bgcolor="#336699" style="color:#fff;">Name</td>
				<td bgcolor="#336699" style="color:#fff;">Location</td>
				<td bgcolor="#336699" style="color:#fff;">Adde Date</td>
				<td bgcolor="#336699" style="color:#fff;">Action</td>
			  </tr>
			  <?php $_from = $this->_tpl_vars['Users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
			  <tr>
				<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['first_name']; ?>
</td>
				<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo $this->_tpl_vars['item']['city']; ?>
 - <?php echo $this->_tpl_vars['item']['country']; ?>
</td>
				<td bgcolor="#f9f9f7" style="color:#000000;"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
				<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/client/view-project.php?project_id=<?php echo $this->_tpl_vars['Project']['project_id']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
&act=del">Delete</a></td>
			  </tr>
			  <?php endforeach; else: ?>
			  	 <tr>
					<td colspan="4" align="center" bgcolor="#f9f9f7" style="color:#000000;"><font color="#FF0000">No Users Added to this project</font></td>
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
function showForm()
{
	if($("#spamdiv1").text() == "Show")
	{
		$("#spamdiv1").text("Hide");
		$("#showdiv1").show();
	}
	else
	{
		$("#spamdiv1").text("Show");
		$("#showdiv1").hide();
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