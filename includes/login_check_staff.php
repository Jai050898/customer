<?php
if(!isset($_SESSION['User']['is_staff']) && empty($_SESSION['User']['is_staff']))
{
	header("Location:".MAINSITEURL."/customer-login.php?status=SE");
	exit(0);
}
?>
