<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_client.php");
$Page = 'MyAccount';
$Table		= "tbl_clients A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$AccDet		= $Gen->GetSelWhere($Table,'A.first_name,last_name,A.email,A.phone,A.address,A.city,A.zipcode,B.Country_Name,C.State_Name'," client_id = ".$_SESSION['Client']['CID']);
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('myaccount.tpl');
?>