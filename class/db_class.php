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
global $dbArray;
$dbArray = array(
    "Hname"  => "db",                 // 👈 docker service name
    "UName"  => "automark_custusr",
    "Pass"   => "m#184DCuL~6e",
    "dbName" => "automark_mm_cust"
);

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
           mysqli_close($this->conn);
        }
        function __wakeup()
        {
                if(!$this->conn)
                        $this->Connect();
        }				

		// This is the Function For DB Connection
		function Connect()
		{
		   	global $dbArray;
			$this->conn = mysqli_connect(
            $this->hostName,
            $this->dbUserName,
            $this->dbPassword,
            $this->dbName
        );
			if(!$this->conn)
			{
				die('Error: Could not connect to MySQL server: ' . mysqli_connect_error());
			}
			mysqli_set_charset($this->conn, "utf8");
		}
		
		// This is the Function For Selecting DB
		function SelectDB($dbname)
		{
			if(!mysqli_select_db($this->conn, $dbname)) 
			{ die('Error: Could not select database: ' . mysqli_error($this->conn)); }
		}
		
		// This is the Function For Disconnecting DB Connection
		function Close($c)
		{
			return mysqli_close($c);
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
				if(!($SqlQuery=mysqli_query($this->conn, $SelQuery)))
				{
					$myerror = mysqli_error($this->conn);
					echo "sql error [$myerror]\n";
					return 0;
				}
				else
				{
					$cnt = @mysqli_num_rows($SqlQuery);
					
					while($Res_row=@mysqli_fetch_assoc($SqlQuery))
					{
						@array_push($selectRes, $Res_row);// Result Array
					}
				}
			@mysqli_free_result($SqlQuery);
		   	return($selectRes);// Returnind result array
			//print_r($selectRes);
		}
	
	
	
	
		
		/* This is the Function For Executing Query
		* Return Query was executed successfully or not 
	/* We have to Pass Query*/
		function ExecQuery($Qry)
		{
			if($ExecRes = mysqli_query($this->conn, $Qry))
			{$ret = 0;}
						
			return $ret;
		}
		
		// This is the Function to Return Resourceid of the Executed Query
		function Fetch_Result($Qry)
		{
			$ExecRes = mysqli_query($this->conn, $Qry);
			return $ExecRes;
		}
		
		//function to retrieve the no. of rows
		function NumRows($Qry)
		{
		
			if($NumRes = mysqli_query($this->conn, $Qry))
			{$ret = @mysqli_num_rows($NumRes);}
			else
			{$ret = @mysqli_num_rows($NumRes);}
			return $ret;
		}
		
		//Function for Inserting Records
		function InsertQuery($InsQry)
		{
                        //echo '<br>'.$InsQry.'<br>';exit;
			if($InsRes = mysqli_query($this->conn, $InsQry))
			{
				$ret = mysqli_insert_id($this->conn);// Returning Insert id
			}
			else
			{
				$myerror = mysqli_error($this->conn);
				echo "sql error [$myerror]\n";
				return 0;
			}
			
			return $ret;
		}
		
	}
?>