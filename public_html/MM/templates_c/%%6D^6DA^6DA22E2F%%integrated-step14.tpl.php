<?php /* Smarty version 2.6.26, created on 2013-09-17 02:35:54
         compiled from integrated-step14.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'integrated-step14.tpl', 71, false),array('function', 'html_checkboxes', 'integrated-step14.tpl', 87, false),array('function', 'html_radios', 'integrated-step14.tpl', 167, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!--body-->
<div id="body">
	<div class="bodybg">
		<div class="bodyleft">
			
			<div style="height:10px;"></div>
			<h1>Integrated Survey </h1>
			<form name="frmOthers" id="frmOthers" method="post" class="fValidator-form" onsubmit="return validateForm();" action="integrated-step14.php">
			<div class="left_content" style="color:#2f3337;">
				<h2><u>Design Items / Other Information</u></h2>
				<table width="100%" border="0" cellspacing="1" cellpadding="5" >
				  <tr>

					<td align="center" colspan="3">&nbsp;</td>

				  </tr>

				  <?php if ($this->_tpl_vars['Errormssage']): ?>

				  <tr>

					<td align="center" colspan="3"><span class="error"><?php echo $this->_tpl_vars['Errormssage']; ?>
</span>																	</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">&nbsp;																	</td>

				  </tr>

				  <?php endif; ?>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Are there any special tips or educational information you offer, or can offer your customers ? <span class="infoText">(These would be items that could be added to your website, or other marketing materials. If you have any, please give us details.)</span><br />



					<textarea name="SpecialTips" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['SpecialTips']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you have any website statistics or reports such as google analytics ?

<br />



					<input type="text" name="ReportForGoogle" maxlength="150" size="50" value="<?php echo $this->_tpl_vars['otherInfo']['ReportForGoogle']; ?>
" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you collect email addresses from your customers ? <br />



					<?php echo smarty_function_html_options(array('name' => 'CollectEmailAddress','options' => $this->_tpl_vars['arrayYesNo'],'selected' => $this->_tpl_vars['otherInfo']['CollectEmailAddress']), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" valign="top" style="padding-bottom:10px">

					Please checkmark the styles that best represent your company. <br />

					<p style="padding-left:25px">

					<?php echo smarty_function_html_checkboxes(array('name' => 'CompanyStyles','options' => $this->_tpl_vars['companyStyles'],'selected' => $this->_tpl_vars['stylesSelected'],'separator' => "<br />"), $this);?>
</p>

					

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Are there any specific colors, or color matching that your marketing is desired to match / blend with ?

<br />



					<input type="text" name="SpecificColor" maxlength="240" size="50" value="<?php echo $this->_tpl_vars['otherInfo']['SpecificColor']; ?>
" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you prefer illustrations or photos?

<br />



					<input type="text" name="PreferIllustration" maxlength="240" size="50" value="<?php echo $this->_tpl_vars['otherInfo']['PreferIllustration']; ?>
" class="form"/>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">If possible, please list a couple of websites that you like and what features about them you like.

<br />



					<textarea name="WebSiteYouLike" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['WebSiteYouLike']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">List what words that would describe how you would explain the layout/design of your site.<br />

<span class="infoText">(Example: retro, hot rod, vintage, Modern, high end, Fleet, RV, etc.)</span> 

<br />



					<textarea name="WordsDescribe" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['WordsDescribe']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">Do you prefer <br />



				   <?php echo smarty_function_html_radios(array('name' => 'FontChoice','options' => $this->_tpl_vars['fontList'],'selected' => $this->_tpl_vars['otherInfo']['FontChoice'],'separator' => "<br />"), $this);?>


</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  

				   <tr>

					<td align="left" style="padding-bottom:10px" valign="middle">After all the questions we've gone through. Is there anything else you can think of that we need to know to help with the site developement or special additions you would like to see?

<br />



					<textarea name="AnythingElse" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['AnythingElse']; ?>
</textarea>

</td>

					<td colspan="2">&nbsp;</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">

					<input type="hidden" name="isNew" value="<?php echo $this->_tpl_vars['isNew']; ?>
" >		

					<input type="submit" name="btnSubmit" value="  Submit  " >								</td>

				  </tr>

				  <tr>

					<td align="center" colspan="3">&nbsp;																	</td>

				  </tr>

			  </table>
			</div>
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
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/common.js"></script>