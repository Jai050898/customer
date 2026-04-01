<?php
 $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 //echo $_SERVER['REQUEST_URI'];   
 $request_uri = $_SERVER['REQUEST_URI'];;
 $required = explode("customer/",$request_uri);
 //$required[1];
 switch($required[1]){
     case "dashboard.php":
         $_pagename= 'Home';
         break;
     case "myaccount.php":
         $_pagename ='MyAccount';
         break;
     case "edit-profile.php" :
         $_pagename ="MyAccount";
         break;
     case "change-password.php" :
         $_pagename ="MyAccount";
         break;
     case "data-profile.php" :
         $_pagename ="MyAccount";
         break;
     case "manage-staff.php" :
         $_pagename ="MyAccount";
         break;
     case "add-staff.php" :
         $_pagename ="MyAccount";
         break;
     case "manage-uploaded-files.php" :
         $_pagename ="Projects";
         break;
     case "manage-projects.php" :
         $_pagename ="Projects";
         break;
     case "project-tracker.php" :
         $_pagename ="Projects";
         break;
     case "myalbums.php" :
         $_pagename ="Projects";
         break;
     case "admin-uploaded-files.php" :
         $_pagename ="Projects";
         break;
     case "upload-admin-files.php" :
         $_pagename ="Projects";
         break;
     case "albums.php" :
         $_pagename ="Resources";
         break;
     case "blog/" :
         $_pagename ="Resources";
         break;
     case "wiki/" :
         $_pagename ="Resources";
         break;
     case "portfolio.php" :
         $_pagename ="Resources";
         break;
     case "links.php" :
         $_pagename ="Resources";
         break;
     case "manage-tickets.php" :
         $_pagename ="Resources";
         break;
     case "customer-dc.php" :
         $_pagename ="Business";
         break;
     case "manage-customer-tracking.php" :
         $_pagename ="Business";
         break;
     case "customer-analysis.php" :
         $_pagename ="Business";
         break;
     case "customer-calender.php" :
         $_pagename ="Business";
         break;
     case "customer-dm.php" :
         $_pagename ="Business";
         break;
     case "manage-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-zipcode-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-city-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-customer-visit-reports.php" :
         $_pagename ="Business";
         break;
     case "manage-customer-counts.php" :
         $_pagename ="Business";
         break;
     case "manage-customer-spendings.php" :
         $_pagename ="Business";
         break;
     case "ro-calculations.php" :
         $_pagename ="Business";
         break;
     case "customer-visit-spending.php" :
         $_pagename ="Business";
         break;
     case "manage-mis-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-mis-zipcode-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-mis-city-customers.php" :
         $_pagename ="Business";
         break;
     case "manage-mis-customers-report.php" :
         $_pagename ="Business";
         break;
     case "new-reports.php" :
         $_pagename ="Business";
         break;
     case "gross-sale-weekwise-report.php" :
         $_pagename ="Business";
         break;
     case "customer-last-visits.php" :
         $_pagename ="Business";
         break;
     case "manage-vehicles.php" :
         $_pagename ="Business";
         break;
     case "top-ten-vehicles.php" :
         $_pagename ="Business";
         break;
     case "manage-make-reports.php" :
         $_pagename ="Business";
         break;
     case "manage-model-reports.php" :
         $_pagename ="Business";
         break;
     case "model-years.php" :
         $_pagename ="Business";
         break;
     case "manage-ros.php" :
         $_pagename ="Business";
         break;
     case "manage-competitors.php" :
         $_pagename ="Business";
         break;
     case "manage-daily-data.php" :
         $_pagename ="Daily Data";
         break;
     case "add-daily-data.php" :
         $_pagename ="Daily Data";
         break;
     case "marketing-budget.php" :
         $_pagename ="Marketing";
         break;
     case "monitoring.php" :
         $_pagename ="Marketing";
         break;
     case "ro-goal.php" :
         $_pagename ="Marketing";
         break;
     case "calendars.php" :
         $_pagename ="Marketing";
         break;
     case "calendars-cat.php" :
         $_pagename ="Marketing";
         break;
     case "wis.php" :
         $_pagename ="Marketing";
         break;
     case "online-tests.php" :
         $_pagename ="Websites";
         break;
     case "gogoleserp.php" :
         $_pagename ="Websites";
         break;
     case "bingserp.php" :
         $_pagename ="Websites";
         break;
     case "yahooserp.php" :
         $_pagename ="Websites";
         break;
     case "marketing-survey.php" :
         $_pagename ="Surveys";
         break;
     case "website-survey.php" :
         $_pagename ="Surveys";
         break;
     case "questionnaire.php?cat=4" :
         $_pagename ="Surveys";
         break;
     case "integrated-survey.php" :
         $_pagename ="Surveys";
         break;
     case "rebate_check.php" :
         $_pagename ="Product";
         break;
     case "" :
         $_pagename ="Product";
         break;
         
 }
 
function recursiveMenu($menus,$parent = 0, $level = 0)
    {//echo "<pre>";print_r($categories);exit;
    global $_pagename;
           $ret = '<ul>';
        foreach($menus as $index => $menulist)
        {
            if($menulist['parent_id'] == $parent)
            {
                //$ret .= "<li><a href='".$menulist['link']."'><span>".$menulist['menu']."</span></a>"; 
                $ret .= "<li><a href='".$menulist['link']."' "; 
                if($_pagename==$menulist['menu']){
                    $ret .='class="active"';
                 }  
                $ret .= "><span>".$menulist['menu']."</span></a>"; 
                if($menulist['ChildCount'] > 0)
                    $ret .= recursiveMenu($menus, $menulist['id'], $level+1);
                $ret .= '</li>';
            }
        }
        return $ret . '</ul>';
        
    }
    $usr 		= new General;
 
    $Table	= "user_permission";
    $Fields	= " menu_permit";
    $Where 	= " user_id = '".$_SESSION['User']['xml_id']."' "; //echo $Where;exit;
    $UsrDet	= $usr->GetSelWhere($Table,$Fields,$Where);
    $menu_permit =explode(",",$UsrDet[0]['menu_permit']);
    //echo "<pre>";print_r($menu_permit);exit;
    if(isset($menu_permit) && $menu_permit != '')
    {
                            //  $ids = array(1, 2, 3, 4);
        $menuids = join(', ', $menu_permit);
        $query = "SELECT U.*, (SELECT count(distinct U2.id) from user_menu U2 WHERE U2.parent_id = U.id) as ChildCount FROM user_menu U WHERE U.id IN ($menuids)";
         $menu_data  = $usr->SelectQuery($query); 
    } 
 $ret    = recursiveMenu($menu_data);

 
?>