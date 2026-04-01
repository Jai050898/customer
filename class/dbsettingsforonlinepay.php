<?php
global $dbArray;
$dbArray = array(
    "Hname"  => getenv('DB_HOST')     ? getenv('DB_HOST')     : "customer-db",
    "UName"  => getenv('DB_USERNAME') ? getenv('DB_USERNAME') : "automark_custusr",
    "Pass"   => getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : "rootpwd",
    "dbName" => getenv('DB_DATABASE') ? getenv('DB_DATABASE') : "automark_mm_cust"
);
?> 