<?php
if(!isset($_SESSION['Client']['CID']) && empty($_SESSION['Client']['CID']))
{
	header("Location:".SITEURL."/client/index.php");
	exit(0);
}
?>