<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","MyAccount");
function array_median($array) {
  $iCount = count($array);
  if ($iCount == 0) {
    throw new DomainException('Median of an empty array is undefined');
  }
  $middle_index = floor($iCount / 2);
  sort($array, SORT_NUMERIC);
  $median = $array[$middle_index];
  if ($iCount % 2 == 0) {
    $median = ($median + $array[$middle_index - 1]) / 2;
  }
  return $median;
}
$usr 		= new General;
$id=  $_REQUEST['id'];
$Cal = $usr->GetSelWhere("tbl_monitoring","*","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
$totarr = array();
$AvgTotals1 = 0;
$mids = array();
for($j=0;$j<count($Cal);$j++)
{
	$amountarr	= $usr->GetSelWhere("tbl_monitoring_items","SUM(grosssales) as amount","mid = '".$Cal[$j]['id']."' AND status = 'A'");
	$Cal[$j]['amount'] = $amountarr[0]['amount'];
	$totarr[] = $amountarr[0]['amount'];
	$AvgTotals1 += $amountarr[0]['amount'];
	$Items = $usr->GetSelWhere("tbl_monitoring_items","*","1=1 AND status = 'A'  AND mid = '".$Cal[$j]['id']."' ORDER BY month");
	if(!empty($Items))
	{
		$Cal[$j]['Items'] = $Items;
	}
	$mids[] = $Cal[$j]['id'];
}
if(!empty($mids))
	$midsres = implode(",",$mids);
else
	$midsres = "No";
	//echo $midsres;exit;
$CalGoals = $usr->GetSelWhere("tbl_monitoring_goals","*","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
for($g=0;$g<count($CalGoals);$g++)
{
	$goalamountarr	= $usr->GetSelWhere("tbl_monitoring_goals_items","SUM(goalsales) as amount","mid = '".$CalGoals[$g]['id']."' AND status = 'A'");
	$CalGoals[$g]['amount'] = $goalamountarr[0]['amount'];
	$GItems = $usr->GetSelWhere("tbl_monitoring_goals_items","*","1=1 AND status = 'A'  AND mid = '".$CalGoals[$g]['id']."' ORDER BY month");
	if(!empty($GItems))
	{
		$CalGoals[$g]['Items'] = $GItems;
	}
}
if($midsres != "No")
{
	$MaxTotals = array();
	for($i=1;$i<=12;$i++)
	{
		$maxarr	= $usr->GetSelWhere("tbl_monitoring_items","MAX(grosssales) as maxamt","month = '".$i."' AND status = 'A' AND mid IN (".$midsres.")");
		$MaxTotals[$i] = $maxarr[0]['maxamt'];
	}
	$MinTotals = array();
	for($i=1;$i<=12;$i++)
	{
		$minarr	= $usr->GetSelWhere("tbl_monitoring_items","MIN(grosssales) as minamt","month = '".$i."' AND status = 'A' AND mid IN (".$midsres.")");
		$MinTotals[$i] = $minarr[0]['minamt'];
	}
	$AvgTotals = array();
	for($i=1;$i<=12;$i++)
	{
		$avgarr	= $usr->GetSelWhere("tbl_monitoring_items","AVG(grosssales) as avgamt","month = '".$i."' AND status = 'A' AND mid IN (".$midsres.")");
		$AvgTotals[$i] = round($avgarr[0]['avgamt']);
	}
	$MedTotals = array();
	for($i=1;$i<=12;$i++)
	{
		$medarr	= $usr->GetSelWhere("tbl_monitoring_items","grosssales","month = '".$i."' AND status = 'A' AND mid IN (".$midsres.")");
		$medarritems = array();
		for($m=0;$m<count($medarr);$m++)
			$medarritems[] = $medarr[$m]['grosssales'];
		$MedTotals[$i] = round(array_median($medarritems));
	}
	
	$smarty->assign('MaxTotals',$MaxTotals);
	$smarty->assign('MinTotals',$MinTotals);
	$smarty->assign('AvgTotals',$AvgTotals);
	$smarty->assign('MedTotals',$MedTotals);
}
//echo "<pre>";print_r($MedTotals);exit;
if($totarr)
{
	$maxtot = max($totarr);
	$mintot = min($totarr);
	$avgtot1 = ($AvgTotals1)/(count($Cal));
	$avgtot = round($avgtot1);
	$medtot = round(array_median($totarr));
	$smarty->assign('MaxTotals1',$maxtot);
	$smarty->assign('MinTotals1',$mintot);
	$smarty->assign('AvgTotals1',$avgtot);
	$smarty->assign('MedTotals1',$medtot);
}
//$mintot = min($totarr);
$smarty->assign('Cal',$Cal);
$smarty->assign('CalGoals',$CalGoals);
$smarty->display('show-all-monitoring.tpl');
?>