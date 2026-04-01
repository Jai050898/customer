<?php
if(!isset($_SESSION['WRITER']['ID']) && empty($_SESSION['WRITER']['ID']))
{
	header("Location:".SITEURL."/writer/index.php");
	exit(0);
}
?>