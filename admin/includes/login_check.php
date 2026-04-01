<?php
require_once("../../includes/menu_items.php");
if(!isset($_SESSION['Admin']['ID']) && $_SESSION['Admin']['ID'] == "")
{
	header("Location:".SITEURL."/index.php");
	exit(0);
}
?>