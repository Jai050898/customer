<?php
require_once("includes/application_start.php");
$usr 		= new General;
if(isset($_REQUEST['year']) && $_REQUEST['year'] != "")
	$y=$_REQUEST['year'];
else	
	$y=date('Y');
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name,color","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
for($i=0;$i<count($Cat);$i++)
{
	$Items = $usr->GetSelWhere("tbl_calendars_items","title","1=1 AND status = 'A' AND cal_id='".$_REQUEST['id']."' AND cat_id = '".$Cat[$i]['id']."' GROUP BY title");
	if(!empty($Items))
	{
		$Cat[$i]['Items'] = $Items;
		for($k=0;$k<count($Items);$k++)
		{
			$Arr = array();
			$Arr = $usr->GetSelWhere("tbl_calendars_items","sdate,edate","1=1 AND status = 'A' AND cal_id='".$_REQUEST['id']."'  AND title = '".$Items[$k]['title']."'");
			$title = $Cat[$i]['Items'][$k]['title'];
			$Cat[$i]['Items'][$k] = $Arr[0];
			$Cat[$i]['Items'][$k]['title'] = $title;
		}
	}
	//else
		//unset($Cat[$i]);
}
//echo "<pre>";print_r($Cat);exit;
?>
<table width="100%" border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" style="font-size:12px;">
	<tr>
<td align="right" valign="middle" bgcolor="#FFFFFF" width="250" style="font-size:14px;"><strong>Month</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php 
for($i=1;$i<=12;$i++)
{ 
	$days=date('t',mktime(0,0,0,$m,1,$y));
	?>
	<td height="50" colspan="<?php echo $days; ?>" align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:14px; font-weight:bold;"><?php echo date("F",mktime(0, 0, 0, $i, 1,   1));?></td>	
	<?php
}
?>
</tr>
<tr>
<td align="left" valign="middle" bgcolor="#FFFFFF" width="250" style="font-size:14px;"><strong>Day</strong></td>
<?php 
for($m=1;$m<=12;$m++)
{ 
	?>
	<!-- <td>
	<table width="100%" border="0" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=date('t',mktime(0,0,0,$m,1,$y));
	for($day=1;$day<=$days;$day++)
	{ 
		if($day < 10)
		{
			$CurDay	= '0'.$day;
		}	
		else
		{
			$CurDay	= $day;
		}	
	?>
	<td  align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;" width="30"><?php echo $CurDay;?></td>
	<?php } ?>
	<!-- </tr>
	</table>
	</td>	 -->
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
	<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px"  colspan="378"><strong><?php echo $Cat[$c]['cat_name']; ?></strong></td>
	
	</tr>
	<?php for($sc=0;$sc<count($Cat[$c]['Items']);$sc++) {?>
	<tr>
	<td align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:10px;"><?php echo $Cat[$c]['Items'][$sc]['title'];?></td>
	<?php 	for($m=1;$m<=12;$m++)	{ 	
	
	?>
	<!-- <td>
	<table width="100%" cellspacing="1" cellpadding="1">
	<tr> -->
	<?php 
	$days=date('t',mktime(0,0,0,$m,1,$y));
	for($day=1;$day<=$days;$day++)	{ 
	if($day < 10)
		$CurDate	= $y.'-'.$m.'-'.'0'.$day;
	else
		$CurDate	= $y.'-'.$m.'-'.$day;
	//echo $CurDate;
	/*echo "<br>";
	echo $Cat[$c]['Items'][$sc]['sdate']."----".$CurDate;
	echo "<br>";
	echo $Cat[$c]['Items'][$sc]['edate']."----".$CurDate;
	echo "<br>";*/
	if((strtotime($CurDate) >= strtotime($Cat[$c]['Items'][$sc]['sdate'])) &&  (strtotime($CurDate) <= strtotime($Cat[$c]['Items'][$sc]['edate'])))
	{ ?>
	<td  align="center" valign="middle" bgcolor="#<?php echo $Cat[$c]['color']; ?>" style="font-size:12px;" width="30">&nbsp;</td>
	<?php } else {
	?>
	<td  align="center" valign="middle" bgcolor="#FFFFFF" style="font-size:12px;" width="30">&nbsp;</td>
	<?php } } ?>
	<!-- </tr>
	</table>
	</td> -->	
	<?php	}	?>
	</tr>
	<?php } ?>
	</tr>
<?php } } ?>
</thead>
</table>