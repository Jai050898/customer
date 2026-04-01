<?php
/* Smarty version 3.1.48, created on 2026-03-31 11:32:29
  from '/var/www/html/templates/rightbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69cbb0cdafb8c7_65783364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9561336390fd17b143fa2c22a89c70c785fc00e' => 
    array (
      0 => '/var/www/html/templates/rightbar.tpl',
      1 => 1774343746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cbb0cdafb8c7_65783364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bodyright">
	<div class="rightbox">
	<div class="title">Quick Links</div>
		<div class="rightboxbg">
			<ul>
				<!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/myaccount.php">Home</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/dashboard.php">Dashboard</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/edit-profile.php">Edit Profile</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/change-password.php">Change Password</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/myalbums.php">My Gallery</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/albums.php">Image Gallery</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-projects.php">Manage Projects</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/project-tracker.php">Project Tasks</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/blog/">Blog</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/wiki/">Wiki</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/portfolio.php">Portfolio</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-uploaded-files.php">Manage Uploaded Files</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/admin-uploaded-files.php">Admin Uploaded Files</a> </li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-tickets.php">Manage Tickets</a> </li>
				<?php if ($_SESSION['User']['access_to_mark_survey'] == "Y") {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/marketing-survey.php">Marketing Survey</a> </li>
				<?php }?>
				<?php if ($_SESSION['User']['access_to_site_survey'] == "Y") {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/website-survey.php">Web Site Survey</a> </li>
				<?php }?>
				<?php if ($_SESSION['User']['access_to_integrated_survey'] == "Y") {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/integrated-survey.php">Integrated Survey</a> </li>
				<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/links.php">Links</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/questionnaire.php?cat=4">Survey</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/marketing-budget.php">Marketing Budget</a></li>
				<li><a href="javascript: ShowMB();">Marketing Budget Map</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/calendars.php">Calendars</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/calendars-cat.php">Categories</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/ro-goal.php">RO Goal</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/monitoring.php">Monitoring Goals</a></li>
				<li><a href="javascript: ShowMG();">Monitoring Goals Map</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/gogoleserp.php">Google SERPs</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/bingserp.php">Bing SERPs</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/yahooserp.php">Yahoo SERPs</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/online-tests.php">Online Tests</a></li> 
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-mis-customers.php">Manage MIS Customers</a></li>
			  	<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-mis-zipcode-customers.php">MIS Zipcode Customers</a></li>
			  	<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-mis-city-customers.php">MIS City Customers</a></li>
			  	<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/manage-mis-customers-report.php">MIS Customers Report</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/customer-dc.php">MIS Customer DC</a></li>-->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/logout.php">Logout</a></li>
			</ul>
		
		</div>
		<!--<div><img src="images/rightbox-bottom.gif" alt="" /></div>-->
        
	</div>
</div>
<?php }
}
