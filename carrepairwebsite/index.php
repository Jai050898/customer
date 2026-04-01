<?php
//echo getcwd();exit;
require_once("includes/application_start.php");
$Page	= 'Home';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	//echo "<pre>";print_r($_REQUEST);
	//echo "<pre>";print_r($_SERVER);
	//exit;
	$InsArr				= $_REQUEST['Log'];
	$InsArr['ip_address'] = $_SERVER['SERVER_ADDR'];
	$InsArr['browser'] = $_SERVER['HTTP_USER_AGENT'];
	$Result 			= $Gen->InsertQry('tbl_requests',$InsArr);
	$_SESSION['Items'] = $InsArr;
	if($Result)
	{
		/*$subject	= "New Request from Car Repair Website";
		$result		= '' ;
		 $getdet 	= $Gen->mymail($_REQUEST['Log']['email'],FROM,$subject,$_REQUEST['Log']['full_name'],$result);*/
	}
	header('Location:'.SITEURL.'/success.php');
}
$smarty->assign('Page',$Page);
$smarty->display('index.tpl');
?>