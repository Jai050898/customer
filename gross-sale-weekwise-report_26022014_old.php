<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign("Page","MyAccount");
    $usr    = new General;
    
    $currentYear    = date('Y');
    $endingYear     = $currentYear-16;
    $allArray       = array();
    for($i=$endingYear; $i <= $currentYear; $i++) {
        $allArray[$i]['Year']   = $i;
        $allArray[$i]['WeekCnt']    = date("W", mktime(0,0,0,12,28,$i));
        $allArray[$i]['WeekDay']   = date("D", strtotime($i."-01-01"));
        for($j=1;$j<=12;$j++) {
            
            $timestamp = mktime(0,0,0,$j,1,$i);
            
            $maxday = date("t",$timestamp);
            //$days_in_month  = cal_days_in_month(CAL_GREGORIAN,$j,$i);
            
            $thismonth = getdate ($timestamp);
            $startday = $thismonth['wday'];
            
            $allArray[$i]['MonthAry'][$j]['MonthId']    = $j;
            $allArray[$i]['MonthAry'][$j]['MaxDay']    = $maxday;
            //$allArray[$i]['MonthAry'][$j]['ThisMonth']    = $thismonth;
            $allArray[$i]['MonthAry'][$j]['StartDay']    = $startday;
            
            //$allArray[$i]['MonthAry'][$j]['DaysInMonth']    = $maxday;
            
            $monthArray     = array();
            for($k=1;$k<=$maxday;$k++) {
                $a  = $j;
                if($j <= 9) {
                    $a  = "0".$j;
                }
                
                $b = $k;
                if($k <= 9) {
                    $b  = "0".$k;
                }
                $monthArray[$k]['date']  = $i."-".$a."-".$b;
                //$allArray[$i]['WeekDay']   = date("D", strtotime($monthArray[$k]));
                
                // To Calculate Average RO
                $roArray    = array();
                $roArray    = $Gen->GetSelWhere('XML_ro', 'sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross', "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND DATE(transaction_date) = '".$monthArray[$k]['date']."'");
                
                $roSum  =  0;
                $totalRO    = 0;
                $avgRO  = 0;
                
                if(count($roArray) > 0 && $roArray[0]['gross']){
                    
                    $totalRO    = count($roArray);
                    foreach($roArray as $RO) {
                        $roSum+= $RO['gross'];
                    }
                    
                    
                    
                    if($totalRO != 0) {
                        $avgRO  = $roSum / $totalRO;
                    }
                }
                $monthArray[$k]['totalRO'] = $totalRO;
                $monthArray[$k]['avgRO'] = $avgRO;
                $monthArray[$k]['color'] = 'black';
                //echo "<pre>";print_r($roArray);exit;                
            }
            $allArray[$i]['MonthAry'][$j]['DaysAry']  = $monthArray;
        }
    }
    
    
    if($_SERVER['REMOTE_ADDR'] == '182.72.88.155') {
    
        // Sort 
       function sortByOrder($a, $b) {
            return $a['avgRO'] - $b['avgRO'];
        }

        usort($allArray, 'sortByOrder');       
        echo "<pre>";print_r($allArray);exit;
        
    }
    
    
    //echo "<pre>";print_r($weekAry);exit;
    krsort($allArray);
    //echo "<pre>";print_r($allArray);exit;
    $smarty->assign("dataArray",$allArray);
    $smarty->display('gross-sale-weekwise-report.tpl');

?>
