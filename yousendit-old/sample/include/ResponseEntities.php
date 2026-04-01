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

/**
 * ERROR STATUS ENTITY
 */
class ErrorStatus{
	/**
	 * The error code, in case of an error
	 * @var string $code
	 */
	private $code;
	
	/**
	 * The error message, in case of an error
	 * @var string $message
	 */
	private $message;

	/**
	 * The class constructor (explicit)
	 * @param string $code
	 * @param string $message
	 */
	public function __construct($code, $message) {
		$this->code = $code;
		$this->message = $message;
	}

	/**
	 * Get the code
	 */
	public function getCode(){
		return $this->code;
	}

	/**
	 * Set the code
	 *
	 * @param string $code
	 */
	public function setCode($code){
		$this->code = $code;
	}

	/**
	 * Get the message
	 */
	public function getMessage(){
		return $this->message;
	}

	/**
	 * Set the message
	 * 
	 * @param string $message
	 */
	public function setMessage($message){
		$this->message = $message;
	}
}

/**
 * BASE CLASS FOR ERROR STATUS
 */
class Base {
	
	/**
	 * The error status which will contain a code and a message.
	 * @var object $errorStatus
	 */
	private $errorStatus;

	/**
	 * Set the errorStatus
	 *
	 * @param object $errorStatus
	 */
	public function setErrorStatus($errorStatus){
		$this->errorStatus = $errorStatus;
	}

	/**
	 * Get the errorStatus
	 */
	public function getErrorStatus(){
		return $this->errorStatus;
	}
}

/**
 * ACCOUNT ENTITY - NEEDED FOR USER ENTITY
 */
class Account{
	
	/**
	 * The maximum allowed file size.
	 * 
	 * @var string $maxFileSize
	 */
	private $maxFileSize;
	
	/**
	 * The number of maximum downloads allowed for a file.
	 * 
	 * @var string $maxFileDownloads
	 */
	private $maxFileDownloads;
	
	/**
	 * Is Verify Recipient Identity feature included in user's account?
	 * Included or Pay-per-use.
	 * 
	 * @var string $verifyRecipientIdentity
	 */
	private $verifyRecipientIdentity;
	
	
	/**
	 * The maximum download bandwidth per month after which users 
	 * will start getting error message
	 * 
	 * @var string $maxDownloadBWpermonth
	 */
	private $maxDownloadBWpermonth;
	
	/**
	 * The available storage.
	 * 
	 * @var string $availableStorage
	 */
	private $availableStorage;
	
	
	/**
	 * Access to knowledgebase? Yes or No.
	 * 
	 * @var string $knowledgeBase
	 */
	private $knowledgeBase;
	
	/**
	 * Is Return Receipt feature included in user's account? Included or Pay-per-use
	 * 
	 * @var string $returnReceipt
	 */
	private $returnReceipt;	
	
	/**
	 * Is password protection feature on files included for the user? Included or Pay-per-use
	 * 
	 * @var string $passwordProtect
	 */
	private $passwordProtect;
	
	/**
	 * Control Expiration Date
	 * 
	 * @var string $controlExpirationDate
	 */
	private $controlExpirationDate;

	/**
	 * The class constructor (explicit)
	 * 
	 * @param string $maxFileSize
	 * @param string $maxFileDownloads
	 * @param string $verifyRecipientIdentity
	 * @param string $maxDownloadBWpermonth
	 * @param string $availableStorage
	 * @param string $knowledgeBase
	 * @param string $returnReceipt
	 * @param string $passwordProtect
	 * @param string $controlExpirationDate
	 */
	public function __construct($maxFileSize, $maxFileDownloads,
			$verifyRecipientIdentity,$maxDownloadBWpermonth,
			$availableStorage, $knowledgeBase, $returnReceipt,
			$passwordProtect, $controlExpirationDate){
		$this->maxFileSize = $maxFileSize;
		$this->maxFileDownloads = $maxFileDownloads;
		$this->verifyRecipientIdentity = $verifyRecipientIdentity;
		$this->maxDownloadBWpermonth = $maxDownloadBWpermonth;
		$this->availableStorage=$availableStorage;
		$this->knowledgeBase = $knowledgeBase;
		$this->returnReceipt = $returnReceipt;
		$this->passwordProtect = $passwordProtect;
		$this->controlExpirationDate=$controlExpirationDate;
	}

	/**
	 * Get the max file size
	 */
	public function getMaxFileSize(){
		return $this->maxFileSize;
	}

	/**
	 * Set the max file size
	 * 
	 * @param string $maxFileSize
	 */
	public function setMaxFileSize($maxFileSize){
		$this->maxFileSize = $maxFileSize;
	}

	/**
	 * Get the max file downloads
	 */
	public function getMaxFileDownloads(){
		return $this->maxFileDownloads;
	}

	/**
	 * Set the max file downloads
	 * 
	 *  @param string $maxFileDownloads
	 */
	public function setMaxFileDownloads($maxFileDownloads){
		$this->maxFileDownloads = $maxFileDownloads;
	}

	/**
	 * Get the verify recipient identity 
	 */
	public function getVerifyRecipientIdentity(){
		return $this->verifyRecipientIdentity;
	}

	/**
	 * Set the verify recipient identity 
	 * 
	 * @param string $verifyRecipientIdentity
	 */
	public function setVerifyRecipientIdentity($verifyRecipientIdentity){
		$this->verifyRecipientIdentity = $verifyRecipientIdentity;
	}
	
	/**
	 * Get the max download BW per month
	 */
	public function getMaxDownloadBWpermonth(){
		return $this->maxDownloadBWpermonth;
	}

	/**
	 * Set the max download BW per month
	 * 
	 * @param string $maxDownloadBWpermonth
	 */
	public function setMaxDownloadBWpermonth($maxDownloadBWpermonth){
		$this->maxDownloadBWpermonth = $maxDownloadBWpermonth;
	}

	/**
	 * Get the available storage
	 */
	public function getAvailableStorage(){
		return $this->availableStorage;
	}

	/**
	 * Set the available storage
	 * 
	 * @param string $availableStorage
	 */
	public function setAvailableStorage($availableStorage){
		$this->availableStorage = $availableStorage;
	}

	/**
	 * Get the knowledge base
	 */
	public function getKnowledgeBase(){
		return $this->knowledgeBase;
	}

	/**
	 * Set the knowledge base
	 * 
	 * @param string $knowledgeBase
	 */
	public function setKnowledgeBase($knowledgeBase){
		$this->knowledgeBase = $knowledgeBase;
	}

	/**
	 * Get the return receipt
	 */
	public function getReturnReceipt(){
		return $this->returnReceipt;
	}

	/**
	 * Set the return receipt
	 * 
	 * @param string $returnReceipt
	 */
	public function setReturnReceipt($returnReceipt){
		$this->returnReceipt = $returnReceipt;
	}

	/**
	 * Get the passwod protect
	 */
	public function getPasswordProtect(){
		return $this->passwordProtect;
	}

	/**
	 * Set the password protect
	 * 
	 * @param string $passwordProtect
	 */
	public function setPasswordProtect($passwordProtect){
		$this->passwordProtect = $passwordProtect;
	}

	/**
	 * Get the control expiration date
	 */
	public function getControlExpirationDate(){
		return $this->controlExpirationDate;
	}

	/**
	 * Set the control expiration date
	 * 
	 * @param string $controlExpirationDate
	 */
	public function setControlExpirationDate($controlExpirationDate){
		$this->controlExpirationDate = $controlExpirationDate;
	}

}

/**
 * STORAGE ENTITY - NEEDED FOR USER ENTITY
 */
class Storage{
	/**
	 * The revision of the storage. It starts with one and increments with every change in user's storage.
	 *
	 * @var string $revision
	 */
	private $revision;
	
	/**
	 * The unique id of the storage across all workspaces.
	 *
	 * @var string $id
	 */
	private $id;
	
	/**
	 * The current usage of the storage in bytes.
	 *
	 * @var string $currentUsage
	 */
	private $currentUsage;
	
	/**
	 * The total storage allocated for the user in bytes.
	 *
	 * @var string $storageQuota
	 */
	private $storageQuota;

	/**
	 * The class constructor (explicit)
	 *
	 * @param string $initialRevision
	 * @param string $initialId
	 * @param string $initialCurrentUsage
	 * @param string $initialStorageQuota
	 */
	public function __construct($initialRevision, $initialId,
			$initialCurrentUsage,$initialStorageQuota){
		$this->revision = $initialRevision;
		$this->id = $initialId;
		$this->currentUsage = $initialCurrentUsage;
		$this->storageQuota = $initialStorageQuota;
	}

	/**
	 * Get the revision
	 */
	public function getRevision(){
		return $this->revision;
	}

	/**
	 * Set the revision
	 * 
	 * @param string $revision
	 */
	public function setRevision($revision){
		$this->revision = $revision;
	}

	/**
	 * Get the storage id
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set the storage id
	 * 
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Get the current usage
	 */
	public function getCurrentUsage(){
		return $this->currentUsage;
	}

	/**
	 * Set the current usage
	 * 
	 * @param string $currentUsage
	 */
	public function setCurrentUsage($currentUsage){
		$this->currentUsage = $currentUsage;
	}

	/**
	 * Get the storage quota
	 */
	public function getStorageQuota(){
		return $this->storageQuota;
	}
	
	/**
	 * Set the storage quota
	 * 
	 * @param string $storageQuota
	 */
	public function setStorageQuota($storageQuota){
		$this->storageQuota = $storageQuota;
	}
}


/**
 * AUTH ENTITY
 */
class Auth extends Base{

	/**
	 * The authentication token for the user. To be used in all other calls.
	 *
	 * @var string $authToken
	 */
	private $authToken; 
	

	/**
	 * Get the authToken
	 */
	public function getAuthToken(){
		return $this->authToken;
	}
	
	/**
	 * Set the authToken
	 *
	 * @param string $token
	 */
	public function setAuthToken($token){
		$this->authToken = $token;
	}

}

/**
 * USER ENTITY
 */
class User extends Base{
	/**
	 * Used for method 'create new user'. 
	 * It's value is 'OK', if the user was created.
	 * 
	 * @var string $status
	 */
	private $status;
	
	/**
	 * The email address of the user account.
	 * 
	 * @var string $email
	 */
	private $email;
	
	/**
	 * The first name on the user account.
	 * 
	 * @var string $firstName
	 */
	private $firstName;
	
	/**
	 * The last name on the user account.
	 * 
	 * @var string $lastName
	 */
	private $lastName;
	
	/**
	 * The account type (BAS, PRO etc.)
	 * 
	 * @var string $type
	 */
	private $type;
	
	/**
	 * The version of the user account.
	 * 
	 * @var string $version
	 */
	private $version;
	
	/**
	 * An object containing information about the account.
	 * 
	 * @var object $account
	 */
	private $account;
	
	/**
	 * An object containing information about storage.
	 * 
	 * @var object $storage
	 */
	private $storage;

	/**
	 * Get the status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set the status
	 *
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

	/**
	 * Get the email
	 */
	public function getEmail(){
		return $this->email;
	}
	
	/**
	 * Set the email
	 *
	 * @param string $email
	 */
	public function setEmail($email){
		$this->email = $email;
	}

	/**
	 * Get the first name
	 */
	public function getFirstName(){
		return $this->firstName;
	}

	/**
	 * Set the first name
	 *
	 * @param string $firstName
	 */
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}

	/**
	 * Get the last name
	 */
	public function getLastName(){
		return $this->lastName;
	}

	/**
	 * Set the last name
	 *
	 * @param string $lastName
	 */
	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	/**
	 * Get the type
	 */
	public function getType(){
		return $this->type;
	}

	/**
	 * Set the type
	 *
	 * @param string $type
	 */
	public function setType($type){
		$this->type = $type;
	}

	/**
	 * Get the version
	 */
	public function getVersion(){
		return $this->version;
	}

	/**
	 * Set the version
	 *
	 * @param string $version
	 */
	public function setVersion($version){
		$this->version = $version;
	}

	/**
	 * Get the account object
	 */
	public function getAccount(){
		return $this->account;
	}

	/**
	 * Set the account
	 *
	 * @param object $account
	 */
	public function setAccount($account){
		$this->account = $account;
	}

	/**
	 * Get the storage object
	 */
	public function getStorage(){
		return $this->storage;
	}

	/**
	 * Set the storage
	 *
	 * @param object $storage
	 */
	public function setStorage($storage){
		$this->storage = $storage;
	}
}

/**
 * POLICY ENTITY
 */
class Policy extends Base{
	/**
	 * The default file expiration in minutes.
	 *
	 * @var string $fileExpiration
	 */
	private $fileExpiration;
	
	/**
	 * The flag to indicate if user can overwrite the file expiration? true or false
	 *
	 * @var string $fileExpirationOverwrite
	 */
	private $fileExpirationOverwrite;
	
	/**
	 * The default setting for password protection? true or false
	 *
	 * @var string $passwordProtect
	 */
	private $passwordProtect;
	
	/**
	 * The flag to indicate if user can overwrite the password protection setting? true or false.
	 *
	 * @var string $passwordProtectOverwrite
	 */
	private $passwordProtectOverwrite;
	
	/**
	 * The default setting for Return Receipt? true or false.
	 *
	 * @var string $returnReceipt
	 */
	private $returnReceipt;
	
	/**
	 * The flag to indicate if user can overwrite the Return Receipt setting? true or false.
	 *
	 * @var string $returnReceiptOverwrite
	 */
	private $returnReceiptOverwrite;
	
	/**
	 * The default setting for Verify Recipient Identity.
	 *
	 * @var string $vri
	 */
	private $vri;
	
	/**
	 * The flag to indicate if user can overwrite the Verify recipient Identity setting? true or false.
	 *
	 * @var string $vriOverwrite
	 */
	private $vriOverwrite;
	
	/**
	 * The default setting for Verify Recipient Identity for folders.
	 *
	 * @var string $vriShare
	 */
	private $vriShare;
	
	/**
	 * The flag to indicate if user can overwrite the Verify recipient Identity setting for folders? true or false.
	 *
	 * @var string $vriOverwriteShare
	 */
	private $vriOverwriteShare;

	/**
	 * Comma separated domains to which this user cannot send files.
	 *
	 * @var string array $blackListedDomains
	 */
	private $blackListedDomains;
	
	/**
	 * Comma separated domains to which this user can send files
	 *
	 * @var string array $whiteListedDomains
	 */
	private $whiteListedDomains;
	
	/**
	 * Comma separated domains with which this user cannot share folders.
	 *
	 * @var string array $blackListedDomainsShare
	 */
	private $blackListedDomainsShare;
	
	/**
	 * Comma separated domains with which this user can share folders.
	 *
	 * @var string array $whiteListedDomainsShare
	 */
	private $whiteListedDomainsShare;

	/**
	 * Get the file expiration
	 */	
	public function getFileExpiration(){
		return $this->fileExpiration;
	}

	/**
	 * Set the file expiration
	 *
	 * @param string $fileExpiration
	 */		
	public function setFileExpiration($fileExpiration){
		$this->fileExpiration = $fileExpiration;
	}

	/**
	 * Get the file expiration overwrite
	 */		
	public function getFileExpirationOverwrite(){
		return $this->fileExpirationOverwrite;
	}

	/**
	 * Set the file expiration overwrite
	 *
	 * @param string $fileExpirationOverwrite
	 */	
	public function setFileExpirationOverwrite($fileExpirationOverwrite){
		$this->fileExpirationOverwrite = $fileExpirationOverwrite;
	}

	/**
	 * Get the password protect
	 */
	public function getPasswordProtect(){
		return $this->passwordProtect;
	}

	/**
	 * Set the password protect
	 *
	 * @param string $passwordProtect
	 */	
	public function setPasswordProtect($passwordProtect){
		$this->passwordProtect = $passwordProtect;
	}

	/**
	 * Get the password protect overwrite
	 */	
	public function getPasswordProtectOverwrite(){
		return $this->passwordProtectOverwrite;
	}

	/**
	 * Set the password protect overwrite
	 *
	 * @param string $passwordProtectOverwrite
	 */		
	public function setPasswordProtectOverwrite($passwordProtectOverwrite){
		$this->passwordProtectOverwrite = $passwordProtectOverwrite;
	}
	
	/**
	 * Get the return receipt
	 */
	public function getReturnReceipt(){
		return $this->returnReceipt;
	}
	
	/**
	 * Set the return receipt
	 *
	 * @param string $returnReceipt
	 */
	public function setReturnReceipt($returnReceipt){
		$this->returnReceipt = $returnReceipt;
	}
	
	/**
	 * Get the return receipt overwrite
	 */
	public function getReturnReceiptOverwrite(){
		return $this->returnReceiptOverwrite;
	}
	
	/**
	 * Set the return receipt overwrite
	 *
	 * @param string $returnReceiptOverwrite
	 */
	public function setReturnReceiptOverwrite($returnReceiptOverwrite){
		$this->returnReceiptOverwrite = $returnReceiptOverwrite;
	}

	/**
	 * Get the Vri
	 */	
	public function getVri(){
		return $this->vri;
	}
	
	/**
	 * Set the Vri
	 *
	 * @param string $vri
	 */
	public function setVri($vri){
		$this->vri = $vri;
	}
	
	/**
	 * Get the Vri overwrite
	 */
	public function getVriOverwrite(){
		return $this->vriOverwrite;
	}
	
	/**
	 * Set the Vri overwrite
	 *
	 * @param string $vriOverwrite
	 */
	public function setVriOverwrite($vriOverwrite){
		$this->vriOverwrite = $vriOverwrite;
	}
	
	/**
	 * Get the Vri share
	 */
	public function getVriShare(){
		return $this->vriShare;
	}
	
	/**
	 * Set the Vri share
	 *
	 * @param string $vriShare
	 */
	public function setVriShare($vriShare){
		$this->vriShare = $vriShare;
	}
	
	/**
	 * Get the Vri overwrite share
	 */
	public function getVriOverwriteShare(){
		return $this->vriOverwriteShare;
	}
	
	/**
	 * Set the Vri overwrite share
	 *
	 * @param string $vriOverwriteShare
	 */
	public function setVriOverwriteShare($vriOverwriteShare){
		$this->vriOverwriteShare = $vriOverwriteShare;
	}

	/**
	 * Get the black listed domains
	 */
	public function getBlackListedDomains(){
		return $this->blackListedDomains;
	}
	
	/**
	 * Set the black listed domains
	 *
	 * @param string array $blackListedDomains
	 */
	public function setBlackListedDomains($blackListedDomains){
		$this->blackListedDomains = $blackListedDomains;
	}

	/**
	 * Get the white listed domains
	 */
	public function getWhiteListedDomains(){
		return $this->whiteListedDomains;
	}
	
	/**
	 * Set the white listed domains
	 *
	 * @param string array $whiteListedDomains
	 */
	public function setWhiteListedDomains($whiteListedDomains){
		$this->whiteListedDomains = $whiteListedDomains;
	}
	
	/**
	 * Get the black listed domains share
	 */
	public function getBlackListedDomainsShare(){
		return $this->blackListedDomainsShare;
	}
	
	/**
	 * Set the black listed domains share
	 *
	 * @param string array $blackListedDomainsShare
	 */
	public function setBlackListedDomainsShare($blackListedDomainsShare){
		$this->blackListedDomainsShare = $blackListedDomainsShare;
	}
	
	/**
	 * Get the white listed domains share
	 */
	public function getWhiteListedDomainsShare(){
		return $this->whiteListedDomainsShare;
	}

	/**
	 * Set the white listed domains share
	 *
	 * @param string array $whiteListedDomainsShare
	 */	
	public function setWhiteListedDomainsShare($whiteListedDomainsShare){
		$this->whiteListedDomainsShare = $whiteListedDomainsShare;
	}

}

/**
 * SEND ENTITY
 */
class Send extends Base{
	/**
	 * The item id for the batch. There is always one itemId even in the case of multiple files. 
	 *
	 * @var string $itemId
	 */
	private $itemId;
	
	/**
	 * The URL to which file should be uploaded, In case of multiple files there will be multiple uploadURLs.
	 *
	 * @var string $uploadUrl
	 */
	private $uploadUrl;

	/**
	 * Get the item id
	 */
	public function getItemId(){
		return $this->itemId;
	}

	/**
	 * Set the item id
	 * 
	 * @param string $itemId
	 */
	public function setItemId($itemId){
		$this->itemId = $itemId;
	}

	/**
	 * Get the upload URL
	 */
	public function getUploadUrl(){
		return $this->uploadUrl;
	}

	/**
	 * Set the upload URL
	 * 
	 * @param string $uploadUrl
	 */
	public function setUploadUrl($uploadUrl){
		$this->uploadUrl = $uploadUrl;
	}
}

/**
 * COMMIT ENTITY
 */
class Commit extends Base{
	/**
	 * The clickable download page URL that can be sent to the recipient to download the files.
	 *
	 * @var string $downloadUrl
	 */
	private $downloadUrl;

	/**
	 * Get the download URL
	 */
	public function getDownloadUrl(){
		return $this->downloadUrl;
	}

	/**
	 * Set the download URL
	 * 
	 * @param string $downloadUrl
	 */
	public function setDownloadUrl($downloadUrl){
		$this->downloadUrl = $downloadUrl;
	}
}

/**
 * STATUS ENTITY (REFFERS TO UPLOAD STATUS)
 */
class Status extends Base{
	/**
	 * The number of bytes already received by the server. Once the file upload completes, the returned value is 0.
	 *
	 * @var string $bytesReceived
	 */
	private $bytesReceived;
	
	/**
	 * The status of the upload? ACTIVE , INACTIVE and DONE.
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * Get the bytes received
	 */
	public function getBytesReceived(){
		return $this->bytesReceived;
	}

	/**
	 * Set the bytes received
	 * 
	 * @param string $bytesReceived
	 */
	public function setBytesReceived($bytesReceived){
		$this->bytesReceived = $bytesReceived;
	}

	/**
	 * Get the status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set the status
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}
}

/**
 * COUNT ENTITY
 */

class Count extends Base{
	/**
	 * The number of items.
	 *
	 * @var string $itemCount
	 */
	private $itemCount;

	/**
	 * Get the item count.
	 */
	public function getItemCount(){
		return $this->itemCount;
	}

	/**
	 * Set the item count.
	 *
	 * @param string $itemCount
	 */
	public function setItemCount($itemCount){
		$this->itemCount = $itemCount;
	}

}

/**
 * DELETE ENTITY
 */

class Delete extends Base{
	/**
	 * Delete status. OK, if the item was deleted
	 * 
	 * @var string $status
	 */
	private $status;

	/**
	 * Get the delete status.
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set the delete status.
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

}

/**
 * EXPIRATION ENTITY
 */

class Expiration extends Base{
	
	/**
	 * The new date and time stamp for the item expiration
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * Get the expiration status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set the expiration status
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

}

/**
 * FOLDER ENTITY
 */

class Folder extends Base{
	/**
	 * The revision id of the folder. It increments with every change in the folder.
	 *
	 * @var string $revision
	 */
	private $revision;
	
	/**
	 * The unique folder id across all the folders.
	 *
	 * @var string $id
	 */
	private $id;
	
	/**
	 * The folder creation date and timestamp.
	 *
	 * @var string $createdOn
	 */
	private $createdOn;
	
	/**
	 * The number of files in this folder.
	 *
	 * @var string $fileCount
	 */
	private $fileCount;
	
	/**
	 * The array of files in this folder.
	 *
	 * @var object array $files
	 */
	private $files = array();
	
	/**
	 * The number of folders in this folder (not including the subfolders)
	 *
	 * @var string $folderCount
	 */
	private $folderCount;
	
	/**
	 * The array of folders in this folder.
	 *
	 * @var object array $folders
	 */
	private $folders = array();
	
	/**
	 * The name of the folder.
	 *
	 * @var string $name
	 */
	private $name;
	
	/**
	 * The id of the parent folder.
	 *
	 * @var string $parentId
	 */
	private $parentId;
	
	/**
	 * The flag to indicate if user has read permissions on the folder? true or false.
	 *
	 * @var string $readable
	 */
	private $readable;
	
	/**
	 * The total size of the folder including all the files and folders it contains
	 *
	 * @var string $size
	 */
	private $size;
	
	/**
	 * Type of the folder? private, shared.
	 *
	 * @var string $type
	 */
	private $type;
	
	/**
	 * The last updated date and time stamp for the folder.
	 *
	 * @var string $updatedOn
	 */
	private $updatedOn;
	
	/**
	 * The flag to indicate if user has write permissions to the folder? true or false.
	 *
	 * @var string $writeable
	 */
	private $writeable;
	
	/**
	 * The flag to indicate if user has write permissions to the folder? true or false.
	 *
	 * @var string $currentUsage
	 */	
	private $currentUsage;
	
	/**
	 * The total storage allocated for the user in bytes.
	 *
	 * @var string $storageQuota
	 */
	private $storageQuota;
	
	/**
	 * The user who owns the folder.
	 *
	 * @var string $ownedByUser
	 */
	private $ownedByUser;

	//specific for get storage revisions
	/**
	 * DELETED in case of deleted folder.
	 *
	 * @var string $deletedStatus
	 */
	private $deletedStatus;
	
	/**
	 * The folder ID.
	 *
	 * @var string $folderId
	 */	
	private $folderId;
	
	/**
	 * The folder type.
	 *
	 * @var string $folderType
	 */	
	private $folderType;
	
	/**
	 * The date of the last update.
	 *
	 * @var string $lastUpdatedOn
	 */	
	private $lastUpdatedOn;
	
	/**
	 * The user who owns the folder.
	 *
	 * @var object array $permissions
	 */	
	private $permissions = array();
	
	/**
	 * The flag for share invitation pending (TRUE/FALSE).
	 *
	 * @var string $shareInvitationPending
	 */	
	private $shareInvitationPending;

	/**
	 * Get the revision
	 */	
	public function getRevision(){
		return $this->revision;
	}

	/**
	 * Set the revision
	 * 
	 * @param string $revision
	 */	
	public function setRevision($revision){
		$this->revision = $revision;
	}

	/**
	 * Get the ID
	 */	
	public function getId(){
		return $this->id;
	}

	/**
	 * Set the ID
	 * 
	 * @param string $id
	 */	
	public function setId($id){
		$this->id = $id;
	}
	
	/**
	 * Get the created on date
	 */
	public function getCreatedOn(){
		return $this->createdOn;
	}

	/**
	 * Set the created on date
	 * 
	 * @param string $createdOn
	 */	
	public function setCreatedOn($createdOn){
		$this->createdOn = $createdOn;
	}

	/**
	 * Get the file count
	 */	
	public function getFileCount(){
		return $this->fileCount;
	}

	/**
	 * Set the file count
	 * 
	 * @param string $fileCount
	 */	
	public function setFileCount($fileCount){
		$this->fileCount = $fileCount;
	}

	/**
	 * Get the files
	 */		
	public function getFiles(){
		return $this->files;
	}

	/**
	 * Set the files
	 * 
	 * @param object array $files
	 */	
	public function setFiles($files){
		$this->files = $files;
	}

	/**
	 * Get the folder count
	 */	
	public function getFolderCount(){
		return $this->folderCount;
	}
	
	/**
	 * Set the folder count
	 * 
	 * @param string $folderCount
	 */
	public function setFolderCount($folderCount){
		$this->folderCount = $folderCount;
	}

	/**
	 * Get the folders
	 */	
	public function getFolders(){
		return $this->folders;
	}

	/**
	 * Set the folders
	 * 
	 * @param object array $folders
	 */	
	public function setFolders($folders){
		$this->folders = $folders;
	}

	/**
	 * Get the name
	 */	
	public function getName(){
		return $this->name;
	}

	/**
	 * Set the name
	 * 
	 * @param string $name
	 */	
	public function setName($name){
		$this->name = $name;
	}

	/**
	 * Get the parent ID
	 */		
	public function getParentId(){
		return $this->parentId;
	}

	/**
	 * Set the parent ID
	 * 
	 * @param string $parentId
	 */	
	public function setParentId($parentId){
		$this->parentId = $parentId;
	}
	
	/**
	 * Get the readable
	 */
	public function getReadable(){
		return $this->readable;
	}
	
	/**
	 * Set the readable
	 * 
	 * @param string $readable
	 */
	public function setReadable($readable){
		$this->readable = $readable;
	}
	
	/**
	 * Get the size
	 */
	public function getSize(){
		return $this->size;
	}
	
	/**
	 * Set the size
	 * 
	 * @param string $size
	 */
	public function setSize($size){
		$this->size = $size;
	}
	
	/**
	 * Get the type
	 */
	public function getType(){
		return $this->type;
	}

	/**
	 * Set the type
	 * 
	 * @param string $type
	 */	
	public function setType($type){
		$this->type = $type;
	}
	
	/**
	 * Get the updated on date
	 */
	public function getUpdatedOn(){
		return $this->updatedOn;
	}
	
	/**
	 * Set the updated on date
	 * 
	 * @param string $updatedOn
	 */
	public function setUpdatedOn($updatedOn){
		$this->updatedOn = $updatedOn;
	}
	
	/**
	 * Get the writable
	 */
	public function getWritable(){
		return $this->writeable;
	}
	
	/**
	 * Set the writable
	 * 
	 * @param string $writable
	 */
	public function setWritable($writable){
		$this->writeable = $writable;
	}

	/**
	 * Get the current usage
	 */	
	public function getCurrentUsage(){
		return $this->currentUsage;
	}
	
	/**
	 * Set the current usage
	 * 
	 * @param string $currentUsage
	 */
	public function setCurrentUsage($currentUsage){
		$this->currentUsage = $currentUsage;
	}
	
	/**
	 * Get the storage quota
	 */
	public function getStorageQuota(){
		return $this->storageQuota;
	}

	/**
	 * Set the storage quota
	 * 
	 * @param string $storageQuota
	 */	
	public function setStorageQuota($storageQuota){
		$this->storageQuota = $storageQuota;
	}
	
	/**
	 * Get the owned by user
	 */
	public function getOwnedByUser(){
		return $this->ownedByUser;
	}
	
	/**
	 * Set the owned by user
	 * 
	 * @param string $ownedByUser
	 */
	public function setOwnedByUser($ownedByUser){
		$this->ownedByUser = $ownedByUser;
	}

	/**
	 * Get the deleted status
	 */
	public function getDeletedStatus(){
		return $this->deletedStatus;
	}
	
	/**
	 * Set the deleted status
	 * 
	 * @param string $deletedStatus
	 */
	public function setDeletedStatus($deletedStatus){
		$this->deletedStatus = $deletedStatus;
	}
	
	/**
	 * Get the folder ID
	 */	
	public function getFolderId(){
		return $this->folderId;
	}
	
	/**
	 * Set the folder ID
	 * 
	 * @param string $folderId
	 */
	public function setFolderId($folderId){
		$this->folderId = $folderId;
	}
	
	/**
	 * Get the folder type
	 */	
	public function getFolderType(){
		return $this->folderType;
	}

	/**
	 * Set the folder type
	 * 
	 * @param string $folderType
	 */
	public function setFolderType($folderType){
		$this->folderType = $folderType;
	}
	
	/**
	 * Get the last updated on
	 */	
	public function getLastUpdatedOn(){
		return $this->lastUpdatedOn;
	}
	
	/**
	 * Set the last updated on
	 * 
	 * @param string $lastUpdatedOn
	 */
	public function setLastUpdatedOn($lastUpdatedOn){
		$this->lastUpdatedOn = $lastUpdatedOn;
	}
	
	/**
	 * Get the permissions
	 */	
	public function getPermissions(){
		return $this->permissions;
	}
	
	/**
	 * Set the permissions
	 * 
	 * @param object array $permissions
	 */
	public function setPermissions($permissions){
		$this->permissions = $permissions;
	}
	
	/**
	 * Get the share invitation pending
	 */		
	public function getShareInvitationPending(){
		return $this->shareInvitationPending;
	}
	
	/**
	 * Set the share invitation pending 
	 * 
	 * @param string $shareInvitationPending
	 */
	public function setShareInvitationPending($shareInvitationPending){
		$this->shareInvitationPending = $shareInvitationPending;
	}
}


/**
 * FILE ENTITY
 */
class File extends Base{
	/**
	 * The revision number of the file. It starts with 1 and increments with every update.
	 *
	 * @var string $revision
	 */
	private $revision;
	
	/**
	 * The unique file id.
	 *
	 * @var string $id
	 */
	private $id;
	
	/**
	 * The file creation date and timestamp.
	 *
	 * @var string $createdOn
	 */
	private $createdOn;
	
	/**
	 * The name of the file
	 *
	 * @var string $name
	 */
	private $name;
	
	/**
	 * The id of the parent folder.
	 *
	 * @var string $parentId
	 */
	private $parentId;
	
	/**
	 * The size of the file in bytes
	 *
	 * @var string $size
	 */
	private $size;
	
	/**
	 * Send file status. Status is OK when the file forward is successful.
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * The download link meant for end user to click and download the file
	 *
	 * @var string $clickableDownloadUrl
	 */
	private $clickableDownloadUrl;
	
	/**
	 * The id of the storage that owns this file.
	 *
	 * @var string $ownedByStorage
	 */
	private $ownedByStorage;

	/**
	 * Specific for get list of items properties:
	 * The URL of the file to be used via APIs to download the file.
	 *
	 * @var string $downloadUrl
	 */
	private $downloadUrl;
	
	/**
	 * Specific for get list of items properties:
	 * The number of times the file has been downloaded
	 *
	 * @var string $downloads
	 */
	private $downloads;

	/**
	 * Specific for Get Item info
	 * The flag to indicate if the item is password protected: true or false.
	 *
	 * @var string $passwordProtect
	 */
	private $passwordProtect;
	
	/**
	 * Specific for Get Item info
	 * The flag to indicate if Return Receipt is on for the item: true or false.
	 *
	 * @var string $returnReceipt
	 */
	private $returnReceipt;
	
	/**
	 * Specific for Get Item info
	 * The flag to indicate if Verify recipient Identity is requested on this item: true or false
	 *
	 * @var string $verifyIdentity
	 */
	private $verifyIdentity;

	/**
	 * An array of tracking objects corresponding to the file.
	 *
	 * @var object array $tracking
	 */
	private $tracking=array();

	
	/**
	 * Specific for get storage revisions
	 * DELETED in case of deleted folder
	 *
	 * @var string $deleteStatus
	 */
	private $deleteStatus;
	
	/**
	 * Specific for get storage revisions
	 * The id of the storage that owns this file
	 *
	 * @var string $folderId
	 */
	private $folderId;
	
	/**
	 * Specific for get storage revisions
	 * The Id of File
	 *
	 * @var string $fileId
	 */
	private $fileId;
	
	/**
	 * Specific for get storage revisions
	 * The size of the file in bytes
	 *
	 * @var string $size
	 */
	private $lastUpdatedOn;
	
	/**
	 * Specific for get storage revisions
	 * The name of the file
	 *
	 * @var string $fileName
	 */
	private $fileName;

	/**
	 * Specific for get file revisions
	 * The array of revisions corresponding to the file
	 *
	 * @var object array $revisions
	 */
	private $revisions = array();
	
	/**
	 * Specific for get file revisions
	 * The number of revisions corresponding to the file
	 *
	 * @var string $revisionCount
	 */
	private $revisionCount;

	/**
	 * Get revision
	 */
	public function getRevision(){
		return $this->revision;
	}
	
	/**
	 * Set revision
	 * 
	 * @param string $revision
	 */
	public function setRevision($revision){
		$this->revision = $revision;
	}

	/**
	 * Get id
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set id
	 * 
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Get created on
	 */
	public function getCreatedOn(){
		return $this->createdOn;
	}

	/**
	 * Set created on
	 * 
	 * @param string $createdOn
	 */
	public function setCreatedOn($createdOn){
		$this->createdOn = $createdOn;
	}

	/**
	 * Get name
	 */
	public function getName(){
		return $this->name;
	}

	/**
	 * Set name
	 * 
	 * @param string $name
	 */
	public function setName($name){
		$this->name = $name;
	}

	/**
	 * Get parent id
	 */
	public function getParentId(){
		return $this->parentId;
	}

	/**
	 * Set parent id
	 * 
	 * @param string $parentId
	 */
	public function setParentId($parentId){
		$this->parentId = $parentId;
	}

	/**
	 * Get size
	 */
	public function getSize(){
		return $this->size;
	}

	/**
	 * Set size
	 * 
	 * @param string $size
	 */
	public function setSize($size){
		$this->size = $size;
	}

	/**
	 * Get status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set status
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

	/**
	 * Get clickable download URL
	 */
	public function getClickableDownloadUrl(){
		return $this->clickableDownloadUrl;
	}

	/**
	 * Set clickable download URL
	 * 
	 * @param string $clickableDownloadUrl
	 */
	public function setClickableDownloadUrl($clickableDownloadUrl){
		$this->clickableDownloadUrl = $clickableDownloadUrl;
	}

	/**
	 * Get owned by storage
	 */
	public function getOwnedByStorage(){
		return $this->ownedByStorage;
	}

	/**
	 * Set owned by storage
	 * 
	 * @param string $ownedByStorage
	 */
	public function setOwnedByStorage($ownedByStorage){
		$this->ownedByStorage = $ownedByStorage;
	}

	/**
	 * Get download URL
	 */
	public function getDownloadUrl(){
		return $this->downloadUrl;
	}

	/**
	 * Set download URL
	 * 
	 * @param string $downloadUrl
	 */
	public function setDownloadUrl($downloadUrl){
		$this->downloadUrl = $downloadUrl;
	}

	/**
	 * Get downloads
	 */
	public function getDownloads(){
		return $this->downloads;
	}

	/**
	 * Set downloads
	 * 
	 * @param string $downloads
	 */
	public function setDownloads($downloads){
		$this->downloads = $downloads;
	}

	/**
	 * Get password protect
	 */
	public function getPasswordProtect(){
		return $this->passwordProtect;
	}

	/**
	 * Set password protect
	 * 
	 * @param string $passwordProtect
	 */
	public function setPasswordProtect($passwordProtect){
		$this->passwordProtect = $passwordProtect;
	}

	/**
	 * Get return receipt
	 */
	public function getReturnReceipt(){
		return $this->returnReceipt;
	}

	/**
	 * Set return receipt
	 * 
	 * @param string $returnReceipt
	 */
	public function setReturnReceipt($returnReceipt){
		$this->returnReceipt = $returnReceipt;
	}

	/**
	 * Get verify identity
	 */
	public function getVerifyIdentity(){
		return $this->verifyIdentity;
	}

	/**
	 * Set verify identity
	 * 
	 * @param string $verifyIdentity
	 */
	public function setVerifyIdentity($verifyIdentity){
		$this->verifyIdentity = $verifyIdentity;
	}
	
	/**
	 * Get tracking
	 */
	public function getTracking(){
		return $this->tracking;
	}

	/**
	 * Set tracking
	 * 
	 * @param object array $tracking
	 */
	public function setTracking($tracking){
		$this->tracking = $tracking;
	}

	/**
	 * Get delete status
	 *
	 */
	public function getDeleteStatus(){
		return $this->deleteStatus;
	}

	/**
	 * Set delete status
	 * 
	 * @param string $deleteStatus
	 *
	 */
	public function setDeleteStatus($deleteStatus){
		$this->deleteStatus = $deleteStatus;
	}

	/**
	 * Get file id
	 * 
	 */
	public function getFileId(){
		return $this->fileId;
	}

	/**
	 * Set file id
	 *
	 *@param string $fileId
	 */
	public function setFileId($fileId){
		$this->fileId = $fileId;
	}
	
	/**
	 * Get file name
	 */
	public function getFileName(){
		return $this->fileName;
	}

	/**
	 * Set file name
	 * 
	 * @param string $fileName
	 */
	public function setFileName($fileName){
		$this->fileName = $fileName;
	}

	/**
	 * Get folder id
	 */
	public function getFolderId(){
		return $this->folderId;
	}

	/**
	 * Set folder id
	 * 
	 * @param string $folderId
	 */
	public function setFolderId($folderId){
		$this->folderId = $folderId;
	}

	/**
	 * Get last updated on
	 */
	public function getLastUpdatedOn(){
		return $this->lastUpdatedOn;
	}

	/**
	 * Set last updated on
	 *
	 * @param string $lastUpdatedOn
	 */
	public function setLastUpdatedOn($lastUpdatedOn){
		$this->lastUpdatedOn = $lastUpdatedOn;
	}

	/**
	 * Get revisions
	 */
	public function getRevisions(){
		return $this->revisions;
	}

	/**
	 * Set revisions
	 * 
	 * @param object array $revisions
	 */
	public function setRevisions($revisions){
		$this->revisions = $revisions;
	}

	/**
	 * Get revision count
	 */
	public function getRevisionCount(){
		return $this->revisionCount;
	}

	/**
	 * Set revision count
	 * 
	 * @param string $revisionCount
	 */
	public function setRevisionCount($revisionCount){
		$this->revisionCount = $revisionCount;
	}

}
/**
 * Tracking ENTITY
 */
class Tracking{
	/**
	 * Tracking info: email
	 *
	 * @var string $email
	 */
	private $email;
	
	/**
	 * Tracking info: timestamp
	 *
	 * @var string $when
	 */
	private $when;

	/**
	 * Get email
	 */
	public function getEmail(){
		return $this->email;
	}

	/**
	 * Set email
	 * 
	 * @param string $email
	 */
	public function setEmail($email){
		$this->email = $email;
	}
	
	/**
	 * Get when
	 */
	public function getWhen(){
		return $this->when;
	}

	/**
	 * Set when
	 * 
	 * @param string $when
	 */
	public function setWhen($when){
		$this->when = $when;
	}

}

/**
 * Upload ENTITY
 */
class Upload extends Base{
	/**
	 * The id to refer in Commit File Upload.
	 *
	 * @var string $fileId
	 */
	private $fileId;
	
	/**
	 * The URL to upload the file. 
	 *
	 * @var string $uploadUrl
	 */
	private $uploadUrl;

	/**
	 * Get file id
	 */
	public function getFileId(){
		return $this->fileId;
	}

	/**
	 * Set file id
	 * 
	 * @param string $fileId
	 */
	public function setFileId($fileId){
		$this->fileId = $fileId;
	}

	/**
	 * Get upload url
	 */
	public function getUploadUrl(){
		return $this->uploadUrl;
	}

	/**
	 * Set upload url
	 * 
	 * @param string $uploadUrl
	 */
	public function setUploadUrl($uploadUrl){
		$this->uploadUrl = $uploadUrl;
	}

}

/**
 * SHARE ENTITY
 */

class Share extends Base{
	/**
	 * The status of the share operation
	 *
	 * @var string $status
	 */
	private $status;
	
	/**
	 * The array of shared members.
	 *
	 * @var object array $memmbers
	 */
	private $members = array();

	/**
	 * Get status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set status
	 *
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

	/**
	 * Get members
	 */
	public function getMembers(){
		return $this->members;
	}

	/**
	 * Set members
	 *
	 * @param object array $members
	 */
	public function setMembers($members){
		$this->members = $members;
	}

}

/**
 * MEMBER ENTITY
 */

class Member extends Base{
	/**
	 * ACCEPTED, if user accepted the share invitation, INVITED, if user has not accepted the share invitation.
	 *
	 * @var string $status
	 */
	private $status;
	
	/**
	 * If true, user can invite more members. If false, cannot invite participant.
	 *
	 * @var string $canInvite
	 */
	private $canInvite;
	
	/**
	 * This value is always set to true
	 *
	 * @var string $canRead
	 */
	private $canRead;
	
	/**
	 * If true, user has write permissions on the folder. If false, user does not have write permissions on the folder.
	 *
	 * @var string $canWrite
	 */
	private $canWrite;
	
	/**
	 * Email address of the user, with whom the folder was shared.
	 *
	 * @var string $email
	 */
	private $email;
	
	/**
	 * The invitation key.
	 *
	 * @var string $invitationKey
	 */
	private $invitationKey;

	/**
	 * Get status
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set status
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

	/**
	 * Get can invite
	 */
	public function getCanInvite(){
		return $this->canInvite;
	}
	
	/**
	 * Set can invite
	 *
	 * @param string $canInvite
	 */
	public function setCanInvite($canInvite){
		$this->canInvite = $canInvite;
	}

	/**
	 * Get can read
	 */
	public function getCanRead(){
		return $this->canRead;
	}

	/**
	 * Set can read
	 * 
	 * @param string $canRead
	 */
	public function setCanRead($canRead){
		$this->canRead = $canRead;
	}

	/**
	 * Get can write
	 */
	public function getCanWrite(){
		return $this->canWrite;
	}

	/**
	 * Set can write
	 * 
	 * @param string $canWrite
	 */
	public function setCanWrite($canWrite){
		$this->canWrite = $canWrite;
	}

	/**
	 * Get email
	 */
	public function getEmail(){
		return $this->email;
	}

	/**
	 * Set email
	 * 
	 * @param string $email
	 */
	public function setEmail($email){
		$this->email = $email;
	}
	
	/**
	 * Get invitation key
	 */
	public function getInvitationKey(){
		return $this->invitationKey;
	}

	/**
	 * Set invitation key
	 * 
	 * @param string $invitationKey
	 */
	public function setInvitationKey($invitationKey){
		$this->invitationKey = $invitationKey;
	}


}

/**
 * BASE CLASS FOR ERROR STATUS
 */
class YsiBase {
	/**
	 * Error status returned at upload.
	 *
	 * @var object $errorStatus
	 */
	private $ysiErrorStatus;

	/**
	 * Get error status
	 */
	public function setYsiErrorStatus($ysiErrorStatus){
		$this->ysiErrorStatus = $ysiErrorStatus;
	}

	/**
	 * Set error status
	 * 
	 * @param object $errorStatus
	 */
	public function getYsiErrorStatus(){
		return $this->ysiErrorStatus;
	}
}


/**
 * YSI ERROR STATUS ENTITY
 */
class YsiError{
	/**
	 * Error code returned at upload.
	 *
	 * @var string $errorCode
	 */
	private $errorCode;
	
	/**
	 * Error message returned at upload.
	 *
	 * @var string $errorMessage
	 */
	private $errorMessage;

	/**
	 * Constructor
	 *
	 * @param string $errorCode
	 * @param string $errorMessage
	 */
	public function __construct($errorCode, $errorMessage) {
		$this->errorCode = $errorCode;
		$this->errorMessage = $errorMessage;
	}

	/**
	 * Get error code.
	 */
	public function getErrorCode(){
		return $this->errorCode;
	}

	/**
	 * Set error code.
	 * 
	 * @param string $errorCode
	 */
	public function setErrorCode($errorCode){
		$this->errorCode = $errorCode;
	}

	/**
	 * Get error message.
	 */
	public function getErrorMessage(){
		return $this->errorMessage;
	}

	/**
	 * Set error message.
	 * 
	 * @param string $errorMessage
	 */
	public function setErrorMessage($errorMessage){
		$this->errorMessage = $errorMessage;
	}

}

/**
 * YSI RESPONSE ENTITY
 */
class YsiResponse extends YsiBase{
	/**
	 * No used.
	 *
	 * @var string $ufid
	 */
	private $ufid;
	
	/**
	 * Status of the file upload operation.
	 *
	 * @var string $uploadStatus
	 */
	private $uploadStatus;

	/**
	 * Get ufid.
	 */
	public function getUfid(){
		return $this->ufid;
	}

	/**
	 * Set ufid.
	 * 
	 * @param string $ufid
	 */
	public function setUfid($ufid){
		$this->ufid = $ufid;
	}

	/**
	 * Get upload status.
	 */
	public function getUploadStatus(){
		return $this->uploadStatus;
	}

	/**
	 * Set upload status.
	 * 
	 * @param string $uploadStatus
	 */
	public function setUploadStatus($uploadStatus){
		$this->uploadStatus = $uploadStatus;
	}
}

/**
 * ITEMS ENTITY - get list of items in user's Inbox or Sent Items
 */
class Items extends Base{
	/**
	 * An array of items.
	 *
	 * @var object array $items
	 */
	private $items = array();

	/**
	 * Get the array of items.
	 */
	public function getItems(){
		return $this->items;
	}

	/**
	 * Set the array of items.
	 * 
	 * @param string array $items
	 */
	public function setItems($items){
		$this->items = $items;
	}

}

/**
 * ITEM ENTITY
 * An item may contain multiple files that were sent together in one batch.
 */
class Item extends Base{
	/**
	 * The date this item was created.
	 *
	 * @var string $create
	 */
	private $create;
	
	/**
	 * The date and time stamp on which this item expires.
	 *
	 * @var string $expiration
	 */
	private $expiration;
	
	/**
	 * File corresponding to item.
	 *
	 * @var string $file
	 */
	private $file;
	
	/**
	 * The unique item id across items. This can be used to get more detailed info about the item.
	 *
	 * @var string $id
	 */
	private $id;
	
	/**
	 * Item Message
	 *
	 * @var string $message
	 */
	private $message;
	
	/**
	 * The comma separate list of recipients for this item.
	 *
	 * @var string $recipients
	 */
	private $recipients;
	
	/**
	 * The item subject.
	 *
	 * @var string $subject
	 */
	private $subject;

	/**
	 * The array of files corresponding to this item.
	 *
	 * @var object array $files
	 */
	private $files=array();

	/**
	 * Get files
	 */
	public function getFiles(){
		return $this->files;
	}
	
	/**
	 * Set files
	 * 
	 * @param object array $files
	 */
	public function setFiles($files){
		$this->files = $files;
	}

	/**
	 * Get create
	 */
	public function getCreate(){
		return $this->create;
	}

	/**
	 * Set create
	 * 
	 * @param string $create
	 */
	public function setCreate($create){
		$this->create = $create;
	}

	/**
	 * Get expiration
	 */
	public function getExpiration(){
		return $this->expiration;
	}

	/**
	 * Set expiration
	 * 
	 * @param string $expiration
	 */
	public function setExpiration($expiration){
		$this->expiration = $expiration;
	}

	/**
	 * Get file
	 */
	public function getFile(){
		return $this->file;
	}

	/**
	 * Set file
	 * 
	 * @param object $file
	 */
	public function setFile($file){
		$this->file = $file;
	}

	/**
	 * Get id
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set id
	 * 
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Get message
	 */
	public function getMessage(){
		return $this->message;
	}

	/**
	 * Set message
	 * 
	 * @param string $message
	 */
	public function setMessage($message){
		$this->message = $message;
	}

	/**
	 * Get recipients
	 */
	public function getRecipients(){
		return $this->recipients;
	}

	/**
	 * Set recipients
	 * 
	 * @param string array $recipients
	 */
	public function setRecipients($recipients){
		$this->recipients = $recipients;
	}

	/**
	 * Get subject
	 */
	public function getSubject(){
		return $this->subject;
	}

	/**
	 * Set subject
	 * 
	 * @param string $subject
	 */
	public function setSubject($subject){
		$this->subject = $subject;
	}


}

/**
 * RENAME ENTITY
 */
class Rename extends Base{
	
	/**
	 * The status of the rename operation.
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * Get the rename status.
	 */
	public function getStatus(){
		return $this->status;
	}
	
	/**
	 * Set the rename status.
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

}

/**
 * Move ENTITY
 */
class Move extends Base{
	/**
	 * The status of the move operation.
	 *
	 * @var string $status
	 */
	private $status;

	/**
	 * Get the move status.
	 */
	public function getStatus(){
		return $this->status;
	}

	/**
	 * Set the delete status.
	 * 
	 * @param string $status
	 */
	public function setStatus($status){
		$this->status = $status;
	}

}

/**
 * STORAGE CHANGES ENTITY
 */
class StorageChanges extends Base{
	/**
	 * Current usage 
	 *
	 * @var string $currentUsage
	 */
	private $currentUsage;
	
	/**
	 * Array of folders corresponding to a revision.
	 *
	 * @var object array $files
	 */
	private $files = array();
	
	/**
	 * Array of folders corresponding to a revision.
	 *
	 * @var object array $folders
	 */
	private $folders = array();
	
	/**
	 * Revision
	 *
	 * @var string $revision
	 */
	private $revision;
	
	/**
	 * Total number of files and folder in root folder
	 *
	 * @var string $revisionCount
	 */
	private $revisionCount;
	
	/**
	 * Status display
	 *
	 * @var string $statusDisplay
	 */
	private $statusDisplay;
	
	/**
	 * Storage quota for revision
	 *
	 * @var string $storageQuota
	 */
	private $storageQuota;
	
	/**
	 * Workspace Id
	 *
	 * @var string $workspaceId
	 */
	private $workspaceId;


	/**
	 * Get current usage
	 */
	public function getCurrentUsage(){
		return $this->currentUsage;
	}

	/**
	 * Set current usage
	 * 
	 * @param string $currentUsage
	 */
	public function setCurrentUsage($currentUsage){
		$this->currentUsage = $currentUsage;
	}

	/**
	 * Get files
	 */
	public function getFiles(){
		return $this->files;
	}

	/**
	 * Set files
	 *
	 * @param object array $files
	 */
	public function setFiles($files){
		$this->files = $files;
	}

	/**
	 * Get folders
	 */
	public function getFolders(){
		return $this->folders;
	}

	/**
	 * Set folders
	 * 
	 * @param object array $folders
	 */
	public function setFolders($folders){
		$this->folders = $folders;
	}

	/**
	 * Get revision 
	 */
	public function getRevision(){
		return $this->revision;
	}
	
	/**
	 * Set revision
	 * 
	 * @param string $revision
	 */
	public function setRevision($revision){
		$this->revision = $revision;
	}

	/**
	 * Get revision count
	 */
	public function getRevisionCount(){
		return $this->revisionCount;
	}

	/**
	 * Get revision count
	 * 
	 * @param string $revisionCount
	 */
	public function setRevisionCount($revisionCount){
		$this->revisionCount = $revisionCount;
	}

	/**
	 * Get status display
	 */
	public function getStatusDisplay(){
		return $this->statusDisplay;
	}

	/**
	 * Set status display
	 * 
	 * @param string $statusDisplay
	 */
	public function setStatusDisplay($statusDisplay){
		$this->statusDisplay = $statusDisplay;
	}

	/**
	 * Get storage quota
	 */
	public function getStorageQuota(){
		return $this->storageQuota;
	}

	/**
	 * Set storage quota
	 * 
	 * @param string $storageQuota
	 */
	public function setStorageQuota($storageQuota){
		$this->storageQuota = $storageQuota;
	}

	/**
	 * Get workspace id
	 */
	public function getWorkspaceId(){
		return $this->workspaceId;
	}

	/**
	 * Set workspace id
	 * 
	 * @param string $workspaceId
	 */
	public function setWorkspaceId($workspaceId){
		$this->workspaceId = $workspaceId;
	}


}

/**
 * PERMISSION ENTITY
 */

class Permission extends Base{
	
	/**
	 * Permission name
	 *
	 * @var string $wsPermissionName
	 */
	private $wsPermissionName;

	/**
	 * Get permission name
	 */
	public function getWsPermissionName(){
		return $this->wsPermissionName;
	}

	/**
	 * Set permission name
	 *
	 * @param string $wsPermissionName
	 */
	public function setWsPermissionName($wsPermissionName){
		$this->wsPermissionName = $wsPermissionName;
	}
}

/**
 * REVISION ENTITY
 */

class Revision extends Base{
	/**
	 * The unique revision id across one file revisions
	 *
	 * @var string $id
	 */
	private $id;
	
	/**
	 * Set to true.
	 *
	 * @var string $current
	 */
	private $current;
	
	/**
	 * The file download Url.
	 *
	 * @var string $downloadUrl
	 */
	private $downloadUrl;
	
	/**
	 * File size in that revision.
	 *
	 * @var string $size
	 */
	private $size;

	/**
	 * Get id
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set id
	 * 
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Get current
	 */
	public function getCurrent(){
		return $this->current;
	}

	/**
	 * Set current
	 * 
	 * @param string $current
	 */
	public function setCurrent($current){
		$this->current = $current;
	}

	/**
	 * Get download URL
	 */
	public function getDownloadUrl(){
		return $this->downloadUrl;
	}

	/**
	 * Set download URL
	 * 
	 * @param string $downloadUrl
	 */
	public function setDownloadUrl($downloadUrl){
		$this->downloadUrl = $downloadUrl;
	}

	/**
	 * Get size
	 */
	public function getSize(){
		return $this->size;
	}

	/**
	 * Set size
	 * 
	 * @param string $size
	 */
	public function setSize($size){
		$this->size = $size;
	}
	

}


?>