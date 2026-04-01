<?php
    define('PATH', '/home/automark/public_html/customer/photos/thumbnails/Thumbnails');
    
    // Establishing Connection
    $con = mysql_connect('localhost','automark_custusr', 'm#184DCuL~6e');
    mysql_select_db('db_automark_mm_cust', $con);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Fetching Directory Contents
    $filesArray = array();
    $d = dir(PATH) or die("Invalid Directory path: PATH");
    while (false !== ($entry = $d->read())) {
    if($entry != '.' && $entry != '..' && !is_dir($dir.$entry)) 
    $filesArray[] = $entry;
    }
    
    $d->close();
    
    //Sorting the array By Name in Ascending Order
    sort($filesArray);
    
    //echo "<pre>";print_r($filesArray);exit;
    
    // Inserting data into DB
    foreach($filesArray as $key=>$file){
        $sql = "INSERT INTO tbl_portfolio (image) VALUES('".$file."')";
        echo $sql.";<br>";
        mysql_query($sql , $con);
    }
    
    mysql_close($con);
?>