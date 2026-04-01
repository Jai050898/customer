<?php /* Smarty version 2.6.26, created on 2012-12-21 02:13:15
         compiled from add-budget.tpl */ ?>
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
/dashboard.php">Home</a></li>
      <li>Add  Budget</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Add Budget</div>
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
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[year]" id="year" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['year']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Gross Sales:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[gsales]" id="gsales" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['gsales']; ?>
"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<tr class="Clone" >
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Item Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="select req-string" value="<?php echo $this->_tpl_vars['Tasks']['title']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Category:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="select req-string">
										<option value="">-- Select --</option>
										<?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['Cat']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Bugdet Amount:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[amount][]" id="amount" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['amount']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Actual Amount:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[actual_amount][]" id="actual_amount" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Tasks']['actual_amount']; ?>
"/></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				<tr class="Clone" align="right">
					<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
				</tr>
				
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
});
</script>
'; ?>