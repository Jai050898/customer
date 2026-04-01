<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign("Page","customers");
 $smarty->assign('breadcrumb','Edit Staff');
   $usr 		= new General;
       
       if(isset($_REQUEST['submitBtn1']) && $_REQUEST['submitBtn1'] == "Submit") {
     //echo "<pre>";print_r($_REQUEST);exit;
     
     $error = '';
        $id  = addslashes(trim($_POST['hid_key']));
        if(isset($id) && is_numeric($id)) {
            $invoice=new Invoice($conn, $id);
            $first_name  = addslashes(trim($_POST['first_name']));
            $last_name  = addslashes(trim($_POST['last_name']));
            $email  = addslashes(trim($_POST['email']));
            $user_name  = addslashes(trim($_POST['user_name']));
            $password  = addslashes(trim($_POST['password']));
            $company_name  = addslashes(trim($_POST['company_name']));
            $city  = addslashes(trim($_POST['city']));
            
            if($first_name   == '')
                    $error  = "First Name can not be empty";
            elseif($last_name   == '')	
                    $error  = "Last Name can not be empty";
            elseif($user_name   == '')	
                    $error  = "User Name can not be empty";
            elseif($password   == '')	
                    $error  = "Password can not be empty";
            elseif($company_name   == '')	
                    $error  = "Company Name can not be empty";
            elseif($city   == '')	
                    $error  = "City can not be empty";
   
            else {
                

	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_users",$PrFields,"id = ".$_REQUEST['id']);
	
$Fields 	= "first_name,last_name,email,user_name,password,company_name,city";
$Where 		= "id = ".$_REQUEST['id'];
$Projects	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
		}	
	}
    }
$smarty->assign('users',$Users);
$smarty->display('edit-staff.tpl');
     
?>



