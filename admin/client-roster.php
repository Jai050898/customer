<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
function format_phone($phone)
{
	$phone = preg_replace("/[^0-9]/", "", $phone);

	if(strlen($phone) == 7)
		return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
	elseif(strlen($phone) == 10)
		return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1-$2-$3", $phone);
	else
		return $phone;
}
$usr 		= new General;
/*****section to get the details from data base*********************/
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= "A.user_id,A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.country,A.state,A.city,A.status,A.website,B.Country_Name,C.State_Name,C.State_Code";

$SortBy		= " A.company_name asc";

$Where		.= " A.status = 'A' ORDER BY ".$SortBy;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
foreach($Users as $key=>$user){
    
    $Users[$key]['phone'] = format_phone($user['phone']);
}
$smarty->assign('Users',$Users);
$smarty->assign('dateprint',date("Y-m-d H:i:s"));
$smarty->display('client-roster.tpl');
?>