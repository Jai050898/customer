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
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['act']) && $_REQUEST['act']!='')
{	
	if($_REQUEST['act'] == "down")
	{
		$res1 = $usr->SelectQuery("SELECT max(showorder) as maxid FROM `tbl_questions` WHERE `showorder` < '".$_REQUEST['order']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		$res = $usr->SelectQuery("SELECT quest_id FROM `tbl_questions` WHERE showorder = '".$res1[0]['maxid']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		/*echo "<pre>";print_r($res);
		echo "UPDATE tbl_questions SET showorder = showorder-1 WHERE quest_id = '".$_REQUEST['id']."' AND cat_id = '".$_REQUEST['cat_id']."'";
		echo "UPDATE tbl_questions SET showorder = showorder+1 WHERE quest_id = '".$res[0]['quest_id']."' AND cat_id = '".$_REQUEST['cat_id']."'";
		exit;*/
		$usr->ExecQuery("UPDATE tbl_questions SET showorder = showorder-1 WHERE quest_id = '".$_REQUEST['id']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		$usr->ExecQuery("UPDATE tbl_questions SET showorder = showorder+1 WHERE quest_id = '".$res[0]['quest_id']."' AND cat_id = '".$_REQUEST['cat_id']."'");
	}
	if($_REQUEST['act'] == "up")
	{
		$res1 = $usr->SelectQuery("SELECT min(showorder) as minid FROM `tbl_questions` WHERE `showorder` > '".$_REQUEST['order']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		$res = $usr->SelectQuery("SELECT quest_id FROM `tbl_questions` WHERE showorder = '".$res1[0]['minid']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		/*echo "<pre>";print_r($res);
		echo "UPDATE tbl_questions SET showorder = showorder+1 WHERE quest_id = '".$_REQUEST['id']."' AND cat_id = '".$_REQUEST['cat_id']."'";
		echo "UPDATE tbl_questions SET showorder = showorder-1 WHERE quest_id = '".$res[0]['quest_id']."' AND cat_id = '".$_REQUEST['cat_id']."'";
		exit;*/
		$usr->ExecQuery("UPDATE tbl_questions SET showorder = showorder+1 WHERE quest_id = '".$_REQUEST['id']."' AND cat_id = '".$_REQUEST['cat_id']."'");
		$usr->ExecQuery("UPDATE tbl_questions SET showorder = showorder-1 WHERE quest_id = '".$res[0]['quest_id']."' AND cat_id = '".$_REQUEST['cat_id']."'");
	}
}
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('tbl_questions',$upar,"quest_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 ";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND A.question like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id']!='')
{
	$Where .= " AND A.cat_id = '".$_REQUEST['cat_id']."'";	
}
if(isset($_REQUEST['quest_type']) && $_REQUEST['quest_type']!='')
{
	$Where .= " AND A.quest_type = '".$_REQUEST['quest_type']."'";	
}
$Table		= "tbl_questions A LEFT JOIN tbl_categories B ON A.cat_id = B.cat_id";
$Fields		= "A.quest_id,A.cat_id,A.quest_type,A.question,A.status,A.created_date,A.showorder,B.cat_name";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 50;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Quest in the Site ********/


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
$SortBy		= " A.showorder ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Quest 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Quest);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&cat_id=".$_REQUEST['cat_id']."&quest_type=".$_REQUEST['quest_type']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Quest',$Quest);
//Code to get Categories
$Cat	= $Gen->GetSelWhere('tbl_categories','cat_id,cat_name'," status = 'A' ORDER BY cat_name");
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Quest);exit;
$smarty->display('manage-questions.tpl');
?>