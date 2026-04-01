<?php /* Smarty version 2.6.26, created on 2012-12-28 05:41:45
         compiled from slow-periods.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'slow-periods.tpl', 55, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/date.css" />
<?php echo '
<style type="text/css">
.error-div{color:#FF0000;}
</style>
'; ?>

<div id="bodypart">
      <div id="mainbody">
       
        <div id="contentpane">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "right-bar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id="innerleft">
      
      <div class="admin-rightpart">
      <div class="admin_topbgnav">
      <div id="admin_bcrumb">
      <ul>
      <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/dashboard.php">Home</a></li>
      <li>Slow Periods</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">Slow Periods</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="TaskForm" class="form" id="TaskForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
							<input type="hidden" name="hid_key" id="hid_key" value="">
							<input type="hidden" name="mylength" id="mylength" value="1">
						  <table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;"></td>
					<td></td>
				</tr>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Name:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><?php echo $this->_tpl_vars['Cal']['name']; ?>
</td>
				</tr>
				<tr>
				  <td colspan="2"><hr /></td>
				</tr>
				<?php $_from = $this->_tpl_vars['Items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['item']['iteration']++;
?>
				<tr  id="itemtr<?php echo $this->_tpl_vars['item']['id']; ?>
">
				  <td colspan="2">
				  <table  id="item<?php echo $this->_tpl_vars['item']['id']; ?>
">
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Start date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log1[sdate][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="editsdate<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" class="select req-string" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['sdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
'/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">End date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log1[edate][<?php echo $this->_tpl_vars['item']['id']; ?>
]" id="editedate<?php echo ($this->_foreach['item']['iteration']-1)+1; ?>
" class="select req-string" value='<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['edate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m-%d-%Y") : smarty_modifier_date_format($_tmp, "%m-%d-%Y")); ?>
'/></td>
				</tr>
				<tr  align="right" >
					<td colspan="3"><a href="javascript:void(0);" onclick="javascript: DeleteItem(<?php echo $this->_tpl_vars['item']['id']; ?>
)"><img src="<?php echo $this->_tpl_vars['siteurl']; ?>
/images/del.png" border="0" />&nbsp;Delete Item</a></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				<?php endforeach; endif; unset($_from); ?>
				<tr>
				  <td colspan="2"><a href="javascript:void(0);" onClick="ShowMore();">Add More Items</a></td>
				</tr>
				<tr class="Clone" style="display:none" id="newoption">
				  <td colspan="2">
				  <table>
				<tr>
				  <td align="right" valign="center" style="padding-left:5px;">Start date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[sdate][]" id="sdate" class="selectclass" value="<?php echo $this->_tpl_vars['Tasks']['sdate']; ?>
"/></td>
				</tr>
					<tr>
				  <td align="right" valign="center" style="padding-left:5px;">End date:<span class="redstar"> * </span></td>
				  <td align="left" valign="center"><input type="text" name="Log[edate][]" id="edate" class="selectclass" value="<?php echo $this->_tpl_vars['Tasks']['edate']; ?>
"/></td>
				</tr>
				  </table>
				  </td>
				 </tr>
				<tr class="Clone" align="right" style="display:none" id="newoptionadd">
					<td colspan="3"><a href="javascript:void(0);" class="copy" rel=".Clone">Add New</a></td>
				</tr>
				
				<tr>
				  <td colspan="2" id="errorDiv1" style="color:#935;font-size:12px;; padding-left:215px;">&nbsp;</td>
				</tr>
				<tr>
					<td align="center" valign="top" style="padding-left:5px;" colspan="2"><input name="input" id="submitBtn1" type="Submit" value="Submit" /></td>
				</tr>
			</table>
		</form></td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  
</table>
          <!--end of middle part -->
          <!--end of right part -->
          <div class="clr"></div>
        </div>
        <!--end of contentpane -->
      </div>
    </div>
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
	//$("#itemtr"+id).hide(\'50\');
	$.post(site_path+"/ajax.php",{For:\'DelCalItem\',id:id},function(data){});
}
</script>
'; ?>