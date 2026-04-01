<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    if(!isset($_SESSION['batch_list'])){
        $_SESSION['batch_list']=array();
    }
        
    $usr    = new General;
    $smarty->assign('breadcrumb','Export Customer Reports');
    
    $Page = "product";
    $smarty->assign('Page',$Page);
    $customerArray = array();
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
        if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != "" ) {
                  $sdate = $Gen->Date_Format($_REQUEST['sdate']);
                  $current_date =  $sdate;
        }else{
                  $current_date = date('Y-m-d');
        }
        
                     //uptp current date.
                    
                    $TotalWhr   .= "  AND created_date <= '".$current_date." 23:59:59'";
                    $Where1 = $Where.''.$TotalWhr."  GROUP BY technician ";
                    $total_temp =  $usr->GetSelWhere("XML_ro_details","technician",$Where1);
                    $total = count($total_temp);
                    $limit	= 25;
                    $pageNum = 1; 					

                    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
                    $pageNum = $_REQUEST['page'];
                    $offset 	= ($pageNum - 1) * $limit;

                    /*********** To Get the Count of Total Users in the Site ********/
                    if($_REQUEST['sortoption']=='' ||  $_REQUEST['sortoption']=='desc') {
                    $sortioption='asc';
                    $getSort='desc';	
                    $sortimoption='up';
                    $smarty->assign("sortoption",$_REQUEST['sortoption']);
                    } else {
                    $sortioption='desc';
                    $getSort='asc';	
                    $sortimoption='down';
                    }
                    $SortBy		= " technician ".$getSort;
                    $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

                    $custAry = array();
                    $custAry = $usr->GetSelWhere("XML_ro_details","technician",$Where1);

                  $current_date = $current_date;
                  
                    $custArray = array();
                    foreach($custAry as $cust) {
                        $custArray[] = $cust['technician'];
                    }
            
                    foreach($custArray as $key=>$cust){
                        $spent_wtotal=0;
                  $spent_dtotal=0;
                  $spent_mtotal=0;
                                       $technician_data[$key]['technician']=$cust;
                        for($i=0;$i<3;$i++){
                            if($i==0){

                            $currnt_stmp = strtotime($current_date);
                            $oneweek_stmp = strtotime('-1 week',$currnt_stmp);
                            $oneweek = date('Y-m-d',$oneweek_stmp);
                            $TotalWhr0 .= $TotalWhr." AND created_date >='".$oneweek." 00:00:00'";
                            $sale_before_discount = "sum(laborhours)";
                            $Where3 = $Where."".$TotalWhr0."  AND technician = '".$cust."' GROUP BY technician";
                             $tech_weekdata   = $usr->GetSelWhere("XML_ro_details",$sale_before_discount." as total,technician",$Where3);
                             if(count($tech_weekdata) >0){
                                 foreach($tech_weekdata as $total1){ 
                                       $spent_wtotal+= $total1['total'];
                                    }
                                    
                             }
                             $technician_data[$key]['total_week']=$spent_wtotal;
                                    
                            }
                            else if($i==1){
                                $currnt_stmp = strtotime($current_date);
                                $onemnt_stmp = strtotime('-1 month',$currnt_stmp);
                                $onemnt = date('Y-m-d',$onemnt_stmp);
                                $TotalWhr1 .= $TotalWhr." AND created_date >='".$onemnt." 00:00:00'";
                                $sale_before_discount = "sum(laborhours)";
                                $Where3 = $Where."".$TotalWhr1."  AND technician = '".$cust."' GROUP BY technician";
                            $tech_month  =$usr->GetSelWhere("XML_ro_details",$sale_before_discount." as total,technician",$Where3);
                                if(count($tech_month) >0 ){
                                    foreach($tech_month as $total2){ 
                                           $spent_mtotal+= $total2['total'];
                                        }
                                }
                                      $technician_data[$key]['total_month']=$spent_mtotal;
                            }
                            else if($i==2){
                                $currnt_stmp = strtotime($current_date);
                                $oneday_stmp = strtotime('-1 day',$currnt_stmp);
                                $oneday = date('Y-m-d',$oneday_stmp);
                                $TotalWhr2 .= $TotalWhr." AND created_date >='".$oneday." 00:00:00'";
                                $sale_before_discount = "sum(laborhours)";
                                $Where3 = $Where."".$TotalWhr2."  AND technician = '".$cust."' GROUP BY technician";
                              $tech_daydata   = $usr->GetSelWhere("XML_ro_details",$sale_before_discount." as total,technician",$Where3);
                              if(count($tech_daydata) >0){
                                foreach($tech_daydata as $total3){ 
                                       $spent_dtotal+= $total3['total'];
                                    }  
                              }      
                              
                                    $technician_data[$key]['total_day']=$spent_dtotal;
                            }
                        }
                    
                    }
                    echo '<pre>';
                    print_r($technician_data);
                    
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
		echo '<br>'.$qry;exit;
		
	}
        
        $srcpath = "percentage=".$_REQUEST['percentage']."&sdate=".$_REQUEST['sdate']."&edate=".$_REQUEST['edate']."&start_range=".$_REQUEST['start_range']."&end_range=".$_REQUEST['end_range']."&page=";
        include('includes/generate_pages.php');

        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

        $smarty->assign("records_from",$offset+1);
        $smarty->assign("limit",$limit);
        $smarty->assign("records_to",$records_to);
        $smarty->assign('customer', $technician_data);
        $smarty->display('view-technicians.tpl');
?>

