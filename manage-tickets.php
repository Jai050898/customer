<?php
/********* Including the Main files which strats the application *******/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page',"resources");
$smarty->assign('breadcrumb','Manage Tickets');
$Gen 		= new General;
//	echo "<pre>";print_r($_REQUEST);exit;
/******** To Change the Status of the Ticket Request *****/
if(isset($_REQUEST['hid_key1']) && $_REQUEST['hid_key1']!='')
{
	$UpReqArr['Status'] 	= $_REQUEST['hid_key1'];
	if($_REQUEST['hid_key1'] == 'C')
	{
		$UpReqArr['closed_date']= date('Y-m-d H:i:s');
		$UpReqArr['closed_by']	= 'C';
	}
	else if($_REQUEST['hid_key1'] == 'R')
		$UpReqArr['reopened_date'] = date('Y-m-d H:i:s');
	$InsId					= $Gen->UpdateQry('tbl_helpdesk',$UpReqArr,"req_id = ".$_REQUEST['req_id']);	
}
/********* TO Save the Message for the Request *****/
if(isset($_REQUEST['message']) && $_REQUEST['message']!='')
{
	$MsgArr['sender_type']	= 'C';
	$MsgArr['req_id']		= $_REQUEST['req_id'];
	$MsgArr['message']		= $_REQUEST['message'];
	$InsId					= $Gen->InsertQry('tbl_helpdesk_message',$MsgArr);	
}	
/******** To Fetch the All Rows in DB ********/
$Table	 	= "tbl_helpdesk";
$Fields  	= "req_id,create_date,respond_date,priority,subject,description,status";
//echo "<pre>";print_r($_REQUEST);exit;
	$Where	    = "req_from= '".$_SESSION['User']['UID']."' AND status IN ('O','R','C')  ";
	
$total		= $Gen->TotalRows("tbl_helpdesk",$Where);
$Where .= " GROUP BY req_id";
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
$SortBy		= " req_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Records	= $Gen->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Records);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Records',$Records);
$smarty->display('manage-tickets.tpl');
?>
