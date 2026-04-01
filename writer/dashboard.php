<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_writer.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
//echo getcwd();exit; 

/**********Section to get Customers Statistics********/
$Totalcustomers		= $Gen->TotalRows("tbl_users"," 1=1");
$Activecustomers	= $Gen->TotalRows("tbl_users"," Status = 'A'");
$InActivecustomers	= $Gen->TotalRows("tbl_users"," Status = 'I'");
$Deletedcustomers	= $Gen->TotalRows("tbl_users"," Status = 'D'");
$smarty->assign("Totalcustomers",$Totalcustomers);
$smarty->assign("Activecustomers",$Activecustomers);
$smarty->assign("InActivecustomers",$InActivecustomers);
$smarty->assign("Deletedcustomers",$Deletedcustomers);

/**********Section to get Client Statistics********/
$TotalClients		= $Gen->TotalRows("tbl_clients"," 1=1");
$ActiveClients		= $Gen->TotalRows("tbl_clients"," Status = 'A'");
$InActiveClients		= $Gen->TotalRows("tbl_clients"," Status = 'I'");
$DeletedClients		= $Gen->TotalRows("tbl_clients"," Status = 'D'");
$smarty->assign("TotalClients",$TotalClients);
$smarty->assign("ActiveClients",$ActiveClients);
$smarty->assign("InActiveClients",$InActiveClients);
$smarty->assign("DeletedClients",$DeletedClients);

/**********Section to get Albums Statistics********/
$TotalAlbums		= $Gen->TotalRows("tbl_albums"," 1=1");
$ActiveAlbums		= $Gen->TotalRows("tbl_albums"," Status = 'A'");
$InActiveAlbums		= $Gen->TotalRows("tbl_albums"," Status = 'I'");
$DeletedAlbums		= $Gen->TotalRows("tbl_albums"," Status = 'D'");
$smarty->assign("TotalAlbums",$TotalAlbums);
$smarty->assign("ActiveAlbums",$ActiveAlbums);
$smarty->assign("InActiveAlbums",$InActiveAlbums);
$smarty->assign("DeletedAlbums",$DeletedAlbums);

/**********Section to get Projects Statistics********/
$TotalProjects		= $Gen->TotalRows("tbl_projects"," 1=1");
$ActiveProjects		= $Gen->TotalRows("tbl_projects"," Status = 'A'");
$InActiveProjects	= $Gen->TotalRows("tbl_projects"," Status = 'I'");
$DeletedProjects		= $Gen->TotalRows("tbl_projects"," Status = 'D'");
$smarty->assign("TotalProjects",$TotalProjects);
$smarty->assign("ActiveProjects",$ActiveProjects);
$smarty->assign("InActiveProjects",$InActiveProjects);
$smarty->assign("DeletedProjects",$DeletedProjects);

/**********Section to get Tasks Statistics********/
$TotalTasks			= $Gen->TotalRows("tbl_tasks"," 1=1");
$ActiveTasks		= $Gen->TotalRows("tbl_tasks"," Status = 'A'");
$InActiveTasks		= $Gen->TotalRows("tbl_tasks"," Status = 'I'");
$DeletedTasks		= $Gen->TotalRows("tbl_tasks"," Status = 'D'");
$smarty->assign("TotalTasks",$TotalTasks);
$smarty->assign("ActiveTasks",$ActiveTasks);
$smarty->assign("InActiveTasks",$InActiveTasks);
$smarty->assign("DeletedTasks",$DeletedTasks);

/**********Section to get Blog Statistics********/
$TotalBlogs			= $Gen->TotalRows("wp_posts"," post_status = 'publish' OR post_status = 'trash'");
$ActiveBlogs		= $Gen->TotalRows("wp_posts"," post_status = 'publish'");
$DeletedBlogs		= $Gen->TotalRows("wp_posts"," post_status = 'trash'");
$smarty->assign("TotalBlogs",$TotalBlogs);
$smarty->assign("ActiveBlogs",$ActiveBlogs);
$smarty->assign("DeletedBlogs",$DeletedBlogs);

/***********Code for Calender Statistics*****************/
$today		= date('Y-m-d');
$week 		= date('Y-m-d',mktime(0,0,0,date('m'),date('d')-7,date('Y')));
$month		= date('Y-m-d',mktime(0,0,0,date('m')-1,date('d'),date('Y')));
$year 		= date('Y-m-d',mktime(0,0,0,date('m'),date('d'),date('Y')-1));

/**********Get Customers Statistics********/
$CustomersToday	= $Gen->TotalRows("tbl_users","date_format(created_date,'%Y-%m-%d') = '".$today."'");
$CustomersWeek	= $Gen->TotalRows("tbl_users","date_format(created_date,'%Y-%m-%d') >= '".$week."'");
$CustomersMnth	= $Gen->TotalRows("tbl_users","date_format(created_date,'%Y-%m-%d') >= '".$month."'");
$CustomersYear	= $Gen->TotalRows("tbl_users","date_format(created_date,'%Y-%m-%d') >= '".$year."'");
$smarty->assign("CustomersToday",$CustomersToday);
$smarty->assign("CustomersWeek",$CustomersWeek);
$smarty->assign("CustomersMnth",$CustomersMnth);
$smarty->assign("CustomersYear",$CustomersYear);

/**********Get Client Statistics********/
$ClientsToday	= $Gen->TotalRows("tbl_clients","date_format(Created_Date,'%Y-%m-%d') = '".$today."'");
$ClientsWeek	= $Gen->TotalRows("tbl_clients","date_format(Created_Date,'%Y-%m-%d') >= '".$week."'");
$ClientsMnth	= $Gen->TotalRows("tbl_clients","date_format(Created_Date,'%Y-%m-%d') >= '".$month."'");
$ClientsYear	= $Gen->TotalRows("tbl_clients","date_format(Created_Date,'%Y-%m-%d') >= '".$year."'");
$smarty->assign("ClientsToday",$ClientsToday);
$smarty->assign("ClientsWeek",$ClientsWeek);
$smarty->assign("ClientsMnth",$ClientsMnth);
$smarty->assign("ClientsYear",$ClientsYear);

/**********Get Albums Statistics********/
$AlbumsToday	= $Gen->TotalRows("tbl_albums","date_format(created_date,'%Y-%m-%d') = '".$today."'");
$AlbumsWeek		= $Gen->TotalRows("tbl_albums","date_format(created_date,'%Y-%m-%d') >= '".$week."'");
$AlbumsMnth		= $Gen->TotalRows("tbl_albums","date_format(created_date,'%Y-%m-%d') >= '".$month."'");
$AlbumsYear		= $Gen->TotalRows("tbl_albums","date_format(created_date,'%Y-%m-%d') >= '".$year."'");
$smarty->assign("AlbumsToday",$AlbumsToday);
$smarty->assign("AlbumsWeek",$AlbumsWeek);
$smarty->assign("AlbumsMnth",$AlbumsMnth);
$smarty->assign("AlbumsYear",$AlbumsYear);

/**********Get Projects Statistics********/
$ProjectsToday	= $Gen->TotalRows("tbl_projects","date_format(Created_Date,'%Y-%m-%d') = '".$today."'");
$ProjectsWeek	= $Gen->TotalRows("tbl_projects","date_format(Created_Date,'%Y-%m-%d') >= '".$week."'");
$ProjectsMnth	= $Gen->TotalRows("tbl_projects","date_format(Created_Date,'%Y-%m-%d') >= '".$month."'");
$ProjectsYear	= $Gen->TotalRows("tbl_projects","date_format(Created_Date,'%Y-%m-%d') >= '".$year."'");
$smarty->assign("ProjectsToday",$ProjectsToday);
$smarty->assign("ProjectsWeek",$ProjectsWeek);
$smarty->assign("ProjectsMnth",$ProjectsMnth);
$smarty->assign("ProjectsYear",$ProjectsYear);

/**********Get Tasks Statistics********/
$TasksToday		= $Gen->TotalRows("tbl_tasks","date_format(Created_Date,'%Y-%m-%d') = '".$today."'");
$TasksWeek		= $Gen->TotalRows("tbl_tasks","date_format(Created_Date,'%Y-%m-%d') >= '".$week."'");
$TasksMnth		= $Gen->TotalRows("tbl_tasks","date_format(Created_Date,'%Y-%m-%d') >= '".$month."'");
$TasksYear		= $Gen->TotalRows("tbl_tasks","date_format(Created_Date,'%Y-%m-%d') >= '".$year."'");
$smarty->assign("TasksToday",$TasksToday);
$smarty->assign("TasksWeek",$TasksWeek);
$smarty->assign("TasksMnth",$TasksMnth);
$smarty->assign("TasksYear",$TasksYear);

/**********Get Blog Statistics********/
$BlogsToday		= $Gen->TotalRows("wp_posts","date_format(post_date,'%Y-%m-%d') = '".$today."' AND post_status = 'publish' OR post_status = 'trash'");
$BlogsWeek		= $Gen->TotalRows("wp_posts","date_format(post_date,'%Y-%m-%d') >= '".$week."'  AND post_status = 'publish' OR post_status = 'trash'");
$BlogsMnth		= $Gen->TotalRows("wp_posts","date_format(post_date,'%Y-%m-%d') >= '".$month."'  AND post_status = 'publish' OR post_status = 'trash'");
$BlogsYear		= $Gen->TotalRows("wp_posts","date_format(post_date,'%Y-%m-%d') >= '".$year."'  AND post_status = 'publish' OR post_status = 'trash'");
$smarty->assign("BlogsToday",$BlogsToday);
$smarty->assign("BlogsWeek",$BlogsWeek);
$smarty->assign("BlogsMnth",$BlogsMnth);
$smarty->assign("BlogsYear",$BlogsYear);

$smarty->display('dashboard.tpl');
?>