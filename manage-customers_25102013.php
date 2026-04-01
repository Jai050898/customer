<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Customers');
    //echo "<pre>";print_r($_REQUEST);exit;
    if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change') {
            $upar['status']	= $_REQUEST['hid_type'];
            $upid	= $Gen->UpdateQry('XML_customers',$upar,"cust_id IN(".$_REQUEST['hid_id'].")");
    }

    $Where		= "1=1 AND A.fname != '' AND A.lname != '' AND A.company_id = '".$_SESSION['User']['xml_id']."'";
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND A.lname like '%".$_REQUEST['keyword']."%' OR A.fname like '%".$_REQUEST['keyword']."%'";	
    }
    if(isset($_REQUEST['zip']) && $_REQUEST['zip'] != '') {
            $Where .= " AND A.zip = '".$_REQUEST['zip']."'";
    }
    if(isset($_REQUEST['city']) && $_REQUEST['city'] != '') {
            $Where .= " AND A.city = '".$_REQUEST['city']."'";
    }
    $Table		= "XML_customers A";
    $Fields		= "A.cust_id, A.fname, A.lname, A.city, A.state, A.distance";
    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby'] == 'Vcount'){
       $Table           = "XML_customers A LEFT JOIN XML_vehicle B ON A.cust_id = B.cust_id  AND B.company_id ='".$_SESSION['User']['xml_id']."'";
       $Fields		= "A.cust_id, A.fname, A.lname, A.city, A.state, A.distance, count(B.id) AS Vcount";
    }
    
    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby'] == 'Rcount'){
       $Table           = "XML_customers A LEFT JOIN XML_ro C ON A.cust_id = C.cust_id  AND C.company_id = '".$_SESSION['User']['xml_id']."'";
       $Fields		= "A.cust_id, A.fname, A.lname, A.city, A.state, A.distance, count(C.id) AS Rcount";
    }
    
    //$Table		= "XML_customers A LEFT JOIN XML_vehicle B ON A.cust_id = B.cust_id LEFT JOIN XML_ro C ON A.cust_id = C.cust_id";
    //$Fields		= "A.cust_id, A.fname, A.lname, A.city, A.state, A.distance, count(B.id) AS Vcount, count(C.id) AS Rcount";
	
    
    $Where      .= " GROUP BY A.cust_id";
    
    //$Table_total        = "XML_customers A";
    $Table_total        = $Table;
    $fields_total       = "A.id";
    $Where_total        = $Where;
    $total_rows         = $usr->GetSelWhere($Table_total,$fields_total,$Where_total);
    $total              = count($total_rows);
    $limit		= 25;
    $pageNum 	= 1; 					
    
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
    $SortBy		= " A.cust_id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
   // echo "<prE>";print_r($Users);exit;
    for($i=0;$i<count($Users);$i++) {
        if($_REQUEST['sortby'] != 'Vcount'){
            $totalVehicles = $usr->TotalRows("XML_vehicle","cust_id = '".$Users[$i]['cust_id']."' AND make !='' AND company_id = '".$_SESSION['User']['xml_id']."'");
            $Users[$i]['Vcount'] = $totalVehicles;
        }
        if($_REQUEST['sortby'] != 'Rcount'){
            $totalROs = $usr->TotalRows("XML_ro","cust_id = '".$Users[$i]['cust_id']."'  AND company_id = '".$_SESSION['User']['xml_id']."'");
            $Users[$i]['Rcount'] = $totalROs;
        }
    }
    
    if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.156'){
        //echo "<prE>";;print_r($Users);//exit; 
        //SELECT A.fullname, A.city, A.state, count( B.id ) AS totvech, count( C.id ) AS rocnt FROM `XML_customers` A LEFT JOIN XML_vehicle B ON A.cust_id = B.cust_id LEFT JOIN XML_ro C ON A.cust_id = C.cust_id WHERE A.company_id =8 GROUP BY A.cust_id ORDER BY `totvech` ASC LIMIT 0 , 30

    }
    
    $srcpath 	= "keyword=".$_REQUEST['keyword']."&city=".$_REQUEST['city']."&zip=".$_REQUEST['zip']."&sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&page=";
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
    $smarty->display('manage-customers.tpl');
?>