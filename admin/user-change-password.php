<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    $smarty->assign('breadcrumb','Change Password');

    if(isset($_REQUEST['Submit']) && $_REQUEST['Submit'] == 'Submit') {
        //Validations
        $error = "";
        if($_REQUEST['Password'] == ''){ $error  = "New Password can not be Empty!!!";}
        if(strlen($_REQUEST['Password']) < 6){$error  = "New Password should be minimum of 6 characters!!!";}
        elseif($_REQUEST['CPassword'] == ''){ $error  = "Confirm Password can not be Empty!!!";}
        elseif($_REQUEST['Password'] !== $_POST['CPassword']){ $error  = "New Password and Confirm Password doesn't Match!!!" ;}


        //Record Fetch With User_id 
        $Where	 = "1=1 AND user_id = '".$_REQUEST['user_id']."'";
        $Table	 = "tbl_users";
        $rows	 = $usr->TotalRows($Table,$Where);
        if($rows > 0){
            $Fields['Password'] = base64_encode($_REQUEST['Password']);
            $UpOverview = $usr->UpdateQry('tbl_users',$Fields,"user_id = '".$_REQUEST['user_id']."'");
            $error = "Password Updated Successfully!!!";
        } else {
            $error = "Please try again!!!";
        }
        
        //echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base********************
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "user_id,first_name,last_name,email,user_name,password";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$subject	= "Member Registration Info";
	//$to = $user[0]['email'];
	$to = "srinivas.rize@gmail.com";
	$to = "srinivas.rize@gmail.com";
	
	$from = "srinivas.rize@gmail.com";
	$result		= '     Thank you for allowing Motorhead Marketing to be your online marketing company. Below you will find an activation notice. If you will please click the link and go through the password process you will now have access to the customer section of the Motorhead Marketing website. Here is your:<br><br />';
	$result		.= ' <b>USER NAME : '.$user[0]['user_name'].'</b><br>';
	$result		.= ' <b>PASSWORD : '.base64_decode($user[0]['password']).'</b><br><br>';
	$result		.= ' You can activate your account by cllicking on the below link <br> <a href="'.SITEURL.'/activate.php?UID='.base64_encode($user[0]['user_id']).'">Activate</a><br>' ;
	 $getdet 	= $Gen->mymail($to,$from,$subject,$user[0]['first_name'],$result);
	 header('Location:'.SITEURL.'/admin/manage-users.php?task=s');
}
else
	header('Location:'.SITEURL.'/admin/manage-users.php?task=f');

        
        */
        
    }
    
    $smarty->assign('ErrorMsg',$error);
    $smarty->assign('Page',$Page);
    $smarty->display('user-change-password.tpl');
?>









