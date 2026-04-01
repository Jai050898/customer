<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

echo "=== Testing Database Connection ===\n\n";

// Get environment variables
$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbUser = getenv('DB_USER') ?: 'automark_custusr';
$dbPass = getenv('DB_PASSWORD') ?: 'm#184DCuL~6e';
$dbName = getenv('DB_NAME') ?: 'automark_mm_cust';

echo "DB_HOST: " . $dbHost . "\n";
echo "DB_USER: " . $dbUser . "\n";
echo "DB_NAME: " . $dbName . "\n\n";

// Test mysqli
echo "Testing mysqli_connect()...\n";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(!$conn) {
    echo "ERROR: " . mysqli_connect_error() . "\n";
} else {
    echo "SUCCESS: Connected to database\n";
    
    // Test a simple query
    echo "\nTesting SELECT from tbl_users...\n";
    $result = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM tbl_users");
    
    if(!$result) {
        echo "ERROR: " . mysqli_error($conn) . "\n";
    } else {
        $row = mysqli_fetch_assoc($result);
        echo "SUCCESS: Found " . $row['cnt'] . " users\n";
    }
    
    mysqli_close($conn);
}
?>
