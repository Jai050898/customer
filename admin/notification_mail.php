<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
    $smarty->assign("Page","customers");
 $smarty->assign('breadcrumb','Add Staff');
   $usr 		= new General;
   /*** to retrive data **/
   $user = $_REQUEST['user_id'];
     $where_data = "user_id =".$user;
     $dataSearchArr		= $usr->GetSelWhere("tbl_users","notification_mail,notification_status",$where_data);
     if(count($dataSearchArr)>0){
     	foreach($dataSearchArr as $key=>$val){
     	$notification_mail =  $val['notification_mail'];
     	$notification_status= $val['notification_status'];
     	}
     }else{
     	$notification_mail =  '';
     	$notification_status= '0';

     }

   
/*****section to insert the data*****/
   $error='';

if( isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] !='' ){
		if(filter_var($_REQUEST['Log']['email'], FILTER_VALIDATE_EMAIL) )
		{
			$PoFields = array();
			$PoFields['notification_mail'] = $_REQUEST['Log']['email'];
				if(isset($_REQUEST['Log']['active']) && $_REQUEST['Log']['active']=='1'){
					$PoFields['notification_status'] ='1';    
				}else{
					$PoFields['notification_status'] = '0';
				}
			//update the notification in tbl_users table. 
			$UpOverview = $usr->UpdateQry("tbl_users",$PoFields,"user_id = ".$_REQUEST['hid_key']);
			header("Location:notification_mail.php?user_id=".$_REQUEST['user_id']);
			$error ="Inserted sucessfully";
		}else{
		$error ="Please enter valid email id";
		}

}

$smarty->assign('Page',$Page);
$smarty->assign('error',$error);
$smarty->assign('notify_mail',$notification_mail);
$smarty->assign('notify_status',$notification_status);
$smarty->display('notification_mail.tpl');
?>
