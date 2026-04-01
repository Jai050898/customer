<?php
require_once("../includes/application_start.php");
$Page = 'Login';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Reg')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$UsrDet				= $Gen->GetSelWhere('tbl_clients','client_id,email,password,Last_Login_Date,status'," email = '".$_REQUEST['Log']['email']."' AND password = '".base64_encode($_REQUEST['Log']['password'])."'");
	$cnt			= count($UsrDet);
	if($cnt != 0)
	{
		if($UsrDet[0]['status'] == 'A')
		{
			$_SESSION['Client']['CID']				= $UsrDet[0]['client_id'];
			$_SESSION['Client']['Email']			= $UsrDet[0]['email'];
			$_SESSION['Client']['Last_Login_Date']	= $UsrDet[0]['Last_Login_Date'];
			header('Location:'.SITEURL.'/client/myaccount.php');
		}
		else
			$Responce	= 'Inactive Account';
	}
	else
		$Responce	= 'Invalid login Details';
}
$smarty->assign('Responce',$Responce);
$smarty->assign('Page',$Page);
$smarty->display('index.tpl');
?>