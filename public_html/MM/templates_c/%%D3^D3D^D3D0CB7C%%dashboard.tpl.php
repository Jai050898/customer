<?php /* Smarty version 2.6.26, created on 2013-05-09 09:00:59
         compiled from dashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'dashboard.tpl', 19, false),array('modifier', 'date_format', 'dashboard.tpl', 53, false),array('modifier', 'base64_encode', 'dashboard.tpl', 86, false),)), $this); ?>
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
			<h1>Latest Details</h1>
			<div id="bodyleft">
<div  class="left_content" style="color:#2f3337;">
<div class="wikipans">

<span class="style0001">Latest Wiki Pages </span>

<div class=" clear"></div>
<?php $_from = $this->_tpl_vars['Wiki']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>

<div class="wikipan"><strong><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/wiki/index.php/<?php echo $this->_tpl_vars['item']['page_title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['page_title']; ?>
</a></strong><br />

<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['si_text'])) ? $this->_run_mod_handler('truncate', true, $_tmp, '100') : smarty_modifier_truncate($_tmp, '100')); ?>

</div>
<?php endforeach; else: ?>
No Wiki Pages Found
<?php endif; unset($_from); ?>

</div>



<div class="clear"></div>

<div class="contents01">

<span class="style0001">Latest Tasks</span><br />

<table width="100%" border="0" cellspacing="1" bgcolor="#CCCCCC" class="table_pan">

  <tr style="color:#FFF; font-weight:bold;">

    <td width="33%" align="left" valign="middle" bgcolor="#3b5e7c">Tittle</td>

    <td width="32%" align="left" valign="middle" bgcolor="#3b5e7c">Priority</td>

    <td width="35%" align="left" valign="middle" bgcolor="#3b5e7c">Deadline</td>

  </tr>
<?php $_from = $this->_tpl_vars['Tasks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
  <tr>

    <td bgcolor="#FFFFFF"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-task.php?task_id=<?php echo $this->_tpl_vars['item']['task_id']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</a></td>

    <td bgcolor="#FFFFFF"><?php if ($this->_tpl_vars['item']['priority'] == '1'): ?>Urgent<?php elseif ($this->_tpl_vars['item']['priority'] == '2'): ?>High Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '3'): ?>Mediun Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '4'): ?> Normal Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '5'): ?>Low Priority<?php elseif ($this->_tpl_vars['item']['priority'] == '6'): ?>Very Low Priority<?php else: ?>Whatever<?php endif; ?></td>

    <td bgcolor="#FFFFFF"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['dead_line'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>

  </tr>
<?php endforeach; else: ?>
<tr>
<td bgcolor="#FFFFFF" colspan="3">No Tasks Found</td>
</tr>
<?php endif; unset($_from); ?>
</table>



  <br />


<span class="style0001">Latest Blogs</span><br />
<?php $_from = $this->_tpl_vars['Blogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>

  <div class="style0002"><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/blog/?p=<?php echo $this->_tpl_vars['item']['ID']; ?>
"><?php echo $this->_tpl_vars['item']['post_title']; ?>
</a></div>
  <div style="padding-left:0px;">
<?php echo $this->_tpl_vars['item']['post_content']; ?>

</div>
<br />
<br />
<?php endforeach; else: ?>
No Blogs Found
<?php endif; unset($_from); ?>


<span class="style0001">Latest Images </span>

<div id="latest_images">
<?php $_from = $this->_tpl_vars['Images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
<a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/view-image.php?Id=<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['photo_id'])) ? $this->_run_mod_handler('base64_encode', true, $_tmp) : smarty_modifier_base64_encode($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/photos/thumbnails/<?php echo $this->_tpl_vars['item']['photo_name']; ?>
" width="130" height="94" /></a>
<?php endforeach; else: ?>
No Images Found
<?php endif; unset($_from); ?>
</div>

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