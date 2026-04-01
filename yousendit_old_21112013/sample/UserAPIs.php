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

require_once('/home/automark/public_html/MM/customer/yousendit/sample/include/RestTransport.php');
require_once('/home/automark/public_html/MM/customer/yousendit/sample/include/ResponseEntities.php');


class UserAPIs{
	const HTTP_POST = 'POST';
	const HTTP_GET = 'GET';
	private $apiKey;
	private $hostName;
	private $restTransportInstance;
	private $authToken;
	private $response;

	public function getResponse(){
		return $this->response;
	}

	public function getAuthToken(){
		return $this->authToken;
	}

	public function setAuthToken($authToken){
		return $this->authToken = $authToken;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function __construct($hostname,$apikey,$transport){
		$this->hostName = $hostname;
		$this->apiKey = $apikey;
		$this->restTransportInstance = $transport;
	}

	/**
	 * Creates new user
	 *
	 * @param email - required -
	 *           The email address of the new user.
	 *           Maximum 128 characters are allowed in the email address.
	 * @param password - required -
	 *           The password for the new user.
	 *           Minimum 5 characters are required for the password.
	 * @param firstName - optional -
	 *            The first name of the user.
	 *            Maximum 128 characters are allowed in the first name.
	 * @param lastName - optional -
	 *            The last name of the user.
	 *            Maximum 128 characters are allowed in the last name.
	 * @return The User object. If the operation was successful, the object contains the status, if not, the object
	 * 			contains the error code and message.
	 */
	public function createUser($email,$password,$firstName='',$lastName=''){
		$parameters = array('email' => $email, 'password'=>$password);
		if ($firstName!==''){
			$parameters['firstname'] = $firstName;
		}
		if ($lastName!==''){
			$parameters['lastname'] = $lastName;
		}
		$urld = 'dpi/v1/user';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new User();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$status = (string) $responseBody->status;
				$returnObject->setStatus($status);
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
	 * Gets User Info
	 *
	 * @param email - required -
	 *            The email address of the user for which information is requested.
	 * @return The User object. If the operation was successful, the object contains the user info, if not, the object
	 * 			contains the error code and message.
	 */
	public function getUserInfo($email){
		$parameters = array('email' => $email);
		$urld = 'dpi/v2/user';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new User();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setEmail((string) $responseBody->email);
				$returnObject->setFirstName((string) $responseBody->firstname);
				$returnObject->setLastName((string) $responseBody->lastname);
				$returnObject->setType((string) $responseBody->type);
				$returnObject->setVersion((string) $responseBody->version);
				$account = new Account((string) $responseBody->account->maxFileSize, (string) $responseBody->account->maxFileDownloads,
						(string) $responseBody->account->verifyRecipientIdentity, (string) $responseBody->account->maxDownloadBWpermonth,
						(string) $responseBody->account->availableStorage, (string) $responseBody->account->knowledgeBase,
						(string) $responseBody->account->returnReceipt,
						(string) $responseBody->account->passwordProtect, (string) $responseBody->account->controlExpirationDate);
				$returnObject->setAccount($account);
				$storage = new Storage((string) $responseBody->storage->attributes()->revision, (string) $responseBody->storage->attributes()->id,
						(string) $responseBody->storage->currentUsage, (string) $responseBody->storage->storageQuota);
				$returnObject->setStorage($storage);
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
	 * Gets policy info (for an enterprise user)
	 *
	 * @return The Policy object. If the operation was successful, the object contains the status, if not, the object
	 * 			contains the error code and message.
	 */
	public function getPolicyInfo(){
		$urld = 'dpi/v1/policy';
		$parameters = array();
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Policy();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setFileExpiration((string) $responseBody->fileExpiration);
				$returnObject->setFileExpirationOverwrite((string) $responseBody->fileExpirationOverwrite);
				$returnObject->setPasswordProtect((string) $responseBody->passwordProtect);
				$returnObject->setPasswordProtectOverwrite((string) $responseBody->passwordProtectOverwrite);
				$returnObject->setReturnReceipt((string) $responseBody->returnReceipt);
				$returnObject->setReturnReceiptOverwrite((string) $responseBody->returnReceiptOverwrite);
				$returnObject->setVri((string) $responseBody->vri);
				$returnObject->setVriOverwrite((string) $responseBody->vriOverwrite);
				$returnObject->setVriShare((string) $responseBody->vriShare);
				$returnObject->setVriOverwriteShare((string) $responseBody->vriOverwriteShare);
				$blackList = (string) $responseBody->blackListedDomains;
				$returnObject->setBlackListedDomains(explode(",",$blackList));
				$whiteList = (string) $responseBody->whiteListedDomains;
				$returnObject->setWhiteListedDomains(explode(",",$whiteList));
				$blackListShare = (string) $responseBody->blackListedDomainsShare;
				$returnObject->setBlackListedDomainsShare(explode(",",$blackListShare));
				$whiteListShare = (string) $responseBody->whiteListedDomainsShare;
				$returnObject->setWhiteListedDomainsShare(explode(",",$whiteListShare));
			}else{
				$errorCode = (string) $responseBody->errorStatus->code;
				$errorMessage = (string) $responseBody->errorStatus->message;
				$errorObject = new ErrorStatus($errorCode, $errorMessage);
				$returnObject->setErrorStatus($errorObject);
			}
		}
		return $returnObject;
	}
}
?>