<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    
    $User = array();
    $RODetails = array();
    
    /*****section to get the details from data base*********************/
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "") {
        $Table		= "XML_customers C 
                            LEFT JOIN tbl_users U ON C.company_id = U.xml_id
                            LEFT JOIN XML_ro R ON C.cust_id = R.cust_id 
                            LEFT JOIN tbl_states S ON C.state = S.State_Code 
                            ";
        $Fields		= "C.*, R.*, U.company_name, S.State_Name";
        $Where 		= "C.cust_id = '".$_REQUEST['user_id']."'";
        $User	= $usr->GetSelWhere($Table,$Fields,$Where);

        // RO Get All RO Details
        $tbl = "XML_ro_details";
        $fields = "*";
        $Where1 = " ro_id = '".$User[0]['ro_id']."'";
        $RODetails = $usr->GetSelWhere($tbl,$fields,$Where1);
        
        $total_extendedsale = '';
        foreach($RODetails as $ro) {
            $total_extendedsale += $ro['extendedsale'];
        }
        $User['0']['total_extendedsale'] = $total_extendedsale;
    }
    
    if(count($User) > 0){
        $smarty->assign('User',$User[0]);
    } else {
        $smarty->assign('User',$User);
    }
    $smarty->assign('RODetails',$RODetails);
    
    $smarty->display('view-xml-customer.tpl');
?>