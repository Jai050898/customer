<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign('breadcrumb','Export Customer Reports');
    
    $Page = 'daily';
    $smarty->assign('Page',$Page);
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);;
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
        
        // Get Customers Ids From Ro Table
        $Where1 = $Where." AND cust_id != '' AND cust_id != '0' AND (reg_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')";
        
        $total_temp = $usr->GetSelWhere("XML_customers","id",$Where1);
        $total = count($total_temp);
        
        $limit   = 25;
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
        $SortBy		= " reg_date ".$getSort;

        if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
            $SortBy = $_REQUEST['sortby'] . " " . $getSort;
        }
        
        
        $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
        
        $custAry = array();
        $custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname, address1,city, state, zip, reg_date",$Where1);
        //echo "<pre>";print_r($custAry);exit;
        
        $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&page=";
        include('includes/generate_pages.php');

        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
        if(count($custAry) > 0) {
            $smarty->assign("records_from",$offset+1);
        } else {
            $smarty->assign("records_from",$offset);
        }
        $smarty->assign("limit",$limit);
        $smarty->assign("records_to",$records_to);
        $smarty->assign("total",$total);
        
    }
    $smarty->assign('customerCnt', count($custAry));
    $smarty->assign('customer', $custAry);
    $smarty->display('new-customers.tpl');
?>
