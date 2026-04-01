<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$smarty->assign('Page','Home');
$usr 		= new General;
$y=date('Y');
$m=date('m');
$d=date('d');
$cal=array(
				array(' ',' ',' ',' ',' ',' ',' '),
				array('','','','','','',''),
				array('','','','','','',''),
				array('','','','','','',''),
				array('','','','','','',''),
				array(' ',' ',' ',' ',' ',' ',' ')
				);
	
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
	$dateval=mktime(0, 0, 0, $m,01,$y);			
	$dates 		= array();
	$Result['disDate']=date('F',mktime(0,0,0,$m,1,$y))." - ".date('Y',mktime(0,0,0,$m,1,$y));
	$Result['y']=$y;
	$Result['m']=$m;
	$Result['d']=$d;
	$Result['cal']=$cal;
	$Result['dates']=$dates;
	$Result['result']=$result;
	$Result['type']="caltype";
	
$smarty->assign('disDate',$Result['disDate']);
$smarty->assign('y',$Result['y']);
$smarty->assign('m',$Result['m']);
$smarty->assign('d',$Result['d']);
$smarty->assign('cal',$Result['cal']);
$smarty->display('add-daily-sales.tpl');
?>