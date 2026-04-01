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
require_once('./StorageAPIs.php');


class SendReceive{

	private $_apiKey;
	private $_hostName;
	private $_restTransportInstance;
	private $_authToken;
	private $response;

	public function getResponse(){
		return $this->response;
	}

	public function getAuthToken(){
		return $this->_authToken;
	}

	public function setAuthToken($authToken){
		return $this->_authToken = $authToken;
	}

	public function __construct($hostName,$apiKey,$transport){
		$this->_hostName = $hostName;
		$this->_apiKey = $apiKey;
		$this->_restTransportInstance = $transport;
	}

	/**
	 * Get Upload Urls
	 *
	 * @param recipients - required -
	 *          Comma separated email addresses of the recipients.
	 *          Maximum 300 email addresses can be provided.
	 *          The maximum length of an email address is 128 characters.
	 * @param filecount - optional -
	 *          The number of files to be sent. Maximum 20 files can be sent at a time.
	 * @param subject - optional -
	 * 			The subject for the email notification. Maximum 200 characters are allowed in the subject.
	 * @param message - optional -
	 * 			The message for the email body.
	 * 			Maximum 2000 characters are allowed in the message.
	 * @param verifyIdentity - optional -
	 * 			If true, the recipients are required to login to access the files.
	 * @param returnReceipt - optional -
	 * 			If true, an email notification is sent to the sender, when someone downloads the file.
	 * @param password - optional -
	 * 			If set, the recipients are asked to enter the password before they can access the files. The minimum length of the password is 5 characters.
	 * @return 	An Upload object with upload URLs or the error code and message thrown by the server.
	 * 	 */
	public function getUploadURLs($recipients,$filecount='',$subject='',$message='',$verifyIdentity='',$returnReceipt='',$password=''){
		$parameters = array('recipients' => $recipients);
		if ($filecount!==''){
			$parameters['fileCount'] = $filecount;
		}
		if ($subject!==''){
			$parameters['subject'] = $subject;
		}
		if ($message!==''){
			$parameters['message'] = $message;
		}
		if ($verifyIdentity!==''){
			$parameters['verifyIdentity'] = $verifyIdentity;
		}
		if ($returnReceipt!==''){
			$parameters['returnReceipt'] = $returnReceipt;
		}
		if ($password!==''){
			$parameters['password'] = $password;
		}
		$urld = 'dpi/v1/item/send';
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'POST',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);

		$returnObject = new Send();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
				$itemId = (string) $responseBody->itemId;
				$returnObject->setItemId($itemId);
				$urls = array();
				foreach ($responseBody->uploadUrl as $child){
					$urls[] = (string) $child;
				}
				$returnObject->setUploadUrl($urls);
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
	 * Commit item send
	 *
	 * @param itemId - required -
	 *          The item id.
	 * @param sendEmailNotifications - optional -
	 *          If true, an email notification is sent to the sender and the recipients.
	 *          If false, no email is sent.
	 * @param expiration - optional -
	 * 			The expiration duration in minutes.
	 * 			A value of 0 indicates that the item never expires.
	 * @return The Commit object containing the download URL (link to the download page)
	 * or the error code and message returned by the server.
	 * 	 */
	public function commitSend($itemId,$sendEmailNotifications='',$expiration=''){
		$parameters = array();
		$urld = 'dpi/v1/item/commit/'.$itemId;
		if ($expiration!==''){
			$parameters['expiration'] = $expiration;
		}
		if ($sendEmailNotifications!==''){
			$parameters['sendEmailNotifications'] = $sendEmailNotifications;
		}
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'POST',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Commit();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
				$downloadUrl = (string) $responseBody->downloadUrl;
				$returnObject->setDownloadUrl($downloadUrl);
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
	 * Get upload status
	 *
	 * @param uploadurl - required -
	 * 			The upload url.
	 * @return The Status object containing the number of bytes uploaded successfully
	 * or the error code and message thrown by the server.
	 * 	 */
	public function getUploadStatus($uploadurl){
		$parameters = array('uploadUrl' => $uploadurl);
		$urld = 'dpi/v1/item/status';
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'GET',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Status();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
				$bytesReceived = (string) $responseBody->bytesReceived;
				$returnObject->setBytesReceived($bytesReceived);
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
	 * Get List of Items
	 *
	 * @param sentItems - optional -
	 *         If true, the API returns the number of items in user's Sent Items only
	 *         otherwise it returns the number of the items in user's Inbox and Sent Items.
	 * @param filter - optional -
	 * 			all: return all items
	 *			expired: returns all expired items
	 *			unexpired: returns only unexpired items
	 * @param includeFileInfo - optional -
	 * 			If true, it returns detailed file info.
	 * @param includetracking - optional -
	 * 			If true, it returns the tracking information about the item.
	 * @param page - optional -
	 * 			The API supports pagination to return information in chunks.
	 * @param pageLength - optional -
	 * 			The number of items to return in a page. Maximum value is 100.
	 * @return A response with Items object containing 0 or more item elements. Each item element has
	 * details like itemId, expiration date, file details etc. or the error code and message
	 * returned by the server.
	 * 	 */
	public function getItemsList($sentItems='',$filter='',$includeFileInfo='',$includeTracking='',$page='',$pageLength=''){

		$parameters = array();
		if ($sentItems!==''){
			$parameters['sentItems'] = $sentItems;
		}
		if ($filter!==''){
			$parameters['filter'] = $filter;
		}
		if ($includeFileInfo!==''){
			$parameters['includeFileInfo'] = $includeFileInfo;
		}
		if ($includeTracking!==''){
			$parameters['includeTracking'] = $includeTracking;
		}
		if ($page!==''){
			$parameters['page'] = $page;
		}
		if ($pageLength!==''){
			$parameters['pageLength'] = $pageLength;
		}
		$urld = 'dpi/v1/item/list';
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'GET',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Items();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)){
				$items = array();
				foreach ($responseBody->children() as $child){
					$item = new Item();
					if ($includeFileInfo){
						$theFiles = array();
						$filesTag = $child->file;
						if (!empty($filesTag)){
							foreach ($child->file as $currentFile){
								if ($currentFile->count()>0){
									$file = new File();
									$file->setDownloadUrl((string) $currentFile->downloadUrl);
									$file->setDownloads((string) $currentFile->downloads);
									$file->setId((string) $currentFile->id);
									$file->setName((string) $currentFile->name);
									$file->setSize((string) $currentFile->size);
									$tracking = array();
									if ($includeTracking){
										$trackTag = $currentFile->tracking;
										if (!empty($trackTag)){
											foreach ($currentFile->tracking as $currentTrack){
												if ($currentTrack->count()>0){
													$track = new Tracking();
													$track->setEmail((string) $currentTrack->email);
													$track->setWhen((string) $currentTrack->when);
													array_push($tracking,$track);
												}
											}
											$file->setTracking($tracking);
										}
									}
									array_push($theFiles,$file);
								}
							}
							$item->setFiles($theFiles);
						}
					}
					$item->setCreate((string) $child->create);
					$item->setExpiration((string) $child->expiration);
					$item->setId((string) $child->id);
					$item->setSubject((string) $child->subject);
					$item->setMessage((string) $child->message);
					$recipients = (string) $child->recipients;
					$item->setRecipients(explode(",",$recipients));
					$items[] = $item;
				}
				$returnObject->setItems($items);
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
	 * Get Item Count
	 *
	 * @param sentItems - optional -
	 *         If true, the API returns the number of items in user's Sent Items
	 *         otherwise it returns the number of the items in user's Inbox and Sent Items.
	 * @param filter - optional -
	 * 			all: return all items
	 *			expired: returns all expired items
	 *			unexpired: returns only unexpired items
	 * @return The Count object containing the number of items or the error code and message
	 * returned by the server.
	 * 	 */
	public function getItemsCount($sentItems='',$filter=''){
		$parameters = array();
		$urld = 'dpi/v1/item/count';
		if ($sentItems!==''){
			$parameters['sentItems'] = $sentItems;
		}
		if ($filter!==''){
			$parameters['filter'] = $filter;
		}
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'GET',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Count();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
				$itemCount = (string) $responseBody->itemCount;
				$returnObject->setItemCount($itemCount);
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
	 * Get Item Info
	 *
	 * @param itemId - required -
	 *         Item id
	 * @return An Item object with details like itemId, expiration date, file details etc.
	 * or the error code and message returned by the server.
	 * 	 */
	public function getItemInfo($itemId){
		$parameters = array();
		$urld = 'dpi/v1/item/'.$itemId;
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'GET',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Item();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){

				$create = (string) $responseBody->create;
				$returnObject->setCreate($create);
				$expiration = (string) $responseBody->expiration;
				$returnObject->setExpiration($expiration);
				$id = (string) $responseBody->id;
				$returnObject->setId($id);
				$subject = (string) $responseBody->subject;
				$returnObject->setSubject($subject);
				$message = (string) $responseBody->message;
				$returnObject->setMessage($message);
				$recipients = (string) $responseBody->recipients;
				$returnObject->setRecipients(explode(",",$recipients));
				$theFiles = array();
				$filesTag = $responseBody->file;
				if (!empty($filesTag)){
					foreach ($responseBody->file as $currentFile){
						if ($currentFile->count()>0){
							$file = new File();
							$file->setDownloadUrl((string) $currentFile->downloadUrl);
							$file->setDownloads((string) $currentFile->downloads);
							$file->setId((string) $currentFile->id);
							$file->setName((string) $currentFile->name);
							$file->setPasswordProtect((string) $currentFile->passwordProtect);
							$file->setReturnReceipt((string) $currentFile->returnReceipt);
							$file->setSize((string) $currentFile->size);
							$file->setVerifyIdentity((string) $currentFile->verifyIdentity);
							$tracking = array();
							$trackTag = $currentFile->tracking;
							if (!empty($trackTag)){
								foreach ($currentFile->tracking as $currentTrack){
									if ($currentTrack->count()>0){
										$track = new Tracking();
										$track->setEmail((string) $currentTrack->email);
										$track->setWhen((string) $currentTrack->when);
										array_push($tracking,$track);
									}
								}
								$file->setTracking($tracking);
							}
							array_push($theFiles,$file);
						}
					}
					$returnObject->setFiles($theFiles);
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
	 * Change Item Expiration
	 *
	 * @param itemId - required -
	 *         Item Id.
	 * @param expiration - required -
	 * 			The expiration duration in minutes. A value of 0 indicates that the file never expires.
	 * @return An Expiration object with expiration date as status or the error code and message
	 * returned by the server.
	 * 	 */
	public function changeExpiration($itemId,$expiration){
		$parameters = array('expiration' => $expiration);
		$urld = 'dpi/v1/item/expiration/'.$itemId;
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'POST',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Expiration();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
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
	 * Delete item
	 *
	 * @param itemId - required -
	 *         Item id
	 * @return A Delete object with status value OK
	 * or the error code and message returned by the server.
	 * 	 */
	public function deleteItem($itemId){
		$parameters = array();
		$urld = 'dpi/v1/item/'.$itemId;
		$this->response = $this->_restTransportInstance->sendRequest($urld,$parameters,'DELETE',$this->_authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Delete();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			if (empty($responseBody->errorStatus)){
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
}
?>