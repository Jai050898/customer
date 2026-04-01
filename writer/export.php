<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_writer.php");
require_once("../class/export_excel_class.php");
$usr 		= new General;
$fn="keywords".time().".csv";
$excel_obj=new ExportExcel("$fn");	
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
	$Fields		= "A.*,B.Country_Name,C.State_Name,C.State_Code";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo "<pre>";print_r($User);exit;
	$exportarr = array();
	if($User[0]['services'] != "" )
	{
		$Table1		= "tbl_keywords";
		$Fields1		= "key_id,key_name,status,created_date";
		$Where1 		= " 1=1 AND status = 'A' AND key_id IN (".$User[0]['services'].")";
		$Key	= $usr->GetSelWhere($Table1,$Fields1,$Where1);
		$exportarr = array();
		for($i=0;$i<count($Key);$i++)
		{
			$exportarr[] = $Key[$i]['key_name']." ".$User[0]['city']." ".$User[0]['State_Code'];
		}
		if(count($Key) > 0)
		{
			$Cities	= $Gen->GetSelWhere('tbl_shops_cites','*'," sid = '".$_REQUEST['user_id']."' ORDER BY id");
			for($j=0;$j<count($Cities);$j++)
			{
				for($k=0;$k<count($Key);$k++)
				{
					$exportarr[] = $Key[$k]['key_name']." ".$Cities[$j]['city_name']." ".$User[0]['State_Code'];
				}
			}
		}
	}
	//echo "<pre>";print_r($exportarr);exit;
	$Arr = array();
	$Arr['report_header']=array("Keyword"); 
	for($r=0;$r<count($exportarr);$r++)
	{
		$Arr['report_values'][$r][0]=$exportarr[$r];
	}	
	//echo "<pre>";print_r($Arr);exit;
	$excel_obj->setHeadersAndValues($Arr['report_header'],$Arr['report_values']); 
	$excel_obj->GenerateExcelFile();
	exit();
}
?>