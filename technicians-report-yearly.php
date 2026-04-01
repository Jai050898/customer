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
$techs_data=array();
$advisors =array();
$data2Array=array();
   	        // to get ALL  advisor Ids from RO table 
                $where_date = "1=1 AND B.company_id = '".$_SESSION['User']['xml_id']."' AND technician!='***********'  GROUP BY A.technician";
                $techniciansArray	= $usr->GetSelWhere("XML_ro_details as A join XML_ro as B on A.ro_id=B.ro_id","A.technician",$where_date);
                $ad =1;
		foreach($techniciansArray as $tech_id){
		 $technician_id = $tech_id['technician'];
		
		$techs_data[$ad]['technician']=$technician_id;
			//check each adivosr ro in every month in year.
			 for($i=1;$i<=12;$i++){
         		 $dataArray[$i]['Month']   = date('F',strtotime(date('Y-m-d',strtotime($y."-".$i."-01"))));
					 // To Get advisors data
				      $Where_cust = " B.company_id = '".$_SESSION['User']['xml_id']."' AND A.technician= '".$technician_id."' AND YEAR(B.transaction_date) = '".$y."' AND MONTH(B.transaction_date) = '".$i."' GROUP BY technician";
				      $adv  = $usr->GetSelWhere("XML_ro_details as A join XML_ro as B on A.ro_id=B.ro_id","technician,sum(A.laborhours) as totalhrs",$Where_cust);  
				    
				if(isset($adv) && count($adv)>0){
				foreach($adv as $adv_info){
					$data2Array[$ad][$i]['hours']=$adv_info['totalhrs'];				
				        $data2Array[$ad][$i]['technician']=$adv_info['technician'];
				}
				}else{
					$data2Array[$ad][$i]['hours']=0;				
				        $data2Array[$ad][$i]['technician']=$technician_id;
				}
				
				
				 
				//print_r($data2Array);
        		 }
$ad++;
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
//echo '<pre>';print_r($data2Array);  




    
    $smarty->assign("array1",$array1);
    $smarty->assign("array2",$array2);
    $smarty->assign("dateMonth",$dateMonth);
    $smarty->assign("m",$m);
    $smarty->assign("y",$y);
    $smarty->assign("cal",$cal);
 $smarty->assign("dataArray",$dataArray);
  $smarty->assign("techs_dataArray",$techs_data); 
   $smarty->assign("data2Array",$data2Array); 
   
    $smarty->display('technicians-report-yearly.tpl');
?>

