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
						"UName" => "navigato_fduser",
						"Pass" => "Xa,HV.C0vtiw",
						"dbName" => "navigato_fd");
	}
?>