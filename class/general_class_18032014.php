<?php
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
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.154'){
                    //echo '<br>'.$qry.'<br>';//exit;
                }
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
            if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.155'){
                    //echo "<pre>";print_r($_REQUEST);
                   // echo '<br>'.$tbl_name.'<br>'.$selFields.'<br>'.$where.'<br>';exit;
                }
            
		//insert ',' between the field names
		if(is_array($selFields))
			$fields = @implode(',',$selFields);
		else
			$fields = $selFields;
		$qry = "SELECT ".$fields." FROM ".$tbl_name;
		if(isset($where) && $where != '')
			$qry .= " WHERE ".$where;
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.155'){
                    //echo "<pre>";print_r($_REQUEST);
                    //echo '<br>'.$qry.'<br>';//exit;
                }
		//exit;
		
		$res_arr = $this->SelectQuery($qry);
                return $res_arr;	//returns the result array
	}
	function GetInfoBy($tbl_name,$field,$value)
	{
		$qry="SELECT * FROM ".$tbl_name." WHERE ".$field." = ".$value;		
		//echo $qry."<br>";
		$arrRes = $this->SelectQuery($qry);
		return $arrRes[0];
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
                 
                 if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.154'){
                    //echo $Qry;
                    //echo '<br>';
                    //exit;
                }
                 
		//echo $Qry;
		//echo '<br>';
		//exit;
		
		$Result = $this->ExecQuery($Qry);
		return $Result;
	}
	/********** Function to get the list of States of a selected Country ****/
	function GetCountryStates($code)
	{
		$Qry = "SELECT State_ID,State_Name,State_Code FROM tbl_states WHERE Country_Code  = '".$code."' ORDER BY State_Name";
		$states = $this->SelectQuery($Qry);
		return $states;
	}
	/***************** Function For Send Mail to the User From Admin *******************************/	
	function mymail($tomail,$frommail,$subject,$username,$message)
	{
		//echo "<br><br>";
		//echo $tomail."+++".$frommail."@@".$subject."##".$username."&&".$message;exit;
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
		<strong class='bluefontbig'> Motor Head Marketing Team</strong>
		</td>
		</tr>
		</table>
		</body>
		</html> ";
		//echo "<pre>";echo $subject."<br>".$msg;
		if(@mail($tomail,$subject,$msg,$headers))
		 	$msgs = "Mail Successfully Sent";
		else
			$msgs = "Mail Not Sent";
			//echo "<pre>";echo $msgs; exit;
		return $msgs;
	}
	/***************** Function For Send Mail to the User From Admin *******************************/	
	function adminmail($tomail,$frommail,$subject,$username,$message)
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
		<td align='left'><b>Hi Admin</b>,<br><br><br>".$message;
		$msg .= "<br><br>";
		$msg .= "Kind regards,<br>
		<strong class='bluefontbig'> Motor Head Marketing Team</strong>
		</td>
		</tr>
		</table>
		</body>
		</html> ";
		//echo $tomail;echo "<br>";
		//echo "<pre>";echo $subject."<br>".$msg;exit;
		if(@mail($tomail,$subject,$msg,$headers))
		 	$msgs = "Mail Successfully Sent";
		//	echo "<pre>";echo $msgs; exit;
		return $msgs;
	}
	function Date_Format($date)
	{
		if($date != "")
		{
			$yr  = substr($date,6,4);
			$dt  = substr($date,3,2);
			$mt  = substr($date,0,2);
			return  $yr."-".$mt."-".$dt;
		}
	}//Date_Format
	function getAdminUploadedDocs()
	{
		if($_SESSION['User']['user_name'])
		{
			//echo SITEPATH.'/Secured/'.$_SESSION['User']['user_name'].'/adminUploads/';exit;
			if(is_dir(SITEPATH.'/Secured/'.$_SESSION['User']['user_name'].'/adminUploads/'))
			{
				if ($handle = opendir(SITEPATH.'/Secured/'.$_SESSION['User']['user_name'].'/adminUploads/')) 
				{
					$fileArray = array();
				   while (false !== ($file = readdir($handle))) 
				   {	
					  if ($file != "." && $file != "..")
						 $fileArray[]=$file;
				   }
				   closedir($handle);
				}
			}
			if(!empty($fileArray))
				return $fileArray;
			else
				return false;
		}
		else
		{
			return false;
		}	
	
	}
	function IsSurveyCompleted()
	{
		//code to get step1
		$flag = true;
		$step1cnt = $this->TotalRows("tbl_basic_information","UserId = '".$_SESSION['User']['UID']."'");
		if($step1cnt == "0")
			$flag = false;
		$step2cnt = $this->TotalRows("tbl_business_profile","UserId = '".$_SESSION['User']['UID']."'");
		if($step2cnt == "0")
			$flag = false;
		$step3cnt = $this->TotalRows("tbl_marketing_opportunities","UserId = '".$_SESSION['User']['UID']."'");
		if($step3cnt == "0")
			$flag = false;
		$step4cnt = $this->TotalRows("tbl_customer_profile","UserId = '".$_SESSION['User']['UID']."'");
		if($step4cnt == "0")
			$flag = false;
		$step5cnt = $this->TotalRows("tbl_service_practices","UserId = '".$_SESSION['User']['UID']."'");
		if($step5cnt == "0")
			$flag = false;
		$step6cnt = $this->TotalRows("tbl_marketing_elements","UserId = '".$_SESSION['User']['UID']."'");
		if($step6cnt == "0")
			$flag = false;
		$step7cnt = $this->TotalRows("tbl_marketing_leaders","UserId = '".$_SESSION['User']['UID']."'");
		if($step7cnt == "0")
			$flag = false;
		//echo $flag;exit;
		return $flag;
	}
	function IsWebSurveyCompleted()
	{
		//code to get step1
		$flag = true;
		$step1cnt = $this->TotalRows("web_tbl_basic_information","UserId = '".$_SESSION['User']['UID']."'");
		if($step1cnt == "0")
			$flag = false;
		$step2cnt = $this->TotalRows("web_tbl_branding","UserId = '".$_SESSION['User']['UID']."'");
		if($step2cnt == "0")
			$flag = false;
		$step3cnt = $this->TotalRows("web_tbl_company_history","UserId = '".$_SESSION['User']['UID']."'");
		if($step3cnt == "0")
			$flag = false;
		$step4cnt = $this->TotalRows("web_tbl_competitive_advantages","UserId = '".$_SESSION['User']['UID']."'");
		if($step4cnt == "0")
			$flag = false;
		$step5cnt = $this->TotalRows("web_tbl_marketing","UserId = '".$_SESSION['User']['UID']."'");
		if($step5cnt == "0")
			$flag = false;
		$step6cnt = $this->TotalRows("web_tbl_notoriety","UserId = '".$_SESSION['User']['UID']."'");
		if($step6cnt == "0")
			$flag = false;
		$step7cnt = $this->TotalRows("web_tbl_other_info","UserId = '".$_SESSION['User']['UID']."'");
		if($step7cnt == "0")
			$flag = false;
		$step8cnt = $this->TotalRows("web_tbl_policy","UserId = '".$_SESSION['User']['UID']."'");
		if($step8cnt == "0")
			$flag = false;
		$step9cnt = $this->TotalRows("web_tbl_services","UserId = '".$_SESSION['User']['UID']."'");
		if($step9cnt == "0")
			$flag = false;
		$step10cnt = $this->TotalRows("web_tbl_stuff","UserId = '".$_SESSION['User']['UID']."'");
		if($step10cnt == "0")
			$flag = false;
		//echo $flag;exit;
		return $flag;
	}
	function IsIntegratedSurveyCompleted()
	{
		//code to get step1
		$flag = true;
		$step1cnt = $this->TotalRows("tbl_survey_basic_information","UserId = '".$_SESSION['User']['UID']."'");
		if($step1cnt == "0")
			$flag = false;
		$step2cnt = $this->TotalRows("tbl_survey_branding","UserId = '".$_SESSION['User']['UID']."'");
		if($step2cnt == "0")
			$flag = false;
		$step3cnt = $this->TotalRows("tbl_survey_business_profile","UserId = '".$_SESSION['User']['UID']."'");
		if($step3cnt == "0")
			$flag = false;
		$step4cnt = $this->TotalRows("tbl_survey_company_history","UserId = '".$_SESSION['User']['UID']."'");
		if($step4cnt == "0")
			$flag = false;
		$step5cnt = $this->TotalRows("tbl_survey_customer_profile","UserId = '".$_SESSION['User']['UID']."'");
		if($step5cnt == "0")
			$flag = false;
		$step6cnt = $this->TotalRows("tbl_survey_marketing_elements","UserId = '".$_SESSION['User']['UID']."'");
		if($step6cnt == "0")
			$flag = false;
		$step7cnt = $this->TotalRows("tbl_survey_marketing_info","UserId = '".$_SESSION['User']['UID']."'");
		if($step7cnt == "0")
			$flag = false;
		$step8cnt = $this->TotalRows("tbl_survey_marketing_leaders","UserId = '".$_SESSION['User']['UID']."'");
		if($step8cnt == "0")
			$flag = false;
		$step9cnt = $this->TotalRows("tbl_survey_marketing_opportunities","UserId = '".$_SESSION['User']['UID']."'");
		if($step9cnt == "0")
			$flag = false;
		$step10cnt = $this->TotalRows("tbl_survey_notoriety","UserId = '".$_SESSION['User']['UID']."'");
		if($step10cnt == "0")
			$flag = false;
		$step11cnt = $this->TotalRows("tbl_survey_other_info","UserId = '".$_SESSION['User']['UID']."'");
		if($step11cnt == "0")
			$flag = false;
		$step12cnt = $this->TotalRows("tbl_survey_policy","UserId = '".$_SESSION['User']['UID']."'");
		if($step12cnt == "0")
			$flag = false;
		$step13cnt = $this->TotalRows("tbl_survey_services","UserId = '".$_SESSION['User']['UID']."'");
		if($step13cnt == "0")
			$flag = false;
		$step14cnt = $this->TotalRows("tbl_survey_stuff","UserId = '".$_SESSION['User']['UID']."'");
		if($step14cnt == "0")
			$flag = false;
		//echo $flag;exit;
		return $flag;
	}
	function generate_code($number)
	{
		//echo $number,exit;
		$out   = "";
		//$number = "";
		$codes = "abcdefghjkmnpqrstuvwxyz23456789ABCDEFGHJKMNPQRSTUVWXYZ";
	
		while ($number > 53) 
		{
			$key    = $number % 54;
			$number = floor($number / 54) - 1;
			$out    = $codes{$key}.$out;
		}
		//echo $codes{$number};exit;
    	return $codes{$number}.$out;
	}
        
        // To Convert A given date to YYYY-MM-DD Format
        function ConvertToValidDate($date) {
            $formats = array("M j Y H:iA", "j/n/Y","Y-m-d H:i:sP"); // and so on.....
            $dates = array($date,true,false);
            
            //echo "<pre>";print_r($formats);print_r($dates);
            
            $ret = array();
            foreach ($dates as $input) 
             { 
                if($input != ''){
                    foreach ($formats as $format)
                    {
                      //echo "Applying format $format on date $input...<br>";
                      $date = DateTime::createFromFormat($format, $input);
                      //echo "<br>date-->";print_r($date);
                      //if ($date == false) 
                        //echo "Failed<br>";
                      if ($date == true) {
                        $ret[]= $date->format('Y-m-d H:i:s');
                        //echo "Success:".$ret."<br>";
                      }
                    }
                }
             }
             return $ret;
        }
}
?>
