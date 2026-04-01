<?php /* Smarty version 2.6.26, created on 2013-06-18 01:24:25
         compiled from edit-cal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'edit-cal.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			<form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="mylength" id="mylength" value="1">
			<div style="height:10px;"></div>
			<h1><?php if ($_REQUEST['task_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Calendar</h1>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="LogMain[name]" id="name" class="select req-string" value="<?php echo $this->_tpl_vars['Cal']['name']; ?>
"/></td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<tr>
				  <td colspan="2">
				  <table >
				  <tr>
				  <td align="center" valign="center" style="padding-left:5px;">Item Name:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Category:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Start date:</td>
				  <td align="center" valign="center" style="padding-left:5px;">End date:</td>
				</tr>
				<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				
				<tr id="item<?php echo $this->_tpl_vars['item']['id']; ?>
">
				  <td align="left" valign="center"><input type="text" name="Log1[title][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="title" class="select req-string" value="<?php echo $this->_tpl_vars['item']['title']; ?>
"/></td>
				  <td align="left" valign="center"><select name="Log1[cat_id][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="cat_id" class="select req-string">
						<option value="">-- Select --</option>
						<?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item1']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item1']):
        $this->_foreach['item1']['iteration']++;
?>
						<option value="<?php echo $this->_tpl_vars['item1']['id']; ?>
" <?php if ($this->_tpl_vars['item1']['id'] == $this->_tpl_vars['item']['cat_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item1']['cat_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select></td>
				  <td align="left" valign="center"><input type="text" name="Log1[sdate][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="editsdate<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" class="select req-string" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
'/></td>
				  <td align="left" valign="center"><input type="text" name="Log1[edate][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="editedate<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" class="select req-string" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
'/></td>
				</tr>
				<tr  align="right" id="itemicon<?php echo $this->_tpl_vars['item']['id']; ?>
">
					<td colspan="4"><a href="javascript:void(0);" onclick="javascript: DeleteItem(<?php echo $this->_tpl_vars['item']['id']; ?>
)"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" />&nbsp;Delete Item</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
				</table>
				  </td>
				 </tr>
				 <tr >
				  <td colspan="4"><a href="javascript:void(0);" onClick="ShowMore();">Add More Items</a></td>
				</tr>
				<tr style="display:none" id="newoption">
				  <td colspan="2">
				  <table>
				<!-- <tr>
				  <td align="center" valign="center" style="padding-left:5px;">Item Name:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Category:</td>
				  <td align="center" valign="center" style="padding-left:5px;">Start date:</td>
				  <td align="center" valign="center" style="padding-left:5px;">End date:</td>
				</tr> -->
				<tr  class="Clone" >
				  
				  <td align="left" valign="center"><input type="text" name="Log[title][]" id="title" class="selectclass" value="<?php echo $this->_tpl_vars['Tasks']['title']; ?>
"/></td>
				  <td align="left" valign="center"><select name="Log[cat_id][]" id="cat_id" class="selectclass">
										<option value="">-- Select --</option>
										<?php $_from = $this->_tpl_vars['Cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
										<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
" <?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['Cat']['id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item']['cat_name']; ?>
</option>
										<?php endforeach; endif; unset($_from); ?>
									</select></td>
					<td align="left" valign="center"><input type="text" name="Log[sdate][]" id="sdate" class="selectclass" value="<?php echo $this->_tpl_vars['Tasks']['sdate']; ?>
"/></td>
					<td align="left" valign="center"><input type="text" name="Log[edate][]" id="edate" class="selectclass" value="<?php echo $this->_tpl_vars['Tasks']['edate']; ?>
"/></td>
				</tr>
				<tr class="Clone" align="right" style="display:none" id="newoptionadd">
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.ufvalidator-1.0.4.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery-date.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/relCopy.jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#TaskForm\',
		errorDiv	: \'#errorDiv1\'
});
$(document).ready(function() {	
	$("#sdate").datepicker();
	$("#edate").datepicker();	
	'; ?>

	<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
	<?php echo '
	$("#editsdate"+'; ?>
<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
<?php echo ').datepicker();
	$("#editedate"+'; ?>
<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
<?php echo ').datepicker();	
	'; ?>

	<?php endforeach; endif; unset($_from); ?>
	<?php echo '
});
/*for(i=0;i<50;i++)
{
	$("#sdate"+i).datepicker();
	$("#edate"+i).datepicker();	
}	*/
$(function(){
		var removeLink = \' <a class="remove" style="float:right;padding-right:5px;" href="#" onclick="$(this).parent().remove(); return false">Remove</a>\';
		$(\'a.copy\').relCopy({limit: 500, append: removeLink});
});
function ShowMore()
{
	$(".selectclass").each(function(){$(this).attr(\'class\',\'\');$(this).attr(\'class\',\'select req-string\');});
	/*$(".selectclass").attr(\'class\',\'\');
	$(".selectclass").attr(\'class\',\'select req-string\');*/
	$("#newoption").show();
	$("#newoptionadd").show();
}
function DeleteItem(id)
{
	$("#item"+id).hide(\'slow\');
	$("#itemicon"+id).hide();
	//$("#itemtr"+id).hide(\'50\');
	$.post(site_path+"/ajax.php",{For:\'DelCalItem\',id:id},function(data){});
}
</script>
'; ?>