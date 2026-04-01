<?php
	require_once("../includes/application_start.php");
	require_once("../includes/login_check_admin.php"); 
	$usr 		= new General;
	
	require_once 'inc/MCAPI.class.php';
	require_once 'inc/config.inc.php'; //contains apikey
	$api = new MCAPI($apikey);
	$error = "";
	$hourLog = array();
	
		// TO CHeck if the user already has a Hour LoG in DB
	if($_SERVER['REMOTE_ADDR'] == '182.72.66.214') {
		if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post'){
			//echo "<PRE>";print_r($_REQUEST);exit;		
		}
	}
	$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_name,State_Code'," Country_Code = 'US' ORDER BY State_ID");
	$smarty->assign('States',$States);
	//echo '<pre>';print_r($_REQUEST);exit;
	/*****section to get the details from data base*********************/
	if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
	{
		$Fields 	= "*";
		$Where 		= "user_id = ".$_REQUEST['user_id'];
		$user	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
		//echo '<pre>';print_r($user);exit;
		$smarty->assign('User',$user[0]);
		//Code to get Countries
		$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_name,State_Code'," Country_Code = '".$user[0]['country']."' ORDER BY State_ID");
		$smarty->assign('States',$States);
		
		$PTarray = explode(",",$user[0]['payment_type']);
		$smarty->assign('PTarray',$PTarray);
		$LGarray = explode(",",$user[0]['language']);
		$smarty->assign('LGarray',$LGarray);
		$KEYarray = explode(",",$user[0]['services']);
		$smarty->assign('KEYarray',$KEYarray);
		$Brandsarray = explode(",",$user[0]['brands']);
		$smarty->assign('Brandsarray',$Brandsarray);
		$Cities	= $Gen->GetSelWhere('tbl_shops_cites','*'," sid = '".$user[0]['user_id']."' ORDER BY id");
		$smarty->assign('Cities',$Cities);
		
		// TO CHeck if the user already has a Hour LoG in DB
		$hourLog	= $Gen->GetSelWhere('tbl_user_hour_log','*'," user_id = '".$_REQUEST['user_id']."'");
		
	}
        
	if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post')
	{
		//echo "<pre>";print_r($_FILES);//exit;
		//echo '<pre>';print_r($_REQUEST);exit;
		$PrFields = $_REQUEST['Log'];
		$PrFields['state'] = $_REQUEST['state'][0];
		if(!isset($PrFields['access_to_mark_survey']) )
			$PrFields['access_to_mark_survey'] = "N";
		if(!isset($PrFields['access_to_site_survey']) )
			$PrFields['access_to_site_survey'] = "N";
		if(!isset($PrFields['access_to_integrated_survey']) )
			$PrFields['access_to_integrated_survey'] = "N";
		for($i=0;$i<count($_REQUEST['payment_type']);$i++)
			$parray[] = $_REQUEST['payment_type'][$i];
		for($i=0;$i<count($_REQUEST['language']);$i++)
			$larray[] = $_REQUEST['language'][$i];
		for($i=0;$i<count($_REQUEST['services']);$i++)
			$sarray[] = $_REQUEST['services'][$i];
		for($i=0;$i<count($_REQUEST['brands']);$i++)
			$barray[] = $_REQUEST['brands'][$i];
			
		$PrFields['payment_type'] = implode(",",$parray);
		$PrFields['language'] = implode(",",$larray);
		$PrFields['services'] = implode(",",$sarray);
		$PrFields['brands'] = implode(",",$barray);
		if($_FILES['seoupload']['tmp_name'] != "")
		{
			$whitelist = array(".zip");
			foreach ($whitelist as $item) {
				if (!preg_match("/$item\$/i", $_FILES['seoupload']['name'])) {
					$error = "Only zip files are allowed to Upload";
				}
			}
			//echo $error;exit;
			if($error == "")
			{
				$fname = time()."-".str_replace(' ','_',$_FILES['seoupload']['name']);
				if(move_uploaded_file($_FILES['seoupload']['tmp_name'],SITEPATH."/Secured/".$user[0]['user_name']."/adminUploads/".$fname))
				{
					$PrFields['filename']		= $fname;
				}
			}
		}
		if($error == "") {	
                        //echo '<pre>';print_r($PrFields);//exit;
                        
                    // Check if for the user Name Duplication
                    $UnameCnt = $Gen->TotalRows('tbl_users',"user_name = '".$PrFields['user_name']."' AND user_id != '".$_REQUEST['user_id']."'   AND status IN ('A','I')");
                    if($UnameCnt == 0){
                            list($m,$d,$y) = explode("-",$PrFields['dob']);
                            $PrFields['dob'] = $y."-".$m."-".$d;		
                            //echo '<pre>';print_r($PrFields);exit;
                            $UpOverview 				= $Gen->UpdateQry("tbl_users",$PrFields,"user_id = ".$_REQUEST['user_id']);
                            if(count($hourLog) == 0){
                                            $insarr = array();
                                            $insarr = $_REQUEST['Log1'];
                                            $insarr['user_id'] = $_REQUEST['user_id'];
                                            $insHourLog = $Gen->InsertQry('tbl_user_hour_log',$insarr);
                            }
                            if(count($hourLog) > 0){
                                    $UpArr = array();
                                    $UpArr = $_REQUEST['Log1'];
                                    $UpHourLog	= $Gen->UpdateQry("tbl_user_hour_log",$UpArr,"user_id = ".$_REQUEST['user_id']);
                            }
                            if($UpOverview)
                            {	$Gen->DeleteQry('tbl_shops_cites',"sid = '".$_REQUEST['user_id']."'");
                                    for($i=0;$i<count($_REQUEST['taget_citiesold']);$i++)
                                    {
                                            if($_REQUEST['taget_citiesold'][$i] != "")
                                            {
                                                    $insarr = array();
                                                    $insarr['sid'] = $_REQUEST['user_id'];
                                                    $insarr['city_name'] = $_REQUEST['taget_citiesold'][$i];
                                                    $ins11 						= $Gen->InsertQry('tbl_shops_cites',$insarr);
                                            }
                                    }
                                    for($i=0;$i<count($_REQUEST['taget_cities']);$i++)
                                    {
                                            if($_REQUEST['taget_cities'][$i] != "")
                                            {
                                                    $insarr1 = array();
                                                    $insarr1['sid'] = $_REQUEST['user_id'];
                                                    $insarr1['city_name'] = $_REQUEST['taget_cities'][$i];
                                                    $ins12 		= $Gen->InsertQry('tbl_shops_cites',$insarr1);
                                            }
                                    }		
                            }
                            header("Location:".SITEURL.'/admin/manage-users.php');
                            exit;
                    } else {
                        $error = "User Name Not Available!!! Please Try with Other";
                    }
		}
	}
	/*****section to insert the data*****/
	if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post' && !isset($_REQUEST['user_id']))
	{
		//echo "<pre>";print_r($_FILES);exit;
		//echo '<pre>';print_r($_REQUEST);exit;
                $UnmCnt = $Gen->TotalRows('tbl_users',"user_name = '".$_REQUEST['user_name']."'  AND status IN ('A','I')");
                if($UnmCnt == 0){
                    
                    $PrFields = $_REQUEST['Log'];
                    $PrFields['state'] = $_REQUEST['state'][0];
                    for($i=0;$i<count($_REQUEST['payment_type']);$i++)
                            $parray[] = $_REQUEST['payment_type'][$i];
                    for($i=0;$i<count($_REQUEST['language']);$i++)
                            $larray[] = $_REQUEST['language'][$i];
                    for($i=0;$i<count($_REQUEST['services']);$i++)
                            $sarray[] = $_REQUEST['services'][$i];
                    for($i=0;$i<count($_REQUEST['brands']);$i++)
                            $barray[] = $_REQUEST['brands'][$i];

                    $PrFields['payment_type'] = implode(",",$parray);
                    $PrFields['language'] = implode(",",$larray);
                    $PrFields['services'] = implode(",",$sarray);
                    $PrFields['brands'] = implode(",",$barray);
                    list($m,$d,$y) = explode("-",$PrFields['dob']);
                    $PrFields['dob'] = $y."-".$m."-".$d;		

                    $ins    = $Gen->InsertQry('tbl_users',$PrFields);
                    /**update xml id = user id**/
                    $xml_Fields['xml_id']=$ins;
                    $ins_menu =$Gen->UpdateQry("tbl_users",$xml_Fields,"user_id = ".$ins);
                    
                    $menu_Fields['user_id']=$ins;
                    $menu_Fields['menu_permit']='1';
                    $ins_menu =$Gen->InsertQry('user_permission',$menu_Fields);
                    if($ins) {
                            //Cdoe to send mail
                            $Fields 	= "user_id,first_name,last_name,email,user_name,password";
                            $Where 		= "user_id = ".$ins;
                            $insuser	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
                            $subject	= "Member Registration Info";
                            $to = $insuser[0]['email'];
                            //$to = "srinivas.rize@gmail.com";
                            $from = "mms@motorheadmarketing.com";
                            $result		= '     Thank you for allowing Motorhead Marketing to be your online marketing company. Below you will find an activation notice. If you will please click the link and go through the password process you will now have access to the customer section of the Motorhead Marketing website. Here is your:<br><br />';
                            $result		.= ' <b>USER NAME : '.$insuser[0]['user_name'].'</b><br>';
                            $result		.= ' <b>PASSWORD : '.base64_decode($insuser[0]['password']).'</b><br><br>';
                            $result		.= ' You can activate your account by cllicking on the below link <br> <a href="'.SITEURL.'/activate.php?UID='.base64_encode($insuser[0]['user_id']).'">Activate</a><br>' ;
                             $getdet 	= $Gen->mymail($to,$from,$subject,$insuser[0]['first_name'],$result);
                            // to Insert User's Hour Log
                            $insarr = array();
                            $insarr = $_REQUEST['Log1'];
                            $insarr['user_id'] = $ins;
                            $insHourLog = $Gen->InsertQry('tbl_user_hour_log',$insarr);

                            for($i=0;$i<count($_REQUEST['taget_cities']);$i++)
                            {
                                    $insarr = array();
                                    $insarr['sid'] = $ins;
                                    $insarr['city_name'] = $_REQUEST['taget_cities'][$i];
                                    $ins1 						= $Gen->InsertQry('tbl_shops_cites',$insarr);
                            }		
                            //Creating Folders
                            $folder = $PrFields['user_name'];
                            if(mkdir(SITEPATH."/Secured/".$folder,0777))
                            {		
                                    mkdir(SITEPATH."/Secured/".$folder."/uploads",0777);
                                    mkdir(SITEPATH."/Secured/".$folder."/adminUploads",0777);
                                    /*if($_FILES['seoupload']['tmp_name'] != "")
                                    {
                                            $fname = time()."-".str_replace(' ','_',$_FILES['seoupload']['name']);
                                            if(move_uploaded_file($_FILES['seoupload']['tmp_name'],SITEPATH."/Secured/".$folder."/adminUploads/".$fname))
                                            {
                                                    $UpFields = array();
                                                    $UpFields['filename']		= $fname;
                                                    $UpOverview1 				= $Gen->UpdateQry("tbl_users",$UpFields,"user_id = ".$ins);
                                            }
                                    } */
                            }
                            //Creating WP Login
                            $WP_Arr = array();
                            $WP_Arr['user_login'] =  $PrFields['user_name'];
                            $WP_Arr['user_pass'] =  md5($PrFields['password']);
                            $WP_Arr['user_nicename'] =  $PrFields['first_name'];
                            $WP_Arr['user_email'] =  $PrFields['email'];
                            $WP_Arr['user_url'] =  $PrFields['website'];
                            $WP_Arr['user_registered'] =  date("Y-m-d H:i:s");
                            $WP_Arr['display_name'] =  $PrFields['first_name'];
                            $WP_ins 	= $Gen->InsertQry('wp_users',$WP_Arr);
                            if($WP_ins)
                            {		
                                    //Creating Usermeta Details for WP
                                    $MetsArr = array("first_name" => $PrFields['first_name'],"last_name" => $PrFields['last_name'],"nickname" => $PrFields['first_name'],"description" => '',"rich_editing" => 'true',"comment_shortcuts" => 'false',"admin_color" => 'fresh',"use_ssl" => '0',"aim" => '',"yim" => '',"jabber" => '',"wp_capabilities" => 'a:1:{s:6:"author";s:1:"1";}',"wp_user_level" => '2');
                                    foreach($MetsArr as $k => $v)
                                    {
                                            $WPM_Arr = array();
                                            $WPM_Arr['user_id'] = $WP_ins;
                                            $WPM_Arr['meta_key'] = $k;
                                            $WPM_Arr['meta_value'] = $v;
                                            $WPM_ins 	= $Gen->InsertQry('wp_usermeta',$WPM_Arr);
                                    }
                            }
                            //creating WIKI Login
                            $WIKI_Arr = array();
                            $WIKI_Arr['user_name'] =  ucfirst($PrFields['user_name']);
                            $WIKI_Arr['user_password'] =  md5($PrFields['password']);
                            $WIKI_Arr['user_real_name'] =  $PrFields['first_name'];
                            $WIKI_Arr['user_email'] =  $PrFields['email'];

                            $WIKI_ins 	= $Gen->InsertQry('wikiuser',$WIKI_Arr);
                            //echo SITEURL."/wiki/index.php?ID=".$WIKI_ins ."&action=Token";exit;
                            //Mailchimp Insert
                            $merge_vars = array('Fname'=>$PrFields['first_name'], 'Lname'=>$PrFields['last_name']);
                            $memail = $PrFields['email'];
                            $retval = $api->listSubscribe( $listId, $memail, $merge_vars );

                            header("Location:".SITEURL."/wiki/index.php?ID=".$WIKI_ins ."&action=Token");
                            exit;
                    }
                    header("Location:".SITEURL.'/admin/manage-users.php');
                } else {
                    $error = "User Name Not Available!!! Please Try with Other";
                }
	} 
	//Code to get Countries
	$Country	= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_name'," Country_ID != '' ORDER BY Country_ID");
	$smarty->assign('country',$Country);
	//echo "<prE>";print_r($Country);exit;
	//Code to Get Keywords
	$KEY = $usr->GetSelWhere("tbl_keywords","key_id,key_name","1=1 AND status = 'A'");
	$smarty->assign('KEY',$KEY);
	//echo "<pre>";print_r($KEY);exit;
	//Code to Get Brands
	$BrandsCat = $Gen->GetSelWhere("tbl_brand_categories","id,name","1=1 AND status = 'A' ORDER BY name");
	for($i=0;$i<count($BrandsCat);$i++)
	{
		$brands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '".$BrandsCat[$i]['id']."' AND status = 'A' ORDER BY brand_name");
		if(count($brands) > 0)
			$BrandsCat[$i]['Brands'] = $brands;
	}
	//echo "<pre>";print_r($BrandsCat);exit;
	$smarty->assign('Brands',$BrandsCat);
	$Rbrands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '0' AND status = 'A' ORDER BY brand_name");
	$smarty->assign('Rbrands',$Rbrands);
	//Code to get Payment Types
	$PT = $usr->GetSelWhere("tbl_payment_types","id,payment_type","1=1 AND status = 'A'");
	$smarty->assign('PT',$PT);
	//Code to get Language
	$LG = $usr->GetSelWhere("tbl_languages","id,languages","1=1 AND status = 'A'");
	$smarty->assign('LG',$LG);
	//Code to get Annua Sales
	$AS = $usr->GetSelWhere("tbl_annual_revenue","id,annual_revenue","1=1 AND status = 'A'");
	$smarty->assign('AS',$AS);

	/// to get Hours of opetation Timings
	$hrs = array("00:00 AM", "00:30 AM", "01:00 AM", "01:30 AM", "02:00 AM", "02:30 AM", "03:00 AM", "03:30 AM", "04:00 AM", "04:30 AM", "05:00 AM", "05:30 AM", "06:00 AM", "06:30 AM", "07:00 AM", "07:30 AM", "08:00 AM", "08:30 AM", "09:00 AM", "09:30 AM", "10:00 AM", "10:30 AM", "11:00 AM", "11:30 AM", "12:00 PM", "12:30 PM", "01:00 PM", "01:30 PM", "02:00 PM", "02:30 PM", "03:00 PM", "03:30 PM", "04:00 PM", "04:30 PM", "05:00 PM", "05:30 PM", "06:00 PM", "06:30 PM", "07:00 PM", "07:30 PM", "08:00 PM", "08:30 PM", "09:00 PM", "09:30 PM", "10:00 PM", "10:30 PM", "11:00 PM", "11:30 PM", );
	$smarty->assign('hrs',$hrs);
	
	$smarty->assign('hourLog',$hourLog[0]);
		// TO CHeck if the user already has a Hour LoG in DB
	if($_SERVER['REMOTE_ADDR'] == '182.72.66.214') {
		//echo "<PRE>";print_r($hourLog[0]);//exit;
	}
	$smarty->assign('error',$error);
	$smarty->display('add-user.tpl');
?>
