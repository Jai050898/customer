<?php /* Smarty version 2.6.26, created on 2012-11-02 06:26:42
         compiled from add-category.tpl */ ?>
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
								  <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/manage-categories.php">Manage Survey</a></li>
								  <li><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Survey</li>
							  </ul>
						  	<div class="clr"></div>
						  </div>
						<div id="admin_head"><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Survey</div>
					  </div>
					<div class="ad_textsp">
						<table width="100%" cellspacing="0" cellpadding="0">
							<tr>
							  <td height="10"></td>
							</tr>
							<tr>
							  <td align="left" valign="top" >
								<form name="CatForm" class="form" id="CatForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
								<input type="hidden" name="hid_key" id="hid_key" value="">
									<table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
										<tr>
											<td colspan="2"><h2><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Category</h2></td>
										  </tr>
										<tr class="color_trbg">
											<td width="20%">Category Name <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<input type="text" name="Log[cat_name]" id="cat_name" class="input req-string" value="<?php echo $this->_tpl_vars['Cat']['cat_name']; ?>
"/>
											 </td>
										</tr>
										<tr class="color_trbg">
											<td width="20%">Description <span class="redstar"> * </span></td>
											<td width="80%" align="left">
												<textarea name="Log[cat_description]" cols="64" rows="10"  id="cat_description" class="input req-string" style="width:500px; height:200px;"><?php echo $this->_tpl_vars['Cat']['cat_description']; ?>
</textarea>
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
		scope		: \'#CatForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$(\'#cat_description\').wysiwyg();
		});	
</script>
'; ?>