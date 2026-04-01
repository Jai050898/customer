<?php /* Smarty version 2.6.26, created on 2011-01-12 13:55:41
         compiled from add-product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'add-product.tpl', 81, false),array('modifier', 'cat', 'add-product.tpl', 81, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/jquery.wysiwyg.css" />
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
      <li><?php if ($_REQUEST['prod_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Product</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head"><?php if ($_REQUEST['prod_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Product</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  <form name="ProductsForm" class="form" id="ProductsForm" method="post" onsubmit="javascript:$('#hid_key').val('Post');">
			<input type="hidden" name="hid_key" id="hid_key" value="">
			<input type="hidden" name="Image_Logo" id="Image_Logo" value="" />
			<input type="hidden" name="Image_Logo1" id="Image_Logo1" value="" />
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2><?php if ($_REQUEST['prod_id'] != ""): ?>Edit<?php else: ?>Add<?php endif; ?> Product</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="12%">Product Title</td>
								<td width="88%" align="left">
									<input type="text" name="Log[title]" id="title" class="req-string" value="<?php echo $this->_tpl_vars['product']['title']; ?>
"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">URL Link (include http://)</td>
								<td width="88%" align="left">
									<input type="text" name="Log[link_to_url]" id="link_to_url" class="input req-string" value="<?php echo $this->_tpl_vars['product']['link_to_url']; ?>
"/>
								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td>Price</td>
								<td align="left"><input type="text" name="Log[price]" id="Log[price]" class="input req-string" value="<?php echo $this->_tpl_vars['product']['price']; ?>
"/></td>
							  </tr>
							  <tr>
								<td>Price Type</td>
								<td align="left"><select name="Log[price_type]" id="price_type" class="select" style="width:190px;">
								<option value="">----------select----------</option>
								<option value="IND" <?php if ($this->_tpl_vars['product']['price_type'] == 'IND'): ?> selected="selected"<?php endif; ?>>Indian Currency </option>
								<option value="USD" <?php if ($this->_tpl_vars['product']['price_type'] == 'USD'): ?> selected="selected"<?php endif; ?>>US Currency</option></select></td>
							  </tr>
							  <tr>
								<td>Item Condition</td>
								<td align="left"><select name="Log[item_condition]" id="item_condition" class="select req-string" style="width:190px;">
								<option value="">----------select----------</option>
								<option value="N" <?php if ($this->_tpl_vars['product']['item_condition'] == 'N'): ?> selected="selected"<?php endif; ?>>New</option>
								<option value="U" <?php if ($this->_tpl_vars['product']['item_condition'] == 'U'): ?> selected="selected"<?php endif; ?>>Used</option></select></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Brand</td>
								<td align="left"><input type="text" name="Log[brand]" id="brand" class="input " value="<?php echo $this->_tpl_vars['product']['brand']; ?>
"/></td>
							  </tr>
							  <tr >
								<td>Image</td>
								<td align="left"><label class="cabinet"><input type="file" name="Log[image]" id="image" class="file"  style="width:305px;" value="<?php echo $this->_tpl_vars['product']['image']; ?>
"/></label></td>
							   <div style="width:120px;float:left;margin-left:400px;z-index:100;margin-top:150px;position:absolute;vertical-align:bottom;margin-bottom:500px;">
							<?php if ($this->_tpl_vars['product']['image'] != ''): ?>
							<?php echo smarty_function_html_image(array('file' => ((is_array($_tmp="photos/resize/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']['image']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']['image'])),'id' => 'thumb','style' => "padding:2px;border:1px solid #699908 height:70px"), $this);?>
<br />
							<?php else: ?>
							<?php echo smarty_function_html_image(array('file' => "images/noimage.png",'alt' => 'no Image','id' => 'thumb','style' => "padding:2px;border:1px solid #699908"), $this);?>

							<?php endif; ?>
						</div>
						<span id="delspan"></span>
						<div id="MsgDiv" style="position:absolute;z-index:101;margin-left:400px;float:left;margin-top:260px;"></div>
					</div>
							</tr>
							  <tr>
								<td>Type</td>
								<td align="left"><select name="Log[type]" id="type" class="select req-string" style="width:190px;">
								<option value="">----------select----------</option>
								<option value="P" <?php if ($this->_tpl_vars['product']['type'] == 'P'): ?> selected="selected"<?php endif; ?>>Product</option>
								<option value="S" <?php if ($this->_tpl_vars['product']['type'] == 'S'): ?> selected="selected"<?php endif; ?>>Service</option></select></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Quantity</td>
								<td align="left"><input type="text" name="Log[qty]" id="qty" class="input " value="<?php echo $this->_tpl_vars['product']['qty']; ?>
"/></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Availability</td>
								<td align="left"><input type="text" name="Log[availability]" id="availability" class="input" value="<?php echo $this->_tpl_vars['product']['availability']; ?>
"/></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Tax</td>
								<td align="left"><input type="text" name="Log[tax]" id="tax" class="input " value="<?php echo $this->_tpl_vars['product']['tax']; ?>
"/></td>
							  </tr>
							  <tr>
								<td>Display Google</td>
								<td align="left"><select name="Log[display_google]" id="display_google" class="select req-string" style="width:190px;">
								<option value="">----------select----------</option>
								<option value="Y" <?php if ($this->_tpl_vars['product']['display_google'] == 'Y'): ?> selected="selected"<?php endif; ?>>Yes</option>
								<option value="N" <?php if ($this->_tpl_vars['product']['display_google'] == 'N'): ?> selected="selected"<?php endif; ?>>No</option></select></td>
							  </tr>
							  <tr >
								<td>Part Image</td>
								<td align="left"><label class="cabinet"><input type="file" name="Log[part_image]" id="part_image" class="file"  style="width:305px;" value="<?php echo $this->_tpl_vars['product']['part_image']; ?>
"/></label></td>
							   <div style="width:120px;float:left;margin-left:400px;z-index:100;margin-top:350px;position:absolute;vertical-align:bottom;margin-bottom:500px;">
							<?php if ($this->_tpl_vars['product']['part_image'] != ''): ?>
							<?php echo smarty_function_html_image(array('file' => ((is_array($_tmp="photos/resize/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['product']['part_image']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['product']['part_image'])),'id' => 'thumb1','style' => "padding:2px;border:1px solid #699908 height:70px"), $this);?>
<br />
							<?php else: ?>
							<?php echo smarty_function_html_image(array('file' => "images/noimage.png",'alt' => 'no Image','id' => 'thumb1','style' => "padding:2px;border:1px solid #699908"), $this);?>

							<?php endif; ?>
						</div>
						<span id="delspan1"></span>
						<div id="PartMsgDiv" style="position:absolute;z-index:101;margin-left:400px;float:left;margin-top:460px;"></div>
					</div>
							</tr>
							  <tr class="color_trbg">
								<td>Part Number</td>
								<td align="left"><input type="text" name="Log[part_number]" id="part_number" class="input " value="<?php echo $this->_tpl_vars['product']['part_number']; ?>
"/></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Part Packing</td>
								<td align="left"><input type="text" name="Log[part_packing]" id="part_packing" class="input" value="<?php echo $this->_tpl_vars['product']['part_packing']; ?>
"/></td>
							  </tr>
							  
							  <tr class="color_trbg">
								<td>Part Description</td>
								<td align="left"><textarea name="Log[part_description]" cols="64" rows="10"  id="part_description" class="input " style="width:500px; height:200px;"><?php echo $this->_tpl_vars['product']['part_description']; ?>
</textarea></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Description</td>
								<td align="left"><textarea name="Log[description]" cols="64" rows="10"  id="Long_Desc" class="input req-string" style="width:500px; height:200px;"><?php echo $this->_tpl_vars['product']['description']; ?>
</textarea></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Solution</td>
								<td align="left"><textarea name="Log[solution]" cols="64" rows="10"  id="solution" class="input " style="width:500px; height:200px;"><?php echo $this->_tpl_vars['product']['solution']; ?>
</textarea></td>
							  </tr>
							  <tr>
                  <td align="right" valign="middle">&nbsp;</td>
                  <td><div id="errorDiv1" class="error-div">&nbsp;<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</div></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" bgcolor="#854141">&nbsp;</td>
                  <td bgcolor="#854141"><input id="submitBtn1" value="Submit" type="submit" class="sendBtn" /></td>
                </tr>
              </table>
		</form></td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
							  
							  
							<!--  <tr>
								<td><span id="errorDiv1" class="error-div" style="width:100px; text-align:center">&nbsp;<?php echo $this->_tpl_vars['errmsg']; ?>
<?php echo $this->_tpl_vars['ErrorMsg']; ?>
</span>
							  </tr>
						  </table></td>
						</tr>
						<tr>
						  <td ><table width="100%" cellspacing="0" cellpadding="5">
	  <tr>
		<td width="12%" bgcolor="#854141">&nbsp;</td>
		<td width="88%" bgcolor="#854141"><input type="button" id="submitBtn1" value="Submit" class="sendBtn"/>&nbsp;</td>
	  </tr>
	</table>
	</td>
						</tr>
					  </table>
					</form>  -->
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
/jscript/ajax.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/jscript/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/jscript/jquery.wysiwyg.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/jscript/ajaxupload.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/jscript/jquery.ufvalidator-1.0.4.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
$(\'#submitBtn1\').formValidator({
		scope		: \'#ProductsForm\',
		errorDiv	: \'#errorDiv1\'
});	
$(document).ready(function() {	
	$(\'#Long_Desc\').wysiwyg();
	$(\'#part_description\').wysiwyg();
	$(\'#solution\').wysiwyg();
		});
		
$(document).ready(function(){
	ImageUploadingForAll(\'image\',\'MsgDiv\',\'Image_Logo\',\'yes\',\'thumb\');
	ImageUploadingForAll(\'part_image\',\'PartMsgDiv\',\'Image_Logo1\',\'yes\',\'thumb1\');
});
</script>
'; ?>