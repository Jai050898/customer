<?php /* Smarty version 2.6.26, created on 2013-06-18 02:55:53
         compiled from view-project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'view-project.tpl', 58, false),array('modifier', 'date_format', 'view-project.tpl', 73, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
      <li>View Project</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Project</div>
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
									<td colspan="2"><h2>View Project</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="12%">Project Title</td>
								<td width="88%" align="left">
									<?php echo $this->_tpl_vars['Project']['name']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">Customer</td>
								<td width="88%" align="left">
									<?php echo $this->_tpl_vars['Project']['first_name']; ?>
 <?php echo $this->_tpl_vars['Project']['last_name']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Priority</td>
								<td width="80%" align="left">
									 <?php if ($this->_tpl_vars['Project']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['Project']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '3'): ?>Medium Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['Project']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td valign="top">Description</td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['Project']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td valign="top">Project Status</td>
								<td align="left"><?php if ($this->_tpl_vars['Project']['project_status'] == '1'): ?>New<?php elseif ($this->_tpl_vars['Project']['project_status'] == '2'): ?>Proposal<?php elseif ($this->_tpl_vars['Project']['project_status'] == '3'): ?>In Progress<?php elseif ($this->_tpl_vars['Project']['project_status'] == '4'): ?>Completed<?php else: ?>Cancelled<?php endif; ?>&nbsp;&nbsp;>> &nbsp;&nbsp;<a href="javascript: showhistory();"><span id="spamdiv">Show</span> Project Status History</a></td>
							  </tr>
							  <tr class="color_trbg" style="display: none;" id="showdiv">
								<td valign="top" colspan="2">
									<table style="border:solid 1px #000000;" cellpadding="1" cellspacing="2" width="80%">
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
												<td style="border:solid 1px #000000"><?php if ($this->_tpl_vars['item']['project_status'] == '1'): ?>New<?php elseif ($this->_tpl_vars['item']['project_status'] == '2'): ?>Proposal<?php elseif ($this->_tpl_vars['item']['project_status'] == '3'): ?>In Progress<?php elseif ($this->_tpl_vars['item']['project_status'] == '4'): ?>Completed<?php else: ?>Cancelled<?php endif; ?></td>
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
    <td height="50" align="left" valign="top">&nbsp;</td>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#myform\',
		errorDiv	: \'#errorDiv1\'
});
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
</script>
'; ?>
