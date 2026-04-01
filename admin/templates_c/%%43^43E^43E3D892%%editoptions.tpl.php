<?php /* Smarty version 2.6.26, created on 2012-11-06 08:11:40
         compiled from editoptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'editoptions.tpl', 39, false),)), $this); ?>
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
      <li>Edit Options</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Edit Options</div>
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
									<td colspan="2"><h2>Edit Options</h2></td>
								</tr>
							  <?php if ($_REQUEST['qid'] != "" && ((is_array($_tmp=$this->_tpl_vars['Quest']['Options'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > '0'): ?>
							  <?php $_from = $this->_tpl_vars['Quest']['Options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
							  <tr>
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log1[<?php echo $this->_tpl_vars['item']['option_id']; ?>
]" id="city" class="input " value="<?php echo $this->_tpl_vars['item']['option_name']; ?>
"/>
								 </td>
							  </tr>
							  <?php endforeach; endif; unset($_from); ?>
							  <tr>
							  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMore();">Add More Options</a></td>
							  </tr>
							  <tr class="Clone" style="display:none" id="newoption">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log_new[]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone" align="right" style="display:none" id="newoptionadd">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
								</tr>
							  <?php endif; ?>
							  <?php $_from = $this->_tpl_vars['Quest']['OptionsLab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
							  <tr>
							  <td colspan="2"><strong><?php echo $this->_tpl_vars['key']; ?>
</strong></td>
							  </tr>
							   <?php $_from = $this->_tpl_vars['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
							   
							   <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
							  <tr>
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log1[<?php echo $this->_tpl_vars['item']['option_id']; ?>
]" id="city" class="input " value="<?php echo $this->_tpl_vars['item']['option_name']; ?>
"/>
								 </td>
							  </tr>
							  <?php endforeach; endif; unset($_from); ?>
							  <tr>
							  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMoreOptions(<?php echo $this->_tpl_vars['k']; ?>
);">Add More Options</a></td>
							  </tr>
							  <tr class="Clone<?php echo $this->_tpl_vars['k']; ?>
" id="showoptions<?php echo $this->_tpl_vars['k']; ?>
" style="display:none">
								<td width="100" valign="top">Options</td>
								<td width="1000"  align="left">
									<input type="text" name="Log[<?php echo $this->_tpl_vars['k']; ?>
][]" id="city" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clone<?php echo $this->_tpl_vars['k']; ?>
" align="right"  id="showoptionsadd<?php echo $this->_tpl_vars['k']; ?>
" style="display:none">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone<?php echo $this->_tpl_vars['k']; ?>
">Add New</a></td>
								</tr>
  								<?php endforeach; endif; unset($_from); ?>
							  <?php endforeach; endif; unset($_from); ?> 
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#CatForm\',
		errorDiv	: \'#errorDiv1\'
});	
$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
	});
function ShowMore()
{
	$("#newoption").show();
	$("#newoptionadd").show();
}
function ShowMoreOptions(id)
{
	$("#showoptions"+id).show();
	$("#showoptionsadd"+id).show();
}
</script>
'; ?>