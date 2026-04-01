<?php /* Smarty version 2.6.26, created on 2013-06-11 09:55:28
         compiled from albums.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'albums.tpl', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Albums</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Select Album</U></h3></td>
				</tr>
				<tr>
				  <?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				  <td align="left" valign="left" style="padding-left:30px;"><strong><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/image-gallery.php?album=<?php echo $this->_tpl_vars['item']['album_id']; ?>
" style="color:#5E7185;font-family:arial;font-size:14px;"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/gallery.jpeg" alt="Gallery" /><br /><?php echo $this->_tpl_vars['item']['album_name']; ?>
 ( <?php echo $this->_tpl_vars['item']['totphotos']; ?>
)</a><br /><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</strong></td>
				  <?php $this->assign('row', ($this->_foreach['item']['iteration']-1)+1); ?>
				   <?php if ($this->_tpl_vars['row'] % 2 == '0'): ?>
				  	</tr><tr>
					<?php endif; ?>
				  <?php endforeach; else: ?>
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Albums added</td>
					</tr>
				  <?php endif; unset($_from); ?>
				</tr>
				
			</table>
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