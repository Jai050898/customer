<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','Manage Customer Vehicles');
    
    if($_REQUEST['make'] == '')
        header('Location: '.SITEURL.'/manage-vehicles.php');
    
    $Where  = "1=1 AND company_id='".$_SESSION['User']['xml_id']."' AND make != '' AND make = '".$_REQUEST['make']."'";
    
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='') {
        $Where .= " AND (model like '%".$_REQUEST['keyword']."%')";
    }
    
    if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
        $Where .= " AND cust_id = '".$_REQUEST['user_id']."'";	
    }
    
    $Table  = "XML_vehicle ";
    
    $Where  .= " GROUP BY model";
    
    $Table  = "XML_vehicle ";
    $Fields = "model,vehicle_id, count(id) AS Total";
    
    $vehiModelsCnt	= $usr->GetSelWhere($Table,"model",$Where);
    $total              = count($vehiModelsCnt);
    $limit  = 25;
    $pageNum    = 1; 					

    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;

    /*********** To Get the Count of Total Users in the Site ********/
    if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc') {
            $sortioption='asc';
            $getSort='asc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='desc';	
            $sortimoption='down';
    }
    $SortBy		= " model ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		
    
    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    // Get Vehicler Totals for the Makes Specified FROM RO table.
    foreach($Users as $key=>$user){
        $vehiIdsArr = array();
        $vehiIdsArr1 = array();
        // Get Vehicle Ids for the Make from Vehicle Table
        $Whr = "1=1 AND company_id='".$_SESSION['User']['xml_id']."' AND make = '".$_REQUEST['make']."' AND model = '".$user['model']."'";
        $vehiIdsArr  = $usr->GetSelWhere("XML_vehicle", "vehicle_id", $Whr);
        foreach($vehiIdsArr as $vehiId){
            $vehiIdsArr1[]  = $vehiId['vehicle_id'];
        }

        $vehicleIds = implode(',', $vehiIdsArr1);

        // Get Count from RO table by he Vehicle Ids
        $vehiTotalWhr = "1=1 AND company_id='".$_SESSION['User']['xml_id']."' AND vehicle_id IN (".$vehicleIds.")";
        
        if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='') {
                $vehiTotalWhr .= " AND cust_id = '".$_REQUEST['user_id']."'";	
        }

        if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != "" && isset($_REQUEST['edate']) && $_REQUEST['edate'] != "") {
            $sdate = $Gen->Date_Format($_REQUEST['sdate']);
            $edate = $Gen->Date_Format($_REQUEST['edate']);

            $vehiTotalWhr   .= " AND transaction_date > '".date('Y-m-d 00:00:00',strtotime($sdate))."' AND transaction_date <= '".date('Y-m-d 23:59:59',strtotime($edate))."'";
        }

        $vehiTotal  = $usr->TotalRows("XML_ro", $vehiTotalWhr);
        $Users[$key]['Total']   = $vehiTotal;
    }
    
    $srcpath 	= "keyword=".$_REQUEST['keyword']."&sortoption=".$getSort."&user_id=".$_REQUEST['user_id']."&make=".$_REQUEST['make']."&edate=".$_REQUEST['edate']."&sdate=".$_REQUEST['sdate']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    $smarty->assign('Users',$Users);
    $smarty->display('view-models-by-make.tpl');
?>