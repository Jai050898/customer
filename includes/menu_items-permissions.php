<?php
/*********************************************************************
* Description: Registration Page of Buyers & Suppliers for the Site.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx  
**********************************************************************/
require_once("application_start.php");

$usr 		= new General;

 $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 $request_uri = $_SERVER['REQUEST_URI'];;
 $required = explode("customer/",$request_uri);
 $required[1]='myaccount.php';
 //************get page permission*******************/
 function GetSelWhere($tbl_name,$selFields,$where)
	{
            if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                    //echo "<pre>";print_r($_REQUEST);
                   // echo '<br>'.$tbl_name.'<br>'.$selFields.'<br>'.$where.'<br>';exit;
                }
            
		//insert ',' between the field names
		if(is_array($selFields))
			$fields = @implode(',',$selFields);
		else
			$fields = $selFields;
		$qry = "SELECT ".$fields." FROM ".$tbl_name;
		if(isset($where) && $where != '')
			$qry .= " WHERE ".$where;
                if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                  //  echo "<pre>";print_r($_REQUEST);
                    //echo '<br>'.$qry.'<br>';//exit;
                }
		echo '<br>'.$qry;exit;
		
		//$res_arr = $this->SelectQuery($qry);
                  if($_SERVER['REMOTE_ADDR'] == '182.72.66.214' || $_SERVER['REMOTE_ADDR'] == '182.72.88.157'){
                    //  echo $qry;
                    //echo "<pre>";print_r($res_arr);
                    //echo '<br>'.$qry.'<br>';//exit;
                }
                 
	
	}
 $Table1	= "user_menu";
    $Fields1	= "id";
    $Where1 	= "1=1 and link LIKE '%".$required[1]."%' ";
    $UsrDet1	= $usr->GetSelWhere($Table1,$Fields1,$Where1);
    echo'<pre>';
    print_r($UsrDet1);
    foreach($UsrDet1 as $link_val){
        echo $link_val['id'];
    }
    exit;
?>