<?php
function getstartenddates($stop,$m,$y)
{
	$textdt=$y."-".$m."-01";
	$currdt= strtotime($textdt);
	$nextmonth=strtotime($textdt."+1 month");
	$i=0;
	$flag=true;
	do
	{
	$weekday= date("w",$currdt);
	$endday=abs($weekday-6);
	$startarr[$i]=$currdt;
	$endarr[$i]=strtotime(date("Y-m-d",$currdt)."+$endday day");
	$currdt=strtotime(date("Y-m-d",$endarr[$i])."+1 day");
	if($endarr[$i]>=$nextmonth)
	{
	$endarr[$i]=strtotime(date("Y-m-d",$nextmonth)."-1 day");;
	$flag=false;
	}
	if($i == $stop)
	{
		$res =  date("Y-m-d",$startarr[$i])."#". date("Y-m-d",$endarr[$i])."";
		break;
	}
	$i++;
	}while($flag);
	return $res;
}
echo $show = getstartenddates("0","01","2012");
?>