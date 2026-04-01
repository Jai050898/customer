<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$usr 		= new General;

$InsArr				= array();
$InsArr['cal_id'] = $_REQUEST['id'];
$InsArr['customer_id'] = $_SESSION['User']['UID'];
$ins 						= $Gen->InsertQry('tbl_shared_calendars',$InsArr);
if($ins)
{
	$emails = explode(",",$_REQUEST['emails']);
	for($i=0;$i<count($emails);$i++)
	{
		//Code to send mail
		$subject	= "Marketingnavigator info Calendar - ".$_SESSION['User']['user_name']." has shared a calendar with you! ";
		$result		= $_SESSION['User']['user_name'].'	wants to share a calendar with you using Web Marketing Calendar. Click on the link below to view the calendar in your browser.<br>'.$_REQUEST['comments'].'<br><br> <a href="'.SITEURL.'/show-calendar.php?id='.base64_encode($_REQUEST['id']).'">Click here</a>';
		 $getdet 	= $Gen->mymail($emails[$i],"info@marketingnavigator.com",$subject,$emails[$i],$result);
		 
		$InsItemArr				= array();
		$InsItemArr['shared_id'] = $ins;
		$InsItemArr['email'] = $emails[$i];
		$InsItemArr['comments'] = $_REQUEST['comments'];
		$insItem						= $Gen->InsertQry('tbl_shared_calendars_items',$InsItemArr);
	}
	echo "success";
}
else
{
		echo "error";
}
?>