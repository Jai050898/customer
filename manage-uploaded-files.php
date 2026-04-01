<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page',"projects");
$smarty->assign('breadcrumb','Manage Projects Uploaded Files');
$usr 		= new General;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_uploads',$upar,"id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND uploader_id = '".$_SESSION['User']['UID']."'";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND filename like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_uploads";
$Fields		= "id,filename,dateuploaded,comments";

$total		= $usr->TotalRows("tbl_uploads",$Where);
$Where .= " GROUP BY id";
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/
if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc')
{
	$sortioption	='asc';
	$getSort		='desc';	
	$sortimoption	='up';
	$smarty->assign("sortoption",$_POST['sortoption']);
}
else
{
	$sortioption	='desc';
	$getSort		='asc';	
	$sortimoption	='down';
}
$SortBy		= " id ".$getSort;
if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Doc 		= $usr->GetSelWhere($Table,$Fields,$Where);
$srcpath 	= " filename=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Documents',$Doc);
$smarty->display('manage-uploaded-files.tpl');
?>