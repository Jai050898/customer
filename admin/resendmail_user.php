<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "user_id,first_name,last_name,email,user_name,password, status, login_status";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$user           = $usr->GetSelWhere("tbl_users",$Fields,$Where);
        //echo '<pre>';print_r($user);exit;
        
        //Send Activation Mail to the User
	$subject	= "Member Registration Info";
	$to             = $user[0]['email'];
	$from           = "mms@motorheadmarketing.com";
	$result		= '     Thank you for allowing Motorhead Marketing to be your online marketing company. Below you will find an activation notice. If you will please click the link and go through the password process you will now have access to the customer section of the Motorhead Marketing website. Here is your:<br><br />';
	$result		.= ' <b>USER NAME : '.$user[0]['user_name'].'</b><br>';
	$result		.= ' <b>PASSWORD : '.base64_decode($user[0]['password']).'</b><br><br>';
        if($user[0]['status'] != 'A' && $user[0]['login_status'] != 'A') {
            $result	.= ' You can activate your account by cllicking on the below link <br> <a href="'.SITEURL.'/activate.php?UID='.base64_encode($user[0]['user_id']).'">Activate</a><br>' ;
        }
	 $getdet 	= $Gen->mymail($to,$from,$subject,$user[0]['first_name'],$result);
	 header('Location:'.SITEURL.'/admin/manage-users.php?task=s');
}
else
	header('Location:'.SITEURL.'/admin/manage-users.php?task=f');
?>