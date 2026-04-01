<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','customer reports');
$usr 		= new General;

//echo '<pre>';print_r($_REQUEST);exit;
 $Where		= " cust_id ='".$_REQUEST['cust_id']."' AND company_id = '".$_REQUEST['company_id']."'";
    
    
    $fields	= " id,cust_id,fullname, source, referral";
    $Table	= "XML_customers ";
    $customersdata		= $Gen->GetSelWhere($Table,$fields,$Where);
    if(isset($customersdata[0]['source']) && !empty($customersdata[0]['source'])){
       $source=$customersdata[0]['source'];
    }else{
        $source=$customersdata[0]['source'];
    }
    if(isset($customersdata[0]['referral']) && !empty($customersdata[0]['referral'])){
       $referral=$customersdata[0]['referral'];
    }else{
       $referral=$customersdata[0]['referral'];
    }
    

/*****section to insert the data*****/
//if((isset($_REQUEST['id']) && $_REQUEST['id']!='') && (isset($_REQUEST['ro_id']) && $_REQUEST['ro_id']!='') && (isset($_REQUEST['company_id']) && $_REQUEST['company_id']!='') && (isset($_REQUEST['source']) && $_REQUEST['source']!='') && (isset($_REQUEST['referral']) && $_REQUEST['referral']!='') && (isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Post')) {
  if((isset($_REQUEST['id']) && $_REQUEST['id']!='') && (isset($_REQUEST['ro_id']) && $_REQUEST['ro_id']!='') && (isset($_REQUEST['company_id']) && $_REQUEST['company_id']!='')  && (isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Post')) {
    
        //echo '<pre>';print_r($_REQUEST);exit;
    
	$Fields = array();        
	$Fields['source'] = $_REQUEST['source'];
        $Fields['referral'] = $_REQUEST['referral'];
        
        
        
         $cust_whr   = " cust_id ='".$_REQUEST['cust_id']."' AND company_id = '".$_REQUEST['company_id']."'";
   
 	$ro_Whr     = " id= '".$_REQUEST['id']."' AND ro_id = '".$_REQUEST['ro_id']."' AND cust_id ='".$_REQUEST['cust_id']."' AND company_id = '".$_REQUEST['company_id']."'";
        //echo '<pre>';print_r($Fields);exit;
	$ins = $Gen->UpdateQry('XML_customers',$Fields, $cust_whr);
        $ins1 = $Gen->UpdateQry('XML_ro',$Fields, $ro_Whr);
        echo "1";
        exit;
}

	


$smarty->assign('source', $source);
$smarty->assign('referral', $referral);
$smarty->display('newcustomers.tpl');
?>

