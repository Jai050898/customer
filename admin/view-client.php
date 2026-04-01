<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Varaprasad	
* Date: 21/01/2011 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != "")
{
	$Table		= "tbl_clients A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
	$Fields		= "A.client_id,A.first_name,A.last_name,A.email,A.phone,A.country,A.state,A.city,A.status,A.address,A.zipcode,B.Country_Name,C.State_Name";
	$Where 		= "client_id = ".base64_decode($_REQUEST['client_id']);
	$Client		= $usr->GetSelWhere($Table,$Fields,$Where);
//	echo '<pre>';print_r($Client);exit;
	$smarty->assign('Client',$Client[0]);
}
	$smarty->display('view-client.tpl');
?>