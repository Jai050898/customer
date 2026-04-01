<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_client.php");
$Page = 'MyAccount';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$InsArr				= $_REQUEST['Log'];
	$InsArr['state']	= $_REQUEST['state'][0];
	$Result 			= $Gen->UpdateQry('tbl_clients',$InsArr," client_id = ".$_SESSION['Client']['CID']);
	header('Location:'.SITEURL.'/client/myaccount.php');
}
$Table		= "tbl_clients A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= 'A.first_name,A.last_name,A.email,A.company_name,A.phone,A.address,A.city,A.country,A.state,A.zipcode,B.Country_Name,C.State_Name';
$AccDet		= $Gen->GetSelWhere($Table,$Fields," client_id = ".$_SESSION['Client']['CID']);
$Country			= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_Name ASC");
$smarty->assign('country',$Country);
$State			= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$AccDet[0]['country']."' ORDER BY State_ID ASC");
$smarty->assign('State',$State);
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('edit-profile.tpl');
?>