<?php
/****************************************************************
* Description	: This is the Class which extends DB class
* Author		: Varaprasad
* Created Date	: 01/17/2010 (MM/DD/YYYY)
* Modified by 	: Venu Gopal
* Date 			:	xx/xx/xxxx (MM/DD/YYYY)
* Reason 		: xxxx xxxxxx
*****************************************************************/
class General extends DB 
{
	function TotalRows($tbl,$where=1)
	{
		$wherelist = NULL;
		if(isset($where))
		{
			if(is_array($where))
			{
				reset($where);
				while(list($k,$v)=each($where))
					$wherelist[]=$k." = '".$v."'";				
			}
			else
				$condition = $where;				
		}
		else
			$condition = 1;
		if(is_array($wherelist))
				$condition.=implode(" and ",$wherelist);				
		$qry = "SELECT COUNT(*) as cnt FROM ".$tbl." WHERE ".$condition;
		//echo $qry;
		//echo '<br>';
		$res = $this->SelectQuery($qry);
		return $res[0][cnt];
	}
	function GetAllWhereAnd($tbl, $where)
	{	
		if(is_array($where))
		{
			foreach($where as $fieldName => $value)
			{
				if($condition == '')
				$condition = $fieldName."="."'".$value."'";
				else
				$condition .= " AND ".$fieldName."="."'".$value."'";
			}
		}
		else
			$condition = $where;
		$qry = "SELECT * FROM ".$tbl." WHERE ".$condition;
		//echo "<pre>";
		//echo $qry;
		$Result = $this->SelectQuery($qry);
		return $Result;
	}
	function GetAllWhere($tbl, $where)
	{
	   //echo $tbl."<br>";
		$qry = "SELECT * FROM ".$tbl." WHERE ".$where;
		//echo $qry."<br>";
		$Result = $this->SelectQuery($qry);
		//echo "<pre>";
		//print_r($Result);
		return $Result;
	}
	function GetSelWhere($tbl_name,$selFields,$where)
	{
		//insert ',' between the field names
		if(is_array($selFields))
			$fields = @implode(',',$selFields);
		else
			$fields = $selFields;
		$qry = "SELECT ".$fields." FROM ".$tbl_name;
		if(isset($where) && $where != '')
			$qry .= " WHERE ".$where;
		//echo $qry.'<br>';
		//exit;
		
		$res_arr = $this->SelectQuery($qry);
		return $res_arr;	//returns the result array
	}
	function InsertQry($tbl, $insAry)
	{ 
		foreach($insAry as $key => $value)
		{
			$insertFields[] = $key;
			
			if(($value == 'now()') || ($value == 'NOW()'))
				$insertValues[] = addslashes($value);
			else if($key == 'password')
				$insertValues[] = "'".addslashes(base64_encode($value))."'";	
			else
				$insertValues[] = "'".addslashes($value)."'";
		}
		$Qry = "INSERT INTO ".$tbl." (".implode(", ", $insertFields).") VALUES (".implode(", ",$insertValues).")";
		//echo $tbl;
		//echo"<pre>";
		//print_r($insAry);
	 	//echo $Qry."<br>";
		//exit;
		$Result = $this->InsertQuery($Qry);
		return $Result;
	}
	function DeleteQry($tbl, $where)
	{
	  $Qry = "DELETE FROM ".$tbl." WHERE ".$where;
	   //echo $Qry;echo '<br>';
	   // exit;
		$Result = $this->ExecQuery($Qry);
		return $Result;
	}
	function UpdateQry($tbl_name,$fields,$where_condition)
	{
		//get the column names and their values 
		$no_of_fields = count($fields);	//no. of fields
		foreach($fields as $key=>$col_val)
		{
			$cols[]  = $key;	//get the column names	
			if(($col_val == 'now()') || ($col_val == 'NOW()'))
				$values[] = addslashes($col_val);//get the values  
			else if($col_val == 'NULL')
				$values[] = addslashes($col_val);//get the values
			else
				$values[] = "'".addslashes($col_val)."'";//get the values  
		}
		//get the fields n their values in 1 string
		$str = "";
		for($i=0; $i<$no_of_fields; $i++)
		{
			//for the 1st field,append without ','
			if($str == '')
				$str = $cols[$i]." = ".$values[$i];
			else 
				$str .= ",". $cols[$i]." = ".$values[$i];
		}
		
		//Update query
		 $Qry = "UPDATE ".$tbl_name." SET ".$str." WHERE ".$where_condition;
		//echo $Qry;
		//echo '<br>';
		//exit;
		
		$Result = $this->ExecQuery($Qry);
		return $Result;
	}
	/********** Function to get the list of States of a selected Country ****/
	function GetCountryStates($code)
	{
		$Qry = "SELECT State_ID,State_Name FROM tbl_states WHERE Country_Code  = '".$code."' ORDER BY State_Name";
		$states = $this->SelectQuery($Qry);
		return $states;
	}
	/***************** Function For Send Mail to the User From Admin *******************************/	
	function mymail($tomail,$frommail,$subject,$username,$message)
	{
		//echo "<br><br>";
		//echo $tomail."+++".$frommail."@@".$subject."##".$username."&&".$message;
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: ".$frommail;
		$msg = "<html>
		<head>
		<style type='text/css'>
		body{padding:0px; margin:0px; font-family:Arial; font-size:12px; color:#0000; line-height:12px;}
		bluefontbig{font-family:Arial;font-size:12px; font-weight:bold; color:#0079DE;}
		</style>
		</head>
		<body>
		<table width='600' cellpadding='2' cellspacing='0' style='font-size:12px;'>
		<tr> 
		<td align='left'><b>Hi ".ucfirst($username)."</b>,<br><br><br>".$message;
		$msg .= "<br><br>";
		$msg .= "Kind regards,<br>
		<strong class='bluefontbig'> --- Team</strong>
		</td>
		</tr>
		</table>
		</body>
		</html> ";
		//echo "<pre>";echo $subject."<br>".$msg;exit;
		if(@mail($tomail,$subject,$msg,$headers))
		 	$msgs = "Mail Successfully Sent";
		//	echo "<pre>";echo $msgs; exit;
		return $msgs;
	}
	/*************Function to get Answer percentage for Poll************************************/
	function GetPercentage($qid,$oid)
	{
		//Code to get total polled votes for question
		$TotalVotes = $this->TotalRows("tbl_poll_answers", " poll_quest_id  = '".$qid."'");
		$TotalOptionVotes = $this->TotalRows("tbl_poll_answers", " option_id  = '".$oid."'");
		if($TotalVotes != 0 && $TotalOptionVotes  != 0)
			return ($TotalOptionVotes/$TotalVotes)*100;
		else
			return 0;
	}
}
?>