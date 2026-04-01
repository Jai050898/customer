<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'account';
 $smarty->assign('breadcrumb','Edit Staff');
   $usr 		= new General;
     
     $Fields 	= "first_name,last_name,email,user_name,password,company_name,city";
$Where 		= "user_id = '".$_REQUEST['id']."'";
$Projects	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
//echo '<pre>';print_r($Projects[0]);exit;

       if(isset($_POST['submitBtn1']) && $_POST['submitBtn1'] == "Submit") {
   //echo "<pre>";print_r($_REQUEST);exit;
     
     $error = '';
        $id  = addslashes(trim($_POST['hid_key']));
        
          if(isset($id)) {
        
           
            //$invoice=new Invoice($conn, $id);
            $PrFields['first_name']  = addslashes(trim($_POST['Log']['first_name']));
            $PrFields['last_name']  = addslashes(trim($_POST['Log']['last_name']));
            $PrFields['email']  = addslashes(trim($_POST['Log']['email']));
            $PrFields['user_name']  = addslashes(trim($_POST['Log']['user_name']));
            $PrFields['password']  = base64_encode($_POST['Log']['password']);
            //$PrFields['company_name']  = addslashes(trim($_POST['Log']['company_name']));
            //$PrFields['city']  = addslashes(trim($_POST['Log']['city']));
           
            if($PrFields['first_name']    == '')
                    $error  = "First Name can not be empty";
            elseif($PrFields['last_name']   == '')	
                    $error  = "Last Name can not be empty";
            elseif($PrFields['email']   == '')	
                    $error  = "Email can not be empty";
            elseif($PrFields['user_name']   == '')	
                    $error  = "User Name can not be empty";
            elseif($PrFields['password']  == '')	
                    $error  = "Password can not be empty";
            //elseif($PrFields['company_name']   == '')	
                  //  $error  = "Company Name can not be empty";
            //elseif($PrFields['city']   == '')	
                   // $error  = "City can not be empty";
            else {
         
                        //$PrFields = $_REQUEST['Log'];
                       //echo '<pre>';print_r($PrFields);exit;
                        $UpOverview = $Gen->UpdateQry("tbl_users",$PrFields,"user_id = ".$_REQUEST['id']);
                        
                       $error = 'Updated sucessfully';
                       echo '<script type="text/javascript">location.reload();</script>'; 
		}	
	}
   } 
    $smarty->assign('Page',$Page);
$smarty->assign('users',$Users);
$smarty->assign('Projects',$Projects[0]);
$smarty->assign('error',$error);

$smarty->display('edit-staff-demo.tpl');
     
?>



