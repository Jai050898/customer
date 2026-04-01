<?php
require_once("includes/application_start.php");
//require_once("includes/login_check.php");
$usr 		= new General;
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
$cal	= array(
			array('','','','','','',''),
			array('','','','','','',''),
			array('','','','','','',''),
			array('','','','','','',''),
			array('','','','','','',''),
			array('','','','','','','')
		);
$y=date('Y');
$m=date('m');
if(isset($_REQUEST['act']) && $_REQUEST['act']==1)
{	
	$y=$_REQUEST['year'];
	$m=$_REQUEST['month'];
	if($m==1)
	{
		$y=$y-1;
		$m=12;
	}
	else
	{
		$m=$m-1;
	}
	//echo "act=2".$y."=".$m;
}
elseif(isset($_REQUEST['act']) && $_REQUEST['act']==2)
{	
	$y=$_REQUEST['year'];  
	$m=$_REQUEST['month'];
	if($m==12)
	{
		$y=$y+1;
		$m=1;
	}
	else
	{
		$m=$m+1;
	}
}
elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 3)
{	
	$y=$_REQUEST['year']-1;
	$m=$_REQUEST['month'];
}
elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 4)
{	
	$y=$_REQUEST['year']+1;
	$m=$_REQUEST['month'];
}
elseif(isset($_REQUEST['act']) && $_REQUEST['act'] == 0 && $_REQUEST['act'] != '')
{
	$y=$_REQUEST['year'];
	$m=$_REQUEST['month'];
}
$start=date('w',mktime(0,0,0,$m,1,$y));
$t = $days=date('t',mktime(0,0,0,$m,1,$y));
$day=date('d');
$k=1;
for($i=0;$i<6;$i++)
{
	for($j=0;$j<7;$j++)
	{
		if($i==0&&$j<$start)
		{
		continue;
		}
		if ($k<=$days)
		{
			$cal[$i][$j]=$k;
			$k++;
		}
	}
}
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
//echo "<pre>";print_r($Cal[0]);exit;
//Code to get Cal Events
$Where = "1=1 AND A.cal_id = '".$_REQUEST['id']."' AND A.status = 'A'";
$Where	.= " AND ((date_format(A.sdate,'%Y-%m') >= '".date('Y-m',mktime(0,0,0,$m,1,$y))."') OR ('".date('Y-m',mktime(0,0,0,$m,1,$y))."' <= date_format(A.edate,'%Y-%m')))";
$result = mysql_query ("SELECT  A.*,B.color,B.cat_name FROM tbl_calendars_items A LEFT JOIN tbl_calendars_cat B ON A.cat_id = B.id WHERE $Where");
//echo "SELECT  A.*,B.color,B.cat_name FROM tbl_calendars_items A LEFT JOIN tbl_calendars_cat B ON A.cat_id = B.id WHERE $Where";exit;
$Events = array();
$i =0;
while($row = mysql_fetch_assoc($result)) {
	$Events[$i] =$row;	
	$i++;	
}
//echo "<pre>";print_r($Events);exit;
$EvtCnt	= count($Events);

?>
<table cellpadding="5" cellspacing="5">
<tr>
<td><strong>Name</strong></td>
<td><strong>:</strong></td>
<td><strong><?php echo $Cal[0]['name'];?></strong></td>

<td style="width:125px;">&nbsp;</td>

<td><strong>Start date</strong></td>
<td><strong>:</strong></td>
<td><strong><?php echo date("D jS M, Y",strtotime($Cal[0]['sdate']));?></strong></td>
</tr>
<tr>
<td><strong>Duration</strong></td>
<td><strong>:</strong></td>
<td><strong><?php echo $Cal[0]['duration'];?> days</strong></td>

<td style="width:125px;">&nbsp;</td>

<td><strong>End Date</strong></td>
<td><strong>:</strong></td>
<td><strong><?php echo date("D jS M, Y",strtotime($Cal[0]['edate']));?></strong></td>
</tr>
</table>
<form name="frmshowevents" method="post">
<input type="hidden" name="act" value="<?php if(isset($_REQUEST['act']) && $_REQUEST['act']!='') { echo $_REQUEST['act']; } ?>">
<input type="hidden" name="month" value="<?php echo $m; ?>">
<input type="hidden" name="year" value="<?php echo $y; ?>">

<table width="100%" border="1" cellpadding="3" cellspacing="1" align="left" style=" margin-bottom:20px;margin-top:10px;border:3px solid #bebaaa;background:#bebaaa">
<tr align="center" valign="middle" bgcolor="#bebaaa">
	<td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('3',<?php echo $y; ?>,<?php echo $m; ?>)"><img src="<?php echo SITE_URL;?>images/arrow_first.png" />&nbsp;Year</a></td>
    <td width="85" height="35" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('1',<?php echo $y; ?>,<?php echo $m; ?>)"><img src="<?php echo SITE_URL;?>images/arrow_pre.png" />&nbsp; Month</a></td>
    <td width="85" height="35" align="center" colspan="3" class="headings5"><?php echo date('F',mktime(0,0,0,$m,1,$y))." - ".date('Y',mktime(0,0,0,$m,1,$y));?></td>
    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('2',<?php echo $y; ?>,<?php echo $m; ?>)">Month&nbsp;<img src="<?php echo SITE_URL;?>images/arrow_next.png" /></a></td>
    <td width="85" height="35" align="center" bgcolor="#E5E5E5" class="c_links"><a href="javascript: calchange('4',<?php echo $y; ?>,<?php echo $m; ?>)">Year&nbsp;<img src="<?php echo SITE_URL;?>images/arrow_last.png" /></a></td>
</tr>
<tr>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_sundays">Sunday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Monday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Tuesday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Wednesday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Thursday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Friday</td>
	<td width="85" height="40" align="center" valign="middle" bgcolor="#F7F8FB" class="c_days">Saturday</td>
</tr>
<?php  
for($i=0;$i<6;$i++)
{
?>
<tr align="center" valign="middle">
	<?php
	for($j=0;$j<7;$j++)
	{ 
		if($j==0) { ?>
		<td width="85" height="70"  align="center" valign="top" bgcolor="#F7F8FB" class="c_sundays">
		<?php } else { ?>
		<td width="85" height="70" align="center" valign="top" class="c_days" bgcolor="#F7F8FB">
		<?php } 
		if($cal[$i][$j] != '')
		{ 
			echo '';
			$Flag	= 0;			
			if($cal[$i][$j] < 10)
			{
				$CurDate	= '0'.$cal[$i][$j].'-'.$m.'-'.$y;
				$sendDate =$y.'-'.$m.'-'.'0'.$cal[$i][$j];
			}	
			else
			{
				$CurDate	= $cal[$i][$j].'-'.$m.'-'.$y;
				$sendDate =$y.'-'.$m.'-'.$cal[$i][$j];
			}	
			$cur1date = $y.'-'.$m.'-'.$cal[$i][$j];
			echo '<div style="bottom:5px;"><span style="float:left;width:20px;">'.$cal[$i][$j].'</span><span style="float:right;width:95%;">';

			for($e=0;$e<$EvtCnt;$e++)
			{
				$evnt_date =strtotime($date1);
				$todays_date = date("Y-m-d H:i:s");
				$today = strtotime($todays_date);
				//echo 	$CurDate.">=".$Events[$e]['s_date']."#####".$CurDate."<=".$Events[$e]['e_date']."sss<br>";
				if((strtotime($CurDate) >= strtotime($Events[$e]['sdate'])) && (strtotime($CurDate) <= strtotime($Events[$e]['edate'])))
				{
					?>
					<div style="background-color:#<?php echo $Events[$e]['color'];?>;"><small><font color="#000000"><?php echo $Events[$e]['title'];?></strong> - <?php echo $Events[$e]['cat_name'];?></small></font><br /></div><div style="clear:both; height:2px;"></div>
					<?php
					$Flag++;		
				}	
			}		
		}
		else echo '&nbsp;'; 
		?>	</td>
	<?php
	} ?>
</tr>
<?php
} 
?>
</table>

</form>
<script language="javascript" type="text/javascript">
function calchange(ac,y,m)
{
	frm = document.frmshowevents;
	frm.act.value = ac;
	frm.year.value = y;
	frm.month.value = m;
	frm.submit();
}

</script>