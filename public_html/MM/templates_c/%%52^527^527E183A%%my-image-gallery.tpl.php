<?php /* Smarty version 2.6.26, created on 2013-09-17 01:26:01
         compiled from my-image-gallery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_encode', 'my-image-gallery.tpl', 22, false),array('modifier', 'date_format', 'my-image-gallery.tpl', 23, false),array('modifier', 'count', 'my-image-gallery.tpl', 38, false),array('function', 'html_image', 'my-image-gallery.tpl', 24, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Image Gallery</h1>
			<form name="MyGallery" id="MyGallery" onsubmit="javascript:$('#hid_key').val('Save');" method="post" class="form">
			<input type="hidden" name="hid_key" id="hid_key" value="" />
			<input type="hidden" name="hid_id" id="hid_id" value="" />
			<input type="hidden" name="hid_type" id="hid_type" value="" />
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-right:10px;" align="right" colspan="4"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-photos-new.php?album_id=<?php echo $_REQUEST['album']; ?>
">Add Photos</a></td>
				</tr>
				<tr>
				  <?php $_from = $this->_tpl_vars['Photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				  <td align="left" valign="left" style="padding-left:10px;">
					  <div onmouseover="javascript:document.getElementById('ActionDiv<?php echo ($this->_foreach['item']['iteration']-1); ?>
').style.visibility='visible';" onmouseout="javascript:document.getElementById('ActionDiv<?php echo ($this->_foreach['item']['iteration']-1); ?>
').style.visibility='hidden';">
						  <a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-image.php?Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['photo_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/thumbnails/<?php echo $this->_tpl_vars['item']['photo_name']; ?>
" alt="Gallery" /></a>
						  Views ( <?php echo $this->_tpl_vars['item']['views']; ?>
)<br /><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['created_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

						  <div style="float:right; padding-right:0px;height:20px;visibility:hidden;" id="ActionDiv<?php echo ($this->_foreach['item']['iteration']-1); ?>
"><a href="javascript:void(0);" onclick="fnDeleteRecord(document.MyGallery,<?php echo $this->_tpl_vars['item']['photo_id']; ?>
,'');"><?php echo smarty_function_html_image(array('file' => "images/delete.gif",'alt' => 'Delete','vspace' => '2'), $this);?>
</a></div>
						  <div class="clr"></div>
						  </div>
					 </td>				  
				  <?php $this->assign('row', ($this->_foreach['item']['iteration']-1)+1); ?>
				   <?php if ($this->_tpl_vars['row'] % 4 == '0'): ?>
				  	</tr><tr><td colspan="4" height="30">&nbsp;</td></tr><tr>
					<?php endif; ?>
				  <?php endforeach; else: ?>
				  	<tr>
						<td style="padding-top:10px;padding-left:25px;" colspan="2">No Photos added</td>
					</tr>
				  <?php endif; unset($_from); ?>
				</tr>
				<?php if (count($this->_tpl_vars['Photos']) > 0): ?>
				<tr>
					<td colspan="4">&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4"><div style="float:right; padding-right:100px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
				</tr>
				<?php endif; ?>
			</table>
			</form>
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
/js/jquery.alerts.js"></script>	
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>	
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/thickbox.js"></script>