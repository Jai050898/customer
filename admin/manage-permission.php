<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $Gen 		= new General;
      function recursiveMenu($categories,$parent = 0, $level = 0)
    {//echo "<pre>";print_r($permission);exit;
         $Gen 		= new General;
         $get_details = $Gen->GetAllWhere('user_permission', 'user_id='.$_REQUEST['user_id']);//echo "<pre>";print_r($get_details);exit;
        $permissions = explode(",",$get_details[0]['menu_permit']);//echo "<pre>";print_r($permissions);exit;
        $ret = '<ul>';
        foreach($categories as $index => $category)
        {
            if($category['parent_id'] == $parent)
            {
                /*$checked = '';
                if($category['status'] == "A")
                    $checked = "checked=checked";*/
                $menu = array();               
                $ret .= '<li><input type="checkbox" id="parent_id'.$category['parent_id'].'" name="menu_permit[]" value="'.$category['id'].'"'; 
                if(in_array($category['id'],$permissions))
                {
                    $ret .= " checked=checked ";
                }
                $ret .= 'style="float:left;" /><p class="Tier' . $level . '">'. $category['menu'] . '</p>';
                
                //$ret .= '<input type="checkbox" name="menu_permit" value="'.$category['id'].'"'.$checked.'" style="float:left;" /><p class="Tier' . $level . '">'. $category['menu'] . '</p>';
                if($category['ChildCount'] > 0)
                    $ret .= recursiveMenu($categories, $category['id'], $level+1);
                $ret .= '</li>';
            }
        }
        return $ret . '</ul>';
    }
    //select Category.*, (select count(distinct c1.id) from Category as c1 where c1.root = Category.id) as ChildCount from Category
    
    
    //echo "<prE>";print_r($_REQUEST);exit;
    
    if(isset($_REQUEST['submitBtn']) && $_REQUEST['submitBtn'] = 'submit') {
//echo "<prE>";print_r($_REQUEST);exit;
    
        $menuIds    = implode(',', $_REQUEST['menu_permit']);//echo "<prE>";print_r($menuIds);exit; 
        $user_exists = $Gen->GetSelWhere('user_permission','user_id','user_id='.$_REQUEST['user_id']);
        if($user_exists['0']['user_id'])
        {
            $Gen->DeleteQry('user_permission','user_id='.$_REQUEST['user_id']);
        }
        $activeUpdateAry  = array('menu_permit'=>$menuIds,'user_id'=>$_REQUEST['user_id']);  
        $Gen->InsertQry('user_permission',$activeUpdateAry);
        header("Location:".SITEURL.'/admin/manage-users-demo.php');
        /*if(){
            
        }else{
            $activeUpdateAry  = array('menu_permit'=>$menuIds,'user_id'=>$_REQUEST['id']); 
           $Gen->InsertQry('user_permission',$activeUpdateAry);
        }*/
       
        //$Gen->UpdateQry('user_permission',$activeUpdateAry, "id=$menuIds");
        echo "Updated Successfully";
    }
    
    
    $table  = "user_menu U";
    $fielfs = "U.*, (SELECT count(distinct U2.id) from user_menu U2 WHERE U2.parent_id = U.id) as ChildCount";
    
    $menuArray  = array();
    //$menuArray  = $Gen->GetSelWhere("user_menu", "menu, parent_id, menu_order", " 1=1 AND status = 'A' ORDER BY parent_id, menu_order");
    $menuArray  = $Gen->GetSelWhere($table, $fielfs, " 1=1 and status ='A' ORDER BY parent_id, menu_order");
    
    //echo "<pre>";print_r($menuArray);exit;
    
    
    $ret    = recursiveMenu($menuArray);
    //echo $ret;exit;
        
        
$smarty->assign('returnpermissions',$ret);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-permission.tpl');
?>
