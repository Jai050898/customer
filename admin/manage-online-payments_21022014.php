<?php
    require_once("../includes/admin.inc.php");
    require_once("../class/Invoice.class.php");
    require_once("../includes/login_check_admin.php");
    $Where		= "1=1 ";
    
    $invoice=new Invoice($conn);
    $generatedLink='';
 if(isset($_GET['action']) && $_GET['action']=='del' && is_numeric($_GET['id'])) {
            $id=(int)$_GET['id'];

            $invoice->delInvoice($id);
            $error='Record deleted successfully!!!';
    }
 if(isset($_GET['action']) && $_GET['action']=='edit' && is_numeric($_GET['id'])) {
            $id=(int)$_GET['id'];
            $invoice->updateInvoice($id);
            $error='Record edited successfully!!!';
    }

    if(isset($_GET['action']) && $_GET['action']=='generateLink' && is_numeric($_GET['id'])) {
            $id=(int)$_GET['id'];
            $generatedLink='<table width="100%" cellspacing="0" cellpadding="0" >
                                <tr>
                                    <td height="32" bgcolor="#E0E0E0" align="center" style="border:#4A4A4A 1px solid; font-size:14px;">Link for invoice payment :: https://www.autorepairmarketing.com/savemoney.php?id='.$id.'</td>
                                </tr>
                              </table>';
    }
    

    $allInvoice = $invoice->getallInvoice();
     if($_SERVER['REMOTE_ADDR'] == '182.72.88.155'){
   // echo '<pre>';print_r($allInvoice);
   if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   {
       $pageNum = $_REQUEST['page'];
     $offset 	= ($pageNum - 1) * $limit;
    
    $Where		.= " LIMIT ".$offset.",".$limit;
    
         
    $limit	= 2;
    $pageNum 	= 1; 					
   //echo '<pre>';print_r($allInvoice);exit;
   
   }    
          $srcpath 	= "id=".$id."&page=";
    include('../includes/generate_pages.php');

     
    }
//   echo '<pre>';print_r($allInvoice);
    
    
     // echo '<pre>';print_r($allInvoice);
  
    if(is_array($allInvoice) && !empty($allInvoice)) {
            $totalInvoice=count($allInvoice);
    } else {
            $totalInvoice=0;
    }	
    
   // echo "retest";exit;
    $smarty->assign('allInvoice',$allInvoice);
    $smarty->assign('generatedLink',$generatedLink);
    #print_r($allEmployee);
    $smarty->assign('totalInvoice',$totalInvoice);

    $smarty->assign('Errormssage',$error);
    $smarty->display('manage-online-payments.tpl');
?>



