<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$InsArr				= $_REQUEST['Log'];
	$chkrec	= $Gen->TotalRows("tbl_annualsettings","Shop_ID = '".$_SESSION['User']['UID']."'");
	if($chkrec > 0)
	{
		$Result 			= $Gen->UpdateQry('tbl_annualsettings',$InsArr," Shop_ID = ".$_SESSION['User']['UID']);
	}
	else
	{
		$InsArr['Shop_ID'] = $_SESSION['User']['UID'];
		$ins 						= $Gen->InsertQry('tbl_annualsettings',$InsArr);
	}
	header('Location:'.SITEURL.'/annual-settings.php?task=S');
}
$Table		= "tbl_annualsettings";
$Fields		= '*';
$AccDet		= $Gen->GetSelWhere($Table,$Fields," Shop_ID = ".$_SESSION['User']['UID']);
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('annual-settings.tpl');
?>