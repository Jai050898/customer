<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
$Table		= "tbl_shop A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$AccDet		= $Gen->GetSelWhere($Table,'A.name,A.email,A.user_name,A.phone,A.address,A.city,A.zip_code,A.website,A.shop_email,A.opening_date,B.Country_Name,C.State_Name'," Shop_ID = ".$_SESSION['User']['UID']);
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('myaccount.tpl');
?>