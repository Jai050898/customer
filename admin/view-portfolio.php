<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['portfolio_id']) && $_REQUEST['portfolio_id'] != "")
{
	$Fields 	= "A.id,A.project_id,A.text,A.status,A.image,B.name";
	$Where 		= "A.id = ".$_REQUEST['portfolio_id'];
	$portfolio	= $usr->GetSelWhere("tbl_portfolio A LEFT JOIN tbl_projects B ON A.project_id = B.Project_id",$Fields,$Where);
	/*$images = $usr->GetSelWhere("tbl_portfolio_images","image"," portfolio_id = '".$portfolio[0]['id']."'");
	if($images)
		$portfolio[0]['images'] = $images;*/
	//echo "<pre>";print_r($portfolio);exit;
	$smarty->assign('Portfolio',$portfolio[0]);
}
$smarty->display('view-portfolio.tpl');
?>