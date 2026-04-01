<?php //echo '<pre>';print_r($_REQUEST);exit;
require_once("includes/application_start.php");
$Page = 'Login';
if(!isset($_REQUEST['input_1']) || $_REQUEST['input_1'] == "")
{
	header("Location: http://www.autorepairmarketing.com/customer-login-demo.php");
	exit(0);
}
if(isset($_SESSION['User']['UID'])&& ($_SESSION['User']['is_staff']=='N'))
{
	header("Location:".SITEURL."/dashboard-demo.php");
	exit(0);
}
 else {
	header("Location:".SITEURL."/customer-recent-customers_new_staff.php");
    
}
	//echo "<pre>";print_r($_REQUEST);exit;
$usr 		= new General;
	//$UsrDet				= $usr->GetSelWhere('tbl_users A','user_id,email,user_name,xml_id,password,company_name,Last_Login_Date,status,login_status,access_to_mark_survey,access_to_site_survey,access_to_integrated_survey,ismarketingsurveycompleted,iswebsurveycompleted,issurveycompleted,is_staff,created_date,attempts'," user_name = '".$_REQUEST['input_1']."' AND password = '".base64_encode($_REQUEST['input_2'])."'");
 $Table	= "tbl_users A LEFT JOIN user_permission B ON A.user_id = B.user_id";
    $Fields	= " A.user_id,A.email,A.user_name,A.xml_id,A.password,A.company_name,A.Last_Login_Date,A.status,A.login_status,A.access_to_mark_survey,A.access_to_site_survey,A.access_to_integrated_survey,A.ismarketingsurveycompleted,A.iswebsurveycompleted,A.issurveycompleted,A.is_staff,A.created_date,A.attempts,B.user_id as permissionid ,B.menu_permit";
    $Where 	= " A.user_name = '".$_REQUEST['input_1']."' AND A.password = '".base64_encode($_REQUEST['input_2'])."'"; //echo $Where;exit;
    $UsrDet	= $usr->GetSelWhere($Table,$Fields,$Where);	
		//echo '<pre>';print_r($UsrDet);exit;
	
	$cnt			= count($UsrDet);
	$status = "F";
	if($cnt != 0)
	{
		//echo "<pre>";print_r($UsrDet);exit;
		if($UsrDet[0]['login_status'] == 'A'  && $UsrDet[0]['status'] == 'A' && $UsrDet[0]['attempts'] < 5)
		{
			$_SESSION['User']['UID']				= $UsrDet[0]['user_id'];
                        $_SESSION['User']['xml_id']     = $UsrDet[0]['xml_id'];
			$_SESSION['User']['Email']				= $UsrDet[0]['email'];
			$_SESSION['User']['user_name']			= $UsrDet[0]['user_name'];
                        $_SESSION['User']['company_name']  = $UsrDet[0]['company_name'];
			$_SESSION['User']['Last_Login_Date']	= $UsrDet[0]['Last_Login_Date'];
			$_SESSION['User']['access_to_mark_survey'] = $UsrDet[0]['access_to_mark_survey'];
			$_SESSION['User']['access_to_site_survey'] = $UsrDet[0]['access_to_site_survey'];
			$_SESSION['User']['access_to_integrated_survey'] = $UsrDet[0]['access_to_integrated_survey'];
			$_SESSION['User']['ismarketingsurveycompleted'] = $UsrDet[0]['ismarketingsurveycompleted'];
			$_SESSION['User']['iswebsurveycompleted'] = $UsrDet[0]['iswebsurveycompleted'];
			$_SESSION['User']['issurveycompleted'] = $UsrDet[0]['issurveycompleted'];
			$_SESSION['User']['is_staff']   = $UsrDet[0]['is_staff'];
                        $_SESSION['User']['permissions']   = explode(",",$UsrDet[0]['menu_permit']);//permissions
                        if(isset($_SESSION['User']['permissions']) && $_SESSION['User']['permissions'] != '')
                        {
                          //  $ids = array(1, 2, 3, 4);

$menuids = join(', ', $_SESSION['User']['permissions']);
$query = "SELECT * FROM user_menu WHERE id IN ($menuids)";//echo $query."<br/>";
 $_SESSION['User']['MenuDet']	= $usr->SelectQuery($query);	
//echo "<pre>";print_r($MenuDet);exit;
                           /* $Table	= "user_menu";
                            $Fields	= " id,menu,link";*/
                            /*$details	 =  array();	
                            foreach($_SESSION['User']['permissions'] as $key=>$val)
                            {
                                    if(!in_array($val,$_SESSION['User']['permissions']))
                                            array_push($details,$val);
                            } echo "<pre>";print_r($details);exit;*/
                            /*$Where 	= " id = '".$_SESSION['User']['permissions']."'"; //echo $Where;exit;
                            $_SESSION['User']['Perdet']	= $usr->GetSelWhere($Table,$Fields,$Where);*/
                            /*foreach($_SESSION['User']['permissions'] as $_SESSION['User']['permissions']){
                                $Where 	= " id = '".$_SESSION['User']['permissions']."'"; //echo $Where;exit;
                                 $_SESSION['User']['Perdet']	= $usr->GetSelWhere($Table,$Fields,$Where);	
                            }exit;*/
                           
                        }
			$date1 = $UsrDet[0]['created_date']; 
			$date2 = date("Y-m-d H:i:s"); 	
			$diff = abs(strtotime($date2) - strtotime($date1)); 
			$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
			//echo $months;exit;
                        
                        $sueveycnt = $Gen->SelectQuery("SELECT MAX(showorder) as maxorder FROM tbl_categories WHERE showorder <= '".$months."'  AND status = 'A'");
			$_SESSION['User']['sueveycnt'] = $sueveycnt[0]['maxorder'];
			
			//Code for YouSendIt
			require_once('/home/automark/public_html/customer/yousendit/sample/Authentication.php');
			require_once('/home/automark/public_html/customer/yousendit/sample/include/RestTransport.php');
			require_once('/home/automark/public_html/customer/yousendit/sample/include/ResponseEntities.php');
			$apikey = trim("b42pwy7jxjjgq9dask86wc6m"," ");
			$_SESSION['sApp'] = $apikey;
			$host = "https://test2-api.yousendit.com";
			$_SESSION['sHost'] = $host;
			$_SESSION['sUserAgent'] = "we";
		
			$restTransportInstance = new RestTransport($host,$apikey);
			$_SESSION['sTr'] = $restTransportInstance;
		
			$email = trim("yousendit@motorheadmarketing.com"," ");
			$password = trim("Shared23?"," ");
			$auth = new Authentication($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
			$responseObject = $auth->login($email,$password);
		
			$errorStatus = $responseObject->getErrorStatus();
			$token = $responseObject->getAuthToken();
			if (!empty($errorStatus)){
				echo '<font color="red">' ."Error: ".$errorStatus->getMessage() . '</font><br>';
			}else if (empty($token)){
				echo '<font color="red">' ."Error: invalid apikey or hostname!".'</font><br>';
			}else{
				$_SESSION['sEmail'] = $email;
				$_SESSION['sPass'] = $password;
				$_SESSION['sToken'] = $responseObject->getAuthToken();
			}
                        
                        //END for Code for YouSendIt
                        
			//Setting WP Cookie
			$WPUsrDet				= $Gen->GetSelWhere('wp_users','user_pass'," user_login = '".$UsrDet[0]['user_name']."'");
			//Setting Wiki Cookie
			$WIKIUsrDet				= $Gen->GetSelWhere('wikiuser','user_id,user_name,user_token'," user_name = '".ucfirst($UsrDet[0]['user_name'])."'");
			
			setcookie(SITENAME.'_wikiUserName',$WIKIUsrDet[0]['user_name']);
			setcookie(SITENAME.'_wikiUserID',$WIKIUsrDet[0]['user_id']);
			$_SESSION['wsUserID'] = $WIKIUsrDet[0]['user_id'];
			$_SESSION['wsUserName'] = $WIKIUsrDet[0]['user_name'];
			$_SESSION['wsToken'] = $WIKIUsrDet[0]['user_token'];
			
			header('Location:'.SITEURL.'/blog/wp-login.php?u='.$UsrDet[0]['user_name'].'&p='.base64_encode($WPUsrDet[0]['user_pass']));
			$status = "S";
			//header('Location:'.SITEURL.'/dashboard.php');
		}
		else if($UsrDet[0]['attempts'] >= 5)
		{
			$Responce	= 'Account Locked, Pleas Try again After 10 hours.';
			$status = "L";
		}
		else
		{
			$Responce	= 'Inactive Account';
			$d = date("Y-m-d H:i:s");
			$UpLogin		= mysql_query("UPDATE tbl_users SET attempts  = attempts+1, locked_date = '".$d."' WHERE user_name = '".$_REQUEST['input_1']."'");		
		}
	}
	else
	{
		$Responce	= 'Invalid login Details';
		$status = "I";
		$d = date("Y-m-d H:i:s");
		$UpLogin		= mysql_query("UPDATE tbl_users SET attempts  = attempts+1, locked_date = '".$d."' WHERE user_name = '".$_REQUEST['input_1']."'");	
	}
if($status == "S")
{
	header('Location:'.SITEURL.'/dashboard.php');
	exit();	
}
else
{
	header("Location: http://www.autorepairmarketing.com/customer-login.php?status=".$status);
	exit();
}
?>
