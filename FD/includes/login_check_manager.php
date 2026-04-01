<?php
if(!isset($_SESSION['Manager']['ID']) && empty($_SESSION['Manager']['ID']))
{
	header("Location:".SITEURL."/manager/index.php");
	exit(0);
}
?>