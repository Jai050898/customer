<?php
require_once("menu_items.php");

//if((!isset($_SESSION['User']['UID']) && empty($_SESSION['User']['UID']))  || (!isset($_SESSION['Admin']['ID']) && $_SESSION['Admin']['ID'] == "")) 
if(!isset($_SESSION['User']['UID'])  &&  !isset($_SESSION['Admin']['ID']) ) 
{  
	header("Location:".MAINSITEURL."/customer-login.php?status=SE");
	exit(0);
}else if(isset($_SESSION['User']['UID']) && $_SESSION['User']['is_staff']== 'Y'){
    header("Location:".MAINSITEURL."/customer/customer-recent-customers_new_staff.php?status=UA");
    exit(0);
}
?>
