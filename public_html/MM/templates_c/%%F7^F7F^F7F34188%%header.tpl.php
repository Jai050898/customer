<?php /* Smarty version 2.6.26, created on 2014-02-14 09:04:11
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'header.tpl', 27, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['siteurl']; ?>
/css/thickbox.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['siteurl']; ?>
/js/jquery.js"></script>
<?php echo '
<script language="javascript" type="text/javascript">
	var site_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '";
	var img_path = "'; ?>
<?php echo $this->_tpl_vars['siteurl']; ?>
<?php echo '/images";
</script>
'; ?>

</head>
<?php if ($this->_tpl_vars['Page1'] != ""): ?>
<body onload="load();" onunload="GUnload();">
<?php else: ?>
<body>
<?php endif; ?>
<div id="container">
    <div id="logo">
        <div style="float:left;">
            <a href="http://www.autorepairmarketing.com/customer"><img border="0" src="http://www.autorepairmarketing.com/customer/images/logo-inner.png"></a>
        </div>
        <div style="float:right;padding: 10px 60px 10px 20px;">
            <p style="text-align:right;"><strong style="font-size:15px;"><?php echo ((is_array($_tmp=$_SESSION['User']['company_name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</strong></p>
            <p style="text-align:right;"><strong><?php if ($this->_tpl_vars['breadcrumb'] != ''): ?><?php echo $this->_tpl_vars['breadcrumb']; ?>
<?php endif; ?></strong></p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
<div id="body">
<!--nav-->
<div id="nav">
  <ul>
    <?php if ($_SESSION['User']['UID'] == ''): ?>
    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/login.php" <?php if ($this->_tpl_vars['Page'] == 'Login'): ?> class="active"<?php endif; ?>><span>Login</span></a></li>
    <?php endif; ?>
    <?php if ($_SESSION['User']['UID'] != ''): ?>
	<li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/dashboard.php" <?php if ($this->_tpl_vars['Page'] == 'Home'): ?>  class="active"<?php endif; ?>><span>Home</span></a>	</li>
        <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/myaccount.php" <?php if ($this->_tpl_vars['Page'] == 'account'): ?>  class="active"<?php endif; ?>><span>My Account</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/edit-profile.php"><span>Shop Profile</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/data-profile.php"><span>Data Profile</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/change-password.php"><span>Change Password</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'projects'): ?>  class="active"<?php endif; ?>><span>Projects</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/myalbums.php"><span>My Gallery</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-projects.php"><span>Manage Projects</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/project-tracker.php"><span>Project Tasks</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-uploaded-files.php"><span>My Files</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/admin-uploaded-files.php"><span>Admin Files</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/upload-admin-files.php"><span>Upload Large Files</span></a></li>
		</ul>
	</li>
        <li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'customers'): ?>  class="active"<?php endif; ?>><span>Business</span></a>
		<ul>
                    <li><a href="javascript:void(0);"><span  class="drop-down-arrow-inner">Customers</span></a>
                        <ul>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-dc.php"><span>Customer Dashboard</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customer-tracking.php"><span>Customer Tracking</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-analysis.php"><span>Customer Analysis</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-calender.php"><span>Calender Results</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-dm.php"><span>Customer Data Map</span></a></li>
                            <!-- <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-dm-search.php"><span>Data Map Search</span></a></li> -->
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customers.php"><span>Manage Customers</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-zipcode-customers.php"><span>Customers by Zip Code</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-city-customers.php"><span>Customers by City</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customer-visit-reports.php"><span>Customer Visit wise Reports</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customer-counts.php"><span>Customer Duration wise Reports</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-customer-spendings.php"><span>Customer Spend wise Reports</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ro-calculations.php"><span>RO Calculations</span></a></li>

			    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-visit-spending.php"><span>Customer Visit Spending</span></a></li>

                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-mis-customers.php"><span>Manage MIS Customers</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-mis-zipcode-customers.php"><span>MIS Zipcode Customers</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-mis-city-customers.php"><span>MIS City Customers</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-mis-customers-report.php"><span>MIS Customers Report</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/customer-dc.php"><span>MIS Customer DC</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/new-reports.php"><span>Export Customer Reports</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span class="drop-down-arrow-inner">Vehicles</span></a>
                        <ul>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-vehicles.php"><span>Vehicle List</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/top-ten-vehicles.php"><span>Top Ten Vehicles</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-make-reports.php"><span>Make wise Reports</span></a></li>
                            <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-model-reports.php"><span>Model wise Reports</span></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-ros.php"><span>Repair Orders</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-competitors.php"><span>Manage Competitors</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'daily'): ?>  class="active"<?php endif; ?>><span>Daily Data</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-daily-data.php"><span>Manage Data</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/add-daily-data.php"><span>Add Data</span></a></li>
		</ul>
	</li>
    <li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'marketing'): ?>  class="active"<?php endif; ?>><span>Marketing</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/marketing-budget.php"><span>Marketing Budget</span></a></li>
                    <li><a href="javascript: ShowMB();"><span>Marketing Budget Map</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/monitoring.php"><span>Monitoring Goals</span></a></li>
                    <li><a href="javascript: ShowMG();"><span>Monitoring Goals Map</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/ro-goal.php"><span>RO Goal</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/calendars.php"><span>Calendars</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/calendars-cat.php"><span>Categories</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/wis.php"><span>what if scenarios</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'website'): ?>  class="active"<?php endif; ?>><span>Website</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/online-tests.php"><span>Online Tests</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/gogoleserp.php"><span>Google</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/bingserp.php"><span>Bing</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/yahooserp.php"><span>Yahoo</span></a></li>
		</ul>
	</li>
	
	
        <li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'surveys'): ?>  class="active"<?php endif; ?>><span>Surveys</span></a>
                <ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/marketing-survey.php"><span>Marketing Survey</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/website-survey.php"><span>Web Site Survey</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/integrated-survey.php"><span>Integrated Survey</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/questionnaire.php?cat=4"><span>Survey</span></a></li>
                </ul>
        </li>
	<li><a href="javascript:void(0);" <?php if ($this->_tpl_vars['Page'] == 'resources'): ?>  class="active"<?php endif; ?>><span>Resources</span></a>
		<ul>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/albums.php"><span>Image Gallery</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/blog/"><span>Blog</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/wiki/"><span>Wiki</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/portfolio.php"><span>Portfolio</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/links.php"><span>Links</span></a></li>
                    <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/manage-tickets.php"><span>Support Tickets</span></a></li>
		</ul>
	</li>
        <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/logout.php"><span>Logout</span></a></li>
    <?php endif; ?>
    <!-- <li><a href="<?php echo $this->_tpl_vars['siteurl']; ?>
/portfolio.php"><span>Portfolio</span></a></li> -->
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->