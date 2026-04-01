<?php /* Smarty version 2.6.26, created on 2014-02-15 02:00:53
         compiled from add-photos-new.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'add-photos-new.tpl', 34, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.alerts.css" rel="stylesheet" type="text/css" />
<?php echo '
	<style type="text/css">
	#log{ margin:0; padding:0; width:500px;}
	#log li{ list-style-position:inside; margin:2px; border:1px solid #ccc; padding:10px; font-size:12px; 
		font-family:Arial, Helvetica, sans-serif; color:#333; background:#fff; position:relative;}
	#log li .progressbar{ border:1px solid #333; height:5px; background:#fff; }
	#log li .progress{ background:#999; width:0%; height:5px; }
	#log li p{ margin:0; line-height:18px; }
	#log li.success{ border:1px solid #339933; background:#ccf9b9; }
	#log li span.cancel{ position:absolute; top:5px; right:5px; width:20px; height:20px; 
		background:url(\'images/cancel.png\') no-repeat; cursor:pointer; }
	</style>
'; ?>

<!--body-->
<div id="body">
	<div class="bodybg" style="min-height:475px;">
		<div class="bodyleft">
			<div style="height:10px;"></div>
			<h1>Albums</h1>
			<form name="UploadImages" id="UploadImages" method="post" onsubmit="javascript:return fnSaveImages();">
			<input type="hidden" name="Image_Logo" id="Image_Logo" value="" />
			<input type="hidden" name="Up_Key" id="Up_Key" value="" />
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="left_content" style="color:#2f3337;">
				<tr>
					<td style="padding-top:10px;padding-left:25px;" colspan="2"><h3><U>Add Photos</U></h3></td>
				</tr>
				<tr>
                  <td  valign="top" width="25%">
						<input type="file" id="photo_name" name="photo_name"  style="width:305px;" />
				</td>
				<td valign="top">
						<?php echo smarty_function_html_image(array('file' => "images/noimage.png",'id' => 'thumb','style' => "border:1px dotted #CCC;"), $this);?>

						<div id="MsgDiv" style=" width:100px; position:absolute;z-index:101;margin-left:5px;float:left;"></div>
						<div class="clr" style="height:10px;"></div>
				  </td>
                </tr>
				<tr>
					<td colspan="2"><input type="submit" value="Submit" id="Submit" class="sendBtn"/></td>				
				</tr>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/ajaxupload.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/swfupload.js"></script>
<?php echo '
<script type="text/javascript" language="javascript">
	function fnSaveImages()
	{
		var FrmName = document.UploadImages;
		if(FrmName.Image_Logo.value == \'\')
		{
			jAlert(\'Please Upload Images\', \'Alert Dialog\');
			return false;
		}
		FrmName.Up_Key.value = \'Upload\';
		return true;
	}
	//Image Uploads
	$(document).ready(function() {	
		ImageUploadingForAll(\'photo_name\',\'MsgDiv\',\'Image_Logo\',\'no\');								
	});	
</script>
'; ?>