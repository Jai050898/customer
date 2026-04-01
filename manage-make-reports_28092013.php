<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    /********** BY CUSTOMER ZIPCODES ***********/
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    // get Vehicles of Logged in Company
    $makesAry = array();
    $Where1 = $Where." AND make!='' AND make!='0' AND make!='-1'  GROUP BY make";
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
    
    $smarty->assign('vehicle', $vehicleArray);
    $smarty->display('manage-make-reports.tpl');
?>