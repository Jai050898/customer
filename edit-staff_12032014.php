<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","customers");
 $smarty->assign('breadcrumb','Edit Staff');
   $usr 		= new General;
    
    if(isset($_POST['btnSubmit'])) {
     $error = '';
        //echo "<pre>";print_r($_REQUEST);exit;
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
                    $invoice->setproperty('id',$id);
                    $invoice->setproperty('first_name',$first_name);
                    $invoice->setproperty('last_name',$last_name);
                    $invoice->setproperty('email',$email);
                    $invoice->setproperty('user_name',$user_name);
                    $invoice->setproperty('password',$password);
                    $invoice->setproperty('company_name',$company_name);
                    $invoice->setproperty('city',$city);
                    
                    $invoice->updateInvoice();
                    //header('Location: manage-online-payments.php?action=edit');
                    exit(0);
                    //$error='Record Updated successfully!!!';
            }	
        }
    }
    
    
    // To Fetch Invoice Data
    $Users  = array();
    $id1  = (int)$_REQUEST['id'];
    
    if(isset($id1) && is_numeric($id1)) {
        $noId   = true;
        $invoice1    = new Invoice($conn, $id1);
        $Users	= $invoice1->getprofile();
    }
    
    //echo "<pre>";print_r($Users);exit;
    $smarty->assign('Errormssage',$error);
    $smarty->assign('noId',$noId);
    $smarty->assign('Users',$Users);
    
    $smarty->display('edit-staff.tpl');
?>



