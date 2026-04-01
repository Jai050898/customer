<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
    $smarty->assign("Page","customers");
 $smarty->assign('breadcrumb','Add Staff');
   $usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{

				$PoFields = array();
				$PoFields['first_name'] = $_REQUEST['Log']['first_name'];
				$PoFields['last_name'] = $_REQUEST['Log']['last_name'];
				$PoFields['email'] = $_REQUEST['Log']['email'];
				$PoFields['user_name'] = $_REQUEST['Log']['user_name'];
				$PoFields['password'] = $_REQUEST['Log']['password'];
                                $PoFields['company_name'] = $_REQUEST['Log']['company_name'];
                                $PoFields['city'] = $_REQUEST['Log']['city'];

                                $PoFields['is_staff'] = 'Y';
    
                                if($error == "") {
                                    $UnameCnt = $Gen->TotalRows('tbl_users',"user_name = '".$PrFields['user_name']."' AND user_id != '".$_REQUEST['user_id']."'   AND status IN ('A','I')");
                                                if($UnameCnt == 0){}
                                        //echo '<pre>';print_r($_REQUEST);exit;
                                }                                //echo "<pre>";print_r($PoFields);exit;

                                $insItems	= $Gen->InsertQry('tbl_users',$PoFields);
		

	//header("Location:".SITEURL.'/add-staff.php');
}
$smarty->assign('error',$error);
$smarty->display('add-staff.tpl');
?>
