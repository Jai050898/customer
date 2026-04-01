<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','website');
$smarty->assign('breadcrumb','Website - Yahoo SERP');
$usr 		= new General;
$Table		= "tbl_thumbnails";
$Fields		= "date";
$Where     = " customer_id = '".$_SESSION['User']['UID']."' AND type= 'Y' GROUP BY date ";

$total_rows         = $usr->GetSelWhere($Table,$Fields,$Where);
$total              = count($total_rows);
$limit		= 10;
$pageNum 	= 1; 					

 if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/


if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc') {
		$sortioption='asc';
		$getSort='desc';	
		$sortimoption='up';
		$smarty->assign("sortoption",$_POST['sortoption']);
} else {
		$sortioption='desc';
		$getSort='asc';	
		$sortimoption='down';
}
$SortBy		= " date ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
		$SortBy	= $_REQUEST['sortby']." ".$getSort;		

$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Images 	= $usr->GetSelWhere($Table,$Fields,$Where);
//$Images = $Gen->GetSelWhere("tbl_thumbnails","date"," customer_id = '".$_SESSION['User']['UID']."' AND type= 'Y' GROUP BY date ORDER BY date DESC");
for($i=0;$i<count($Images);$i++)
{
	$items = $Gen->GetSelWhere("tbl_thumbnails","image"," customer_id = '".$_SESSION['User']['UID']."'  AND type= 'Y' AND date = '".$Images[$i]['date']."'");
	$Images[$i]['Items'] = $items;
}

$srcpath 	= "page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);

// for record from, to and Total display
$records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

$smarty->assign("records_from",$offset+1);
$smarty->assign("limit",$limit);
$smarty->assign("records_to",$records_to);
$smarty->assign("total",$total);
//echo "<pre>";print_r($Images);exit;
$smarty->assign("Images",$Images);
$smarty->display('yahooserp.tpl');
?>