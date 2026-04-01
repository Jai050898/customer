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

require_once('./include/RestTransport.php');
require_once('./include/ResponseEntities.php');


class StorageAPIs{
	const HTTP_POST = 'POST';
	const HTTP_GET = 'GET';
	const HTTP_PUT = 'PUT';
	const HTTP_DELETE = 'DELETE';
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
	 * Create New Folder
	 *
	 * @param name - required -
	 *            The name of the folder.
	 * @param parentId - optional -
	 *            The id of the folder. A value of 0 indicates the root folder. Default value: 0.
	 * @return The Folder object. If the operation was successful, the object contains the folder info, if not, the object
	 * 			contains the error code and message.
	 */
	public function createFolder($name, $parentid=''){
		$parameters = array('name' => $name);
		if ($parentid!==''){
			$parameters['parentId'] = $parentid;
		}
		$urld = 'dpi/v1/folder';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Folder();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setRevision((string) $responseBody->attributes()->revision);
				$returnObject->setId((string) $responseBody->attributes()->id);
				$returnObject->setCreatedOn((string) $responseBody->createdOn);
				$returnObject->setName((string) $responseBody->name);
				$returnObject->setParentId((string) $responseBody->parentid);
				$returnObject->setReadable((string) $responseBody->readable);
				$returnObject->setSize((string) $responseBody->size);
				$returnObject->setType((string) $responseBody->type);
				$returnObject->setUpdatedOn((string) $responseBody->updatedOn);
				$returnObject->setWritable((string) $responseBody->writeable);
				$fileCount = (string) $responseBody->fileCount;
				$returnObject->setFileCount($fileCount);
				$folderCount = (string) $responseBody->folderCount;
				$returnObject->setFolderCount($folderCount);
				$allFiles = $responseBody->files->children();
				$files = array();
				if (!empty($allFiles)){
					foreach($allFiles as $currentFile){
						$file = new File();
						$file->setRevision((string)$currentFile->attributes()->revision);
						$file->setId((string)$currentFile->attributes()->id);
						$file->setCreatedOn((string)$currentFile->createdOn);
						$file->setName((string)$currentFile->name);
						$file->setParentId((string)$currentFile->parentid);
						$file->setSize((string)$currentFile->size);
						array_push($files,$file);
					}
					$returnObject->setFiles($files);

				}
				$allFolders = $responseBody->folders->children();
				$folders = array();
				if (!empty($allFolders)){
					foreach($allFolders as $currentFolder){
						$folder = new Folder();
						$folder->setRevision((string)$currentFolder->attributes()->revision);
						$folder->setId((string)$currentFolder->attributes()->id);
						$folder->setCreatedOn((string)$currentFolder->createdOn);
						$folder->setFileCount((string)$currentFolder->fileCount);
						$folder->setFolderCount((string)$currentFolder->folderCount);
						$folder->setName((string)$currentFolder->name);
						$folder->setParentId((string)$currentFolder->parentid);
						$folder->setReadable((string)$currentFolder->readable);
						$folder->setSize((string)$currentFolder->size);
						$folder->setType((string)$currentFolder->type);
						$folder->setUpdatedOn((string)$currentFolder->updatedOn);
						$folder->setWritable((string)$currentFolder->writeable);
						array_push($folders,$folder);
					}
					$returnObject->setFolders($folders);
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
	 * Get Folder Info
	 *
	 * @param folderId - required -
	 *            The id of the folder.
	 * @param includeFiles - optional -
	 *            Default = true. If true, the API returns
	 *            info about all the files in the specified folder, at this folder level only.
	 * @param includeFolders - optional -
	 *            Default = true. If true, the API returns info about all
	 *            the sub folders, at this folder level only
	 * @return The Folder object. If the operation was successful, the object contains the folder info, if not, the object
	 * 			contains the error code and message.
	 */
	public function getFolderInfo($folderId, $includeFiles='', $includeFolders=''){
		$parameters = array();
		if ($includeFiles!==''){
			$parameters['includeFiles'] = $includeFiles;
		}
		if ($includeFolders!==''){
			$parameters['includeFolders'] = $includeFolders;
		}		
		$urld = 'dpi/v1/folder/'.$folderId;
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET,$this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Folder();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setRevision((string) $responseBody->attributes()->revision);
				$returnObject->setId((string) $responseBody->attributes()->id);
				$returnObject->setCreatedOn((string) $responseBody->createdOn);
				$returnObject->setName((string) $responseBody->name);
				$returnObject->setParentId((string) $responseBody->parentid);
				$returnObject->setReadable((string) $responseBody->readable);
				$returnObject->setSize((string) $responseBody->size);
				$returnObject->setType((string) $responseBody->type);
				$returnObject->setUpdatedOn((string) $responseBody->updatedOn);
				$returnObject->setWritable((string) $responseBody->writeable);
				$returnObject->setCurrentUsage((string) $responseBody->currentUsage);
				$returnObject->setStorageQuota((string) $responseBody->storageQuota);
				$fileCount = (string) $responseBody->fileCount;
				$returnObject->setFileCount($fileCount);
				$folderCount = (string) $responseBody->folderCount;
				$returnObject->setFolderCount($folderCount);
				if ($includeFiles){
					$filesTag = $responseBody->files;
					if (!empty($filesTag)){
						$allFiles = $responseBody->files->children();
						$files = array();
						if (!empty($allFiles)){
							foreach($allFiles as $currentFile){
								$file = new File();
								$file->setRevision((string)$currentFile->attributes()->revision);
								$file->setId((string)$currentFile->attributes()->id);
								$file->setCreatedOn((string)$currentFile->createdOn);
								$file->setName((string)$currentFile->name);
								$file->setParentId((string)$currentFile->parentid);
								$file->setSize((string)$currentFile->size);
								array_push($files,$file);
							}
							$returnObject->setFiles($files);
						}
					}
				}

				if ($includeFolders){
					$foldersTag = $responseBody->folders;
					if (!empty($foldersTag)){
						$allFolders = $responseBody->folders->children();
						$folders = array();
						if (!empty($allFolders)){
							foreach($allFolders as $currentFolder){
								$folder = new Folder();
								$folder->setRevision((string)$currentFolder->attributes()->revision);
								$folder->setId((string)$currentFolder->attributes()->id);
								$folder->setCreatedOn((string)$currentFolder->createdOn);
								$folder->setCurrentUsage((string)$currentFolder->currentUsage);
								$folder->setFileCount((string)$currentFolder->fileCount);
								$folder->setFolderCount((string)$currentFolder->folderCount);
								$folder->setName((string)$currentFolder->name);
								$folder->setParentId((string)$currentFolder->parentid);
								$folder->setReadable((string)$currentFolder->readable);
								$folder->setSize((string)$currentFolder->size);
								$folder->setType((string)$currentFolder->type);
								$folder->setUpdatedOn((string)$currentFolder->updatedOn);
								$folder->setWritable((string)$currentFolder->writeable);
								$folder->setOwnedByUser((string)$currentFolder->ownedByUser);
								array_push($folders,$folder);
							}
							$returnObject->setFolders($folders);
						}
					}
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
	 * Get File Info
	 *
	 * @param fileId - required -
	 *            The id of the file.
	 * @return The File object. If the operation was successful, the object contains the file info, if not,
	 * 			the Folder object containing the error code and message.
	 */
	public function getFileInfo($fileId){
		$urld = 'dpi/v1/folder/file/'.$fileId;
		$parameters = array();
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
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
				$returnObject->setRevision((string) $responseBody->attributes()->revision);
				$returnObject->setId((string) $responseBody->attributes()->id);
				$returnObject->setClickableDownloadUrl((string) $responseBody->clickableDownloadUrl);
				$returnObject->setCreatedOn((string) $responseBody->createdOn);
				$returnObject->setDownloadUrl((string) $responseBody->downloadUrl);
				$returnObject->setName((string) $responseBody->name);
				$returnObject->setOwnedByStorage((string) $responseBody->ownedByStorage);
				$returnObject->setParentId((string) $responseBody->parentid);
				$returnObject->setSize((string) $responseBody->size);
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
	 * Initiate file upload to a folder
	 *
	 * @return The Upload object with fileId and uploadUrl . If the operation was successful, the object contains the fileId and uploadUrl,
	 * 			 if not, the Upload object contains the error code and message.
	 */
	public function initUpload(){
		$urld = 'dpi/v1/folder/file/initUpload';
		$parameters = array();
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Upload();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setFileId((string) $responseBody->fileId);
				$returnObject->setUploadUrl((string) $responseBody->uploadUrl);
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
	 * Commit file upload to a folder
	 *
	 * @param fileId - required -
	 * 			  The id of the file.
	 * @param parentId - optional -
	 * 			  The id of the folder, where the file will be saved. A value of 0 indicates root folder.
	 * @return The File object. If the operation was successful, the object contains
	 * 			the file info, if not, the object contains the error code and message.
	 */
	public function commitFileUpload($fileId,$parentId=''){
		$parameters = array('fileId'=>$fileId);
		if ($parentId!==''){
			$parameters['parentId'] = $parentId;
		}
		$urld = 'dpi/v1/folder/file/commitUpload';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST, $this->authToken);
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
				$returnObject->setRevision((string) $responseBody->attributes()->revision);
				$returnObject->setId((string) $responseBody->attributes()->id);
				$returnObject->setCreatedOn((string) $responseBody->createdOn);
				$returnObject->setName((string) $responseBody->name);
				$returnObject->setOwnedByStorage((string) $responseBody->ownedByStorage);
				$returnObject->setParentId((string) $responseBody->parentid);
				$returnObject->setSize((string) $responseBody->size);
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
	 * Rename a file
	 *
	 * @param name - required -
	 * 		The new name for the file.
	 *
	 * @param fileId - required -
	 * 		The file id for the file to be renamed.
	 *
	 * @return The Rename object containing the status of the operation.
	 */
	public function renameFile($name,$fileId){
		$urld = 'dpi/v1/folder/file/'.$fileId.'/rename';
		$parameters = array('name' => $name, 'fileId'=>$fileId);
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_PUT, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Rename();
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
	 * Move a file
	 *
	 * @param fileId - required -
	 * 		The file id for the file to be moved.
	 *
	 * @param parentId - required -
	 *		Id of the parent where the file will be moved to.
	 * @return The Move object containing the status of the operation.
	 */
	public function moveFile($fileId,$parentId){
		$urld = 'dpi/v1/folder/file/'.$fileId.'/move';
		$parameters = array('fileId'=>$fileId,'parentId'=>$parentId);
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_PUT, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Move();
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
	 * Delete a file
	 *
	 * @param fileId - required -
	 * 		The file id for the file to be moved.
	 *
	 * @return The Delete object containing the status of the operation.
	 */
	public function deleteFile($fileId){
		$urld = 'dpi/v1/folder/file/'.$fileId;
		$parameters = array('fileId'=>$fileId);
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_DELETE, $this->authToken);
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
	 * Get Storage Revisions
	 *
	 * @param fromRevision - optional -
	 * 		Revision Number
	 *
	 * @return A workspaceChanges object is returned with a list of all the file and folder revisions.
	 */
	public function getStorageRevisions($fromRevision){
		$urld = 'dpi/v1/storage/revisions';
		if (strlen($fromRevision)==0){
			$parameters = array();
		}else{
			$parameters = array('fromRevision'=>$fromRevision);
		}
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new StorageChanges();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$returnObject->setCurrentUsage((string) $responseBody->currentUsage);
				$returnObject->setRevision((string) $responseBody->revision);
				$returnObject->setRevisionCount((string) $responseBody->revisionCount);
				$returnObject->setStatusDisplay((string) $responseBody->statusDisplay);
				$returnObject->setStorageQuota((string) $responseBody->storageQuota);
				$returnObject->setWorkspaceId((string) $responseBody->workspaceId);
				$files = array();
				$filesTag = (string) $responseBody->file->count();
				if (!empty($filesTag)){
					foreach ($responseBody->file as $currentFile){
						if ($currentFile->count()>0){
							$file = new File();

							$file->setCreatedOn((string) $currentFile->createdOn);
							$file->setDeleteStatus((string) $currentFile->deleteStatus);
							$file->setFileId((string) $currentFile->fileId);
							$file->setFileName((string) $currentFile->fileName);
							$file->setFolderId((string) $currentFile->folderId);
							$file->setLastUpdatedOn((string) $currentFile->lastUpdatedOn);
							$file->setRevision((string) $currentFile->revision);
							array_push($files, $file);
						}
					}
					$returnObject->setFiles($files);
				}
				$folders = array();
				$foldersTag = (string) $responseBody->folder->count();
				if (!empty($foldersTag)){
					foreach ($responseBody->folder as $currentFolder){
						if ($currentFolder->count()>0){
							$folder = new Folder();
							$folder->setCreatedOn((string) $currentFolder->createdOn);
							$folder->setDeletedStatus((string) $currentFolder->deletedStatus);
							$folder->setFolderId((string) $currentFolder->folderId);
							$folder->setFolderType((string) $currentFolder->folderType);
							$folder->setLastUpdatedOn((string) $currentFolder->lastUpdatedOn);
							$folder->setRevision((string) $currentFolder->revision);
							$folder->setShareInvitationPending((string) $currentFolder->shareInvitationPending);
							$folder->setSize((string) $currentFolder->size);																
							$permissions = array();
							$permissionsTag=(string) $currentFolder->permissions->count();
							if (!empty($permissionsTag)){
								foreach ($currentFolder->permissions as $currentPermission){
									$permission = new Permission();
									$permission->setWsPermissionName((string) $currentPermission->wsPermissionName);
									array_push($permissions, $permission);
								}
							}
							$folder->setPermissions($permissions);
							array_push($folders, $folder);
						}
					}
					$returnObject->setFolders($folders);
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
	 * Get File Revisions
	 *
	 * @param fileId - required -
	 *		The id of the file.
	 *
	 * @return 	A File object is return with all the revisions
	 * or the error code and message returned by the server.
	 */
	public function getFileRevisions($fileId){
		$urld = 'dpi/v1/folder/file/'.$fileId.'/revisions';
		$parameters = array();
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_GET, $this->authToken);
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
				$returnObject->setRevision((string) $responseBody->attributes()->revision);
				$returnObject->setId((string) $responseBody->attributes()->id);
				$returnObject->setStatus((string) $responseBody->status);
				$returnObject->setCreatedOn((string) $responseBody->createdOn);
				$returnObject->setName((string) $responseBody->name);
				$returnObject->setOwnedByStorage((string) $responseBody->ownedByStorage);
				$returnObject->setParentId((string) $responseBody->parentid);
				$returnObject->setRevisionCount((string) $responseBody->revisionCount);
				$returnObject->setSize((string) $responseBody->size);
				$revisions = array();
				$revisionsTag = (string) $responseBody->revisions->count();
				if ($revisionsTag>0){
					foreach ($responseBody->revisions->children() as $currentRevision){
						if ($currentRevision->count()>0){
							$revision = new Revision();
							$revision->setId((string) $currentRevision->attributes()->id);
							$revision->setCurrent((string) $currentRevision->current);
							$revision->setDownloadUrl((string) $currentRevision->downloadUrl);
							$revision->setSize((string) $currentRevision->size);
							array_push($revisions, $revision);
						}
					}
					$returnObject->setRevisions($revisions);
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
	 * Rename Folder
	 *
	 * @param name - required -
	 *            The new name of the folder.
	 * @param folderId - required -
	 *            The id of the folder.
	 * @return The Rename object which contains the status of the operation.
	 */
	public function renameFolder($name, $folderId){
		$parameters = array('name' => $name);
		$urld = 'dpi/v1/folder/'.$folderId.'/rename';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_PUT, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Rename();
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
	 * Move Folder
	 *
	 * @param folderId - required -
	 *            The id of the folder.
	 * @param parentId - required -
	 *            The id of the parent where the file should be moved.
	 * @return The Move object which contains the status of the operation.
	 */
	public function moveFolder($folderId, $parentId){
		$parameters = array('folderId' => $folderId, 'parentId'=>$parentId);
		$urld = 'dpi/v1/folder/'.$folderId.'/move';
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_PUT, $this->authToken);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Move();
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
	 * Delete Folder
	 *
	 * @param folderId - required -
	 *            The id of the folder.
	 * @return The Delete object which contains the status of the operation.
	 * 	 */
	public function deleteFolder($folderId){
		$parameters = array('folderId' => $folderId);
		$urld = 'dpi/v1/folder/'.$folderId;
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_DELETE, $this->authToken);
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
}
?>