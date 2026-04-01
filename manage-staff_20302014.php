<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr 		= new General;
$Page = 'account';
    $smarty->assign('breadcrumb','Manage Staff');
        
       $Where  = "1=1 AND is_staff = 'Y'";
     

    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!=''){
            $Where .= " AND first_name like '%".$_REQUEST['keyword']."%'";	
    }
    
    $Table  = "tbl_users";
    $Fields = "user_id,first_name,last_name,user_name,password,company_name,email,status";

    
    $total_temp = $usr->GetSelWhere($Table,$Fields,$Where);
    $total = count($total_temp);
  
   if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del') {
            $PrFields   = array();
            $PrFields['status'] = "D";
          echo  $UpOverview = $Gen->UpdateQry("tbl_users",$PrFields,"user_id = ".$_REQUEST['id']);
            header("Location:".SITEURL.'/manage-staff.php');
            exit;
    }
    
    
    $limit  = 25;
    $pageNum    = 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
    if($_REQUEST['sortoption']=='' ||  $_REQUEST['sortoption']=='desc'){
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_REQUEST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= "first_name ".$getSort;

    if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
        $SortBy = $_REQUEST['sortby'] . " " . $getSort;
    }

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    
    
    
    $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
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
    $smarty->assign('Page',$Page);
    $smarty->display('manage-staff.tpl');
?>
