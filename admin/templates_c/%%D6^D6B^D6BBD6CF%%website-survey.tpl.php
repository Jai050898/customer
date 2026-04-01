<?php /* Smarty version 2.6.26, created on 2013-04-22 03:15:57
         compiled from website-survey.tpl */ ?>
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
/dashboard.php">Home</a></li>
							  <li>Website Survey</li>
						  </ul>
						<div class="clr"></div>
					  </div>
					  <div id="admin_head"> Website Survey</div>
				  </div>
				  
				<div class="ad_textsp">
					 <p align="justify" style="padding-right:15px"><br />

		First, thank you very much for your business.<br />

		<br />

		The intent of this survey is to gather information regarding your business so that we may develop and design a website that represents your business reputation. There are also some questions to get a feel for what type/style of website design will work best. Please fill it out as detailed as you can.  If there is any question you can't answer, please let us know at <a href='mailto:info@motorheadmarketing.com'>info@motorheadmarketing.com</a><br /><br />

		This survey is engineered so you can add data to key areas:<br /><br />
		
		<ul style="list-style-type:upper-roman; padding-left:50px; padding-bottom:10px;">

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/companyDetail.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">About The Company</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/history.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Your Business History</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/stuff.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">About The Stuff</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/branding.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Branding</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/policy.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Policies</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/notoriety.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Notoriety</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/services.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Services</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/competitiveAdvantages.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Competitive Advantages</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/marketing.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Marketing / Advertising</a></li>

			<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/other.php?id=<?php echo $_REQUEST['user_id']; ?>
" style="text-decoration:none">Design Items / Other Information</a></li>

		</ul>		

		<br />

		The survey allows you to leave and return to complete each area.  Please make sure to click submit at the bottom to save any data you have filled within a page. Please note, if you have any difficulties, there is a Questions/Problem link in the main menu that will send us an immediate notification so we can assist.

		<br /><br />

		<strong>Finished reading instructions ?</strong> <a href='<?php echo $this->_tpl_vars['siteurl']; ?>
/admin/companyDetail.php?id=<?php echo $_REQUEST['user_id']; ?>
' class="new_link">Click here</a> and Start filling out the form now.

		<br /><br />

		</p>
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