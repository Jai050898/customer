<?php
require_once("includes/application_start.php");
$Page	= "Register";
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Reg')
{
	$InsArr				= $_REQUEST['Log'];
	$InsArr['state']	= $_REQUEST['state'][0];
	$InsArr['status']	= 'P';
	$Result 			= $Gen->InsertQry('tbl_users',$InsArr);
	if($Result)
	{
		$subject	= "Member Registration Info";
		$result		= '     Thank you for registering with us.<br />You can activate your account by cllicking on the below link<br> <a href="'.SITEURL.'/activate.php?UID='.base64_encode($Result).'">Activate</a>' ;
		 $getdet 	= $Gen->mymail($_REQUEST['Log']['email'],FROM,$subject,$_REQUEST['Log']['full_name'],$result);
	}
	header('Location:'.SITEURL.'/success.php?UID='.base64_encode($Result)."'");
}
$Country			= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_Name ASC");
$smarty->assign('country',$Country);
$smarty->assign('Page',$Page);
$smarty->display('register.tpl');
?>