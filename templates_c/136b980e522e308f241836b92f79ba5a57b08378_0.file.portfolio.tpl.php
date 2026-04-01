<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:15:26
  from '/var/www/html/templates/portfolio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbc8ee041437_68753437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '136b980e522e308f241836b92f79ba5a57b08378' => 
    array (
      0 => '/var/www/html/templates/portfolio.tpl',
      1 => 1774962923,
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
function content_69cbc8ee041437_68753437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/plugins/modifier.nl2br.php','function'=>'smarty_modifier_nl2br',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<meta http-equiv="imagetoolbar" content="no">
<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Portfolio</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5"  class="left_content" style="color:#2f3337;">
                     <tr>
                         <td>
                             <form id="category_type" class="form" method="POST" name="category_type"> 
                                 <select name="category" id="category" onchange="this.form.submit()">
                                     <option value="">Select category</option>
                                     <option value="1">Select All categories</option>
                                 <?php
$__section_totallist_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['total_temp']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_totallist_0_total = $__section_totallist_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_totallist'] = new Smarty_Variable(array());
if ($__section_totallist_0_total !== 0) {
for ($__section_totallist_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index'] = 0; $__section_totallist_0_iteration <= $__section_totallist_0_total; $__section_totallist_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index']++){
?>
                                     <?php if ($_smarty_tpl->tpl_vars['total_temp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index'] : null)]['cat_id'] != '') {?>
                                     <option value="<?php echo $_smarty_tpl->tpl_vars['total_temp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index'] : null)]['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['total_temp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_totallist']->value['index'] : null)]['cat_name'];?>
</option><?php }?>
                                 <?php
}
}
?>
                                 </select>
                             </form>
                         </td>
                        <td >
                              <div class="pagecount_info_divbox">
                                  Showing Records <?php echo $_smarty_tpl->tpl_vars['records_from']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['records_to']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['total']->value;?>

                                  <div class="clr"></div>
                              </div>
                        </td>
                    </tr>
			<?php
$__section_list_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['PDetails']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_list_1_total = $__section_list_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_list'] = new Smarty_Variable(array());
if ($__section_list_1_total !== 0) {
for ($__section_list_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] = 0; $__section_list_1_iteration <= $__section_list_1_total; $__section_list_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_list']->value['last'] = ($__section_list_1_iteration === $__section_list_1_total);
?>
				<tr>
					<td style="height:10px;"></td>
				</tr>
                                
				<tr>
					<td width="20%"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/photos/thumbnails/<?php echo $_smarty_tpl->tpl_vars['PDetails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] : null)]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PDetails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] : null)]['project_name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['PDetails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] : null)]['project_name'];?>
"></td>
					<td width="80%" style="font-size:18px; font-weight:normal; padding:0px; margin:0px; font-family: Arial; color:#322115;"><?php echo $_smarty_tpl->tpl_vars['PDetails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] : null)]['project_name'];?>
</td>
				</tr>
				<tr>
					<td colspan="2" bgcolor="#1AA6BD"><span style="color:#fff; font-size:12px;"><strong>Description</strong></span></td>
				</tr>
				<tr>
					<td <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['last'] : null)) {?> style="border-bottom:1px dashed #7F7F7F" <?php }?> colspan="2"><?php echo smarty_modifier_nl2br($_smarty_tpl->tpl_vars['PDetails']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_list']->value['index'] : null)]['text']);?>
</td>
				</tr>
			<?php }} else {
 ?>
				<tr>
					<td style="color:#FF0000; font-size:14px" colspan="2" align="center">No Portfolio's found</td>
				</tr>
			<?php
}
?>
                        <?php if (count($_smarty_tpl->tpl_vars['PDetails']->value) > 0) {?>
                        <tr>
                            <td colspan="6" bgcolor="#f9f9f7">
                                <table width="100%" cellspacing="0" cellpadding="5">
                                    <tr>
                                    <td  align="left" bgcolor="#336699">&nbsp;</td>
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
		<?php $_smarty_tpl->_subTemplateRender("file:rightbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
<?php }
}
