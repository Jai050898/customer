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

require_once('include/RestTransport.php');
require_once('include/ResponseEntities.php');


class Authentication{

	const HTTP_POST = 'POST';
	private $apiKey;
	private $hostName;
	private $restTransportInstance;
	private $response;

	public function __construct($hostname, $apikey, $transport){
		$this->hostName = $hostname;
		$this->apiKey = $apikey;
		$this->restTransportInstance = $transport;
	}

	public function getResponse(){
		return $this->response;
	}

	/**
	 * Gets user authentication token.
	 *
	 * @param email - required -
	 *            The email address of the user.
	 * @param password - required -
	 *            The password of the user.
	 * @return An Auth object. If the call is successful, the authentication token is set.
	 * If unsuccessful, the object contains the error code and message thrown by the server.
	 */
	public function login($email, $password){
		$parameters = array('email' => $email, 'password'=>$password);
		$urld = 'dpi/v1/auth';
		$headers = array('X-Api-Key'=> $this->apiKey);
		$this->response = $this->restTransportInstance->sendRequest($urld, $parameters, self::HTTP_POST);
		$responseBody = simplexml_load_string($this->response);
		$returnObject = new Auth();
		if ($responseBody === false){
			$errorCode = 'N/A';
			$errorMessage = 'The server has encountered an error, please try again.';
			$errorObject = new ErrorStatus($errorCode, $errorMessage);
			$returnObject->setErrorStatus($errorObject);
		}else{
			$errorStatus = $responseBody->errorStatus;
			if (empty($errorStatus)) {
				$authToken = (string) $responseBody->authToken;
				$returnObject ->setAuthToken($authToken);
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