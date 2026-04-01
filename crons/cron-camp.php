<?php
require_once("/home/automark/public_html/customer/includes/application_start.php");
require_once("/home/automark/public_html/customer/apiwrapper/examples/Webthumb/usage.php");
$usr 		= new General;
$Users = $usr->GetSelWhere("tbl_users ","*","1=1 AND status = 'A' AND comp_date < '".date("y-m-d")."' LIMIT 0,2");
for($i=0;$i<count($Users);$i++)
{
	//Check for google code
	$camp = $usr->GetAllWhere("tbl_competitors ","user_id = '".$Users[$i]['user_id']."' AND status = 'A'");
	if(count($camp) == 0 )
	{
		for($j=0;$j<count($camp);$j++)
		{
			//Code for google
			$url = $camp[$j]['website'];
			$res = usage($url,"G");
			$PrFields['customer_id'] = $Users[$i]['user_id'];
			$PrFields['comp_id'] = $camp[$j]['id'];
			$PrFields['date'] = date("Y-m-d");
			$PrFields['image'] = $res.".jpg";
			$ins= $Gen->InsertQry('tbl_thumbnails_comp',$PrFields);
			sleep(12);
		}
	}
	$ins_Ary = array();
	$ins_Ary['comp_date'] = date("Y-m-d");
	$Result 			= $Gen->UpdateQry('tbl_users',$ins_Ary," user_id = ".$Users[$i]['user_id']);
}
?>