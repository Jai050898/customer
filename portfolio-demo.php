<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'resources';
$smarty->assign('breadcrumb','Portfolio');

/*******section to get portfolio categories***************/
$Cate_Fields 	= "cat_name,cat_id";
	$Cate_Where 		= "1=1";
       	$Cate_portfolio	= $Gen->GetSelWhere("tbl_portfolio_categories",$Cate_Fields,$Cate_Where);
       
	$smarty->assign('total_temp',	$Cate_portfolio);
        
if(isset($_REQUEST['category'])  && $_REQUEST['category']!='' && $_REQUEST['category']!='1'){
    $where_category = " AND C.cat_id='".$_REQUEST['category']."'";
    $Table1		= "tbl_portfolio as A JOIN tbl_portfolio_categories as C on C.cat_id=A.category";
$Fields1		= "A.*";
$Where1		= " A.status  = 'A' ".$where_category ;

$total_temp	= $Gen->GetSelWhere($Table1,$Fields1,$Where1);
$total = count($total_temp);
$limit      = 25;
$pageNum 	= 1; 					
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
   
$Table		= "tbl_portfolio as A JOIN tbl_portfolio_categories as C on C.cat_id=A.category";
$Fields		= "A.*";
$Where		= " A.status  = 'A'".$where_category;
$Where		.= "  LIMIT ".$offset.",".$limit;
$PDetails	= $Gen->GetSelWhere($Table,$Fields,$Where);
}else{
    $where_category='';
    
$Table1		= "tbl_portfolio";
$Fields1		= "*";
$Where1		= " status  = 'A' " ;

$total_temp	= $Gen->GetSelWhere($Table1,$Fields1,$Where1);
$total = count($total_temp);
$limit      = 25;
$pageNum 	= 1; 					
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
   
$Table		= "tbl_portfolio";
$Fields		= "*";
$Where		= " status  = 'A'".$where_category;
$Where		.= "  LIMIT ".$offset.",".$limit;
$PDetails	= $Gen->GetSelWhere($Table,$Fields,$Where);
}





//echo "<pre>";print_r($PDetails);exit;
$srcpath 	= "page=";
include('includes/generate_pages.php');
 // for record from, to and Total display
$records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
$smarty->assign("records_from",$offset+1);
$smarty->assign("limit",$limit);
$smarty->assign("records_to",$records_to);
$smarty->assign("total",$total);
$smarty->assign('PDetails',$PDetails);

$smarty->assign('Page',$Page);
$smarty->display('portfolio-demo.tpl');
