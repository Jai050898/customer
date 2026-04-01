<?php /* Smarty version 2.6.26, created on 2011-02-17 06:37:38
         compiled from other.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'other.tpl', 51, false),array('function', 'html_checkboxes', 'other.tpl', 59, false),array('function', 'html_radios', 'other.tpl', 99, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
/admin/dashboard.php">Home</a></li>
							<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/website-survey.php?user_id=<?php echo $_REQUEST['id']; ?>
">Website survey</a></li>
							<li>Design Items / Other Information</li>
						  </ul>
						<div class="clr"></div>
					  </div>
				 	<div id="admin_head">Design Items / Other Information</div>
				  </div>
					<div class="ad_textsp">
						<form name="frmOthers" id="frmOthers" method="post" class="fValidator-form" onsubmit="return validateForm();" action="other.php?id=<?php echo $_REQUEST['id']; ?>
">
							<table width="100%" border="0" class="left_content" style="color:#2f3337;">
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
					<td align="left" style="padding-bottom:10px" valign="middle">What garage management system do you use ? (offers email newsletters, electronic records history)
<br />

					<textarea name="GarageManagement" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['GarageManagement']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you have any special tips or elements to be added to the site ? <span class="infoText">(If so, please give us detail)</span><br />

					<textarea name="SpecialTips" rows="3" cols="50" class="form"><?php echo $this->_tpl_vars['otherInfo']['SpecialTips']; ?>
</textarea>
</td>
					<td colspan="2">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="left" style="padding-bottom:10px" valign="middle">Do you collect email addresses from your customers ? <br />

					<?php echo smarty_function_html_options(array('name' => 'CollectEmailAddress','options' => $this->_tpl_vars['arrayYesNo1'],'selected' => $this->_tpl_vars['otherInfo']['CollectEmailAddress']), $this);?>

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
					<td align="left" style="padding-bottom:10px" valign="middle">Are there specific colors you would like us to focus on?
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
						</form>
					  <!--end of middle part -->
					  <!--end of right part -->
					  <div class="clr"></div>
					</div>
				<!--end of contentpane -->
			  </div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/common.js"></script>