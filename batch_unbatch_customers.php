<?php 
require_once("includes/application_start.php");
$type=$_REQUEST['type'];
$custid = $_REQUEST['cust_id'];
$batch_list = array();

if($type =='unbatch'){
  /* $customerid=$_SESSION['rebate']['unbatch'];
   $_SESSION['rebate']['unbatch'] =$customerid.','.$custid;
   echo  $_SESSION['rebate']['unbatch'];*/
         //$batch_list=$_SESSION['rebate']['unbatch'];

    array_push($_SESSION['batch_list'],$custid);
    print_r($_SESSION['batch_list']);
}else if($type =='batch'){

   /* deprecated $_SESSION['batch_list']=array_diff($_SESSION['batch_list'],$custid); */
 		if (($key = array_search($custid, $_SESSION['batch_list'])) !== false) {
			unset($_SESSION['batch_list'][$key]);
		} 
		
     print_r($_SESSION['batch_list']);
    echo 1;
}
?>
