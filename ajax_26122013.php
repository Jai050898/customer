<?php
require_once("includes/application_start.php");
/********** Section to get the list of States of a Selected Country in the Dropdown ******/
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'States')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$States = $Gen->GetCountryStates($_REQUEST['val']);
	//echo "<pre>";print_r($States);exit;
	?>
	<select name="<?php echo $_REQUEST['name']; ?>" id="<?php echo $_REQUEST['id']; ?>" class="select req-string" style="width:187px;">
	<?php if($_REQUEST['Width'] == '70') { ?>
	<option value="">&nbsp;&nbsp;&nbsp;---</option>
	<?php } else { ?>
	<option value="">--- Please Select ---</option>
	<?php } ?>
	<?php for($s=0;$s<count($States);$s++) { ?>
	<option value="<?php echo $States[$s]['State_ID']; ?>"><?php if($States[$s]['State_Code'] != "") { echo $States[$s]['State_Code']; } else { echo $States[$s]['State_Name']; }?></option>
	<?php } ?>
	</select>
	<?php
}
/*********** To Check the Email Availability **********/
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'Email')
{
	$Cnt = $Gen->TotalRows('tbl_users',"email = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'SEOEmail')
{
	$Cnt = $Gen->TotalRows('tbl_seo_users',"email = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'WriterEmail')
{
	$Cnt = $Gen->TotalRows('tbl_writer_users',"email = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'ChkUname')
{
	$Cnt = $Gen->TotalRows('tbl_users',"user_name = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'ChkSEOUname')
{
	$Cnt = $Gen->TotalRows('tbl_seo_users',"user_name = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'ChkWriterUname')
{
	$Cnt = $Gen->TotalRows('tbl_writer_users',"user_name = '".$_REQUEST['val']."'");
	if($Cnt > 0)
		echo '1';
	else
		echo '0';
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'StoreAnswer')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$ins_arr= array();
	$ins_arr['user_id']= $_SESSION['User']['UID'];
	$ins_arr['cat_id']=$_REQUEST['catid'];
	$ins_arr['quest_id']=$_REQUEST['quest_id'];
	if($_REQUEST['type'] != "T" && $_REQUEST['type'] != "B")
		$ins_arr['option_id']=$_REQUEST['val'];
	else
		$ins_arr['answer']=$_REQUEST['val'];
		
	$ins_arr['ans_type']=$_REQUEST['type'];
	
	
	$check = $Gen->TotalRows('tbl_answers',"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$_REQUEST['quest_id']."'");
	/*else
	{
		$checkbox = $Gen->GetSelWhere('tbl_answers','option_id',"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$_REQUEST['quest_id']."'");
		//echo "<pre>";print_r($checkbox);exit;
		$check = count($checkbox);
		$arrchk = @explode(",",$checkbox[0]['option_id']);
		if($checkbox[0]['option_id'] != "" && !in_array($ins_arr['option_id'],$arrchk))
		{			
			$ins_arr['option_id'] .= ",".$checkbox[0]['option_id'];
		}
	}*/
			
		if($check == 0)
			$ins = $Gen->InsertQry('tbl_answers',$ins_arr);
		else
			$ins = $Gen->UpdateQry('tbl_answers',$ins_arr,"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$_REQUEST['quest_id']."'");
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'StorePollAnswer')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$ins_arr= array();
	$ins_arr['user_id']= $_SESSION['User']['UID'];
	$ins_arr['cat_id']=$_REQUEST['catid'];
	$ins_arr['poll_quest_id']=$_REQUEST['quest_id'];
	if($_REQUEST['type'] != "T")
		$ins_arr['option_id']=$_REQUEST['val'];
	else
		$ins_arr['answer']=$_REQUEST['val'];
		
	$ins_arr['ans_type']=$_REQUEST['type'];
	
	
	$check = $Gen->TotalRows('tbl_poll_answers',"user_id = '".$_SESSION['User']['UID']."' AND poll_quest_id = '".$_REQUEST['quest_id']."'");
	/*else
	{
		$checkbox = $Gen->GetSelWhere('tbl_answers','option_id',"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$_REQUEST['quest_id']."'");
		//echo "<pre>";print_r($checkbox);exit;
		$check = count($checkbox);
		$arrchk = @explode(",",$checkbox[0]['option_id']);
		if($checkbox[0]['option_id'] != "" && !in_array($ins_arr['option_id'],$arrchk))
		{			
			$ins_arr['option_id'] .= ",".$checkbox[0]['option_id'];
		}
	}*/
			
		if($check == 0)
			$ins = $Gen->InsertQry('tbl_poll_answers',$ins_arr);
		else
			$ins = $Gen->UpdateQry('tbl_poll_answers',$ins_arr,"user_id = '".$_SESSION['User']['UID']."' AND poll_quest_id = '".$_REQUEST['quest_id']."'");
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'DelCalItem')
{
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_calendars_items",$PrFields,"id = ".$_REQUEST['id']);
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'DelBudgetItem')
{
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_budget_items",$PrFields,"id = ".$_REQUEST['id']);
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'DelCalSlowItem')
{
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_calendars_slow_periods",$PrFields,"id = ".$_REQUEST['id']);
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'CD')
{
	$PrFields = array();
	$PrFields['sid'] = $_REQUEST['sid'];
	$PrFields['cdid'] = $_REQUEST['cdid'];
	$PrFields['created_date'] = date("Y-m-d H:i:s");
	$ins = $Gen->InsertQry('tbl_cd_shop',$PrFields);
	if($ins)
	{ ?>
		<img src="<?php echo SITEURL;?>/images/yes.gif" border="0">
	<?php }
	else
	{ ?>
		<img src="<?php echo SITEURL;?>/images/no.png" border="0">
		
	<?php }
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'CDYES')
{
	$PrFields = array();
	$PrFields['sid'] = $_REQUEST['sid'];
	$PrFields['cdid'] = $_REQUEST['cdid'];
	$PrFields['created_date'] = date("Y-m-d H:i:s");
	$ins = $Gen->InsertQry('tbl_cd_shop',$PrFields);
	if($ins)
	{ ?>
		<span id="changedivno<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>"><a href="javascript: changestatusno('<?php echo $_REQUEST['cdid'];?>','<?php echo $_REQUEST['sid'];?>','changedivno<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>');"><img src="<?php echo SITEURL;?>/images/yes.gif" border="0"></a></span>
	<?php }
	else
	{ ?>
		<span id="changediv<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>"><a href="javascript: changestatus('<?php echo $_REQUEST['cdid'];?>','<?php echo $_REQUEST['sid'];?>','changediv<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>');"><img src="<?php echo SITEURL;?>/images/no.png" border="0"></a></span>
		
	<?php }
}
if(isset($_REQUEST['For']) && $_REQUEST['For'] == 'CDNO')
{
	if($Gen->DeleteQry('tbl_cd_shop'," sid = '".$_REQUEST['sid']."' AND cdid = '".$_REQUEST['cdid']."'"))
	{ ?>
		<span id="changediv<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>"><a href="javascript: changestatus('<?php echo $_REQUEST['cdid'];?>','<?php echo $_REQUEST['sid'];?>','changediv<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>');"><img src="<?php echo SITEURL;?>/images/no.png" border="0"></a></span>
	<?php }
	else
	{ ?>
		<span id="changedivno<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>"><a href="javascript: changestatusno('<?php echo $_REQUEST['cdid'];?>','<?php echo $_REQUEST['sid'];?>','changedivno<?php echo $_REQUEST['cdid'];?><?php echo $_REQUEST['sid'];?>');"><img src="<?php echo SITEURL;?>/images/yes.gif" border="0"></a></span>
		
	<?php }
}