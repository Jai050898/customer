<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Delete')
{
	$Del		= $Gen->DeleteQry('tbl_comments',' comment_id = '.$_REQUEST['comment_id']);
}
/********* TO Fetch Voting Count and Details ********/
$TotVotes	= $Gen->Getselwhere('tbl_ratings',"count(*) AS Cnt,SUM(rating) AS Sum"," photo_id = ".base64_decode($_REQUEST['Id']));
if($TotVotes[0]['Cnt'] > 0)
	$Avg	= round($TotVotes[0]['Sum']/$TotVotes[0]['Cnt'],1);
else
	$Avg	= 0;
$VotTable	= "tbl_ratings A LEFT JOIN tbl_users B ON A.given_by  = B.user_id";
$Fields		= 'A.rating_id,A.given_by,A.rating,A.created_date,B.first_name';
$Votes		= $Gen->Getselwhere($VotTable,$Fields," A.photo_id = ".base64_decode($_REQUEST['Id']));
if(count($Votes) >0)
{
	for($i=0;$i<count($Votes);$i++)
	{
		$Votes[$i]['Percentage']	= ($Votes[$i]['rating'])*20;
	}
}
$Photos				= $Gen->Getselwhere('tbl_photos','photo_id,photo_name,views,created_date'," photo_id = ".base64_decode($_REQUEST['Id']));
$Table			= "tbl_comments A LEFT JOIN tbl_users B ON A.commented_by = B.user_id";
$Fields			= 'A.comment_id,A.commented_by,A.comments,A.created_date,B.first_name';
$Comments		= $Gen->Getselwhere($Table,$Fields," A.photo_id = ".base64_decode($_REQUEST['Id']));
$smarty->assign('Photos',$Photos);
$smarty->assign('Avg',$Avg);
$smarty->assign('TotVotes',$TotVotes);
$smarty->assign('Votes',$Votes);
$smarty->assign('Comments',$Comments);
$smarty->assign('Page',$Page);
$smarty->display('view-image.tpl');
?>