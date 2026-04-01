<?php
/*********************************************************************
* Description: Registration Page of Buyers & Suppliers for the Site.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx  
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$smarty->assign('breadcrumb','Dashboard');
$usr 		= new General;
//echo getcwd();exit; 
//echo "<pre>";print_r($_SESSION);exit;
/**********Section to get Tasks Statistics********/
$Tasks = $Gen->GetSelWhere("tbl_tasks A LEFT JOIN tbl_projects B ON A.project_id = B.project_id","A.task_id,A.title,A.dead_line,A.priority"," A.status = 'A' AND B.client_id = '".$_SESSION['User']['UID']."' ORDER BY A.task_id  DESC limit 0,5");
//echo "<pre>";print_r($Tasks);exit;
$smarty->assign("Tasks",$Tasks);

/**********Section to get Blogs Statistics********/
$Blogs = $Gen->GetSelWhere("wp_posts","ID,post_title,post_content"," post_status = 'publish' ORDER BY ID  DESC limit 0,5");
//echo "<pre>";print_r($Tasks);exit;
$smarty->assign("Blogs",$Blogs);

/**********Section to get Wiki Statistics********/
$Wiki = $Gen->GetSelWhere("wikipage A LEFT JOIN wikisearchindex B ON A.page_id = B.si_page","A.page_id,A.page_title,B.si_text 	"," 1 = 1 ORDER BY page_id  DESC limit 0,3");
//echo "<pre>";print_r($Wiki);exit;
$smarty->assign("Wiki",$Wiki);

/**********Section to get Images Statistics********/
$Images = $Gen->GetSelWhere("tbl_photos","photo_id ,photo_name"," status = 'A' ORDER BY photo_id  DESC limit 0,4");
//echo "<pre>";print_r($Images);exit;
$smarty->assign("Images",$Images);

$smarty->display('dashboard.tpl');
?>