<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$smarty->assign('Page','resources');
$smarty->assign('breadcrumb','Add Ticket');
//echo "<pre>";print_r($_REQUEST);exit;
/*** section to insert the values in to help desk ****/
//echo "<pre>";print_r($_SESSION);
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']!='')
{
//echo "<pre>";print_r($_REQUEST);exit;
	$TicketArr						= $_REQUEST['Log'];
	$TicketArr['req_from']			= $_SESSION['User']['UID'];	
	if($_REQUEST['req_id']=='')
		$inshelpdesk				= $Gen->InsertQry('tbl_helpdesk',$TicketArr);
	else
	{
		$Where	   				   		= "req_id ='".$_REQUEST['id']."'";	
		$updatehelpdesk					= $Gen->UpdateQry('tbl_helpdesk',$TicketArr,$Where);
	}	
	//echo "<pre>";print_r($_REQUEST);exit;
	if($inshelpdesk!='')
	{
		$MsgArr['req_id'] 					= $inshelpdesk;
		$MsgArr['sender_type'] 				= 'C';
		$MsgArr['message'] 					= $TicketArr['description'];
		$inshelpdeskMessages				= $Gen->InsertQry('tbl_helpdesk_message',$MsgArr);
		if($inshelpdeskMessages)
		{
			$subject	= "New Ticket";
			$result		= '     You have new ticket from <b>'. $_SESSION['User']['user_name'].'.</b><br /><br>Following are the Details<br><br>
									<table>
										<tr>
										<td>Subject : </td><td>'.$TicketArr['subject'].'</td>
										</tr>
										<tr>
										<td>&nbsp;</td><td>&nbsp;</td>
										</tr>
										<tr>
										<td valign="top">Message : </td><td>'.$TicketArr['description'].'</td>
									</tr></table>' ;
			 $getdet 	= $usr->adminmail(ADMINMAIL,$_SESSION['User']['Email'],$subject,$_SESSION['User']['user_name'],$result);
		}
	}
	header("Location:".SITEURL."/manage-tickets.php");
	exit;
}	
$smarty->display('rize-ticket.tpl');
?>