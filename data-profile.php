<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Edit Profile');
    $Page = 'account';
    if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit') {
            $InsArr = $_REQUEST['Log'];
            $Result = $Gen->UpdateQry('tbl_users',$InsArr," user_id = ".$_SESSION['User']['UID']);
            header('Location:'.SITEURL.'/myaccount.php');
    }
    $Table  = "tbl_users";
    $Fields = 'no_of_shop_bays, shop_labor_rate, no_of_technicians, no_of_advisors, sq_ft_of_shop';
    $AccDet = $Gen->GetSelWhere($Table,$Fields," user_id = ".$_SESSION['User']['UID']);
    $smarty->assign('AccDet',$AccDet[0]);
    $smarty->assign('Page',$Page);
    $smarty->display('data-profile.tpl');
?>