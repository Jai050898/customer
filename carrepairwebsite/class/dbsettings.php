<?php
	global $dbArray;
	if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.50')
	{
		$dbArray= array("Hname" => "localhost",
						"UName" => "root",
						"Pass" => "",
						"dbName" => "naparepa_BDG");
	}
	else
	{
		/*$dbArray= array("Hname" => "localhost",
						"UName" => "carrepai_user",
						"Pass" => "foQ64eq6TgZw",
						"dbName" => "carrepai_db");*/
		$dbArray= array("Hname" => "localhost",
						"UName" => "navigato_user",
						"Pass" => "gzDblc&89Voq",
						"dbName" => "navigato_programmer");
	}
?>