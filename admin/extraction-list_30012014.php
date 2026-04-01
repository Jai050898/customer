<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $usr 		= new General;

    // To Fetch MMS Data Company Ids
    $MMSUsersAry    = array();
    $MMSUsersAry 	= $usr->GetSelWhere("XML_customers","Distinct(company_id)"," 1=1");
    $mmsAry = array();
    if(!empty($MMSUsersAry)){
        foreach($MMSUsersAry as $mmsuser){
            $mmsAry[] = $mmsuser['company_id'];
        }
    }
    $userIds    = implode(",", $mmsAry);


    //echo "<pre>";print_r($_REQUEST);exit;
    $Where		= "1=1 AND A.status != 'D' AND xml_id IN (".$userIds.")";
    $Table		= "tbl_users A ";

    $Fields		= "A.user_id,A.first_name,A.last_name,A.xml_id, A.email,A.user_name,A.company_name,A.phone,A.country,A.state,A.city,A.status,A.login_status,A.access_to_mark_survey,A.access_to_site_survey,A.access_to_integrated_survey, A.attempts";

    $total		= $usr->TotalRows($Table,$Where);
    $limit		= 25;
    $pageNum 	= 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    /*********** To Get the Count of Total Users in the Site ********/


    if($_REQUEST['sortoption']=='desc')
    {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_REQUEST['sortoption']);
    }
    else
    {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " A.company_name ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    $currentYear        = date('Y');
    $lastYear           = $currentYear - 1;
    foreach($Users as $key=>$user){
        
        // Customer Total
        $Where		= "1=1 AND company_id = '".$user['xml_id']."'";
        $Table		= "XML_customers";
        $custTotal	= $usr->TotalRows($Table, $Where);
        $Users[$key]['custTotal']   = $custTotal;
        
        
        // Customer Total in 2013
        $Where		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(reg_date) = '".$lastYear."'";
        $Table		= "XML_customers";
        $custTotalLastYear	= $usr->TotalRows($Table, $Where);
        $Users[$key]['custTotalLastYear']   = $custTotalLastYear;
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(transaction_date) = '".$lastYear."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
            $Users[$key]['grossSale']   = $grossSaleArray[0]['gross'];
        } else {
            $Users[$key]['grossSale']   = 0;
        }
        
        
        // Total RO's
        $Where2		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(transaction_date) = '".$lastYear."'";
        $Table2		= "XML_ro";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $Users[$key]['roTotal']   = $rototal;
        
        // Average RO's
        if($Users[$key]['roTotal'] != 0) {
            $Users[$key]['averageRO']   =   $Users[$key]['grossSale'] / $Users[$key]['roTotal'];
        } else {
            $Users[$key]['averageRO']   =   0;
        }
    }
    //echo "<pre>";print_r($Users);exit;
//echo "<pre>";print_r($mmsAry);exit;
$srcpath 	= "sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";


include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
$smarty->assign('lastYear',$lastYear);
$smarty->assign('mmsAry',$mmsAry);
//echo "<pre>";print_r($Users);exit;
$smarty->display('extraction-list.tpl');
?>