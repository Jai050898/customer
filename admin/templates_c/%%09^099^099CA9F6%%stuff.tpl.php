<?php /* Smarty version 2.6.26, created on 2011-02-18 13:09:00
         compiled from stuff.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'stuff.tpl', 31, false),array('modifier', 'nl2br', 'stuff.tpl', 45, false),array('function', 'cycle', 'stuff.tpl', 34, false),array('function', 'html_options', 'stuff.tpl', 63, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/admin/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/website-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Website survey</a></li>
							<li>Company Stuff Information </li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Company Stuff Information</div>
				  </div>
					<div class="ad_textsp">
						<table width="100%" >
						  <tr>
					<td align="center" colspan="3">&nbsp;																	</td>
				  </tr>
				  		<tr>
					<td width="84%" align="left" valign="middle" style="padding-bottom:10px">Do you wish to have employees reflected in your site information ? <br /><span class="infoText">(If so, please include the following information for each)</span></td>
					<td width="16%" colspan="2">&nbsp;</td>
				  </tr>
				  		<tr>
					<td colspan="3" align="left" style="padding-left:10px">
					  <div id="listEmployee">	 
						 <?php if (count($this->_tpl_vars['allEmployees']) > 0): ?>
							Employees added : 
							<?php unset($this->_sections['empList']);
$this->_sections['empList']['name'] = 'empList';
$this->_sections['empList']['loop'] = is_array($_loop=$this->_tpl_vars['allEmployees']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['empList']['show'] = true;
$this->_sections['empList']['max'] = $this->_sections['empList']['loop'];
$this->_sections['empList']['step'] = 1;
$this->_sections['empList']['start'] = $this->_sections['empList']['step'] > 0 ? 0 : $this->_sections['empList']['loop']-1;
if ($this->_sections['empList']['show']) {
    $this->_sections['empList']['total'] = $this->_sections['empList']['loop'];
    if ($this->_sections['empList']['total'] == 0)
        $this->_sections['empList']['show'] = false;
} else
    $this->_sections['empList']['total'] = 0;
if ($this->_sections['empList']['show']):

            for ($this->_sections['empList']['index'] = $this->_sections['empList']['start'], $this->_sections['empList']['iteration'] = 1;
                 $this->_sections['empList']['iteration'] <= $this->_sections['empList']['total'];
                 $this->_sections['empList']['index'] += $this->_sections['empList']['step'], $this->_sections['empList']['iteration']++):
$this->_sections['empList']['rownum'] = $this->_sections['empList']['iteration'];
$this->_sections['empList']['index_prev'] = $this->_sections['empList']['index'] - $this->_sections['empList']['step'];
$this->_sections['empList']['index_next'] = $this->_sections['empList']['index'] + $this->_sections['empList']['step'];
$this->_sections['empList']['first']      = ($this->_sections['empList']['iteration'] == 1);
$this->_sections['empList']['last']       = ($this->_sections['empList']['iteration'] == $this->_sections['empList']['total']);
?>
							  <div style="border:<?php echo smarty_function_cycle(array('values' => "#EAE5AF,#D4D3CA"), $this);?>
 1px solid; width:98%; margin:2px 0 7px 0;">
							  <table width="100%" border="0" bgcolor="<?php echo smarty_function_cycle(array('values' => "#F9F8EC,#F0F0EA"), $this);?>
">
								  <tr>
									<td width="130px" align="left" valign="middle">
									 <?php if ($this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpPhoto']): ?>
										<img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/thumbnails/<?php echo $this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpPhoto']; ?>
" alt="" />
									 <?php else: ?>
										<img src="images/noimage.gif" alt="" />
									 <?php endif; ?>
									 </td>
									<td valign="top" style="padding-left:10px;"><span class="infoText"><b>Name :</b> <?php echo $this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpName']; ?>
<br />
<b>Description :</b> <?php if ($this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpDescription']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpDescription'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br /><?php endif; ?>
<b>Certification :</b> <?php if ($this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpCertifications']): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['EmpCertifications'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br /><?php endif; ?>
<b>Time with company :</b> <?php if ($this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['TimeWithCompany']): ?> <?php echo $this->_tpl_vars['allEmployees'][$this->_sections['empList']['index']]['TimeWithCompany']; ?>
<br /><?php endif; ?></span>
</td>
								  </tr>
							  </table>
							  </div>
							<?php endfor; endif; ?>
						  <?php endif; ?>
						 </div> 
			</td>
				  </tr>
				  		<tr>
						<td align="center" colspan="3">
						<form name="frmStuff" id="frmStuff" method="post" class="fValidator-form">
							<table width="100%" border="0" class="left_content" style="color:#2f3337;">
					  <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">Do you wish to use the site for employment recruiting ?	&nbsp;													<select name="UseForEmpRecruiting" class="form">
									  <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['stuffDetail']['UseForEmpRecruiting']), $this);?>

									</select>	

						
</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="left" style="padding-bottom:10px" valign="middle">What job positions are currently available ?<br />

						<textarea name="CurrentJobs" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['stuffDetail']['CurrentJobs']; ?>
</textarea>
</td>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  
					  <tr>
						<td align="center" colspan="3">
						<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >		
						<input type="submit" name="btnSubmit" value="  Submit  " >								</td>
					  </tr>
					  <tr>
						<td align="center" colspan="3">&nbsp;																	</td>
					  </tr>
					 
					</table>
						</form>
						</td>
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
/js/common.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	function calHeight()
	{
		if (parseInt(navigator.appVersion)>3) {
		 if (navigator.appName=="Netscape") {
		  winW = window.innerWidth;
		  winH = window.innerHeight;
		 }
		 if (navigator.appName.indexOf("Microsoft")!=-1) {
		  winW = document.body.offsetWidth;
		  winH = document.body.offsetHeight;
		 }
		}
		return 	winH;
	}
	
	var newHeight=530;	
	/*newHeight=newHeight-280;*/

	function validateForm()
	{
		if(trimSpace(document.frmEmployee.EmpName.value)==\'\')
		{
			alert("Employee Name can\'t be empty");
			document.frmEmployee.EmpName.focus();
			return false;
		}
		else if(trimSpace(document.frmEmployee.EmpDescription.value)==\'\')
		{
			alert("Please tell me something about the empoyee");
			document.frmEmployee.EmpDescription.focus();
			return false;
		}
		else if(trimSpace(document.frmEmployee.TimeWithCompany.value)==\'\')
		{
			alert("Please tell me how long the employee is with your company.");
			document.frmEmployee.TimeWithCompany.focus();
			return false;
		}
		else
		{
			document.getElementById("divVeil").style.height=newHeight+\'px\';
			document.getElementById("divVeil").style.display=\'block\';
			
			document.getElementById("frmEmployee").submit();
			setTimeout("hideDiv()",4000);
			
		}
		
	}
	
	function deleteEmpoyee(id)
	{
		document.getElementById("divVeil").style.height=newHeight+\'px\';
		document.getElementById("divVeil").style.display=\'block\';
		queryString=\'act=del&EmpId=\'+id;
		sendRequest(\'ajaxExecutable/addEmployee.php\',queryString,\'listEmployee\',\'Get\');
		setTimeout("hideDiv()",4000);
	}
	
	function hideDiv()
	{
		document.getElementById("divVeil").style.display=\'none\';
		document.getElementById("frmEmployee").reset();
		alert(\'Operation completed Successfully\');
		//fethc all the employee using ajax
		sendRequest(\'ajaxExecutable/getEmployee.php\',\'\',\'listEmployee\',\'Get\');
		//End :Call the ajax stuff
		
	}
</script>
'; ?>