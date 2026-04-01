<?php
	global $dbArray;

	// Prefer docker/environment variables for portability.
	$dbArray = array(
		"Hname" => getenv('DB_HOST') ?: 'db',
		"UName" => getenv('DB_USER') ?: 'automark_custusr',
		"Pass" => getenv('DB_PASSWORD') ?: 'm#184DCuL~6e',
		"dbName" => getenv('DB_NAME') ?: 'automark_mm_cust'
	);
?>