<?php
	require_once("includes/application_start.php");
	require_once("includes/login_check.php");
	$smarty->assign('breadcrumb','New Customers Data');
	$usr 		= new General;
	$page = "customers";
	$smarty->assign('Page',$page);

	/********** CUSTOMER DATA for Download ***********/    

	if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {

	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
	// To Fetch Total ROws
	$Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND (reg_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') AND source != '' GROUP BY  source  ";
	$total_temp = $usr->GetSelWhere("XML_customers","source",$Where);
        $total = count($total_temp);
        
	
	$limit	= 25;
	$pageNum 	= 1; 					
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
	$SortBy		= " source ".$getSort;

	if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		

	$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

	$customersArray = array();
	$fields	= " id,cust_id,fullname, source, count(source) as sourceCnt, referral";
	$Table	= " XML_customers ";
	$customersArray = $usr->GetSelWhere($Table,$fields,$Where);
	$allArray       = array();
	//echo "<pre>";print_r($customersArray);exit;

	foreach($customersArray  as $key=>$value) {

	$allArray[$key] = $value;

	//based on source total customers , total sales,average ros
	$sourceArray = array();
	$Where4     = " 1=1 AND company_id = '".$_SESSION['User']['xml_id']."' and  cust_id = '".$value['cust_id']."' AND (transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')  AND source != ''   ORDER BY transaction_date ";
        
	$sources    = "id, company_id, ro_id, cust_id,sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross , count(source) as roCnt, source, referral ";
        
	$sourceArray	= $usr->GetSelWhere("XML_ro", $sources, $Where4);

	if(!empty($sourceArray) && count($sourceArray) > 0){ 
	$allArray[$key]['gross']   = $sourceArray['0']['gross'];
	$allArray[$key]['roCnt']   = $sourceArray['0']['roCnt'];
	$allArray[$key]['averageRo']    = $allArray[$key]['gross'] / $allArray[$key]['roCnt'];
	}

	}
	if(count($allArray[$key]['roCnt']) > 0){
	$srcpath 	= "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&page=";
	include('includes/generate_pages.php');
	}
	$smarty->assign("sortioption",$sortioption);
	$smarty->assign("sortimoption",$sortimoption);

	// for record from, to and Total display
	$records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

	if(count($allArray) > 0){
	$smarty->assign("records_from",$offset+1);
	} elseif(count($allArray) == 0) {
	$smarty->assign("records_from",0);
	} else {
	$smarty->assign("records_from",$offset);
	}
	$smarty->assign("limit",$limit);
	$smarty->assign("records_to",$records_to);
	$smarty->assign("total",$total);

	//echo "<pre>";print_r($allArray);exit;
	}
	$smarty->assign("allArray",$allArray);
	$smarty->assign("Totalcustomers",$Totalcustomers);
	$smarty->display('recent-customers-source.tpl');
?>        

