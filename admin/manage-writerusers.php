<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	if($_REQUEST['hid_type'] == "D")
	{	
		$id_arr = explode(",",$_REQUEST['hid_id']);
		for($i=0;$i<count($id_arr);$i++)
		{
			$Idres = $Gen->GetSelWhere("tbl_writer_users",array("email"),"user_id = '".$id_arr[$i]."'");
		}
	}
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('tbl_writer_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND A.status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND A.first_name like '%".$_REQUEST['keyword']."%' OR A.email like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND A.status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_writer_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= "A.user_id,A.first_name,A.last_name,A.email,A.user_name,A.phone,A.country,A.state,A.city,A.status,B.Country_Name,C.State_Name,C.State_Code";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/


if($_POST['sortoption']=='desc')
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
$SortBy		= " A.first_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($USers);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-writerusers.tpl');
?>