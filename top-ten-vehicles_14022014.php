<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Top Ten Vehicles');
    $usr    = new General;
    $Page = "customers";
    $smarty->assign('Page',$Page);
    
    /********** To get topten makes ***********/
    
    $Where      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    $Where1     = $Where." AND make!='' AND make!='0' AND make!='-1'  GROUP BY make DESC LIMIT 0 , 10 ";
    $topten_makes = $usr->GetSelWhere("XML_vehicle","make",$Where1);
    //echo '<pre>';print_r($topten_makes);
    
    $Where1 = $Where." AND model!='' AND model!='0' AND model!='-1'  GROUP BY model DESC LIMIT 0 , 10 ";
    $topten_models = $usr->GetSelWhere("XML_vehicle","model",$Where1);	 
    //echo '<pre>';print_r($topten_models);exit;
    
    $mixedArray = array();
    if(!empty($topten_makes)) {
        foreach($topten_makes as $key=>$makes){
            $mixedArray[$key]['make'] = $makes['make'];
        }
    }
    
    if(!empty($topten_models)) {
        foreach($topten_models as $key=>$models){
            $mixedArray[$key]['model'] = $models['model'];
        }
    }
    
    //echo "<pre>";print_r($mixedArray);exit;
    $smarty->assign('vehicle', $mixedArray);
    $smarty->display('top-ten-vehicles.tpl');
?>
    
    

