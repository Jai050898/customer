<?php /* Smarty version 2.6.26, created on 2013-10-30 04:01:08
         compiled from yahooserp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'yahooserp.tpl', 12, false),array('modifier', 'count', 'yahooserp.tpl', 24, false),)), $this); ?>
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
			<h1>Yahoo SERPs</h1>
			<div id="bodyleft">
<div  class="left_content" style="color:#2f3337;">
<div class="contents01">
<?php $_from = $this->_tpl_vars['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
<span class="style0001"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</span>

<div id="latest_images">
<?php $_from = $this->_tpl_vars['item']['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['items']):
        $this->_foreach['items']['iteration']++;
?>

<a href="javascript: ShowIMG('<?php echo $this->_tpl_vars['item']['date']; ?>
','<?php echo $this->_tpl_vars['items']['image']; ?>
');"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/serps/<?php echo $this->_tpl_vars['items']['image']; ?>
" width="150" height="104" /></a>
<?php endforeach; endif; unset($_from); ?>
</div>
<div style="height:10px;"></div>
<?php endforeach; else: ?>
No Yahoo SERPs  Found
<?php endif; unset($_from); ?>
<?php if (count($this->_tpl_vars['Images']) > 0): ?>
	<table  width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
			<tr>
			<td  align="left" bgcolor="#336699">&nbsp;		</td>
			<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;"><?php if ($this->_tpl_vars['first'] != ""): ?><?php echo $this->_tpl_vars['first']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['prev'] != ""): ?><?php echo $this->_tpl_vars['prev']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['nav'] != ""): ?><?php echo $this->_tpl_vars['nav']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['next'] != ""): ?><?php echo $this->_tpl_vars['next']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['last'] != ""): ?><?php echo $this->_tpl_vars['last']; ?>
<?php endif; ?></div></td>
			</tr>
			</table>
			</td>
		</tr>
	</table>
<?php endif; ?>
</div>
</div>

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
<?php echo '
<script language="javascript" type="text/javascript">
function ShowIMG(dt,val)
{
	tb_show("Yahoo SERPs",\'show-google-image.php?height=500&width=1040&img=\'+val);
	return;
}
</script>
'; ?>