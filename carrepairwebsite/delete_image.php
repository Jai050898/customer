<?php
require_once("includes/application_start.php");
unlink("photos/original/".$_REQUEST['val']);
unlink("photos/thumb/".$_REQUEST['val']);
unlink("photos/resize/".$_REQUEST['val']);
echo 'Success';
?>