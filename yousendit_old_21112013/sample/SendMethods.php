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

require_once('./SendReceive.php');
require_once('./FileTransfer.php');
require_once('/home/automark/public_html/MM/customer/yousendit/sample/include/ResponseEntities.php');

session_start();

if ((empty($_SESSION['sHost'])) || (empty($_SESSION['sApp']))) {

	header('Location: ./SampleApp.php');
}else if (empty($_SESSION['sEmail']) || (empty($_SESSION['sPass']))){
	header('Location: ./SampleApp.php');
}


function getItemCount(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nGET ITEMS COUNT: \n\n";

	if ((strlen($var0)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}

	else {
		$sr->setAuthToken($var0);
		$responseObject = $sr->getItemsCount($var1,$var2);

		$aux = $responseObject->getErrorStatus();
		if (!empty($aux)){
			echo "Error Status: \n";
			echo " Error code: ".$aux->getCode(). "\n";
			echo " Error message: ".$aux->getMessage()."\n";
		}else{
			$aux = $responseObject->getItemCount();
			if (strlen($aux)!=0){
				echo " The Items Count value is: ".$aux."\n";
			}else{
				echo " Items Count: N/A\n";
			}
		}
	}
};

function deleteItem(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nDELETE ITEM: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		$sr->setAuthToken($var0);
		$responseObject = $sr->deleteItem($var1);

		$aux = $responseObject->getErrorStatus();
		if (!empty($aux)){
			echo "Error Status: \n";
			echo " Error code: ".$aux->getCode(). "\n";
			echo " Error message: ".$aux->getMessage()."\n";
		}else{
			$aux = $responseObject->getStatus();
			if (!empty($aux)){
				echo " The delete status is: ".$aux."\n";
			}else{
				" The delete status is: N/A\n";
			}
		}
	}
};

function getItemsList(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");
	$var3 = trim($_POST['var3']," ");
	$var4 = trim($_POST['var4']," ");
	$var5 = trim($_POST['var5']," ");
	$var6 = trim($_POST['var6']," ");

	echo "\nITEMS LIST: \n\n";
	if ((strlen($var0)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else {
		$sr->setAuthToken($var0);
		$responseObject = $sr->getItemsList($var1,$var2,$var3,$var4,$var5,$var6);

		$aux = $responseObject->getErrorStatus();
		if (!empty($aux)){
			echo "Error Status: \n";
			echo " Error code: ".$aux->getCode(). "\n";
			echo " Error message: ".$aux->getMessage()."\n";
		}else{
			$ar = $responseObject->getItems();
			foreach ($ar as $aux){
				echo "\nThe Item attributes: \n";
				$el = $aux->getCreate();
				if (!empty($el)){
					echo " Create: ".$el."\n";
				}else{
					echo " Create: N/A\n";
				}
				$el = $aux->getExpiration();
				if (!empty($el)){
					echo " Expiration: ".$el."\n";
				}else{
					echo " Expiration: N/A\n";
				}
				$el = $aux->getId();
				if (strlen($el)!=0){
					echo " Item ID: ".$el."\n";
				}else{
					echo " Item ID: N/A\n";
				}
				$el = $aux->getSubject();
				if (!empty($el)){
					echo " Subject: ".$el."\n";
				}else{
					echo " Subject: N/A\n";
				}
				$el = $aux->getMessage();
				if (!empty($el)){
					echo " Message: ".$el."\n";
				}else{
					echo " Message: N/A\n";
				}
				$el = $aux->getRecipients();
				$el = implode(",",$el);
				if (!empty($el)){
					echo " Recipients: ".$el;
				}else{
					echo " Recipients: N/A\n";
				}

				$files = $aux->getFiles();

				if (empty($files[0])){
					echo "\nFiles: N/A\n";
				}else{
					echo "\nFiles:\n";
					foreach($files as $file){
						echo "\nThe File attributes: \n";
						$el = $file->getDownloadUrl();
						if (!empty($el)){
							echo " DownloadUrl: ".$el."\n";
						}else{
							echo " DownloadUrl: N/A\n";
						}
						$el = $file->getDownloads();
						if (strlen($el)==0){
							echo " Downloads: N/A\n";
						}else{
							echo " Downloads: ".$el."\n";
						}
						$el = $file->getId();
						if (!empty($el)){
							echo " File ID: ".$el."\n";
						}else{
							echo " File ID: N/A\n";
						}
						$el = $file->getName();
						if (!empty($el)){
							echo " File Name: ".$el."\n";
						}else{
							echo " File Name: N/A\n";
						}
						$el = $file->getSize();
						if (!empty($el)){
							echo " File Size: ".$el."\n";
						}else{
							echo " File Size: N/A\n";
						}
						$el = $file->getPasswordProtect();
						if (strlen($el)==0){
							echo " Password Protect: N/A\n";
						}else{
							echo " Password Protect: ".$el."\n";
						}
						$el = $file->getReturnReceipt();
						if (strlen($el)==0){
							echo " Return Receipt: N/A\n";
						}else{
							echo " Return Receipt: ".$el."\n";
						}
						$el = $file->getVerifyIdentity();
						if (strlen($el)==0){
							echo " Verify Identity: N/A\n";
						}else{
							echo " Verify Identity: ".$el."\n";
						}

						$tracking = $file->getTracking();
					
						if (empty($tracking[0])){
							echo " Tracking: N/A\n";
						}else{
							echo " Tracking:\n";
							foreach($tracking as $track){
								$email = $track->getEmail();
								if(!empty($email)){
									echo " Email: ".$email."\n";
								}else{
									echo " Email: N/A\n";
								}
								$when = $track->getWhen();
								if(!empty($when)){
									echo " When: ".$when."\n";
								}else{
									echo " When: N/A\n";
								}
							}
						}

					}
				}

			}
		}
	}
};

function getItemInfo(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");

	echo "\nGET ITEM INFO: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else {
		$sr->setAuthToken($var0);
		$responseObject = $sr->getItemInfo($var1);

		$aux = $responseObject->getErrorStatus();
		if (!empty($aux)){
			echo "Error Status: \n";
			echo " Error code: ".$aux->getCode(). "\n";
			echo " Error message: ".$aux->getMessage()."\n";
		}else{
			echo "\nThe Item attributes: \n";
			$el = $responseObject->getCreate();
			if (!empty($el)){
				echo " Create: ".$el."\n";
			}else{
				echo " Create: N/A\n";
			}
			$el = $responseObject->getExpiration();
			if (!empty($el)){
				echo " Expiration: ".$el."\n";
			}else{
				echo " Expiration: N/A\n";
			}
			$el = $responseObject->getId();
			if (strlen($el)!=0){
				echo " Item ID: ".$el."\n";
			}else{
				echo " Item ID: N/A\n";
			}
			$el = $responseObject->getSubject();
			if (!empty($el)){
				echo " Subject: ".$el."\n";
			}else{
				echo " Subject: N/A\n";
			}
			$el = $responseObject->getMessage();
			if (!empty($el)){
				echo " Message: ".$el."\n";
			}else{
				echo " Message: N/A\n";
			}
			$el = $responseObject->getRecipients();
			$el = implode(",",$el);
			if (!empty($el)){
				echo " Recipients: ".$el."\n";
			}else{
				echo " Recipients: N/A\n";
			}

			$files = $responseObject->getFiles();

			if (empty($files[0])){
				echo "\nFiles: N/A\n";
			}else{
				echo "\nFiles:\n";
				foreach($files as $file){
					echo "\nThe File attributes: \n";
					$el = $file->getDownloadUrl();
					if (!empty($el)){
						echo " DownloadUrl: ".$el."\n";
					}else{
						echo " DownloadUrl: N/A\n";
					}
					$el = $file->getDownloads();
					if (strlen($el)==0){
						echo " Downloads: N/A\n";
					}else{
						echo " Downloads: ".$el."\n";
					}
					$el = $file->getId();
					if (!empty($el)){
						echo " File ID: ".$el."\n";
					}else{
						echo " File ID: N/A\n";
					}
					$el = $file->getName();
					if (!empty($el)){
						echo " File Name: ".$el."\n";
					}else{
						echo " File Name: N/A\n";
					}
					$el = $file->getSize();
					if (!empty($el)){
						echo " File Size: ".$el."\n";
					}else{
						echo " File Size: N/A\n";
					}
					$el = $file->getPasswordProtect();
					if (strlen($el)==0){
						echo " Password Protect: N/A\n";
					}else{
						echo " Password Protect: ".$el."\n";
					}
					$el = $file->getReturnReceipt();
					if (strlen($el)==0){
						echo " Return Receipt: N/A\n";
					}else{
						echo " Return Receipt: ".$el."\n";
					}
					$el = $file->getVerifyIdentity();
					if (strlen($el)==0){
						echo " Verify Identity: N/A\n";
					}else{
						echo " Verify Identity: ".$el."\n";
					}

					$tracking = $file->getTracking();
					if (empty($tracking[0])){
						echo " Tracking: N/A\n";
					}else{
						echo " Tracking:\n";
						foreach($tracking as $track){
							$email = $track->getEmail();
							if(!empty($email)){
								echo " Email: ".$email."\n";
							}else{
								echo " Email: N/A\n";
							}
							$when = $track->getWhen();
							if(!empty($when)){
								echo " When: ".$when."\n";
							}else{
								echo " When: N/A\n";
							}
						}
					}

				}
			}


		}
	}
};

function changeExpiration(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);

	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");

	echo "\nCHANGE ITEM EXPIRATION: \n\n";

	if ((strlen($var0)==0)||(strlen($var1)==0)||(strlen($var2)==0)){
		echo "\n Error: Empty mandatory field(s)!\n";
	}else{
		if 	(!is_numeric($var2)){
			echo "\n Error: Expiration must be a numeric value!\n";
		}else{
			$sr->setAuthToken($var0);


			$responseObject = $sr->changeExpiration($var1,$var2);

			$aux = $responseObject->getErrorStatus();
			if (!empty($aux)){
				echo "Error Status: \n";
				echo " Error code: ".$aux->getCode(). "\n";
				echo " Error message: ".$aux->getMessage()."\n";
			}else{
				$aux = $responseObject->getStatus();
				if (!empty($aux)){
					echo " The expiration status is: ".$aux."\n";
				}else{
					echo " The expiration status is: N/A\n";
				}
			}
		}

	}
};

function downloadaFile(){
	$ft = new FileTransfer($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sUserAgent']);
	$var0 = trim($_POST['token']," ");
	$ft->setAuthToken($var0);
	$var1 = trim($_POST['durl']," ");
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
		header("Location: ./dwn1.php?err=3");
	}
};

function prepareSend(){
	if ((strlen($_POST['token'])==0) || (strlen($_POST['recipients'])==0) || ((strlen($_POST['fileCount'])!==0)&&(!is_numeric($_POST['fileCount'])))){
		$t=array('error'=>'Invalid numeric values or empty mandatory fields.');
	}
	else{
		$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
		$sr->setAuthToken($_POST['token']);
		if (isset($_POST['verifyid'])){
			$v1 = 'TRUE';
		}
		else {$v1 = 'FALSE';
		}
		if (isset($_POST['returnreceipt'])){
			$v2 = 'TRUE';
		}
		else {$v2 = '';
		}
		$responseObject = $sr->getUploadURLs($_POST['recipients'],$_POST['fileCount'],$_POST['subject'],$_POST['message'],$v1,$v2,$_POST['psw']);
		$aux = $responseObject->getErrorStatus();
		if (!empty($aux)){
			$t=array('errorcode'=>$aux->getCode(),'errormessage'=>$aux->getMessage());
		}else{
			$aux = $responseObject->getItemId();
			$t=array('itemid'=>$aux);
			$auxa = $responseObject->getUploadUrl();
			$i = 0;
			foreach ($auxa as $el){
				$i += 1;
				$a[] = $el;
			}
			$t['URLs'] = $a;
		}
	}
	$t['met']='PREPARE SEND';
	echo json_encode($t);
};

function commitsend(){
	$sr = new SendReceive($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
	$var0 = trim($_POST['var0']," ");
	$var1 = trim($_POST['var1']," ");
	$var2 = trim($_POST['var2']," ");
	$var3 = trim($_POST['var3']," ");
	echo "\nCOMMIT SEND: \n\n";

	if (strlen($var0)==0){
		echo "\n Error: Empty Authentication Token field!\n";
	}else{
		$sr->setAuthToken($_POST['var0']);
		if (isset($var1)){
			$v3 = 'TRUE';
		}
		else {$v3 = 'FALSE';
		}
		$responseObject=$sr->commitSend($var3,$v3,$var2);
		$err = $responseObject->getErrorStatus();
		if (!empty($err)){
			echo "Error Status: \n";
			echo " Error code: ".$err->getCode(). "\n";
			echo " Error message: ".$err->getMessage()."\n";
		}else{
			$aux = $responseObject->getDownloadUrl();
			if (!empty($aux)){
				echo " The download URL is: ".$aux."\n";
			}
		}
	}
};



$method = $_POST['method'];

switch ($method){
	case 'preparesend':{
		prepareSend();
		break;
	}

	case 'commitsend':{
		commitSend();
		echo "\n----------------------------------------------------------------------------------------------------\n";
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
		else {header("Location: ./dwn1.php?err=$err");
		}
		break;
	}

	case 'getitemcount':{
		getItemCount();
		echo "\n----------------------------------------------------------------------------------------------------\n";
		break;
	}
	case 'getitemlist':{
		getItemsList();
		echo "\n----------------------------------------------------------------------------------------------------\n";
		break;
	}
	case 'getiteminfo':{
		getItemInfo();
		echo "\n----------------------------------------------------------------------------------------------------\n";
		break;
	}
	case 'changeexpiration':{
		changeExpiration();
		echo "\n----------------------------------------------------------------------------------------------------\n";
		break;
	}
	case 'deleteitem':{
		deleteItem();
		echo "\n----------------------------------------------------------------------------------------------------\n";
		break;
	}
}
?>