<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;

    $Where  = "1=1 ";

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
             $Where .= " AND (R.odometerin like '%".$_REQUEST['keyword']."%' OR R.odometerout like '%".$_REQUEST['keyword']."%' OR R.ro_id like '%".$_REQUEST['keyword']."%')";
    }
    
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
            $Where .= " AND R.cust_id = '".$_REQUEST['user_id']."'";
    }
    $Where .= " GROUP BY R.ro_id";
    $total_temp  = $usr->GetSelWhere("XML_ro R","R.id",$Where);
    $total  = count($total_temp);
    
    $limit  = 25;
    $pageNum    = 1; 					
    
    if (isset($_REQUEST['page']) && $_REQUEST['page'] != '') {
        $pageNum = $_REQUEST['page'];
    }
    /* @var $offset type */
    $offset = ($pageNum - 1) * $limit;
    
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
    $SortBy = " R.id ".$getSort;

    if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
        $SortBy = $_REQUEST['sortby'] . " " . $getSort;
    }

//    $Table  = " XML_ro R 
//                        LEFT JOIN XML_customers C ON R.cust_id = C.cust_id 
//                        LEFT JOIN XML_vehicle V ON V.vehicle_id = R.vehicle_id";
//    $Fields = "R.id, R.ro_id, C.cust_id, C.fullname, V.vehicle_id, V.name, R.odometerin, R.odometerout, R.transaction_date, R.transactiontotal";
//    
//    $Where  .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
//    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    //, C.cust_id, C.fullname, V.vehicle_id, V.name
    
    $Table  = " XML_ro R";
    $Fields = "R.id, R.vehicle_id, R.cust_id, R.ro_id, R.odometerin, R.odometerout, R.transaction_date, R.transactiontotal";
    
    $Where  .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    foreach($Users as $k=>$user){
        $vehicleArray   = array();
        $vehicleArray = $usr->GetSelWhere("XML_vehicle","vehicle_id, name"," vehicle_id = '".$user['vehicle_id']."' AND make !=''");
        
        $Users[$k]['name']  = $vehicleArray[0]['name'];
        $Users[$k]['vehicle_id']  = $vehicleArray[0]['vehicle_id'];
        
        $custArray   = array();
        $custArray = $usr->GetSelWhere("XML_customers","cust_id, fullname"," cust_id = '".$user['cust_id']."'");
        
        $Users[$k]['fullname']  = $custArray[0]['fullname'];
        $Users[$k]['cust_id']  = $custArray[0]['cust_id'];
        //echo "<pre>";print_r($custArray);exit;
    }
    
    //echo "<pre>";print_r($Users);exit;
    $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
    include('../includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    $smarty->assign('Users',$Users);
    //echo "<pre>";print_r($Users);exit;
    $smarty->display('manage-xml-ros.tpl');
?>