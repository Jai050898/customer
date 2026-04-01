<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$image = $_REQUEST['img'];
$smarty->assign("image",$image);
$smarty->display('show-google-image.tpl');
?>