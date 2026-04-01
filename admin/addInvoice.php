<?php
    require_once("../includes/application_start.php");
    require_once("../includes/admin.inc.php");
    require_once("../class/Invoice.class.php");
    require_once("../includes/login_check_admin.php");
	$phppath=$_SERVER['PHP_SELF'];


if(isset($_POST['btnSubmit'])&& $_POST['btnSubmit'] == 'Submit')
{
	 $error = '';
	$invoice=new Invoice($conn);
	
	$invoiceNumber=addslashes(trim($_POST['invoiceNumber']));
	$invoiceAmount=addslashes(trim($_POST['invoiceAmount']));

	if($invoiceNumber=='')
		$error="Invoice Number can not be empty";
	elseif($invoiceAmount=='')	
		$error="Invoice Amount can not be empty";
	elseif(!is_numeric($invoiceAmount))	
		$error="Invoice Amount needs to have a numeric value";
	else
	{		
		$invoice->setproperty('invoiceNumber',$invoiceNumber);
		$invoice->setproperty('invoiceAmount',$invoiceAmount);
		
		$invoice->addInvoice();
		header('Location: manage-online-payments.php?action=add');
                exit(0);
		//$error='Record added successfully!!!';
	}	
	
	
}

$smarty->assign('Errormssage',$error);
$smarty->display('addInvoice.tpl');
?>



