<?php /* Smarty version 2.6.26, created on 2014-02-15 01:49:43
         compiled from edit-ro-goal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'edit-ro-goal.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1>Edit RO Goal</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Year:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['Projects']['year']; ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Month:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><?php echo ((is_array($_tmp="01-".($this->_tpl_vars['Projects']['month'])."-".($this->_tpl_vars['Projects']['year']))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B") : smarty_modifier_date_format($_tmp, "%B")); ?>
</td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">New:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[newval]" id="newval" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Projects']['newval']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Repeat:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[repeatval]" id="repeatval" class="select req-string req-numeric" value="<?php echo $this->_tpl_vars['Projects']['repeatval']; ?>
"/></td>
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
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
</script>
'; ?>