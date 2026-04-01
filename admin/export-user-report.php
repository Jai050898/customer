<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
require_once("../class/export_excel_class.php");
$usr 		= new General;
$fn="customer-report".time().".csv";
$excel_obj=new ExportExcel("$fn");	
/*****section to get the details from data base*********************/
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= "A.xml_id,A.user_id,A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.address,A.phone,A.country,A.state,A.city,A.zip_code,A.garage_mgmt_software_version,A.server_operating_system,A.status,A.website,B.Country_Name,C.State_Name,C.State_Code";

$SortBy		= " A.company_name asc";

$Where		.= " A.status = 'A' ORDER BY ".$SortBy;
$User	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($User);exit;
$exportarr = array();

//echo "<pre>";print_r($exportarr);exit;
$Arr = array();
$Arr['report_header']=array("Ext.ID","CompanyName","Co.Address","Co.City","Co.State", "Co.Zip", "ShopMgmtSystem", "Co.Phone", "Co.Email", "Contact", "OS"); 
for($r=0;$r<count($User);$r++)
{
        $Arr['report'][$r][0]   = $User[$r]['xml_id'];
        $Arr['report'][$r][1]   = stripslashes($User[$r]['company_name']);
        $Arr['report'][$r][2]   = stripslashes($User[$r]['address']);
        $Arr['report'][$r][3]   = stripslashes($User[$r]['city']);
        $Arr['report'][$r][4]   = stripslashes($User[$r]['State_Code']);
        $Arr['report'][$r][5]   = $User[$r]['zip_code'];
        $Arr['report'][$r][6]   = stripslashes($User[$r]['sgarage_mgmt_software_version']);
        $Arr['report'][$r][7]   = $User[$r]['phone'];
        $Arr['report'][$r][8]   = stripslashes($User[$r]['email']);
        $Arr['report'][$r][9]   = stripslashes($User[$r]['first_name'])." ".stripslashes($User[$r]['last_name']);
        $Arr['report'][$r][10]  = stripslashes($User[$r]['server_operating_system']);
}	
//echo "<pre>";print_r($Arr);exit;
$excel_obj->setHeadersAndValues($Arr['report_header'],$Arr['report']); 
$excel_obj->GenerateExcelFile();
exit();

?>