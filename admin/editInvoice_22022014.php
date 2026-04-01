<?php
    require_once("../includes/application_start.php");
    require_once("../includes/admin.inc.php");
    require_once("../class/Invoice.class.php");
    require_once("../includes/login_check_admin.php");
    $phppath    = $_SERVER['PHP_SELF'];    
    $noId   = false;
    
    if(isset($_POST['btnSubmit'])) {
     $error = '';
        //echo "<pre>";print_r($_REQUEST);exit;
        $id  = addslashes(trim($_POST['hid_key']));
        if(isset($id) && is_numeric($id)) {
            $invoice=new Invoice($conn, $id);
            $invoiceNumber  = addslashes(trim($_POST['invoiceNumber']));
            $invoiceAmount  = addslashes(trim($_POST['invoiceAmount']));

            if($invoiceNumber   == '')
                    $error  = "Invoice Number can not be empty";
            elseif($invoiceAmount   == '')	
                    $error  = "Invoice Amount can not be empty";
            elseif(!is_numeric($invoiceAmount))	
                    $error  = "Invoice Amount needs to have a numeric value";
            else {		
                    $invoice->setproperty('id',$id);
                    $invoice->setproperty('invoiceNumber',$invoiceNumber);
                    $invoice->setproperty('invoiceAmount',$invoiceAmount);

                    $invoice->updateInvoice();
                    $error='Record Updated successfully!!!';
            }	
        }
    }
    
    
    // To Fetch Invoice Data
    $dataArray  = array();
    $id1  = (int)$_REQUEST['id'];
    
    if(isset($id1) && is_numeric($id1)) {
        $noId   = true;
        $invoice1    = new Invoice($conn, $id1);
        $dataArray	= $invoice1->getprofile();
    }
    
    //echo "<pre>";print_r($dataArray);exit;
    $smarty->assign('Errormssage',$error);
    $smarty->assign('noId',$noId);
    $smarty->assign('dataArray',$dataArray);
    
    $smarty->display('edit_invoice.tpl');
?>



