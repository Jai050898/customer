<?php
if(!isset($_SESSION['User']['UID']) && empty($_SESSION['User']['UID']))
{
	header("Location:".SITEURL."/index.php");
	exit(0);
}
?>