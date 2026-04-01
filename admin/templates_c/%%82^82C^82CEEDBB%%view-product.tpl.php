<?php /* Smarty version 2.6.26, created on 2011-01-13 11:24:01
         compiled from view-product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_image', 'view-product.tpl', 69, false),array('modifier', 'cat', 'view-product.tpl', 69, false),array('modifier', 'nl2br', 'view-product.tpl', 121, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
      <li>View Product</li>
     
      </ul>
      <div class="clr"></div>
      </div>
      <div id="admin_head">View Product</div>
      </div>
	   <div class="ad_textsp">
			<table width="100%" cellspacing="0" cellpadding="0">
						<tr>
						  <td height="10"></td>
						</tr>
						<tr>
						  <td align="left" valign="top" >
						  
						  <table width="100%" cellspacing="0" cellpadding="0" class="addadmin_box01">
							  <tr>
									<td colspan="2"><h2>View Product</h2></td>
								  </tr>
							  <tr class="color_trbg">
								<td width="12%">Product Title</td>
								<td width="88%" align="left">
									<?php echo $this->_tpl_vars['product']['title']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td width="12%">URL Link (include http://)</td>
								<td width="88%" align="left">
									<?php echo $this->_tpl_vars['product']['link_to_url']; ?>

								 </td>
							  </tr>
							  <tr class="color_trbg">
								<td>Price</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['price']; ?>
</td>
							  </tr>
							  <tr>
								<td>Price Type</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['price_type']; ?>
</td>
							  </tr>
							  <tr>
								<td>Item Condition</td>
								<td align="left"><?php if ($this->_tpl_vars['product']['item_condition'] == 'N'): ?>New <?php else: ?> Used<?php endif; ?></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Brand</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['brand']; ?>
</td>
							  </tr>
							  
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
							
							  <tr>
								<td>Type</td>
								<td align="left"><?php if ($this->_tpl_vars['product']['type'] == 'P'): ?> Product<?php else: ?>Service<?php endif; ?></td>
							  </tr>
							  <tr class="color_trbg">
								<td>Quantity</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['qty']; ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td>Availability</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['availability']; ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td>Tax</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['tax']; ?>
</td>
							  </tr>
							  <tr>
								<td>Display Google</td>
								<td align="left"><?php if ($this->_tpl_vars['product']['display_google'] == 'Y'): ?> Yes<?php else: ?>No<?php endif; ?></td>
							  </tr>
							  
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
							
							  <tr class="color_trbg">
								<td>Part Number</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['part_number']; ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td>Part Packing</td>
								<td align="left"><?php echo $this->_tpl_vars['product']['part_packing']; ?>
</td>
							  </tr>
							  
							  <tr class="color_trbg">
								<td>Part Description</td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['part_description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td>Description</td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
							  </tr>
							  <tr class="color_trbg">
								<td>Solution</td>
								<td align="left"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['solution'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
							  </tr>
              </table>
		</td>
		</tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="left" valign="top">&nbsp;</td>
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