<?php
require_once("../includes/application_start.php");
$usr 		= new General;
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
 function getWeeks($year,$month)
{
	
	$firstday = date("w", mktime(0, 0, 0, $month, 1, $year));
    $lastday = date("t", mktime(0, 0, 0, $month, 1, $year));
	
	$no_of_weeks = 1;
	$count_weeks = 0;
	while($no_of_weeks <= ($lastday+$firstday)){
		$no_of_weeks += 7;
		$count_weeks++;
	}
	
	return $count_weeks;
}
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
function ShowColor($dates,$s1,$e1)
{
	$res = "NO";
	for($dt=0;$dt<count($dates);$dt++)
	{
		$cnt = dateDiff($dates[$dt]['sdate'],$dates[$dt]['edate']);
		for($i=0;$i<$cnt;$i++)
		{
			if($i == 0)
				$cdate = $s;
			else
			{
				$cc = 86400*$i;
				$cdate = date("Y-m-d",(strtotime($dates[$dt]['sdate']))+$cc);
				//$cdate =  date('Y-m-d', strtotime('+'.$i.' day', $s));
			}
			//echo $cdate;
			//echo "<br>";
			if(strtotime($cdate) <= strtotime($dates[$dt]['edate']))
			{
				if(strtotime($cdate) >= (strtotime($s1)) && (strtotime($cdate) <= strtotime($e1)))
					$res = "YES";
			}
		}
	}
	return $res;
}
if(isset($_REQUEST['year']) && $_REQUEST['year'] != "")
	$y=$_REQUEST['year'];
else	
	$y=date('Y');
$ny = $y+1;
$py = $y-1;
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name,color","1=1 AND status = 'A' AND customer_id = '".$_REQUEST['user_id']."'");
for($i=0;$i<count($Cat);$i++)
{
	$Items = $usr->GetSelWhere("tbl_calendars_items","title","1=1 AND status = 'A' AND cal_id='".$_REQUEST['id']."' AND cat_id = '".$Cat[$i]['id']."' GROUP BY title");
	if(!empty($Items))
	{
		$Cat[$i]['Items'] = $Items;
		for($k=0;$k<count($Items);$k++)
		{
			$Arr = array();
			$Arr = $usr->GetSelWhere("tbl_calendars_items","sdate,edate","1=1 AND status = 'A' AND cal_id='".$_REQUEST['id']."'  AND title = '".$Items[$k]['title']."' ORDER BY sdate");
			$title = $Cat[$i]['Items'][$k]['title'];
			$Cat[$i]['Items'][$k]['Dates'] = $Arr;
		}
	}
	//else
		//unset($Cat[$i]);
}
$ArrSlow = array();
$ArrSlow = $usr->GetSelWhere("tbl_calendars_slow_periods","sdate,edate","1=1 AND status = 'A' AND cal_id='".$_REQUEST['id']."' ORDER BY sdate");
//Code To Get Caleder
$Cal = $usr->GetSelWhere("tbl_calendars","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
for($i=0;$i<count($Cal);$i++)
{
	$sdate 	= $usr->GetSelWhere("tbl_calendars_items","MIN(sdate) as sdate","cal_id = '".$Cal[$i]['id']."' AND status = 'A'");
	$edate 	= $usr->GetSelWhere("tbl_calendars_items","MAX(edate) as edate","cal_id = '".$Cal[$i]['id']."'  AND status = 'A'");
	$Cal[$i]['sdate'] = $sdate[0]['sdate'];
	$Cal[$i]['edate'] = $edate[0]['edate'];
	$Cal[$i]['duration'] =  dateDiff($sdate[0]['sdate'], $edate[0]['edate']);
}
//echo "<pre>";print_r($Cat);exit;
?>
<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:14px; font-family:Arial, Helvetica, sans-serif;">
<tr>
<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:14px" colspan="7"><strong>Calendar Details</strong></td>
</tr>
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>Name</strong></td>
<td align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>:</strong></td>
<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong><?php echo $Cal[0]['name'];?></strong></td>



<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>Start date</strong></td>
<td align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>:</strong></td>
<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong><?php echo date("D jS M, Y",strtotime($Cal[0]['sdate']));?></strong></td>
</tr>
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>Duration</strong></td>
<td align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>:</strong></td>
<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong><?php echo $Cal[0]['duration'];?> days</strong></td>



<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>End Date</strong></td>
<td align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>:</strong></td>
<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong><?php echo date("D jS M, Y",strtotime($Cal[0]['edate']));?></strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1"  style="font-size:14px; font-family:Arial, Helvetica, sans-serif;">
<tr>
<td width="50%"><a href="http://www.marketingnavigator.info/admin/cal-gantt.php?id=<?php echo $_REQUEST['id'];?>&year=<?php echo $py;?>&user_id=<?php echo $_REQUEST['user_id'];?>">Pre Year</a></td>
<td width="50%" align="right"><a href="http://www.marketingnavigator.info/admin/cal-gantt.php?id=<?php echo $_REQUEST['id'];?>&year=<?php echo $ny;?>&user_id=<?php echo $_REQUEST['user_id'];?>">Next Year</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:14px; font-family:Arial, Helvetica, sans-serif;">
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>RO Goal: New / Repeat</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($i=1;$i<=12;$i++)
{ 
$days1=getWeeks($y,$i);
$Fields 	= "*";
$Where 		= "customer_id  = '".$_REQUEST['user_id']."' AND year = '".$y."' AND month = '".$i."'";
$data	= $usr->GetSelWhere("tbl_ro_goal",$Fields,$Where);
if(!empty($data))
{
	?>
	<td height="30" colspan="<?php echo $days1;?>" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><?php echo $data[0]['newval'];?>&nbsp;/&nbsp;<?php echo $data[0]['repeatval'];?></td>	
	<?php
}
else
{ ?>
	<td height="30" colspan="<?php echo $days1;?>" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:13px;">NA</td>
<?php 
}
}
?>
</tr>

<tr>
	<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;"><?php echo $y;?> Slow Periods&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<?php 	for($m=1;$m<=12;$m++)	{ 	
	if($m < 10)
		$m	= '0'.$m;
	else
		$m	= $m;
	?>
	<!-- <td>
	<table width="100%" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=getWeeks($y,$m);
	for($day=1;$day<=$days;$day++)	{ 
	$sday = $day-1;
	$sedates = getstartenddates($sday,$m,$y);
	list($sdate,$edate) = explode("#",$sedates);
	$show = ShowColor($ArrSlow,$sdate,$edate);
	if($show == "YES")
	{ ?>
	<td width="10" align="center" valign="middle" bgcolor="#FFD500">&nbsp;</td>
	<?php } else {
	?>
	<td width="10" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;">&nbsp;</td>
	<?php } } ?>
	<!-- </tr>
	</table>
	</td> -->	
	<?php	}	?>
	</tr>

<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" width="250" style="font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Month</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($i=1;$i<=12;$i++)
{ 
$days1=getWeeks($y,$i);
	?>
	<td height="30" colspan="<?php echo $days1;?>" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px; font-weight:bold;"><?php echo date("F",mktime(0, 0, 0, $i, 1,   1));?></td>	
	<?php
}
?>
</tr>
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>Week</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($m=1;$m<=12;$m++)
{ 
	?>
	<!-- <td >
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=getWeeks($y,$m);
	for($day=1;$day<=$days;$day++)
	{ ?>
	<td width="30" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;"><?php echo $day;?></td>
	<?php } ?>
	<!-- </tr>
	</table>
	</td> -->	
	<?php
}
?>
</tr>
<?php 
for($c=0;$c<count($Cat);$c++)
{
if($Cat[$c]['Items'] != "") {
?>
	<tr>
	<td align="left" valign="middle" bgcolor="#FFFFFF" colspan="65" style="font-size:12px"><strong><?php echo $Cat[$c]['cat_name']; ?></strong></td>
	
	</tr>
	<?php for($sc=0;$sc<count($Cat[$c]['Items']);$sc++) {?>
	<tr>
	<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;"><?php echo $Cat[$c]['Items'][$sc]['title'];?></td>
	<?php 	for($m=1;$m<=12;$m++)	{ 	
	if($m < 10)
		$m	= '0'.$m;
	else
		$m	= $m;
	?>
	<!-- <td>
	<table width="100%" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=getWeeks($y,$m);
	for($day=1;$day<=$days;$day++)	{ 
	$sday = $day-1;
	$sedates = getstartenddates($sday,$m,$y);
	list($sdate,$edate) = explode("#",$sedates);
	$show = ShowColor($Cat[$c]['Items'][$sc]['Dates'],$sdate,$edate);
	if($show == "YES")
	{ ?>
	<td width="10" align="center" valign="middle" bgcolor="#<?php echo $Cat[$c]['color']; ?>">&nbsp;</td>
	<?php } else {
	?>
	<td width="10" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;">&nbsp;</td>
	<?php } } ?>
	<!-- </tr>
	</table>
	</td> -->	
	<?php	}	?>
	</tr>
	<?php } ?>
	</tr>
<?php } } ?>
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"><strong>Week</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($m=1;$m<=12;$m++)
{ 
	?>
	<!-- <td >
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=getWeeks($y,$m);
	for($day=1;$day<=$days;$day++)
	{ ?>
	<td width="30" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;"><?php echo $day;?></td>
	<?php } ?>
	<!-- </tr>
	</table>
	</td> -->	
	<?php
}
?>
</tr>
<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" width="250" style="font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Month</strong>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($i=1;$i<=12;$i++)
{ 
	$days1=getWeeks($y,$i);
	?>
	<td height="30" colspan="<?php echo $days1; ?>" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px; font-weight:bold;"><?php echo date("F",mktime(0, 0, 0, $i, 1,   1));?></td>	
	<?php
}
?>
</tr>
</thead>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="1"  style="font-size:12px; font-family:Arial, Helvetica, sans-serif;">
<tr>
<td width="50%" align="right"><a href="http://marketingnavigator.info/admin/cal-gantt-day.php?id=<?php echo $_REQUEST['id'];?>&year=<?php echo $_REQUEST['year'];?>&user_id=<?php echo $_REQUEST['user_id'];?>">View Daily Gantt</a></td>
</tr>
</table>