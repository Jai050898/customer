<?php
/*********************************************************************
* Description: Registration Page of Buyers & Suppliers for the Site.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx  
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$smarty->assign('breadcrumb','Dashboard');
$usr 		= new General;

/**********Section to get Tasks Statistics********/
$Tasks = $Gen->GetSelWhere("tbl_tasks A LEFT JOIN tbl_projects B ON A.project_id = B.project_id","A.task_id,A.title,A.dead_line,A.priority"," A.status = 'A' AND B.client_id = '".$_SESSION['User']['UID']."' ORDER BY A.task_id  DESC limit 0,5");
//echo "<pre>";print_r($Tasks);exit;
$smarty->assign("Tasks",$Tasks);

/**********Section to get Blogs Statistics********/
$Blogs = $Gen->GetSelWhere("wp_posts","ID,post_title,post_content"," post_status = 'publish' ORDER BY ID  DESC limit 0,5");
//echo "<pre>";print_r($Tasks);exit;
$smarty->assign("Blogs",$Blogs);

/**********Section to get Wiki Statistics********/
$Wiki = $Gen->GetSelWhere("wikipage A LEFT JOIN wikisearchindex B ON A.page_id = B.si_page","A.page_id,A.page_title,B.si_text 	"," 1 = 1 ORDER BY page_id  DESC limit 0,3");
//echo "<pre>";print_r($Wiki);exit;
$smarty->assign("Wiki",$Wiki);

/**********Section to get Images Statistics********/
$Images = $Gen->GetSelWhere("tbl_photos","photo_id ,photo_name"," status = 'A' ORDER BY photo_id  DESC limit 0,4");
//echo "<pre>";print_r($Images);exit;
$smarty->assign("Images",$Images);

function recursiveMenu($menus,$parent = 0, $level = 0)
    {//echo "<pre>";print_r($categories);exit;
           $ret = '<ul>';
        foreach($menus as $index => $menulist)
        {
            if($menulist['parent_id'] == $parent)
            {
                //$ret .= "<li><a href='".$menulist['link']."'><span>".$menulist['menu']."</span></a>"; 
                $ret .= "<li><a href='".$menulist['link']."' "; 
                if($Page==$menulist['menu']){
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
        //$UsrDet				= $usr->GetSelWhere('tbl_users A','user_id,email,user_name,xml_id,password,company_name,Last_Login_Date,status,login_status,access_to_mark_survey,access_to_site_survey,access_to_integrated_survey,ismarketingsurveycompleted,iswebsurveycompleted,issurveycompleted,is_staff,created_date,attempts'," user_name = '".$_REQUEST['input_1']."' AND password = '".base64_encode($_REQUEST['input_2'])."'");
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
        //$menuArray  = $Gen->GetSelWhere("user_menu", "menu, parent_id, menu_order", " 1=1 AND status = 'A' ORDER BY parent_id, menu_order");
        $menu_data  = $usr->SelectQuery($query); 
    } 
 $ret    = recursiveMenu($menu_data);
 //echo "<pre>";print_r($ret);exit;
 

$smarty->assign('menu',$ret);


$smarty->display('dashboard-demo.tpl');
//$smarty->display('header-demo.tpl');
?>