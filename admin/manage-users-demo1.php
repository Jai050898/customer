<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	/*if($_REQUEST['hid_type'] == "D")
	{	
		require_once 'inc/MCAPI.class.php';
		require_once 'inc/config.inc.php'; //contains apikey
		$api = new MCAPI($apikey);
		$id_arr = explode(",",$_REQUEST['hid_id']);
		for($i=0;$i<count($id_arr);$i++)
		{
			$Idres = $Gen->GetSelWhere("tbl_users",array("email"),"user_id = '".$id_arr[$i]."'");
			$memail = $Idres[0]['email'];
			$retval = $api->listUnsubscribe( $listId,$memail);
		}
	}
	else*/
	if($_REQUEST['hid_type'] == "R")
	{	
		$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
		$Fields		= "A.user_id,A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.country,A.state,A.city,A.status,A.website,B.Country_Name,C.State_Name,C.State_Code";
		
		$SortBy		= " A.company_name asc";
		
		$Where		.= " A.status = 'A' AND A.user_id IN(".$_REQUEST['hid_id'].") ORDER BY ".$SortBy;
		
		$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
		$smarty->assign('Users',$Users);
		$smarty->assign('dateprint',date("Y-m-d H:i:s"));
		$smarty->display('client-roster.tpl');
		exit;
	}
	else if($_REQUEST['hid_type'] == "O")
	{	
		$upar['login_status']	= "A";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
        else if($_REQUEST['hid_type'] == "B")
	{	
		$upar['login_status']	= "A";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
                $upar['status']	= "A";
                $upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
        else if($_REQUEST['hid_type'] == "C")
	{	
		$upar['login_status']	= "P";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
                $upar['status']	= "I";
                $upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
	else if($_REQUEST['hid_type'] == "P")
	{	
		$upar['login_status']	= "P";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
	else
	{
		$upar['status']	= $_REQUEST['hid_type'];
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
}
$Where		= "1=1 AND A.is_staff= 'N' AND A.status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND A.first_name like '%".$_REQUEST['keyword']."%' OR A.email like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND A.status = '".$_REQUEST['status']."'";	
}
if(isset($_REQUEST['login_status']) && $_REQUEST['login_status']!='')
{
	$Where .= " AND A.login_status = '".$_REQUEST['login_status']."'";	
}
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= "A.user_id,A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.country,A.state,A.city,A.status,A.login_status,A.access_to_mark_survey,A.access_to_site_survey,A.access_to_integrated_survey, A.attempts, B.Country_Name,C.State_Name";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 25;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/


if($_REQUEST['sortoption']=='desc')
{
	$sortioption='asc';
	$getSort='desc';	
	$sortimoption='up';
	$smarty->assign("sortoption",$_REQUEST['sortoption']);
}
else
{
	$sortioption='desc';
	$getSort='asc';	
	$sortimoption='down';
}
$SortBy		= " A.company_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($USers);exit;

// To Fetch MMS Data Company Ids
$MMSUsersAry    = array();
$MMSUsersAry 	= $usr->GetSelWhere("XML_customers","Distinct(company_id)"," 1=1");
$mmsAry = array();
if(!empty($MMSUsersAry)){
    foreach($MMSUsersAry as $mmsuser){
        $mmsAry[] = $mmsuser['company_id'];
    }
}
//echo "<pre>";print_r($mmsAry);exit;
$srcpath 	= "sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";


include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
$smarty->assign('mmsAry',$mmsAry);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-users-demo1.tpl');
?>
