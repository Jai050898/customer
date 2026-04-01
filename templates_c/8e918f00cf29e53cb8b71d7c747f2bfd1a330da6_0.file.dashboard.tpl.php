<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:32:28
  from '/var/www/html/templates/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbb0ccf10773_54972176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e918f00cf29e53cb8b71d7c747f2bfd1a330da6' => 
    array (
      0 => '/var/www/html/templates/dashboard.tpl',
      1 => 1774954541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:rightbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbb0ccf10773_54972176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'/var/www/html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/var/www/html/libs/plugins/modifier.base64_encode.php','function'=>'smarty_modifier_base64_encode',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Wiki']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

<div class="wikipan"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/wiki/index.php/<?php echo $_smarty_tpl->tpl_vars['item']->value['page_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['page_title'];?>
</a></strong><br />

<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['si_text'],"100");?>

</div>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
No Wiki Pages Found
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Tasks']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <tr>

    <td bgcolor="#FFFFFF"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/view-task.php?task_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['task_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>

    <td bgcolor="#FFFFFF"><?php if ($_smarty_tpl->tpl_vars['item']->value['priority'] == "1") {?>Urgent<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "2") {?>High Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "3") {?>Mediun Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "4") {?> Normal Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "5") {?>Low Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "6") {?>Very Low Priority<?php } else { ?>Whatever<?php }?></td>

    <td bgcolor="#FFFFFF"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['dead_line']);?>
</td>

  </tr>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
<tr>
<td bgcolor="#FFFFFF" colspan="3">No Tasks Found</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>



  <br />


<span class="style0001">Latest Blogs</span><br />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Blogs']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

  <div class="style0002"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/blog/?p=<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['post_title'];?>
</a></div>
  <div style="padding-left:0px;">
<?php echo $_smarty_tpl->tpl_vars['item']->value['post_content'];?>

</div>
<br />
<br />
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
No Blogs Found
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<span class="style0001">Latest Images </span>

<div id="latest_images">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Images']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/view-image.php?Id=<?php echo smarty_modifier_base64_encode($_smarty_tpl->tpl_vars['item']->value['photo_id']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/photos/thumbnails/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo_name'];?>
" width="130" height="94" /></a>
<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
No Images Found
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

</div>
</div>

</div>
			<div class="clear"></div>
		</div>
		<?php $_smarty_tpl->_subTemplateRender("file:rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
