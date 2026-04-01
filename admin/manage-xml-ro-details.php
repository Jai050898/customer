<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    
    $Where		= "1=1 ";
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
            $Where .= " AND RD.company_id = '".$_REQUEST['user_id']."'";	
    }
    if(isset($_REQUEST['ro_id']) && $_REQUEST['ro_id']!='') {
            $Where .= " AND RD.ro_id = '".$_REQUEST['ro_id']."'";	
    }
//    $Table		= " XML_ro_details RD 
//                            LEFT JOIN XML_ro R ON RD.ro_id =R.ro_id  
//                            LEFT JOIN XML_customers C ON R.cust_id = C.cust_id 
//                            LEFT JOIN XML_vehicle V ON V.vehicle_id = R.vehicle_id";
//    $Fields		= "RD.id, RD.ro_id, C.cust_id, C.fullname, V.vehicle_id, V.name, RD.transactiondetailextid, RD.unitquantity, RD.unitcost, RD.unitsale, RD.extendedcost, RD.extendedsale, RD.laborhours, RD.transactiondetailextid";
    
    $Table		= " XML_ro_details RD ";
    $Fields		= "RD.id, RD.ro_id, RD.transactiondetailextid, RD.unitquantity, RD.unitcost, RD.unitsale, RD.extendedcost, RD.extendedsale, RD.laborhours, RD.transactiondetailextid";
    

    $Where .= " GROUP BY RD.transactiondetailextid";
    if($_SERVER['REMOTE_ADDR'] == '182.72.66.214'){
        //echo $Where;exit;
    }
    $total_temp		= $usr->GetSelWhere($Table,$Fields, $Where);
    $total              = count($total_temp);
    $limit		= 25;
    $pageNum 	= 1; 		
    
    if (isset($_REQUEST['page']) && $_REQUEST['page'] != '') {
        $pageNum = $_REQUEST['page'];
    }

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
        $pageNum = 1;    
    }
    
    $offset 	= ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
     if($_REQUEST['sortoption']=='' ||  $_REQUEST['sortoption']=='desc') {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_REQUEST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " RD.id ".$getSort;

    if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
        $SortBy = $_REQUEST['sortby'] . " " . $getSort;
    }

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    
    //echo "<prE>";print_r($Users);exit;
    
    foreach($Users as $k=>$user){
        
        // To Fetch RO Array
        $roArray   = array();
        $roArray = $usr->GetSelWhere("XML_ro","vehicle_id, cust_id"," ro_id = '".$user['ro_id']."'");
        //echo "<pre>";;print_r($roArray);exit;
        $Users[$k]['vehicle_id']  = $roArray[0]['vehicle_id'];
        
        
        // To Fetch Vehicle Details
        $vehicleArray   = array();
        $vehicleArray = $usr->GetSelWhere("XML_vehicle","vehicle_id, name"," vehicle_id = '".$roArray[0]['vehicle_id']."' AND make !=''");
        
        $Users[$k]['name']  = $vehicleArray[0]['name'];
        $Users[$k]['vehicle_id']  = $vehicleArray[0]['vehicle_id'];
        
        // To Fetch Customer Details
        $custArray   = array();
        $custArray = $usr->GetSelWhere("XML_customers","cust_id, fullname"," cust_id = '".$roArray[0]['cust_id']."'");
        
        $Users[$k]['fullname']  = $custArray[0]['fullname'];
        $Users[$k]['cust_id']  = $custArray[0]['cust_id'];
        //echo "<pre>";print_r($custArray);exit;
    }
    
    $srcpath 	= "sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&ro_id=".$_REQUEST['ro_id']."&page=";
    include('../includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    $smarty->assign('Users',$Users);
    //echo "<pre>";print_r($Users);exit;
    
    $smarty->display('manage-xml-ro-details.tpl');
?>