<?php /* Smarty version 2.6.26, created on 2013-05-07 08:57:48
         compiled from gennumber.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'rand', 'gennumber.tpl', 8, false),)), $this); ?>

			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<?php $this->assign('random', ((is_array($_tmp=1000000)) ? $this->_run_mod_handler('rand', true, $_tmp, 9876543) : rand($_tmp, 9876543))); ?>
				<tr id="hide<?php echo $this->_sections['foo']['index']; ?>
">
				  <td align="right" valign="top" style="width:160px;">Number:</td>
				  <td align="left" valign="center"><input type="text" class="input" readonly="readonly" value="<?php echo $this->_tpl_vars['random']; ?>
" /></td>
				</tr>
			</table>
		