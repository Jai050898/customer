<?php /* Smarty version 2.6.26, created on 2013-06-06 22:33:50
         compiled from links.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_encode', 'links.tpl', 14, false),array('modifier', 'count', 'links.tpl', 27, false),)), $this); ?>
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
			<h1>Links</h1>
			<div style="min-height:470px;color:#2f3337;" class="left_content" >
			<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				<tr>
				  <?php $_from = $this->_tpl_vars['Links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				  <td align="left" valign="left" style="padding-left:10px;" width="50%">
				  <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-link.php?Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['link_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
&url=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['link_url'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
" target="_blank"><img src="images/leftarrow.png" border="0">&nbsp;
				   <?php echo $this->_tpl_vars['siteurl']; ?>
/<?php echo $this->_tpl_vars['item']['code']; ?>
</a>
				  </td>
				  <?php $this->assign('row', ($this->_foreach['item']['iteration']-1)+1); ?>
				   <?php if ($this->_tpl_vars['row'] % 2 == '0'): ?>
				  	</tr><tr>
					<?php endif; ?>
				  <?php endforeach; else: ?>
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Links added</td>
					</tr>
				  <?php endif; unset($_from); ?>
				</tr>
				<?php if (count($this->_tpl_vars['Links']) > 0): ?>
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4"><div style="float:right; padding-right:10px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
				</tr>
				<?php endif; ?>
			</table>
			</div>
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
/js/thickbox.js"></script>	