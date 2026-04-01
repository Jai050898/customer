<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    require_once("../includes/admin.inc.php");
    require_once("../class/Invoice.class.php");
    
    $Where      = " 1=1 ";
    $invoice    = new Invoice($conn);
    $generatedLink='';
    if(isset($_GET['action']) && $_GET['action']=='del' && is_numeric($_GET['id'])) {
        $id = (int)$_GET['id'];
        $invoice->delInvoice($id);
        $error  = 'Record deleted successfully!!!';
    }
    
    if(isset($_GET['action']) && $_GET['action']=='edit') {
            $error  = 'Record edited successfully!!!';
    }
    
    if(isset($_GET['action']) && $_GET['action']=='add') {
            $error  = 'Record added successfully!!!';
    }
    

    if(isset($_GET['action']) && $_GET['action']=='generateLink' && is_numeric($_GET['id'])) {
        
            $id = (int) $_GET['id'];
            $generatedLink  = '<table width="100%" cellspacing="0" cellpadding="0" >
                                <tr>
                                    <td height="32" bgcolor="#E0E0E0" align="center" style="border:#4A4A4A 1px solid; font-size:14px;">Link for invoice payment :: https://www.autorepairmarketing.com/savemoney.php?id='.$id.'</td>
                                </tr>
                                </table>';
            $recAry = $invoice->getInvoiceWhere('*', " id = ".$id);
            //echo "<pre>";print_r($recAry);exit;
            $invoice1    = new Invoice($conn, $id);
            
            $invoice1->setproperty('id',$id);
            $invoice1->setproperty('invoiceNumber',$recAry[0]['invoiceNumber']);
            $invoice1->setproperty('invoiceAmount',$recAry[0]['invoiceAmount']);
            $invoice1->setproperty('is_link_generated','Y');
            
            $invoice1->updateInvoice();
            $error  = 'Link generated successfully!!!';            
    }
    
    $invoice    = new Invoice($conn);
    
    $totalInvoice  = $invoice->getallInvoice();
	

    if(is_array($totalInvoice) && !empty($totalInvoice)) {
            $total   = count($totalInvoice);
    } 
    else {
            $total= 0;
    }	
    
    $Table		= "onlinepayments";
    $Fields		= "id, invoiceNumber, invoiceAmount, is_link_generated";
     
    $limit      = 25;
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
    $SortBy		= " id ".$getSort;

    if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
        $SortBy = $_REQUEST['sortby'] . " " . $getSort;
    }

    $Where  .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    $allInvoice  = $invoice->getInvoiceWhere($Fields, $Where);
    //echo '<prE>';print_r($allInvoice);exit;
    
    $srcpath 	= "page=";
    include("../includes/generate_pages.php");
    $smarty->assign("total",$total);
    $smarty->assign('allInvoice',$allInvoice);
    $smarty->assign('generatedLink',$generatedLink);
    $smarty->assign('Errormssage',$error);
    $smarty->display('manage-online-payments.tpl');
?>



