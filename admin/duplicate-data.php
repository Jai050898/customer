<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    
    $usr    = new General;
    
    $Where  = "1=1";
    $Users  = array();
    $Users1  = array();
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '') {
        $Where .= " AND company_id = '".$_REQUEST['user_id']."'";

        $Fields		= "fullname,address1,address2,city,state,zip,cell,dob,count(fullname) as count";
        $Where		.= " GROUP BY cust_id HAVING count(cust_id) > 1 "; 
        $Table		= "XML_customers";

        $Users		= $usr->GetSelWhere($Table,"id",$Where);
        $total	 	= count($Users);

       //echo '<pre>';print_r($Users);exit;
        $limit      = 25;
        $pageNum    = 1; 					

        if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
           $pageNum = $_REQUEST['page'];
        $offset 	= ($pageNum - 1) * $limit;

        /*********** To Get the Count of Total Users in the Site ********/

         if($_REQUEST['sortoption']=='' ||  $_REQUEST['sortoption']=='desc') {
                $sortioption='asc';
                $getSort='desc';	
                $sortimoption='up';                
        } else {
                $sortioption='desc';
                $getSort='asc';	
                $sortimoption='down';
        }
        
        $SortBy		= " cust_id ".$getSort;

        if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
                $SortBy	= $_REQUEST['sortby']." ".$getSort;		

        $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

        $Users1 	= $usr->GetSelWhere($Table,$Fields,$Where);

        //echo "<pre>";print_r($Users1);exit;




        $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&user_id=".$_REQUEST['user_id']."&page=";
        include("../includes/generate_pages.php");


        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

            $smarty->assign("records_from",$offset+1);
            $smarty->assign("limit",$limit);
            $smarty->assign("records_to",$records_to);
            $smarty->assign("total",$total);
            $smarty->assign($Fullname,'fullname');
            $smarty->assign($Address1,'address1');

            $smarty->assign($Address2,'address2');
            $smarty->assign($City,'city');

            $smarty->assign($State,'state');
            $smarty->assign($Zip,'zip');
            $smarty->assign($Cell,'cell');
            $smarty->assign($Dob,'dob');
            $smarty->assign("sortioption",$sortioption);
            $smarty->assign("sortimoption",$sortimoption);

        }
        
        // To Fetch  Shop Data for Select Box
        $shopsAry  = array();
        $shopsAry  = $usr->GetSelWhere('XML_customers',"distinct(company_id) as company_id","1=1 ORDER BY company_id ASC");
        //echo "<pre>";print_r($shopIdsAry);exit;
        
        $shopIdsAry    = array();
        foreach($shopsAry as $shopId){
            $shopIdsAry[]  = $shopId['company_id'];
        }
        
        $shopIds    = implode(',', $shopIdsAry);
        
        $shops  = $usr->GetSelWhere('tbl_users',"xml_id, company_name"," 1=1 AND xml_id IN (".$shopIds.") ORDER BY company_name ASC");
        //echo "<pre>";print_r($shops);exit;
	$smarty->assign('Users',$Users1);
        $smarty->assign('shops',$shops);
	$smarty->display('duplicate-data.tpl');
?>
