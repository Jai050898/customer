<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr    = new General;
    $page = 'customers';
    $smarty->assign('Page',$page);
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
    
    if($m < 10 && strlen($m) < 2){
        $m = "0".$m;
    }  
               
	$Events = array();
	$totalcustomers=array();
	$dateSearchArr=array();
	$newCustArray   = array();
	$dataArray          = array();
    	$year               = $_REQUEST['year'];
$adv_data=array();
$advisors =array();
$data2Array=array();
   	        // to get ALL  advisor Ids from RO table 
                $where_date = "company_id = '".$_SESSION['User']['xml_id']."'  GROUP BY enteredby";
                $advisorsArray	= $usr->GetSelWhere("XML_ro","enteredby",$where_date);
                $ad =1;
		foreach($advisorsArray as $advisors_id){
		 $adv_id = $advisors_id['enteredby'];
		
		$adv_data[$ad]['advisors']=$adv_id;
			//check each adivosr ro in every month in year.
			 for($i=1;$i<=12;$i++){
         		 $dataArray[$i]['Month']   = date('F',strtotime(date('Y-m-d',strtotime($y."-".$i."-01"))));
					 // To Get advisors data
				      $Where_cust = " company_id = '".$_SESSION['User']['xml_id']."' AND enteredby= '".$adv_id."' AND YEAR(transaction_date) = '".$y."' AND MONTH(transaction_date) = '".$i."' GROUP BY enteredby";
				      $adv  = $usr->GetSelWhere("XML_ro","enteredby,count(enteredby) as advCnt",$Where_cust);  
				    
				if(isset($adv) && count($adv)>0){
				foreach($adv as $adv_info){
					$data2Array[$ad][$i]['ro']=$adv_info['advCnt'];				
				        $data2Array[$ad][$i]['advisor']=$adv_info['enteredby'];
				}
				}else{
					$data2Array[$ad][$i]['ro']=0;				
				        $data2Array[$ad][$i]['advisor']=$adv_id;
				}
				
				
				 
				//print_r($data2Array);
        		 }
$ad++;
		}
   
   

    
    $dateMonth = date('Y',mktime(0,0,0,$m,1,$y));
    
    $array1 = array("0","1","2","3","4","5");
    $array2 = array("0","1","2","3","4","5","6");
  
//echo '<pre>';print_r($data2Array);  




    
    $smarty->assign("array1",$array1);
    $smarty->assign("array2",$array2);
    $smarty->assign("dateMonth",$dateMonth);
    $smarty->assign("m",$m);
    $smarty->assign("y",$y);
    $smarty->assign("cal",$cal);
 $smarty->assign("dataArray",$dataArray);
//  $smarty->assign("advsr_dataArray",$adv_data); 
   $smarty->assign("data2Array",$data2Array); 
   
    $smarty->display('advisor-report-yearly.tpl');
?>

