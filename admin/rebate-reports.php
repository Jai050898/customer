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
    $Where .=  "GROUP BY batch_date";
    //$total_temp
    $rebate = $usr->GetSelWhere($Table, $Fields, $Where);
    //echo '<pre>';print_r($rebate);exit;
    $smarty->assign('rebate',$rebate);
    $smarty->display('rebate-reports.tpl');
    ?>
