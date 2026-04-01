<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act']!='')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	if($_REQUEST['act'] == "down")
	{
		$res1 = $usr->SelectQuery("SELECT max(showorder) as maxid FROM `tbl_portfolio_categories` WHERE `showorder` < '".$_REQUEST['order']."'");
		$res = $usr->SelectQuery("SELECT cat_id FROM `tbl_portfolio_categories` WHERE showorder = '".$res1[0]['maxid']."'");
		//echo "<pre>";print_r($res);
		//echo "UPDATE tbl_categories SET showorder = showorder-1 WHERE cat_id = '".$_REQUEST['id']."'";
		//echo "UPDATE tbl_categories SET showorder = showorder+1 WHERE cat_id = '".$res[0]['cat_id']."'";
		//exit();
		
		$usr->ExecQuery("UPDATE tbl_portfolio_categories SET showorder = showorder-1 WHERE cat_id = '".$_REQUEST['id']."'");
		$usr->ExecQuery("UPDATE tbl_portfolio_categories SET showorder = showorder+1 WHERE cat_id = '".$res[0]['cat_id']."'");
	}
	if($_REQUEST['act'] == "up")
	{
		//echo "SELECT min(showorder),cat_id FROM `tbl_categories` WHERE `showorder` > '".$_REQUEST['order']."'";
		$res1 = $usr->SelectQuery("SELECT min(showorder) as minid FROM `tbl_portfolio_categories` WHERE `showorder` > '".$_REQUEST['order']."'");
		$res = $usr->SelectQuery("SELECT cat_id FROM `tbl_portfolio_categories` WHERE showorder = '".$res1[0]['minid']."'");
		//$res = $usr->Fetch_Result($qry);
		//echo "<pre>";print_r($res);
		//echo "UPDATE tbl_categories SET showorder = showorder+1 WHERE cat_id = '".$_REQUEST['id']."'";
		//echo "UPDATE tbl_categories SET showorder = showorder-1 WHERE cat_id = '".$res[0]['cat_id']."'";
		//exit;
		$usr->ExecQuery("UPDATE tbl_portfolio_categories SET showorder = showorder+1 WHERE cat_id = '".$_REQUEST['id']."'");
		$usr->ExecQuery("UPDATE tbl_portfolio_categories SET showorder = showorder-1 WHERE cat_id = '".$res[0]['cat_id']."'");
	}
}
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_portfolio_categories',$upar,"cat_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND cat_name like '%".$_REQUEST['keyword']."%' OR cat_description like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_portfolio_categories";
$Fields		= "cat_id,cat_name,cat_description,status,created_date,showorder";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/


if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc')
{
	$sortioption='asc';
	$getSort='desc';	
	$sortimoption='up';
	$smarty->assign("sortoption",$_POST['sortoption']);
}
else
{
	$sortioption='desc';
	$getSort='asc';	
	$sortimoption='down';
}
$SortBy		= " showorder ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Cat);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&status=".$_REQUEST['status']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('manage-portfolio-categories.tpl');
?>