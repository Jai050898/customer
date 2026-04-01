<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php"); 
    $usr	= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Staff');
    
    $xml_id= $_GET['user-id'];
    
    if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{


if($_REQUEST['hid_type'] == "O")
	{	
		$upar['login_status']	= "A";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
	else if($_REQUEST['hid_type'] == "P")
	{	
		$upar['login_status']	= "P";
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
	else
	{
		$upar['status']	= $_REQUEST['hid_type'];
		$upid	= $Gen->UpdateQry('tbl_users',$upar,"user_id IN(".$_REQUEST['hid_id'].")");
	}
	}
  
   
    $Where  = "1=1 AND xml_id = '".$_REQUEST['user_id']."' AND is_staff = 'Y'";
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!=''){
            $Where .= " AND first_name like '%".$_REQUEST['keyword']."%'";	
    }
    	
    $Table  = "tbl_users";
    $Fields = "user_id,first_name,last_name,user_name,password,company_name,email,status,login_status";

    
    $total_temp = $usr->GetSelWhere($Table,$Fields,$Where);
    $total = count($total_temp);
    
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
    include('../includes/generate_pages.php');
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    $smarty->display('manage-staff.tpl');
?>
