<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

/***********section to get portolio categories**********************************/
$Cate_Fields 	= "cat_name,cat_id";
	$Cate_Where 		= "1=1";
       	$Cate_portfolio	= $usr->GetSelWhere("tbl_portfolio_categories",$Cate_Fields,$Cate_Where);
	/*$images = $usr->GetSelWhere("tbl_portfolio_images","image"," portfolio_id = '".$portfolio[0]['id']."'");
	if($images)
		$portfolio[0]['images'] = $images;*/
	//echo "<pre>";print_r($Cate_portfolio);exit;
	$smarty->assign('Cate_portfolio',$Cate_portfolio);
/*****section to get the details from data base*********************/
if(isset($_REQUEST['portfolio_id']) && $_REQUEST['portfolio_id'] != "")
{
	$Fields 	= "A.id,A.project_id,A.text,A.status,A.image,B.name";
	$Where 		= "A.id = ".$_REQUEST['portfolio_id'];
	$portfolio	= $usr->GetSelWhere("tbl_portfolio A LEFT JOIN tbl_projects B ON A.project_id = B.Project_id",$Fields,$Where);
	/*$images = $usr->GetSelWhere("tbl_portfolio_images","image"," portfolio_id = '".$portfolio[0]['id']."'");
	if($images)
		$portfolio[0]['images'] = $images;*/
	//echo "<pre>";print_r($portfolio);exit;
	$smarty->assign('Portfolio',$portfolio[0]);
}

if(isset($_REQUEST['portfolio_id']) && $_REQUEST['portfolio_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	if(isset($_REQUEST['Image_Logo']) && $_REQUEST['Image_Logo'] != "")
		$PrFields['image'] = $_REQUEST['Image_Logo'];
	$UpOverview 				= $Gen->UpdateQry("tbl_portfolio",$PrFields,"id = ".$_REQUEST['portfolio_id']);
	/*if($UpOverview && isset($_REQUEST['Image_Logo']))
	{
		$insarray = array();
		$insarray['portfolio_id'] = $_REQUEST['portfolio_id'];
		$insarray['image'] = $_REQUEST['Image_Logo'];
		
		$chk = $Gen->GetSelWhere("tbl_project_status","project_status","id = '".$_REQUEST['portfolio_id']."'");
		//echo "<pre>";print_r($chk);exit;
		if($chk[0]['project_status'] != $_REQUEST['Log']['project_status'])
			$ins1 						= $Gen->InsertQry('tbl_project_status',$insarray);	
	}*/
	header("Location:".SITEURL.'/admin/manage-portfolio.php');
	exit;
}   
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	if(isset($_REQUEST['Image_Logo']) && $_REQUEST['Image_Logo'] != "")
		$PrFields['image'] = $_REQUEST['Image_Logo'];
	$ins 						= $Gen->InsertQry('tbl_portfolio',$PrFields);
	/*if($ins)
	{
		$insarray = array();
		$insarray['portfolio_id'] = $ins;
		$ins1 						= $Gen->InsertQry('tbl_portfolio_images',$insarray);	
	}*/
	header("Location:".SITEURL.'/admin/manage-portfolio.php');
}
//code to get already existed users
$AlreadyProjects = $usr->GetSelWhere("tbl_portfolio","id","1 = 1");
$alreadyarr = array();
for($i=0;$i<count($AlreadyProjects);$i++)
{
	$alreadyarr[] = $AlreadyProjects[$i]['id'];
}
//echo "<pre>";print_r($alreadyarr);exit;
$ids = implode(",",$alreadyarr);
//Code to Get Projects
if($ids != "")
	$Projects = $usr->GetSelWhere("tbl_projects","project_id,name"," project_id NOT IN (".$ids.")");
else
	$Projects = $usr->GetSelWhere("tbl_projects","project_id,name"," 1=1");
if($Projects)
	$smarty->assign('Projects',$Projects);
else
	$smarty->assign('Projects',"0");
//echo "<pre>";print_r($Projects);exit;
$smarty->display('add-portfolio-demo.tpl');
?>