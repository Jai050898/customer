<?php /* Smarty version 2.6.26, created on 2013-06-06 22:34:07
         compiled from add-competitor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'add-competitor.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="ProjectForm" class="form" id="ProjectForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<div style="height:10px;"></div>
			<h1><?php if ($_REQUEST['project_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Competitor</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[name]" id="name" class="input req-string" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['Projects']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Address:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[address]" id="address" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['address']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">City:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[city]" id="city" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['city']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">State:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[state]" id="state" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['state']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Zip Code:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[zip]" id="zip" class="input req-string" value="<?php echo $this->_tpl_vars['Projects']['zip']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">WebSite:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[website]" id="website" class="input" value="<?php echo $this->_tpl_vars['Projects']['website']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Phone:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[phone]" id="phone" class="input" value="<?php echo $this->_tpl_vars['Projects']['phone']; ?>
"/></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Reviews:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[reviews]" id="reviews" class="input" value="<?php echo $this->_tpl_vars['Projects']['reviews']; ?>
"/></td>
				</tr>
				
				
				<tr>
				  <td align="right" valign="top" style="padding-left:5px;">Verified:</td>
				  <td align="left" valign="center"><select name="Log[verified]" id="verified" class="input req-string" style="height:25px;">
											<option value="">-- Please Select --</option>
											<option value="Y" <?php if ($this->_tpl_vars['Projects']['verified'] == 'Y'): ?> selected="selected"<?php endif; ?>>YES</option>
											<option value="N" <?php if ($this->_tpl_vars['Projects']['verified'] == 'N'): ?> selected="selected"<?php endif; ?>>NO</option>
										</select></td>
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
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#ProjectForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$(\'#album_description\').wysiwyg();
		});	
</script>
'; ?>