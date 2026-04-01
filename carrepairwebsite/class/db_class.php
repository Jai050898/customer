<?php
/****************************************************************
* Description: This is the Class for Connecting to Database 
*			   and also for executing MySQL Queries
* Author: Lavanya
* Date: 30/10/2007 (MM/DD/YYYY)
* Revision:
* 	Modified by :	xxxxxxxx
*	Date 		:	xx/xx/xxxx (MM/DD/YYYY)
*	Modified Reason : xxxx xxxxxx
*****************************************************************/

	class DB {
		
		var $conn;
		var $hostName, $dbUserName, $dbPassword, $dbName, $dbPrefix;
		

		// Constructor For Db Connection
		function __construct()
		{
			global $dbArray;
			
			//Assigning DB Details
			$this->hostName   = $dbArray['Hname']; // Host Name
			$this->dbUserName = $dbArray['UName']; // Db User Name
			$this->dbPassword = $dbArray['Pass']; // Db Password
			$this->dbName     = $dbArray['dbName']; // Db Name
			
			if(!$this->conn)
				$this->Connect(); // Function Call to Connect Db
		}
		
		
/*		function __destruct() 
        {
           $this->Close($this->conn);
        }
*/        
        function __sleep()
        {
           mysql_close($this->conn);
        }
        function __wakeup()
        {
                if(!$this->conn)
                        $this->Connect;
        }				

		// This is the Function For DB Connection
		function Connect()
		{
		   	global $dbArray;
			$this->conn=mysql_connect($this->hostName,$this->dbUserName,$this->dbPassword);// Connecting to DB
			$this->SelectDB($this->dbName);// Function Call to Select DB
		}
		
		// This is the Function For Selecting DB
		function SelectDB($dbname)
		{
			if(!mysql_select_db($dbname,$this->conn)) 
			{ return 0; } // return 0, if Unsuccessfull Connection
		}
		
		// This is the Function For Disconnecting DB Connection
		function Close($c)
		{
			return mysql_close($c);
		}
		
		/* This is the Function For Select Query
		* values to be pass
		* $SelQuery => Select Query */
		function SelectQuery($SelQuery)
		{
		   	global $dbArray;
			$selectRes = array();
		   
		   	//echo $SelQuery ."<br>";
/*                if(!$this->conn)
                        $this->Connect;*/
				if(!($SqlQuery=mysql_query($SelQuery,$this->conn)))
				{
					$myerror = mysql_error($this->conn);
					echo "sql error [$myerror]\n";
					return 0;
				}
				else
				{
					$cnt = @mysql_num_rows($SqlQuery);
					
					while($Res_row=@mysql_fetch_assoc($SqlQuery))
					{
						@array_push($selectRes, $Res_row);// Result Array
					}
				}
			@mysql_free_result($SqlQuery);
		   	return($selectRes);// Returnind result array
			//print_r($selectRes);
		}
	
	
	
	
		
		/* This is the Function For Executing Query
		* Return Query was executed successfully or not 
	/* We have to Pass Query*/
		function ExecQuery($Qry)
		{
			if($ExecRes = mysql_query($Qry,$this->conn))
			{$ret = 1;}
			else
			{$ret = 0;}
						
			return $ret;
		}
		
		// This is the Function to Return Resourceid of the Executed Query
		function Fetch_Result($Qry)
		{
			$ExecRes = mysql_query($Qry,$this->conn);
			return $ExecRes;
		}
		
		//function to retrieve the no. of rows
		function NumRows($Qry)
		{
		
			if($NumRes = mysql_query($Qry,$this->conn))
			{$ret = @mysql_num_rows($NumRes);}
			else
			{$ret = @mysql_num_rows($NumRes);}
			return $ret;
		}
		
		//Function for Inserting Records
		function InsertQuery($InsQry)
		{
			if($InsRes = mysql_query($InsQry,$this->conn))
			{	
				$ret = mysql_insert_id();// Returning Insert id
			}
			else
			{
				$myerror = mysql_error($this->conn);
				echo "sql error [$myerror]\n";
				return 0;
			}
			
			return $ret;
		}
		
	}
?>