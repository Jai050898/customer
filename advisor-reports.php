<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
     
    $smarty->assign('breadcrumb','Manage Customer Calender');
    $usr    = new General;
     $Page = "customers";
    
    /*
    SELECT distinct(enteredby) AS sum, count(enteredby) AS cnt FROM `XML_ro` where 1=1 AND company_id = 22 AND (transaction_date > '2014-01-01 00:00:00' AND transaction_date <= '2014-01-31 23:59:59') GROUP BY enteredby 
    ********* BY Advisor reports ***********/
    
      //top get monthwise total ros and count of ros                
                    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND transaction_date > '2014-01-01' AND transaction_date <= '2014-01-31' ";
    
		    $Where1 = $Where."GROUP BY enteredby";
		    $fields = "enteredby, count(enteredby ) AS cnt ";
		    $total_temp = $usr->GetSelWhere("XML_ro","$fields",$Where1);
	    	    $total      = $total_temp;
	  	    // echo'<pre>';print_r($total);exit;
	    	 $newCustArray[] = $total;
             //echo'<pre>';print_r($advisorReport);exit;
	
  $smarty->display('customer-calender.tpl');
?>
