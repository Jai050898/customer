<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Customer ROs');
    
    $Where  = "1=1 AND R.company_id='".$_SESSION['User']['xml_id']."'";

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
             $Where .= " AND (C.fullname like '%".$_REQUEST['keyword']."%' OR V.name like '%".$_REQUEST['keyword']."%' OR R.odometerin like '%".$_REQUEST['keyword']."%' OR R.odometerout like '%".$_REQUEST['keyword']."%' OR R.ro_id like '%".$_REQUEST['keyword']."%')";
    }
    
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
            $Where .= " AND R.cust_id = '".$_REQUEST['user_id']."'";
    }
    
    $Table  = " XML_ro R 
                        LEFT JOIN XML_customers C ON R.cust_id = C.cust_id 
                        LEFT JOIN XML_vehicle V ON V.vehicle_id = R.vehicle_id";
    $Fields = "R.id, R.ro_id, C.cust_id, C.fullname, V.vehicle_id, V.name, R.odometerin, R.odometerout, R.transaction_date, R.transactiontotal";
    $Where .= "GROUP BY R.ro_id";
    $total_temp  = $usr->GetSelWhere($Table,"R.id",$Where);
    
    $total  = count($total_temp);
    
    $limit  = 25;
    $pageNum    = 1; 					
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset = ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
    if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc') {
            $sortioption ='asc';
            $getSort ='desc';	
            $sortimoption ='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    } else {
            $sortioption ='desc';
            $getSort ='asc';	
            $sortimoption ='down';
    }
    $SortBy = " R.id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where  .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    $srcpath 	= "sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    $smarty->assign('Users',$Users);
    $smarty->display('manage-ros.tpl');
?>