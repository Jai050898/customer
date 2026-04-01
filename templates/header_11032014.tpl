<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Motorhead Marketing</title>
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<link href="{$siteurl}/css/thickbox.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="{$siteurl}/js/jquery.js"></script>
{literal}
<script language="javascript" type="text/javascript">
	var site_path = "{/literal}{$siteurl}{literal}";
	var img_path = "{/literal}{$siteurl}{literal}/images";
</script>
{/literal}
{literal}
<img src="https://www.agendize.com/manage/imglib/chat/btn-chat-4.1.png" onclick="AZ_show('13013993')" style="cursor:pointer;display:none;" id="az_13013993"/><script id="azscript" type="text/javascript" src="https://www.agendize.com/web/agendize.js?id=13013993"></script>
{/literal}
</head>
{if $Page1 neq ""}
<body onload="load();" onunload="GUnload();">
{else}
<body>
{/if}
<div id="container">
    <div id="logo">
        <div style="float:left;">
            <a href="http://www.autorepairmarketing.com/customer"><img border="0" src="http://www.autorepairmarketing.com/customer/images/logo-inner.png"></a>
        </div>
        <div style="float:right;padding: 10px 60px 10px 20px;">
            <p style="text-align:right;"><strong style="font-size:15px;">{$smarty.session.User.company_name|stripslashes}</strong></p>
            <p style="text-align:right;"><strong>{if $breadcrumb neq '' }{$breadcrumb}{/if}</strong></p>
        </div>
        <div style="clear:both;"></div>
    </div>
    
<div id="body">
<!--nav-->
<div id="nav">
  <ul>
    {if $smarty.session.User.UID eq ''}
    <li><a href="{$siteurl}/login.php" {if $Page eq 'Login'} class="active"{/if}><span>Login</span></a></li>
    {/if}
    {if $smarty.session.User.UID neq ''}
	<li><a href="{$siteurl}/dashboard.php" {if $Page eq 'Home'}  class="active"{/if}><span>Home</span></a>	</li>
        <li><a href="{$siteurl}/myaccount.php" {if $Page eq 'account'}  class="active"{/if}><span>My Account</span></a>
		<ul>
                    <li><a href="{$siteurl}/edit-profile.php"><span>Shop Profile</span></a></li>
                    <li><a href="{$siteurl}/data-profile.php"><span>Data Profile</span></a></li>
                    <li><a href="{$siteurl}/change-password.php"><span>Change Password</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" {if $Page eq 'projects'}  class="active"{/if}><span>Projects</span></a>
		<ul>
                    <li><a href="{$siteurl}/myalbums.php"><span>My Gallery</span></a></li>
                    <li><a href="{$siteurl}/manage-projects.php"><span>Manage Projects</span></a></li>
                    <li><a href="{$siteurl}/project-tracker.php"><span>Project Tasks</span></a></li>
                    <li><a href="{$siteurl}/manage-uploaded-files.php"><span>My Files</span></a></li>
                    <li><a href="{$siteurl}/admin-uploaded-files.php"><span>Admin Files</span></a></li>
                    <li><a href="{$siteurl}/upload-admin-files.php"><span>Upload Large Files</span></a></li>
		</ul>
	</li>
        <li><a href="javascript:void(0);" {if $Page eq 'customers'}  class="active"{/if}><span>Business</span></a>
		<ul>
                    <li><a href="javascript:void(0);"><span  class="drop-down-arrow-inner">Customers</span></a>
                        <ul>
                            <li><a href="{$siteurl}/customer-dc.php"><span>Customer Dashboard</span></a></li>
                            <li><a href="{$siteurl}/manage-customer-tracking.php"><span>Customer Tracking</span></a></li>
                            <li><a href="{$siteurl}/customer-analysis.php"><span>Customer Analysis</span></a></li>
                            <li><a href="{$siteurl}/customer-calender.php"><span>Calender Results</span></a></li>
                            <li><a href="{$siteurl}/customer-dm.php"><span>Customer Data Map</span></a></li>
                            <!-- <li><a href="{$siteurl}/customer-dm-search.php"><span>Data Map Search</span></a></li> -->
                            <li><a href="{$siteurl}/manage-customers.php"><span>Manage Customers</span></a></li>
                            <li><a href="{$siteurl}/manage-zipcode-customers.php"><span>Customers by Zip Code</span></a></li>
                            <li><a href="{$siteurl}/manage-city-customers.php"><span>Customers by City</span></a></li>
                            <li><a href="{$siteurl}/manage-customer-visit-reports.php"><span>Customer Visit Reports</span></a></li>
                            <li><a href="{$siteurl}/manage-customer-counts.php"><span>Customer DurationWise Reports</span></a></li>
                            <li><a href="{$siteurl}/manage-customer-spendings.php"><span>Customer Spend Reports</span></a></li>
                            <li><a href="{$siteurl}/ro-calculations.php"><span>RO Calculations</span></a></li>

			    <li><a href="{$siteurl}/customer-visit-spending.php"><span>Customer Visit Spending</span></a></li>

                            <li><a href="{$siteurl}/manage-mis-customers.php"><span>Manage MIS Customers</span></a></li>
                            <li><a href="{$siteurl}/manage-mis-zipcode-customers.php"><span>MIS Zipcode Customers</span></a></li>
                            <li><a href="{$siteurl}/manage-mis-city-customers.php"><span>MIS City Customers</span></a></li>
                            <li><a href="{$siteurl}/manage-mis-customers-report.php"><span>MIS Customers Report</span></a></li>
                            <li><a href="{$siteurl}/customer-dc.php"><span>MIS Customer DC</span></a></li>
                            <li><a href="{$siteurl}/new-reports.php"><span>Export Customer Reports</span></a></li>
                            
                            <li><a href="{$siteurl}/gross-sale-weekwise-report.php" target="_blank"><span>Weekwise Sales Report</span></a></li>
                            <li><a href="{$siteurl}/gross-sale-daywise-report.php" target="_blank"><span>Daywise Sales Report</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span class="drop-down-arrow-inner">Vehicles</span></a>
                        <ul>
                            <li><a href="{$siteurl}/manage-vehicles.php"><span>Vehicle List</span></a></li>
                            <li><a href="{$siteurl}/top-ten-vehicles.php"><span>Top Ten Vehicles</span></a></li>
                            <li><a href="{$siteurl}/manage-make-reports.php"><span>Make wise Reports</span></a></li>
                            <li><a href="{$siteurl}/manage-model-reports.php"><span>Model wise Reports</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{$siteurl}/manage-ros.php"><span>Repair Orders</span></a></li>
                    <li><a href="{$siteurl}/manage-competitors.php"><span>Manage Competitors</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" {if $Page eq 'daily'}  class="active"{/if}><span>Daily Data</span></a>
		<ul>
                    <li><a href="{$siteurl}/manage-daily-data.php"><span>Manage Data</span></a></li>
                    <li><a href="{$siteurl}/add-daily-data.php"><span>Add Data</span></a></li>
		</ul>
	</li>
    <li><a href="javascript:void(0);" {if $Page eq 'marketing'}  class="active"{/if}><span>Marketing</span></a>
		<ul>
                    <li><a href="{$siteurl}/marketing-budget.php"><span>Marketing Budget</span></a></li>
                    <li><a href="javascript: ShowMB();"><span>Marketing Budget Map</span></a></li>
                    <li><a href="{$siteurl}/monitoring.php"><span>Monitoring Goals</span></a></li>
                    <li><a href="javascript: ShowMG();"><span>Monitoring Goals Map</span></a></li>
                    <li><a href="{$siteurl}/ro-goal.php"><span>RO Goal</span></a></li>
                    <li><a href="{$siteurl}/calendars.php"><span>Calendars</span></a></li>
                    <li><a href="{$siteurl}/calendars-cat.php"><span>Categories</span></a></li>
                    <li><a href="{$siteurl}/wis.php"><span>what if scenarios</span></a></li>
		</ul>
	</li>
	<li><a href="javascript:void(0);" {if $Page eq 'website'}  class="active"{/if}><span>Website</span></a>
		<ul>
                    <li><a href="{$siteurl}/online-tests.php"><span>Online Tests</span></a></li>
                    <li><a href="{$siteurl}/gogoleserp.php"><span>Google</span></a></li>
                    <li><a href="{$siteurl}/bingserp.php"><span>Bing</span></a></li>
                    <li><a href="{$siteurl}/yahooserp.php"><span>Yahoo</span></a></li>
		</ul>
	</li>
	
	
        <li><a href="javascript:void(0);" {if $Page eq 'surveys'}  class="active"{/if}><span>Surveys</span></a>
                <ul>
                    <li><a href="{$siteurl}/marketing-survey.php"><span>Marketing Survey</span></a></li>
                    <li><a href="{$siteurl}/website-survey.php"><span>Web Site Survey</span></a></li>
                    <li><a href="{$siteurl}/integrated-survey.php"><span>Integrated Survey</span></a></li>
                    <li><a href="{$siteurl}/questionnaire.php?cat=4"><span>Survey</span></a></li>
                </ul>
        </li>
	<li><a href="javascript:void(0);" {if $Page eq 'resources'}  class="active"{/if}><span>Resources</span></a>
		<ul>
                    <li><a href="{$siteurl}/albums.php"><span>Image Gallery</span></a></li>
                    <li><a href="{$siteurl}/blog/"><span>Blog</span></a></li>
                    <li><a href="{$siteurl}/wiki/"><span>Wiki</span></a></li>
                    <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li>
                    <li><a href="{$siteurl}/links.php"><span>Links</span></a></li>
                    <li><a href="{$siteurl}/manage-tickets.php"><span>Support Tickets</span></a></li>
		</ul>
	</li>
        <li><a href="{$siteurl}/logout.php"><span>Logout</span></a></li>
    {/if}
    <!-- <li><a href="{$siteurl}/portfolio.php"><span>Portfolio</span></a></li> -->
  </ul>
  <div class="clear"></div>
</div>
<!--end nav-->
