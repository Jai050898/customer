<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_portfolio',$upar,"id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND project_name like '%".$_REQUEST['keyword']."%' OR description like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_portfolio";
$Fields		= "*";

echo $total		= TotalRows1("tbl_projects A",$Where);
$Where .= " GROUP BY id";
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/


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
$SortBy		= " project_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$portfolio 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Projects);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages-demo.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Portfolio',$portfolio);
//echo "<pre>";print_r($portfolio);exit;
$smarty->display('manage-portfolio.tpl');



function TotalRows1($tbl,$where=1)
	{
		$wherelist = NULL;
		if(isset($where))
		{
			if(is_array($where))
			{
				reset($where);
				while(list($k,$v)=each($where))
					$wherelist[]=$k." = '".$v."'";				
			}
			else
				$condition = $where;				
		}
		else
			$condition = 1;
		if(is_array($wherelist))
				$condition.=implode(" and ",$wherelist);				
	echo	$qry = "SELECT COUNT(*) as cnt FROM ".$tbl." WHERE ".$condition;
		//echo $qry;
		//echo '<br>';
                //exit;
		//$res = $this->SelectQuery($qry);
		return $res[0][cnt];
	}
?>
