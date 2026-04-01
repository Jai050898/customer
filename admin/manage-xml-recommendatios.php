<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    
    $usr 		= new General;
    //echo "<pre>";print_r($_REQUEST);exit;
    
    $Where		= "1=1 ";
    
    $Table		= "XML_recommendation";
    $Fields		= "*";
    $total		= $usr->TotalRows($Table,$Where);
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
    
    for($i=0;$i<count($Users);$i++) {
        $customer = $usr->GetSelWhere("XML_customers","fullname"," cust_id = '".$Users[$i]['cust_id']."'");
        if(!empty($customer)){
            $newUser[$i] = $Users[$i];
            $newUser[$i]['fullname'] = $customer['0']['fullname'];
            $vehicle = $usr->GetSelWhere("XML_vehicle","name","vehicle_id = '".$newUser[$i]['veh_id']."'");
            $newUser[$i]['name'] = $vehicle[0]['name'];
        }
    }
    //echo "<pre>";print_r($newUser);exit;
    $srcpath 	= " sortoption=".$_REQUEST['sortoption']."&page=";
    include('../includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$newUser);
    
    $smarty->display('manage-xml-recommendations.tpl');
?>