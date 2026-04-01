<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Zipcode Customer');
    
    $Where  = "1=1 AND zip != '' AND zip != '-1' AND zip!= '1 -' AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
            $Where .= " AND zip like '%".$_REQUEST['keyword']."%' OR city like '%".$_REQUEST['keyword']."%'";	
    }
    
    $Table		= "XML_customers";
    $Fields1            = "id";
    $Fields		= "zip, city, count( id ) AS Ccount";

    $Where .= " GROUP BY zip";
    $total_temp		= $usr->GetSelWhere($Table,$Fields1,$Where);
    $total = count($total_temp);
    
    $limit		= 25;
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
    $SortBy		= " cust_id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		
    
    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    
    //echo "<pre>";print_r($Users);exit;
    $cnt    = count($Users);
    $currentYear    = date('Y');
    
    for($i=0;$i<$cnt;$i++) {
        
        // To Fetch Total Customers for the Zipcode Specified
        $totalCustArray = array();
        $totalCustArray = $usr->GetSelWhere("XML_customers","cust_id","zip = '".$Users[$i]['zip']."' AND company_id = '".$_SESSION['User']['xml_id']."'");
        $Users[$i]['Ccount'] = count($totalCustArray);
        $custIdsAry = array();
        foreach($totalCustArray as $cust){
            $custIdsAry[]   = $cust['cust_id'];
        }
        $custIds    = implode(',', $custIdsAry);
        //echo "<prE>".$custIds;print_r($totalCustArray);
        
        
        //To Get Total Spent Amount for the Year
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$currentYear."' AND cust_id IN (".$custIds.")";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as totalSpentYear";
        $Table3		= "XML_ro ";
        $totalSpentYr	= $usr->GetSelWhere($Table3, $fields, $Where3);  
        $Users[$i]['totalSpentYear'] = $totalSpentYr[0]['totalSpentYear'];
        
        
        //To Get Total Spent Amount for Lifetime
        $Where4		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id IN (".$custIds.")";
        $fields4        = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as totalSpentLifetime";
        $Table4		= "XML_ro ";
        $totalSpentLife	= $usr->GetSelWhere($Table4, $fields4, $Where4);  
        $Users[$i]['totalSpentLifetime'] = $totalSpentLife[0]['totalSpentLifetime'];
    }
    //echo "<pre>";print_r($Users);exit;
    $srcpath 	= "keyword=".$_REQUEST['keyword']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("currentYear",$currentYear);
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    $smarty->display('manage-zipcode-customers.tpl');
?>