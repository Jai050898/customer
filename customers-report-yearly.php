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
   /* if(!isset($_REQUEST['year']) && empty($_REQUEST['year'])){
        $y =date('Y');
    }*/
   	    
   	   
    for($i=1;$i<=12;$i++){
         $dataArray[$i]['Month']   = date('F',strtotime(date('Y-m-d',strtotime($y."-".$i."-01"))));
    
          // to get customer Ids from RO table between the time span Specified
                $where_date = "company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$y."' AND MONTH(transaction_date) = '".$i."' GROUP BY cust_id,id";
                
                $dateSearchArr		= $usr->GetSelWhere("XML_ro","cust_id",$where_date);
                
                $dateCust   = array();
                if(!empty($dateSearchArr)){
                    
                   $dataArray[$i]['Events']   = count($dateSearchArr);

                    foreach($dateSearchArr as $cust){ 
                        $dateCust[$i] = $cust['cust_id'];
                    }
                    $dateCustIds    = implode(',',$dateCust);
                    $Where_cust = " company_id = '".$_SESSION['User']['xml_id']."' AND cust_id IN (".$dateCustIds.") GROUP BY cust_id,id";
                  
                    
                    
                    // To Get New Customer Count for the day
                    $Where_cust = " company_id = '".$_SESSION['User']['xml_id']."'AND YEAR(reg_date) = '".$y."' AND MONTH(reg_date) = '".$i."' ";
                    $datenewCustCnt[$i]    = $usr->TotalRows("XML_customers", $Where_cust);
                   
                    $dataArray[$i]['newCustArray']   = $datenewCustCnt[$i];

                    
                   
    		  } else {
                    $dataArray[$i]['Events']   = 0;
                    $dataArray[$i]['newCustArray'] = 0;
                } 
$dataArray[$i]['repeated_cust']= $dataArray[$i]['Events']-$dataArray[$i]['newCustArray'];
    }
   

    
    
    
    $dateMonth = date('Y',mktime(0,0,0,$m,1,$y));
    
    $array1 = array("0","1","2","3","4","5");
    $array2 = array("0","1","2","3","4","5","6");
    
    
    function GetSelWhere($tbl_name,$selFields,$where)
	{
            if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                    //echo "<pre>";print_r($_REQUEST);
                   // echo '<br>'.$tbl_name.'<br>'.$selFields.'<br>'.$where.'<br>';exit;
                }
            
		//insert ',' between the field names
		if(is_array($selFields))
			$fields = @implode(',',$selFields);
		else
			$fields = $selFields;
		$qry = "SELECT ".$fields." FROM ".$tbl_name;
		if(isset($where) && $where != '')
			$qry .= " WHERE ".$where;
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                  //  echo "<pre>";print_r($_REQUEST);
                    //echo '<br>'.$qry.'<br>';//exit;
                }
		echo '<br>'.$qry;
		
	}
    
    
    
    $smarty->assign("array1",$array1);
    $smarty->assign("array2",$array2);
    $smarty->assign("dateMonth",$dateMonth);
    $smarty->assign("m",$m);
    $smarty->assign("y",$y);
    $smarty->assign("cal",$cal);
 $smarty->assign("dataArray",$dataArray);
   
    $smarty->display('customers-report-yearly.tpl');
?>
