<?php
if(!isset($_SESSION['SEO']['ID']) && empty($_SESSION['SEO']['ID']))
{
	header("Location:".SITEURL."/seo/index.php");
	exit(0);
}
?>