<?php

/**********************************************************************************************
 * Copyright 2012 YouSendIt, Inc. All Rights Reserved.
*
* Licensed under the YouSendIt API agreement. You may not use this file except in compliance
* with the License.
*
* This is a sample file distributed on an "AS IS" basis, WITHOUT WARRANTIES OR CONDITIONS OF
* ANY KIND, either expressed or implied. See the API License for the specific language
* governing permissions and limitations.
*********************************************************************************************/

require_once('UserAPIs.php');
require_once('StorageAPIs.php');
require_once('FileTransfer.php');
require_once('FolderShareSendAPIs.php');
require_once('./include/ResponseEntities.php');

session_start();

if ((empty($_SESSION['sHost'])) || (empty($_SESSION['sApp']))) {

	header('Location: ./SampleApp.php');
}else if (empty($_SESSION['sEmail']) || (empty($_SESSION['sPass']))){
	header('Location: ./SampleApp.php');
}

$method = $_POST['method'];

switch ($method){
	case 'getuserinfo':{
		getUserInfo();
		break;
	}
	case 'getpolicyinfo':{
		getpolicyInfo();
		break;
	}

	case 'getfileinfo':{
		getFileInfo();
		break;
	}

	case 'initupload':{
		initUpload();
		break;
	}

	case 'commitupload':{
		commitUpload();
		break;
	}

	case 'downloadfile':{
		downloadFile();
		break;
	}
	case 'renamefile':{
		renameFile();
		break;
	}
	case 'movefile':{
		moveFile();
		break;
	}
	case 'deletefile':{
		deleteFile();
		break;
	}

	case 'getfolderinfo':{
		getFolderinfo();
		break;
	}
	case 'createfolder':{
		createFolder();
		break;
	}
	case 'renamefolder':{
		renameFolder();
		break;
	}
	case 'movefolder':{
		moveFolder();
		break;
	}
	case 'deletefolder':{
		deleteFolder();
		break;
	}
	case 'sharefolder':{
		shareFolder();
		break;
	}
	case 'unsharefolder':{
		unshareFolder();
		break;
	}
	case 'getshareinfo':{
		getShareInfo();
		break;
	}

	case 'sendfile':{
		sendFile();
		break;
	}

	case 'filerevisions':{
		getFileRevisions();
		break;
	}

	case 'storagerevisions':{
		getStorageRevisions();
		break;
	}

	case 'downloadafile':{
		$t = true;
		$err = '';
		if (strlen($_POST['token'])==0){
			$t = false;
			$err = 1;
		}
		if (strlen($_POST['durl'])==0){
			$t=false;
			if (strlen($_POST['token'])==0){
				$err = 4;
			}else {
				$err = 2;
			}
		}
		if ($t){
			downloadaFile();
		}
		else {header("Location: ./dwn.php?err=$err");
		}
		break;
	}
}

function getUserInfo(){
	$user = new UserAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET USER INFO: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}

	else {
		$user->setAuthToken($var0);
		$responseObject = $user->getUserInfo($var1);


		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getEmail();
			if (!empty($current)){
				echo " Email: ".$current."\n";
			}else{
				echo " Email: N/A\n";
			}
			$current = $responseObject->getFirstName();
			if (!empty($current)){
				echo " First Name: ".$current."\n";
			}else{
				echo " First Name: N/A\n";
			}
			$current = $responseObject->getLastName();
			if (!empty($current)){
				echo " Last Name: ".$current."\n";
			}else{
				echo " Last Name: N/A\n";
			}
			$current = $responseObject->getType();
			if (!empty($current)){
				echo " Type: ".$current."\n";
			}else{
				echo " Type: N/A\n";
			}
			$current = $responseObject->getVersion();
			if (!empty($current)){
				echo " Version: ".$current."\n";
			}else{
				echo " Version: N/A\n";
			}
			$account = $responseObject->getAccount();
			if (!empty($account)){
				echo "\nAccount: \n";
				$current = $account->getControlExpirationDate();
				if(strlen($current)==0){
					echo " Control Expiration Date: N/A\n";
				}	else{
					echo " Control Expiration Date: ".$current."\n";
				}
				$current = $account->getMaxFileSize();
				if (!empty($current)){
					echo " Max File Size: ".$current."\n";
				}else{
					echo " Max File Size: N/A\n";
				}
				$current = $account->getMaxFileDownloads();
				if (!empty($current)){
					echo " Max File Downloads: ".$current."\n";
				}else{
					echo " Max File Downloads: N/A\n";
				}
				$current = $account->getVerifyRecipientIdentity();
				if (strlen($current)==0){
					echo " Verify Recipients Identity: N/A\n";
				}else{
					echo " Verify Recipients Identity: ".$current."\n";
				}
				$current = $account->getMaxDownloadBWpermonth();
				if (!empty($current)){
					echo " Max Download BW per month: ".$current."\n";
				}else{
					echo " Max Download BW per month: N/A\n";
				}
				$current = $account->getAvailableStorage();
				if (!empty($current)){
					echo " Available Storage: ".$current."\n";
				}else{
					echo " Available Storage: N/A\n";
				}
				$current = $account->getKnowledgeBase();
				if (!empty($current)){
					echo " Knowledge Base: ".$current."\n";
				}else{
					echo " Knowledge Base: N/A\n";
				}
				$current = $account->getReturnReceipt();
				if (strlen($current)==0){
					echo " Return Receipt: N/A\n";
				}else{
					echo " Return Receipt: ".$current."\n";
				}
				$current = $account->getPasswordProtect();
				if (strlen($current)==0){
					echo " Password protect: N/A\n";
				}else{
					echo " Password protect: ".$current."\n";
				}
			}else{
				echo "\nAccount: N/A\n";
			}
			$storage = $responseObject->getStorage();
			if (!empty($storage)){
				echo "\nStorage: \n";
				$current = $storage->getRevision();
				if (!empty($current)){
					echo " Revision: ".$current."\n";
				}else{
					echo " Revision: N/A\n";
				}
				$current = $storage->getId();
				if (!empty($current)){
					echo " Id: ".$current."\n";
				}else{
					echo " Id: N/A\n";
				}
				$current = $storage->getCurrentUsage();
				if (!empty($current)){
					echo " Current Usage: ".$current."\n";
				}else{
					echo " Current Usage: N/A\n";
				}
				$current = $storage->getStorageQuota();
				if (!empty($current)){
					echo " Storage Quota: ".$current."\n";
				}else{
					echo " Storage Quota: N/A\n";
				}
			}else{
				echo "\nStorage: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function getpolicyInfo(){
	$policy = new UserAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");

	echo "\nGET POLICY INFO: \n\n";

	if (strlen($var0)==0){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else {

		$policy->setAuthToken($var0);
		$responseObject = $policy->getPolicyInfo();

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getFileExpiration();
			if (!empty($current)){
				echo " File Expiration: ".$current."\n";
			}else{
				echo " File Expiration: N/A\n";
			}

			$current = $responseObject->getFileExpirationOverwrite();
			if (strlen($current)==0){
				echo " File Expiration Overwrite: N/A\n";
			}else{
				echo " File Expiration Overwrite: ".$current."\n";
			}

			$current = $responseObject->getPasswordProtect();
			if (strlen($current)==0){
				echo " Password Protect: N/A\n";
			}else{
				echo " Password Protect: ".$current."\n";
			}

			$current = $responseObject->getPasswordProtectOverwrite();
			if (strlen($current)==0){
				echo " Password Protect Overwrite: N/A\n";
			}else{
				echo " Password Protect Overwrite: ".$current."\n";
			}

			$current = $responseObject->getReturnReceipt();
			if (strlen($current)==0){
				echo " Return Receipt: N/A\n";
			}else{
				echo " Return Receipt: ".$current."\n";
			}

			$current = $responseObject->getReturnReceiptOverwrite();
			if (strlen($current)==0){
				echo " Return Receipt Overwrite: N/A\n";
			}else{
				echo " Return Receipt Overwrite: ".$current."\n";
			}

			$current = $responseObject->getVri();
			if (strlen($current)==0){
				echo " Vri: N/A\n";
			}else{
				echo " Vri: ".$current."\n";
			}

			$current = $responseObject->getVriOverwrite();
			if (strlen($current)==0){
				echo " Vri Overwrite: N/A\n";
			}else{
				echo " Vri Overwrite: ".$current."\n";
			}

			$current = $responseObject->getVriShare();
			if (strlen($current)==0){
				echo " Vri Share: N/A\n";
			}else{
				echo " Vri Share: ".$current."\n";
			}

			$current = $responseObject->getVriOverwriteShare();
			if (strlen($current)==0){
				echo " Vri Overwrite Share: N/A\n";
			}else{
				echo " Vri Overwrite Share: ".$current."\n";
			}

			$current = $responseObject->getBlackListedDomains();

			if (empty($current[0])){
				echo " Black Listed Domains: N/A\n";
			} else {
				echo " Black Listed Domains: \n";
				foreach($current as $currentItem){
					echo $currentItem."\n";
				}
			}

			$current = $responseObject->getWhiteListedDomains();
			if (empty($current[0])){
				echo " White Listed Domains: N/A\n";
			}else{
				echo " White Listed Domains: \n";
				foreach($current as $currentItem){
					echo $currentItem."\n";
				}
			}

			$current = $responseObject->getBlackListedDomainsShare();

			if (empty($current[0])){
				echo " Black Listed Domains Share: N/A\n";
			} else {
				echo " Black Listed Domains Share: \n";
				foreach($current as $currentItem){
					echo $currentItem."\n";
				}
			}

			$current = $responseObject->getWhiteListedDomainsShare();
			if (empty($current[0])){
				echo " White Listed Domains Share: N/A\n";
			}else{
				echo " White Listed Domains Share: \n";
				foreach($current as $currentItem){
					echo $currentItem."\n";
				}
			}
		}
	}

	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function getFileInfo(){
	$file = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET FILE INFO: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else {

		$file->setAuthToken($var0);
		$responseObject = $file->getFileInfo($var1);


		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getRevision();
			if (!empty($current)){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}
			$current = $responseObject->getId();
			if (!empty($current)){
				echo " Id: ".$current."\n";
			}else{
				echo " Id: N/A\n";
			}
			$current = $responseObject->getClickableDownloadUrl();
			if (!empty($current)){
				echo " Clickable Download URL: ".$current."\n";
			}else{
				echo " Clickable Download URL: N/A\n";
			}
			$current = $responseObject->getCreatedOn();
			if (!empty($current)){
				echo " Created On: ".$current."\n";
			}else{
				echo " Created On: N/A\n";
			}
			$current = $responseObject->getDownloadUrl();
			if (!empty($current)){
				echo " Download URL: ".$current."\n";
			}else{
				echo " Download URL: N/A\n";
			}
			$current = $responseObject->getName();
			if (!empty($current)){
				echo " Name: ".$current."\n";
			}else{
				echo " Name: N/A\n";
			}
			$current = $responseObject->getOwnedByStorage();
			if (!empty($current)){
				echo " Owned by Storage: ".$current."\n";
			}else{
				echo " Owned by Storage: N/A\n";
			}
			$current = $responseObject->getParentId();
			if (strlen($current)==0){
				echo " Parent Id: N/A\n";
			}else{
				echo " Parent Id: ".$current."\n";
			}
			$current = $responseObject->getSize();
			if (!empty($current)){
				echo " Size: ".$current."\n";
			}else{
				echo " Size: N/A\n";
			}
		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function createFolder(){
	$folder = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
	echo "\nCREATE FOLDER: \n\n";

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$folder->setAuthToken($var0);

		if (strlen($var2)==0){
			$responseObject = $folder->createFolder($var1);
		}else{
			$responseObject = $folder->createFolder($var1,$var2);
		}


		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getRevision();
			if (!empty($current)){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}
			$current = $responseObject->getId();
			if (!empty($current)){
				echo " Id: ".$current."\n";
			}else{
				echo " Id: N/A\n";
			}

			$current = $responseObject->getCreatedOn();
			if (!empty($current)){
				echo " Created On: ".$current."\n";
			}else{
				echo " Created On: N/A\n";
			}
			$current = $responseObject->getFileCount();
			if(strlen($current)==0){
				echo " File Count: N/A\n";
			}else{
				echo " File Count: ".$current."\n";
			}

			$current = $responseObject->getFolderCount();
			if(strlen($current)==0){
				echo " Folder Count: N/A\n";
			}else{
				echo " Folder Count: ".$current."\n";
			}

			$current = $responseObject->getName();
			if (strlen($current)==0){
				echo " Name: N/A\n";
			}else{
				echo " Name: ".$current."\n";
			}
			$current = $responseObject->getParentId();
			if (strlen($current)==0){
				echo " Parent Id: N/A\n";
			}else{
				echo " Parent Id: ".$current."\n";
			}
			$current = $responseObject->getReadable();
			if (strlen($current)==0){
				echo " Readable: N/A\n";
			}else{
				echo " Readable: ".$current."\n";
			}

			$current = $responseObject->getSize();
			if (strlen($current)==0){
				echo " Size: N/A\n";
			}else{
				echo " Size: ".$current."\n";
			}
			$current = $responseObject->getType();
			if (!empty($current)){
				echo " Type: ".$current."\n";
			}else{
				echo " Type: N/A\n";
			}
			$current = $responseObject->getUpdatedOn();
			if (!empty($current)){
				echo " Updated On: ".$current."\n";
			}else{
				echo " Updated On: N/A\n";
			}
			$current = $responseObject->getWritable();
			if (strlen($current)==0){
				echo " Writable: N/A\n";
			}else{
				echo " Writable: ".$current."\n";
			}

			$files = $responseObject->getFiles();
			if (!empty($files)){
				echo "\nFiles: \n";
				foreach($files as $file){
					$current = $file->getRevision();
					if (!empty($current)){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}
					$current = $file->getId();
					if (!empty($current)){
						echo " Id: ".$current."\n";
					}else{
						echo " Id: N/A\n";
					}
					$current = $file->getCreatedOn();
					if (!empty($current)){
						echo " Created On: ".$current."\n";
					}else{
						echo " Created On: N/A\n";
					}
					$current = $file->getName();
					if (!empty($current)){
						echo " Name: ".$current."\n";
					}else{
						echo " Name: N/A\n";
					}
					$current = $file->getParentId();
					if (strlen($current)==0){
						echo " Parent Id: N/A\n";
					}else{
						echo " Parent Id: ".$current."\n";
					}
					$current = $file->getSize();
					if (!empty($current)){
						echo " Size: ".$current."\n";
					}else{
						echo " Size: N/A\n";
					}

				}
			}else{
				echo "\nFiles: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";

}

function shareFolder(){
	$share = new FolderShareSendAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");
	$var3 = trim($_POST['var3']," ");
	$var4 = trim($_POST['var4']," ");

	echo "\nSHARE FOLDER: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$share->setAuthToken($var0);

		if ((strlen($var3)==0))
			if (strlen($var4)==0){
			$responseObject = $share->shareFolder($var1,$var2);
		}else{
			$responseObject = $share->shareFolder($var1,$var2,'',$var4);
		}else if (strlen($var4)==0){
			$responseObject = $share->shareFolder($var1,$var2,$var3);
		}else{
			$responseObject = $share->shareFolder($var1,$var2,$var3,$var4);
		}


		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function unshareFolder(){
	$delete = new FolderShareSendAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nUNSHARE FOLDER: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		$delete->setAuthToken($var0);
		$responseObject = $delete->unshareFolder($var1,$var2);

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}
		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";

}

function initUpload(){
	$var0 = trim($_POST['token']," ");
	if (strlen($var0)==0){
		$t=array('error'=>'Empty Authentication Token field.');
	}else {
		$uploadObj = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
		$uploadObj->setAuthToken($var0);
		$initUpload = $uploadObj->initUpload();
		$current = $initUpload->getErrorStatus();
		if (!empty($current)){
			$t=array('errorcode'=>$current->getCode(),'errormessage'=>$current->getMessage());
		}else{
			$fileId = $initUpload->getFileId();
			if (!empty($fileId)){
				$t=array('itemid'=>$fileId);
			}else{
				$t=array('itemid'=>"N/A");
			}
			$uploadURL = $initUpload->getUploadUrl();
			if (!empty($uploadURL)){
				$a[] = $uploadURL;
				$t['URLs'] = $a;
			}else{
				$a[] = "N/A";
				$t['URLs'] = $a;
			}

		}
	}
	$t['met']='INIT UPLOAD';
	echo json_encode($t);
}

function commitUpload(){
	$uploadObj = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");
	echo "\nCOMMIT UPLOAD: \n\n";
	if (strlen($var0)==0){
		echo "\n Error: Empty Authentication Token field!\n";
	}else{
		$uploadObj->setAuthToken($var0);
		if ((strlen($var1)==0) || ($var1=='undefined')){
			$commitUpload = $uploadObj->commitFileUpload($var2);
		}else{
			$commitUpload = $uploadObj->commitFileUpload($var2,$var1);
		}
		$current = $commitUpload->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $commitUpload->getRevision();
			if (!empty($current)){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}
			$current = $commitUpload->getId();
			if (!empty($current)){
				echo " File Id: ".$current."\n";
			}else{
				echo " File Id: N/A\n";
			}
			$current = $commitUpload->getCreatedOn();
			if (!empty($current)){
				echo " Created On: ".$current."\n";
			}else{
				echo " Created On: N/A\n";
			}
			$current = $commitUpload->getName();
			if (!empty($current)){
				echo " Name: ".$current."\n";
			}else{
				echo " Name: N/A\n";
			}
			$current = $commitUpload->getOwnedByStorage();
			if (!empty($current)){
				echo " Owned by storage: ".$current."\n";
			}elsE{
				echo " Owned by storage: N/A\n";
			}
			$current = $commitUpload->getParentId();
			if (strlen($current)==0){
				echo " Parent Id: N/A\n";
			}else{
				echo " Parent Id: ".$current."\n";
			}

			$current = $commitUpload->getSize();
			if (!empty($current)){
				echo " Size: ".$current."\n";
			}else{
				echo " Size: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function downloadaFile(){
	$ft = new FileTransfer($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sUserAgent']);
	$var0 = trim($_POST['token']," ");
	$ft->setAuthToken($var0);
	$var1 = trim($_POST['durl']," ");

	$ft->setAuthToken($var0);
	if (isset($_POST['psw'])){
		$var2 = trim($_POST['psw']," ");
		$response = $ft->downloadaFileWS($var1,$var2);
	}
	else {$response = $ft->downloadaFileWS($var1);
	}
	if ($response !== 'fail'){
		header("Location: $response");
	}
	else {
		header("Location: ./dwn.php?err=3");
	}
};

function getFolderInfo(){
	$folder = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");
	$var3 = trim($_POST['var3']," ");

	echo "\nGET FOLDER INFO: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else {
		$folder->setAuthToken($var0);
		$responseObject = $folder->getFolderInfo($var1,$var2, $var3);

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getRevision();
			if (!empty($current)){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}
			$current = $responseObject->getId();
			if (!empty($current)){
				echo " Id: ".$current."\n";
			}else{
				echo " Id: N/A\n";
			}

			$current = $responseObject->getCurrentUsage();
			if (!empty($current)){
				echo " Current Usage: ".$current."\n";
			}else{
				echo " Current Usage: N/A\n";
			}

			$current = $responseObject->getCreatedOn();
			if (!empty($current)){
				echo " Created On: ".$current."\n";
			}else{
				echo " Created On: N/A\n";
			}

			$current = $responseObject->getFileCount();
			if(strlen($current)==0){
				echo " File Count: N/A\n";
			}else{
				echo " File Count: ".$current."\n";
			}

			$current = $responseObject->getFolderCount();
			if(strlen($current)==0){
				echo " Folder Count: N/A\n";
			}else{
				echo " Folder Count: ".$current."\n";
			}

			$current = $responseObject->getName();
			if (!empty($current)){
				echo " Name: ".$current."\n";
			}else{
				echo " Name: N/A\n";
			}
			$current = $responseObject->getParentId();
			if (strlen($current)==0){
				echo " Parent Id: N/A\n";
			}else{
				echo " Parent Id: ".$current."\n";
			}
			$current = $responseObject->getReadable();
			if(strlen($current)==0){
				echo " Readable: N/A\n";
			}else{
				echo " Readable: ".$current."\n";
			}
			$current = $responseObject->getSize();
			if (strlen($current)==0){
				echo " Size: N/A\n";
			}else{
				echo " Size: ".$current."\n";
			}
			$current = $responseObject->getType();
			if (!empty($current)){
				echo " Type: ".$current."\n";
			}else{
				echo " Type: N/A\n";
			}
			$current = $responseObject->getUpdatedOn();
			if (!empty($current)){
				echo " Updated On: ".$current."\n";
			}else{
				echo " Updated On: N/A\n";
			}
			$current = $responseObject->getWritable();
			if(strlen($current)==0){
				echo " Writable: N/A\n";
			}else{
				echo " Writable: ".$current."\n";
			}

			$current = $responseObject->getStorageQuota();
			if(strlen($current)==0){
				echo " Storage Quota: N/A\n";
			}else{
				echo " Storage Quota: ".$current."\n";
			}


			$files = $responseObject->getFiles();
			if (!empty($files)){
				echo "\nFiles: \n";
				foreach($files as $file){
					echo "\nFile: \n";
					$current = $file->getRevision();
					if (!empty($current)){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}
					$current = $file->getId();
					if (!empty($current)){
						echo " Id: ".$current."\n";
					}else{
						echo " Id: N/A\n";
					}
					$current = $file->getCreatedOn();
					if (!empty($current)){
						echo " Created On: ".$current."\n";
					}else{
						echo " Created On: N/A\n";
					}
					$current = $file->getName();
					if (!empty($current)){
						echo " Name: ".$current."\n";
					}else{
						echo " Name: N/A\n";
					}
					$current = $file->getParentId();
					if (strlen($current)==0){
						echo " Parent Id: N/A\n";
					}else{
						echo " Parent Id: ".$current."\n";
					}
					$current = $file->getSize();
					if (strlen($current)==0){
						echo " Size: N/A\n";
					}else{
						echo " Size: ".$current."\n";
					}

				}
			}else{
				echo "\nFiles: N/A\n";
			}

			$folders = $responseObject->getFolders();
			if (!empty($folders)){
				echo "\nFolders: \n";
				foreach($folders as $folder){
					echo "\nFolder: \n";
					$current = $folder->getRevision();
					if (!empty($current)){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}
					$current = $folder->getId();
					if (!empty($current)){
						echo " Id: ".$current."\n";
					}else{
						echo " Id: N/A\n";
					}
					$current = $folder->getCreatedOn();
					if (!empty($current)){
						echo " Created On: ".$current."\n";
					}else{
						echo " Created On: N/A\n";
					}

					$current = $folder->getFileCount();

					if (strlen($current)==0){
						echo " File Count: N/A\n";
					}else{
						echo " File Count: ".$current."\n";
					}

					$current = $folder->getFolderCount();
					if (strlen($current)==0){
						echo " Folder Count: N/A\n";
					}else{
						echo " Folder Count: ".$current."\n";
					}

					$current = $folder->getName();
					if (!empty($current)){
						echo " Name: ".$current."\n";
					}else{
						echo " Name: N/A\n";
					}
					$current = $folder->getOwnedByUser();
					if (!empty($current)){
						echo " Owned by user: ".$current."\n";
					}else{
						echo " Owned by user: N/A\n";
					}

					$current = $folder->getParentId();
					if (strlen($current)==0){
						echo " Parent Id: N/A\n";
					}else{
						echo " Parent Id: ".$current."\n";
					}
					$current = $folder->getReadable();
					if (strlen($current)==0){
						echo " Readable: N/A\n";
					}else{
						echo " Readable: ".$current."\n";
					}

					$current = $folder->getSize();
					if (strlen($current)==0){
						echo " Size: N/A\n";
					}else{
						echo " Size: ".$current."\n";
					}
					$current = $folder->getType();
					if (!empty($current)){
						echo " Type: ".$current."\n";
					}else{
						echo " Type: N/A\n";
					}
					$current = $folder->getUpdatedOn();
					if (!empty($current)){
						echo " Updated On: ".$current."\n";
					}elsE{
						echo " Updated On: N/A\n";
					}
					$current = $folder->getWritable();
					if (strlen($current)==0){
						echo " Writable: N/A\n";
					}else{
						echo " Writable: ".$current."\n";
					}

				}
			}else{
				echo "\nFolders: N/A\n";
			}
		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function getShareInfo(){
	$shareObj = new FolderShareSendAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET SHARE INFO: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		$shareObj->setAuthToken($var0);
		$responseObject = $shareObj->getShareInfo($var1);

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$members = $responseObject->getMembers();
			if (!empty($members)){
				echo "Members: \n";
				foreach($members as $member){
					echo "\nMember: \n";
					$current = $member->getStatus();
					if (!empty($current)){
						echo " Status: ".$current."\n";
					}else{
						echo " Status: N/A\n";
					}

					$current = $member->getCanInvite();
					if (strlen($current)==0){
						echo " Can Invite: N/A\n";
					}else{
						echo " Can Invite: ".$current."\n";
					}

					$current = $member->getCanRead();
					if (strlen($current)==0){
						echo " Can Read: N/A\n";
					}else{
						echo " Can Read: ".$current."\n";
					}

					$current = $member->getCanWrite();
					if (strlen($current)==0){
						echo " Can Write: N/A\n";
					}else{
						echo " Can Write: ".$current."\n";
					}

					$current = $member->getEmail();
					if (strlen($current)==0){
						echo " Email: N/A\n";
					}else{
						echo " Email: ".$current."\n";
					}
					$current = $member->getInvitationKey();
					if (strlen($current)==0){
						echo " Invitation Key: N/A\n";
					}else{
						echo " Invitation Key: ".$current."\n";
					}

				}

			}else{
				echo "Members: N/A\n";
			}
		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function sendFile(){
	$sendObj = new FolderShareSendAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nSEND FILE: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		$sendObj->setAuthToken($var0);
		$responseObject = $sendObj->sendFile($var1,$var2);


		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}
		}
		echo "\n----------------------------------------------------------------------------------------------------\n";
	}
}

function renameFolder(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nRENAME FOLDER: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$storage->setAuthToken($var0);
		$responseObject = $storage->renameFolder($var1, $var2);

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function moveFolder(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nMOVE FOLDER: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		if (!is_numeric($var2)){
			echo "\n Error: ParentId must be a numeric value!\n";
		}else{
			$storage->setAuthToken($var0);
			$responseObject = $storage->moveFolder($var1, $var2);
			$current = $responseObject->getErrorStatus();


			if (!empty($current)){
				echo "Error Status: \n";
				echo " Error code: ".$current->getCode(). "\n";
				echo " Error message: ".$current->getMessage()."\n";
			}else{
				$current = $responseObject->getStatus();
				if (!empty($current)){
					echo " Status: ".$current."\n";
				}else{
					echo " Status: N/A\n";
				}

			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function deleteFolder(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nDELETE FOLDER: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$storage->setAuthToken($var0);
		$responseObject = $storage->deleteFolder($var1);
			
		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function renameFile(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nRENAME FILE: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		$storage->setAuthToken($var0);
		$responseObject = $storage->renameFile($var1, $var2);

		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";
}

function moveFile(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nMOVE FILE: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		if (!is_numeric($var2)){
			echo "\n Error: ParentId must be a numeric value!\n";
		}else{
			$storage->setAuthToken($var0);
			$responseObject = $storage->moveFile($var1, $var2);

			$current = $responseObject->getErrorStatus();
			if (!empty($current)){
				echo "Error Status: \n";
				echo " Error code: ".$current->getCode(). "\n";
				echo " Error message: ".$current->getMessage()."\n";
			}else{
				$current = $responseObject->getStatus();
				if (!empty($current)){
					echo " Status: ".$current."\n";
				}else{
					echo " Status: N/A\n";
				}

			}
		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function deleteFile(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nDELETE FILE: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$storage->setAuthToken($var0);
		$responseObject = $storage->deleteFile($var1);
			
		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getStatus();
			if (!empty($current)){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";


}

function getFileRevisions(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET FILE REVISIONS: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$storage->setAuthToken($var0);
		$responseObject = $storage->getFileRevisions($var1);
			
		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			echo "\nFile: \n\n";
			$current = $responseObject->getRevision();
			if (strlen($current)!==0){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}

			$current = $responseObject->getId();
			if (strlen($current)!==0){
				echo " Id: ".$current."\n";
			}else{
				echo " Id: N/A\n";
			}

			$current = $responseObject->getStatus();
			if (strlen($current)!==0){
				echo " Status: ".$current."\n";
			}else{
				echo " Status: N/A\n";
			}

			$current = $responseObject->getCreatedOn();
			if (strlen($current)!==0){
				echo " Created On: ".$current."\n";
			}else{
				echo " Created On: N/A\n";
			}

			$current = $responseObject->getName();
			if (strlen($current)!==0){
				echo " Name: ".$current."\n";
			}else{
				echo " Name: N/A\n";
			}

			$current = $responseObject->getOwnedByStorage();
			if (strlen($current)!==0){
				echo " Owned by Storage: ".$current."\n";
			}else{
				echo " Owned by Storage: N/A\n";
			}

			$current = $responseObject->getParentId();
			if (strlen($current)!==0){
				echo " Parent Id: ".$current."\n";
			}else{
				echo " Parent Id: N/A\n";
			}

			$current = $responseObject->getRevisionCount();
			if (strlen($current)!==0){
				echo " Revision Count: ".$current."\n";
			}else{
				echo " Revision Count: N/A\n";
			}

			$current = $responseObject->getSize();
			if (strlen($current)!==0){
				echo " Size: ".$current."\n";
			}else{
				echo " Size: N/A\n";
			}


			$revisions = $responseObject->getRevisions();
			$revisionSize = count($revisions);

			if ($revisionSize>0){
				echo "\nRevisions: \n";
				foreach($revisions as $revision){
					echo "\nRevision: \n";

					$current = $revision->getProtocolVersion();
					if (strlen($current)!==0){
						echo " Protocol Version: ".$current."\n";
					}else{
						echo " Protocol Version: N/A\n";
					}

					$current = $revision->getId();
					if (strlen($current)!==0){
						echo " Id: ".$current."\n";
					}else{
						echo " Id: N/A\n";
					}

					$current = $revision->getCurrent();
					if (strlen($current)!==0){
						echo " Current: ".$current."\n";
					}else{
						echo " Current: N/A\n";
					}

					$current = $revision->getDownloadUrl();
					if (strlen($current)!==0){
						echo " Download Url: ".$current."\n";
					}else{
						echo " Download Url: N/A\n";
					}


					$current = $revision->getExternalId();
					if (strlen($current)!==0){
						echo " External Id: ".$current."\n";
					}else{
						echo " External Id: N/A\n";
					}

					$current = $revision->getRevision();
					if (strlen($current)!==0){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}
					$current = $revision->getSize();
					if (strlen($current)!==0){
						echo " Size: ".$current."\n";
					}else{
						echo " Size: N/A\n";
					}
				}
			}


		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";

}

function getStorageRevisions(){
	$storage = new StorageAPIs($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET STORAGE REVISIONS: \n\n";

	if ((strlen($var0)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{

		$storage->setAuthToken($var0);
		if (strlen($var1)==0){
			$responseObject = $storage->getStorageRevisions();
		}else{
			$responseObject = $storage->getStorageRevisions($var1);
		}
			
		$current = $responseObject->getErrorStatus();
		if (!empty($current)){
			echo "Error Status: \n";
			echo " Error code: ".$current->getCode(). "\n";
			echo " Error message: ".$current->getMessage()."\n";
		}else{
			$current = $responseObject->getCurrentUsage();
			if (strlen($current)!==0){
				echo " Current Usage: ".$current."\n";
			}else{
				echo " Current Usage: N/A\n";
			}

			$current = $responseObject->getRevision();
			if (strlen($current)!==0){
				echo " Revision: ".$current."\n";
			}else{
				echo " Revision: N/A\n";
			}

			$current = $responseObject->getRevisionCount();
			if (strlen($current)!==0){
				echo " Revision Count: ".$current."\n";
			}else{
				echo " Revision Count: N/A\n";
			}

			$current = $responseObject->getStatusDisplay();
			if (strlen($current)!==0){
				echo " Status Display: ".$current."\n";
			}else{
				echo " Status Display: N/A\n";
			}

			$current = $responseObject->getStorageQuota();
			if (strlen($current)!==0){
				echo " Storage Quota: ".$current."\n";
			}else{
				echo " Storage Quota: N/A\n";
			}

			$current = $responseObject->getWorkspaceId();
			if (strlen($current)!==0){
				echo " Workspace Id: ".$current."\n";
			}else{
				echo " Workspace Id: N/A\n";
			}


			$files = $responseObject->getFiles();
			if (!empty($files)){
				echo "\nFiles: \n";
				foreach($files as $file){
					echo "\nFile: \n";

					$current = $file->getCreatedOn();
					if (strlen($current)!==0){
						echo " Created On: ".$current."\n";
					}else{
						echo " Created On: N/A\n";
					}

					$current = $file->getDeleteStatus();
					if (strlen($current)!==0){
						echo " Delete Status: ".$current."\n";
					}else{
						echo " Delete Status: N/A\n";
					}

					$current = $file->getFileId();
					if (strlen($current)!==0){
						echo " File Id: ".$current."\n";
					}else{
						echo " File Id: N/A\n";
					}

					$current = $file->getFileName();
					if (strlen($current)!==0){
						echo " File Name: ".$current."\n";
					}else{
						echo " File Name: N/A\n";
					}

					$current = $file->getFolderId();
					if (strlen($current)!==0){
						echo " Folder Id: ".$current."\n";
					}else{
						echo " Folder Id: N/A\n";
					}

					$current = $file->getLastUpdatedOn();
					if (strlen($current)!==0){
						echo " Last updated on: ".$current."\n";
					}else{
						echo " Last updated on: N/A\n";
					}

					$current = $file->getRevision();
					if (strlen($current)!==0){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}

				}
			}

			$folders = $responseObject->getFolders();
			if (!empty($folders)){
				echo "\nFolders: \n";
				foreach($folders as $folder){
					echo "\nFolder: \n";

					$current = $folder->getCreatedOn();
					if (strlen($current)!==0){
						echo " Created On: ".$current."\n";
					}else{
						echo " Created On: N/A\n";
					}


					$current = $folder->getDeletedStatus();
					if (strlen($current)!==0){
						echo " Deleted Status: ".$current."\n";
					}else{
						echo " Deleted Status: N/A\n";
					}

					$current = $folder->getFolderId();
					if (strlen($current)!==0){
						echo " Folder Id: ".$current."\n";
					}else{
						echo " Folder Id: N/A\n";
					}


					$current = $folder->getFolderType();
					if (strlen($current)!==0){
						echo " Folder Type: ".$current."\n";
					}else{
						echo " Folder Type: N/A\n";
					}

					$current = $folder->getLastUpdatedOn();
					if (strlen($current)!==0){
						echo " Last updated on: ".$current."\n";
					}else{
						echo " Last updated on: N/A\n";
					}

					$current = $folder->getRevision();
					if (strlen($current)!==0){
						echo " Revision: ".$current."\n";
					}else{
						echo " Revision: N/A\n";
					}

					$current = $folder->getShareInvitationPending();
					if (strlen($current)!==0){
						echo " Share Invitation Pending: ".$current."\n";
					}else{
						echo " Share Invitation Pending: N/A\n";
					}

					$current = $folder->getSize();
					if (strlen($current)!==0){
						echo " Size: ".$current."\n";
					}else{
						echo " Size: N/A\n";
					}

					$permissions = $folder->getPermissions();
					if (!empty($permissions)){
						echo "Folder Permissions: \n";
						foreach($permissions as $permission){
							echo "Permission: \n";
							$current = $permission->getWsPermissionName();
							if (strlen($current)!==0){
								echo " Permission Name: ".$current."\n";
							}else{
								echo " Permission Name: N/A\n";
							}
						}
					}

				}
			}


		}
	}
	echo "\n----------------------------------------------------------------------------------------------------\n";

}
?>