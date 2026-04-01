<?php
if(!isset($_SESSION['Admin']['ID']) && empty($_SESSION['Admin']['ID']))
{
	header("Location:".SITEURL."/admin/index.php");
	exit(0);
}
?>