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

require_once('./include/ResponseEntities.php');
require_once('./include/UploadDownload.php');

class FileTransfer{

	private $_apiKey;
	private $_hostName;
	private $_authToken;
	private $_userAgent;

	public function getAuthToken(){
		return $this->_authToken;
	}
	
	public function setAuthToken($authToken){
		return $this->_authToken = $authToken;
	}

	public function __construct($hostName,$apiKey,$ua){
		$this->_hostName = $hostName;
		$this->_apiKey = $apiKey;
		$this->_userAgent = $ua;
	}

	/**
	 * Upload a File
	 *
	 * @param upurl - required -
	 *          The upload URL.
	 * @param bid - required -
	 *          The item Id returned in the same call with the upload URL.
	 * @param fname - required -
	 * 	  		The name of the file to be uploaded. (path+fileName+fileExtension).
	 * @return The YsiResponse object containing the upload status.
	 * 	 */
	public function uploadaFile($upurl,$bid,$fname){
		$a = new UploadFile($upurl,$bid,$fname);
		$response = $a->sendRequest();
		$response=str_replace("upload-status","uploadstatus",$response);
		$responseBody = simplexml_load_string($response);
		$returnObject = new YsiResponse();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
				$ufid = (string) $responseBody->ufid;
				$returnObject->setUfid($ufid);
				$uploadStatus = (string) $responseBody->uploadstatus;
				$returnObject->setUploadStatus($uploadStatus);
			}else{
				$errorCode = (string) $responseBody->errorStatus->code;
				$errorMessage = (string) $responseBody->errorStatus->message;
				$errorObject = new ErrorStatus($errorCode, $errorMessage);
				$returnObject->setErrorStatus($errorObject);
			}
		}
		return $returnObject;
	}

	/**
	 * Download a File
	 *
	 * @param urld - required -
	 *          The download URL.
	 * @param dir - required -
	 *          The download folder (path+folderName).
	 * @param password - optional -
	 * 	  If a password has been set, the recipients are asked to enter the password before they can access the files. The minimum length of the password is 5 characters.
	 * @return The status "fail" if the download has failed or the downloaded file name if the download has succeeded.
	 * 	 */
	public function downloadaFile($urld,$dir,$password=''){
		$parameters = array();
		if ($password!==''){
			$parameters['password'] = $password;
		}
		$a = new DownloadFile($this->_hostName,$this->_apiKey,$this->_userAgent);
		$response = $a->sendRequest($urld,$parameters,$this->_authToken);
		if ($response !== 'fail'){
			list($header, $h1, $body) = explode("\r\n\r\n", $response);
			$s = strpos($header, "&file=")+6;
			$e = strpos($header, "Server:")-2;
			$d = $e-$s;
			$fname = substr($header, $s, $d);
			$fname = urldecode($fname);
			$f = $dir.$fname;
			file_put_contents($f,$body);
			return $fname;
		}else return 'fail';
	}

	/**
	 * Download a File Without Saving
	 *
	 * @param urld - required -
	 *          The download URL.
	 * @param password - optional -
	 * 	  If a password has been set, the recipients are asked to enter the password before they can access the files. The minimum length of the password is 5 characters.
	 * @return The status "fail" if the download has failed or the actual download URL if the download has succeeded.
	 * 	 */
	public function downloadaFileWS($urld,$password=''){
		$parameters = array();
		if ($password!==''){
			$parameters['password'] = $password;
		}
		$a = new DownloadFile($this->_hostName,$this->_apiKey,$this->_userAgent);
		$response = $a->sendRequestWS($urld,$parameters,$this->_authToken);
		if ($response !== 'fail'){
			$s = strpos($response, "Location: ")+10;
			$e = strpos($response, "Server:")-2;
			$d = $e-$s;
			$url = substr($response, $s, $d);
			return $url;
		}else return 'fail';
	}

	/**
	 * Resume the Download of a File
	 *
	 * @param urld - required -
	 *          The download URL.
	 * @param dir - required -
	 *          The download folder (path+folderName).
	 * @param password - optional -
	 * 	  If a password has been set, the recipients are asked to enter the password before they can access the files. The minimum length of the password is 5 characters.
	 * @param range - optional -
	 * 	  Only the specified range of bytes is downloaded and appended to the existing file if a range has been set. If no range has been set the entire file is downloaded and saved inside the download directory (the value from $dir).
	 * @return The status "fail" if the download has failed or the downloaded file name if the download has succeeded.
	 * 	 */
	public function downloadaFileResume($urld,$dir,$password='',$range=''){
		$parameters = array();
		if ($password!==''){
			$parameters['password'] = $password;
		}
		$a = new DownloadFile($this->_hostName,$this->_apiKey,$this->_userAgent);
		$response = $a->sendRequestWS($urld,$parameters,$this->_authToken);
		if ($response !== 'fail'){
			$s = strpos($response, "Location: ")+10;
			$e = strpos($response, "Server:")-2;
			$d = $e-$s;
			$url = substr($response, $s, $d);
			$response = $a->sendRequestResume($url,$this->_authToken,$range);
			if ($response !== 'fail'){
				$s = strpos($url, "&file=")+6;
				$e = strlen($url);
				$d = $e-$s;
				$fname = substr($url, $s, $d);
				$f = $dir.$fname;
				if (($range[0]=='0')||($range='')){
					file_put_contents($f,$response);
				}else{
					$fh = fopen($f, 'a');
					fwrite($fh, $response);
					fclose($fh);
				}
				return $fname;
			}else return 'fail';
		}else return 'fail';
	}
}
?>