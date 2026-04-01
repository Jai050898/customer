<?php /* Smarty version 2.6.26, created on 2013-09-17 01:30:59
         compiled from view-project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-project.tpl', 20, false),array('modifier', 'date_format', 'view-project.tpl', 35, false),)), $this); ?>
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
				  <td align="right" valign="center" style="padding-left:55px;">Priority:</td>
				  <td align="left" valign="center"><strong><?php if ($this->_tpl_vars['Project']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['Project']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '3'): ?>Medium Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?></strong></td>
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
</script>
'; ?>