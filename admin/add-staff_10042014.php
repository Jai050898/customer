<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
    $smarty->assign("Page","customers");
 $smarty->assign('breadcrumb','Add Staff');
   $usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) &&  $_REQUEST['hid_key'] !='')
{
				$PoFields = array();
				$PoFields['first_name'] = $_REQUEST['Log']['first_name'];
				$PoFields['last_name'] = $_REQUEST['Log']['last_name'];
				$PoFields['email'] = $_REQUEST['Log']['email'];
				$PoFields['user_name'] = $_REQUEST['Log']['user_name'];
				$PoFields['password'] = $_REQUEST['Log']['password'];
                              //  $PoFields['company_name'] = $_REQUEST['hid_company'];
                              //  $PoFields['city'] = $_REQUEST['hid_city'];
                                $PoFields['is_staff'] = 'Y';
                                $PoFields['xml_id'] = $_REQUEST['hid_key'];
                                if($error == "") {
                                    $UnameCnt = $Gen->TotalRows('tbl_users',"user_name = '".$PoFields['user_name']."' AND user_id != '".$_REQUEST['user_id']."' ");
                                    //echo $UnameCnt;
                                     //get customer city and shop name;
                                        $Fields 	= "company_name,city";
                                        $Where 		= "user_id = '".$_REQUEST['hid_key']."'";
                                        $customer_data = $Gen->GetSelWhere("tbl_users",$Fields,$Where);
                                        $PoFields['company_name'] = $customer_data[0]['company_name'];
                                        $PoFields['city'] = $customer_data[0]['city'];
                                                if($UnameCnt == 0){
                                                  $insItems	= $Gen->InsertQry('tbl_users',$PoFields);
                                                    $error ="Inserted sucessfully";  
                                                    } 
                                }
                                else{
                                    $error ="user name already exists.";
                                    
                                }
                                        
                                                               
                                
 
	//header("Location:".SITEURL.'/add-staff.php');
}
$smarty->assign('Page',$Page);
$smarty->assign('error',$error);
$smarty->display('add-staff.tpl');
?>
