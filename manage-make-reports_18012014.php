<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $Page = 'daily';
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    /********** BY CUSTOMER ZIPCODES ***********/
    $Where      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    $Where1     = $Where." AND make!='' AND make!='0' AND make!='-1'  GROUP BY make";
    $total_temp = $usr->GetSelWhere("XML_vehicle","make",$Where1);
    $total      = count($total_temp);
    
    $limit	= 25;
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
    $SortBy		= " cust_id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		
    
    $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
        // get Vehicles of Logged in Company
    $makesAry = array();
    $makesAry = $usr->GetSelWhere("XML_vehicle","make",$Where1);
    
    
    $makeArray = array();
    foreach($makesAry as $makes) {
        $makeArray[] = $makes['make'];
    }
    
    $vehicleArray = array();
    $year = date('Y');

    foreach($makeArray as $key=>$make) {

        $totalVehiclesAll   = 0;
        $totalVehiclesYear  = 0;
        $vehiAry    = array();
        $vehiIdsArray  = array();

        //to get Vehicles of by Models
        $Where3 = $Where." AND make = '".$make."'";
        $vehiAry    = $usr->GetSelWhere("XML_vehicle","vehicle_id",$Where3);
        $vehiIdsArray['make'] = $make;

         foreach($vehiAry as $vehi){
            $vehiIdsArray['vehicle_ids'][] = $vehi['vehicle_id'];
        }

        // Get details from RO table
        $vehiIds    = implode(',', $vehiIdsArray['vehicle_ids']);
        $Where2     = $Where." AND vehicle_id IN (".$vehiIds.") AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
        $totalVehiclesYear = $usr->TotalRows("XML_ro",$Where2);

        $Where3     = $Where." AND vehicle_id IN (".$vehiIds.") AND status = 'A'";
        $totalVehiclesAll = $usr->TotalRows("XML_ro",$Where3);

        $vehicleArray[$key]['make'] = $make;
        $vehicleArray[$key]['yearTotal'] = $totalVehiclesYear;
        $vehicleArray[$key]['allTotal'] = $totalVehiclesAll;

    }
    //echo "<pre>";print_r($vehicleArray);exit;
    
    $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    $smarty->assign('Page',$Page);
    
    $smarty->assign('vehicle', $vehicleArray);
    $smarty->display('manage-make-reports.tpl');
?>