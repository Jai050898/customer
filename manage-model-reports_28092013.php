<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    /********** BY CUSTOMER ZIPCODES ***********/
    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    // get Vehicles of Logged in Company
    $modelsAry = array();
    $Where1 = $Where." AND model!='' AND model!='0' AND model!='-1'  GROUP BY model";
    $modelsAry = $usr->GetSelWhere("XML_vehicle","model",$Where1);
    
    $modelArray = array();
    foreach($modelsAry as $models) {
        $modelArray[] = $models['model'];
    }
    
    $vehicleArray = array();
    $year = date('Y');

    foreach($modelArray as $key=>$model) {
            
            $totalVehiclesAll   = 0;
            $totalVehiclesYear  = 0;
            $vehiAry    = array();
            $vehiIdsArray  = array();

            //to get Vehicles of by Models
            $Where3 = $Where." AND model = '".$model."'";
            $vehiAry    = $usr->GetSelWhere("XML_vehicle","vehicle_id",$Where3);
            $vehiIdsArray['model'] = $model;

             foreach($vehiAry as $vehi){
                $vehiIdsArray['vehicle_ids'][] = $vehi['vehicle_id'];
            }
            
            // Get details from RO table
            $vehiIds    = implode(',', $vehiIdsArray['vehicle_ids']);
            $Where2     = $Where." AND vehicle_id IN (".$vehiIds.") AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
            $totalVehiclesYear = $usr->TotalRows("XML_ro",$Where2);
            
            
            
            $Where3     = $Where." AND vehicle_id IN (".$vehiIds.") AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
            $totalVehiclesAll = $usr->TotalRows("XML_ro",$Where3);
            
            $vehicleArray[$key]['model'] = $model;
            $vehicleArray[$key]['yearTotal'] = $totalVehiclesYear;
            $vehicleArray[$key]['allTotal'] = $totalVehiclesAll;
        }
    //echo "<pre>";print_r($vehicleArray);exit;
    
    $smarty->assign('vehicle', $vehicleArray);
    $smarty->display('manage-model-reports.tpl');
?>