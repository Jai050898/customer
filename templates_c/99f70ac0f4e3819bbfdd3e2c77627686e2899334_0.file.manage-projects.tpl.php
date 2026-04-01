<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:32:01
  from '/var/www/html/templates/manage-projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbccd15bb735_37265899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99f70ac0f4e3819bbfdd3e2c77627686e2899334' => 
    array (
      0 => '/var/www/html/templates/manage-projects.tpl',
      1 => 1774963917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbccd15bb735_37265899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
			<div class="bodyleft">
			<div style="height:10px;"></div>
			<span style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-project.php">Add Project</a></span>
			<h1>Manage Projects</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" bgcolor="#6699cc">
				<tr>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Project Name</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Status</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Priority</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Members</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Tasks</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Created Date</strong></td>
					<td  bgcolor="#336699" style="color:#fff;"><strong>Actions</strong></td>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Projects']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td bgcolor="#f9f9f7" style="color:#000000;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/view-project.php?project_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>&nbsp;</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php if ($_smarty_tpl->tpl_vars['item']->value['project_status'] == "1") {?><font color="#00CC33">New</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['project_status'] == "2") {?><font color="#0000FF">Proposal</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['project_status'] == "3") {?><font color="#00EEFF">In Progress</font><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['project_status'] == "4") {?><font color="#00ff00">Completed</font><?php } else { ?><font color="#FF0000">Cancelled</font><?php }?></td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php if ($_smarty_tpl->tpl_vars['item']->value['priority'] == "1") {?>Urgent<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "2") {?>High Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "3") {?>Medium Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "4") {?> Normal Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "5") {?>Low Priority<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['priority'] == "6") {?>Very Low Priority<?php } else { ?>Whatever<?php }?></td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['totmembers'];?>
</td>
					<td bgcolor="#f9f9f7" style="color:#000000;text-align: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['totaltasks'];?>
</td>
                                        <td bgcolor="#f9f9f7" style="text-align: right;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['created_date'],"%b %d,%Y");?>
</td>
                                        <td  bgcolor="#f9f9f7" style="text-align: right;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/add-project.php?project_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['project_id'];?>
" class="link023">Edit</a></td>
				</tr>
				<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<tr>
					<td colspan="7" bgcolor="#f9f9f7" style="color:#000000;">No Projects Found</td>
				</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if (count($_smarty_tpl->tpl_vars['Projects']->value) > 0) {?>
				<tr>
				  <td colspan="7" bgcolor="#f9f9f7"><table width="100%" cellspacing="0" cellpadding="5">
					<tr>
					<td  align="left" bgcolor="#336699">&nbsp;		</td>
					<td  align="right"  bgcolor="#336699"><div style="float:right; padding-right:5px;"><?php if ($_smarty_tpl->tpl_vars['first']->value != '') {
echo $_smarty_tpl->tpl_vars['first']->value;
}
if ($_smarty_tpl->tpl_vars['prev']->value != '') {
echo $_smarty_tpl->tpl_vars['prev']->value;
}
if ($_smarty_tpl->tpl_vars['nav']->value != '') {
echo $_smarty_tpl->tpl_vars['nav']->value;
}
if ($_smarty_tpl->tpl_vars['next']->value != '') {
echo $_smarty_tpl->tpl_vars['next']->value;
}
if ($_smarty_tpl->tpl_vars['last']->value != '') {
echo $_smarty_tpl->tpl_vars['last']->value;
}?></div></td>
					</tr>
					</table>
					</td>
					</tr>
				<?php }?>
			</table>
			<div class="clear"></div>
			</div>
		{ include file="rightbar.tpl" }
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/ajax.js"><?php echo '</script'; ?>
><?php }
}
