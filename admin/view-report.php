<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;
    $Where		= "1=1 AND batch_date != ''";
    //echo "<pre>";print_r($_REQUEST);exit;
    //if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
    //{
      //      $Where .= " AND city like '%".$_REQUEST['keyword']."%'";	
    //}
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '')
    {
            $Where .= " AND company_id = '".$_REQUEST['user_id']."'";
    }
    $Table		= "rebate_batch";
    $Fields		= "*";
    $Where .=  " AND batch_date = '".$_REQUEST['date']."'";
    //$total_temp
    $report = $usr->GetSelWhere($Table, $Fields, $Where);
    $total = count($report);
    $limit		= 25;
    $pageNum 	= 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    /*********** To Get the Count of Total Users in the Site ********/
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
    {
        $pageNum = 1;
    }
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
    $SortBy		= " fullname ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
   
    //echo "<pre>";print_r($Users);exit;
    $srcpath 	= "user_id=".$_REQUEST['user_id']."&date=".$_REQUEST['date']."&sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&page=";
    include('../includes/generate_pages.php');
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
 // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);

    //echo '<pre>';print_r($report);exit;
    $smarty->assign('report',$report);
    $smarty->display('view-report.tpl');
    ?>
