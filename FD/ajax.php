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
	<option value="<?php echo $States[$s]['State_ID']; ?>"><?php echo $States[$s]['State_Name']; ?></option>
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