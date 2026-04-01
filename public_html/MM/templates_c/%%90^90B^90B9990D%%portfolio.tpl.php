<?php /* Smarty version 2.6.26, created on 2013-05-22 06:07:50
         compiled from portfolio.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'portfolio.tpl', 22, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<meta http-equiv="imagetoolbar" content="no">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Portfolio</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5"  class="left_content" style="color:#2f3337;">
			<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['PDetails']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<tr>
					<td style="height:10px;"></td>
				</tr>
				<tr>
					<td width="20%"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/thumbnails/<?php echo $this->_tpl_vars['PDetails'][$this->_sections['list']['index']]['image']; ?>
" alt="<?php echo $this->_tpl_vars['PDetails'][$this->_sections['list']['index']]['project_name']; ?>
" title="<?php echo $this->_tpl_vars['PDetails'][$this->_sections['list']['index']]['project_name']; ?>
"></td>
					<td width="80%" style="font-size:18px; font-weight:normal; padding:0px; margin:0px; font-family: Arial; color:#322115;"><?php echo $this->_tpl_vars['PDetails'][$this->_sections['list']['index']]['project_name']; ?>
</td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#1AA6BD"><span style="color:#fff; font-size:12px;"><strong>Description</strong></span></td>
				</tr>
				<tr>
					<td <?php if (! $this->_sections['list']['last']): ?> style="border-bottom:1px dashed #7F7F7F" <?php endif; ?> colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['PDetails'][$this->_sections['list']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
				</tr>
			<?php endfor; else: ?>
				<tr>
					<td style="color:#FF0000; font-size:14px" colspan="2" align="center">No Portfolio's found</td>
				</tr>
			<?php endif; ?>
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
<?php echo '
<SCRIPT TYPE="text/javascript">

//Disable right click script
var message="Content is Copyrighted";

function clickIE() 
{
	if (document.all) 
	{
		alert(message);
		return false;
	}
}
function clickNS(e) 
{
	if(document.layers||(document.getElementById&&!document.all)) 
	{
		if (e.which==2||e.which==3) 
		{
			alert(message);
			return false;
		}
	}
}
function doSomething(e) 
{
	if (!e) var e = window.event;
	if (e.keyCode==17 || e.keyCode==65) 
		{
			alert(message);
			return false;
		}
}
if (document.layers)
{
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS;
}
else
{
	document.onmouseup=clickNS;
	document.onkeyup=doSomething;
	document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")

</SCRIPT>
'; ?>