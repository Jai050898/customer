<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;

    $Where		= "1=1 ";
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND (C.fullname like '%".$_REQUEST['keyword']."%' OR V.name like '%".$_REQUEST['keyword']."%' OR R.odometerin like '%".$_REQUEST['keyword']."%' OR R.odometerout like '%".$_REQUEST['keyword']."%' OR R.ro_id like '%".$_REQUEST['keyword']."%')";	
    }
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
            $Where .= " AND R.cust_id = '".$_REQUEST['user_id']."'";	
    }
    $Table		= " XML_ro R LEFT JOIN XML_customers C ON R.cust_id = C.cust_id LEFT JOIN XML_vehicle V ON V.vehicle_id = R.vehicle_id";
    $Fields		= "R.id, R.ro_id, C.cust_id, C.fullname, V.vehicle_id, V.name, R.odometerin, R.odometerout, R.transaction_date, R.transactiontotal";

    $Where .= "GROUP BY R.ro_id";
    $total_temp		= $usr->GetAllWhere($Table,$Where);
    $total              = count($total_temp);
    $limit		= 25;
    $pageNum 	= 1; 		
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
        $pageNum = 1;    
    }
    
    $offset 	= ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
    if($_POST['sortoption']=='desc') {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
        $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    $srcpath 	= "sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
    include('../includes/generate_pages.php');
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    //echo "<pre>";print_r($Users);exit;
    $smarty->display('manage-xml-ros.tpl');
?>