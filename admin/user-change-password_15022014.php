<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    $smarty->assign('breadcrumb','Change Password');



    if(isset($_REQUEST['Submit']) && $_REQUEST['Submit'] == 'Submit') {
        //Validations
        $error = "";
        if($_REQUEST['Old_Password'] == ''){ $error  = "Old Password can not be Empty!!!";}
        if(strlen($_REQUEST['Old_Password']) < 6){$error  = "Old Password should be minimum of 6 characters!!!";}
        elseif($_REQUEST['Password'] == ''){ $error  = "New Password can not be Empty!!!";}
        if(strlen($_REQUEST['Password']) < 6){$error  = "New Password should be minimum of 6 characters!!!";}
        elseif($_REQUEST['CPassword'] == ''){ $error  = "Confirm Password can not be Empty!!!";}
        elseif($_REQUEST['Password'] !== $_POST['CPassword']){ $error  = "New Password and Confirm Password doesn't Match!!!" ;}


        //Record Fetch With User_id & Pwd
        $Where	 = "1=1 AND user_id = '".$_REQUEST['user_id']."' AND password='".base64_encode($_REQUEST['Old_Password'])."'";
        $Table	 = "tbl_users";
        $rows	 = $usr->TotalRows($Table,$Where);
        if($rows > 0){
            $Fields['Password'] = base64_encode($_REQUEST['Password']);
            $UpOverview = $usr->UpdateQry('tbl_users',$Fields,"user_id = '".$_REQUEST['user_id']."'");
            $error = "Password Updated Successfully!!!";
        } else {
            $error = "Incorrect Old Password. Please try again!!!";
        }
    }
    
    $smarty->assign('ErrorMsg',$error);
    $smarty->assign('Page',$Page);
    $smarty->display('user-change-password.tpl');
?>

