<?php
/********* Including the Main files which strats the application *******/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$Gen 		= new General;

/******** To Change the Status of the Ticket Request *****/
if(isset($_REQUEST['hid_key1']) && $_REQUEST['hid_key1']!='')
{
	$UpReqArr['status'] 	= $_REQUEST['hid_key1'];
	if($_REQUEST['hid_key1'] == 'C')
	{
		$UpReqArr['closed_date']= date('Y-m-d H:i:s');
		$UpReqArr['closed_by']	= 'A';
	}
	else if($_REQUEST['hid_key1'] == 'R')
		$UpReqArr['reopened_date'] = date('Y-m-d H:i:s');
	$InsId					= $Gen->UpdateQry('tbl_helpdesk',$UpReqArr,"req_id = ".$_REQUEST['req_id']);	
}
/********* TO Save the Message for the Request *****/
if(isset($_REQUEST['message']) && $_REQUEST['message']!='')
{
	$MsgArr['sender_type']	= 'A';
	$MsgArr['req_id']		= $_REQUEST['req_id'];
	$MsgArr['message']		= $_REQUEST['message'];
	$MsgArr['create_date']	= date('Y-m-d H:i:s');
	$InsId					= $Gen->InsertQry('tbl_helpdesk_message',$MsgArr);
	$upArr = array();
	$upArr['respond_date'] = date('Y-m-d H:i:s');
	$InsId					= $Gen->UpdateQry('tbl_helpdesk',$upArr,"req_id = ".$_REQUEST['req_id']);
	header('Location:'.SITEURL.'/admin/manage-tickets.php'); 
}	
/******** To Fetch the All Rows in DB ********/
$Table	 	= "tbl_helpdesk A LEFT JOIN tbl_users B ON A.req_from = B.user_id";
$Fields  	= "A.req_id,A.create_date,A.respond_date,A.priority,A.subject,A.description,A.status,A.req_from,B.first_name,B.last_name";
//echo "<pre>";print_r($_REQUEST);exit;
	$Where	    = "1=1 ";
	
$total		= $Gen->TotalRows("tbl_helpdesk",$Where);
$Where .= " GROUP BY A.req_id";
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
$SortBy		= " A.req_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Records	= $Gen->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Records);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&status=".$_REQUEST['status']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tickets',$Records);
$smarty->display('manage-tickets.tpl');
?>
