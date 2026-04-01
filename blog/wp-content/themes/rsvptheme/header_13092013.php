<?php 
	$Page = 'resources';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php bloginfo('name');?> <?php if(is_single()) { ?>&raquo; Blog Archive <?php } ?> <?php wp_title();?></title>
<link href="<?php echo SITEURL;?>/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="style.css" rel="stylesheet" type="text/css" media="screen" />-->
</head>
<body>
<div id="container">
<div id="body">
    <!--START of header part -->
	<div id="nav">
	  <ul>
		<?php if($_SESSION['User']['UID'] == '') { ?>
		<li><a href="<?php echo SITEURL; ?>" ><span>Home</span></a></li>
		<li><a href="<?php echo SITEURL; ?>/register.php" ><span>Register</span></a></li>
		<li><a href="<?php echo SITEURL; ?>/login.php" ><span>Login</span></a></li>
		<?php } else { ?>
		<li><a href="<?php echo SITEURL; ?>/dashboard.php"  <?php if($Page == 'Home') {?>  class="active"<?php } ?>><span>Home</span></a>	</li>
		<li><a href="#"  <?php if($Page == 'projects') {?>  class="active"<?php } ?>><span>Projects</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/myalbums.php"><span>My Gallery</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-projects.php"><span>Manage Projects</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/project-tracker.php"><span>Project Tasks</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-uploaded-files.php"><span>My Files</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/admin-uploaded-files.php"><span>Admin Files</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/upload-admin-files.php"><span>Upload Large Files</span></a></li>
			</ul>
		</li>
		<li><a href="#"  <?php if($Page == 'daily') { ?>  class="active"<?php } ?>><span>Daily Data</span></a>
			<ul>
			<li><a href="<?php echo SITEURL; ?>/manage-daily-data.php"><span>Manage Data</span></a></li>
			<li><a href="<?php echo SITEURL; ?>/add-daily-data.php"><span>Add Data</span></a></li>
		</ul>
		</li>
		<li><a href="#" <?php if($Page == 'marketing') { ?>  class="active"<?php } ?>><span>Marketing</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/marketing-budget.php"><span>Marketing Budget</span></a></li>
				<li><a href="javascript: ShowMB();"><span>Marketing Budget Map</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/monitoring.php"><span>Monitoring Goals</span></a></li>
				<li><a href="javascript: ShowMG();"><span>Monitoring Goals Map</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/calendars.php"><span>Calendars</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/calendars-cat.php"><span>Categories</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/marketing-survey.php"><span>Marketing Survey</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/website-survey.php"><span>Web Site Survey</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/integrated-survey.php"><span>Integrated Survey</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/questionnaire.php?cat=4"><span>Survey</span></a></li>
			</ul>
		</li>
		<li><a href="#" <?php if($Page == 'website') { ?>  class="active"<?php } ?>><span>Website</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/online-tests.php"><span>Online Tests</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/gogoleserp.php"><span>Google</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/bingserp.php"><span>Bing</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/yahooserp.php"><span>Yahoo</span></a></li>
			</ul>
		</li>
		<li><a href="#" <?php if($Page == 'customers') { ?>  class="active"<?php } ?>><span>Customers</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/customer-dc.php"><span>Customer Dashboard</span></a></li>
                                <li><a href="<?php echo SITEURL; ?>/customer-dm.php"><span>Customer Data Map</span></a></li>
                                <li><a href="<?php echo SITEURL; ?>/manage-customers.php"><span>Manage Customers</span></a></li>
                                <li><a href="<?php echo SITEURL; ?>/manage-vehicles.php"><span>Vehicle List</span></a></li>
                                <li><a href="<?php echo SITEURL; ?>/manage-ros.php"><span>Repair Orders</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-zipcode-customers.php"><span>Zip Code List</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-city-customers.php"><span>City List</span></a></li>
                                <li><a href="<?php echo SITEURL; ?>/manage-schedules.php"><span>Manage Schedules</span></a></li>
				<!-- <li><a href="<?php echo SITEURL; ?>/manage-mis-customers.php"><span>Manage Customers</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-mis-customers-report.php"><span>Customer Report</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-mis-zipcode-customers.php"><span>Zip Code List</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-mis-city-customers.php"><span>City List</span></a></li> -->
			</ul>
		</li>
		<li><a href="<?php echo SITEURL; ?>/myaccount.php"  <?php if($Page == 'account') { ?>  class="active"<?php } ?>><span>My Account</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/edit-profile.php"><span>Edit Profile</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/change-password.php"><span>Change Password</span></a></li>
			</ul>
		</li>
		<li><a href="#"  <?php if($Page == 'resources') { ?>  class="active"<?php } ?>><span>Resources</span></a>
			<ul>
				<li><a href="<?php echo SITEURL; ?>/albums.php"><span>Image Gallery</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/blog/"><span>Blog</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/wiki/"><span>Wiki</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/portfolio.php"><span>Portfolio</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/links.php"><span>Links</span></a></li>
				<li><a href="<?php echo SITEURL; ?>/manage-tickets.php"><span>Support Tickets</span></a></li>
			</ul>
		</li>
		<li><a href="<?php echo SITEURL; ?>/logout.php"><span>Logout</span></a></li>
		<?php } ?>
		<!-- <li><a href="<?php //echo SITEURL; ?>/portfolio.php"><span>Portfolio</span></a></li> -->
	  </ul>
	  <div class="clear"></div>
	</div>
    <!--END of header part -->