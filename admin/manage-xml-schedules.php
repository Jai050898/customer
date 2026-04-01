<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    
    $Where		= "1=1 ";
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND S.schedulecustomer like '%".$_REQUEST['keyword']."%' OR S.scheduleextid like '%".$_REQUEST['keyword']."%' OR S.estimatedhours like '%".$_REQUEST['keyword']."%'";	
    }
//    $Table		= " XML_schedule S LEFT JOIN XML_vehicle V ON S.vehicle_id = V.vehicle_id";
//    $Fields		= "S.id, S.ro_id, S.scheduleextid, S.cust_id, S.vehicle_id, V.name, S.scheduledate, S.schedulecustomer, S.estimatedhours";
    
    $Table		= " XML_schedule S";
    $Fields		= "S.id, S.ro_id, S.scheduleextid, S.cust_id, S.vehicle_id, S.scheduledate, S.schedulecustomer, S.estimatedhours";

    $Where .= " GROUP BY S.scheduleextid";
    $total_temp		= $usr->GetSelWhere($Table,'count(id) as cnt', $Where);
    $total              = count($total_temp);
    $limit		= 25;
    $pageNum 	= 1; 		
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    
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
    $SortBy		= " id ".$getSort;

    if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
        $SortBy = $_REQUEST['sortby'] . " " . $getSort;
    }

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    foreach($Users as $k=>$user){
        
        // To Fetch Vehicle Details
        $vehicleArray   = array();
        $vehicleArray = $usr->GetSelWhere("XML_vehicle","name"," vehicle_id = '".$user['vehicle_id']."'");
        $Users[$k]['name']  = $vehicleArray[0]['name'];
    }
    
    $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
    include('../includes/generate_pages.php');
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    //echo "<pre>";print_r($Users);exit;
    $smarty->display('manage-xml-schedules.tpl');
?>