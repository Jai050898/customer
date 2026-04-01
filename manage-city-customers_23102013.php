<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage City Customers');
    
    $Where		= "1=1 AND city != '' AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!=''){
            $Where .= " AND city like '%".$_REQUEST['keyword']."%'";	
    }
    
    $Table  = "XML_customers ";
    $Fields = "city, count( id ) AS Ccount";

    $Where .=  " GROUP BY city ";
    $total_temp = $usr->GetSelWhere($Table,$Fields,$Where);
    $total = count($total_temp);
    
    $limit  = 25;
    $pageNum    = 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
    if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc'){
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " cust_id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    
//    for($i=0;$i<count($Users);$i++){
//            $totalCust = $usr->TotalRows("XML_customers","city = '".$Users[$i]['city']."' AND company_id = '".$_SESSION['User']['xml_id']."'");
//            $Users[$i]['Ccount'] = $totalCust;
//    }
    
    
    $srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
    include('includes/generate_pages.php');
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    $smarty->display('manage-city-customers.tpl');
?>