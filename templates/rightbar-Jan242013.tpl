<div class="bodyright">
	<div class="rightbox">
	<div class="title">Quick Links</div>
		<div class="rightboxbg">
			<ul>
				<li><a href="{$siteurl}/myaccount.php">Home</a></li>
				<li><a href="{$siteurl}/dashboard.php">Dashboard</a></li>
				<li><a href="{$siteurl}/edit-profile.php">Edit Profile</a></li>
				<li><a href="{$siteurl}/change-password.php">Change Password</a></li>
				<li><a href="{$siteurl}/myalbums.php">My Gallery</a> </li>
				<li><a href="{$siteurl}/albums.php">Image Gallery</a></li>
				<li><a href="{$siteurl}/manage-projects.php">Manage Projects</a> </li>
				<li><a href="{$siteurl}/project-tracker.php">Project Tasks</a> </li>
				<li><a href="{$siteurl}/blog/">Blog</a> </li>
				<li><a href="{$siteurl}/wiki/">Wiki</a> </li>
				<li><a href="{$siteurl}/portfolio.php">Portfolio</a> </li>
				<li><a href="{$siteurl}/manage-uploaded-files.php">Manage Uploaded Files</a> </li>
				<li><a href="{$siteurl}/admin-uploaded-files.php">Admin Uploaded Files</a> </li>
				<li><a href="{$siteurl}/manage-tickets.php">Manage Tickets</a> </li>
				{if $smarty.session.User.access_to_mark_survey eq "Y"}
				<li><a href="{$siteurl}/marketing-survey.php">Marketing Survey</a> </li>
				{/if}
				{if $smarty.session.User.access_to_site_survey eq "Y" }
				<li><a href="{$siteurl}/website-survey.php">Web Site Survey</a> </li>
				{/if}
				{if $smarty.session.User.access_to_integrated_survey eq "Y"}
				<li><a href="{$siteurl}/integrated-survey.php">Integrated Survey</a> </li>
				{/if}
				<li><a href="{$siteurl}/links.php">Links</a></li>
				<li><a href="{$siteurl}/questionnaire.php?cat=4">Survey</a></li>
				<li><a href="{$siteurl}/marketing-budget.php">Marketing Budget</a></li>
				<li><a href="javascript: ShowMB();">Marketing Budget Map</a></li>
				<li><a href="{$siteurl}/calendars.php">Calendars</a></li>
				<li><a href="{$siteurl}/calendars-cat.php">Categories</a></li>
				<li><a href="{$siteurl}/ro-goal.php">RO Goal</a></li>
				<li><a href="{$siteurl}/monitoring.php">Monitoring Goals</a></li>
				<li><a href="javascript: ShowMG();">Monitoring Goals Map</a></li>
				<li><a href="{$siteurl}/gogoleserp.php">Google SERPs</a></li>
				<li><a href="{$siteurl}/bingserp.php">Bing SERPs</a></li>
				<li><a href="{$siteurl}/yahooserp.php">Yahoo SERPs</a></li>
				<li><a href="{$siteurl}/online-tests.php">Online Tests</a></li>
				<li><a href="{$siteurl}/logout.php">Logout</a></li>
			</ul>
		
		</div>
		<!--<div><img src="images/rightbox-bottom.gif" alt="" /></div>-->
        
	</div>
</div>