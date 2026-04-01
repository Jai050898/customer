<?
require_once("../includes/application_start.php");
require_once("../ajax-upload-images.php");
$usr 		= new General;
#when we are deleting an employee
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_GET['act']) && $_GET['act']=='del')
{
	if(isset($_GET['EmpId']) && is_numeric($_GET['EmpId']))
	{
		$tbl = $_REQUEST['tbl'];
		$del = $usr->DeleteQry($tbl,"EmpId = '".$_GET['EmpId']."'");	
	}	
}
#when the form submitted
if(isset($_POST['EmpName']))
{
	if(empty($error))
	{
		$tbl = $_REQUEST['tbl'];
		#set the values
		$companyEmployee = array();
		$companyEmployee['UserId'] = $_SESSION['User']['UID'];
		$companyEmployee['EmpName'] = $_POST['EmpName'];
		$companyEmployee['EmpDescription'] = $_POST['EmpDescription'];
		$companyEmployee['EmpCertifications'] = $_POST['EmpCertifications'];
		$companyEmployee['TimeWithCompany'] = $_POST['TimeWithCompany'];
		#upload the image
		if(isset($_FILES['EmpPhoto']['tmp_name']))
		{
			$timestamp=date('YmdHis');
			$orgFileName=trim(basename($_FILES['EmpPhoto']['name']));
			$FileName = $timestamp."_".$orgFileName;
			if(move_uploaded_file($_FILES['EmpPhoto']['tmp_name'],SITEPATH."/photos/original/".$timestamp."_".$orgFileName))
			{
				generateResizeImage($FileName,SITEPATH."/photos/original/",SITEPATH."/photos/original/",600,600);
				generateResizeImage($FileName,SITEPATH."/photos/original/",SITEPATH."/photos/thumbnails/",100,100);
				$companyEmployee['EmpPhoto'] = $FileName;
			}	
		}		
		#enetr basic info in the database
		$ins 	= $Gen->InsertQry($tbl,$companyEmployee);	
		#Upadte the customerinfo to update lastPageVisited field
		$error='Record Saved Successfully.';
	}
	else
		$error='Record Not Saved.';
}

?>