<?php
	global $dbArray;
	if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.52')
	{
		$dbArray= array("Hname" => "localhost",
						"UName" => "root",
						"Pass" => "123456",
						"dbName" => "rsvp");
	}
	else
	{
		$dbArray= array("Hname" => "localhost",
						"UName" => "motorhea_dbadmin",
						"Pass" => "a02_3?e3",
						"dbName" => "motorhea_core");
	}
?>