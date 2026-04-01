<?php
class ExportExcel
{
	//variable of the class
	var $titles=array();
	var $all_values=array();
	var $filename;
	
	//functions of the class
	function ExportExcel($f_name) //constructor
	{
		$this->filename=$f_name;
	}
	function setHeadersAndValues($hdrs,$all_vals) //set headers and query
	{
		$this->titles=$hdrs;
		$this->all_values=$all_vals;
	}
	function GenerateExcelFile() //function to generate excel file
	{
		//echo "<pre>";print_r($this->titles);exit;
		$header = '';
		$data = '';
		foreach ($this->titles as $title_val) 
 		{
 			$header .= $title_val."\t"; 
 		} 
		//echo $header;exit;
 		for($i=0;$i<sizeof($this->all_values);$i++) 
 		{ 
 			$line = ''; 
 			foreach($this->all_values[$i] as $value) 
			{ 
 				if ((!isset($value)) OR ($value == "")) 
				{ 
 					$value = "\t"; 
 				} //end of if
				else 
				{ 
 					$value = str_replace('"', '""', $value); 
 					$value = '"' . $value . '"' . "\t"; 
 				} //end of else
 				$line .= $value; 
 			} //end of foreach
 			$data .= trim($line)."\n"; 
 		}//end of the while 
 		$data = str_replace("\r", "", $data); 
		if ($data == "") 
 		{ 
 			$data = "\n(0) Records Found!\n"; 
 		} 
		//echo $header;exit;
		header("Content-type: application/vnd.ms-excel"); 
		header("Content-Disposition: attachment; filename=$this->filename"); 
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		print "$header\n$data";  	
	}
	function MoveExcelFile() //function to generate excel file
	{
		//echo "<pre>";print_r($this->titles);exit;
		$header = '';
		$data = '';
		foreach ($this->titles as $title_val) 
 		{ 
 			$header .= $title_val."\t"; 
 		} 
		//echo $header;exit;
 		for($i=0;$i<sizeof($this->all_values);$i++) 
 		{ 
 			$line = ''; 
 			foreach($this->all_values[$i] as $value) 
			{ 
 				if ((!isset($value)) OR ($value == "")) 
				{ 
 					$value = "\t"; 
 				} //end of if
				else 
				{ 
 					$value = str_replace('"', '""', $value); 
 					$value = '"' . $value . '"' . "\t"; 
 				} //end of else
 				$line .= $value; 
 			} //end of foreach
 			$data .= trim($line)."\n"; 
 		}//end of the while 
 		$data = str_replace("\r", "", $data); 
		if ($data == "") 
 		{ 
 			$data = "\n(0) Records Found!\n"; 
 		}
		$Totaldata = $header."\n".$data;
		 $myFile = SITEPATH."/excels/".$this->filename;
		 $fh = fopen($myFile, 'w') or die("can't open file");
		 $stringData = $Totaldata;
		 fwrite($fh, $stringData);
		 fclose($fh);
		//copy($myFile,SITEPATH."/excels/".$this->filename);
		//unlink($myFile);
	}
}
?>