<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr 		= new General;
    $smarty->assign("Page","customers");
    
    $Where  = "1=1 AND S.company_id='".$_SESSION['User']['xml_id']."'";

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND S.schedulecustomer like '%".$_REQUEST['keyword']."%' OR V.name like '%".$_REQUEST['keyword']."%' OR S.scheduleextid like '%".$_REQUEST['keyword']."%'";	
    }
    $Table		= " XML_schedule S 
                                LEFT JOIN XML_vehicle V ON S.vehicle_id = V.vehicle_id";
    $Fields		= "S.id, S.ro_id, S.scheduleextid, S.cust_id, S.vehicle_id, V.name, S.scheduledate, S.schedulecustomer, S.estimatedhours";

    $Where .= "GROUP BY S.scheduleextid";
    $total_temp		= $usr->GetAllWhere($Table,$Where);
    $total              = count($total_temp);
    $limit		= 25;
    $pageNum 	= 1; 					
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    
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
    //echo "<pre>";print_r($Users);exit;
    
    $srcpath 	= "sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    
    $smarty->display('manage-schedules.tpl');
?>