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

$page_title = 'YouSendIt Sample App for PHP';
require_once('Authentication.php');
require_once('./include/RestTransport.php');
require_once('./include/ResponseEntities.php');
include_once('./header.html');
if(!isset($_SESSION))
	session_start();


if (isset($_POST['submitted'])) {
	$apikey = trim($_POST['apikey']," ");
	$_SESSION['sApp'] = $apikey;

	$host = $_POST['endpoint'];
	$_SESSION['sHost'] = $host;
	$_SESSION['sUserAgent'] = $_POST['useragent'];

	$restTransportInstance = new RestTransport($host,$apikey);
	$_SESSION['sTr'] = $restTransportInstance;

	$email = trim($_POST['email']," ");
	$password = trim($_POST['password']," ");
	$auth = new Authentication($_SESSION['sHost'],$_SESSION['sApp'],$_SESSION['sTr']);
	$responseObject = $auth->login($email,$password);

	$errorStatus = $responseObject->getErrorStatus();
	$token = $responseObject->getAuthToken();

	if (!empty($errorStatus)){
		echo '<font color="red">' ."Error: ".$errorStatus->getMessage() . '</font><br>';
	}else if (empty($token)){
		echo '<font color="red">' ."Error: invalid apikey or hostname!".'</font><br>';
	}else{

		$_SESSION['sEmail'] = $email;
		$_SESSION['sPass'] = $password;
		$_SESSION['sToken'] = $responseObject->getAuthToken();

		header('Location: ./Actions.php');
	}

}
include_once('ShowSettings.inc.php');
include_once('./footer.html');
?>