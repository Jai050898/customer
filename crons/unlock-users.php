<?php
require_once("/home/automark/public_html/customer/includes/application_start.php");
$usr 		= new General;
function timeDiff($firstTime,$lastTime)
{
	// convert to unix timestamps
	$firstTime=strtotime($firstTime);
	$lastTime=strtotime($lastTime);

	// perform subtraction to get the difference (in seconds) between times
	$timeDiff=$lastTime-$firstTime;

	// return the difference
	return $timeDiff;
}
//Map data
$MapWhere		= "1=1  AND attempts >= 5";
$MapTable		= "tbl_users";
$MApFields		= "*";
$MapRes 	= $usr->GetSelWhere($MapTable,$MApFields,$MapWhere);
for($i=0;$i<count($MapRes);$i++)
{
		$diff = timeDiff($MapRes[$i]['locked_date'],date("Y-m-d H:i:s"));
		$diffmin = $diff/60;
		$diffhrs = floor($diffmin/60);
		if($diffhrs >= 2)
		{
			$ins_Ary = array();
			$ins_Ary['attempts'] = 0;
			//$ins_Ary['attempts'] = 0;
			$Result 			= $Gen->UpdateQry('tbl_users',$ins_Ary," user_id = ".$MapRes[$i]['user_id']);
		}
}
?>