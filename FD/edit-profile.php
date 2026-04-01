<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$InsArr				= $_REQUEST['Log'];
	$InsArr['opening_date']	= $Gen->Date_Format($_REQUEST['Log']['opening_date']);
	$InsArr['state']	= $_REQUEST['state'][0];
	$Result 			= $Gen->UpdateQry('tbl_shop',$InsArr," Shop_ID = ".$_SESSION['User']['UID']);
	header('Location:'.SITEURL.'/myaccount.php');
}
$Table		= "tbl_shop A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= 'A.name,A.email,A.user_name,A.phone,A.address,A.city,A.country,A.state,A.zip_code,A.website,A.opening_date,A.shop_email,B.Country_Name,C.State_Name';
$AccDet		= $Gen->GetSelWhere($Table,$Fields," Shop_ID = ".$_SESSION['User']['UID']);
$Country			= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_Name ASC");
$smarty->assign('country',$Country);
$State			= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$AccDet[0]['country']."' ORDER BY State_ID ASC");
$smarty->assign('State',$State);
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('edit-profile.tpl');
?>