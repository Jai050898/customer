<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Customer RO Details');
    
    $Where  = "1=1 AND RD.company_id='".$_SESSION['User']['xml_id']."'";

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
        $Where .= " AND (RD.ro_id like '%".$_REQUEST['keyword']."%' OR RD.company_id like '%".$_REQUEST['keyword']."%')";
    }
    
    if(isset($_REQUEST['ro_id']) && $_REQUEST['ro_id']!='') {
            $Where .= " AND RD.ro_id = '".$_REQUEST['ro_id']."'";	
    }
    
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
            $Where .= " AND R.cust_id = '".$_REQUEST['user_id']."'";
    }
    
     $Table		= " XML_ro_details RD 
                            LEFT JOIN XML_ro R ON RD.ro_id =R.ro_id";
    $Fields		= "RD.id, RD.ro_id,RD.transactiondetailextid, RD.unitquantity, RD.unitcost, RD.unitsale, RD.extendedcost, RD.extendedsale, RD.laborhours, RD.transactiondetailextid";

    $Where .= " GROUP BY RD.transactiondetailextid";
    
    $total_temp		= $usr->GetAllWhere($Table,$Where);
    $total              = count($total_temp);
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
    $SortBy = " RD.id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where  .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    $srcpath 	= "sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&ro_id=".$_REQUEST['ro_id']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    $smarty->display('manage-ro-details.tpl');
?>