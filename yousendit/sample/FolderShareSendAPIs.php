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

require_once('/home/automark/public_html/customer/yousendit/sample/include/RestTransport.php');
require_once('/home/automark/public_html/customer/yousendit/sample/include/ResponseEntities.php');


class FolderShareSendAPIs{
	const HTTP_POST = 'POST';
	const HTTP_GET = 'GET';
	const HTTP_PUT = 'PUT';
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

	public function __construct($hostname, $apikey,$transport){
		$this->hostName = $hostname;
		$this->apiKey = $apikey;
		$this->restTransportInstance = $transport;
	}

	/**
	 * Share folder with other users
	 *
	 * @param folderId - required -
	 * 		Id of the folder to be shared.
	 * @param email - required -
	 * 		Comma separated email addresses
	 * 		of the users to share folders with.
	 * @param message - optional -
	 *      The message that will go in the invitation email.
	 *      Optional parameter. Default: empty message.
	 * @param permission - optional -
	 *      If set to read, the user cannot update the content of the folder.
	 *      If set to true, the user can update the content of the folder.
	 *      Optional parameter. Default: 'read'.
	 * @return The Share object containing the status of the operation.
	 */
	public function shareFolder($folderId, $email, $message='',$permission=''){
		$parameters = array('email' => $email);
		if ($message!==''){
			$parameters['Message'] = $message;
		}
		if ($permission!==''){
			$parameters['permission'] = $permission;
		}
		$urld = 'dpi/v1/folder/'.$folderId.'/share';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Share();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setStatus((string) $responseBody->status);
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
	 * Get Share Info - get the share info of a folder
	 *
	 * @param folderId - required -
	 * 		Id of the folder.
	 * @return The Share object containing the share folder info or the error status of the operation.
	 */
	public function getShareInfo($folderId){
		$urld = 'dpi/v1/folder/'.$folderId.'/share';
		$parameters = array();
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Share();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				if ($responseBody->count()>0){
					$members = array();
					foreach ($responseBody->children() as $child){
						$member = new Member();
						$member->setStatus((string) $child->status);
						$member->setCanInvite((string) $child->canInvite);
						$member->setCanRead((string) $child->canRead);
						$member->setCanWrite((string) $child->canWrite);
						$member->setEmail((string) $child->email);
						$member->setInvitationKey((string) $child->invitationKey);
						array_push($members, $member);
					}
					$returnObject->setMembers($members);
				}
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
	 * Unshare Folder
	 *
	 * @param folderId - required -
	 * 		Id of the folder.
	 * @param email - required -
	 * 		The email address that needs to be removed from the share
	 * @return The Delete object containing the status of the operation.
	 */
	public function unshareFolder($folderId,$email){
		$parameters = array('email' => $email);
		$urld = 'dpi/v1/folder/'.$folderId.'/unshare';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_PUT, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Delete();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setStatus((string) $responseBody->status);
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
	 * Send a file from the folder
	 *
	 * @param fileId - required -
	 * 		Id of the file to be sent.
	 * @param recipients - required -
	 * 		Comma separated email addresses
	 * 		of the users to whom the file link will be sent.
	 * @return The File object containing the status of the operation.
	 */
	public function sendFile($fileId,$recipients){
                echo "Send File: \n";
		$parameters = array('recipients' => $recipients);
		$urld = 'dpi/v1/folder/file/'.$fileId.'/send';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST, $this->authToken);
                exit;
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new File();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setStatus((string) $responseBody->status);
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