<?php /* Smarty version 2.6.26, created on 2012-11-05 05:51:35
         compiled from add-question.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'add-question.tpl', 74, false),)), $this); ?>
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
      <li><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Question</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head"><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Question</div>
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
									<td colspan="2"><h2><?php if ($_REQUEST['cat_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Question</h2></td>
								</tr>
							  <tr class="color_trbg">
								<td width="20%">Category</td>
								<td width="80%" align="left">
									<select name="Log[cat_id]" id="cat_id" style="width:187px; height:23px;" class="select req-string">
									<option value="">-----Please Select-----</option>
									<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['Cat']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
									<option value="<?php echo $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_id']; ?>
" <?php if ($this->_tpl_vars['Quest']['cat_id'] == $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['Cat'][$this->_sections['list']['index']]['cat_name']; ?>
</option>
									<?php endfor; endif; ?>
								</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%">Question Type</td>
								<td width="80%" align="left">
									<select name="Log[quest_type]" id="quest_type" style="width:187px; height:23px;" class="select req-string" onChange="javascript: ShowOption(this.value);">
									<option value="">-----Please Select-----</option>
									<option value="R" <?php if ($this->_tpl_vars['Quest']['quest_type'] == 'R'): ?> selected="selected" <?php endif; ?>>Radio</option>
									<option value="C" <?php if ($this->_tpl_vars['Quest']['quest_type'] == 'C'): ?> selected="selected" <?php endif; ?>>Multple Choice</option>
									<option value="B" <?php if ($this->_tpl_vars['Quest']['quest_type'] == 'B'): ?> selected="selected" <?php endif; ?>>Text Box</option>
									<option value="T" <?php if ($this->_tpl_vars['Quest']['quest_type'] == 'T'): ?> selected="selected" <?php endif; ?>>Text Answer</option>
								</select>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" valign="top">Question</td>
								<td width="80%" align="left">
									<textarea name="Log[question]" cols="64" rows="10"  id="question" class="input req-string" style="width:400px; height:100px;"><?php echo $this->_tpl_vars['Quest']['question']; ?>
</textarea>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="20%" valign="top">Question Description</td>
								<td width="80%" align="left">
									<textarea name="Log[question_desc]" cols="64" rows="10"  id="question_desc" class="input" style="width:400px; height:100px;"><?php echo $this->_tpl_vars['Quest']['question_desc']; ?>
</textarea>
								 </td>
							  </tr>
							  <?php if ($_REQUEST['quest_id'] != "" && ((is_array($_tmp=$this->_tpl_vars['Quest']['Options'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > '0'): ?>
							
							  <?php else: ?>
							  <tr style="display:none" id="showall">
							  <td width="100" valign="top">Has Lables</td>
							  <td width="200"  align="left"><input type="radio" name="Log[lable]" id="lable" value="Y" onclick="javascript: ShowAllDivs(this.value)" />&nbsp; YES &nbsp;&nbsp;<input type="radio" name="Log[lable]" id="lable" value="N" onclick="javascript: ShowAllDivs(this.value)" />&nbsp; NO
							  </tr>
							  <tr class="Clonea" style="display:none" id="showlabels">
							  <td width="100" valign="top">Lable</td>
								<td width="200"  align="left">
									<input type="text" name="Lable[]" id="lable" class="input " value=""/>
								 </td>
							  </tr>
							  <tr class="Clonea" align="right" style="display:none" id="showlabels1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clonea">Add New</a></td>
								</tr>
							  <tr class="Clone" style="display:none" id="showoptions">
								<td width="100" valign="top">Options</td>
								<td width="200"  align="left">
									<input type="text" name="Log1[]" id="city" class="input " value=""/>
								 </td>
							  </tr>
								<tr class="Clone" align="right" style="display:none" id="showoptions1">
									<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
								</tr>
								<?php endif; ?>
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
function ShowOption(id)
{
	//alert(id);
	if(id != "T" && id != "B")
	{
		$("#showall").show();
	}
	else
	{
		$("#showall").hide();
	}
}
function ShowAllDivs(id)
{
	if(id == "N")
	{
		$("#showoptions").show();
		$("#showoptions1").show();
		$("#showlabels").hide();
		$("#showlabels1").hide();
	}
	else
	{
		$("#showlabels").show();
		$("#showlabels1").show();
		$("#showoptions").hide();
		$("#showoptions1").hide();
	}
}
</script>
'; ?>