<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Model Years');
    $usr    = new General;
    $Page = "customers";
    $smarty->assign('Page',$Page);
    
    $dataArray          = array();
    $currentYear        = date('Y');
    $lastYear           = $currentYear-30;
    $noYears = 0;
    for($i=$currentYear;$i>=$lastYear;$i--){
        $dataArray[$i]['Year']   = $i;
        
        // total models by year
        $modelArray     = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND year = '".$i."' group by vehicle_id";
        $Fields         = " vehicle_id";
        $Table		= "XML_vehicle";
        $modelArray	= $usr->GetSelWhere($Table, $Fields, $Where);
        $newAry = array();
        if(!empty($modelArray)) {
            
            $dataArray[$i]['modelTotalCnt']   = count($modelArray);
            
            // to get All Vehicle Ids
            foreach($modelArray as $model){
                $newAry[]   = $model['vehicle_id'];
            }
            
            $vehicleIds = implode(',', $newAry);

            //Vehicle Ids for Last Visited  in 12 Months
            $last12MonthsDate   = date("Y-m-d h:i:s", strtotime("-12 months", strtotime(date('Y-m-d h:i:s'))));
            $currentDate        = date("Y-m-d h:i:s");
            $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND vehicle_id IN (".$vehicleIds.") AND (transaction_date > '".$last12MonthsDate."' AND transaction_date <= '".$currentDate."') AND status = 'A' group by vehicle_id";
            //$vehicleCnt	= $usr->TotalRows("XML_ro",$Where);
             $vehicleCnt	= $usr->GetAllWhere("XML_ro",$Where);
             
            //if($i=='2013'){
              //     $vehicleCnt	= TotalRows("XML_ro",$Where);
            //
            //} 
            $dataArray[$i]['last12MonthsVehicleCnt']   = count($vehicleCnt);
            
        } else {
            
            $dataArray[$i]['modelTotalCnt']   = 0;
            $dataArray[$i]['last12MonthsVehicleCnt']   = 0;
            
        }
        
      }
    //SELECT count(model) FROM `XML_vehicle` where company_id=22 and year=2010
    //echo "<pre>";print_r($dataArray);exit;
    $smarty->assign('vehicle', $dataArray);
    $smarty->display('model-years.tpl');
    
    function TotalRows($tbl,$where=1)
	{
		$wherelist = NULL;
		if(isset($where))
		{
			if(is_array($where))
			{
				reset($where);
				while(list($k,$v)=each($where))
					$wherelist[]=$k." = '".$v."'";				
			}
			else
				$condition = $where;				
		}
		else
			$condition = 1;
		if(is_array($wherelist))
				$condition.=implode(" and ",$wherelist);				
	echo	$qry = "SELECT COUNT(*) as cnt FROM ".$tbl." WHERE ".$condition;
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.154'){
                    echo '<br>'.$qry.'<br>';//exit;
                }
		//echo '<br>';
		
	}
?>