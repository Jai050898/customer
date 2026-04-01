<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    //echo "<pre>";print_r($_REQUEST);exit;
    if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change') {	
            //echo "<pre>";print_r($_REQUEST);exit;
            $upar['status']	= $_REQUEST['hid_type'];
            $upid	= $Gen->UpdateQry('XML_customers',$upar,"cust_id IN(".$_REQUEST['hid_id'].")");
    }
    $Where		= "1=1 ";
    //echo "<pre>";print_r($_REQUEST);exit;
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND lname like '%".$_REQUEST['keyword']."%' OR email like '%".$_REQUEST['keyword']."%'";
    }
    if(isset($_REQUEST['zip']) && $_REQUEST['zip'] != '') {
            $Where .= " AND zip = '".$_REQUEST['zip']."'";
    }
    if(isset($_REQUEST['city']) && $_REQUEST['city'] != '') {
            $Where .= " AND city = '".$_REQUEST['city']."'";
    }
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '') {
            $Where .= " AND company_id = '".$_REQUEST['user_id']."'";
    }
    if(isset($_REQUEST['cust_id']) && $_REQUEST['cust_id'] != '') {
            $Where .= " AND cust_id = '".$_REQUEST['cust_id']."'";
    }
    $Table		= "XML_customers ";
    $Fields		= "cust_id,fname,lname,city,state, distance";
    $total		= $usr->TotalRows($Table,$Where);
    $limit		= 25;
    $pageNum 	= 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
        $pageNum = 1;
    }
    $offset 	= ($pageNum - 1) * $limit;
    /*********** To Get the Count of Total Users in the Site ********/


    if($_POST['sortoption']=='desc')
    {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    }
    else
    {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " fname ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    for($i=0;$i<count($Users);$i++)
    {
            $totalVehicles = $usr->TotalRows("XML_vehicle","cust_id = '".$Users[$i]['cust_id']."'");
            $Users[$i]['Vcount'] = $totalVehicles;
            $totalROs = $usr->TotalRows("XML_ro","cust_id = '".$Users[$i]['cust_id']."'");
            $Users[$i]['Rcount'] = $totalROs;
    }
    $srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&city=".$_REQUEST['city']."&zip=".$_REQUEST['zip']."&page=";
    include('../includes/generate_pages.php');
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    //Code to get Clients
    $Clients = $usr->GetSelWhere("tbl_users","user_id,first_name,company_name, xml_id"," status = 'A'");
    $smarty->assign('Clients',$Clients);
    $smarty->display('manage-xml-customers.tpl');
?>