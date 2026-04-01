<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $usr 		= new General;
    $page = "customers";
    $page1 = "map";
    //Shop Details
    $Table  = "tbl_users A 
                    LEFT JOIN tbl_country B ON A.country = B.Country_Code
                    LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
    $Fields = 'A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.fax,A.address,A.city,A.country,A.state,A.zip_code,A.website,A.coordinates,B.Country_Name,C.State_Name';
    $AccDetarr  = $Gen->GetSelWhere($Table,$Fields," xml_id = ".$_SESSION['User']['xml_id']);
    for($i=0;$i<count($AccDetarr);$i++) {
        if($AccDetarr[$i]['coordinates'] != "")
		{
                list($lat,$lang) = explode(" ",$AccDetarr[$i]['coordinates']);
        		$AccDetarr[$i]['coordinates'] = $lat.",".$lang;
		}
    }
    $AccDet = $AccDetarr;
    $smarty->assign("AccDet",$AccDet);
    $smarty->assign("AccDetcnt",count($AccDet));
    $Table  = "XML_customers ";
    //Map data
    //echo "<pre>";print_r($_REQUEST);exit;
    if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] != "") {
            $where = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND MIS_coordinates != ''";
            if(isset($_REQUEST['state']) && $_REQUEST['state'] != "") {
                    $where .= "AND state LIKE '%".$_REQUEST['state']."%'";
            }

            if(isset($_REQUEST['city']) && $_REQUEST['city'] != "") {
                    $where .= "AND city LIKE '%".$_REQUEST['city']."%'";
            }
            if(isset($_REQUEST['zipcode']) && $_REQUEST['zipcode'] != ""){
                    $where .= "AND zip = '".$_REQUEST['zipcode']."'";
            }
            $MapTWhere		= $where." LIMIT 0,1000";
            $MapTFields		= "*";
            $MapTRes		= $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
            $maptotal = count($MapTRes);
            $lat_tot = 0;
            $lang_tot = 0;
            for($k=0;$k<count($MapTRes);$k++) {
                    list($latT,$langT) = explode(" ",$MapTRes[$k]['MIS_coordinates']);
                    $MapTRes[$k]['MIS_coordinates'] = $latT.",".$langT;
                    $lat_tot = $lat_tot+$latT;
                    $lang_tot = $lang_tot+$langT;
            }
            if($maptotal >0 ) {
                    $lat_avg = $lat_tot/($maptotal);
                    $lang_avg = $lang_tot/($maptotal);
            }
            /*echo $maptotal;
            echo "<br>";
            echo $lat_tot."----".$lang_tot;
            echo "<br>";
            echo $lat_avg."----".$lang_avg;
            exit();*/
            //echo "<pre>"; print_r($MapTRes);exit;
            $smarty->assign("MapRes",$MapTRes);
            $smarty->assign("MapTRes",$MapTRes);
            $smarty->assign("MapTRescnt",count($MapTRes));
            $smarty->assign("Search","YES");
    } else {
            /*if(isset($_REQUEST['hid_key1']) && $_REQUEST['hid_key1'] != "")
            {
                    echo "<pre>";print_r($_REQUEST);exit;
            }*/
            //Map data
            $MapWhere   = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND MIS_coordinates != '' ORDER BY created_date DESC LIMIT 0,1000";
            $MapTable   = "XML_customers ";
            $MApFields		= "*";
            $MapRes = $usr->GetSelWhere($MapTable,$MApFields,$MapWhere);
            $maptotal = count($MapRes);
            $lat_tot = 0;
            $lang_tot = 0;
            /*if($AccDet[0]['coordinates'] != "")
                    list($lat_tot,$lang_tot) = explode(" ",$AccDet[0]['coordinates']);*/

            for($i=0;$i<count($MapRes);$i++) {
                if($MapRes[$i]['MIS_coordinates'] != "") {
                        list($lat,$lang) = explode(" ",$MapRes[$i]['MIS_coordinates']);
                        $lat_tot = $lat_tot+$lat;
                        $lang_tot = $lang_tot+$lang;
                }
                $MapRes[$i]['MIS_coordinates'] = $lat.",".$lang;
            }
            if($maptotal >0 ) {
                $lat_avg = $lat_tot/($maptotal);
                $lang_avg = $lang_tot/($maptotal);
            }
            //echo "<pre>";print_r($MapRes);exit;
            $smarty->assign("MapRes",$MapRes);
            $smarty->assign("MapRescnt",count($MapRes));


            if($_REQUEST['totcust'] == "") {
                    //Total Records
                $year = date('Y') - 1;
                $last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
                $MapTWhere  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND MIS_coordinates != '' ORDER BY created_date DESC LIMIT 0,1000";
                $MapTFields = "*";
                $MapTRes    = $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
                for($k=0;$k<count($MapTRes);$k++) {
                        list($latT,$langT) = explode(" ",$MapTRes[$k]['MIS_coordinates']);
                        $MapTRes[$k]['MIS_coordinates'] = $latT.",".$langT;
                }
                $smarty->assign("MapTRes",$MapTRes);
                $smarty->assign("MapTRescnt",count($MapTRes));
            }
            if($_REQUEST['comphid'] == "all") {
                $lat_tot = 0;
                $lang_tot = 0;
                //Competitor Records
                $Table = "tbl_competitors";
                $MapTWhere  = "1=1 AND user_id = '".$_SESSION['User']['UID']."' AND status = 'A'";
                $MapTFields = "*";
                $MapTRes    = $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
                for($k=0;$k<count($MapTRes);$k++) {
                    list($latT,$langT) = explode(" ",$MapTRes[$k]['coordinates']);
                    $MapTRes[$k]['coordinates'] = $latT.",".$langT;
                    $lat_tot = $lat_tot+$latT;
                    $lang_tot = $lang_tot+$langT;
                }
                $lat_avg = $lat_tot/count($MapTRes);
                $lang_avg = $lang_tot/count($MapTRes);
                $smarty->assign("MapCRes",$MapTRes);
                $smarty->assign("MapCRescnt",count($MapTRes));
                //echo count($MapTRes);exit;
            }
            //echo "<pre>";print_r($MapTRes);exit;
            $smarty->assign("Search","NO");
    }    

    if($AccDetarr[0]['coordinates'] != "")
        list($latshop,$langshop) = explode(",",$AccDetarr[0]['coordinates']);

    $lat_avg_shop = $latshop;
    $lang_avg_shop = $langshop;
    $smarty->assign("lat_avg_shop",$lat_avg_shop);
    $smarty->assign("lang_avg_shop",$lang_avg_shop);
    
    if($_SERVER['REMOTE_ADDR'] == '182.72.66.214') {
        //echo "<pre>".$lang_avg_shop."-->".$lat_avg_shop;print_r($AccDetarr);print_r($MapTRes);exit;
    }
    
    $smarty->assign("lat_avg",$lat_avg);
    $smarty->assign("lang_avg",$lang_avg);
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-dm.tpl');
?>