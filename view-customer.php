<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");

    $usr = new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','View Customer');
    
    $User = array();
    $smarty->assign('User',$User[0]);
    
    $RODetails = array();
    $Where  = "1=1 AND C.company_id = '".$_SESSION['User']['xml_id']."' ";
    /*****section to get the details from data base*********************/
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
    {
            $Table  = "XML_customers C 
                            LEFT JOIN tbl_users U ON C.company_id = U.xml_id
                            LEFT JOIN XML_ro R ON C.cust_id = R.cust_id 
                            LEFT JOIN tbl_states S ON C.state = S.State_Code 
                      ";
            $Fields = "C.*, R.*, U.company_name, S.State_Name";
            $Where .= " AND C.cust_id = '".$_REQUEST['user_id']."'";
            $User = $usr->GetSelWhere($Table,$Fields,$Where);
            //echo '<pre>';print_r($User);exit;
            
            // RO Get All RO Details
            $tbl = "XML_ro";
            $fields = "*";
            $Where1 = " company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$User[0]['cust_id']."' order by transaction_date ASC";
            $RODetails = $usr->GetSelWhere($tbl,$fields,$Where1);   
            
            $lifetime_Spending_total = 0;
            foreach($RODetails as $key=>$ro) {
                $rototal = 0;
                $rototal += $ro['transactiontotal'];
                $RODetails[$key]['roDetailtotal']   = $rototal;
                $lifetime_Spending_total+= $rototal;
            }
            $User['0']['lifetimeSpendingTotal'] = $lifetime_Spending_total;
            $smarty->assign('User',$User[0]);
    }
    if($_SERVER['REMOTE_ADDR'] == '182.72.88.156'){
        //echo "<prE>";print_r($RODetails);exit;
    }
    $smarty->assign('RODetails',$RODetails);
    $smarty->display('view-customer.tpl');
?>
