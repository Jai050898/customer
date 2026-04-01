<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "first_name,last_name,password,email,user_name,phone,state,country,city,zip_code,address";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_seo_users",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('User',$user[0]);
	//Code to get Countries
	$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_Name,State_Code'," Country_Code = '".$user[0]['country']."' ORDER BY State_ID");
	//echo "<pre>";print_r($States);exit;
	$smarty->assign('States',$States);
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['state'] = $_REQUEST['state'][0];
	
	$UpOverview 				= $Gen->UpdateQry("tbl_seo_users",$PrFields,"user_id = ".$_REQUEST['user_id']);
	header("Location:".SITEURL.'/admin/manage-seousers.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['state'] = $_REQUEST['state'][0];
	$ins 						= $Gen->InsertQry('tbl_seo_users',$PrFields);
	if($ins)
	{
		//Code to send mail
		$subject	= "Member Registration Info";
		$result		= ' You account is Created by Admin.<br />You can Login to your account using following Details' ;
		$result		.='<br> User Name : '.$PrFields['user_name'];
		$result		.='<br> Password : '.$PrFields['password'];
		$result		.='<br> Link : http://mm.autorepairmarketing.com/customer/seo';
		 $getdet 	= $Gen->mymail($PrFields['email'],FROM,$subject,$PrFields['first_name'],$result);
	 	header("Location:".SITEURL.'/admin/manage-seousers.php');
	}
}
//Code to get Countries
$Country	= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_ID");
$smarty->assign('country',$Country);

$smarty->display('add-seouser.tpl');
?>