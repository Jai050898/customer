<?php
/* Smarty version 3.1.48, created on 2026-03-31 13:20:45
  from '/var/www/html/templates/add-cal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbca2d464e71_23878475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ecd8b16a27e99e014ea7fa9c807b4d06cf02726' => 
    array (
      0 => '/var/www/html/templates/add-cal.tpl',
      1 => 1774963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_69cbca2d464e71_23878475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1><?php if ($_REQUEST['task_id'] != '') {?>Edit<?php } else { ?>Add<?php }?> Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[name]" id="name" class="select req-string" value="<?php echo $_smarty_tpl->tpl_vars['Tasks']->value['name'];?>
"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<tr >
				  <td colspan="2">
				  <table>
					<tr>
				  <td align="center" valign="center" style="padding-left:5px;">Item Name:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Category:</td>
				   <td align="center" valign="center" style="padding-left:5px;">Start date:</td>
				   <td align="center" valign="center" style="padding-left:5px;">End date:</td>
				  
				</tr>
				<tr class="Clone" >
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="select req-string" value="<?php echo $_smarty_tpl->tpl_vars['Tasks']->value['title'];?>
"/></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="select req-string">
										<option value="">-- Select --</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cat']->value, 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id'] == $_smarty_tpl->tpl_vars['Cat']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select></td>
					<td align="left" valign="center"><input type="text" name="Log[sdate][]" id="sdate" class="select req-string reqDate" value="<?php echo $_smarty_tpl->tpl_vars['Tasks']->value['sdate'];?>
"/></td>
					<td align="left" valign="center"><input type="text" name="Log[edate][]" id="edate" class="select req-string reqDate" value="<?php echo $_smarty_tpl->tpl_vars['Tasks']->value['edate'];?>
" onchange="javascript: return checkdate(this.id);"/></td>
				</tr>
				<tr class="Clone" align="right">
					<td colspan="4"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		<div class="clear"></div>
		</form>
		</div>
				<div class="clear"></div>
	</div>
</div>
<!--end body-->	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery.ufvalidator-1.0.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/jquery-date.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/relCopy.jquery.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript" type="text/javascript">
$('#submitBtn1').formValidator({
		scope		: '#TaskForm',
		errorDiv	: '#errorDiv1'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();	
});
function checkdate(id)
{
	d1=$("#"+id).val();
	d2s=id.replace("edate","sdate");
	d2 = $("#"+d2s).val();
	if(d2 == "")
	{
		alert("Please Fill Start Date first!");
		$("#"+id).val("");
		return false;
	}
	date1=new Date(d1.split("-")[2], d1.split("-")[0], d1.split("-")[1]);
	date2=new Date(d2.split("-")[2], d2.split("-")[0], d2.split("-")[1]);
	
	if(date1<date2)
	{	
		alert("End Date cannot be before Start Date!");
		$("#"+id).val("");
		return false;
	}
	return true;
}
$(function(){
		var removeLink = ' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>';
		$('a.copy').relCopy({limit: 500, append: removeLink});
});
<?php echo '</script'; ?>
>
<?php }
}
