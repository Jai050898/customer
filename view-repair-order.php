<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','View Repair Order');
    
    
    // To Get Ro Details
    $roArray    = array();
    $Where      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND ro_id = '".$_REQUEST['ro_id']."' GROUP BY ro_id";
    $roArray    = $usr->GetSelWhere("XML_ro","*",$Where);
     $roArray[0]['transactiontotal'];
    $roArray[0]['paidAmt']  = $roArray[0]['transactiontotal']-$roArray[0]['balancedue'];
    /** tansaction = laboramts+partsamt - manger_charges**/
     /** debit/ credit manager charges Disc/Adj *
    if($roArray[0]['manager_Charges'] >=0){
        $roArray[0]['transactiontotal'] = $roArray[0]['transactiontotal']+$roArray[0]['manager_Charges'];
    }else if($roArray[0]['manager_Charges'] <0){
        $debit_val= ltrim ($roArray[0]['manager_Charges'],'-');
        $roArray[0]['transactiontotal'] = $roArray[0]['transactiontotal']-$debit_val;
    }
  */ 
    
    
    // To Get Customer Details
    $custArray    = array();
    $Where1      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$roArray[0]['cust_id']."' GROUP BY cust_id";
    $custArray    = $usr->GetSelWhere("XML_customers","*",$Where1);
    
    // To Get Vehicle Details
    $vehiArray    = array();
    $Where2      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$roArray[0]['cust_id']."' GROUP BY cust_id";
    $vehiArray    = $usr->GetSelWhere("XML_vehicle","*",$Where2);
    
    // To get RO Details for an RO.
    $roDetailsArray    = array();
    $Where3      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND ro_id = '".$_REQUEST['ro_id']."'  GROUP BY transactiondetailextid";
    $roDetailsArray    = $usr->GetSelWhere("XML_ro_details","*",$Where3);
    
     //echo "<pre>";
        //print_r($_SESSION);
        //print_r($custArray); 
        //print_r($vehiArray);
        //print_r($roArray);
        //print_r($roDetailsArray);
    //exit; 
        
    foreach($roDetailsArray as $key=>$rodet){
        $roDetailsArray[$key]['subTotal'] = $rodet['laboramount'] + $rodet['partsamount'] + $rodet['taxamount']+ $rodet['hazardwasteamount'] + $rodet['shopsuppliesamount'];
    }
    
    
    $smarty->assign("custArray",$custArray[0]);
    $smarty->assign("vehiArray",$vehiArray[0]);
    $smarty->assign("roArray",$roArray[0]);
    $smarty->assign("roDetailsArray",$roDetailsArray);
    
    $smarty->display('view-repair-order.tpl');
    
    
    
?>
