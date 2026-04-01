<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr    = new General;
    
    $smarty->assign('breadcrumb','Manage Customer Calender');

    $scriptname = $_SERVER['SCRIPT_NAME'];
    $cal	= array(
                            array('','','','','','',''),
                            array('','','','','','',''),
                            array('','','','','','',''),
                            array('','','','','','',''),
                            array('','','','','','',''),
                            array('','','','','','','')
                    );
    
    $y=date('Y');
    $m=date('m');
    if(isset($_REQUEST['act']) && $_REQUEST['act']==1)
    {	
        $y=$_REQUEST['year'];
        $m=$_REQUEST['month'];
        if($m==1) {
                $y=$y-1;
                $m=12;
        } else {
            $m=$m-1;
        }
    } elseif(isset($_REQUEST['act']) && $_REQUEST['act']==2) {	
        $y=$_REQUEST['year'];  
        $m=$_REQUEST['month'];
        if($m==12) {
            $y=$y+1;
            $m=1;
        } else {
            $m=$m+1;
        }
    } elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 3) {	
            $y=$_REQUEST['year']-1;
            $m=$_REQUEST['month'];
    } elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 4) {	
            $y=$_REQUEST['year']+1;
            $m=$_REQUEST['month'];
    } elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 0 && $_REQUEST['act'] != '') {
            $y=$_REQUEST['year'];
            $m=$_REQUEST['month'];
    }
    
    $Events = array();
    $start=date('w',mktime(0,0,0,$m,1,$y));
    $t = $days=date('t',mktime(0,0,0,$m,1,$y));
    $day=date('d');
    $k=1;
    for($i=0;$i<6;$i++)
    {
        for($j=0;$j<7;$j++) {
            if($i==0&&$j<$start) { continue; }
            if ($k<=$days) {
                $cal[$i][$j]    =$k;
                $k++;
                
                if($cal[$i][$j] <= 9)
                    $cal[$i][$j]    = "0".$cal[$i][$j];
                
                // to get customer Ids from RO table between the time span Specified
                $where_date = "company_id = '".$_SESSION['User']['xml_id']."' AND transaction_date > '".date($y.'-'.$m.'-'.$cal[$i][$j].' 00:00:00')."' AND transaction_date <= '".date($y.'-'.$m.'-'.$cal[$i][$j].' 23:59:59')."' GROUP BY cust_id";
                $dateSearchArr		= $usr->GetSelWhere("XML_ro","cust_id",$where_date);
                $dateCust   = array();
                if(!empty($dateSearchArr)){
                    foreach($dateSearchArr as $cust){
                        $dateCust[] = $cust['cust_id'];
                    }
                    $dateCustIds    = implode(',',$dateCust);
                    $where .= " AND cust_id IN (".$dateCustIds.")";

                    $Where_cust = " company_id = '".$_SESSION['User']['xml_id']."' AND cust_id IN (".$dateCustIds.") AND MIS_coordinates != ''";
                    $dateCustCnt    = $usr->TotalRows("XML_customers", $Where_cust);
                    $Events[]   = $dateCustCnt;
                } else {
                    $Events[]   = 0;
                }
                
            }
        }
    }
    //echo "<pre>";print_r($Events);exit;
    
    $dateMonth = date('F',mktime(0,0,0,$m,1,$y))." - ".date('Y',mktime(0,0,0,$m,1,$y));
    
    $array1 = array("0","1","2","3","4","5");
    $array2 = array("0","1","2","3","4","5","6");
    
    $smarty->assign("array1",$array1);
    $smarty->assign("array2",$array2);
    $smarty->assign("dateMonth",$dateMonth);
    $smarty->assign("m",$m);
    $smarty->assign("y",$y);
    $smarty->assign("cal",$cal);
    $smarty->assign('custCnts',$Events);
    $smarty->display('customer-calender.tpl');
?>
