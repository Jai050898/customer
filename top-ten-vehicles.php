<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Top Ten Vehicles');
    $usr    = new General;
    $Page = "customers";
    $smarty->assign('Page',$Page);
    
    /********** To get topten makes ***********/
    
    $Where      = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    $Where1     = $Where." AND make!='' AND make!='0' AND make!='-1'  GROUP BY make ORDER BY makeCnt DESC LIMIT 0 , 10 ";
    $topten_makes = $usr->GetSelWhere("XML_vehicle","make, count(make) as makeCnt",$Where1);
    //echo '<pre>';print_r($topten_makes);
    
    $Where1 = $Where." AND model!='' AND model!='0' AND model!='-1'  GROUP BY model ORDER BY modelCnt DESC LIMIT 0 , 10 ";
    $topten_models = $usr->GetSelWhere("XML_vehicle","model, count(model) as modelCnt ",$Where1);	 
    //echo '<pre>';print_r($topten_models);exit;
    
    $mixedArray = array();
    if(!empty($topten_makes)) {
        foreach($topten_makes as $key=>$makes){
            $mixedArray[$key]['make'] = $makes['make'];
            $mixedArray[$key]['makeCnt'] = $makes['makeCnt'];
        }
    }
    
    if(!empty($topten_models)) {
        foreach($topten_models as $key=>$models){
            $mixedArray[$key]['model'] = $models['model'];
            $mixedArray[$key]['modelCnt'] = $models['modelCnt'];
        }
    }
    
    //echo "<pre>";print_r($mixedArray);exit;
    $smarty->assign('vehicle', $mixedArray);
    $smarty->display('top-ten-vehicles.tpl');
?>
    
    

