<?php
require_once("../includes/application_start.php");
require_once("../class/Mmail.class.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
/******* To Check the Posted Values to insert into Companies Table in DB ****/ 
if(isset($_REQUEST['Reg']) && $_REQUEST['Reg']!='')
{
		//echo "<pre>";print_r($_REQUEST);exit;
            $LogArr = $_REQUEST['Reg'];
            $smarty->assign('LogArr',$LogArr);
            /********* To Check Account Availability in DB ******/
            $Fields	= "*";
            $UsrDet	= $Gen->GetSelWhere('tbl_company',$Fields,"email = '".addslashes($LogArr['Email'])."'");
			//echo "<pre>";print_r($UsrDet);exit;
            if(count($UsrDet) > 0)
            {
                $To=$LogArr['Email'];
				$From="noreply@FD.com";
				
				$Subject='Forgot Password';
				
				$CRLF='<br>';
				$Body .= " <p style='font-family:verdana, Helvetica, sans-serif; font-size:13px; font-weight:bold; color:#094a72; text-decoration:none;'>
					Hi  ".$UsrDet[0]['name'].",<br />You are Requested for Forgot Password Service.<br />Please find your Login Details<br /><br />User Name/Email : ".$UsrDet[0]['username']."<br /> Password : ".base64_decode($UsrDet[0]['password'])."<br><br>{$CRLF}
					
					Regards,{$CRLF}{$CRLF}
					FD Team
					</p>
					";
				$mail = new Mmail();
				
				$mail->setSubject($Subject);
				$mail->addTo($To);
				$mail->setFrom($From);	
				$mail->setHtmlBody($Body);
				$mail->send();
				$ErrorMsg = 'Password Sent to your mail !';
				$smarty->assign('ErrorMsg',$ErrorMsg);
            }
            else
            {
                    $ErrorMsg = 'Email Not Found !';
                    $smarty->assign('ErrorMsg',$ErrorMsg);
            }	
}
$smarty->display('forgotpassword.tpl');
?>